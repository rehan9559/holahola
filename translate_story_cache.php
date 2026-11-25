<?php
session_start();
header('Content-Type: application/json; charset=utf-8');
require_once 'db.php';

if (!isset($_SESSION['user'])) {
    http_response_code(401);
    echo json_encode(['ok' => false, 'error' => 'Unauthorized']);
    exit;
}

// Configure your translation provider:
$translatorProvider = 'google';
$googleApiKey       = ''; // <-- MUST paste a valid Google Cloud Translation API key here
$libreTranslateUrl  = 'https://libretranslate.com/translate';

function translateChunkServer(string $text, string $targetLang, string $provider, string $googleKey, string $libreUrl): string {
    $trimmed = trim($text);
    if ($trimmed === '') return $text;

    if ($provider === 'google' && $googleKey !== '') {
        $url = 'https://translation.googleapis.com/language/translate/v2?key=' . urlencode($googleKey);
        $payload = json_encode([
            'q'      => $trimmed,
            'source' => 'en',
            'target' => $targetLang,
            'format' => 'text'
        ]);

        $ch = curl_init($url);
        curl_setopt_array($ch, [
            CURLOPT_POST           => true,
            CURLOPT_POSTFIELDS     => $payload,
            CURLOPT_HTTPHEADER     => ['Content-Type: application/json'],
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_TIMEOUT        => 20
        ]);
        $res = curl_exec($ch);
        curl_close($ch);

        if ($res) {
            $data = json_decode($res, true);
            if (!empty($data['data']['translations'][0]['translatedText'])) {
                return html_entity_decode($data['data']['translations'][0]['translatedText'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
            }
        }
        return $trimmed;
    }

    // LibreTranslate fallback
    $payload = json_encode([
        'q'      => $trimmed,
        'source' => 'en',
        'target' => $targetLang,
        'format' => 'text'
    ]);

    $ch = curl_init($libreUrl);
    curl_setopt_array($ch, [
        CURLOPT_POST           => true,
        CURLOPT_POSTFIELDS     => $payload,
        CURLOPT_HTTPHEADER     => ['Content-Type: application/json'],
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_TIMEOUT        => 20
    ]);
    $res = curl_exec($ch);
    curl_close($ch);

    if ($res) {
        $data = json_decode($res, true);
        if (!empty($data['translatedText'])) {
            return $data['translatedText'];
        }
    }

    return $trimmed;
}

function translateHtmlBlocksServer(string $html, string $targetLang, string $provider, string $googleKey, string $libreUrl): string {
    $dom = new DOMDocument('1.0', 'UTF-8');
    libxml_use_internal_errors(true);
    $dom->loadHTML('<?xml encoding="utf-8" ?>' . '<div id="root-wrap">' . $html . '</div>', LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
    libxml_clear_errors();

    $xpath = new DOMXPath($dom);
    $textNodes = $xpath->query('//text()[normalize-space(.) != ""]');

    foreach ($textNodes as $node) {
        $node->nodeValue = translateChunkServer($node->nodeValue, $targetLang, $provider, $googleKey, $libreUrl);
    }

    $root = $dom->getElementById('root-wrap');
    if (!$root) return $html;

    $output = '';
    foreach ($root->childNodes as $child) {
        $output .= $dom->saveHTML($child);
    }
    return $output;
}

$action    = $_POST['action'] ?? 'get';
$prophetId = preg_replace('/[^a-zA-Z0-9_-]/', '', $_POST['prophet_id'] ?? '');
$lang      = preg_replace('/[^a-zA-Z0-9_-]/', '', $_POST['lang'] ?? '');

if ($prophetId === '' || $lang === '' || $lang === 'en') {
    echo json_encode(['ok' => false, 'error' => 'Invalid parameters']);
    exit;
}

$stmt = $pdo->prepare("SELECT translated_html FROM story_translations WHERE prophet_id = ? AND lang = ? LIMIT 1");
$stmt->execute([$prophetId, $lang]);
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if ($action === 'get') {
    if ($row && !empty($row['translated_html'])) {
        echo json_encode(['ok' => true, 'cached' => true, 'html' => $row['translated_html']]);
        exit;
    }
    echo json_encode(['ok' => true, 'cached' => false]);
    exit;
}

if ($action === 'translate_and_save') {
    if ($row && !empty($row['translated_html'])) {
        echo json_encode(['ok' => true, 'cached' => true, 'html' => $row['translated_html']]);
        exit;
    }

    $sourceHtml = $_POST['source_html'] ?? '';
    if (trim($sourceHtml) === '') {
        echo json_encode(['ok' => false, 'error' => 'Missing source HTML']);
        exit;
    }

    $translatedHtml = translateHtmlBlocksServer($sourceHtml, $lang, $translatorProvider, $googleApiKey, $libreTranslateUrl);

    // Guard: Do NOT save if translation failed and text remained identical to English
    if (trim(strip_tags($translatedHtml)) === trim(strip_tags($sourceHtml))) {
        echo json_encode([
            'ok' => false,
            'error' => 'Translation provider returned untranslated text. Check your API key or LibreTranslate endpoint.'
        ]);
        exit;
    }

    $saveStmt = $pdo->prepare("
        INSERT INTO story_translations (prophet_id, lang, translated_html)
        VALUES (?, ?, ?)
        ON DUPLICATE KEY UPDATE translated_html = VALUES(translated_html)
    ");
    $saveStmt->execute([$prophetId, $lang, $translatedHtml]);

    echo json_encode(['ok' => true, 'cached' => false, 'saved' => true, 'html' => $translatedHtml]);
    exit;
}

echo json_encode(['ok' => false, 'error' => 'Unknown action']);