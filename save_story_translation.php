<?php
session_start();
require_once 'db.php';

if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit;
}

$message = '';
$error = '';

$priorityLanguages = [
    'te' => 'Telugu',
    'hi' => 'Hindi',
    'ur' => 'Urdu',
    'ar' => 'Arabic',
    'fr' => 'French',
    'es' => 'Spanish',
];

$prophetsList = [
    'adam' => 'Prophet Adam (AS)',
];

if (file_exists('qskm.php')) {
    $qskmContent = file_get_contents('qskm.php');
    if (preg_match_all("/'([a-z0-9_-]+)'\s*=>\s*\[\s*'id'\s*=>/i", $qskmContent, $matches)) {
        if (!empty($matches[1])) {
            $prophetsList = [];
            foreach (array_unique($matches[1]) as $pid) {
                $prophetsList[$pid] = ucfirst($pid);
            }
        }
    }
}

$selectedProphet = $_POST['prophet_id'] ?? ($_GET['prophet_id'] ?? array_key_first($prophetsList));
$selectedLang = strtolower(preg_replace('/[^a-zA-Z0-9_-]/', '', $_POST['lang'] ?? ($_GET['lang'] ?? 'te')));
$existingHtml = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $prophetId = preg_replace('/[^a-zA-Z0-9_-]/', '', $_POST['prophet_id'] ?? '');
    $lang = strtolower(preg_replace('/[^a-zA-Z0-9_-]/', '', $_POST['lang'] ?? ''));
    $rawInput = trim($_POST['translated_text'] ?? '');

    if ($prophetId === '' || $lang === '' || $lang === 'en') {
        $error = 'Please select a valid story and a non-English language code.';
    } elseif ($rawInput === '') {
        $error = 'Please paste the translated story text before saving.';
    } else {
        if (strpos($rawInput, '<') === false) {
            $lines = preg_split("/\r\n|\n|\r/", $rawInput);
            $paragraphs = [];
            foreach ($lines as $line) {
                $cleanLine = trim($line);
                if ($cleanLine !== '') {
                    $paragraphs[] = '<p>' . htmlspecialchars($cleanLine, ENT_QUOTES | ENT_HTML5, 'UTF-8') . '</p>';
                }
            }
            $htmlToSave = '<div class="story-translated">' . implode("\n", $paragraphs) . '</div>';
        } else {
            $htmlToSave = $rawInput;
        }

        $stmt = $pdo->prepare("
            INSERT INTO story_translations (prophet_id, lang, translated_html)
            VALUES (?, ?, ?)
            ON DUPLICATE KEY UPDATE translated_html = VALUES(translated_html)
        ");
        $stmt->execute([$prophetId, $lang, $htmlToSave]);

        $langLabel = $priorityLanguages[$lang] ?? strtoupper($lang);
        $message = "Saved {$langLabel} ({$lang}) for '{$prophetId}' into MySQL!";
        $selectedProphet = $prophetId;
        $selectedLang = $lang;
    }
}

$savedLangs = [];
if ($selectedProphet !== '') {
    $chkStmt = $pdo->prepare("SELECT lang FROM story_translations WHERE prophet_id = ?");
    $chkStmt->execute([$selectedProphet]);
    foreach ($chkStmt->fetchAll(PDO::FETCH_COLUMN) as $l) {
        $savedLangs[strtolower($l)] = true;
    }
}

if ($selectedProphet !== '' && $selectedLang !== '') {
    $loadStmt = $pdo->prepare("SELECT translated_html FROM story_translations WHERE prophet_id = ? AND lang = ? LIMIT 1");
    $loadStmt->execute([$selectedProphet, $selectedLang]);
    $row = $loadStmt->fetch(PDO::FETCH_ASSOC);
    if ($row && !empty($row['translated_html'])) {
        $existingHtml = $row['translated_html'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Save Story Translation</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 840px; margin: 30px auto; padding: 0 16px; background: #f8fafc; color: #0f172a; }
        .card { background: #fff; border: 1px solid #e2e8f0; border-radius: 10px; padding: 20px; box-shadow: 0 1px 3px rgba(0,0,0,0.06); }
        label { display: block; font-weight: bold; margin-top: 14px; margin-bottom: 6px; }
        select, input[type="text"], textarea { width: 100%; box-sizing: border-box; padding: 10px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 15px; }
        textarea { min-height: 260px; font-family: inherit; line-height: 1.5; }
        button.save-btn { margin-top: 16px; background: #0f766e; color: #fff; border: none; padding: 12px 22px; border-radius: 6px; font-size: 15px; font-weight: bold; cursor: pointer; }
        button.save-btn:hover { background: #115e59; }
        .lang-chips { display: flex; flex-wrap: wrap; gap: 8px; margin-top: 8px; }
        .chip { padding: 7px 12px; border-radius: 999px; border: 1px solid #cbd5e1; background: #f1f5f9; color: #0f172a; font-size: 13px; font-weight: bold; text-decoration: none; }
        .chip.active { background: #0f766e; color: #fff; border-color: #0f766e; }
        .chip.saved::after { content: " ✓"; }
        .msg { background: #ecfdf5; color: #065f46; border: 1px solid #a7f3d0; padding: 12px; border-radius: 6px; margin-bottom: 14px; }
        .err { background: #fef2f2; color: #991b1b; border: 1px solid #fecaca; padding: 12px; border-radius: 6px; margin-bottom: 14px; }
        .top-bar { display: flex; justify-content: space-between; align-items: center; margin-bottom: 14px; }
        a.back-link { color: #0f766e; text-decoration: none; font-weight: bold; }
    </style>
</head>
<body>
    <div class="top-bar">
        <h2>Save Story Translation to MySQL</h2>
        <a class="back-link" href="qskm.php">Back to Stories</a>
    </div>

    <div class="card">
        <?php if ($message !== ''): ?>
            <div class="msg"><?= htmlspecialchars($message) ?></div>
        <?php endif; ?>
        <?php if ($error !== ''): ?>
            <div class="err"><?= htmlspecialchars($error) ?></div>
        <?php endif; ?>

        <form method="POST">
            <label for="prophet_id">Prophet Story</label>
            <select name="prophet_id" id="prophet_id" onchange="window.location='?prophet_id='+encodeURIComponent(this.value)+'&lang='+encodeURIComponent(document.getElementById('lang').value)">
                <?php foreach ($prophetsList as $pid => $plabel): ?>
                    <option value="<?= htmlspecialchars($pid) ?>" <?= $pid === $selectedProphet ? 'selected' : '' ?>>
                        <?= htmlspecialchars($plabel) ?> (<?= htmlspecialchars($pid) ?>)
                    </option>
                <?php endforeach; ?>
            </select>

            <label>Priority Languages (✓ = already saved in MySQL for this story)</label>
            <div class="lang-chips">
                <?php foreach ($priorityLanguages as $code => $label):
                    $isSaved = isset($savedLangs[$code]);
                    $isActive = ($code === strtolower($selectedLang));
                    $cls = 'chip' . ($isActive ? ' active' : '') . ($isSaved ? ' saved' : '');
                ?>
                    <a class="<?= $cls ?>" href="?prophet_id=<?= urlencode($selectedProphet) ?>&lang=<?= urlencode($code) ?>">
                        <?= htmlspecialchars($label) ?> (<?= htmlspecialchars($code) ?>)
                    </a>
                <?php endforeach; ?>
            </div>

            <label for="lang">Language Code</label>
            <input type="text" name="lang" id="lang" value="<?= htmlspecialchars($selectedLang) ?>" required>

            <label for="translated_text">Translated Story Text or HTML</label>
            <textarea name="translated_text" id="translated_text" placeholder="Paste full translated story here..."><?= htmlspecialchars($existingHtml) ?></textarea>

            <button class="save-btn" type="submit">Save to Database</button>
        </form>
    </div>
</body>
</html>