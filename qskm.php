<?php
session_start();
require_once 'db.php';

// Guard: Redirect back to index.php if user is not logged in
if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit;
}

$user = $_SESSION['user'];

// Handle logout
if (isset($_GET['logout'])) {
    unset($_SESSION['user']);
    header("Location: index.php");
    exit;
}

// =========================================================================
// ALL 15 PROPHETIC STORIES HARDCODED DIRECTLY IN PHP (NO EXTERNAL TXT FILE)
// =========================================================================
$prophets = [
    'adam' => [
        'id'      => 'adam',
        'number'  => 1,
        'name'    => 'Prophet Adam (AS)',
        'arabic'  => 'آدَم',
        'era'     => 'Beginning of Humanity',
        'region'  => 'Paradise → Earth (Makkah / Mount Arafat)',
        'surah'   => 'Al-Baqarah (2:30-39), Al-A\'raf (7:11-25), Al-Hijr (15:26-44), Al-Ma\'idah (5:27-31)',
        'arabic_verse' => 'رَبَّنَا ظَلَمْنَا أَنفُسَنَا وَإِن لَّمْ تَغْفِرْ لَنَا وَتَرْحَمْنَا لَنَكُونَنَّ مِنَ الْخَاسِرِينَ',
        'verse_translation' => '"Our Lord! We have wronged ourselves. If You forgive us not and bestow not upon us Your Mercy, we shall certainly be of the losers." — (Surah Al-A\'raf, ayah 23)',
        'story'   => <<<'STORY'
ALLAH (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) TELLS THE ANGELS OF HIS NEW CREATION

In the heavens, Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) informed His angels that He had decided to place a Khalifah, or a vicegerent, which means a "successor" or "ruler" on earth who would reside there from generation to generation.

وَإِذۡ قَالَ رَبُّكَ لِلۡمَلَـٰٓئِكَةِ إِنِّي جَاعِلٞ فِي ٱلۡأَرۡضِ خَلِيفَةٗۖ قَالُوٓاْ أَتَجۡعَلُ فِيهَا مَن يُفۡسِدُ فِيهَا وَيَسۡفِكُ ٱلدِّمَآءَ وَنَحۡنُ نُسَبِّحُ بِحَمۡدِكَ وَنُقَدِّسُ لَكَۖ قَالَ إِنِّيٓ أَعۡلَمُ مَا لَا تَعۡلَمُونَ

Transliteration: Wa iz qaala rabbuka lil malaaa’ikati innee jaa’ilun fil ardi khaleefatan qaalooo ataj’alu feehaa mai yufsidu feehaa wa yasfikud dimaaa’a wa nahnu nusabbihu bihamdika wa nuqaddisu laka qaala inneee a’lamu maa laa ta’lamoon

English Translation: And [mention, O Muhammad], when your Lord said to the angels, “Indeed, I will make upon the earth a successive authority.” They said, “Will You place upon it one who causes corruption therein and sheds blood, while we declare Your praise and sanctify You?” Allah said, “Indeed, I know that which you do not know.” — (Surah Baqarah, 2:30)

In Islam, angels are considered special creations of Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ), distinct in their origin and purpose.

The Messenger of Allah (ﷺ) described angels as being "created from light," contrasting them with jinns, who were "created from a smokeless flame of fire" (Sahih Muslim 2996). The Qur'an also gives insight into their purpose as obedient servants of Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ), never disobeying or questioning his command, "...angels, who do not disobey Allah in whatever He commands them and who perform whatever they are commanded to." (Surah Tahrim, ayah 6)

This characteristic of being in complete submission to Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) is further shown in two other verses:

"…In fact, those angels are only His honored servants, who do not speak until He has spoken, only acting at His command." (Surah Al-Anbiya, 21:26-27)

"And to Allāh prostrates whatever is in the heavens and whatever is on the earth of creatures, and the angels [as well], and they are not arrogant. They fear their Lord above them, and they do what they are commanded." (Surah An-Nahl, 16:49-50)

It's important to highlight this because, in the ayah where Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) reveals His creation to the angels, they responded by asking, "Will You place upon it one who causes corruption therein and sheds blood, while we declare Your praise and sanctify You?"

This statement by the angels by Qur'an commentators is explained as saying it is neither a form of dispute, rebellion, or out of envy. Rather, this question is an expression of their wonderment, seeking a reason rather than doubting their Lord. Hence why, Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) responds, "Indeed, I know that which you do not know," and the verse continues to name how mankind would be bestowed with knowledge, to which the Angels then reply, “Glory be to You! We have no knowledge except what You have taught us. You are truly the All-Knowing, All-Wise." (Surah Baqarah, ayah 32)

CREATION OF ADAM عَلَيْهِ ٱلسَّلَامُ THE FIRST MAN

Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) then molded Adam (عَلَيْهِ ٱلسَّلَامُ) using clay gathered from various parts of the earth, reflecting the diverse complexions and physical characteristics of his descendants. This is corroborated by an authentic narration in Tirmidhi 2955, where The Messenger of Allah (ﷺ) said: "Indeed Allah Most High created Adam from a handful that He took from all of the earth. So the children of Adam come in according with the earth, some of them come red, and white and black, and between that, and the thin, the thick, the filthy, and the clean."

Furthermore, in Sahih Bukhari 3326, Prophet Muhammad (ﷺ) mentioned, "Allah created Adam, making him 60 cubits tall [...] And everyone who enters Paradise will be in the form of Adam." Some scholars interpret this to refer to his stature in Paradise, and upon being descended to Earth, he was given an appropriate height. Regardless, under the command of Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ), Adam (عَلَيْهِ ٱلسَّلَامُ) could've been 50ft or 100ft. Nothing is impossible for Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ). We are also told in the same hadith, "People have been decreasing in stature since Adam's creation."

In Sahih Muslim 2789, it is reported that Adam (عَلَيْهِ ٱلسَّلَامُ) was created after 'Asr on a Friday. Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) then made an announcement to the angels about the creation of man, "Indeed, I am going to create a human being from clay. So when I have proportioned him and breathed into him of My [created] soul, then fall down to him in prostration." (Surah Sad, ayat 71-72)

For forty years, the first man, fashioned from clay, remained a lifeless figure. During this time, angels passing by would experience a sense of awe and fear. Iblis, in particular, harbored envy towards Allah's new creation. He would often strike the clay figure of Adam (عَلَيْهِ ٱلسَّلَامُ), taunting him, saying, "You are nothing! If I gain dominion over you, I will destroy you; if you gain power over me, I will not obey you." Each blow produced a pottery-like sound.

This detail is mentioned in the Qur'an where Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) tells us, "He created man (Adam) from sounding clay like the clay of pottery." — (Surah Ar-Rahman 55:14)

ANGELS PROSTRATE BEFORE ADAM عَلَيْهِ ٱلسَّلَامُ

The time eventually came for the soul to be breathed into the first man. Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) issued the divine command to all the angels, “After I have created him and breathed into him of My spirit, fall you down, prostrating yourselves to him” (Surah As-Sad, ayah 72). With this, Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) breathed a soul into Adam (عَلَيْهِ ٱلسَّلَامُ), giving him life and marking the beginning of human existence.

When the soul reached him, Adam (عَلَيْهِ ٱلسَّلَامُ) sneezed, saying: “Alhamdulillah (All praise is due to Allah)!” So, he praised Allah with His permission. Then His Lord said to him: ‘May Allah have mercy upon you, O Adam” (Jami at-Tirmidhi 3367).

As commanded, all the angels fell down in prostration, obeying the command of Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ), "so the angels prostrated - all of them entirely, Except Iblees; he refused to be with those who prostrated." (Surah Al-Hijr, ayat 31-32). Now, in this ayah, it gives the impression that Iblis was an angel. However, this confusion is cleared in Surah Kahf, verse 50, where Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) says, "And [mention] when We said to the angels, “Prostrate to Adam,” and they prostrated, except for Iblees. He was of the jinn and departed from the command of his Lord." This is how Iblees was able to refuse Allah's command, he has freedom of will just as we humans do.

Allah سُبْحَٰنَهُۥ وَتَعَٰلَىٰ asked Iblees: “O Iblis! What is the matter with you that you did not join others in prostration?” — (Surah Al-Hijr 15:32)

Iblis, revealing his pride, refused to comply with Allah's command, declaring, "I am better than he. You created me from fire, and him You created from clay." — (Surah Al-A'raf, ayah 12)

This statement not only highlights his arrogance but serves as evidence that Iblees was from the jinn, as opposed to angels, who we know were created from light. Iblis further objected, “It is not for me to prostrate to a human You created from sounding clay molded from black mud.” — (Surah Al-Hijr 15:33)

Iblis's disdain for Adam, due to his self-proclaimed superiority, set the stage for his subsequent fall from grace, being one of Allah's most favored jinns to an accursed enemy.

Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) was angered by Iblees’ response: “So get out! You are truly cursed.” — (Surah Al-Hijr, ayah 34). Iblees then appealed to Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ): “My Lord! Then delay my end until the Day of their resurrection. My Lord, because You have put me in error, I will surely make [disobedience] attractive to them on earth, and I will mislead them all Except, among them, Your chosen servants." (Surah Al-Hijr, ayat 36, 39, 40)

“You are of those allowed respite (until the Day of Judgment),” Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) conceded, adding: “This is a path [of return] to Me [that is] straight. Indeed, My servants – no authority will you have over them, except those who follow you of the deviators. And indeed, Hell is the promised place for them all. It has seven gates; for every gate is of them a portion designated.” (Surah Al-Hijr, ayat 37-38, 41-44)

Newly endowed with the gift of life, Adam (عَلَيْهِ ٱلسَّلَامُ) found himself in the middle of an exchange between Iblis and his creator. A deep sense of love and admiration for Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) filled his heart. But, simultaneously, he was struck with awe seeing Iblees' blatant disobedience towards Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ). Adam (عَلَيْهِ ٱلسَّلَامُ) was confused by Iblees's hatred towards him without having any knowledge about him. It became clear to Adam (عَلَيْهِ ٱلسَّلَامُ) that this creature was consumed with pride and arrogance and recognized Iblees as the enemy.

Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) then instructed Adam (عَلَيْهِ ٱلسَّلَامُ) to go to a gathering of angels and greet them with: “As-salaamu alaikum (peace be upon you).” Upon doing so, the angels replied to Adam (عَلَيْهِ ٱلسَّلَامُ) with: “wa alaikum assalam wa rahmatullah (May the peace and mercy of Allah be with you too).”

When Adam (عَلَيْهِ ٱلسَّلَامُ) returned to his Creator, He said: “This is your greeting and the greeting of your children among each other.” (Jami at-Tirmidhi 3367)

ADAM عَلَيْهِ ٱلسَّلَامُ LEARNS THE NAMES OF EVERYTHING

Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) distinguished Adam (عَلَيْهِ ٱلسَّلَامُ), giving him unique attributes that set him apart from all other creations. Unlike the angels, Adam was granted free will, power of perception and reasoning, and a capacity for creativity. These qualities were given so that Adam (عَلَيْهِ ٱلسَّلَامُ) could reflect on his true identity, see the truth, and his reason for existence.

"And He taught Adam the names – all of them." — (Surah Al-Baqarah, ayah 31)

Now, what is meant by the names of everything? Some scholars have said he was given the knowledge about the proper names of all things, so he knew the names of the angels, his progeny, and the names of other species. Another opinion is that he learned the names of all regular things and their characteristics, like birds, humans, sky, water, trees, and so on. Another position is he was given knowledge of speech, Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) created the first language with all its nouns, verbs, and adjectives and gifted that knowledge to Adam (عَلَيْهِ ٱلسَّلَامُ) so he could communicate with eloquence.

He also instilled in Adam (عَلَيْهِ ٱلسَّلَامُ) a love for knowledge and a strong desire to impart knowledge to his offspring. When His creation had learned all that he needed to learn, Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) presented him before His angels. He first asked the angels, “Tell Me the names of these, if what you say is true?” — (Surah Al-Baqarah 2:31)

They responded, “Glory be to You! We have no knowledge except what You have taught us. You are truly the All-Knowing, All-Wise,” the angels replied, admitting their inability to do so. — (Surah Al-Baqarah, ayah 32)

Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) then turned to Adam (عَلَيْهِ ٱلسَّلَامُ) and instructed: “O’ Adam! Inform them of their names.”

As commanded, Adam (عَلَيْهِ ٱلسَّلَامُ) recited the names of everything to the amazement of the angels. It is also quite interesting here Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) says to the Angels, "tell me," but in commanding Adam (عَلَيْهِ ٱلسَّلَامُ), he says, "tell them," which is an expression that shows Adam (عَلَيْهِ ٱلسَّلَامُ) as a teacher and the angels taking on the role of a student. This highlights the degree of superiority in knowledge man has been given over angels.

Then Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) speaks to his knowledge, “Did I not tell you that I know the secrets of the heavens and the earth, and I know what you reveal and what you conceal?” — (Surah Al-Baqarah, ayah 33)

The angels recognized that Adam (عَلَيْهِ ٱلسَّلَامُ) possessed a breadth of knowledge not privy to them. This quality honored man and elevated his status above other creations. Adam’s (عَلَيْهِ ٱلسَّلَامُ) knowledge spanned the realm of worldly knowledge, knowledge of the Creator, and understanding His creations.

Eager to share and discuss his knowledge, Adam (عَلَيْهِ ٱلسَّلَامُ) often sought the company of the angels. However, the angels were primarily preoccupied with their worship and duties praising Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ). This often left Adam (عَلَيْهِ ٱلسَّلَامُ) in solitude, and he began to feel very lonely. So, Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) then decided to create a companion for Adam (عَلَيْهِ ٱلسَّلَامُ). This partner, fashioned from Adam's rib, was destined to provide him comfort and companionship.

THE CREATION OF EVE

One day, as Adam (عَلَيْهِ ٱلسَّلَامُ) awoke from his sleep, he found a human gazing intently at him with tender eyes.

“Who are you?” he asked the creation.

“A woman,” came the response.

“Why have you been created?” Adam (عَلَيْهِ ٱلسَّلَامُ) asked.

“So you can find tranquillity in me,” she responded.

The angels were in awe of this new creature, so they asked Adam (عَلَيْهِ ٱلسَّلَامُ), “What is her name, O’ Adam?”

He replied: “Eve.”

They then asked: “Why has she been named so?”

Adam (عَلَيْهِ ٱلسَّلَامُ) responded: “Because she was created from something living.”

While the Qur'an does not explicitly detail the creation story of Hawwa (Eve), there are some differences of opinion among scholars. Some traditions hold that Hawwa was created from Adam's (عَلَيْهِ ٱلسَّلَامُ) left rib; others argue that she, like Adam (عَلَيْهِ ٱلسَّلَامُ), were fashioned in the same way.

The Qur'an addresses our creation and does not distinguish between separate origins: "O mankind, fear your Lord, who created you from one soul and created from it its mate and dispersed from both of them many men and women. And fear Allāh, through whom you ask one another, and the wombs. Indeed, Allāh is ever, over you, an Observer." (Surah An-Nisa, ayah 1)

Additionally, Surah Al-Isra, ayah 189 mentions, "It is He who created you from one soul and created from it its mate that he might dwell in security with her. And when he [i.e., man] covers her, she carries a light burden [i.e., a pregnancy] and continues therein. And when it becomes heavy, they both invoke Allāh, their Lord, 'If You should give us a good [child], we will surely be among the grateful.'"

However, in one hadith in Sahih Bukhari 3331, narrated by Abu Huraira, Prophet Muhammad (ﷺ) said, "Treat women nicely, for a woman is created from a rib, and the most curved portion of the rib is its upper portion, so, if you should try to straighten it, it will break, but if you leave it as it is, it will remain crooked. So treat women nicely."

The scholars reject the literal interpretation of this hadith. It's similar to the verse where Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) says, “Man has been created from hastiness.” (Quran 21:37). This does not mean the substance a man is made from is hastiness. Rather, this ayah advises how the nature of man includes haste, which is an undesirable quality and a weakness.

Similarly, the hadith tries to teach through metaphor that a man should treat their spouse with respect and kindness. He should accept her uniqueness, just as a rib has a unique curvature to it. A man should accept this nature of a woman and avoid trying to reshape it as it may lead to harm, causing it "to break," meaning the relationship, bond, or even personal well-being.

THE FORBIDDEN TREE

Adam (عَلَيْهِ ٱلسَّلَامُ) and Hawwa lived a life of complete freedom in paradise. They were granted complete liberty to explore and roam Allah's beautiful gardens and enjoy all it had to offer. However, there was a singular prohibition Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) had given them. He warned both Adam and Hawwa not to approach a certain tree; if they did, it would be an act of transgression and disobedience.

Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) said in the Quran: “But come not near this tree or you both will be of the wrongdoers.” — (Surah Al-Baqarah, ayah 35)

This directive served as a test of their will and obedience in the otherwise unrestricted joys of paradise.

It was clear to both of them that eating from this specific tree was off-limits. However, as is often the nature of man, Adam (عَلَيْهِ ٱلسَّلَامُ) slowly forgot Allah's command. His willpower weakened, and his heart became easy to exploit. Seizing this vulnerable moment, Iblees saw an opportunity to demonstrate that humans were weaklings after all, and he, Iblees, was the superior being. He was resolute in his mission to lead humans away from the path of Allah's worship. And so, he used this one prohibition to enact his plan of deceit and misguidance.

He started whispering to him day after day; he wanted to bury a seed of doubt in Adam’s (عَلَيْهِ ٱلسَّلَامُ) mind. He would whisper to the couple, "Shall I guide you to the tree of immortality and the eternal kingdom?"

He would also say to them: "Your Lord has forbidden this tree to you only to prevent you from becoming angels or immortals." And he [Iblees] swore to them, “I am truly your sincere advisor." — (Surah Al-A'raf, ayat 20-21)

So, the pair were persuaded into disobeying Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ). Before he finished consuming the fruit of the forbidden tree, Adam (عَلَيْهِ ٱلسَّلَامُ) was filled with a sense of shame, sadness, and pain. With the single act of disobedience, both Adam (عَلَيْهِ ٱلسَّلَامُ) and Hawwa became aware of their nudity, and they frantically began to pluck leaves to cover themselves.

"O children of Adam, let not Shaitan tempt you as he removed your parents from Paradise, stripping them of their clothing to show them their private parts. Indeed, he sees you, he and his tribe, from where you do not see them. Indeed, We have made the devils allies to those who do not believe." (Surah Al-A'raf, ayah 27)

CONDEMNED TO EARTH

Adam (عَلَيْهِ ٱلسَّلَامُ) and Hawwa were summoned before their Lord, who asked: "Did I not forbid you from that tree and tell you that Satan is to you a clear enemy?" (Surah Al-A'raf ayah 22)

The pair was sorrowful and consumed by guilt. Upon realizing their mistake, they both turned to seek forgiveness. They pleaded:

رَبَّنَا ظَلَمۡنَآ أَنفُسَنَا وَإِن لَّمۡ تَغۡفِرۡ لَنَا وَتَرۡحَمۡنَا لَنَكُونَنَّ مِنَ ٱلۡخَٰسِرِينَ

Transliteration: Rabbanaa zalamnaaa anfusanaa wa-in lam taghfir lanaa wa tarhamnaa lanakoonanna minal khaasireen

English Translation: “Our Lord! We have wronged ourselves. If You forgive us not and bestow not upon us Your Mercy, we shall certainly be of the losers.” — (Surah Al-A'raf ayah 23)

It was indeed too late; Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) had already planned His sentence. He expelled Adam (عَلَيْهِ ٱلسَّلَامُ), Hawwa, and Iblees to earth, where He destined humans to be enemies with Iblees.

He said: “Descend as enemies to each other. You will find in the earth a residence and provision for your appointed stay. There you will live, there you will die, and from there you will be resurrected.” — (Surah Al-A'raf ayah 24)

LIFE ON EARTH

Adam (عَلَيْهِ ٱلسَّلَامُ) and Hawwa led a life of hardship on earth. Food did not come easy, unlike in their previous abode. They were compelled to work hard in order to sustain themselves on earth. He was burdened with searching for food, clothing, and shelter for his wife and children. He was also challenged with fighting wild animals who were wandering about in search of a full meal.

However, above all, the biggest burden that Adam (عَلَيْهِ ٱلسَّلَامُ) had to constantly battle was the whispers of Shaitan. Shaitan stuck to his word and continued to torment the humans with his evil whispers. Nonetheless, he remained resolute and proved himself to his Lord. It was vital that he thrived on earth and brought forth offspring who would remain steadfast in their assigned duty — to worship Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ).

ADAM عَلَيْهِ ٱلسَّلَامُ CHILDREN

The lonesome existence of Adam (عَلَيْهِ ٱلسَّلَامُ) and Hawwa on Earth soon changed with the arrival of their children. Their family began with the blessing of twins, Cain (Qabil) and his sister. As time passed, they welcomed another set of twins, Abel (Habil) and his sister.

The children grew, and the family enjoyed a humble life with Allah’s (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) ample blessings. Qabil cultivated the land, whereas Habil reared the cattle. Part of Adam (عَلَيْهِ ٱلسَّلَامُ) and Hawwa’s expulsion to earth was with the aim of populating the land with dutiful humans who worshipped Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ). Thus, when the children reached marriageable age, Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) revealed to Adam (عَلَيْهِ ٱلسَّلَامُ) to marry each son to the other’s twin sister. There was, after all, no other family in existence besides Adam’s (عَلَيْهِ ٱلسَّلَامُ) family.

Adam (عَلَيْهِ ٱلسَّلَامُ) did as Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) instructed. While Habil was ready to follow Allah’s (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) command, Qabil was not too pleased. Whilst Habil was known for his intelligence, obedience, and readiness to obey the will of Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ), Qabil was arrogant, selfish, and disobedient to his Lord. Qabil was unhappy with the command as, according to him, Habil’s twin sister was not as pleasing to the eye as his own. He defied Allah’s (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) command as he refused to accept his father’s advice.

Adam (عَلَيْهِ ٱلسَّلَامُ) was in a quandary. He was uncertain as to what needed to be done, so he called out to Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ), seeking His assistance. Thus, Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) commanded that each son offer a sacrifice in the name of Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ), and He would favor the son whose sacrifice he accepted.

While Habil offered his best lamb to Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ), Qabil offered his worst harvest. Therefore, naturally, Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) accepted Habil’s offer, whilst Qabil’s disobedience towards Allah’s (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) command and his insincerity in his offering caused his plea to be rejected.

Enraged, Qabil said to his brother, "I will kill you!" — (Surah Maidah, ayah 27)

Habil responded calmly, "Allah only accepts the offering of the sincerely devout. If you raise your hand to kill me, I will not raise mine to kill you, because I fear Allah — the Lord of all worlds. I want to let you bear your sin against me along with your other sins, then you will be one of those destined to the Fire. And that is the reward of the wrongdoers." — (Surah Al-Ma'idah 5:27-29)

Habil was principled in his response. He was not fazed by his brother's threats, but he made certain that he reminded his brother not to stray from the path of Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ).

THE FIRST MURDER

The hatred that Qabil had towards his brother outweighed all other forms of familial bonds and emotions. The fear of Allah’s (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) punishment also failed to arise in his mind.

As expected, Qabil did not heed his brother's warnings. He struck Habil with a stone and killed him in an instant. This was the first death and murder in the history of humankind. As time passed, and Habil did not return home, Adam (عَلَيْهِ ٱلسَّلَامُ) began worrying. He began to look for his son but found no trace. When he inquired about Habil’s whereabouts, Qabil stated that he was not his brother’s keeper nor protector.

It didn’t take Adam (عَلَيْهِ ٱلسَّلَامُ) long to realize that his beloved Habil was no more. Adam (عَلَيْهِ ٱلسَّلَامُ) was consumed with grief.

Having murdered his brother, Qabil was unsure what needed to be done with Habil’s body. He wandered all over, pondering how he could hide the body from his family.

As his anger slowly subsided, Qabil began to feel remorse for his brother and was overcome with guilt.

In a bid to retain the dignity of the deceased, Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) caused Qabil to witness the death and burial of two crows. Cain watched as the crow used its claws and beak to dig a hole in the earth, push the carcass into it, and cover it with sand. "Then Allāh sent a crow searching [i.e., scratching] in the ground to show him how to hide the disgrace of his brother. He said, 'O woe to me! Have I failed to be like this crow and hide the disgrace [i.e., body] of my brother?' And he became of the regretful." — (Surah Maidah, ayah 31)

Adam (عَلَيْهِ ٱلسَّلَامُ) lost both his sons and was overwhelmed with grief. Habil was murdered while Qabil was under the spell of the devil. He made du'a for his son and went on to carry out the duties expected of him. He continued to warn his children and grandchildren of Iblees and constantly reminded them to worship Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) and not be among those who disobeyed him.

ADAM عَلَيْهِ ٱلسَّلَامُ DEATH

One day, Adam (عَلَيْهِ ٱلسَّلَامُ), who was gravely ill, said to his children: "My children, indeed I feel an appetite for the fruits of Paradise."

Intent on fulfilling their father’s request, the children set out to gather the fruits of paradise. On their way, they met with some angels who carried with them Adam’s (عَلَيْهِ ٱلسَّلَامُ) shroud and other materials required for the preparation of a body for burial.

The angels instructed the children of Adam to hasten home as their father was about to meet his end soon. So, the children returned home with the angels. Upon arrival, the angels took Adam’s (عَلَيْهِ ٱلسَّلَامُ) soul. They prepared him for the funeral, wrapped him in the shroud, dug his grave, and laid him in it.

They told the children of Adam: "Children of Adam, this is your tradition at the time of death."

Following the death of Adam (عَلَيْهِ ٱلسَّلَامُ), his son Seth (عَلَيْهِ ٱلسَّلَامُ) succeeded him. He, too, was made a Prophet and was tasked with the duty of guiding people to the path of Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ).
STORY
    ],

    'nuh' => [
        'id'      => 'nuh',
        'number'  => 2,
        'name'    => 'Prophet Nuh (AS)',
        'arabic'  => 'نُوح',
        'era'     => '950 Years of Da\'wah',
        'region'  => 'Mesopotamia (Iraq) → Mount Judi',
        'surah'   => 'Surah Nuh (71), Surah Hud (11:25-49), Al-Mu\'minun (23:23-30)',
        'arabic_verse' => 'رَّبِّ اغْفِرْ لِي وَلِوَالِدَيَّ وَلِمَن دَخَلَ بَيْتِيَ مُؤْمِنًا وَلِلْمُؤْمِنِينَ وَالْمُؤْمِنَاتِ',
        'verse_translation' => '"My Lord, forgive me and my parents and whoever enters my house a believer and the believing men and believing women." — (Surah Nuh 71:28)',
        'story'   => <<<'STORY'
THE PROPHETIC TIMELINE OF PROPHET NUH (عَلَيْهِ ٱلسَّلَامُ)

There are two opinions on the Prophetic timeline of Prophet Nuh (عَلَيْهِ ٱلسَّلَامُ).

The first is the opinion of many Historians like Ibn Katheer, who wrote Prophet Nuh as coming after Prophet Idris; may peace be upon them.

However, some scholars believe that ayah 163 of Surah Nisa suggests he came first before Idrees:

“Indeed, We have revealed to you, [O Muhammad], as We revealed to Noah and the prophets after him...”

We present both views so you, as a student of knowledge, are aware. There isn't enough evidence to conclude with absolute certainty, nor is there any benefit in investigating this matter further. This piece is written with the perspective that Nuh (AS) came after Idris.

LIFE AFTER PROPHET IDRIS (عَلَيْهِ ٱلسَّلَامُ)

The Muslims were left stranded following the death of Prophet Idris (عَلَيْهِ ٱلسَّلَامُ). Since no other man from amongst them was chosen as a Prophet, people began to look to the pious companions of Idris for guidance.

They respected and followed these righteous men and consulted them whenever they faced a problem. Eventually, as time passed by, the pious men also passed, leaving the Muslims again with no leader for guidance.

They feared and were worried that they would stray from the path of Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ).

Satan, who watched on with shrewd eyes, approached the wailing men and women disguised as a man and whispered into their ears:

“If we make statues of these righteous men, it will be more pleasing to us in our worship and will remind us of Allah.”

The men agreed as they perceived no harm in erecting statues of their most pious men; that would surely help them remember Allah (ﷻ) and encourage them to do good.

Satan had successfully planted his corrupt seed.

He was patient for he knew that getting man to worship another was a slow process.

When that generation had passed, and the new generation of people arose, Satan whispered into the ears of the men:

“Your forefathers used to worship these idols. These statues brought them goodness.”

Thus, idolatry took root in the hearts of man.

PROPHET NUH'S CALL TO TAWHID

Centuries passed, and Allah decided to send a Prophet to guide the idolaters back to the truth. The Prophet chosen for this sacred task was Nuh (عَلَيْهِ ٱلسَّلَامُ) (the Judeo-Christian equivalent to the Prophet Noah).

Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) blessed his loyal disciple with eloquent speech and immense patience so that he may carry out his duty with success. So Prophet Nuh (عَلَيْهِ ٱلسَّلَامُ) began to preach to his people about the mysteries of the vast universe—he informed them about the night and the day, the stars and the moon, the plants and animals, and the heavens and the earth.

He explained to them that man was created by Allah to glorify and worship Him. Nuh then told them about the oneness of Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) — that the mysteries of the world were only proof of the existence of one true God, and that is none other than Allah the Most High. He explained to them that Satan had misled them into worshiping idols and warned them of a terrible punishment from Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) if they continued their idol worship.

The People of Prophet Nuh listened to him with great confusion and patience.

The most miserable and desperate amongst Nuh's people began to find hope and solace in the Prophet's words and gradually entered into the fold of Islam, whilst the affluent watched on with rage.

They said to Nuh: “We see you but a man like ourselves.”

Prophet Nuh (عَلَيْهِ ٱلسَّلَامُ) explained to them that he was certainly a human being, and Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) had explicitly chosen a human messenger as the earth was predominantly occupied by humans after all. And if angels occupied the earth, Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) would have surely sent an angelic messenger to convey his message.

One day, the wealthy masters of the city approached Prophet Nuh (AS) and said to him:

“Listen Nuh, if you want us to believe in you, then dismiss your believers. They are meek and poor, while we are elite and rich; no faith can include us both.”

Prophet Nuh (عَلَيْهِ ٱلسَّلَامُ) replied to them:

"O my people! I ask for no wealth for it, my reward is from none but Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ). I am not going to drive away those who have believed. Surely, they are going to meet their Lord, but I see that you are ignorant people. O my people! Who will help me against Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ), if I drove them away? Will you not then give a thought? And I do not say to you that with me are the Treasures of Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) nor that I know the unseen, nor do I say that I am an angel, and I do not say of those whom your eyes look down upon that Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) will not bestow any good on them. Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) knows what is in their inner selves. In that case, I should, indeed be one of the wrongdoers.” — Surah Hud, Ayat 29-31

The idolaters were furious. They had tolerated Nuh's (عَلَيْهِ ٱلسَّلَامُ) incessant preaching and arguments for far too long.

They angrily challenged Nuh (عَلَيْهِ ٱلسَّلَامُ):

“O Nuh (عَلَيْهِ ٱلسَّلَامُ)! You have disputed with us and have prolonged the dispute with us, now bring upon us what you threaten us with, if you are of the truthful.” — Surah Hud Ayah 32

Nuh (عَلَيْهِ ٱلسَّلَامُ) replied:

“Only Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) will bring the punishment on you, if He wills, and then you will not be able to escape. And my advice will not profit you, even if I wish to give you counsel, if Allah's Will is to keep you astray. He is your Lord! And to Him you shall return.” — Surah Hud, Ayat 33-34

The disbelievers, who had lost all patience with Nuh (عَلَيْهِ ٱلسَّلَامُ), resorted to hurl insults at the Messenger of Allah in attempt to frighten him from preaching the religion of Islam.

They said: “Verily, we see you in plain error.”

Nuh (عَلَيْهِ ٱلسَّلَامُ) patiently replied:

“O my people! There is no error in me, but I am a Messenger from the Lord of the worlds! I convey unto you the Messages of my Lord and give sincere advice to you. And I know from Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) what you know not.”

Despite the continuous mockery and rejection, Prophet Nuh (AS) was persistent in calling his people to Islam for nine hundred and fifty years. But every generation that came into existence rejected Nuh (AS) as their fathers did.

PROPHET NUH (عَلَيْهِ ٱلسَّلَامُ) MAKES SUPPLICATION

Each child that reached an age of understanding was clearly warned against the teachings of Prophet Nuh (عَلَيْهِ ٱلسَّلَامُ). Whenever the Prophet approached them, they ran away from him. They found every excuse to escape from the presence of Nuh (عَلَيْهِ ٱلسَّلَامُ).

Before long, Prophet Nuh (عَلَيْهِ ٱلسَّلَامُ) realized that the number of disbelievers was rapidly rising while the number of believers remained unchanged. He was very upset for his people and feared a terrible predicament for them, but he was left with no choice.

So Prophet Nuh (عَلَيْهِ ٱلسَّلَامُ) prayed to Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ):

“My Lord! They have disobeyed me, and followed one whose wealth and children give them no increase but only loss. They have plotted a mighty plot. They have said: 'you shall not leave your gods, nor shall you leave Wadd, Suwa, Yaghuth, Ya'uq, nor Nasr (names of the idols)'. Indeed they have led many astray. O Allah! Grant no increase to the disbelievers.”

Allah (ﷻ) soon revealed to Prophet Nuh (AS) that no other man from his people would enter Islam thereafter. Sad and frustrated, Prophet Nuh (AS) replied to Allah (ﷻ):

“My Lord! Leave not one of the disbelievers on the earth. If you leave them, they will mislead Your slaves and they will beget none but wicked disbelievers.”

Prophet Nuh's (AS) prayer was accepted by his Lord.

BUILDING THE ARK

He instructed Prophet Nuh (AS):

“And construct the ark under Our Eyes and with Our Inspiration and address Me not on behalf of those who did wrong.”

Outside the city limits, away from the sea, Prophet Nuh (عَلَيْهِ ٱلسَّلَامُ) began to build the ark through day and night with the support and guidance of the Angels. The construction of the ark continued amidst the constant mockery of the people.

They jeered at Prophet Nuh (عَلَيْهِ ٱلسَّلَامُ), saying:

“O Nuh! Does carpentry appeal to you more than prophethood? Why are you building an ark so far from the sea? Are you going to drag it to the water or is the wind going to carry it for you?”

Prophet Nuh (عَلَيْهِ ٱلسَّلَامُ) answered:

“You will come to know who will be put to shame and suffering.”

Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) then instructed Nuh (عَلَيْهِ ٱلسَّلَامُ) that when the oven at his home begins to gush forth water, collect the believers and board the ark for it was the first sign of the beginning of the floods that would destroy the disbelievers. Not long after, the terrible day dawned as water began gushing forth from the oven at Prophet Nuh's house. Nuh knew it was time to board the ark. Along with the believers, Nuh also took with him pairs of animals, birds, and insects.

The people who witnessed Nuh's peculiar behavior laughed at him again, saying:

“Nuh must have gone out of his head! What is he going to do with the animals?”

THE FLOOD

Soon after, heavy rains began to pour down from the angry skies, and water began to rise through every crack on earth. It didn't take long before the oceans completely conquered the once-dry land.

Prophet Nuh (عَلَيْهِ ٱلسَّلَامُ) witnessed the terrible calamity that had befallen his people. He knew the disbelievers had no escape from the wrath of Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ). Amongst the disbelievers was Prophet Nuh's wife and son, who refused to board his ark.

Nuh (عَلَيْهِ ٱلسَّلَامُ) desperately called out to his son:

“O my son! Embark with us and be not among the disbelievers.”

The ignorant son of Nuh (عَلَيْهِ ٱلسَّلَامُ) replied:

“I will get to the mountain; it will save me from the water.”

Nuh (عَلَيْهِ ٱلسَّلَامُ) answered:

“This day there is no saviour from the Decree of Allah except him on whom He has mercy.”

Before long, Nuh's son was engulfed by the angry waves, never to be seen again.

When every single disbeliever had perished, Allah (ﷻ) ordered the skies and the earth:

“O Earth! Swallow up your water, and O sky! Withhold your rain.”

The skies immediately cleared, and the sun shined brightly on the land.

Meanwhile, Nuh's ark peacefully landed on Mount Judi.

Allah (ﷻ) instructed His Prophet:

“O Nuh! Come down (from the ship) with peace from Us and blessings on you and on the people who are with you.”

As instructed, Prophet Nuh (عَلَيْهِ ٱلسَّلَامُ), along with the believers, got off the ark, releasing the rescued animals, birds and insects across the green land.

Prophet Nuh (عَلَيْهِ ٱلسَّلَامُ) placed his forehead on the ground, prostrated to his Lord, and thanked Him immensely for His mercy and blessings. The believers were grateful to Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) for safeguarding them from the terrible ordeal and observed a day of fasting as an act of gratitude to Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ).

VERSES FROM THE QUR'AN THAT MENTION PROPHET NOAH (عَلَيْهِ ٱلسَّلَامُ)

There are a total of 47 different instances where Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) directly refers to Prophet Noah (عَلَيْهِ ٱلسَّلَامُ) in the Qur'an. Here we provide reference to all for you to explore:

Imran (3:33) • Anam (6:84) • Araf (7:59) • Araf (7:69) • Taubah (9:70) • Yunus (10:71) • Hud (11:25) • Hud (11:36) • Hud (11:89) • Ibrahim (14:9) • Isra (17:3) • Isra (17:17) • Maryam (19:58) • Anbiya (21:76) • Hajj (22:42) • Muminun (23:23) • Furqan (25:37) • Shuara (26:105) • Ankabut (29:14) • Saffat (37:75) • Sad (38:12) • Ghafir (40:5) • Ghafir (40:31) • Shura (42:13) • Qaf (50:12) • Dhariyat (51:46) • Najm (53:52) • Qamar (54:9) • Hadid (57:26) • Tahrim (66:10) • Araf (7:64) • Yunus (10:73) • Hud (11:37) • Hud (11:40) • Muminun (23:27) • Ankabut (29:15) • Qamar (54:13) • Haqqah (69:11) • Nuh (71:1) • Araf (7:64) • Yunus (10:73) • Hud (11:40) • Furqan (25:37) • Ankabut (29:120) • Ankabut (29:14) • Qamar (54:11) • Nuh (71:25)
STORY
    ],

    'hud' => [
        'id'      => 'hud',
        'number'  => 3,
        'name'    => 'Prophet Hud (AS)',
        'arabic'  => 'هُود',
        'era'     => 'Tribe of \'Ad (Iram)',
        'region'  => 'Al-Ahqaf (Southern Arabia / Yemen & Oman) → Hadramaut',
        'surah'   => 'Surah Hud (11:50-60), Al-A\'raf (7:65-72), Al-Ahqaf (46:21-28), Al-Haqqah (69:6-8)',
        'arabic_verse' => 'وَيَا قَوْمِ اسْتَغْفِرُوا رَبَّكُمْ ثُمَّ تُوبُوا إِلَيْهِ يُرْسِلِ السَّمَاءَ عَلَيْكُم مِّدْرَارًا',
        'verse_translation' => '"O my people, ask forgiveness of your Lord and then repent to Him. He will send [rain from] the sky upon you in showers and increase you in strength [added] to your strength." — (Surah Hud 11:52)',
        'story'   => <<<'STORY'
TRIBE OF 'AD

Throughout history, Allah has entrusted thousands of Prophets with the task of guiding mankind toward the right path. Simultaneously, He has held nations accountable for their disobedience and refusal to worship Him despite receiving clear warnings. This is the story of the people of Ad, the successors of Prophet Nuh (عَلَيْهِ ٱلسَّلَامُ), considered to be one of the ancient tribes of Arabia.

The Ad tribe, as mentioned in Surah Al-Ahqaf of the Qur'an, inhabited the sandy hills of the southern part of the Arabian Peninsula, which is a region between modern-day Yemen and Oman.

The Qur'an also mentions in Surah Al-Fajr ayat 6-8:
"Have you not considered how your Lord dealt with 'Aad – [With] Iram – who had lofty pillars, The likes of whom had never been created in the land?"

From the Tafseer of Maududi:
"The ancient Aad are called Aad-Iram for the reason that they belonged to that branch of the Semitic race which descended from Iram, son of Shem, son of Noah (peace be upon him)."

DESCRIPTION OF 'AD

The people of Ad were renowned for their towering stature and physical fitness. They had a flair for building lofty constructions that surpassed that of neighboring tribes and nations, leading to an aura of arrogance and ignorance. And the few who ruled over the tribe were unjust, their power unchecked and unquestioned.

The Ad were not completely ignorant of the existence of Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ). They worshipped Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) alongside several other deities whom they considered gods. They crafted idols representing these gods and worshipped them alongside Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ). As a result, Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) chose to send a Prophet to guide them toward monotheism.

The Prophet assigned this crucial task was Prophet Hud, who belonged to the same tribe. Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) states in the Qur'an: "And to the 'Aad [We sent] their brother Hud. He said, 'O my people, worship Allah; you have no deity other than Him. Then will you not fear Him?'" — (Surah Al-A’raf ayah 65)

Prophet Hud (may peace be upon him) called his people to worship Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) exclusively and renounce all other forms of worship. He implored his people to question the rationality of worshiping gods created using their own hands. Prophet Hud (عَلَيْهِ ٱلسَّلَامُ) reminded them it was Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) who gave them life and death, and it was Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) alone who blessed them with their skills and, hence, was the only one deserving of their undivided and sincere worship.

"And to 'Aad [We sent] their brother Hud. He said: 'O my people, worship Allah; you have no deity other than Him. You are not but inventors [of falsehood]. O my people, I do not ask you for it any reward. My reward is only from the one who created me. Then will you not reason?'" — (Surah Hud, ayat 50-51)

The tribe chiefs, refusing to believe him, ridiculed Prophet Hud, branding him a fool and a liar.

"Said the eminent ones who disbelieved among his people, 'Indeed, we see you in foolishness, and indeed, we think you are of the liars.'" — (Surah Al-A'raf ayah 66)

Prophet Hud (عَلَيْهِ ٱلسَّلَامُ) replied:
"O my people, there is not foolishness in me, but I am a messenger from the Lord of the worlds. I convey to you the messages of my Lord, and I am to you a trustworthy adviser. Then do you wonder that there has come to you a reminder from your Lord through a man from among you, that he may warn you? And remember when He made you successors after the people of Noah and increased you in stature extensively. So remember the favors of Allah that you might succeed." — (Surah Al-A’raf ayat 67-69)

DAY OF JUDGEMENT EXPLAINED BY PROPHET HUD (عَلَيْهِ ٱلسَّلَامُ)

Despite the people's resistance to his message, Prophet Hud (عَلَيْهِ ٱلسَّلَامُ) remained patient and resolute. He continued to urge his people to understand the error in their ways and encouraged them to devote themselves solely to the worship of Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ). He warned them about the Day of Reckoning, where Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) would resurrect each soul and hold them accountable for their actions and beliefs here on earth.

However, the polytheists were unwilling to listen, consumed by their materialistic pursuits and blinded by their ignorance.

They scoffed at their brother and asked:
"O Hud! Do you say that after we die and turn into dust, we will be resurrected?"

Prophet Hud (عَلَيْهِ ٱلسَّلَامُ) replied:
"Yes, you will come back on the Day of Judgment, and each of you will be asked about what you did."

They sneered, whispering:
"How strange Hud's claims are!"

Hud (عَلَيْهِ ٱلسَّلَامُ) was asked several questions about the Last Day. He patiently answered his people while explaining that the belief in the Day of Judgment was crucial to the belief in Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ). He further reassured them that while all their deeds would be accounted for on this day, Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) was the most forgiving, offering pardon to those who sincerely repented.

They listened to all that Prophet Hud (عَلَيْهِ ٱلسَّلَامُ) had to say, but still, the Ad adamantly refused to accept the truth. They held firm to the belief that there was no life after death and were convinced that after passing, human remains would decay and become one with the soil.

They said:
And the eminent among his people who disbelieved and denied the meeting of the Hereafter while We had given them luxury in the worldly life said, "This is not but a man like yourselves. He eats of that from which you eat and drinks of what you drink. And if you should obey a man like yourselves, indeed, you would then be losers. Does he promise you that when you have died and become dust and bones that you will be brought forth [once more]? How far, how far, is that which you are promised. Life is not but our worldly life – we die and live, but we will not be resurrected. He is not but a man who has invented a lie about Allah, and we will not believe him." — (Surah Al-Muminun, ayat 33-38)

Therefore, as disbelief persisted among them, Hud (عَلَيْهِ ٱلسَّلَامُ) ceased his preaching to the disbelievers and turned to Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) in prayer, seeking His assistance. "My Lord! Help me, because they have denied me," he called. — (Surah Al-Mu’minun ayah 39)

And Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) responded:
“Soon they will be truly regretful.” — (Surah Al-Muminun, ayat 40)

THE DESTRUCTION OF 'AD

Prophet Hud (عَلَيْهِ ٱلسَّلَامُ) warned the disbelievers of a terrifying punishment. He knew that the Almighty would protect him and the handful of believers. Prophet Hud (عَلَيْهِ ٱلسَّلَامُ) was certain that if Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) were intent on the destruction of the disbelievers, there would be no redemption.

The Ad remained unafraid, unbothered, and oblivious to the plight that awaited them. They continued to challenge Prophet Hud (عَلَيْهِ ٱلسَّلَامُ), confident that their goals and lofty towers would shield them against Allah's (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) sentence.

True to Allah's (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) warning, a devastating drought swept across the land. The skies remained clear and cloudless while the sun scorched the desert and all that dwelled within.

Prophet Hud (عَلَيْهِ ٱلسَّلَامُ) spoke to his people once again, saying:
"O my people, ask forgiveness of your Lord and then repent to Him. He will send [rain from] the sky upon you in showers and increase you in strength [added] to your strength. And do not turn away, [being] criminals." — (Surah Al-Hud, ayah 52)

However, they argued:
"O Hud, you have not brought us clear evidence, and we are not ones to leave our gods on your say-so. Nor are we believers in you. We only say that some of our gods have possessed you with evil." — (Surah Al-Hud, ayah 53-54)

Prophet Hud then replied:
"Indeed I take Allah as my witness, and you too to be my witnesses that I have nothing to do with your associating with Allah other than Him in His divinity. So conspire against me, all of you, and give me no respite. I have put my trust in Allah, Who is my Lord and your Lord. There is no moving creature which He does not hold by its forelock. Surely, My Lord is on the straight path. If you, then, turn away (from the truth), know that I have delivered the message with which I was sent to you. Now my Lord will set up another people in place of you and you shall in no way be able to harm Him. Surely, my Lord keeps a watch over everything.” — (Surah Al-Hud, ayah 54-57)

Yet, their hearts remained veiled by pride as they said:
"...Then bring us what you promise us, if you should be of the truthful." — (Surah Al-Ahqaf, ayah 22)

Prophet Hud (عَلَيْهِ ٱلسَّلَامُ) responded:
"Knowledge [of its time] is only with Allah, and I convey to you that with which I was sent; but I see you [to be] a people behaving ignorantly." — (Surah Al-Ahqaf, ayah 23)

Before long, the trees started to wither, turning yellow and perishing under the scorching sun.

As dense clouds approached the valley, the Ad rejoiced:
"This is a cloud bringing us rain."

But Prophet Hud (عَلَيْهِ ٱلسَّلَامُ) replied:
"No, it is what you sought to hasten: a fierce wind carrying a painful punishment."

The weather swiftly shifted from scorching heat to a stinging cold, bringing with it a ferocious gale that uprooted trees and everything in its wake. The towering structures, once a source of pride for the Ad, were powerless against the relentless wind. It shredded through their flesh and obliterated the disbelievers, leaving no trace of their existence. The storm raged on for eight days and seven nights, wiping out the Ad completely.

Only Prophet Hud (عَلَيْهِ ٱلسَّلَامُ) and his followers were saved from the ordeal. They migrated to Hadramaut, where they lived peacefully worshiping Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ).

Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) recounts in the Quran:
"And as for 'Aad, they were destroyed by a screaming, violent wind which Allah imposed upon them for seven nights and eight days in succession, so you would see the people therein fallen as if they were hollow trunks of palm trees." — (Surah Al-Haqqah, ayah 6-7)

Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) also says:
"Destroying everything by command of its Lord. And they became so that nothing was seen [of them] except their dwellings. Thus do We recompense the criminal people. And We had certainly established them in such as We have not established you, and We made for them hearing and vision and hearts. But their hearing and vision and hearts availed them not from anything [of the punishment] when they were [continually] rejecting the signs of Allah, and they were enveloped by what they used to ridicule. And We have already destroyed what surrounds you of [those] cities, and We have diversified the signs [or verses] that perhaps they might return [from disbelief]. Then why did those they took besides Allah as deities by which to approach [Him] not aid them? But they had strayed from them. And that was their falsehood and what they were inventing." — (Surah Al-Ahqaf, ayat 25-28)
STORY
    ],

    'ibrahim' => [
        'id'      => 'ibrahim',
        'number'  => 4,
        'name'    => 'Prophet Ibrahim (AS)',
        'arabic'  => 'إِبْرَاهِيم',
        'era'     => 'Khalilullah (Friend of Allah)',
        'region'  => 'Babylonia (Iraq) → Ur & Haran → Palestine → Egypt → Makkah',
        'surah'   => 'Surah Ibrahim (14), Al-Anbiya (21:51-73), Al-An\'am (6:74-83), Al-Baqarah (2:124-132, 258-260)',
        'arabic_verse' => 'قُلْنَا يَا نَارُ كُونِي بَرْدًا وَسَلَامًا عَلَىٰ إِبْرَاهِيمَ',
        'verse_translation' => '"O fire! Be cool and safe for Ibrahim!" — (Surah Al-Anbiya, Ayah 69)',
        'story'   => <<<'STORY'
THE STORY OF PROPHET IBRAHIM (عَلَيْهِ ٱلسَّلَامُ)

Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) reveals to Prophet Muhammad (ﷺ):

إِنَّ إِبۡرَٰهِيمَ كَانَ أُمَّةٗ قَانِتٗا لِّلَّهِ حَنِيفٗا وَلَمۡ يَكُ مِنَ ٱلۡمُشۡرِكِينَ شَاكِرٗا لِّأَنۡعُمِهِۚ ٱجۡتَبَىٰهُ وَهَدَىٰهُ إِلَىٰ صِرَٰطٖ مُّسۡتَقِيمٖ وَءَاتَيۡنَٰهُ فِي ٱلدُّنۡيَا حَسَنَةٗۖ وَإِنَّهُۥ فِي ٱلۡأٓخِرَةِ لَمِنَ ٱلصَّـٰلِحِينَ ثُمَّ أَوۡحَيۡنَآ إِلَيۡكَ أَنِ ٱتَّبِعۡ مِلَّةَ إِبۡرَٰهِيمَ حَنِيفٗاۖ وَمَا كَانَ مِنَ ٱلۡمُشۡرِكِينَ

Transliteration: Inna Ibraaheema kaana ummatan qaanital lillaahi Haneefanw wa lam yakuminal mushrikeen (120) Shaakiral li an’umih; ijtabaahu wa hadaahu ilaa Siraatim Muustaqeem (121) Wa aatainaahu fid dunyaa hasanah; wa innahoo fil Aakhirati laminas saaliheen (122) Summma awhainaa ilaika anit tabi’ Millata Ibraaheema haneefaa; wa maa kaana minal mushrikeen (123)

English Translation: "Indeed, Ibrahim was a whole ummah by himself devout to Allah, unswervingly upright, and he was not of the associators, (Those who associate others with Allah) (He was) thankful for Allah’s Graces. He selected him, and He guided him to a straight Path. And We gave him good in this world, and in the Hereafter he shall be of the righteous. Then, We have inspired you (O Muhammad ﷺ saying): “Follow the way of Ibrahim with exclusive devotion to Allah, and he was not of the Mushrikun (polytheists, idolaters, disbelievers, etc.)" — (Surah Nahl, 16:120-123)

In the ancient land of Babylonia (present-day Iraq), a boy named Ibrahim (may peace be upon him) was born to carry forth the message of the prophets of the past. The people continued in their idol-worshipping ways. They worshipped the Gods they had created, hand-carved out of stone and wood.

It may have been easier for them to worship something they had fashioned because Gods created by their own hands gave them the power to choose from right or wrong.

Ibrahim was unlike the other children; he was not prone to falling victim to their idol-worshipping ways. He was a truth seeker, and his creator made him intelligent. As mentioned in Surah Al-Anbiya, ayah 51: "Surely We had bestowed wisdom upon Ibrahim even earlier, and We knew him well."

Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) knew of Ibrahim's (عَلَيْهِ ٱلسَّلَامُ) potential and trusted him with the mission of prophethood. He sent Ibrahim (عَلَيْهِ ٱلسَّلَامُ) to help guide the people and teach them about tawhid - this is the concept that there is only one creator and ruler of the universe, and that is Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ). Only He is worthy of praise and worship, and He has no equal or partner.

Choosing the path to be both a seeker and a speaker of truth, as Prophet Ibrahim (عَلَيْهِ ٱلسَّلَامُ) did, often comes with carrying the weight of being rather unpopular. This was the very cause of abuse and neglect Prophet Ibrahim (عَلَيْهِ ٱلسَّلَامُ) experienced from a young age in his own family. See, Ibrahim (عَلَيْهِ ٱلسَّلَامُ) was born into an atypical family that not only worshipped idols but crafted them. He was used to seeing his father sculpt these meticulous idols with peculiar features.

One day, he was overcome with curiosity; Ibrahim (عَلَيْهِ ٱلسَّلَامُ) asked his father about the statues he made. His father replied that they were statues of the gods.

This response left a young Ibrahim (عَلَيْهِ ٱلسَّلَامُ) deeply bothered. He loved his father yet struggled to understand how people could rationalize praying to idle stone and wood, which they knew were mere creations of their hands.

One day, Ibrahim's (عَلَيْهِ ٱلسَّلَامُ) father became angry with him when he discovered his son playing while seated on the back of an idol. He reprimanded Ibrahim (عَلَيْهِ ٱلسَّلَامُ) and warned him against disrespecting the idols.

Ibrahim (عَلَيْهِ ٱلسَّلَامُ) then took the opportunity to ask:
"What is this statue, father? It has big ears, bigger than ours!"

His father replied:
"It is Mardukh, the god of gods, son. These big ears symbolize his deep knowledge."

Ibrahim (عَلَيْهِ ٱلسَّلَامُ), who was only seven years old at the time, laughed at the absurdity of his father's response, for he knew better.

SIDEBAR – WHO WAS PROPHET IBRAHIM'S (AS) FATHER?

There are differing opinions regarding who Prophet Ibrahim's (عَلَيْهِ السَّلَامُ) father was.

In the Qur'an, it refers to a man named Azar as Prophet Ibrahim's (عَلَيْهِ السَّلَامُ) father:
And [mention, O Muhammad], when Abraham said to his father Azar, "Do you take idols as deities? Indeed, I see you and your people to be in manifest error."

This perspective is also reflected in the hadith of Sahih al-Bukhari 3350; Abu Huraira recalls the Prophet (ﷺ) referring to Ibrahim's father as Azar. However, a group of early scholars (including Ibn Abbas) held that Tarakh was the name of Ibrahim's father.

This name, Tarakh, draws a parallel with the biblical account of Terah. To reconcile the name provided in the Qur'an, it's believed Azar was a title recognized by the locals over that Allah (سُبْحَانَهُ وَتَعَالَى) chose to refer to him by his proper original name.

Shiites believe that the line of Prophethood is pure and free from polytheism and, therefore, rejects the idea of Azar being his biological father. Instead, the Arabic word "Ab," which is used in the Qur'an, does not necessarily mean a biological father but is also used to refer to a paternal uncle. So, they believe that his father died before his birth, and his paternal uncle raised him. However, the most literal meaning and view of Qur'an commentators like Tabari, Ibn Kathir, and Qurtubi say Azar was Ibrahim's father and an idolater. Regardless of the historical account, it does not change our understanding of Prophet Ibrahim's (عَلَيْهِ السَّلَامُ) story.

PROPHET IBRAHIM'S DISDAIN FOR IDOLS

Ibrahim’s father hoped his son would join the priesthood and revere the idols as he grew older. But as Ibrahim (عَلَيْهِ ٱلسَّلَامُ) grew, his aversion towards idol worship also grew. He frequented temples with his father and was vexed by the sight of numerous idols of various shapes and sizes.

People were prostrating to these idols, wailing and pleading to help them. What was once a funny joke soon began to get under his skin and anger him more and more. Ibrahim (عَلَيْهِ ٱلسَّلَامُ) pondered how the statues, who were idle and could not eat, drink, or speak, could help people in need. He saw the idols for what they were; he knew his father created them, then sold them to the people who, seconds later, would be prostrating to them, asking for all kinds of things.

He said to his father:
"Do you take idols as deities? Indeed, I see you and your people to be in manifest error." — (Surah Al-An’am, ayah 74)

DISCOVERING ALLAH THE ALMIGHTY

Saddened by the plight of his people, Ibrahim (عَلَيْهِ ٱلسَّلَامُ) set out for some alone time to process his thoughts. He walked in the dark until he arrived at a cave in a mountain. He rested himself against a wall and stared at the expanse of the sky above.

Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) says in the Quran:

وَكَذَٰلِكَ نُرِيٓ إِبۡرَٰهِيمَ مَلَكُوتَ ٱلسَّمَٰوَٰتِ وَٱلۡأَرۡضِ وَلِيَكُونَ مِنَ ٱلۡمُوقِنِينَ

Transliteration: Wa kazaalika nureee Ibraaheema malakootas samaawaati wal ardi wa liyakoona minal mooqineen

English Translation: "We also showed Abraham the wonders of the heavens and the earth, so he would be sure in faith." — (Surah Al-An'am, ayah 75)

Prophet Ibrahim (عَلَيْهِ ٱلسَّلَامُ) then addressed his people who worshipped these celestial bodies as being divine.

When the night closed in, he saw a star and observed:
"This is my Lord!"

But when the star set, Ibrahim said:
"I do not love things that set." — (Surah Al-An'am, ayah 75)

He then saw the moon rising and commented:
"This one is my Lord!"

But as the moon disappeared, Ibrahim (عَلَيْهِ ٱلسَّلَامُ) said:
"If my Lord does not guide me, I will certainly be one of the misguided people." — (Surah Al-An'am, ayah 77)

He then witnessed the sun and said:
"This is my Lord. This is the greatest of all." Then when it went down, he said: "O my people! Most certainly, I am quit of those whom you associate with Allah in His divinity." — (Surah Al-An'am, ayah 78)

Many commentators of the Qur'an interpret Prophet Ibrahim's (عَلَيْهِ ٱلسَّلَامُ) dialogue not as acceptance of these celestial bodies as divine but rather as a strategic argument against whatever astrological signs they fancied.

He logically demonstrates the ephemeral nature of all existing things except for the eternal oneness of Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ), who is responsible for nourishing and sustaining everything in every moment.

He explained to them that while the sun, moon, and stars appeared and disappeared from time to time, Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) was always present and never lost sight of his creations.

He says:
"Indeed, I have turned my face toward He who created the heavens and the earth, inclining toward truth, and I am not of those who associate others with Allah." — (Surah Al-A'nam, ayah 79)

The people did not confirm nor deny, but they continued in their argument, saying:
“We found our fathers following a certain way and religion, and we will indeed follow their footsteps.” — (Surah Az-Zukhruf, ayah 23)

“Are you arguing with me about Allah while He has guided me?” Ibrahim (عَلَيْهِ ٱلسَّلَامُ) asked, “I am not afraid of whatever idols you associate with Him — none can harm me unless my Lord so wills. My Lord encompasses everything in His knowledge. Will you not be mindful? And how should I fear your associate-gods, while you have no fear in associating others with Allah — a practice He has never authorized? Which side has more right to security? Tell me if you really know!” — (Surah Al-An’am, ayah 80-81)

From this debate, we learn of the prophetic wisdom bestowed upon Prophet Ibrahim (عَلَيْهِ ٱلسَّلَامُ) and the realization of the oneness of Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ).

The Qur'an offers a reminder:
"And of His Signs are the night and the day, and the sun and the moon. Do not prostrate yourselves before the sun, nor before the moon, but prostrate yourselves before Allah Who created them, if it is Him that you serve." — (Surah Fussilat, ayah 37)

His dawah towards those inclined to astrological signs was clever. He did not just deny; he accepted their view but then logically deconstructed their beliefs. This presentation style would help any rational mind understand the point he was trying to make.

It was now time for Ibrahim (عَلَيْهِ ٱلسَّلَامُ) to urge the worshippers of statues to see the error of their ways and guide them to the rightful path. Ibrahim (عَلَيْهِ ٱلسَّلَامُ) resolved to enlighten his father first as a dutiful son.

In Surah Maryam Ayat 42-45:
"[Mention] when he said to his father, 'O my father, why do you worship that which does not hear and does not see and will not benefit you at all? O my father, indeed there has come to me of knowledge that which has not come to you, so follow me; I will guide you to an even path. O my father, do not worship Satan. Indeed, Satan has ever been, to the Most Merciful, disobedient. O my father, indeed I fear that there will touch you a punishment from the Most Merciful so you would be to Satan a companion [in Hellfire].'"

His father became furious at Ibrahim (عَلَيْهِ ٱلسَّلَامُ). He anticipated that his son would join the priesthood, but he blatantly challenged their gods here.

It's a sad reality to face because Ibrahim (عَلَيْهِ ٱلسَّلَامُ) deeply cared for his father, and his love shows through these verses. He remained dutiful, repeatedly calling out to his father with the affectionate phrase, "Ya abati" - "Oh, father."

This phrase not only signifies respect and love but also a close bond. Despite his deep affection, Ibrahim (عَلَيْهِ ٱلسَّلَامُ) found himself in a difficult position; he had to speak truthfully out of concern for his father's welfare in the hereafter. He worried his father might reject his words and be among those whom Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) would punish.

Despite his attempt to garner fatherly love, his father's response was bold and harsh:
"Ibrahim, have you turned away from my gods? If you do not give this up, I shall stone you to death. Now begone from me forever." — (Surah Maryam, ayah 46)

One can only imagine how heavy his heart felt at that moment. Tears likely fell down his cheeks, feeling betrayed, yet he calmly says:
"Peace be upon you. I shall seek pardon for you from my Lord. My Lord has always been kind to Me." — (Surah Maryam, ayah 47)

Ultimately, Ibrahim (عَلَيْهِ ٱلسَّلَامُ) understood a profound truth: one cannot change another's heart or actions; we can only control our response. In the face of his father's rejection, he chose the path of compassion and faith. He committed to making du'a, seeking forgiveness for his father from Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ), whose mercy knows no bounds. With a heavy heart, Ibrahim (عَلَيْهِ ٱلسَّلَامُ) walked away, now disowned, yet carrying a light of hope and unshakeable belief within him.

He carried on preaching about Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) to his townsfolk. He would not stand by and witness his people fall into Satan's trap by continuing to prostrate to idols that could only bring forth severe punishment from Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ).

"Can they (the idols) hear you when you call upon them? Or can they benefit or harm you?" Ibrahim (عَلَيْهِ ٱلسَّلَامُ) asked the townsfolk people. — (Surah Ash-Shu’ara, ayat 72-73)

As expected, the people hastened to defend their beliefs and gods. They again reasoned that they were aware that the idols were lifeless but that they had observed their forefathers worshipping them and followed in their footsteps. They justified this was enough proof of their belief in the idols.

Ibrahim (عَلَيْهِ ٱلسَّلَامُ) said:
"Have you considered what you have been worshiping — you and your ancestors? They are all enemies to me, except the Lord of all worlds. He is the One Who created me, and He alone guides me. He is the One Who provides me with food and drink. And He alone heals me when I am sick. And He is the One Who will cause me to die, and then bring me back to life. And He is the One Who, I hope, will forgive my flaws on Judgment Day." — (Surah Ash-Shu’ara, ayat 75-82)

The people were angered after being told that their forefathers had been wrong. “Are you condemning our gods and our forefathers?” their voices a mix of disbelief and outrage.

They then pressed further:
"Have you come to us with truth, or are you of those who jest?” — (Surah Al-Anbiya, Ayah 55)

Prophet Ibrahim (عَلَيْهِ ٱلسَّلَامُ) showed no fear and responded:
“[No], rather, your Lord is the Lord of the heavens and the earth who created them, and I, to that, am of those who testify. And [I swear] by Allah, I will surely plan against your idols after you have turned and gone away.” — (Surah Al-Anbiya, Ayat 56-57)

Prophet Ibrahim (عَلَيْهِ ٱلسَّلَامُ) realized he could not convince them through reasoning alone, and so he devised an alternative plan and planted the seed in their minds: “I have already condemned them; if they had any power they would have harmed me by now!”

Despite Ibrahim’s (عَلَيْهِ ٱلسَّلَامُ) preaching, the people were stubborn and clung to their idol worship. As he left the town, a resolve strengthened within him; he was not one to concede defeat in the face of steadfast ignorance.

PROPHET IBRAHIM'S (عَلَيْهِ ٱلسَّلَامُ) SECOND APPEAL

He knew that a festival was due to take place in a neighboring town, and no one of his village would refrain from taking part. This was his opportunity to show the townspeople the truth about the idols they fervently worshiped.

When Ibrahim (عَلَيْهِ ٱلسَّلَامُ) was certain that everyone had left town, he stealthily advanced towards the temple carrying a sharp axe with him to execute his plan.

When he entered the temple, he caught sight of the various idols made of wood and stone that were worshiped by the townsfolk. He also noticed that food had been placed before the idols as offerings by the people.

As referenced in Surah As-Saffat, Ayah 91, he mockingly asked the idol:
"Will you not eat of the offering before you?"
The idol, as expected, remained silent.

He then asked the other sculptures:
"What is the matter with you, why do you not speak?" — (Surah As-Saffat, ayah 92)

"So he made them into fragments, except a large one among them, that they might return to it [and question]." — (Surah Al-Anbiya, ayah 58)

He saved the biggest idol of them all and hung his axe on its shoulder. He then patiently awaited the reaction of his townsfolk.

Upon their return, the people learned that their temple had been vandalized. When they arrived at the temple, they discovered their revered gods smashed with pieces strewn about.

Outraged, they began drawing names of those who could have had a hand in the heinous act.
"Who has done this to our gods? He must indeed be some man of impiety!" — (Surah Al-Anbiya, ayah 59)

Some said:
"We heard a youth talk of them: He is called Ibrahim." — (Surah Al-Anbiya, ayah 60)

Ibrahim (عَلَيْهِ ٱلسَّلَامُ) had, after all, on numerous occasions questioned the veracity of their idol worship and openly renounced and challenged their gods. Hence, Ibrahim (عَلَيْهِ ٱلسَّلَامُ) was their prime suspect.

"Bring him before the eyes of the people so that they may witness his trial," the idolators demanded. — (Surah Al-Anbiya, ayah 61)

Ibrahim (عَلَيْهِ ٱلسَّلَامُ) knew he would be summoned for trial, but he was not afraid. He already knew how to outsmart the villagers to show them they were on the wrong path. Ibrahim (عَلَيْهِ ٱلسَّلَامُ) also knew that if harm were to befall him, it would have to be with Allah’s (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) permission.

They asked:
"Ibrahim, are you he who has done this to our gods?" — (Surah Al-Anbiya, ayah 62)

He replied sarcastically:
"No, this one — the biggest of them—did it! So, ask them if they can talk!" — (Surah Al-Anbiya, ayah 63)

As mentioned in Tazkirul Quran:
"This showed that sometimes indirect speech is more effective than direct speech." So they returned to [blaming] themselves and said [to each other], "Indeed, you are the wrongdoers." (Surah Al-Anbiya, ayah 64)

But arrogance once again clouded their minds. They couldn't admit that they were blinded; hence, they reversed themselves and argued with Ibrahim (عَلَيْهِ ٱلسَّلَامُ) again: "You have already known that these do not speak!" (Surah Al-Anbiya, ayah 65)

Ibrahim (عَلَيْهِ ٱلسَّلَامُ) then rebuked his people: "Do you then worship — instead of Allah — what can neither benefit nor harm you in any way? Shame on you and whatever you worship instead of Allah! Do you not have any sense?" (Surah Al-Anbiya, ayat 66-67)

At this point, Ibrahim (عَلَيْهِ ٱلسَّلَامُ) was beyond redemption. The villagers couldn't let him get away with such insolence and blasphemy. He had not only destroyed their idols but exposed their foolish beliefs. So they came up with the worst and most painful penalty for him.

"Burn him and support your gods – if you are to act," they concluded. — (Surah Al-Anbiya, ayah 68)

Thus, the whole town sentenced Ibrahim (عَلَيْهِ ٱلسَّلَامُ) to a public burning at the stake.

THE BURNING

For days, the townspeople gathered firewood in preparation for the biggest fire they could imagine. It was reported that the sick vowed to donate as much firewood as they could find if they were cured.

With anger seething in their hearts, they dug a deep pit into which they gathered their firewood. They also set up a catapult that would cast Ibrahim (عَلَيْهِ ٱلسَّلَامُ) directly into the fire.

Soon, the pit was set ablaze. The magnitude of the fire was such that the flames reached the sky. The townsfolk gathered to witness the historic event from a safe distance.

As planned, Ibrahim (عَلَيْهِ ٱلسَّلَامُ) was bound and placed on the catapult when the chief priest signaled to cast the infidel into the fire.

Angel Jibreel arrived and asked him:
"O Ibrahim, do you wish for anything?"

Ibrahim (عَلَيْهِ ٱلسَّلَامُ) was unwavering — he needed no one's help other than his Lord's. The smoldering fire suffocating those in the vicinity did not ignite any fear in him.

“Nothing from you,” Ibrahim (عَلَيْهِ ٱلسَّلَامُ) responded to the Angel.

The catapult was shot, and Ibrahim (عَلَيْهِ السَّلَامُ) was cast into the center of the fire.

Allah (سُبْحَانَهُ وَتَعَالَى) ordered:
"O fire! Be cool and safe for Ibrahim!" — (Surah Al-Anbiya, Ayah 69)

As commanded, the flames cooled down for Allah’s (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) disciple. The burning pit became a resting place for him. The townspeople watched on, assuming that Ibrahim (عَلَيْهِ ٱلسَّلَامُ) was being burnt alive by the flames.

Ibrahim (عَلَيْهِ ٱلسَّلَامُ) sat amid the fire and glorified and praised Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ). He had nothing but love for his Lord (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ), who had saved him from his people.

The fire raged on for a long time, but the people held on, curious to see what would remain of the one who had destroyed and insulted their gods.

When the fire eventually burned out, they were stunned to witness Ibrahim (عَلَيْهِ السَّلَامُ) walking out of the pit untouched by the flames.

While the soot from the fire blackened the onlookers' faces, Ibrahim's (عَلَيْهِ ٱلسَّلَامُ) face remained bright. The people cried out in astonishment.

Allah revealed in the Quran:
“They had sought to harm him, but We made them the worst losers.” — (Surah Al-Anbiya, ayah 70)

The incident was clear proof to the polytheists that they were in the wrong, but their rage held them back from acknowledging their errors and instead increased their anger towards Ibrahim (عَلَيْهِ ٱلسَّلَامُ). At the same time, many began following Ibrahim (عَلَيْهِ ٱلسَّلَامُ), although they kept their faith a secret for fear of harm or even death.

PROPHET IBRAHIM (عَلَيْهِ ٱلسَّلَامُ) DEBATES KING NAMRUD

The news of Ibrahim's (عَلَيْهِ ٱلسَّلَامُ) miraculous escape from the fire reached King Namrud. He was greatly displeased as the incident threatened his position as a self-proclaimed God. He was not prepared to lose to an ordinary human like Ibrahim (عَلَيْهِ ٱلسَّلَامُ).

So he summoned Ibrahim (عَلَيْهِ ٱلسَّلَامُ) to the palace.

The King queried Ibrahim (عَلَيْهِ ٱلسَّلَامُ) about his god.
"My Lord is the one who gives life and causes death," Ibrahim said.

The King retorted:
"I give life and cause death."

Ibrahim (عَلَيْهِ ٱلسَّلَامُ) then said:
"Indeed, Allah brings up the sun from the east, so bring it up from the west."

So the disbeliever was overwhelmed [by astonishment], and Allah does not guide the wrongdoing people.

"Allah causes the sun to rise from the east. So make it rise from the west," Ibrahim (عَلَيْهِ ٱلسَّلَامُ) challenged.

So, the disbelievers were utterly defeated. And Allah guides not the people who are Zalimun (wrongdoers, etc.). — (Surah Al-Baqarah, Ayah 258)

Prophet Ibrahim (عَلَيْهِ ٱلسَّلَامُ) preached to his people, imploring them to understand that their gods were false and that Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) was the absolute God. Despite his newfound fame, no matter what he told them, the polytheists were stuck in their ways.

All the pain he endured, all the sacrifice, miracles performed, and still support among his people remained elusive. His father disowned him, his community threatened him, and years of da'wah fell on deaf ears. His path seemed to be one of profound solitude, yet his reliance on Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) never wavered and was sufficient for him.

In time, amidst the sea of dismissal, two souls emerged, drawn to the truth in his message: Sarah, who would become his cherished wife and a pillar of support, and Lut, his nephew, who was destined to become a Prophet himself.

PROPHET IBRAHIM (عَلَيْهِ ٱلسَّلَامُ) EMIGRATES

With no one heeding his call, Ibrahim (عَلَيْهِ ٱلسَّلَامُ) decided to preach his religion elsewhere for the sake of his Lord.

"And Lot believed him. [Ibrahim] said, 'Indeed, I will emigrate to [the service of] my Lord. Indeed, He is the Exalted in Might, the Wise.'" — (Surah Ankabut, Ayat 26)

He left his town with Sarah and Prophet Lut (عَلَيْهِ ٱلسَّلَامُ). The trio traveled to a city named Ur, then to Haran, and then to Palestine. After preaching in Palestine, they traveled to Egypt.

In the hadith, it is also told that one day, while Ibrahim (عَلَيْهِ ٱلسَّلَامُ) and Sarah were traveling, they passed by the territory of a tyrant.

A man informed the tyrant: "This man (Ibrahim) is accompanied by a charming lady."

So the tyrant approached Ibrahim (عَلَيْهِ ٱلسَّلَامُ) and inquired about Sarah.
"Who is this lady?" he asked.

Ibrahim replied:
"She is my sister."

Ibrahim (عَلَيْهِ ٱلسَّلَامُ) hurried to Sarah and explained to her:
"O Sarah! There are no believers on the surface of the earth except you and me. This man asked me about you and I told him that you are my sister, so don't contradict my statement."

The tyrant summoned Sarah. When she went to him, he attempted to take hold of her hand, which caused his hand to stiffen. Perplexed, he asked Sarah:
"Pray to Allah for me, and I shall not harm you."

So Sarah prayed to Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ), and the tyrant was cured.

But the tyrant did not honor his promise and attempted to take hold of Sarah's hand once again, at which point his hand became stiffer than before.

He once again implored Sarah to pray for his cure:
"Pray to Allah for me, and I will not harm you."

Sarah asked Allah again, and he was cured.

He then summoned the guard who had brought her and said:
"You have not brought me a human being but a devil."

The tyrant then gave Hagar as a girl servant to Sarah.

Sarah returned to find Ibrahim (عَلَيْهِ ٱلسَّلَامُ) praying. She told him:
"Allah has spoiled the evil plot of the infidel and given me Hajar for service." (Sahih al-Bukhari 3358)

IBRAHIM'S OFFSPRING

The Quran and Hadith also speak of Ibrahim’s (عَلَيْهِ ٱلسَّلَامُ) offspring.

Religious texts reveal that Ibrahim's wife, Sarah, was infertile for many years. As they continued their life of preaching, Sarah grappled with a deep sense of loneliness, stemming partly from her inability to bear a child. She saw the love Ibrahim (عَلَيْهِ ٱلسَّلَامُ) had for his nephew and was saddened that she couldn't provide him with a child of their own.

Prophet Ibrahim (عَلَيْهِ ٱلسَّلَامُ) also began to worry in his old age that there would be no one to carry forth his legacy. So, unselfishly, Sarah offered her girl servant Hagar to her husband in marriage.

Before long, Hagar gave birth to Ishmael, who went on to serve as a Prophet (عَلَيْهِ ٱلسَّلَامُ) of Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ).

Ishmael is considered the father of the Arab nations, and all are his descendants.

Abu Huraira concluded the hadith by telling his listeners:
"That (Hagar) was their mother, O Bani Ma-is-Sama (i.e., the Arabs)."

Ishmael was not the only child that Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) blessed Ibrahim (عَلَيْهِ ٱلسَّلَامُ) with.

One day, when Ibrahim (عَلَيْهِ ٱلسَّلَامُ) and Sarah were very old and white-haired, they had three visitors. As was customary for Arabs at the time, Ibrahim (عَلَيْهِ ٱلسَّلَامُ) invited the three men for a meal.

"Who are they?" Sarah asked her husband.

"I do not know any of them," he answered, "What food have we got?"

"Half a sheep," she replied.

"Half a sheep! Slaughter a fat calf for them; they are strangers and guests," he ordered.

So the servant prepared a fat, roasted calf for the guests. Ibrahim (عَلَيْهِ ٱلسَّلَامُ) invited the guests to help themselves with the meal. But, before long, he observed that their hands did not reach for the food. He became fearful and thought that the visitors had arrived to harm them.

The angels then gave the couple glad tidings of the birth of their second son, Ishaq (عَلَيْهِ ٱلسَّلَامُ), and future grandson Yaqub (عَلَيْهِ ٱلسَّلَامُ).

Sarah was astonished:
"Oh, my! How can I have a child in this old age, and my husband here is an old man?" she asked the angels. (Surah Al-Hud, ayah 72)

They responded:
"Are you astonished by Allah's decree? May Allah's mercy and blessings be upon you, O people of this house. Indeed, He is Praiseworthy, All-Glorious." — (Surah Al-Hud, ayah 73)

The story of Prophet Ibrahim (عَلَيْهِ ٱلسَّلَامُ) extends through the lives of his sons, Prophets Ishmael (عَلَيْهِ ٱلسَّلَامُ) and Ishaaq (عَلَيْهِ ٱلسَّلَامُ). As we delve deeper into their stories, we uncover the roots of many practices central to the Islamic faith today. These narratives offer rich historical insights but also shed light on the significance of pilgrimage and the celebration of Eid.

PROPHET IBRAHIM ASKS ALLAH (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) ABOUT RESURRECTION

Ibrahim (عَلَيْهِ ٱلسَّلَامُ) spent his days worshiping Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) and calling people to his religion. He knew that his return to his Lord (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) was not far off. He was curious to learn how Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) brought back the dead in the afterlife. He pleaded like a child asking a parent how something was done, not out of doubt but out of curiosity.

He said to the Almighty:
"My Lord, show me how You give life to the dead."

[Allah] said:
"Have you not believed?"

Ibrahim replied:
"Yes, but [I ask] only that my heart may be satisfied."

[Allah] said:
"Take four birds and commit them to yourself. Then [after slaughtering them] put on each hill a portion of them; then call them – they will come [flying] to you in haste. And know that Allah is Exalted in Might and Wise." — (Surah Al-Baqarah, Ayah 260)

So, Ibrahim (عَلَيْهِ ٱلسَّلَامُ) did as he was told, and miraculously, the different parts of the birds that were placed on the hilltops united. And, as revealed by Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ), the birds came flying to Ibrahim (عَلَيْهِ ٱلسَّلَامُ).

Hence, Ibrahim (عَلَيْهِ ٱلسَّلَامُ) was fortunate to observe how Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) gave life after death.

PROPHET IBRAHIM'S LEGACY & KHALILULLAH

Prophet Ibrahim (عَلَيْهِ ٱلسَّلَامُ) witnessed many miracles during his lifetime. He was among the most successful Prophets and blessed with many titles like Abul Anbiya, meaning "Father of the Prophets," as he was the father of two sons, Prophet Ishaq and Prophet Ishmael (may peace be upon them).

Many generations later, through the lineage of Ishmael, a boy was born in the desert valley of Saudi Arabia, and his name was Muhammad. Prophet Muhammad (ﷺ), to honor his father, named his son Ibrahim.

In Sahih Muslim 2315, he (ﷺ) says: "A boy was born to me tonight, and I named him after my father Ibrahim." Prophet Ishaq's direct lineage includes Yaqub and Yusuf (عَلَيْهِ ٱلسَّلَامُ).

His distant descendants include many other great prophets, such as Musa, Harun, Isa, Zakariya, Yahya, Sulaiman, and Dawud (may peace be upon them all). Hence, he is also referred to as the Father of Nations.

From the Qur'an:
"Abraham was neither a Jew nor a Christian; he was a Muslim, wholly devoted to Allah. And he certainly was not amongst those who associate others with Allah in His divinity." — (Surah al-Imran, ayah 67)

Here [in this verse], it refers to Ibrahim (عَلَيْهِ ٱلسَّلَامُ) as Hanif, which is a designation for being a pure or true monotheist—someone who renunciates all other deities and only believes in the oneness of Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ).

What is most inspiring in the story of Prophet Ibrahim (عَلَيْهِ ٱلسَّلَامُ) is the way he endured a very lonely life for a long period of time and never lost faith. This is among the most beloved people of Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ), and he was tested severely on several occasions, but the bigger the test, the bigger the reward.

He went from being alone with no kids, threatened, and ostracized to becoming the father of all nations, beloved and honored for all time. And he only ever relied on Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) and submitted himself fully.

Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) says:
"Who can be better in religion than one who submits his whole self to Allah, does good, and follows the way of Ibrahim the true in Faith?" — (Surah an-Nisa, Ayah 125)

The ayah then continues to say, "And Allah took Ibrahim as an intimate friend."

This is where he was given the esteemed title of "Khalilullah," meaning friend of Allah. He was granted the highest place in heaven, where he would later greet his brother, Prophet Muhammad (ﷺ), during his night of ascension.

4 PROPHETIC DU'AS OF PROPHET IBRAHIM (AS)

Dua 1 – Asking Allah for a secure city and provision
Arabic:
رَبِّ اجْعَلْ هَٰذَا بَلَدًا آمِنًا وَارْزُقْ أَهْلَهُ مِنَ الثَّمَرَاتِ مَنْ آمَنَ مِنْهُمْ بِاللَّهِ وَالْيَوْمِ الْآخِرِ
Transliteration: Rabbij'al haazaa baladan aaminanw warzuq ahlahoo minas samaraati man aamana minhum billaahi wal yawmil aakhiri.
English translation: "My Lord, make this a secure city and provide its people with fruits – whoever of them believes in Allah and the Last Day."
Reference: Surah Al-Baqarah, Ayat 126.

Dua 2 – Asking Allah for protection from idol worship
Arabic:
رَبِّ اجْعَلْ هَٰذَا الْبَلَدَ آمِنًا وَاجْنُبْنِي وَبَنِيَّ أَنْ نَعْبُدَ الْأَصْنَامَ
Transliteration: Rabbij'al haazal balada aaminanw wajnubnee wa baniyya an na'budal asnaam.
English translation: "My Lord, make this city [Makkah] secure and keep me and my sons away from worshipping idols."
Reference: Surah Ibrahim, Ayat 35.

Dua 3 – Allah is sufficient for us
Arabic:
حَسْبُنَا اللَّهُ وَنِعْمَ الْوَكِيلُ
Transliteration: Hasbunal laahu wa ni'mal wakeel.
English translation: "Allah is Sufficient for us and He is the Best Disposer (of affairs for us)."
Reference: Surah Al-Imran, 3:173.

Dua 4 – Asking for righteous offspring
Arabic:
رَبِّ هَبْ لِي مِنَ الصَّالِحِينَ
Transliteration: Rabbi hab lee minas saaliheen.
English translation: "My Lord, grant me [a child] from among the righteous."
Reference: Surah As-Saffat, 37:100.
STORY
    ],

    'lut' => [
        'id'      => 'lut',
        'number'  => 5,
        'name'    => 'Prophet Lut (AS)',
        'arabic'  => 'لُوط',
        'era'     => 'Companion of Ibrahim & The Cities of Sodom',
        'region'  => 'Ur (Iraq) → Canaan (Palestine) → Sodom (Jordan)',
        'surah'   => 'Surah Ash-Shu\'ara (160-167), An-Naml (54-58), Hud (70-83), Al-Ankabut (28-35), Al-Qamar (33-38)',
        'arabic_verse' => 'فَلَمَّا جَاءَ أَمْرُنَا جعلنا عَالِيَهَا سَافِلَهَا وَأَمْطَرْنَا عَلَيْهَا حِجَارَةً مِّن سِجِّيلٍ مَّنضُودٍ',
        'verse_translation' => '"So when Our command came, We made the highest part thereof its lowest and rained upon it stones of baked clay, layer on layer." — (Surah Hud 11:82)',
        'story'   => <<<'STORY'
THE STORY OF PROPHET LUT (عَلَيْهِ ٱلسَّلَامُ)

Prophet Lut, known in the Bible as Prophet Lot, was raised by his uncle, Prophet Ibrahim, may peace be upon him. Prophet Lut (عَلَيْهِ ٱلسَّلَامُ) loved, respected, and believed in Ibrahim’s (عَلَيْهِ ٱلسَّلَامُ) message even when everyone ridiculed him. Prophet Ibrahim, together with Lut, traveled far, across land and sea, trying to invite and spread men to the fold of Islam.

During Ibrahim’s and Lut’s migration to Palestine, they received the divine decree of Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) that Lut had been chosen to be a Prophet and Messenger for the people of Sodom. Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) directed this new Prophet to travel to the city of Sodom, situated on the border of Jordan and Palestine, with the mission to guide the people who sinned back to the worship of Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ).

Sodom was a thriving city that was visited by many travellers, merchants and businessmen for trade. However, Sodom was also the most corrupt city with the highest criminal activity during that time. Travellers passing Sodom were often waylaid and robbed of their belongings, and sometimes were mercilessly murdered. But, the most notorious act of evil that was committed by this corrupt nation was homosexuality.

INTRODUCTION OF HOMOSEXUALITY

Homosexuality was introduced into the world by the people of Lut—none in the history of mankind had ever experienced or practiced homosexuality before Sodom. This shameful practice was the norm amongst this nation, and the entire population engaged in it. They were immensely proud of their conduct, spoke openly about it, and engaged in these immoral behaviors out in the open.

Pleased with the Prophethood and his new mission, Prophet Lut soon settled in Sodom and began to devise ways to bring his people into the fold of Islam. He was well-aware that his nation was the most corrupt nation of that time; but he held firm faith and hoped and prayed that they would soon see the error of their ways and enter into the path of Allah.

Soon Prophet Lut approached the men of the city and reminded them of their Lord:
“Will you not fear Allah and obey Him? Verily! I am a trustworthy Messenger to you. So fear Allah, keep your duty to Him, and obey me.” — (Surah Ash-Shu'ara, ayat 160-163)

Puzzled, the men of the city began discussing amongst themselves:
“This man has entered our city, and is telling us to cease what we are doing? Clearly, he is gaining something out of this!”

Prophet Lut replied:
“No reward do I ask of you for it. My reward is only from the Lord of the Worlds.”

Prophet Lut then broached the matter of homosexuality and informed them that it was indeed an immoral practice. He said:
“Do you approach males among the worlds, and leave those whom your Lord has created for you as your wives? Nay, you are a people of transgressing!”

Prophet Lut then informed his people that he would never agree to be a part of such a practice, and warned them of a severe punishment from Allah. He said:
“I am indeed, of those who disapprove with severe anger and fury your action (of sodomy).”

He further cautioned them of the severe punishment Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) had in store if they continued in their ways. The men and women of Sodom became very angry at Lut’s speech.

They conspired to drive Lut away from their city, threatening:
“If you cease not, O Lut! Verily, you will be one of those who are driven out!”

This message of Prophet Lut is conveyed in the Qur'an:

كَذَّبَتۡ قَوۡمُ لُوطٍ ٱلۡمُرۡسَلِينَ إِذۡ قَالَ لَهُمۡ أَخُوهُمۡ لُوطٌ أَلَا تَتَّقُونَ إِنِّي لَكُمۡ رَسُولٌ أَمِينٞ فَٱتَّقُواْ ٱللَّهَ وَأَطِيعُونِ وَمَآ أَسۡـَٔلُكُمۡ عَلَيْهِ مِنۡ أَجۡرٍۖ إِنۡ أَجۡرِيَ إِلَّا عَلَىٰ رَبِّ ٱلۡعَٰلَمِينَ أَتَأۡتُونَ ٱلذُّكۡرَانَ مِنَ ٱلۡعَٰلَمِينَ وَتَذَرُونَ مَا خَلَقَ لَكُمۡ رَبُّكُم مِّنۡ أَزۡوَٰجِكُمۚ بَلۡ أَنتُمۡ قَوۡمٌ عَادُونَ قَالُواْ لَئِن لَّمۡ تَنتَهِ يَٰلُوطُ لَتَكُونَنَّ مِنَ ٱلۡمُخۡرَجِينَ

Transliteration: kazzabat qawmu Lootinil mursaleen (160) Iz qaala lahum akhoohum Lootun alaa tattaqoon (161) Innee lakum rasoolun ameen (162) Fattaqul laaha wa atee’oon (163) Wa maaa as’alukum ‘alaihi min ajrin in ajriya illaa ‘alaa Rabbil ‘aalameen (164) Ataatoonaz zukraana minal ‘aalameen (165) Wa tazaroona maa khalaqa lakum Rabbukum min azwaajikum; bal antum qawmun ‘aadoon (166) Qaloo la’il lam tantahi yaa Lootu latakoonanna minal mukhrajeen (167)

English Translation: "The people of Lut rejected the Messengers, branding them liars. (160) Recall, when their brother Lut said to them: ‘Have you no fear? (161) I am a trustworthy Messenger to you. (162) So fear Allah and obey me. (163) I seek of you no reward. My reward is with none but the Lord of the Universe. (164) What, of all creation will you go to (fornicate with) the males, (165) leaving aside those whom Allah has created for you as your mates. Nay, you are a people that has transgressed all limits.’ (166) They said: ‘O Lut! If you do not desist, you will be one of those expelled (from our towns).’ (167)" — (Surah Ash-Shu’ara, ayat 160-167)

Prophet Lut (عَلَيْهِ ٱلسَّلَامُ) was deeply distressed. After years and years of relentless effort to guide people toward Islam, not a single person had embraced the faith.

Enduring immense suffering and striving with patience to save his people, he scolded them:
“You commit the abomination that none in the world ever committed before you. What! Do you go to men (to satisfy your lust), engage in highway robbery, and commit evil deeds in your gatherings?” — (Surah Ankabut ayah 29)

They knew they were wrong, but they continued to belittle his message, openly mocking him:
"Bring us the punishment of Allah, if you should be of the truthful" — (Surah Ankabut, ayah 30)

And so, the only household that praised Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) in Sodom was that of Prophet Lut (عَلَيْهِ ٱلسَّلَامُ). While he and his daughters remained steadfast in their religion, his wife chose the path of disbelief. Prophet Lut (عَلَيْهِ ٱلسَّلَامُ) then raised his hands and prayed:
"My Lord, support me against the corrupting people." — (Surah Ankabut, ayah 30)

Meanwhile, Allah sent three angels, including Angel Jibreel, disguised as men, to Prophet Ibrahim’s house as guests. Ibrahim, who failed to recognize the angels, prepared a grand feast for his guests. But his guests refused the meals offered to them.

SODOM AND GOMORRAH DESTROYED

The angels then proceeded towards Sodom disguised as handsome young men. The daughter of Prophet Lut (عَلَيْهِ ٱلسَّلَامُ), a believer, witnessed the handsome men entering the city and frantically ran to her father and informed him of the three men. Prophet Lut (عَلَيْهِ ٱلسَّلَامُ) approached the men and welcomed them to the city of Sodom. He knew too well of the fate that would befall the young men at the hands of the men of Sodom, so he intended to convince the men to leave the city for their own safety.

But Prophet Lut (عَلَيْهِ ٱلسَّلَامُ) was too embarrassed to ask the guests to leave, so he guided the guests to his home, ensuring that none saw the three handsome men.

Lut’s wife, a non-believer, saw the men as they entered her house, together with her husband, Lut. She hurried to the men of the city and informed them that Lut had three attractive young men in his house. The men rejoiced at the news and slowly gathered outside Lut's house and began pounding on his door.

Prophet Lut (عَلَيْهِ ٱلسَّلَامُ) shouted:
“Do not disgrace me concerning my guests. Is there not among you a man of reason?”

Growing restless, the men shouted back:
“Have we not forbidden you from [hosting] people?”

The whole nation of Sodom had now gathered at Lut’s doorstep. They grew impatient by the minute and began breaking down his door.

Feeling agitated, Lut called out to his people:
“These [the girls of the nation] are my daughters [to marry lawfully] if you must act so.”

The men responded:
“You have already known that we have no interest in your daughters; and indeed, you know what we want.”

Prophet Lut (عَلَيْهِ ٱلسَّلَامُ) became helpless against the corrupt people:
“If only I had against you some power or could take refuge in a strong power," he thought.

The three men then spoke up:
“O Lut, indeed we are angels of your Lord; [therefore] they will never reach you.”

Angel Jibreel then stepped out of Lut’s house and struck the men, causing all men to lose their eyesight.

Shocked and enraged, the men shouted:
“What’s this magic that just hit us? Where did this come from? O Lut! You are the one behind this. You will see what we will do to you tomorrow.”

The blind men then returned to his homes plotting to destroy Lut the following day.

Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) commanded Prophet Lut (عَلَيْهِ ٱلسَّلَامُ):
"Set out with your family during a portion of the night and let not any among you look back, except your wife. Indeed she will be struck by that which strikes them. Indeed, their appointment is [for] the morning. Is not the morning near?"

As instructed, Prophet Lut (عَلَيْهِ ٱلسَّلَامُ), together with his daughters, left Sodom during the night.

ضَرَبَ ٱللَّهُ مَثَلٗا لِّلَّذِينَ كَفَرُواْ ٱمۡرَأَتَ نُوحٖ وَٱمۡرَأَتَ لُوطٖۖ كَانَتَا تَحۡتَ عَبۡدَيۡنِ مِنۡ عِبَادِنَا صَٰلِحَيۡنِ فَخَانَتَاهُمَا فَلَمۡ يُغۡنِيَا عَنۡهُمَا مِنَ ٱللَّهِ شَيۡـٔٗا وَقِيلَ ٱدۡخُلَا ٱلنَّارَ مَعَ ٱلدَّـٰخِلِينَ

Transliteration: Darabal laahu masalal lillazeena kafarum ra ata Noohinw wamra ata Loot, kaanataa tahta ‘abdaini min ‘ibaadinaa saalihaini fakhaanataahumaa falam yughniyaa ‘anhumaa minal laahi shai anw-wa qeelad khulan naara ma’ad Daakhileen

English Translation: "Allah has set forth for the unbelievers the parable of the wives of Noah and Lot. They were wedded to two of Our righteous servants, but each acted treacherously with her husband, and their husbands could be of no avail to them against Allah. The two of them were told: 'Enter the Fire with all the others who enter it.'" — (Surah At-Tahrim, ayah 10)

Prophet Lut (عَلَيْهِ ٱلسَّلَامُ), who left Sodom with his daughters, returned to his uncle, Prophet Ibrahim (عَلَيْهِ ٱلسَّلَامُ). Together, they continued to spread the message of Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) until his death.

Today, the site of Sodom, the city of corruption, is marked by the Dead Sea as a reminder of Allah's wrath against the people of Prophet Lut.

The Qur'an reflects on this:
"And verily! They (the cities) were right on the highroad (from Makkah to Syria i.e. the place where the Dead Sea is now). Surely! Therein is indeed a sign for the believers." — (Surah Al-Hijr, ayat 76-77)

MENTIONS IN HEBREW BIBLE AND NEW TESTAMENT

Moses in the Hebrew Bible referred to the destruction of Sodom and Gomorrah in Deuteronomy 29:22–23:
"Your children who follow you in later generations and foreigners who come from distant lands will see the calamities that have fallen on the land and the diseases with which the Lord has afflicted it. The whole land will be a burning waste of salt and sulfur—nothing planted, nothing sprouting, no vegetation growing on it. It will be like the destruction of Sodom and Gomorrah, Admah and Zeboyim, which the Lord overthrew in fierce anger."

In the Bible New Testament, Luke 17:28–30, Jesus compares his second-coming to the judgment of Sodom and Gomorrah:
"Likewise, as it was in the days of Lot—they ate, they drank, they bought, they sold, they planted, they built, but on the day when Lot went out from Sodom fire and sulphur rained from heaven and destroyed them all — so will it be on the day when the Son of man is revealed."

ALL QURANIC VERSES MENTIONING THE STORY OF PROPHET LUT (عَلَيْهِ ٱلسَّلَامُ)

In total, Prophet Lut is mentioned 17 times in the Qur'an. Below are the remaining verses from the Qur'an that mention the story of Prophet Lut (عَلَيْهِ ٱلسَّلَامُ), which were not directly referenced above:

وَإِسۡمَٰعِيلَ وَٱلۡيَسَعَ وَيُونُسَ وَلُوطٗاۚ وَكُلّٗا فَضَّلۡنَا عَلَى ٱلۡعَٰلَمِينَ
Transliteration: Wa Ismaa’eela wal Yasa’a wa Yoonusa wa Lootaa; wa kullan faddalnaa ‘alal ‘aalameen
English Translation: "And Ishmael and Elisha and Jonah and Lot – and all [of them] We preferred over the worlds." — (Surah Al-An'am, ayah 86)

وَلُوطًا إِذۡ قَالَ لِقَوۡمِهِۦٓ أَتَأۡتُونَ ٱلۡفَٰحِشَةَ مَا سَبَقَكُم بِهَا مِنۡ أَحَدٖ مِّنَ ٱلۡعَٰلَمِينَ
Transliteration: Wa Lootan iz qaala liqawmiheee ata’toonal faahishata maa sabaqakum bihaa min ahadim minal ‘aalameen
English Translation: "And [We had sent] Lot when he said to his people, 'Do you commit such immorality as no one has preceded you with from among the worlds?'" — (Surah Al-A'raf, ayah 80)

English Translation: "And [We had sent] Lot when he said to his people, 'Do you commit such immorality as no one has preceded you with from among the worlds? Indeed, you approach men with desire, instead of women. Rather, you are a transgressing people.' But the answer of his people was only that they said, 'Evict them from your city! Indeed, they are men who keep themselves pure.'" — (Surah Al-A'raf, ayat 80-82)

English Translation: "But when he saw their hands not reaching for it, he distrusted them and felt from them apprehension. They said, 'Fear not. We have been sent to the people of Lot.'" — (Surah Hud, Ayat 70)

English Translation: "And when the fright had left Abraham and the good tidings had reached him, he began to argue with Us concerning the people of Lot." — (Surah Hud, Ayat 74)

English Translation: "And when Our messengers, [the angels], came to Lot, he was anguished for them and felt for them great discomfort and said, 'This is a trying day.'" — (Surah Hud, Ayat 77)

English Translation: "And O my people, let not [your] dissension from me cause you to be struck by that similar to what struck the people of Noah or the people of Hud or the people of Salih. And the people of Lot are not from you far away." — (Surah Hud, Ayat 89)

قَالَ فَمَا خَطۡبُكُمۡ أَيُّهَا ٱلۡمُرۡسَلُونَ (57) قَالُوۡا إِنَّا أُرْسِلْنَا إِلَىٰ قَوْمٍ مُّجْرِمِينَ (58) إِلَّآ ءَالَ لُوطٍ إِنَّا لَمُنَجُّوهُمۡ أَجۡمَعِينَ (59) إِلَّا ٱمۡرَأَتَهُۥ قَدَّرۡنَآ إِنَّهَا لَمِنَ ٱلۡغَٰبِرِينَ (60)
Transliteration: Qaala famaa khatbukum aiyuhal mursaloon (57) Qaaloo innaaa ursilnaaa ilaa qawmim mujrimeen (58) Illaaa Aala Loot; innaa lamunajjoohum ajma’een (59) Illam ra atahoo qaddarnaaa innahaa laminal ghaabireen (60)
English Translation: "[Abraham] said, 'Then what is your business [here], O messengers?' (57) They said, 'Indeed, we have been sent to a people of criminals, (58) Except the family of Lot; indeed, we will save them all (59) Except his wife.' Allah decreed that she is of those who remain behind. (60)" — (Surah Al-Hijr, ayat 57-60)

English Translation: "And We delivered him and Lot to the land which We had blessed for the worlds." — (Surah Al-Anbiya, 21:71)

English Translation: "And to Lot We gave judgement and knowledge, and We saved him from the city that was committing wicked deeds. Indeed, they were a people of evil, defiantly disobedient." — (Surah Al-Anbiya, 21:74)

English Translation: "And the people of Abraham and the people of Lot" — (Surah Al-Hajj, 22:43)

English Translation: "And [mention] Lot, when he said to his people, 'Indeed, you commit such immorality as no one has preceded you with from among the worlds. Indeed, you approach men and obstruct the road and commit in your meetings [every] evil.' And the answer of his people was not but they said, 'Bring us the punishment of Allah, if you should be of the truthful.' He said, 'My Lord, support me against the corrupting people.' And when Our messengers came to Abraham with the good tidings, they said, 'Indeed, we will destroy the people of that Lot’s city. Indeed, its people have been wrongdoers.' [Abraham] said, 'Indeed, within it is Lot.' They said, 'We are more knowing of who is within it. We will surely save him and his family, except his wife. She is to be of those who remain behind.'" — (Surah Al-Ankabut, ayat 28-32)

وَثَمُودُ وَقَوۡمُ لُوطٖ وَأَصۡحَٰبُ لۡـَٔيۡكَةِۚ أُوْلَـٰٓئِكَ ٱلۡأَحۡزَابُ
Transliteration: Wa Samoodu wa qawmu Lootinw wa Ashaabul ‘Aykah; ulaaa’ikal Ahzaab
English Translation: "And [the tribe of] Thamud and the people of Lot and the companions of the thicket. Those are the companies." — (Surah Sad, 38:13)

وَعَادٞ وَفِرۡعَوۡنُ وَإِخۡوَٰنُ لُوطٖ
Transliteration: Wa ‘Aadunw wa Fir’awnu wa ikhwaanu loot
English Translation: "And ‘Aad and Pharaoh and the brothers of Lot" — (Surah Qaf, 50:13)

English Translation: "The people of Lot denied the warning. Indeed, We sent upon them a storm of stones, except the family of Lot – We saved them before dawn As a favor from us. Thus do We reward he who is grateful. And he had already warned them of Our assault, but they disputed the warning. And they had demanded from him his guests, but We obliterated their eyes, [saying], 'Taste My punishment and warning.' And there came upon them by morning an abiding punishment." — (Surah Al-Qamar, ayat 33-38)

English Translation: "Allah presents an example of those who disbelieved: the wife of Noah and the wife of Lot. They were under two of Our righteous servants but betrayed them, so those prophets did not avail them from Allah at all, and it was said, 'Enter the Fire with those who enter.'" — (Surah At-Tahrim, ayah 10)
STORY
    ],

    'ismail' => [
        'id'      => 'ismail',
        'number'  => 6,
        'name'    => 'Prophet Isma\'il (AS)',
        'arabic'  => 'إِسْمَاعِيل',
        'era'     => 'Sacrifice & Building of the Kaaba',
        'region'  => 'Makkah (Valley of Bakkah / Zamzam)',
        'surah'   => 'As-Saffat (37:101-111), Al-Baqarah (2:125-129), Ibrahim (14:37-40), Maryam (19:54-55)',
        'arabic_verse' => 'رَبَّنَا تَقَبَّلْ مِنَّا ۖ إِنَّكَ أَنتَ السَّمِيعُ الْعَلِيمُ',
        'verse_translation' => '"Our Lord! Accept this service from us. You are indeed the All-Hearing, All-Knowing." — (Surah Al-Baqarah, ayah 127)',
        'story'   => <<<'STORY'
THE BIRTH OF PROPHET ISHMAEL (عَلَيْهِ ٱلسَّلَامُ)

Prophet Ibrahim (عَلَيْهِ ٱلسَّلَامُ) and his wife Sarah, who was unable to have children for many years, yearned for a child to alleviate their loneliness and carry forth the family legacy. In her devotion to her husband, Sarah proposed that her handmaid Hagar marry Ibrahim (عَلَيْهِ ٱلسَّلَامُ) in the hopes of fulfilling this longing.

This union soon blessed them with their first son, Ishmael (عَلَيْهِ ٱلسَّلَامُ). Ishmael, like his father, was appointed by Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) to serve as a noble Prophet.

PROPHET IBRAHIM'S (عَلَيْهِ ٱلسَّلَامُ) DEPARTURE

One day, Prophet Ibrahim (عَلَيْهِ ٱلسَّلَامُ) asked Hagar to prepare herself and their son Ishmael (عَلَيْهِ ٱلسَّلَامُ) for a long journey. Hagar was not given any particulars of the journey; nevertheless, she listened to her husband.

The family traveled long through diverse landscapes, including cultivated land, deserts, and mountains, until they reached a barren valley in the Arabian Peninsula.

There, under a lone tree, they had stopped. The area showed no signs of human life, cultivation, or water sources.

After helping Hagar dismount with their still-nursing baby, Prophet Ibrahim (عَلَيْهِ ٱلسَّلَامُ) handed her a leather pouch of dates and a small water skin. He then mounted his steed to set off on his return journey.

Perplexed by Prophet Ibrahim's (عَلَيْهِ ٱلسَّلَامُ) sudden departure, Hagar ran after him, seeking an explanation.

She called out:
“O Ibrahim! Where are you going, leaving us in this valley where there is no person whose company we may enjoy, nor is there anything (to enjoy)?”

Receiving no response from Ibrahim (عَلَيْهِ ٱلسَّلَامُ), Hagar repeated her question several times. It then dawned on her that he was quiet as he was honoring a command from the Almighty.

"Has Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) ordered you to do so?" she asked.

"Yes," he replied.

“Then He will not neglect us,” she observed with confidence.

Hagar then returned to the shade of the tree, watching Ibrahim (عَلَيْهِ ٱلسَّلَامُ) proceed homebound.

Prophet Ibrahim (عَلَيْهِ ٱلسَّلَامُ), with a heavy heart and concern for leaving his family in such a barren land, raised his hands in prayer:
“Our Lord! I have made some of my offspring settle in a barren valley near Your Sacred House! Our Lord! I did so that they may establish Prayer. So make the hearts of people affectionately inclined to them, and provide them with fruits for their sustenance that they may give thanks. Our Lord! Surely You know all that we conceal and all that we reveal, and nothing in the earth or in the heaven is hidden from Allah.” — (Surah Ibrahim, ayat 37-38)

THE MIRACLE OF ZAMZAM

Hagar continued to nurse her child and rationed the dates and water left by Prophet Ibrahim (عَلَيْهِ ٱلسَّلَامُ). However, the provisions left quickly ran out, leaving both of them hungry in the middle of a barren desert valley.

Out of desperation, she ran back and forth, climbing between the two mountains a total of seven times before hearing a voice. She then quieted down, waiting patiently for the voice to call out again.

She then heard the voice again but was unable to make any sense of it. Hagar called out, yelling:
“O, (whoever you may be)! You have made me hear your voice; have you got something to help me?”

To Hagar's astonishment, she spotted an angel at the site of Zamzam; he was digging with his heel (or wing) till water miraculously began to flow.

Overwhelmed with relief, she ran to the watering hole, fashioned a basin-like structure around it, and proceeded to fill her water skin.

Still, the water kept gushing out. Hagar quenched her thirst and nursed her baby.

The angel then said to Hagar:
“Don't be afraid of being neglected, for this is the House of Allah, which will be built by this boy and his father, and Allah never neglects His people.”

In the hadith recounted by Ibn Abbas, as recorded in Sahih Bukhari 3362 and 3364, Prophet Muhammad (ﷺ) said:
“May Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) bestow mercy on Ishmael's mother! Had she let the Zamzam (flow without trying to control it) (or had she not scooped from that water) (to fill her water-skin), Zamzam would have been a stream flowing on the surface of the earth.” — (Sahih Bukhari 3362, 3364)

Note: This watering hole is known as the Zamzam, and the practice of running between the two mountains is the ritual of Sa'ee that Muslims observe during pilgrimage.

THE TRIBE OF JURHUM SETTLES IN THE VALLEY

Prophet صَلَّى اللّٰهُ عَلَيْهِ وَسَلَّمَ then continues telling:
"The House (i.e., Kaaba) at that time was on a high place resembling a hillock, and when torrents came, they flowed to its right and left. She lived in that way till some people from the tribe of Jurhum or a family from Jurhum passed by her and her child, as they (i.e., the Jurhum people) were coming through the way of Kada'.

They landed in the lower part of Mecca where they saw a bird that had the habit of flying around water and not leaving it.

They said: 'This bird must be flying around water, though we know that there is no water in this valley.'

They sent one or two messengers who discovered the source of water and returned to inform them of the water. So, they all came (towards the water)."

When they arrived, they discovered Hagar and Ishmael (عَلَيْهِ ٱلسَّلَامُ) seated beside the watering hole.

Ishmael (عَلَيْهِ ٱلسَّلَامُ) grew up among the tribe of Jurhum and learned Arabic from them. He was adored by the tribe for his remarkable character and virtues. When he reached the age of maturity, he (عَلَيْهِ ٱلسَّلَامُ) married a woman from amongst them. The hadith briefly mentions the passing of Sarah, but neither the Qur'an nor Hadith records any details of this event.

THE SACRED SACRIFICE

One day, Prophet Ibrahim (عَلَيْهِ ٱلسَّلَامُ) visited Ishmael (عَلَيْهِ ٱلسَّلَامُ) in Makkah. At this age Ishmael had matured enough to work alongside his father.

During this visit, Ibrahim revealed the contents of a recurring dream he had been having, saying:
"My son, I see in my dream that I am slaughtering you. So consider (and tell me) what you think." — (Surah As-Saffat, ayah 102)

Ishmael (عَلَيْهِ ٱلسَّلَامُ) replied:
“O my father! Do that which you are commanded, Insha’ Allah (if Allah wills), you shall find me of As-Sabirin (the patient ones, etc.)” — (Surah As-Saffat, ayah 102)

This was a very difficult test sent from Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ).

Prophet Ibrahim (عَلَيْهِ ٱلسَّلَامُ) was in his old age, praying diligently for his firstborn, and Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) granted him his heart's desire. He loved his son, but he had to submit to Allah's will. It was the utmost test of complete faith and submission to Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) that any person could be subjected to.

This was his one and only son, and his willingness and preparation to take his life was the test. Ishmael's (عَلَيْهِ ٱلسَّلَامُ) calm demeanor and cooperation are equally deserving of praise and study.

As described in Surah As-Saffat, ayah 103:
"...they had both submitted their wills (to Allah),"

Prophet Ibrahim (عَلَيْهِ ٱلسَّلَامُ) asked Ishmael to travel with him to Mount Arafat to perform the sacrifice. According to certain historical and exegetical sources, it tells us that Shaitan had tried to seduce Prophet Ibrahim (عَلَيْهِ ٱلسَّلَامُ) on three separate occasions: Jamarat-al-Ula, Jamarat-al-Wusta, and Jamarat-al-Kubra.

With each encounter, Shaitan's efforts to sway Ibrahim (عَلَيْهِ ٱلسَّلَامُ) intensified. However, he avoided these temptations, pelting Shaitan with seven pebbles at each location, driving him away.

The Tafseer, Maariful Qur'an, narrates the conversation between Prophet Ibrahim (عَلَيْهِ ٱلسَّلَامُ) and his son, as follows:
"My dear father, tie me down well enough so that my body may not toss and turn too much; and also keep your dress protected, lest the drops of my blood spoil it which might reduce my reward with Allah, and moreover, if my mother were to see this blood, she will be virtually smitten with sorrow. And sharpen your knife, and run it fast over my throat, so that my last breath comes easy on me, for death is hard; and when you return to my mother, pay my respects to her and should you wish to take my shirt to her, you are welcome to do so, may be it would give her the comfort she needs."

Hearing these words coming from the lips of the only son a father has, who can imagine what would have been going on in his heart.

But here was Sayyidna Ibrahim (عَلَيْهِ ٱلسَّلَامُ). Like a mountain of fortitude, he says to his son:
"Son, what a good helper you are for me in this task assigned by Allah."
Saying this, he kissed his son and, with wet eyes, he tied him.

The ayah of the Qur'an then continues:
"and he had laid him prostrate on his forehead (for sacrifice)" — (Surah As-Saffat, ayah 103).

There are several reasons for having him lay his head in prostration for sacrifice. For one, it could be seen as a symbolic gesture that further exemplifies their complete submission to the will of Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ). Secondly, it helped Ibrahim (عَلَيْهِ ٱلسَّلَامُ) avoid having to look into his son's eyes, a sight likely to stir up feelings of compassion and love while also fearing to disobey Allah's (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) command. So, Prophet Ibrahim (عَلَيْهِ ٱلسَّلَامُ) and his son chose to position the knife to come up from beneath him to somewhat ease an impossible task.

He then heard a voice:
“O Ibrahim, you have indeed fulfilled your dream. Thus do We reward the good-doers.” — (Surah As-Saffat, ayat 104-105)

Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) continues by saying:
"This was indeed a plain trial. And We ransomed him with a mighty sacrifice (i.e., a ram), and We preserved for him a good name among posterity. Peace be upon Ibrahim. Thus do We reward the good-doers. Surely, he was one of Our believing servants.” — (Surah As-Saffat, ayat 106-111)

Note: Following Prophet Ibrahim's (عَلَيْهِ ٱلسَّلَامُ) mighty sacrifice, the practice of slaughtering an animal is regarded as an essential act for Hajj pilgrims that marks the completion of their pilgrimage. Similarly, stoning the Jamaraat is one of the obligatory rituals of Hajj.

WIVES OF ISHMAEL (عَلَيْهِ ٱلسَّلَامُ)

After the death of Hagar, Ibrahim (عَلَيْهِ ٱلسَّلَامُ) arrived in Makkah to visit his son Ishmael (عَلَيْهِ ٱلسَّلَامُ) and his family. When he arrived at Ishmael’s (عَلَيْهِ ٱلسَّلَامُ) home, he met his son’s wife. When he inquired into the whereabouts of Ishmael (عَلَيْهِ ٱلسَّلَامُ), she replied that her husband had gone in search of livelihood.

Prophet Ibrahim (عَلَيْهِ ٱلسَّلَامُ) then asked her about their living conditions.

“We are living in misery; we are living in hardship and destitution,” she complained.

Prophet Ibrahim (عَلَيْهِ ٱلسَّلَامُ) replied:
“When your husband returns, convey my salutations to him and tell him to change the threshold of the gate (of his house).”

When Ishmael (عَلَيْهِ ٱلسَّلَامُ) returned, he felt something unusual, so he asked his wife if anyone visited her.

“Yes,” she replied, “an old man of so-and-so description came and asked me about you, and I informed him, and he asked about our state of living, and I told him that we were living in hardship and poverty.”

"Did he give you any piece of advice?” Ishmael (عَلَيْهِ ٱلسَّلَامُ) asked.

"Yes, he told me to convey his salutation to you and to tell you to change the threshold of your gate," she said.

Ishmael realized it was his father and understood the encoded message; he said:
"It was my father, and you are the threshold of the gate. He has ordered me to divorce you. So, go back to your family."

So, Ishmael divorced her and married another woman from amongst them (i.e., Jurhum).

After some time, Prophet Ibrahim (عَلَيْهِ ٱلسَّلَامُ) traveled to Makkah to visit his son once again but did not find him.

So he called on his wife and asked her about Ishmael (عَلَيْهِ ٱلسَّلَامُ).

“He has gone in search of our livelihood,” she replied.

“How are you getting on?” he asked.

“We are prosperous and well off (we have everything in abundance),” she said, thanking Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ).

“What kind of food do you eat?” he asked.

“Meat,” she replied.

“What do you drink?” he asked.

"Water,” she replied.

“O Allah! bless their meat and water,” Prophet Ibrahim (عَلَيْهِ ٱلسَّلَامُ) prayed to Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ).

Then, Prophet Ibrahim (عَلَيْهِ ٱلسَّلَامُ) instructed his wife:
“When your husband comes, give my regards to him and tell him that he should keep firm the threshold of his gate.”

When Ishmael (عَلَيْهِ ٱلسَّلَامُ) returned, he asked his wife if anyone called on her.

“Yes,” she replied. “A good-looking old man came to me.”

Praising the old man, she added:
“He asked about you, and I informed him that we were in a good condition.”

“Did he give you any piece of advice?” Ishmael (عَلَيْهِ ٱلسَّلَامُ) asked.

“Yes, he told me to give his regards to you and ordered that you should keep firm the threshold of your gate,” she said.

“It was my father, and you are the threshold of the gate. He has ordered me to keep you with me,” Ishmael (عَلَيْهِ ٱلسَّلَامُ) noted.

BUILDING THE KAABA

Ibn Abbas continues in the hadith to mention how, one day, Ibrahim (عَلَيْهِ ٱلسَّلَامُ) visited Ishmael (عَلَيْهِ ٱلسَّلَامُ) in Makkah again. When he arrived, he saw Ishmael (عَلَيْهِ ٱلسَّلَامُ) seated under a tree by the Zamzam, sharpening his arrows.

Recognizing his father, Ishmael (عَلَيْهِ ٱلسَّلَامُ) promptly stood and greeted him warmly. Ibrahim (عَلَيْهِ ٱلسَّلَامُ) then informed his son of a noble task that Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) had entrusted to him.

Ibrahim (عَلَيْهِ ٱلسَّلَامُ) said:
“O Ishmael (عَلَيْهِ ٱلسَّلَامُ)! Allah has given me an order.”

His son replied:
“Do what your Lord has ordered you to do.”

“Will you help me?” Ibrahim (عَلَيْهِ ٱلسَّلَامُ) asked.

"I will help you," affirmed Ishmael.

Ibrahim (عَلَيْهِ ٱلسَّلَامُ) said while pointing to a hillock higher than the land surrounding it:
“Allah has ordered me to build a house here.”

The Prophet صَلَّى اللّٰهُ عَلَيْهِ وَسَلَّمَ added:
"Then they raised the foundations of the House (i.e. the Kaaba). Ishmael brought the stones, and Ibrahim was building, and when the walls became high, Ishmael brought this stone and put it for Ibrahim, who stood over it and carried on building; while Ishmael was handing him the stones, both of them were saying:

رَبَّنَا تَقَبَّلۡ مِنَّآۖ إِنَّكَ أَنتَ ٱلسَّمِيعُ ٱلۡعَلِيمُ

Transliteration: Rabbanaa taqabbal minnaa innaka Antas Samee’ul Aleem

English Translation: “Our Lord! Accept this service from us. You are indeed the All-Hearing, All-Knowing.” — (Surah Al-Baqarah, ayah 127)

The square stone with Prophet Ibrahim's footprints is famously known as Maqām Ibrāhīm "Station of Ibrahim," and is preserved in an enclosure close to the Kaaba.
STORY
    ],

   'yusuf' => [
        'id'      => 'yusuf',
        'number'  => 7,
        'name'    => 'Prophet Yusuf (AS)',
        'arabic'  => 'يُوسُف',
        'era'     => 'From the Well to the Throne of Egypt',
        'region'  => 'Canaan (Palestine) → Egypt',
        'surah'   => 'Surah Yusuf (12:1-111)',
        'arabic_verse' => 'فَاللَّهُ خَيْرٌ حَافِظًا ۖ وَهُوَ أَرْحَمُ الرَّاحِمِينَ',
        'verse_translation' => '"Allah is the Best Protector and is the Most Merciful." — (Surah Yusuf 12:64)',
        'story'   => <<<'STORY'
THE STORY OF PROPHET YUSUF (عَلَيْهِ ٱلسَّلَامُ)

Prophet Yusuf (Joseph) was the beloved son of Prophet Yaqub (Jacob) who also had 11 other sons. Binyamin, who was the youngest, was from the same mother as Yusuf, while the rest were older half-brothers.

Yusuf, still a young boy, awoke one glorious morning delighted by a pleasant dream he just had. He ran to his father in excitement and said:
“O my father, indeed I have seen eleven stars and the sun and the moon; I saw them prostrating to me.”

Yaqub (عَلَيْهِ ٱلسَّلَامُ) was overjoyed at the realization that his dear son was indeed chosen by Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) to be bestowed with Prophethood. However, Yaqub (عَلَيْهِ ٱلسَّلَامُ) was concerned about his older sons’ possible reaction to this narration, for even though he treated them equally, they harbored jealousy towards Yusuf (عَلَيْهِ ٱلسَّلَامُ). He, therefore, warned Yusuf (عَلَيْهِ ٱلسَّلَامُ) against relating his dream to his brothers lest they plot for his downfall.

With time, the malice in the hearts of Yusuf’s brothers kept growing. They envied Yusuf (عَلَيْهِ ٱلسَّلَامُ) because they felt he was special, and they were not. Unable to handle their emotions, they devised a plan to get rid of Yusuf by throwing him into a well. So, one day, they approached their father and asked whether Yusuf (عَلَيْهِ ٱلسَّلَامُ) could come out with them to play.

A very reluctant Yaqub said:
“Indeed, it saddens me that you should take him, and I fear that a wolf would eat him while you are of him unaware." — (Surah Yusuf, ayah 12:13)

But the older brothers insisted that they would take extreme care of him and that Yusuf would enjoy himself.

The next day, Yusuf (عَلَيْهِ ٱلسَّلَامُ) set off with his brothers. They traveled far in pursuit of a well deep enough to throw their brother in. When they finally reached the well, on the pretext of drinking water, they led him to it, grabbed him, and removed his shirt. Yusuf began struggling and pleaded with them to let go. The brothers eventually outpowered Yusuf (عَلَيْهِ ٱلسَّلَامُ), threw him down the well, and rushed back home.

The brothers ran to their father, carrying Yusuf's shirt that was smeared with sheep's blood.

They cried:
“O our father, indeed we went racing with each other and left Yusuf with our possessions, and a wolf ate him.” — (Surah Yusuf Ayah 17)

Yaqub (عَلَيْهِ ٱلسَّلَامُ) was suspicious of their story. He, in his heart, believed his son was still alive and that the brothers were likely enticed by Shaitan to do evil. He remarked that the wolf was indeed merciful to have eaten his son up without tearing his shirt! He bore the bereavement with patience and prayed for his son's safe return.

Meanwhile, Yusuf (عَلَيْهِ ٱلسَّلَامُ) managed to cling to a stone ledge, and he prayed fervently to Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) to grant him salvation. Soon, a caravan bound for Egypt stopped at this well to fetch water. The water drawer hauled up his bucket, and he was shocked to see the boy clinging to the rope.

The caravan people immediately shackled Yusuf (عَلَيْهِ ٱلسَّلَامُ) and took him along to Egypt. The word quickly spread throughout Egypt that a strikingly handsome and athletic boy was to be auctioned. This news piqued the interest of the wealthy and elite bidders, eager to see if the rumors were true.

The auction went wild, with bids escalating rapidly. Ultimately, he was sold to the highest bidder, who was none other than Al-Azeez, the chief minister of Egypt. Yusuf's new master, who had no children, was completely taken with Yusuf (عَلَيْهِ ٱلسَّلَامُ). He told his wife to take good care of Yusuf (عَلَيْهِ ٱلسَّلَامُ), and they could either use him as a slave or, perhaps, even adopt him as their son.

Yusuf (عَلَيْهِ ٱلسَّلَامُ) not only grew up to be a handsome young man but was also blessed with exceptional knowledge and wisdom by Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ).

It is narrated in the famous hadith when the Prophet Muhammad (ﷺ) ascended to heaven during the night journey, he went through the gate and entered the third heaven where he saw Yusuf (عَلَيْهِ ٱلسَّلَامُ) who was said to have been given, "half of (world) beauty." (Sahih Muslim 162a)

The Qur'an also reflects on Yusuf's virtues, stating:
"And when Yusuf reached maturity, We gave him judgment and knowledge. And thus We reward the doers of good." — (Surah Yusuf Ayah 22)

His integrity and honesty captivated the heart of Al-Azeez, who entrusted Yusuf (عَلَيْهِ ٱلسَّلَامُ) to be in charge of his household. It was during this period Yusuf (عَلَيْهِ ٱلسَّلَامُ) was confronted with his second trial. Zulaika, Al-Azeez's wife, watched Yusuf day after day, her feelings intensifying to the point of obsession. Overwhelmed by her desires, she became desperate to fulfill them.

One day, when her husband was away from home, she closed the doors and invited Yusuf to her.

Yusuf (عَلَيْهِ ٱلسَّلَامُ), fearing Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ), replied:
“[I seek] refuge in Allah. Indeed, he is my master, who has made good my residence. Indeed, wrongdoers will not succeed.” — (Surah Yusuf, Ayah 23)

He turned away and ran towards the closed door to escape. Zulaika chased after him in desperation and grabbed his shirt from the back, which caused it to rip.

The door opened, and Al-Azeez entered. Ashamed, she ran to him and cried:
“What is the recompense of the one who intended evil for your wife but that he be imprisoned or a painful punishment?” — (Surah Yusuf, Ayah 23)

Yusuf (عَلَيْهِ ٱلسَّلَامُ) was baffled. He continued to deny his mistress's claim, saying:
“It was she who sought to seduce me.” — (Surah Yusuf, Ayah 26)

Al-Azeez was a fair man. He was confused and unsure of whom to believe. So, he consulted his wife's cousin for advice:
“If his shirt is torn from the front, then she has told the truth, and he is of the liars.” — (Surah Yusuf, ayah 26)

Thus, Yusuf's innocence was proven. Al-Azeez apologized for his wife's indecency and swore Yusuf (عَلَيْهِ ٱلسَّلَامُ) to secrecy.

Nevertheless, the story of Zulaika's pursuit spread. Other women began ridiculing her character. Distressed, Zulaika planned to prove to them her helpless reaction to Yusuf's extraordinary handsomeness. Hence, she invited these women to a banquet at her residence one day. There, she served them fruit along with knives.

When the women were happily chatting away while slicing fruits, Zulaika summoned Yusuf (عَلَيْهِ ٱلسَّلَامُ). The women looked up at him. Astonished at such angelic beauty, they cut their hands without realizing they had. Zulaika seized the moment to announce that this was the man for whom she was blamed.

She then warned Yusuf (عَلَيْهِ ٱلسَّلَامُ) that if he denied her again, he would be imprisoned, to which Yusuf replied:
“My Lord, prison is more to my liking than that to which they invite me.” — (Surah Yusuf, ayah 33)

That night, Zulaika convinced her husband that the only way to safeguard her honor and his prestige was to imprison Yusuf (عَلَيْهِ ٱلسَّلَامُ). This was a tough decision for Al-Azeez. He knew of Yusuf's (عَلَيْهِ ٱلسَّلَامُ) innocence and believed him to be trustworthy, but nevertheless, he agreed with his wife. Thus, Yusuf (عَلَيْهِ ٱلسَّلَامُ) was unjustly imprisoned.

YUSUF'S (عَلَيْهِ ٱلسَّلَامُ) YEARS IN PRISON

During Yusuf's time in prison, he was bestowed with the ability to interpret dreams. Around the same time, two other men were sentenced to prison. The first was a cupbearer to the King, and the other was the King's chef.

Yusuf's cellmates, mesmerized by his piety, sought him to have their dreams explained. One dreamt that he was serving the king wine, and the other was carrying bread on his head, which two birds were eating up.

Yusuf (عَلَيْهِ ٱلسَّلَامُ) initially called them to Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ), then interpreted:
“O two companions of prison, as for one of you, he will give drink to his master of wine; but as for the other, he will be crucified, and the birds will eat from his head. The matter has been decreed about which you both inquire.” — (Surah Yusuf, Ayah 41)

And he said to the one he knew would go free:
“Mention me before the king.” — (Surah Yusuf, Ayah 42)

But Shaitan made him forget the mention [to] his master and Yusuf (عَلَيْهِ ٱلسَّلَامُ) remained in prison for several years. Still, he made patience his own and spent those years in remembrance of Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ).

THE KING HAS A DREAM

One day the king of Egypt had an odd dream. He summoned his men and said:
“Indeed, I have seen seven fat cows being eaten by seven [that were] lean, and seven green spikes [of grain] and others [that were] dry. O eminent ones, explain to me my vision, if you should interpret visions.”

The cupbearer, who immediately remembered his companion in prison, informed the King of Yusuf (عَلَيْهِ ٱلسَّلَامُ) and his impeccable dream interpretations. The King sent his cupbearer to prison to meet with Yusuf (عَلَيْهِ ٱلسَّلَامُ) and inquire about this peculiar dream.

Yusuf (عَلَيْهِ ٱلسَّلَامُ) was overjoyed at the sight of his companion and knew that this was indeed the plan of Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ).

He narrated to him:
“You will plant for seven years consecutively, and what you harvest leave in its spikes, except a little from which you will eat. Then will come after that seven difficult [years] which will consume what you advanced [saved] for them, except a little from which you will store. Then will come after that a year in which the people will be given rain and in which they will press [olives and grapes].” — (Surah Yusuf, Ayah 47-49)

Prophet Yusuf (عَلَيْهِ ٱلسَّلَامُ), based on the dream, understood that there was going to be a famine in seven years that would last seven years. He advised the King to take immediate action to start harvesting and storing ample food supplies. Yusuf (عَلَيْهِ ٱلسَّلَامُ) counseled that this preparation would be crucial to make sure there's enough food available for everyone. Furthermore, he gave the good news that the following year would be a year of abundance. Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) would bring rainfall allowing the crops to flourish.

Convinced by Yusuf's (عَلَيْهِ ٱلسَّلَامُ) interpretation of dreams, the King ordered to meet him in person. However, Yusuf (عَلَيْهِ ٱلسَّلَامُ) declined to leave prison before his innocence was established. He insisted on a fair trial to defend his honor.

So, the King summoned the woman involved in the incident. Among them were the women who cut their hands, and they spoke of Yusuf's innocence before the King, saying:
“Allah forbid! We know about him no evil.” — (Surah Yusuf, Ayah 51)

The wife of Al-Azeez was trapped. She confessed to the King:
“Now the truth has become evident. It was I who sought to seduce him, and indeed, he is truthful.” — (Surah Yusuf, Ayah 51)

Thus, Yusuf's innocence was proven. Released from prison, Yusuf (عَلَيْهِ ٱلسَّلَامُ) stood before the King to thank him for his generosity. Yusuf greatly impressed the King; after losing his freedom and being falsely imprisoned for many years, he wasn't angry, seeking revenge. He was composed and showed the noblest of qualities. Because of this, the King felt comfortable appointing Yusuf (عَلَيْهِ ٱلسَّلَامُ) to a high position.

Yusuf (عَلَيْهِ ٱلسَّلَامُ) asked if he could be made the storekeeper over the storehouses across his land. He wanted to be a controller over the granaries to ensure they were well-equipped to endure the long famine. It was not out of self-interest but a personal responsibility he felt to make sure people would not die due to shortages.

Yusuf (عَلَيْهِ ٱلسَّلَامُ) harvested and stored crops during the seven years of fertility. Then, as predicted, came the years of famine that also reached the household of his father Yaqub (عَلَيْهِ ٱلسَّلَامُ) in Canaan. Yaqub (عَلَيْهِ ٱلسَّلَامُ) sent all his sons except Binyamin to Egypt to purchase provisions.

Yusuf (عَلَيْهِ ٱلسَّلَامُ) immediately recognized his brothers and provided for them, but they did not recognize him. And why would they? To them, Yusuf (عَلَيْهِ ٱلسَّلَامُ) had passed away years ago.

Yusuf (عَلَيْهِ ٱلسَّلَامُ) casually inquired about their family.

The brothers said:
"We are eleven brothers, the children of a noble prophet. The youngest is at home tending to the needs of our aging father."

In a sudden rush of emotion, tears welled up in Yusuf's (عَلَيْهِ ٱلسَّلَامُ) eyes, his heart-heavy longing for home to see his father and younger Brother.

Struggling to regain his composure, he managed to ask:
"Are you, truthful people?"

Confused, they replied:
"What reason should we have to state an untruth?"

Yusuf (عَلَيْهِ ٱلسَّلَامُ) informed them that if they brought their brother back with them the next time, he would reward them with double the rations. But if they failed to do so, he would limit their measure. He wanted to make sure they would fulfill his command. As an additional precaution, Yusuf (عَلَيْهِ ٱلسَّلَامُ) ordered one of his servants to put their money back in their bags so that when they returned home, they'd have enough money to return and purchase more.

When the brothers returned home, they told their father, saying:
“O our father! We have been denied ˹further˺ supplies. So send our brother with us so that we may receive our measure, and we will definitely watch over him.” — (Surah Yusuf, Ayah 63)

Yaqub was enraged. How could he trust them when they had failed him terribly with Yusuf (عَلَيْهِ ٱلسَّلَامُ)? After some time, however, their needs pressed Yaqub (عَلَيْهِ ٱلسَّلَامُ) to send Binyamin with them for more provisions. He took their solemn oath to safeguard him.

Yaqub (عَلَيْهِ ٱلسَّلَامُ) then prayed to Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) to safeguard their departure:

فَٱللَّهُ خَيۡرٌ حَٰفِظٗاۖ وَهُوَ أَرۡحَمُ ٱلرَّـٰحِمِينَ

Transliteration: fal laahu khairun haafizanw wa Huwa arhamur Raahimeen

English Translation: "Allah is the Best Protector and is the Most Merciful." — (Surah Yusuf 12:64)

YUSUF (عَلَيْهِ ٱلسَّلَامُ) REUNITED WITH HIS BROTHER

Yusuf (عَلَيْهِ ٱلسَّلَامُ) welcomed the privileged guests and invited them to a feast. With great difficulty, he withheld from immediately embracing his brother. Yusuf (عَلَيْهِ ٱلسَّلَامُ) showered his guests with his gifts and hospitality. Afterward, Yusuf (عَلَيْهِ ٱلسَّلَامُ) arranged for Binyamin to be lodged in a room with him alone where he disclosed:
"Indeed, I am your brother." — (12:69)

Binyamin was overjoyed and swung his arms around his older brother. They cried for a little before Yusuf (عَلَيْهِ السَّلَامُ) tried to reassure him:
“Indeed, I am your brother, so do not despair over what they used to do [to me].” — (12:69)

The next day, Yusuf filled his brothers' bags with grain. He then secretly planted the King's golden bowl in Binyamin's bag. As they were about to leave, the King's soldiers closed the gates and stopped the brothers. They informed them that the King's cup had gone missing.
"By Allah, you have certainly known that we did not come to cause corruption in the land, and we have not been thieves," the brothers protested. — (12:73)

The soldiers pursuing the matter further inquired about the consequences if the thief was among them. With confidence, the brothers responded that if one of them was found guilty, they should offer themselves a slave to the owner of the stolen cup. The brothers believed that this would be just, to lend oneself over as property to the owner just as the thief had taken their property.

During the search, the cup was found in Binyamin's bag.

The soldiers cried:
"O caravan, indeed you are thieves.”

Shock and disbelief struck the brothers; thoughts of their sick father at home and their promise to protect Binyamin at all costs circled their minds. The brothers knew that their father loved Binyamin very dearly, and he was a means of relief since losing Yusuf (عَلَيْهِ ٱلسَّلَامُ). They worried the loss of Binyamin would completely devastate their father.

They begged the soldiers to release their younger brother and take one of them instead, but the soldiers refused.

The eldest among the brothers said:
"I will never leave [this] land until my father permits me or Allah decides for me, and He is the best of judges." — (Surah Yusuf, ayah 80)

So, the rest of the brothers left Egypt, leaving the eldest behind.

YAQUB (عَلَيْهِ ٱلسَّلَامُ) SUFFERS PATIENTLY

When they returned home, they broke the news to Yaqub (عَلَيْهِ ٱلسَّلَامُ):
"O our father, indeed your son has stolen, and we did not testify except to what we knew. And we were not witnesses of the unseen, And ask the city in which we were and the caravan in which we came – and indeed, we are truthful." — (12:81-82)

Prophet Yaqub (عَلَيْهِ ٱلسَّلَامُ) faced the grave situation with the grace of a true believer. Seeking any kind of peace, he turned to prayer, placing his trust in Allah's (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) plan:
"Perhaps Allah will bring them to me all together. Indeed it is He who is the Knowing, the Wise." — (12:83)

He hoped for the safe return of his youngest and eldest sons, who remained stuck in Egypt. Yet, this new loss rekindled his enduring grief for Yusuf (عَلَيْهِ ٱلسَّلَامُ). Turning away in sorrow, he cried:
"Oh, my sorrow over Joseph." — (12:84)

It is said that in his sadness, he cried so much his eyes became white from grief, which led to his blindness.

His condition became so bad the brothers began to worry about his health; they warned Yaqub (عَلَيْهِ ٱلسَّلَامُ):
"By Allah, you will not cease remembering Joseph until you become fatally ill or become one of those who perish." — (Surah Yusuf, ayah 85)

In his steadfastness, Yaqub (عَلَيْهِ ٱلسَّلَامُ) responded to his sons saying:
"I only complain of my suffering and my grief to Allah, and I know from Allah that which you do not know." — (12:86)

Commentators believe that in saying this line, "I know from Allah that which you do not know," he was expressing his belief in the goodness from Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ). He anticipates that Yusuf (عَلَيْهِ ٱلسَّلَامُ) is still alive and that the vision he conveyed to him when he was young would still hold true.

Yaqub (عَلَيْهِ ٱلسَّلَامُ) then responded:
"O my sons, go and find out about Joseph and his brother and despair not of relief from Allah. Indeed, no one despairs of relief from Allah except the disbelieving people." — (12:87)

THE RETURN TO EGYPT

The sons returned to Egypt once again. They met with Yusuf (عَلَيْهِ ٱلسَّلَامُ) and pleaded that tragedy had befallen them.

Yusuf (عَلَيْهِ ٱلسَّلَامُ) then spoke to them in their native language:
"Do you know what you did with Yusuf and his brother when you were ignorant?" — (Surah Yusuf, ayah 89)

It didn't take long for the brothers to realize that this was indeed their long-lost brother, and they began to tremble in fear. But Yusuf (عَلَيْهِ ٱلسَّلَامُ) comforted them, saying:
"No blame will there be upon you today. Allah will forgive you; and He is the most merciful of the merciful." — (Surah Yusuf, ayah 92)

He then said:
"Take this, my shirt, and cast it over the face of my father; he will become seeing. And bring me your family, all together." — (Surah Yusuf, ayah 93)

As instructed, the brothers cast Yusuf's shirt over their father's face, and Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) miraculously restored his eyesight! They beseeched their father to seek Allah's forgiveness for them. Together, they all set off to Egypt, where Yusuf (عَلَيْهِ ٱلسَّلَامُ) warmly welcomed them.

Yusuf (عَلَيْهِ ٱلسَّلَامُ) raised his elderly father upon the throne. He said:
“O my father, this is the explanation of my vision of before. My Lord has made it reality. And He was certainly good to me when He took me out of prison and brought you [here] from bedouin life after Satan had induced [estrangement] between me and my brothers. Indeed, my Lord is Subtle in what He wills. Indeed, it is He who is the Knowing, the Wise.” — (Surah Yusuf, ayah 100)

Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ), in His infinite wisdom and mercy, brought about the reunion of father and son after many years of separation. In a beautiful fulfillment of Allah's (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) decree, the surah, which began with Yusuf's (عَلَيْهِ ٱلسَّلَامُ) prophetic dream, concludes with reaching the point where that becomes a reality.

Yusuf (عَلَيْهِ ٱلسَّلَامُ) makes a du'a to his creator, thanking him for all his blessings:

۞ رَبِّ قَدۡ ءَاتَيۡتَنِي مِنَ ٱلۡمُلۡكِ وَعَلَّمۡتَنِي مِن تَأۡوِيلِ ٱلۡأَحَادِيثِۚ فَاطِرَ ٱلسَّمَٰوَٰتِ وَٱلۡأَرۡضِ أَنتَ وَلِيِّۦ فِي ٱلدُّنۡيَا وَٱلۡأٓخِرَةِۖ تَوَفَّنِي مُسۡلِمٗا وَأَلۡحِقۡنِي بِٱلصَّـٰلِحِينَ

Transliteration: Rabbi qad aataitanee minal mulki wa ‘allamtanee min taaweelil ahaadees; faati ras samaawaati wal ardi Anta waliyyee fid dunyaa wal Aakhirati tawaffanee muslimanw wa alhiqnee bissaaliheen

English Translation: "My Lord, You have given me [something] of sovereignty and taught me of the interpretation of dreams. Creator of the heavens and earth, You are my protector in this world and in the Hereafter. Cause me to die a Muslim and join me with the righteous." — (Surah Yusuf 12:101)

BRIEF SUMMARY

Prophet Yusuf (عَلَيْهِ ٱلسَّلَامُ) knew from his dream that he was destined for greatness, but it seemed at every turn of his life, he was met with difficulties and adversity. He was betrayed by his brothers, sold as a slave, and unjustly imprisoned.

Yusuf (عَلَيْهِ ٱلسَّلَامُ) could have chosen to be bitter and question Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) by saying, “I thought you had ordained for me greatness”. He could have easily complained and asked, “Why do these things keep happening to me.”

But he knew better; he knew Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) had a plan for him, and he had to just keep faith. Yusuf (عَلَيْهِ ٱلسَّلَامُ) focused on being the best he could, treating people right, with respect and dignity, and doing more than what was requested of him. If he did his part, he knew Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) would take care of him. He was taken away as a child and grew up not knowing his family. And despite these odds, he grew to be a man of noble status, respected by all those who met him, from Al-Azeez to the women who cut their hands and to the King - they all admired Yusuf (عَلَيْهِ ٱلسَّلَامُ) for his excellent qualities. It's a lesson that circumstances don't make the man. They only reveal him to himself.

It's also noteworthy to mention that the story of Prophet Yusuf (عَلَيْهِ ٱلسَّلَامُ) holds a unique place in the Qur'an. He is the only Prophet to have his story told chronologically within a single surah, titled "Surah Yusuf." Contrast this with the stories of the other prophets, which are mentioned in different surahs and require piecing together. We strongly recommend readers to listen and follow along with the translation of Surah Yusuf, as it beautifully recounts the entirety of the Prophet Yusuf (عَلَيْهِ ٱلسَّلَامُ) journey.

“There was certainly in their stories a lesson for those of understanding. Never was the Qur’an a narration invented, but a confirmation of what was before it and a detailed explanation of all things and guidance and mercy for a people who believe.” — (Surah Yusuf Ayah 111)
STORY
    ],

    'ayyub' => [
        'id'      => 'ayyub',
        'number'  => 8,
        'name'    => 'Prophet Ayyub (AS)',
        'arabic'  => 'أَيُّوب',
        'era'     => 'Exemplar of Patience & Gratitude',
        'region'  => 'Land of Uz / Hauran (Levant / Rome)',
        'surah'   => 'Surah Sad (38:41-44), Al-Anbiya (21:83-84), Al-An\'am (6:82-84), An-Nisa (4:163)',
        'arabic_verse' => 'أَنِّي مَسَّنِيَ الضُّرُّ وَأَنتَ أَرْحَمُ الرَّاحِمِينَ',
        'verse_translation' => '"Indeed, adversity has touched me, and You are the Most Merciful of the merciful." — (Surah Al-Anbiya, Ayah 83)',
        'story'   => <<<'STORY'
THE STORY OF PROPHET AYYUB (عَلَيْهِ ٱلسَّلَامُ)

The Qur'an mentions the story of Prophet Ayyub (عَلَيْهِ ٱلسَّلَامُ), which is the Arabic name of the Biblical account of Job.

FAMILY TREE OF PROPHET AYYUB

Prophet Ayyub (عَلَيْهِ ٱلسَّلَامُ) was a descendant of Prophet Ibrahim (عَلَيْهِ ٱلسَّلَامُ). Ayyub’s mother was believed by some historians to be the daughter of Prophet Lut (عَلَيْهِ ٱلسَّلَامُ). His wife, a direct descendant of Prophet Yusuf (عَلَيْهِ ٱلسَّلَامُ), was named Rahma. Together, they lived in Rome and were blessed with fourteen children.

The Almighty Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) says in his book:

ٱلَّذِينَ ءَامَنُواْ وَلَمۡ يَلۡبِسُوٓاْ إِيمَٰنَهُم بِظُلۡمٍ أُوْلَـٰٓئِكَ لَهُمُ ٱلۡأَمۡنُ وَهُم مُّهۡتَدُونَ وَتِلۡكَ حُجَّتُنَآ ءَاتَيۡنَٰهَآ إِبۡرَٰهِيمَ عَلَىٰ قَوۡمِهِۦۚ نَرۡفَعُ دَرَجَٰتٖ مَّن نَّشَآءُۗ إِنَّ رَبَّكَ حَكِيمٌ عَلِيمٞ وَوَهَبۡنَا لَهُۥٓ إِسۡحَٰقَ وَيَعۡقُوبَۚ كُلًّا هَدَيۡنَاۚ وَنُوحًا هَدَيۡنَا مِن قَبۡلُۖ وَمِن ذُرِّيَّتِهِۦ دَاوُۥدَ وَسُلَيۡمَٰنَ وَأَيُّوبَ وَيُوسُفَ وَمُوسَىٰ وَهَٰرُونَۚ وَكَذَٰلِكَ نَجۡزِي ٱلۡمُحۡسِنِينَ

Transliteration: Allazeena aamanoo wa lam yalbisooo eemaanahum bizulmin ulaaa’ika lahumul amnu wa hum muhtadoon (82) Wa tilka hujjatunaaa aatainaahaaa Ibraaheema ‘alaa qawmih; narfa’u darajaatim man nashaaa’; inna Rabbaka Hakeemun ‘Aleem (83) Wa wahabnaa lahoo ishaaqa wa ya’qoob; kullan hadainaa; wa Noohan hadainaa min qablu wa min zurriyyatihee Daawooda wa Sulaimaana wa Ayyooba wa Yoosufa wa Moosaa wa Haaroon; wa kazaalika najzil muhsineen (84)

English Translation: "Those who believe and did not tarnish their faith with wrong-doing for them there is security, and it is they who have been guided to the right way. (82) That was Our argument which We gave to Abraham against his people. We raise in ranks whom We will. Truly your Lord is All-Wise, All-Knowing. (83) And We bestowed upon Abraham (offspring) Ishaq (Isaac) and Ya’qub (Jacob) and each of them did We guide to the right way as We had earlier guided Noah to the right way; and (of his descendants We guided) Da’ud (David) and Sulayman (Solomon), Ayyub (Job), Yusuf (Joseph), Musa (Moses) and Harun (Aaron). Thus do We reward those who do good. (84)" — (Surah Al-An’am 6:82-84)

Ayyub (عَلَيْهِ ٱلسَّلَامُ) was a Prophet who was immensely blessed by Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) — he was strong and healthy, had large plots of land, abundant livestock, and a righteous and beautiful family. He was also a community leader who was highly respected and beloved by his people. Despite his status and wealth, Ayyub was never arrogant; he was always humble. He readily helped those in need and constantly thanked and glorified Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) for everything he was blessed with.

One day, high up in the heavens, the angels began discussing about the best of humans who lived on earth. An angel amongst them said:
"The best creature on earth today is Ayyub, a man of noble character who displays great patience and always remembers his Generous Lord. He is an excellent model for the worshippers of Allah. In return, his Lord has blessed him with a long life and plenty of servants; the needy and the poor share in his good fortune— he feeds and clothes the poor and buys slaves to set them free. He makes those who receive his charity feel as if they are favoring him— so kind and gentle is he."

Shaitan (Iblis), who was nearby, overheard the discussion and became very angry. He immediately began plotting to lure Ayyub (عَلَيْهِ ٱلسَّلَامُ) away from the worship of Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ). He whispered evil thoughts to Ayyub about the many pleasures of life that a man such as Ayyub could easily enjoy, but the Prophet was a sincere servant of Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) and was not easily faltered — this enraged Iblis further.

Iblis approached Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) and informed Him that Ayyub (عَلَيْهِ ٱلسَّلَامُ) was not a sincere servant of His and was only glorifying Him in fear of losing all his wealth.

He, Iblis, suggested:
"If You remove his wealth then You will find that his tongue will no longer mention Your name and his praying will stop."

Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ), the All-Knowing, did not believe Iblis, for He knew that Ayyub was among His most sincere believers and did not worship his Lord just for worldly possessions. But He agreed to test Ayyub (عَلَيْهِ ٱلسَّلَامُ) to show Iblis the absolute sincerity of His loyal servant. Overjoyed, Satan set out to destroy Prophet Ayyub’s wealth.

IBLIS WRECKS HAVOC ON AYYUB'S (عَلَيْهِ ٱلسَّلَامُ) LIFE

As time passed, Prophet Ayyub’s wealth began to diminish — his land, livestock, servants, and money slowly evaded him until he was left with nothing.

Immensely satisfied with Ayyub’s ordeal, Iblis, disguised as a wise old man, approached the Prophet and said:
“All your wealth is lost, some people say that it is because you gave too much charity and that you are wasting your time with your continuous prayers to Allah. Others say that Allah has brought this upon you in order to please your enemies. If Allah had the capacity to prevent harm, then He would have protected your wealth.”

Ayyub (عَلَيْهِ ٱلسَّلَامُ) replied:
“Allah gives whom He wills, and Allah takes from whom He wills. And all of the wealth that I have belongs to Allah, so He has every authority to take it back from me.”

Ayyub then turned around and continued to thank and praise Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ).

Feeling rather frustrated, Iblis returned to Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) and said:
"I have stripped Ayyub of all his possessions, but he still remains grateful to You. However, he is only hiding his disappointment. The real test of a parent is through his children. You will see how Ayyub will reject You.”

Allah still knew that Ayyub’s faith and love for his Lord would not waver, but He agreed to test Ayyub (عَلَيْهِ ٱلسَّلَامُ) further.

Before long, the building in which Ayyub’s children lived crashed, killing all fourteen of his young, beautiful children.

Iblis once again visited Ayyub disguised as a sympathizing bystander and remarked with sorrow:
“The circumstances under which your children died were sad. Surely, your Lord is not rewarding you properly for all your prayers.”

Ayyub (عَلَيْهِ ٱلسَّلَامُ) responded:
“Allah gives me what is good for me, and takes away what Allah sees that is displeasing for Him and for me. Allah sees that all of these children may be a strong test & trial for me, so Allah took them away from me. Whether a thing is beneficial or harmful to me, I will remain firm in my belief and remain thankful to my Creator.”

Iblis rushed back to Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) and said:
“O my Lord, Ayyub’s wealth is gone, his children are dead, and he is still healthy in body, and as long as he enjoys good health, he will continue to worship You in hopes of regaining his wealth and producing more children. Grant me authority over his body so that I may weaken it. He will surely neglect to worship You and will thus become disobedient.”

Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) granted his request but instructed:
“I give you authority over his body but not over his soul, intellect or heart, for in these places reside the knowledge of Me and My religion.”

Soon after, Ayyub’s health began to deteriorate. He was so ill that the skin of his body used to fall off, revealing his muscles and bones. But as Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) instructed, the only two organs that functioned in his body were his heart and tongue — which he continued to use to glorify Allah. Ayyub (عَلَيْهِ ٱلسَّلَامُ) suffered through severe pain, but he never allowed himself to complain or falter in his belief in Allah.

The people of the city began discussing: "If Ayyub were a good person, Allah wouldn’t have done this to him." And eventually, they abandoned him — his relatives, friends, and everyone who loved and respected Ayyub deserted him, except for Rahma, his beloved wife.

PROPHET AYYUB’S LOVE FOR ALLAH

For many years, Ayyub (عَلَيْهِ ٱلسَّلَامُ) continued to suffer through his condition, with none but Rahma by his side to take care of him. They had no money and no income, so his wife took up a job to provide for them. But the people of the city did not allow Rahma to work for long, for they feared that she would afflict them with the same illness as her husband. Ayyub (عَلَيْهِ ٱلسَّلَامُ), meanwhile, continued to pray to Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) to give him the strength and patience to endure this pain and suffering.

One day, Iblis appeared before Rahma in the form of a man and asked her:
“Where is your husband?”

Pointing at the almost lifeless figure of Ayyub, Rahma replied:
“There he is, suspended between life and death.”

Iblis then went on to remind her of the blissful days of good health, children, and wealth.

Overwhelmed with the years of pain and hardship, Rahma approached Ayyub and wailed:
“O Ayyub, you are the prophet and the messenger of Allah. You have the closest relationship to Allah. Ask Allah to take you out of this harm that you are in!”

Ayyub (عَلَيْهِ ٱلسَّلَامُ) sighed and replied:
“Satan must have whispered to you and made you dissatisfied. Tell me how long did I enjoy good health and riches?”

His wife responded:
“Eighty years or so.”

He replied:
“For how long am I suffering like this?”

She said:
“Seven years.”

Ayyub then said:
“In that case I am ashamed to call on my Lord to remove my hardship, for I have not suffered longer than the years of good health and plenty. It seems your faith has weakened, and you are dissatisfied with the fate of Allah. If I ever regain health, I swear I will punish you with a hundred strokes! From this day onward, I forbid myself to eat or drink anything by your hand. Leave me alone and let my Lord do with me as He pleases.”

Feeling helpless, Ayyub (عَلَيْهِ ٱلسَّلَامُ) turned to Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) seeking His mercy:
"Verily, Satan has touched me with distress (by losing my health) and torment (by losing my wealth)!" he prayed.

Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) immediately responded to Ayyub’s desperate call for help. Allah said:
"Strike the ground with your foot: This is a spring of water to wash in and cool and a refreshing drink.”

Ayyub (عَلَيْهِ ٱلسَّلَامُ) remembered his promise to punish his wife with a hundred strokes once he regained his health. He did not want to hurt his beloved wife, nor did he want to break his oath to Allah.

So, Allah, the Most Wise, instructed Ayyub (عَلَيْهِ ٱلسَّلَامُ):
“Take in your hand a bundle of thin grass and strike therewith your wife, and break not your oath.”

Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) then restored Ayyub’s wealth. He sent down a rain of locusts made of gold that fell all around Ayyub. As Ayyub (عَلَيْهِ ٱلسَّلَامُ) began gathering these golden locusts, Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) asked him:
“O Ayyub! Have I not made you too rich to need what you see?”

Ayyub replied:
“Yes, My Lord! But I cannot shun Your Blessings.”

Ayyub (عَلَيْهِ ٱلسَّلَامُ) and Rahma were also given back their family. The couple was blessed with twenty-eight beautiful, healthy children — fourteen girls and fourteen boys.

The story of Prophet Ayyub is one of adversity mixed with patience. It is easy to be a faithful servant of Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) when everything is going well, but his faith never faltered during difficult times, which is what makes him a remarkable being.

Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) praises His servant, saying:

إِنَّا وَجَدۡنَٰهُ صَابِرٗاۚ نِّعۡمَ ٱلۡعَبۡدُ إِنَّهُۥٓ أَوَّابٞ

Transliteration: innaa wajadnaahu saabiraa; ni’mal ‘abd; innahooo awwaab

English Translation: "...Indeed, We found him patient, an excellent servant. Indeed, he was one repeatedly turning back [to Allah]." — (Surah Sad, ayah 44)

QURANIC VERSES MENTIONING AYYUB

English Translation:
"And [for] their taking of usury while they had been forbidden from it, and their consuming of the people’s wealth unjustly. And we have prepared for the disbelievers among them a painful punishment. Abiding eternally therein. The punishment will not be lightened for them, nor will they be reprieved. Indeed, We have revealed to you, [O Muhammad], as We revealed to Noah and the prophets after him. And we revealed to Abraham, Ishmael, Isaac, Jacob, the Descendants, Jesus, Job, Jonah, Aaron, and Solomon, and to David We gave the book [of Psalms]." — (Surah Nisa Ayat 161-163)

English Translation:
"They who believe and do not mix their belief with injustice – those will have security, and they are [rightly] guided. And that was Our [conclusive] argument which We gave Abraham against his people. We raise by degrees whom We will. Indeed, your Lord is Wise and Knowing. And We gave to Abraham, Isaac and Jacob – all [of them] We guided. And Noah, We guided before; and among his descendants, David and Solomon and Job and Joseph and Moses and Aaron. Thus do We reward the doers of good." — (Surah Anam Ayat 82-84)

English Translation:
"And [mention] Job, when he called to his Lord, 'Indeed, adversity has touched me, and you are the Most Merciful of the merciful.' So We responded to him and removed what afflicted him of adversity. And We gave him [back] his family and the like thereof with them as mercy from Us and a reminder for the worshippers [of Allah]." — (Surah Anbiya Ayat 83-84)

English Translation:
"And remember Our servant Job, when he called to his Lord, 'Indeed, Satan has touched me with hardship and torment.' [So he was told], 'Strike [the ground] with your foot; this is a [spring for] a cool bath and drink.' And We granted him his family and a like [number] with them as mercy from Us and a reminder for those of understanding. [We said], 'And take in your hand a bunch [of grass] and strike with it and do not break your oath.' Indeed, We found him patient, an excellent servant. Indeed, he was one repeatedly turning back [to Allah]. And remember Our servants, Abraham, Isaac and Jacob – those of strength and [religious] vision. Indeed, We chose them for an exclusive quality: remembrance of the home [of the Hereafter]." — (Surah Sad Ayat 41-46)
STORY
    ],

    'musa' => [
        'id'      => 'musa',
        'number'  => 16,
        'name'    => 'Prophet Musa (AS)',
        'arabic'  => 'مُوسَىٰ',
        'era'     => 'The Interlocutor of Allah, Deliverer of the Israelites & The Torah',
        'region'  => 'Egypt → Midian (Saudi Arabia) → Mount Sinai',
        'surah'   => 'Surah Al-Qasas (28), At-Taha (20), Ash-Shu\'ara (26), Al-A\'raf (7), Ghafir (40), Yunus (10), Al-Kahf (18)',
        'arabic_verse' => 'قَالَ رَبِّ اشْرَحْ لِي صَدْرِي وَيَسِّرْ لِي أَمْرِي وَاحْلُلْ عُقْدَةً مِّن لِّسَانِي يَفْقَهُوا قَوْلِي',
        'verse_translation' => '"My Lord, expand for me my breast [with assurance] and ease for me my task and untie the knot from my tongue that they may understand my speech." — (Surah At-Taha 20:25-28)',
        'story'   => <<<'STORY'
THE STORY OF PROPHET MUSA (عَلَيْهِ ٱلسَّلَامُ)

THE PHARAOH'S DREAM

The Pharaoh of Egypt trembled with fear. He had a vision of being overthrown by the Bani Israel (children of Israel) whom he viewed as being worthless.

After carefully considering the symbolism of the vision, the party inferred that an extraordinary boy would be born among the Israelites, and ultimately, his rise would bring about the end of their oppression.

Thus, a command was given to slay all male children born to the Israelites.

From Surah Al-Qasas, ayah 4:
"Indeed Pharaoh transgressed in the land and divided its people into sections. One group of them he humiliated, and slew their sons and spared their daughters. Truly he was among the mischief-makers."

There was no moral dilemma that the Pharaoh underwent in issuing this verdict, as he had always oppressed the people of Israel — the descendants of Prophet Yaqub (عَلَيْهِ ٱلسَّلَامُ).

The Israelites only served as slaves to the Pharaoh and Egyptians, and they were forced into labor for little or no pay. They were treated as lowly citizens who had no rights.

The Egyptians worshiped the Pharaoh and carried out all his demands without question. They worshiped the gods that he endorsed. Challenging him on any issue would be as good as signing your own death warrant.

The people feared the Pharaoh, and although they may not have believed in polytheism, they followed the path of their King without protest.

With all male babies born to the Israelis being killed, the Pharaoh was left with a new problem.

His sages warned:
“The elders of the Israelis die and the young are slaughtered. This will lead to their annihilation. As a result, you will lose the manpower of those who work for you.”

The sages then suggested to the Pharaoh a cyclical policy for regulating the slaughter: in the first year, all male children would be slaughtered, while in the following year, they would be spared, continuing so on and so forth.

The Pharaoh, finding this solution more economical, readily enacted the plan.

THE BIRTH OF A PROPHET

Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) inspired her:
“Nurse him, and then, when you fear for his safety, put him in the river: do not be afraid, and do not grieve, for We shall return him to you and make him a messenger.” — (Surah Al-Qasas, ayah 7)

Reassuring herself with the Lord’s promise, the mother nursed her son in secret. She named him Musa (عَلَيْهِ ٱلسَّلَامُ).

When the cries of baby Musa (عَلَيْهِ ٱلسَّلَامُ) were sure to draw suspicion of Pharaoh's army, the mother decided it was time to do as Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) said and part with her baby.

With a heavy heart, she fashioned a basket.

When the basket touched the water of the River Nile, Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) commanded the waves to be gentle. As instructed, the water became calm and rocked the basket forward, soothing baby Musa (عَلَيْهِ ٱلسَّلَامُ).

Musa's (عَلَيْهِ ٱلسَّلَامُ) mother, like all mothers, worried for his safety. She instructed her daughter to follow the riverbank for as long as possible and then report her findings back to her. This is similar to the teaching of the Prophet (ﷺ), who, when asked by a man whether he should tie his camel and trust in Allah or leave it untied and rely upon Allah:

He (ﷺ) responded:
"Tie it and rely upon Allah." — (Jami at-Tirmidhi 2517)

In the Qur'an, this part of the story is recounted:
"On the other hand, the heart of Moses’ mother was sorely distressed. Had We not strengthened her heart that she might have full faith (in Our promise), she would have disclosed the secret. She told the sister of Moses: 'Follow him.' So she kept watch over him unperceived (by the enemies)." — (Surah Al-Qasas, ayat 10-11)

THE DISCOVERY AT THE RIVERBANK

Musa’s (عَلَيْهِ ٱلسَّلَامُ) sister followed the course of the basket. To her great horror, the basket came to rest at the riverbank outside the Pharaoh's palace.

One of the servants at the palace noticed the strange basket lying on the shore. They peeked in out of curiosity, only to find a baby within. They rushed to the palace with the basket to report to the Pharaoh and the queen about the mysterious baby in the basket.

Asiya, the Pharaoh's wife, felt an inexplicable love for the little soul who appeared outside her palace. She was aware of her inability to bear a child of her own, though she had longed for a baby boy — perhaps this was Allah's (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) gift to her.

The moment she lifted the baby from the basket, she kissed him.

The news of the baby quickly circulated throughout the palace. When the news got to the Pharaoh, he had a different reaction. He figured it was likely a last-ditch attempt by an Israeli woman to save her child from his decree. Unmoved and without remorse, he coldly ordered that this baby share the same fate as the other boys.

Asiya (RA) turned to her husband and requested:
“This baby is a source of joy for me and you.”

Pharaoh watched on as his wife held the baby tenderly, weeping with joy while hugging and kissing him. He had never witnessed her so happy.

See, Asiya was the complete opposite of the Pharaoh. While he was a disbeliever, she was a firm believer in Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ). He was cruel and a tyrant, yet she was merciful, delicate, and goodhearted.

She pleaded:
“Do not kill him. Perhaps he may be useful to us or we may adopt him as a son.” — (Surah Al-Qasas, ayah 9)

Swayed by her plea, the Pharaoh relented, making an exception to spare the child's life.

The irony here is striking: the Pharaoh, who ordered the death of all the newborn babies, was unknowingly raising the very child whose existence he tried to prevent.

This irony is further emphasized by Allah's (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) words, who concludes the verse by saying:
"They were unaware of the end of it all."

Drawing from the wisdom of Prophet Muhammad (ﷺ) as recorded in Sahih al-Bukhari, hadith reference 3769, where he remarked on the exceptional stature of Asiya:
"Many amongst men attained perfection but amongst women none attained the perfection except Mary, the daughter of `Imran and Asiya, the wife of Pharaoh."

MUSA (عَلَيْهِ ٱلسَّلَامُ) REUNITES WITH HIS MOTHER

There was rumbling in the royal palace. Many wet nurses lined up while the baby wailed in hunger that none could satiate. Musa’s (عَلَيْهِ ٱلسَّلَامُ) sister, who followed the baby along the banks of the River Nile, watched on with amazement at the strange turn of events.

Out of concern for the baby and the clearly distressed queen, she spoke up:
“Shall I direct you to a family who will bring him up for you and take good care of him?” — (Surah Al-Qasas, ayah 12)

Back home, Musa’s (عَلَيْهِ ٱلسَّلَامُ) mother was worried for her baby. She contemplated marching to wherever Musa (عَلَيْهِ ٱلسَّلَامُ) was and informing them that the baby was hers. But Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) kept reassuring her to have just a little more patience.

Right then, her daughter barged in and excitedly narrated to her the miracle of Musa’s (عَلَيْهِ ٱلسَّلَامُ) survival at the royal household and the queen’s wish to raise him as a prince. She also informed her that the queen required her services as Musa’s (عَلَيْهِ ٱلسَّلَامُ) wet nurse. Without delay, she rushed to the palace.

Musa’s (عَلَيْهِ ٱلسَّلَامُ) mother recognized this was the reassurance that Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) had given her.

Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) says in the Quran:
"This is how We returned him to his mother so that her heart would be put at ease, and not grieve, and that she would know that Allah’s promise is always true. But most people do not know." — (Surah Al-Qasas, ayah 13)

As the baby was held to her breast, he immediately began suckling. The Pharaoh, who was also present, was astonished.

As Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) promised, Musa’s (عَلَيْهِ ٱلسَّلَامُ) mother was reunited with her baby. She continued to nurse Musa (عَلَيْهِ ٱلسَّلَامُ) at the palace, and when he was weaned, she was granted the privilege of visiting him. She watched in secrecy as he was raised in the palace as the prince of Egypt.

MUSA (عَلَيْهِ ٱلسَّلَامُ) GROWS UP

In Surah Al-Qasas, ayah 14 of the Qur'an, we are told that as Musa (عَلَيْهِ ٱلسَّلَامُ) grew up, Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) bestowed upon him strength, sound knowledge, and wisdom required of a Messenger.

These attributes kept his mind active and curious. He used to question many of the Egyptians' beliefs, like how they could worship multiple gods. His independent thinking, combined with a deep sense of justice, led him to champion the weak and oppressed secretly. This was despite the lifestyle afforded by his royal upbringing in the same household as the Pharaoh.

One day, while Musa (عَلَيْهِ ٱلسَّلَامُ) was wandering through the city, he witnessed two men in a brawl. The one being beaten up was an Israelite and the oppressor was the Egyptian.

As we are told in the Qur'an:
"Once he entered the city at a time when its people were heedless, and he encountered two men fighting, one of whom belonged to his own people and the other to his foes. Now the man belonging to Musa's own people cried out to him for help against the man from the foes, and Musa struck him with his fist." — (Surah Al-Qasas, ayah 15)

Here, we come to know of the strength and physical attributes Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) had gifted Musa (عَلَيْهِ ٱلسَّلَامُ). At the time, Musa was reaching maturity, so some scholars suggest that he was not yet accustomed to the extent of his own strength.

Immediately, Musa (عَلَيْهِ ٱلسَّلَامُ) recognized what transpired and said:
“This is from Shaitan’s handiwork. He is certainly a sworn, misleading enemy.” — (Surah Al-Qasas, ayah 15)

Musa then cried out, even though he responded in defense of the man, and he could rationalize how the Egyptians were committing many atrocities on the Israelites; this was not what he intended.

His heart was consumed with remorse. It was purely by accident, so he beseeched Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) for His forgiveness.

"So He forgave him, for He is indeed the All-Forgiving, Most Merciful," Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) says in the Quran. — (Surah Al-Qasas, ayah 16)

Musa (عَلَيْهِ ٱلسَّلَامُ) then pledged to the Almighty:
"My Lord, because of the favor that You have done me, I shall never support those who do evil." — (Surah Al-Qasas, ayah 17)

According to Qur'an exegetes, this ayah signifies the day Prophet Musa (عَلَيْهِ ٱلسَّلَامُ) severed ties with the Pharaoh and his government, for he knew it was a tyrannical government. He (عَلَيْهِ ٱلسَّلَامُ) would no longer stand by idle seeing such evil and corruption spread on earth.

The next day, when Musa (عَلَيْهِ ٱلسَّلَامُ) was once again walking through the city, he witnessed the same Israelite involved in another brawl.

Musa (عَلَيْهِ ٱلسَّلَامُ) approached the Israelite saying:
“Indeed, you are an evident, [persistent] deviator.” — (Surah Al-Qasas, ayah 18)

For he witnessed the same man getting into a second fight with yet another person.

Fearing that Musa (عَلَيْهِ ٱلسَّلَامُ) might strike him, the Israelite cried, revealing the secret:
“O Musa! Do you intend to kill me as you killed a man yesterday? You only want to be a tyrant in the land. You do not intend to make peace!” — (Surah Al-Qasas, ayah 19)

The remark did not go unnoticed by the Egyptians.

Shortly thereafter, another man approached Musa (عَلَيْهِ ٱلسَّلَامُ) with a sense of urgency, warning him that he was being pursued by Pharaoh's army.

The man spoke:
“O Moses, indeed the eminent ones are conferring over you [intending] to kill you, so leave [the city].” — (Surah Al-Qasas, ayah 20)

Their intentions were clear: they were not seeking to arrest him or provide a fair trial. Instead, the rumors spread that they were determined to impose a death sentence on him.

A HUMBLE ACT OF SERVICE

Worn out after traveling for eight days, his stomach sunken in with lack of food, and the soles of his feet injured after walking barefoot in the hot desert, Musa (عَلَيْهِ ٱلسَّلَامُ) eventually reached a watering hole bordering the country of Midian.

Feeling safe from the pursuit of his enemies, Musa (عَلَيْهِ ٱلسَّلَامُ) decided to rest underneath a tree by a spring where shepherds were watering their herd of cattle. He also noticed two women preventing their sheep from mixing with those of the others.

He asked the women:
“What’s the problem?”

They replied:
“We cannot water our animals until the other shepherds are done.” — (Surah Al-Qasas, ayah 23)

They also shared with Musa (عَلَيْهِ ٱلسَّلَامُ) that their father was too old and sick to tend to this task himself.

Forgetting his thirst, Musa (عَلَيْهِ ٱلسَّلَامُ) said:
"I will water the sheep for you."

The shepherds in the area were known to place a large, heavy stone over the spring's mouth to try and make it less accessible. This was part of the reason why the girls had to wait so as not to mix too closely with the men already there.

He then watered the herd of sheep for the two women, put the rock back in place, and then retreated to the shade of the tree. He had no money, no clothes, nowhere to stay, or a job to sustain himself.

He then prayed to Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) beneath the tree in Midian:
“My Lord! I am truly in desperate need of whatever provision You may have in store for me.” — (Surah Al-Qasas, ayah 24)

The two women returned home much earlier than their father anticipated. Worried, he asked his daughters if everything was okay.

They told their father what happened, and he asked one of them to go back to the watering hole and invite the man over to meet him.

Upon returning to the watering hole, the woman found Musa (عَلَيْهِ ٱلسَّلَامُ) still resting beneath the tree.

She said:
“My father invites you that he may reward you for your having watered our flocks for us.” — (Surah Al-Qasas, ayah 25)

Musa (عَلَيْهِ ٱلسَّلَامُ) welcomed the invitation and accompanied the woman to her home.

He was warmly greeted by the host who was a kind and God-fearing person. Musa (عَلَيْهِ ٱلسَّلَامُ) revealed to the old man the incidents that transpired in his motherland that led him to escape in haste.

The man responded:
“Fear you not. You have escaped from the people who are Zalimun (polytheists, disbelievers, and wrong-doers).” — (Surah Al-Qasas, ayah 25)

Musa’s (عَلَيْهِ ٱلسَّلَامُ) humility and gentleness in behavior were clear to the hosts who invited him to stay with them. He found safety and peace in their house.

A few more days had passed by and they grew more and more comfortable and trusting of one another.

The family was also in need of a shepherd. They required someone strong and reliable — someone like Musa (عَلَيْهِ ٱلسَّلَامُ).

So, one of the daughters suggested to their father:
“Father, employ this man in your service. The best whom you might employ is he who is strong and trustworthy.” — (Surah Al-Qasas, ayah 26)

The father inquired of his daughter about her impressions of Musa (عَلَيْهِ ٱلسَّلَامُ), particularly what made her trust him.

She explained:
"When I invited him to our home, he respectfully requested to walk ahead, so as not to compromise my modesty."

Understanding and appreciative of Musa’s respectfulness, her father saw in him not only honesty but also a strong work ethic. For him, these qualities were the most crucial in judging a man’s character.

He then approached Musa (عَلَيْهِ ٱلسَّلَامُ) and asked:
“I want to marry one of these two daughters of mine to you if you serve me for eight years. But if you complete ten years, that will be of your own accord (but not an obligation). I do not intend to treat you harshly. If Allah wills, you will find me an upright man.” — (Surah Al-Qasas, ayah 27)

The offer suited Musa (عَلَيْهِ ٱلسَّلَامُ) well. He responded:
“So that is agreed between me and you. Whichever of the two terms I fulfill, I trust that I shall not be wronged. Allah is a witness over the covenant we are committing ourselves to.” — (Surah Al-Qasas, ayah 28)

He married one of the shepherd's daughters and found a new beginning in Midian, far removed from his previous life. The turn of events is a testament to how when one puts their complete trust in Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ), He rewards them from unexpected places.

MUSA'S RETURN TO EGYPT

The prophets always fulfill their commitments and have a habit of giving more than what is due. So, after he fulfilled the promised eight years, he stayed for the additional two.

The period of ten years that Musa (عَلَيْهِ ٱلسَّلَامُ) lived away from his family was the most crucial in his journey toward prophethood.

He observed Allah’s (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) creations with wonder — he pondered about the skies and stars, how the sun rose and set each day, and how seeds turned into trees.

He contemplated the magnificence of Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) and His existence in seclusion. This is the period where Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) supplied His messenger with the tools necessary to bear the divine responsibility of prophethood.

After ten years in Midian, a deep homesickness began to stir in Musa's (عَلَيْهِ ٱلسَّلَامُ) heart. Fully aware of the dangers involved in returning to Egypt, he nevertheless felt a strong pull to visit home. The reasons behind his desire to return remained a mystery. Was it the yearning to reunite with his biological family? Or was it the longing to see Asiya, his adoptive mother, who had showered him with maternal love?

Regardless of his motivations, Musa (عَلَيْهِ ٱلسَّلَامُ) reached a firm decision, telling his wife:
"Tomorrow, we shall leave for Egypt."

She was concerned for their safety, for she knew that the Pharaoh was a tyrant and her husband had departed Egypt with trouble at his heels.

Still, she obeyed her husband and prepared for the journey ahead.

ALLAH (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) SPEAKS TO HIS PROPHET

As Musa (عَلَيْهِ ٱلسَّلَامُ) and his family traveled through the desert, they lost their way. While resting in the vicinity of Mount Tur, Musa (عَلَيْهِ ٱلسَّلَامُ) noticed a glow of a fire.

Feeling hopeful, he told his family:
“Wait, I have seen a fire; perhaps I may bring to you from there some information, or a burning fire-brand that you may warm yourselves.” — (Surah Al-Qasas, ayah 29)

As he neared the fire, he heard a strange voice:
“O Musa, verily I am Allah, the Lord of all creatures of the Universe.” — (Surah Al-Qasas, ayah 30)

Taken aback, Musa (عَلَيْهِ ٱلسَّلَامُ) looked around but found no one.

The voice called again:
“And what is in your right hand, O Musa?”

Shaking, Musa (عَلَيْهِ ٱلسَّلَامُ) replied:
“This is my staff on which I lean, and with which I beat down branches for my sheep, and for which I find other uses.”

“Now throw down your staff,” (Surah Al-Qasas, ayah 31) the voice instructed.

But the voice called out once again:
“O Musa! Draw near, and fear not. Verily, you are of those who are secure.” — (Surah Al-Qasas, ayah 32)

Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) then instructed him to grab hold of the serpent, and it would return to its former state.

Musa (عَلَيْهِ ٱلسَّلَامُ) followed the command and grabbed the snake, which miraculously reverted to its original form. He was finally reassured that it was indeed Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ). His fear was replaced by a sense of peace and calm – he was after all in the presence of Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ), the Lord of the worlds.

Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) then commanded His prophet to put his hand through the opening of his collar.

Musa (عَلَيْهِ ٱلسَّلَامُ) did as Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) instructed and when he pulled out his arm, he found it shining bright white!

Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) then directed him to proceed on his journey to confront Pharaoh and his chiefs, saying:
"These are two proofs from your Lord to Pharaoh and his chiefs. They have truly been rebellious people." — (Surah Al-Qasas, ayah 32)

Musa (عَلَيْهِ ٱلسَّلَامُ) appealed:
“My Lord, I have killed one person from among them, and I fear that they will kill me.” — (Surah Al-Qasas, ayah 33)

Musa (عَلَيْهِ ٱلسَّلَامُ) trusted Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ); he did not deny what was asked of him. However, he was insecure in his ability as he still had a speech impediment. He felt as though his brother would be better suited to deliver the message:
"My brother Harun is more eloquent in speech than I: so send him with me as a helper to confirm my truthfulness for I fear that they will reject me as a liar."

Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) replied:
"We will certainly strengthen you through your brother and will invest both of you with such power that they shall not be able to hurt you. With the help of Our Signs the two of you and your followers will prevail." — (Surah Al-Qasas, ayat 34-35)

Musa (عَلَيْهِ ٱلسَّلَامُ) understood that when Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) chooses a messenger, it's because He knows better and has given them all that is necessary to fulfill His message. This understanding resonates with the broader message in Surah Al-Baqarah verse 286:
"Allah does not burden any human being with a responsibility heavier than he can bear."

Feeling the weight of his responsibility, he offered one final prayer before embarking on this journey to confront the Pharaoh:

Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) responded:
“We will assist you with your brother and grant you both authority so they cannot harm you. With Our signs, you and those who follow you will certainly prevail.” — (Surah Al-Qasas, ayah 35)

Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) also told them:
"So go to him and say, ‘Behold, both of us are the Messengers of your Lord. Let the Children of Israel go with us, and do not chastise them. We have come to you with a sign from your Lord; and peace shall be for him who follows the true guidance. It has been revealed to us that chastisement awaits those who called the lie to the truth and turned away from it.’" — (Surah At-Taha, ayat 47-48)

THE PROPHETS APPROACH PHARAOH

So, the brothers, Prophet Musa (عَلَيْهِ ٱلسَّلَامُ) and Prophet Harun (عَلَيْهِ ٱلسَّلَامُ), obtained an audience with the Pharaoh.

“What do you want?” the Pharaoh asked Musa (عَلَيْهِ ٱلسَّلَامُ).

“The Lord of the Universe has sent us that you let the Children of Israel go with us,” he replied. — (Surah Ash-Shu’ara, ayat 16-17)

Pharaoh protested:
"Did we not raise you among us as a child, and you stayed several years of your life in our care? And then you committed that crime of yours: you were so ungrateful." — (Surah Ash-Shu’ara, ayat 18-19)

The threat in Pharaoh’s statement did not go unnoticed by Musa (عَلَيْهِ ٱلسَّلَامُ).

But he replied:
“I did it then, lacking guidance. So I fled from you when I feared you. Then my Lord granted me wisdom and made me one of the messengers. How can that be a favor, of which you remind me when it was only because you have enslaved the Children of Israel?” — (Surah Ash-Shu’ara, ayat 20-22)

He asked:
“And who is this Lord of the Universe?” — (Surah Ash-Shu’ara, ayah 23)

Musa (عَلَيْهِ ٱلسَّلَامُ) replied:
“The Lord of the heavens and the earth and of all that is between them, if you were only to believe.” — (Surah Ash-Shu’ara, ayah 24)

Pharaoh scoffed. How could a child he raised as his own dare question his power?

Turning to his chiefs and everyone gathered, he asked:
“Do you hear (what he says)?” — (Surah Ash-Shu’ara, ayah 25)

Musa (عَلَيْهِ ٱلسَّلَامُ) ignored his remark and continued:
“He is your Lord and the Lord of your forefathers.” — (Surah Ash-Shu’ara, ayah 26)

Pharaoh said mockingly to those around him:
“This Messenger of yours who has been sent to you is simply mad.” — (Surah Ash-Shu’ara, ayah 27)

Musa (عَلَيْهِ ٱلسَّلَامُ) added:
“(He is) the Lord of the east and the west, and all between them. If you only had any understanding!” — (Surah Ash-Shu’ara, ayah 28)

The Pharaoh had enough. He couldn’t listen to Musa (عَلَيْهِ ٱلسَّلَامُ) challenging his authority anymore.

“If you take any god other than me, I will certainly make you one of those (who are rotting) in prison,” he bellowed. — (Surah Ash-Shu’ara, ayah 29)

Musa (عَلَيْهِ ٱلسَّلَامُ) responded:
“Even if I bring you clear proof?” — (Surah Ash-Shu’ara, ayah 30)

Pharaoh challenged:
“Then bring it if you are truthful at all.” — (Surah Ash-Shu’ara, ayah 31)

As Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) had shown him, Musa (عَلَيْهِ ٱلسَّلَامُ) threw down his staff, which turned into a giant snake, leaving all those present terrified. He then drew his hand out of his collar and it shone white for all to see. — (Surah Ash-Shu’ara, ayat 32-33)

Despite the clear, undeniable proofs, the Pharaoh's mind refused to accept the existence of a power greater than his own. He was stubborn in the face of the truth; he couldn't bring himself to admit the possibility of being wrong before his people.

So, in a desperate attempt to undermine Musa (عَلَيْهِ ٱلسَّلَامُ), he turned to his chiefs and said:
“Surely this man is a skilled magician, who wants to drive you out of your land by his magic. Tell us, what do you advise us?” — (Surah Ash-Shu’ara, ayat 34-35)

The chiefs proposed that the brothers be detained while the most skilled magicians in the area were gathered. They explained that if the magicians could reproduce the magic trick that Musa (عَلَيْهِ ٱلسَّلَامُ) had performed, it would take away all his credibility and influence.

PROPHET MUSA (عَلَيْهِ ٱلسَّلَامُ) BATTLES THE MAGICIANS

People from all over the land gathered in the city to witness the contest.

On one side were the Pharaoh's most skilled magicians; on the other stood Musa (عَلَيْهِ ٱلسَّلَامُ), once considered the son and prince of the Pharaoh, now boldly challenging him as a Prophet of a different faith.

The duel was about to unfold, and the public was paying close attention. It was a high-stakes situation.

If the Pharaoh lost, he risked losing the respect and authority of his subjects. He would effectively make Musa (عَلَيْهِ ٱلسَّلَامُ) a hero amongst the people, which he viewed as a direct challenge to his power and reign.

A victory for Musa (عَلَيْهِ ٱلسَّلَامُ) would give him the footing to be accepted as a Prophet by the people, and perhaps he would be able to convince Pharaoh to accept Allah, seek forgiveness, and liberate the children of Israel.

The magicians came to Pharaoh and said: “Shall we have a reward if we win?” Pharaoh replied: “Certainly, and you shall be among those who are near to me.” Then they said: “O Musa, will you [first] throw your rod, or shall we throw?” Musa said: “You throw.” So when they threw [their rods], they enchanted the eyes of the people, and struck them with awe, and produced a mighty sorcery. — (Surah Al-A'raf, ayat 113-116)

The magicians skillfully executed their sleight of hand trick, creating the illusion of transforming their staffs into snakes.

This spectacle enchanted the onlookers; people cheered on as the Pharaoh smiled observing the scene. He believed he had successfully unmasked Musa (عَلَيْهِ ٱلسَّلَامُ) as a fraud.

The Qur'an recounts the feelings of that moment and how "Musa's heart was filled with fear." — (Surah At-Taha, ayah 68)

He felt an overwhelming wave of nervousness, uncertain of his next move. Doubt crept in; what if the optical illusion of the magicians was so compelling of an image that any act by him wouldn't be enough to convince the crowd. What then?

Allah said:
"Fear not. For it is you who will prevail. And throw down what is in your right hand; it will swallow up all that they have wrought. They have wrought only a magician’s stratagem. A magician cannot come to any good, come whence he may." — (Surah At-Taha, ayat 68-69)

Musa (عَلَيْهِ ٱلسَّلَامُ) cast down his staff, which turned into a giant serpent before the eyes of the onlookers.

Musa (عَلَيْهِ ٱلسَّلَامُ) then picked it up, upon which it converted into a staff once again.

The crowd rose, applauding and shouting words of praise at Musa (عَلَيْهِ ٱلسَّلَامُ). They had never witnessed such a spectacle in their lives.

All the Pharaoh's magicians fell into prostration, declaring:
“We now believe in the Lord of all worlds — the Lord of Musa and Harun.” — (Surah Ash-Shu’ara, ayat 46-48)

The Pharaoh was furious. This was certainly not how he planned the day to end.

He threatened his magicians, assuming that they conspired with Musa (عَلَيْهِ ٱلسَّلَامُ) against him:
“You have believed in him before I give you leave. Surely, he indeed is your chief, who has taught you magic! So verily, you shall come to know. Verily, I will cut off your hands and your feet on opposite sides, and I will crucify you all.” — (Surah Ash-Shu’ara, ayah 49)

The magicians fearlessly professed their unwavering faith in Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ).

They replied:
"That would be no harm! Surely to our Lord, we will all return. We hope that our Lord will forgive our sins, as we are the first to believe.” — (Surah Ash-Shu’ara, ayat 50-51)

Pharaoh had never before faced such open defiance from his subjects. In his view, he was the supreme leader, invincible and beyond defeat. Firm in his belief, he was unable to accept Musa's (عَلَيْهِ ٱلسَّلَامُ) message or show any sign that he could be wrong.

He dug in his heels further.

The Pharaoh came up with a plan to try and save his reputation. He spread a rumor across the land that Musa (عَلَيْهِ ٱلسَّلَامُ) had won the contest because he conspired with the magicians and hatched a plot.

To instill fear and serve as a warning to others, he executed all the magicians who participated in the contest and left their bodies hanging from trees.

This was the first time the Pharaoh visibly felt his power under threat, and he was prepared to go to any lengths to protect it. In the subsequent days, his grip tightened as he unleashed harsher restrictions and punishments against the children of Israel.

THE AFTERMATH: PHARAOH RETALIATES

Pharaoh returned to his palace and began fighting with his ministers. Emotions ran hot, and he disparaged all the men in his quarters for no reason. Seeing these discussions as being pointless, he kicked everyone out of the room. When left alone, he tried to think more calmly but failed. He drank several cups of wine, but the anger did not subside.

He then summoned all the chiefs and elders back for a meeting to try and figure out how they could silence Musa (عَلَيْهِ ٱلسَّلَامُ) and prevent his influence from spreading further.

Pharaoh’s senior minister, Haman, spoke up. Pharaoh completely disregarded what he said.

He asked Haman:
"Am I a liar, O Haman?"

Haman fell to his knees and asked:
"Who dared to accuse Pharaoh of lying?"

Pharaoh proceeded to ask:
"Has Musa not said that there is a Lord in heaven?"

Haman responded:
"Musa is a liar."

Turning his face to the other side, Pharaoh quietly whispered:
"I know he is a liar."

"The elders of Pharaoh’s people said: ‘Will you leave alone Moses and his people to spread mischief in the land, and forsake you and your gods?’ Pharaoh replied: ‘We will kill their male children and spare their female ones. For indeed we hold irresistible sway over them.’" — (Surah Al-A'raf, ayah 127)

Pharaoh then returned to Haman and asked:
“Haman, build for me a lofty tower that I may scale the highways — the highways to the heavens — and have a look at the God of Moses, although I am certain that Moses is a liar." — (Surah Ghafir, ayat 36-37, also mentioned in Surah Al-Qasas, ayah 38)

Haman agreed outwardly, fearing any backlash, but he didn't really mean it. He knew the Pharaoh was irrational and the project was doomed to fail.

Choosing his words carefully, he addressed Pharaoh:
"Your majesty, let me object to Pharaoh for the first time. You will never find anyone in the heavens. There is no god but you."

This response satisfied Pharaoh's ego; no evidence suggests that this tower was ever constructed. However, some scholars report that the building was built, but once it reached higher levels, it collapsed.

Meanwhile, the Pharaoh's other directives were enforced and took full effect. His army began spreading evil and committing horrendous crimes against the children of Israel who defied his rule.

Musa (عَلَيْهِ ٱلسَّلَامُ) watched helplessly as he didn’t have any authority to stop the tyranny. He continued to advise his people to ask Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) for patience and pray to Him, asking Him for a calamity to befall the Egyptians.

"Moses said to his people: 'Seek help through Allah and be patient. Indeed, the earth belongs to Allah. He causes to inherit it whom He wills of His servants. And the [best] outcome is for the righteous.' They said, 'We have been harmed before you came to us and after you have come to us.' He said, 'Perhaps your Lord will destroy your enemy and grant you succession in the land and see how you will do.'" — (Surah Al-A'raf, ayat 128-129)

THE STORY OF QARUN

وَمَآ أُوتِيتُم مِّن شَيۡءٖ فَمَتَٰعُ ٱلۡحَيَوٰةِ ٱلدُّنۡيَا وَزِينَتُهَاۚ وَمَا عِندَ ٱللَّهِ خَيۡرٞ وَأَبۡقَىٰٓۚ أَفَلَا تَعۡقِلُونَ

Transliteration: Wa maaa ooteetum min shai’in famataa’ul hayaatid dunyaa wa zeenatuhaa; wa maa ‘indal laahi khairunw wa abqaa; afalaa ta’qiloon (60)

English Translation: "And whatever you have been given is an enjoyment of the life of (this) world and its adornment, and that (Hereafter) which is with Allah is better and will remain forever. Have you then no sense?" — (Surah Al-Qasas, ayah 60)

This ayah foreshadows the fate of a man named Qarun.

Musa (عَلَيْهِ ٱلسَّلَامُ) was facing multiple battles at once. He was trying to ward off the evils of the Pharaoh while trying to shelter his people and curtail their doubts. Amid all this conflict, Qarun decided to pick up and move.

Qarun was one of the children of Israel and was subjected to a unique trial by Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ): immense wealth.

He was provided with a grand mansion, expensive clothing, numerous servants, and the means to indulge in every luxury imaginable.

His riches are described in Surah Al-Qasas, verse 76:
"We gave him of treasures whose keys would burden a band of strong men," meaning his wealth was so vast that just the keys to his treasure troves would be too heavy for a group of strong men to carry.

Having acquired all this wealth, you would think Qarun would be dutiful to Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ), the One who gave him both the opportunity and the capability. However, Qarun let greed and arrogance corrupt his heart, keeping him away from Allah's (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) path, which is one of humility and gratitude.

The Qur'an gives clear advice to Qarun, warning him:
"Do not exult. Indeed, Allah does not like the exultant. Seek by means of the wealth that Allah has granted you the Abode of the Hereafter, but forget not your share in this world and do good as Allah has been good to you and do not strive to create mischief in the land, for Allah loves not those who create mischief." — (Surah Al-Qasas, ayat 76-77)

But these orders fell on deaf ears as he remained arrogant, disregarding everyone who tried to advise him.

When he publicly displayed his wealth, the people who were attracted by the allure of worldly life would say:
"If only we had been given something like what Qarun has been given: He is the owner of a great fortune." — (Surah Al-Qasas, ayah 79)

He boasted his greatness:
"All this has been given to me on account of a certain knowledge that I have." — (Surah Al-Qasas, ayah 78)

This statement reflected his misguided belief in his own abilities as the source of his wealth.

However, those endowed with true understanding, who possessed religious knowledge, offered a different perspective and said:
"Woe to you. The reward of Allah is best for those who believe and act righteously. But none except those who are patient shall attain this." — (Surah Al-Qasas, ayah 80)

Musa (عَلَيْهِ ٱلسَّلَامُ) explained to Qarun how hoarding his wealth and spending it only on himself is one of the disturbances in the land that causes evil to spread.

This annoyed Qarun very much; he did not like the idea of giving his wealth away for nothing, nor did he like being told what to do. The money felt much better in his pockets than someone else's.

Although Zakat represents only a small fraction of one's total wealth, when Qarun calculated the amount due, he was shocked to see such a large number. He not only refused to pay but went on to bribe people to spread a rumor that Musa (عَلَيْهِ ٱلسَّلَامُ) had invented the law of Zakat for personal gain.

Musa (عَلَيْهِ ٱلسَّلَامُ) turned to Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) to punish him for his stinginess, and Allah responded:
"So We caused the earth to swallow him and his dwelling place. Then he had no group or party to help him against Allah, nor was he one of those who could save themselves." — (Surah Al-Qasas, ayah 81)

A BELIEVER DEFENDS MUSA (عَلَيْهِ ٱلسَّلَامُ)

With each sign from Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ), Musa (عَلَيْهِ ٱلسَّلَامُ) hoped the Pharaoh would come to his senses and alter his course. Yet, these signs only seemed to push Pharaoh further to subjugate and oppress the children of Israel.

Musa (عَلَيْهِ ٱلسَّلَامُ) remained steadfast, showing no indication of surrendering. He garnered more support among his people, and this drove Pharaoh to the point of uncontrollable anger. He convened a meeting with his chiefs, ministers, and other notables.

He addressed the assembly:
"Let me kill Musa, and let him call upon his Lord! I truly fear that he may change your traditions or cause mischief in the land." — (Surah Al-Ghafir, ayah 26)

Most of those present readily favored the idea, except for one nobleman who (like Asiya) was discreetly a believer.

He reasoned:
“Do you kill a person simply because he says: ‘My Lord is Allah’ even though he brought to you clear Signs from your Lord? If he is a liar, his lying will recoil upon him; but if he is truthful, you will be smitten with some of the awesome consequences of which he warns you. Allah does not guide to the Right Way any who exceeds the limits and is an utter liar. My people, today the kingdom is yours, and you are supreme in the land. But if Allah’s chastisement were to come upon you, who will come to our help?” — (Surah Al-Ghafir, ayat 28-29)

The Pharaoh and his disciples were not happy listening to the man. They threatened to harm him, but he was unafraid as he knew that Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) was on his side.

The man also warned the Pharaoh and his chiefs that just as the nations of Nuh, Ad, and Thamud, they, too, were inviting their doom by attempting to kill the Messenger.

This infuriated the Pharaoh further, who then threatened to kill the man. However, Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) protected His believer.

THE STORY OF THE PLAGUE

Prophet Musa (عَلَيْهِ ٱلسَّلَامُ) continued to demand that the Pharaoh release the Israelites and warned him of Allah’s (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) punishment if he did not agree. But, the Pharaoh paid no heed.

"And they said to Moses: ‘Whatever sign you might produce before us in order to enchant us, we are not going to believe you." — (Surah Al-A'raf, ayah 132)

One day, the Pharaoh called Egyptians and the Israelites to a large gathering. He reminded them it was he who was their Lord who provided them with their necessities. He showed them that Musa (عَلَيْهِ ٱلسَّلَامُ) was a liar and an ordinary poor man who could not provide them with anything.

To the masses, there was indeed a clear distinction between the Pharaoh, who seemed powerful and superior, and Musa (عَلَيْهِ ٱلسَّلَامُ), who was poor and lacking authority. Years of oppression had narrowed their vision, making it difficult for them to conceive a reality different from their present.

They saw the disparity between Musa and the Pharaoh and quickly judged based on what the eyes could see, completely overlooking Musa's (عَلَيْهِ ٱلسَّلَامُ) status as a Messenger of Allah.

However, the situation began to change as Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) began to send down His signs one by one.

First, the River Nile, which supplied water to the crops in Egypt, began drying up. With the water levels depleting, the river banks remained dry, and the water supply to the crops was cut off.

A severe famine ensued, yet the Pharaoh remained defiant. This drought was soon followed by a massive flood, further devastating the land.

As the people were faced with adversity, they remembered Musa’s (عَلَيْهِ ٱلسَّلَامُ) warning of severe punishment if they rejected Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ).

So they pleaded with him:
“O Musa, pray to your Lord for us by virtue of the promise He has made to you: if you relieve us of the plague, we will believe you and let the Children of Israel go with you.” — (Surah Al-A’raf, ayah 134)

So, Prophet Musa (عَلَيْهِ ٱلسَّلَامُ) intervened and invoked the Almighty to ease His punishment. The water withdrew from the land, becoming fertile and cultivable again. But, they failed to fulfill their promise and returned to their old evil ways.

The people turned to Musa (عَلَيْهِ ٱلسَّلَامُ) again, imploring him to intervene once more. But they failed to keep their word when the Lord eased His punishment.

Confronted with yet another plague, the Egyptians found themselves battling an infestation of lice that spread various diseases across the land.

Showing no shame, they rushed back to Musa (عَلَيْهِ ٱلسَّلَامُ), vowing to free the Israelites if relief was shown. But, once again, they broke their promise once the plague was lifted.

True to their pattern, the Egyptians reacted predictably when the next sign came down. This time, Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) sent an army of frogs by the millions. They hopped everywhere, in the rivers and roads, even making their way into their homes and beds.

When Prophet Musa (عَلَيْهِ ٱلسَّلَامُ) and the Israelites drew water from the Nile, it seemed to be ordinary, but when the Egyptians did so, the water turned to blood. As usual, they ran to Musa (عَلَيْهِ ٱلسَّلَامُ) promising to release the Israelites, but ignored him once their punishment was removed.

Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) says in the Quran:
"Then We afflicted them with a great flood and locusts, and the lice, and the frogs, and the blood. All these were distinct signs and yet they remained haughty. They were a wicked people." — (Surah Al-A’raf, ayah 133)

THE CHILDREN OF ISRAEL MAKE THEIR ESCAPE

Despite the clear signs sent by Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ), the Pharaoh and Egyptians continued to disbelieve. They did not keep their promise of freeing the children of Israel and instead continued to harass them as they did before. Prophet Musa (عَلَيْهِ ٱلسَّلَامُ) understood that their arrogance would not allow them to believe.

So Musa (عَلَيْهِ ٱلسَّلَامُ) prayed:
"Our Lord! You bestowed upon Pharaoh and his nobles splendour and riches in the world. Our Lord! Have You done this that they may lead people astray from Your path? Our Lord! Obliterate their riches and harden their hearts that they may not believe until they observe the painful chastisement." — (Surah Yunus, ayah 88)

Allah responded:
"Your prayers are answered, so stay on the right course, and do not follow the path of those who do not know." — (Surah Yunus, ayah 89)

The children of Israel hatched a plan to leave Egypt. They cleverly sought the Pharaoh's approval to attend festivities outside a neighboring city. This was to mask their true intentions of a mass exodus.

They also requested to borrow some jewelry from the Egyptians, promising to return it after their festival. This was another part of their strategy to disguise their plans further and avert any suspicion.

Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) then sent inspiration to Moses:
"Travel by night with My servants" — (Surah Ta-Ha, ayah 77)

And so, through the darkness of night, Prophet Musa (عَلَيْهِ ٱلسَّلَامُ) led his followers.

By the morning, they reached the Red Sea.

As the news of the Israelites' escape reached the Pharaoh, his mind raced with the implications. This was far more than a simple loss of labor; it was a direct challenge to his authority and divine status. He urgently summoned his generals, mobilized his army, and led the pursuit after them.

As the Israelites neared the edge of the sea, some began to hear a faint but growing sound of horses' hooves in the distance. Turning to their backs, they saw a cloud of dust rising on the horizon. Panic rippled through the crowd.

“We are overtaken for sure,” they cried out. — (Surah Ash-Shu’ara, ayah 61)

Musa (عَلَيْهِ ٱلسَّلَامُ) reassured them:
“Absolutely not! My Lord is certainly with me — He will guide me.” — (Surah Ash-Shu’ara, ayah 62)

The words only managed to reassure his followers briefly. As the Pharaoh's army advanced, their resolve shattered, and they prepared to surrender themselves back to a life of slavery under the Pharaoh’s rule.

As the chariots neared closer, Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) commanded Musa (عَلَيْهِ ٱلسَّلَامُ):
"Strike the sea with your rod." — (Surah Ash-Shu’ara, ayah 63)

In a race against time, they proceeded along the seabed. As they came close to crossing to the opposite shore, they glanced back to see Pharaoh's army still relentlessly pursuing them. They were unmoved in the face of Allah's miraculous intervention. People from Musa's (عَلَيْهِ ٱلسَّلَامُ) nation begged to close the path behind them.

However, Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) instructed him to hold back as He had a plan for the tyrant ruler.

DEATH OF THE PHARAOH

Pharaoh had declared to his army that the sea had parted at his command to pursue the infidels and arrest them. So they rushed through the partition.

When they were midway, Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) ordered the sea to return to its former state. Pharaoh began panicking.

With fear in his mind, knowing that his end was near, he cried out:
“I believe that there is no god but Allah in Whom the Children of Israel believe, and I am also one of those who submit to Allah.” — (Surah Yunus, ayah 90)

But his proclamation was insincere and late.

Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) said in the Quran:
"Now you believe, although you disobeyed earlier and were one of the mischief-makers. We shall now save your corpse that you may serve as a sign of warning for all posterity, although many men are heedless of Our signs." — (Surah Yunus, ayat 91-92)

The waves of the Red Sea drowned the Pharaoh and his army.

His corpse washed ashore as a reminder and a sign for the Egyptians and all other disbelievers that the man they worshiped was a mere slave who spread corruption in the land and met his end most tragically.

THE ISRAELITES' WAVERING OBEDIENCE

The miraculous parting of the Red Sea was still fresh in the Israelites' minds when they passed by a town of idol-worshippers on their way to the promised land.

Accustomed to worshiping Pharaoh and the gods he approved, the Israelites felt an idol was amiss. Although they were aware that it was none other than Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) who saved them from the tyrant, they couldn’t help but desire an idol for themselves.

“O Musa! Make for us a god like their gods,” they asked their Prophet. — (Surah Al-A’raf, ayah 138)

Musa (عَلَيْهِ ٱلسَّلَامُ) was appalled that his people had learned nothing from their trials:
“Indeed, you are a people acting ignorantly! What they follow is certainly doomed to destruction and their deeds are in vain. Shall I seek for you a god other than Allah, while He has honored you above the others?” — (Surah Al-A’raf, ayat 138-140)

Still, Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) favored Musa's (عَلَيْهِ ٱلسَّلَامُ) nation.

When the Israelites quarreled over the shortage of water, Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) ordered His Messenger to "Strike the rock with your staff" — (Surah Al-Baqarah, ayah 60).

Upon striking, the rock miraculously split, revealing twelve springs to quench the thirst of the twelve different tribes. When they were overcome with hunger, Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) offered them quail and manna (the dried exudate of certain plants). Despite this, they were never content.

They approached Prophet Musa (عَلَيْهِ ٱلسَّلَامُ) and said:
“O Musa, we cannot endure one and the same sort of food. Pray your Lord to bring for us the products of the earth green herbs, vegetables, corn, garlic, onions, pulses and the like.” — (Surah Al-Baqarah, ayah 61)

Musa (عَلَيْهِ ٱلسَّلَامُ) reprimanded them:
“What! Would you exchange that which is better for that which is lower? Go you down to any town and you shall find what you want!” — (Surah Al-Baqarah, ayah 61)

Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) guided Musa (عَلَيْهِ ٱلسَّلَامُ) to lead the Israelites to the Promised Land, where they were destined to live in freedom and adhere to Allah's law. However, during their journey, they were ungrateful. They incessantly whined and cried, showing little appreciation.

When Musa (عَلَيْهِ ٱلسَّلَامُ) ordered them to conquer Canaan, a land occupied by their enemies (the Hittites), they hesitated. This is despite their vast numbers, which are reportedly 600,000 people. Only two men stood ready to fight, trusting in Allah's plan, while the rest cowered away.

Musa (عَلَيْهِ ٱلسَّلَامُ) said to his people:
“My people, remember Allah’s favour upon you when He raised Prophets amongst you and appointed you rulers, and granted to you what He had not granted to anyone else in the world. My people! Enter the holy land which Allah has ordained for you; and do not turn back for then you will turn about losers.”

They answered:
‘Moses, therein live a ferocious people: we will not enter unless they depart from it; but if they do depart from it then we will surely enter it.’ — (Surah Al-Ma’idah, ayat 20-22)

The two men tried to convince their people.

They said:
“Assault them through the gate, for when you are in, victory will be yours, and put your trust in Allah if you are believers indeed."

Nevertheless they said:
‘O Musa! Never shall we enter it as long as they are there. Go forth, then, you and your Lord, and fight, both of you. As for us, we will sit here.’ — (Surah Al-Ma’idah, ayat 23-24)

MUSA (عَلَيْهِ ٱلسَّلَامُ) MEETS ALLAH (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ)

Prophet Musa (عَلَيْهِ ٱلسَّلَامُ) was frustrated and tired.

He finally gave up on his people as he knew that no matter what Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) bestowed upon them, they would not be content and would continue to transgress. He returned to his Lord, asking to be responsible only for the actions of himself and his brother, Harun (عَلَيْهِ ٱلسَّلَامُ).

So, he pleaded with his Lord:
"My Lord! I have no control over anyone except myself and my brother. So set us apart from the rebellious people."

Allah said:
'This land will now be forbidden to them for forty years and they will remain wandering about on the earth. Do not grieve over the condition of these transgressing people.' — (Surah Al-Ma'idah, ayat 25-26)

Their journey transformed into an endless cycle of restless wandering, where each day seemed to end where it began. Aimlessly, they traveled through the desert until, one day, their path brought them to Mount Sinai, the sacred site of Musa's first encounter with Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ).

Here, Musa (عَلَيْهِ ٱلسَّلَامُ) broke away from the group to seek out guidance as he felt lost and unsure of what to do next.

He left the group under the leadership of Harun (عَلَيْهِ ٱلسَّلَامُ).

At the mount, Musa (عَلَيْهِ ٱلسَّلَامُ) sought direction from his Lord on how best to lead his people. Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) responded, instructing His Messenger to purify himself first by fasting for thirty days. Following this command, Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) would then give him the laws by which to govern his people.

He stayed at the top of the mountain alone, and on the final day of fasting, he ate from a plant intending to freshen his breath. He believed it was important to present himself in the best manner possible before standing in front of Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ).

Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) then spoke to Musa (عَلَيْهِ ٱلسَّلَامُ):
“Why did you break your fast?”

Musa (عَلَيْهِ ٱلسَّلَامُ) replied:
“O my Lord, I disliked to speak to You with my mouth not having a pleasant smell.”

Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) said:
“Do you not know Musa, the odor of the faster's mouth is more fragrant to Me than the rose. Go back and fast ten days; then come back to Me."

Hence, Musa (عَلَيْهِ ٱلسَّلَامُ) fasted for an additional ten days.

"And We appointed for Moses thirty nights, to which We added ten, whereby the term of forty nights set by his Lord was fulfilled." — (Surah Al-A'raf, ayah 143)

Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) replied:
“Never can you see Me. However, behold this mount; if it remains firm in its place, only then you will be able to see Me.”

When Musa (عَلَيْهِ ٱلسَّلَامُ) recovered, he cried out:
“Glory be to You! To You I turn in repentance, and I am the foremost among those who believe.” — (Surah Al-A’raf, ayah 143)

The Almighty said to Musa:
“O Musa! I have indeed preferred you to all others by virtue of the Message I have entrusted to you and by virtue of My speaking to you. Hold fast therefore, to whatever I have granted you, and give thanks.” — (Surah Al-A’raf, ayah 144)

THE TEN COMMANDMENTS

Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) then revealed to Prophet Musa (عَلَيْهِ ٱلسَّلَامُ) tablets of stone inscribed with His divine rules and laws.

In the Qur'an, it is believed the exact commandments Musa (عَلَيْهِ ٱلسَّلَامُ) was given were also revealed to Prophet Muhammad (ﷺ) in Surah Al-An'am:
"Say, O Prophet, 'Come! Let me recite to you what your Lord has forbidden to you: do not associate others with Him in worship. Do not fail to honor your parents. Do not kill your children for fear of poverty. We provide for you and them. Do not come near indecencies, openly or secretly. Do not take a human life—made sacred by Allah—except with legal right. And do not come near the wealth of the orphan—unless intending to enhance it—until they attain maturity. Give full measure and weigh with justice. We never require any soul more than what it can afford. Whenever you speak, maintain justice—even regarding a close relative. And fulfill your covenant with Allah. This is what He has commanded you, so perhaps you will be mindful. And, [moreover], this is My path, which is straight, so follow it; and do not follow [other] ways, for you will be separated from His way. This has He instructed you that you may become righteous.'" — (Surah Al-An’am, ayat 151-153)

Note: Islam does not accept the absolute authority of the Bible as it has become corrupted over the years. So, although the Ten Commandments were mentioned in Surah Al-An'am, which has many crossovers with the commandments of the Bible, they also have their differences. However, if we go beyond these verses, the sentiment of the Ten Commandments can be found in other places of the Qur'an and Sunnah. For example, instead of "remember the Sabbath day and keep it holy," the Qur'an states: "O you who believe, when the prayer is announced on Friday, then proceed to the remembrance of Allah and leave trade. That is better for you, if you only knew." — (Surah Al-Jumu'ah, ayah 9)

THE STORY OF THE GOLDEN CALF

During the absence of Musa (عَلَيْهِ ٱلسَّلَامُ), the task of leading the people temporarily fell on Prophet Harun (عَلَيْهِ ٱلسَّلَامُ). However, as the days passed, a sense of restlessness and unease began to grow among the people.

Taking advantage of this sentiment, a corrupted and rebellious magician, whom the Qur'an refers to as Samiri, spread a rumor that Musa (عَلَيْهِ ٱلسَّلَامُ) had abandoned them. He then proposed they should look for another god to guide them, for they were lost.

With no opposition from the people, he collected the gold jewelry they had received from the Egyptians and placed the items in a pit. He then kindled a large fire, melting the gold down.

During the casting, he theatrically threw dust and made gestures to enhance the illusion of his "magic." Skillfully, he shaped the molten gold into the form of a calf, hollow in construction.

This was engineered with a distinct purpose: Samiri knew the people's history and how similar superstitions of the past fooled them. And so, when the wind blew through the calf, it produced a sound mimicking something supernatural. And so, many people just accepted the Golden Calf as their new god.

Prophet Harun (عَلَيْهِ ٱلسَّلَامُ) was in great distress.

He tried to warn them by saying:
“My people, you have fallen into error because of the calf. Surely your Lord is Most Compassionate; so follow me and obey my command.”

But they answered:
“By no means shall we cease to worship it until Moses returns to us.” — (Surah At-Taha, ayat 90-91)

However, a group of them remained patient, believing in Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) and His message. They distanced themselves from the idol worshippers awaiting Musa's (عَلَيْهِ ٱلسَّلَامُ) return.

MUSA (عَلَيْهِ ٱلسَّلَامُ) RETURNS

Back at Mount Sinai, Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) revealed to Musa (عَلَيْهِ ٱلسَّلَامُ):
“We have indeed tested your people in your absence, and the Samiri has led them astray.” — (Surah At-Taha, ayah 85)

The Israelites danced and chanted around the statue of the golden calf when Musa (عَلَيْهِ ٱلسَّلَامُ) made his return. Witnessing the current state of his people, he was overwhelmed with a mix of sorrow and fury.

He said:
“My people! Has your Lord not made good an excellent promise He made to you? And has a long time passed since those promises were fulfilled? Or was it to incur the wrath of your Lord that you broke your promise with me?”

They answered:
“We did not break our promise with you out of our own volition; but we were laden with the load of people’s ornaments, and we simply threw them down (into the fire), and the Samiri also threw down something.” — (Surah At-Taha, ayat 86-87)

Musa (عَلَيْهِ ٱلسَّلَامُ) then turned to his brother with anger. He understood the people's weaknesses, but he held Harun (عَلَيْهِ ٱلسَّلَامُ) responsible for not preventing this idolatrous behavior.

He threw the tablets down and seized his brother by his beard, pulling him towards him, he said:
"Harun! What prevented you, when you saw them going astray," — (Surah Ta-Ha, ayah 92)

Harun (عَلَيْهِ ٱلسَّلَامُ) explained:
"My mother’s son, the people overpowered me and almost killed me. So let not my enemies gloat over me, and do not number me among the wrong-doing folk." — (Surah Al-A'raf, ayah 150)

Musa’s (عَلَيْهِ ٱلسَّلَامُ) anger subsided when he realized that his brother was helpless.

Musa then questioned Samiri:
“What, then, is your case, O Samiri?”

He answered:
“I saw what the people did not see. So I took a handful of dust from the trail of the Messenger, and I flung it (into the fire). Thus did my mind prompt me.”

Musa said:
“Be gone, then. All your life you shall cry: 'touch me not.' There awaits a term for your reckoning that you cannot fail to keep. Now look at your god that you devotedly adored: We shall burn it and scatter its remains in the sea.” — (Surah Ta-Ha, ayat 95-97)

Samiri was banished and forced to live a life of isolation. As for the golden calf, it was destroyed by fire, and its ashes spread across the sea.

THE PUNISHMENT OF THE IDOLATERS

Musa (عَلَيْهِ ٱلسَّلَامُ) then addresses his people, asking them to seek forgiveness from Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) for their disobedience. The punishment decreed for their transgression was severe.

As mentioned in the Qur'an, Musa says:
"O my people, you have wronged yourselves grievously by taking the calf for worship. Therefore, turn to your Creator in penitence and slay the guilty ones among you. This is best for you in the sight of your Creator." — (Surah Al-Baqarah, ayah 54)

Some among the elites questioned whether the divine laws brought by Musa (عَلَيْهِ ٱلسَّلَامُ) were really from Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) and wanted evidence. So, Musa (عَلَيْهِ ٱلسَّلَامُ) chose seventy elders from among the Israelites to travel to Mount Sinai where he once again ordered: "Rush towards Allah and repent for what you did and ask His forgiveness for what you left." The men remained arrogant and disbelieving.

To show His boundless mercy, Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) spoke directly to Musa (عَلَيْهِ ٱلسَّلَامُ) in the presence of the Israelites, so they may hear His words and believe. Despite this, their disbelief persisted.

They confronted their prophet with a new demand, saying:
“O Musa! We will never believe you until we see Allah with our own eyes.” — (Surah Al-Baqarah, ayah 55)

It was apparent that nothing could convince the men to abandon their old ways and worship Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ).

Prophet Musa (عَلَيْهِ ٱلسَّلَامُ) was overcome with sorrow for his people. He appealed to his Lord to pardon them for their foolish actions.

Allah, the Most Merciful, forgave them and brought them back to life.

English Translation:
"At that very time a thunderbolt struck you while you were looking on and you fell lifeless. Then We raised you to life so that you might become grateful for this favour." — (Surah Al-Baqarah, ayat 55-56)

In Surah Al-A'raf, verses 155-157, we are told of the supplication that Musa (عَلَيْهِ ٱلسَّلَامُ) had made:
"‘Had You willed, O my Lord, You could have destroyed them and me long ago. Will You destroy us for what the fools amongst us did? That was nothing but a trial from You whereby You mislead whom You will and guide whom You will. You alone are our guardian. Forgive us, then, and have mercy upon us. You are the best of those who forgive. And ordain for us what is good in this world and in the World to Come for to You have we turned.’

He replied: ‘I afflict whomsoever I wish with My chastisement. As for My mercy, it encompasses everything. I will show mercy to those who abstain from evil, pay Zakat and have faith in Our signs.’ [To-day this mercy is for] those who follow the unlettered Prophet, whom they find mentioned in the Torah and the Gospel with them. He enjoins upon them what is good and forbids them what is evil. He makes the clean things lawful to them and prohibits all corrupt things, and removes from them their burdens and the shackles that were upon them. So those who believe in him and assist him, and succour him and follow the Light which has been sent down with him, it is they who shall prosper."

THE STORY OF PROPHET MUSA (عَلَيْهِ ٱلسَّلَامُ) AND AL-KHIDR

During the journey to the promised land, Prophet Musa (عَلَيْهِ ٱلسَّلَامُ) himself learned many lessons. One of these teachings is recorded in a hadith narration found in Sahih al-Bukhari, reference 3401, as well as at-Tirmidhi 3149. In this account, Prophet Musa (عَلَيْهِ ٱلسَّلَامُ) meets a wise man known as Al-Khidr.

The story begins with a man who, after listening to a sermon by the Prophet, approaches him and asks who he thought was the most learned man amongst the people.

Prophet Musa (عَلَيْهِ ٱلسَّلَامُ) replied:
“It is I.”

Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) was not pleased with Musa’s (عَلَيْهِ ٱلسَّلَامُ) response as he did not attribute absolute knowledge to Almighty Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ).

Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) told Musa (عَلَيْهِ ٱلسَّلَامُ):
“At the junction where the two seas meet, there is a slave of Mine who is more learned than you.”

Musa (عَلَيْهِ ٱلسَّلَامُ) was eager to meet this learned person. So he asked the Almighty:
"O my Lord! How can I meet him?”

Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) replied:
“Take a fish and put it in a large basket and you will find him at the place where you will lose the fish.”

Musa (عَلَيْهِ ٱلسَّلَامُ) was determined. So he took a fish, placed it in a basket, and set out with his boy servant, Yusha ibn Nun, in search of the learned man.

“I will never give up until I reach the junction of the two seas, even if I travel for ages,” he told his boy-servant. — (Surah Al-Kahf, ayah 60)

When the duo paused their journey and briefly rested, unknown to the two, the fish fell out of the basket and slipped into the sea.
"But when they reached the point where the two rivers meet, they forgot their fish, and it took its way into the sea, as if through a tunnel." — (Surah Al-Kahf, ayah 61)

The pair resumed their journey, traveling all night until they paused once again to rest for the night.

Musa (عَلَيْهِ ٱلسَّلَامُ) instructed Yusha:
“Bring us our meal! We have certainly been exhausted by today’s journey.” — (Surah Al-Kahf, ayah 62)

Before long, Yusha realized that they had lost the fish. He went rushing to Musa (عَلَيْهِ ٱلسَّلَامُ).

“Did you see when we retired to the rock? Indeed, I forgot [there] the fish. And none made me forget it except Shaitan – that I should mention it. And it took its course into the sea amazingly," he said. — (Surah Al-Kahf 18:63)

Musa (عَلَيْهِ ٱلسَّلَامُ) replied:
“That is exactly what we were looking for.” — (Surah Al-Kahf, ayah 64)

So they retraced their footsteps and returned to the location, the area where the two seas meet.

There, they saw a man lying covered with a garment.
"And there they found one of Our servants upon whom We had bestowed Our mercy, and to whom We had imparted a special knowledge from Ourselves." — (Surah Al-Kahf, ayah 65)

Musa (عَلَيْهِ ٱلسَّلَامُ) approached the man, greeted him, and introduced himself.

The man, who was named Al-Khidr, asked:
“Musa of Bani Israel?”

Musa (عَلَيْهِ ٱلسَّلَامُ) said to him:
“May I follow you that you may teach me something of the wisdom which you have been taught?” — (Surah Al-Kahf, ayah 66)

Al-Khidr replied:
“O Musa! I have some of the knowledge of Allah which Allah has taught me, and which you do not know, while you have some of the knowledge of Allah which Allah has taught you and which I do not know.”

Musa then asked:
"May I follow you?"

He replied:
“Surely, you will never be able to endure with me patiently. And how can you be patient with what is beyond your realm of knowledge?” — (Surah Al-Kahf, 67-68)

Musa (عَلَيْهِ ٱلسَّلَامُ) did not back down. He assured the man:
“You will find me patient, Allah willing, and I will not disobey any of your orders.” — (Surah Al-Kahf, ayah 69)

Al-Khidr said:
“Then if you follow me, do not question me about anything until I clarify it for you.” — (Surah Al-Kahf, ayah 70)

So the two men set out walking along the seashore when a boat passed by.

Al-Khidr requested the crew to take them aboard. The crew who recognized Al-Khidr took them aboard at no charge.

When the men were aboard the boat, a sparrow flew in and perched itself on the edge of the boat while dipping its beak into the sea, quenching its thirst.

Al-Khidr said to Musa (عَلَيْهِ ٱلسَّلَامُ):
“O Musa! My knowledge and your knowledge have not decreased Allah's Knowledge except as much as this sparrow has decreased the water of the sea with its beak.”

Then, out of the blue, Al-Khidr took an axe and began striking the boat's deck, creating a hole.

Moses exclaimed:
“Have you made a hole in it so as to drown the people in the boat? You have certainly done an awful thing.” — (Surah Al-Kahf, ayah 71)

"He replied: 'Did I not tell you that you will not be able to patiently bear with me?'" — (Surah Al-Kahf, ayah 72)

Musa (عَلَيْهِ ٱلسَّلَامُ) pleaded:
“Excuse me for forgetting, and do not be hard on me for my fault.” — (Surah Al-Kahf, ayah 73)

When they had left the sea, they passed by a boy playing with other boys. Al-Khidr took hold of the boy’s head and plucked it with his hand.

Musa (عَلَيْهِ ٱلسَّلَامُ) protested once again:
“Have you killed an innocent soul, who killed no one? You have certainly done a horrible thing.” — (Surah Al-Kahf, ayah 74)

He answered:
“Did I not tell you that you will not be able to patiently bear with me?” — (Surah Al-Kahf, ayah 75)

Musa (عَلَيْهِ ٱلسَّلَامُ) replied:
“If I ever question you about anything after this, then do not keep me in your company, for by then I would have given you enough of an excuse.” — (Surah Al-Kahf, ayah 76)

They then traveled until they reached a town. They asked them for food, but the people refused to accord them hospitality.

In the town, they found a wall that was ready to collapse, so Al-Khidr repaired it with the touch of his hand.

Musa (عَلَيْهِ ٱلسَّلَامُ) commented:
“If you wanted, you could have demanded a fee for this.” — (Surah Al-Kahf, ayah 77)

Al-Khidr responded:
“This brings me and you to a parting of ways. Now I shall explain to you the true meaning of things about which you could not remain patient.

As for the ship, it belonged to some poor people, working at sea. So I intended to damage it, for there was a tyrant king ahead of them who seizes every good ship by force.

And as for the boy, his parents were believers, and we feared that he would overburden them by transgression and disbelief. So we desired that their Lord should grant them another in his place, a son more upright and more tender-hearted.

And as for the wall, it belonged to two orphan boys in the city, and under the wall was a treasure that belonged to them, and their father had been a righteous man. So your Lord willed that these children should come of age and retrieve their treasure, as a mercy from your Lord.

I did not do it all on my own. This is the explanation of what you could not bear patiently.” — (Surah Al-Kahf, 18:78-82)

The statement, "I did not do it all on my own," gives the impression that his actions were because of revelation or divine guidance of Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ). This leads some to the conclusion that Al-Khidr, unbeknownst to Musa (عَلَيْهِ ٱلسَّلَامُ), was either an angel or prophet himself.

Regardless of Khidr's exact identity, the story imparts an important teaching to place our complete trust in Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ). Man's knowledge is limited, lacking context and understanding of the future. Whoever trusts their Lord, knowing His attributes of being kind, loving, and merciful, will see that He ultimately guides humanity towards good.

PROPHET MUSA’S (عَلَيْهِ ٱلسَّلَامُ) DEATH

Once, Prophet Muhammad (ﷺ) distributed something among his followers. A man said, "This distribution has not been done (with justice) seeking Allah's Countenance." I went to the Prophet (ﷺ) and told him (of that). He became so angry that I saw the signs of anger on his face. Then he said, "May Allah bestow His Mercy on Moses, for he was harmed more (in a worse manner) than this; yet he endured patiently." — (Sahih al-Bukhari 3405)

And in the Qur'an, Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) says:
"Believers, do not be like those who distressed Moses and then Allah declared him quit of the ill they spoke about him; and he had a high standing with Allah." — (Surah Al-Ahzab, ayah 69)

Musa suffered terribly from his people and endured much for the sake of Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ). He was courageous, intelligent, strong, loving, and devoted to serving both his nation and his Lord. His life's mission was the liberation of the children of Israel from tyranny and oppression and to guide them toward righteousness. It is believed that after forty years of wandering, the children of Israel were finally granted entry into the promised land. However, this was without their leader Musa (عَلَيْهِ ٱلسَّلَامُ) or Harun (عَلَيْهِ ٱلسَّلَامُ), as they were both called back to return to their Creator before this date.

When the Angel of Death was sent to Musa (عَلَيْهِ ٱلسَّلَامُ), Musa slapped him and poked out his eye.

The angel returned to his Lord and said:
"You sent me to a slave who does not want to die."

Allah restored the angel's eye and said:
"Go back and tell Musa (عَلَيْهِ ٱلسَّلَامُ) to place his hand over the back of an ox for he will be allowed to live for a number of years equal to the number of hairs coming under his hand."

So the angel went to Musa (عَلَيْهِ ٱلسَّلَامُ) and informed him of the same.

Then Musa (عَلَيْهِ ٱلسَّلَامُ) asked Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ):
"O my Lord! What will be after that?"

He replied:
"Death."

Musa (عَلَيْهِ ٱلسَّلَامُ) said:
"Let it be now."

He then requested Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) that upon his death, he should be buried near the holy Land at a distance of a stone's throw, and Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) who had bestowed many miracles for his faithful Prophet accommodated his final request.

Allah's Messenger (ﷺ) said:
"If I were there, I would show you his grave below the red sand hill on the side of the road."

And on his Night Journey, the Prophet (ﷺ) said:
"I passed by the grave of Musa, peace be upon him, and he was praying in his grave." — (Sahih (Darussalam) Sunan an-Nasa'i 1634)

THE STORY CONTINUES

It is the majority view of most scholars that Yusha ibn Nun, the servant who accompanied Musa on his trip with Al-Khidr, then took place as the leader of Bani Israel. He led the next generation into Jerusalem and Bayt al-Maqdis (Masjid al-Aqsa). Although not mentioned as a Prophet in the Qur'an, hadith evidence supports the view that he, too, was a Prophet of Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ).
STORY
    ],

    'dawud' => [
        'id'      => 'dawud',
        'number'  => 10,
        'name'    => 'Prophet Dawud (AS)',
        'arabic'  => 'دَاوُود',
        'era'     => 'Prophet-King of Israel & The Zaboor',
        'region'  => 'Bethlehem → Jerusalem (Palestine)',
        'surah'   => 'Al-Baqarah (2:249-251), Sad (38:17-26), Al-Anbiya (21:78-80), Saba (34:10-11)',
        'arabic_verse' => 'رَبَّنَا أَفْرِغْ عَلَيْنَا صَبْرًا وَثَبِّتْ أَقْدَامَنَا وَانصُرْنَا عَلَى الْقَوْمِ الْكَافِرِينَ',
        'verse_translation' => '"Our Lord! Shower us with perseverance, make our steps firm, and give us victory over the disbelieving people." — (Surah Al-Baqarah ayah 250)',
        'story'   => <<<'STORY'
THE STORY OF PROPHET DAWUD (عَلَيْهِ ٱلسَّلَامُ)

The story of Prophet Dawud (عَلَيْهِ ٱلسَّلَامُ) revolves around three significant figures:
1. Prophet Dawud, known in Judeo-Christian tradition as David.
2. King Talut, or Saul, who was the leader of the Israelites.
3. Then there was Jalut, known as Goliath.

The story of Dawud and Jalut is often more familiarly recognized as the story of David and Goliath.

KING TALUT AND JALUT FACEOFF

King Talut led the Israelite army, poised for battle against the formidable Jalut and his forces. Having endured severe losses to Jalut before, this impending battle stood as a pivotal moment in shaping the fate of Israel.

As they marched toward the battlefield, Talut earnestly cautioned his men:
“Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) will test you with a river. Whoever drinks his fill from it is not with me, and whoever does not taste it—except a sip from the hollow of his hands—is definitely with me.” — (Surah Al-Baqarah verse 249)

Despite their king’s clear warning, most among them drank freely from the river upon arrival. Consequently, only a handful who remained faithful were allowed to cross the river and participate in the battle.

They began worrying:
“Now we are no match for Jalut and his warriors.” — (Surah Al-Baqarah verse 249)

But the believers who were certain they would meet Allah سُبْحَٰنَهُۥ وَتَعَٰلَىٰ reasoned:
"How many times has a small force vanquished a mighty army by the will of Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ)! And Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) is always with the steadfast." — (Surah Al-Baqarah verse 249)

The army then prayed to Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ), seeking His aid to overcome their enemy. They made a du'a saying:
"Our Lord! Shower us with perseverance, make our steps firm, and give us victory over the disbelieving people." — (Surah Al-Baqarah ayah 250)

The two troops finally faced each other on the battlefield. The Israelites seemed puny in comparison to Jalut and his great army, but they stood their ground.

Jalut, a formidable and towering presence on the battlefield, exuded an aura of fear with his might and prowess as a warrior. He was well aware that none dared to cross his path on the battleground, certainly not an army as pitiful as Talut's. He was confident that fighting Talut's army would be an effortless win. To heighten the spectacle, Jalut challenged any soldier to a one-on-one combat against him.

The Israelites were terrified. The mere thought of volunteering for this challenge seemed tantamount to a death wish.

King Talut grew increasingly anxious as none of his men stepped forward. Driven by desperation, he went as far as offering the hand of his beloved daughter Michal (Miqel) in marriage to any soldier willing to confront Jalut. Nothing swayed the men to come forward, not even the prospect of a life filled with riches and royal status.

Then, to everyone’s surprise, a young boy, who had visibly not participated in many battles before, stepped forward for the fight. Laughter reverberated through the enemy battalion while Talut's soldiers shook their heads in disbelief.

This courageous youth was none other than Dawud (عَلَيْهِ ٱلسَّلَامُ), hailing from the city of Bethlehem.

Prophet Dawud stood firm in his resolve. He had already made up his mind to battle the giant. With unwavering pride, he told his king tales of how he had defeated a lion that had previously threatened his father's sheep and how he overcame a bear on a separate occasion.

Dawud (عَلَيْهِ ٱلسَّلَامُ) further implored his king not to judge him based on his appearance and reassured him that he was not afraid of any man or wild beast.

Touched by Dawud's determination, King Talut responded:
"My brave soldier, if you are willing, then may Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) guard you and grant you strength."

PROPHET DAWUD (عَلَيْهِ ٱلسَّلَامُ) BATTLES JALUT

The King himself took on the responsibility of preparing the warrior for battle. He dressed Dawud (عَلَيْهِ ٱلسَّلَامُ) in battle armor and placed a sword in his hand.

But Dawud (عَلَيْهِ ٱلسَّلَامُ) was used to doing things his way. He felt that the battle armor restrained his movements, so he removed it, along with his sword. With nothing but a few pebbles in a leather pouch slung over his shoulder, a sling, and a wooden staff, Dawud (عَلَيْهِ ٱلسَّلَامُ) was ready to face the giant.

Talut, filled with concern, questioned Dawud (عَلَيْهِ ٱلسَّلَامُ):
"How on earth are you going to defend yourself against a giant with a sling and a couple of stones?"

In response, Dawud (عَلَيْهِ ٱلسَّلَامُ) affirmed:
"Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ), who protected me from the claws of the bear and the fangs of the lion, will surely safeguard me from this aggressor."

Jalut's laughter resounded through the battlefield when he finally set eyes on his opponent. He bellowed:
"Are you out to play war with one of your playmates, or are you tired of your life? I'll sever your head with one swipe of my sword!"

Dawud (عَلَيْهِ ٱلسَّلَامُ) replied in a shout:
“You may have armor, a shield, and a sword, but I face you in the name of Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ), the Lord of the Israelites, whose laws you have mocked. Today, you will see that it's not the sword that brings death, but the will and power of Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ)!”

With a single pebble, Dawud (عَلَيْهِ ٱلسَّلَامُ) defeated the mighty Jalut, whom all warriors feared.

Jalut's army understood that their leader's defeat by a mere boy was no ordinary incident. Fearing for their lives, they began fleeing. Fueled by years of anguish under Jalut's and his army's oppression, the Israelites followed the troops, slaying every soldier they could lay their hands on.

Thus, with Almighty Allah's (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) help, the Israelites secured victory over their enemies and reclaimed their dignity. And overnight, Dawud (عَلَيْهِ ٱلسَّلَامُ) ascended to the status of a revered hero.

Honoring his word, King Talut gave his daughter in marriage to Dawud (عَلَيْهِ ٱلسَّلَامُ) and appointed him as a chief advisor. Thus, Dawud’s (عَلَيْهِ ٱلسَّلَامُ) path to kingship was paved.

Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) says in the Quran:
“By Allah’s will they routed them; and Dawud slew Jalut; and Allah gave him power and wisdom and taught him whatever (else) He willed. And did not Allah Check one set of people by means of another, the earth would indeed be full of mischief: But Allah is full of bounty to all the worlds.” — (Surah Al-Baqarah ayah 251)

Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) is showing us that those with complete trust and reliance in Him can overcome the greatest of odds. Dawud (عَلَيْهِ ٱلسَّلَامُ) was so small, yet he toppled Jalut with such ease. A small force can overcome a much greater force. The story also teaches us a lesson in humility.

We should never be too proud and think of ourselves as too big, powerful, wealthy, or beautiful. Just as quickly as Jalut had fallen, we, too, can have it all taken away. Don't be so arrogant to think otherwise. Be grateful to Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ). If he has given you wealth, use it in a manner that pleases Him by serving the people around you and being righteous.

BECOMING OF A PROPHET

Following his miraculous victory over the giant, Dawud (عَلَيْهِ ٱلسَّلَامُ) set out to the desert seeking solitude to reflect on the events of the day and to glorify Allah سُبْحَٰنَهُۥ وَتَعَٰلَىٰ. Dawud (عَلَيْهِ ٱلسَّلَامُ) was a humble servant of Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) who did not allow pride to venture into his heart and forget the Almighty.

This is when Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) bestowed Dawud (عَلَيْهِ ٱلسَّلَامُ) with Prophethood. The Lord also gifted Dawud (عَلَيْهِ ٱلسَّلَامُ) with many miracles which were not bestowed to any other Prophet before or after him.

Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) also revealed to Prophet Dawud (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) the Zaboor, also known as the Psalm or Songs of David:
“…And to Dawud (عَلَيْهِ ٱلسَّلَامُ) We gave the Psalms,” — (Surah Al-Isra, ayah 55)

When he began to sing the verses of Zaboor in his melodious voice, the mountains, trees, birds, and all other living creatures joined him in glorifying the Almighty.

Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) says in the Quran:
“We truly subjected the mountains to hymn Our praises along with him in the evening and after sunrise. And We subjected the birds, flocking together. All turned to him echoing his hymns. We strengthened his kingship, and gave him wisdom and sound judgment.” — (Surah As-Sad ayat 18-20)

Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) also bestowed His Messenger Dawud (عَلَيْهِ ٱلسَّلَامُ) the ability to converse with animals. Prophet Dawud (عَلَيْهِ ٱلسَّلَامُ) was a devout worshiper of his Lord (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ). He never missed an opportunity to glorify Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) in his speech or actions.

Allah's Messenger (ﷺ) stated:
“The most beloved fasting to Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) was the fasting of Prophet Dawud (عَلَيْهِ ٱلسَّلَامُ) who used to fast on alternate days. And the most beloved prayer to Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) was the prayer of Dawud (عَلَيْهِ ٱلسَّلَامُ) who used to sleep for (the first) half of the night and pray for a third of it and (again) sleep for a sixth of it.” — (Sahih Al-Bukhari 3420)

Prophet Dawud (عَلَيْهِ ٱلسَّلَامُ) became a crucial and influential figure in warfare; he was widely consulted in matters related to it. One day, some soldiers approached Prophet Dawud (عَلَيْهِ ٱلسَّلَامُ) and bemoaned that their iron armor was too heavy and severely restricted their movement during battle.

Prophet Dawud (عَلَيْهِ ٱلسَّلَامُ) was mulling over this issue one day while fiddling with a piece of iron when suddenly, to his great surprise, his finger sank through the iron. Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) had endowed him with yet another gift – the ability to mold iron.

"We made iron mouldable for him,” Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) says in the Quran, verse 11 of Surah Saba.

Also, mentioned in Surah Al-Anbiya Ayat 80:
"It was We Who taught him the art of making coats of mail for your benefit so that it may protect you from each other’s violence. Do you, then, give thanks?"

TALUT'S JEALOUSY

Prophet Dawud (عَلَيْهِ ٱلسَّلَامُ) was widely praised and admired across the kingdom for his courage, piety, and wisdom. In the eyes of the people, he even surpassed King Talut. This shift in public opinion did not escape the king's notice.

One day, Prophet Dawud (عَلَيْهِ ٱلسَّلَامُ) found his father-in-law in distress and sensed a difference in his attitude. Concerned, he shared his thoughts with his wife Michal, who immediately began weeping and revealed her father's envy towards Dawud's (عَلَيْهِ ٱلسَّلَامُ) rising popularity. Michal cautioned her husband to be on guard at all times, fearing potential harm arising from her father's jealousy.

Dawud (عَلَيْهِ ٱلسَّلَامُ) was a devout and sincere man, deeply disturbed by the news of Talut's envy. He prayed that Talut's heart would be relieved of envy and that he would return to his former virtuous nature.

The next day, Talut informed Dawud (عَلَيْهِ ٱلسَّلَامُ) that their enemy, Canaan, had gathered his forces and was plotting to march on Talut's kingdom to overthrow him. He commanded Dawud (عَلَيْهِ ٱلسَّلَامُ) to battle Canaan and his men and to avoid returning unless victory was achieved.

Dawud (عَلَيْهِ ٱلسَّلَامُ) was astute, sensing a potential trap for his demise in this directive—fearing either the enemy's attack or betrayal from Talut's men. Despite his suspicions, Dawud (عَلَيْهِ ٱلسَّلَامُ) placed his life in Allah's (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) hands and proceeded as instructed. His army met with the enemy troops and fought bravely, emerging victorious. Dawud (عَلَيْهِ ٱلسَّلَامُ) returned to the kingdom unscathed.

That very night, Dawud (عَلَيْهِ ٱلسَّلَامُ) gathered essential supplies and fled Talut's kingdom, where he spent several days hiding in a cave.

Days later, Dawud’s brothers and a few other loyal followers of the Prophet rallied to support him. Each passing day weakened the stability of Talut’s reign as king.

With Dawud (عَلَيْهِ ٱلسَّلَامُ) gone, Talut aggressively tried to consolidate the power that he lost. He began ruling his kingdom like a dictator. He persecuted the learned, oppressed those who observed the Talmud, and terrorized his army. This further eroded his popularity with the people. Furious, Talut resolved to battle Dawud (عَلَيْهِ ٱلسَّلَامُ). So, gathering his army, Talut left his kingdom to fight his son-in-law.

Dawud (عَلَيْهِ ٱلسَّلَامُ) got wind of the approaching army and decided to confront them. He discovered Talut’s army resting in a valley a great distance from home.

Dawud (عَلَيْهِ ٱلسَّلَامُ) awakened Talut and spoke:
“Oh king, you come out seeking me, but I do not hate you, and I do not want to kill you. If I did, I would have killed you when you were asleep. Here is a piece of your garment. I could have hacked your neck instead, but I did not. My mission is that of love, not malice.”

Talut then came to his senses, realizing the enormity of his actions, and sought Prophet Dawud’s (عَلَيْهِ ٱلسَّلَامُ) forgiveness.

PROPHET DAWUD (عَلَيْهِ ٱلسَّلَامُ) BECOMES KING

Years passed, and King Talut died in battle. Prophet Dawud (عَلَيْهِ ٱلسَّلَامُ) was elected as king by the people.

Dawud (عَلَيْهِ ٱلسَّلَامُ) was a just, humble, and righteous king whose governance ensured peace and prosperity in the kingdom. Despite his new role as King, Dawud (عَلَيْهِ ٱلسَّلَامُ) was not remiss in his duty of preaching the religion of Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ). His melodious recitation of the Zaboor captivated all who heard it, drawing not just people, but also birds, animals, and trees, entrancing listeners with its divine verses.

Balancing the roles of a King and a Prophet was no simple task. But Dawud (عَلَيْهِ ٱلسَّلَامُ) was dedicated and took on the responsibility with determination. He did not fall back on any of his duties and divided his day into four parts:

The first, to earn a living and rest; the second, for religious observations; the third, for his people; and the final, for delivering his sermons.

Prophet Dawud (عَلَيْهِ ٱلسَّلَامُ) also empowered deputies to represent him in attending to people’s issues during his absence. Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) blessed Dawud’s (عَلَيْهِ ٱلسَّلَامُ) reign. His kingdom was a testament to Dawud’s competence. He was also greatly feared by his enemies.

Despite his royal status as king, Prophet Dawud (عَلَيْهِ ٱلسَّلَامُ) did not rely on the kingdom for his income. His sustenance was secured through the selling of weapons crafted by himself.

THE TEST OF JUDGMENT IN SURAH SAD

The Bible tells many false stories about the Prophets, and the Qur'an often has to set the record straight. A story in 2 Samuel 12 speaks very disparagingly about Prophet Dawud (AS). It accuses Prophet Dawud (AS) of many immoral acts such as theft, adultery, and plotting a murder. It paints the Prophet as an undisciplined man who lacks judgment and is not in control of his desires.

Nathan chose an indirect approach to confront Dawud (عَلَيْهِ ٱلسَّلَامُ), sharing a story about a rich man who unjustly took a poor man's sheep. This story served as a parallel to the accusation against Dawud (عَلَيْهِ ٱلسَّلَامُ) of orchestrating the death of a man named Uriah to claim his wife, Bathsheba. It then cites how Dawud's guilty conscience took over, causing him to make the rash judicial decision of sentencing the sheep thief to death even though the offense wasn't a capital crime. Only when confronted by Nathan that he knew the truth did he apologize and was given pardon. This depiction is rather offensive for a Prophet whose character and lapse of judgment are unbefitting of a person meant to serve as a role model to guide all of humanity.

In Surah Saad, verses 17-26, the Qur'an recounts the story of Prophet Dawud in a different light compared to the narrative found in the Biblical accounts. Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) often provided Prophet Muhammad (ﷺ) with stories of past prophets, offering lessons to guide him in managing contemporary challenges.

In Surah Sad Ayat 17, Allah instructs Prophet Muhammad to:
"Be patient over what they say and remember Our servant, David, the possessor of strength; indeed, he was one who repeatedly turned back [to Allah]."

Prophet Dawud (AS) was hailed in the Qur'an for his strength and unwavering repentance, showcasing his continuous devotion and submission to Allah (سُبْحَٰنَهُۥ وَتَعَالَىٰ). Despite his piety, he faced a test from Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ).

One day, while Dawud (عَلَيْهِ ٱلسَّلَامُ) was praying in his private chamber, two men scaled the walls and entered his room seeking arbitration.

When Dawud (عَلَيْهِ ٱلسَّلَامُ) saw the two men, he immediately became fearful.
“Have no fear,” the men reassured, “We are merely two in a dispute: one of us has wronged the other. So, judge between us with truth — do not go beyond it — and guide us to the right way.”

Dawud (عَلَيْهِ ٱلسَّلَامُ), taken aback, endeavored to regain his composure and asked the men to explain their grievances.

One of the men presented his case:
"Behold, this is my brother; he has ninety-nine ewes and I have only one ewe. And yet he said: 'Give her into my charge,' and he got the better of me in argument." — (Surah Sad Ayah 23)

Without fully considering the other side, Dawud (عَلَيْهِ ٱلسَّلَامُ) swiftly intervened, asserting:
"He has wronged you in demanding your ewe in addition to his ewes. And, verily, many partners oppress one another, except those who believe and do righteous good deeds, and they are few."

The two men then vanished, and Dawud (عَلَيْهِ ٱلسَّلَامُ) recognized this as a test from Allah (سُبْحَٰنَهُۥ وَتَعَالَىٰ). Overcome with this realization, he prostrated in repentance before Allah (سُبْحَانَهُ وَتَعَالَىٰ).

Some Qur'an exegetes link the story of him falling into sujood in repentance as being connected to the story of guilt found in the bible. But the accurate understanding is that the Prophet Dawud (عَلَيْهِ ٱلسَّلَامُ) feared that he had not acted justly. He judged prematurely between the two people and failed to consider all perspectives.

The man with the ninety-nine sheep might have held a legitimate claim over the man with one. The poor man owning a single sheep might have gained sympathy due to his meekness, potentially influencing the situation. His eloquence or persuasive skills might have allowed him to overpower the others in speech. Hence, justice might not have been duly served, and this perceived oversight was an error on Dawud's part, leading him to seek taubah (forgiveness).

This incident teaches us not to hastily judge situations driven by strong emotions. It emphasizes the need for patience, letting the dust settle, and gathering evidence before passing judgment.

In Surah Sad, verse 26, it is stated:
"...so judge between the people in truth and do not follow [your own] desire, as it will lead you astray from the way of Allah. Indeed, those who go astray from the way of Allah will have a severe punishment for having forgotten the Day of Account." — (Surah Sad ayah 26)

In these verses Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) preserves the integrity of our beloved Prophet and imparts a significant leadership lesson: the importance of objectivity, truth-seeking, and not being swayed by appearances. We'll all face moments where we must discern right from wrong, be it in family disputes, work environments, or among friends. Striving for fairness is crucial, as there will be a Day of Account when Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) will be a judge over us.

PROPHET DAWUD'S SON

Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) bestowed wisdom and sound judgment not only upon Prophet Dawud (عَلَيْهِ ٱلسَّلَامُ) but also upon his beloved son, Sulaiman (may peace be upon him).

It is narrated that one day, when Prophet Dawud (عَلَيْهِ ٱلسَّلَامُ) was listening to the issues of his people with Sulaiman (عَلَيْهِ ٱلسَّلَامُ), who was then eleven years old, two men approached him.

Prophet Dawud (عَلَيْهِ ٱلسَّلَامُ) then ruled:
"I have decided that you give him your sheep in exchange for the field."

Impressed by his son's intellect, Dawud (عَلَيْهِ ٱلسَّلَامُ) remarked:
"This judgment is wise. Praise be to Allah سُبْحَٰنَهُۥ وَتَعَٰلَىٰ for granting you wisdom. You are truly Sulaiman the Wise."

PROPHET DAWUD'S (عَلَيْهِ ٱلسَّلَامُ) DEATH

Prophet Dawud (عَلَيْهِ ٱلسَّلَامُ) was among the most influential Prophets of Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) who devoutly worshiped Him until his last breath. He was sent as a prophet, as the people of Israel needed a guide after the passing of prophets Musa (عَلَيْهِ ٱلسَّلَامُ) and Harun (عَلَيْهِ ٱلسَّلَامُ).

Prophet Dawud’s sudden passing was mourned by thousands, including four thousand priests. On the day of his death, scorching heat prevailed. Prophet Sulaiman (عَلَيْهِ ٱلسَّلَامُ) - who was gifted with the ability to converse with animals - summoned the birds to shield the mourners from the blazing sun until Dawud (عَلَيْهِ ٱلسَّلَامُ) was laid to rest.

This event marked the first glimpse of Prophet Sulaiman's dominion witnessed by the people.
STORY
    ],

    'sulaiman' => [
        'id'      => 'sulaiman',
        'number'  => 11,
        'name'    => 'Prophet Sulaiman (AS)',
        'arabic'  => 'سُلَيْمَان',
        'era'     => 'The Wise King, Commander of Winds & Jinns',
        'region'  => 'Jerusalem & The Kingdom of Israel',
        'surah'   => 'Surah An-Naml (27:15-44), Sad (38:30-40), Saba (34:12-14)',
        'arabic_verse' => 'رَبِّ اغْفِرْ لِي وَهَبْ لِي مُلْكًا لَّا يَنبَغِي لِأَحَدٍ مِّن بَعْدِي إِنَّكَ أَنتَ الْوَهَّابُ',
        'verse_translation' => '"My Lord, forgive me and grant me a kingdom such as will not belong to anyone after me. Indeed, You are the Bestower." — (Surah Sad 38:35)',
        'story'   => <<<'STORY'
THE STORY OF PROPHET SULAIMAN (عَلَيْهِ ٱلسَّلَامُ)

Prophet Sulaiman (عَلَيْهِ ٱلسَّلَامُ), known as Solomon in Judeo-Christian tradition, was from the 19 sons of Prophet Dawud (عَلَيْهِ ٱلسَّلَامُ). Prophet Dawud (عَلَيْهِ ٱلسَّلَامُ) was the wise King of Israel and a noble Prophet and Messenger of Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ).

So, when Dawud (عَلَيْهِ ٱلسَّلَامُ) passed away, he was succeeded by Sulaiman, who was chosen by Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) to carry forth the legacy of his father's prophethood. He was bestowed with many gifts and remained a just and wise ruler over the Israelite nation.

In the Qur'an, it mentions: "And Sulaiman inherited Dawud" — (Surah An-Naml, ayah 16). But, keep in mind this does not mean inheritance of wealth or property.

In a narration in Sahih Bukhari 6725, Allah's Messenger (ﷺ) said:
"Our property (meaning the material possessions of the prophets) cannot be inherited, and whatever we leave is to be spent in charity."

Rather, what Prophet Sulaiman (عَلَيْهِ ٱلسَّلَامُ) inherited was his father's dominion and knowledge: "Indeed the Ulama (scholars) are the heirs of the Prophets, and the Prophets do not leave behind Dinar or Dirham." — (Jami at-Tirmidhi 2682)

PROPHET SULAIMAN'S HUMILITY

Prophet Sulaiman (عَلَيْهِ ٱلسَّلَامُ) enjoyed much success and happiness in this world.

He was put in a unique position over other prophets as having authority over an entire empire. This empire was unlike any other in history. He ruled not only over humans, but also the Jinns and various animals. He was admired and loved by all as their leader. Moreover, Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) mentions in Surah An-Naml verses 15-17 how he bestowed His prophet with special talents:

"Indeed, We granted knowledge to Dawud and Sulaiman. And they said in acknowledgment, 'All praise is for Allah Who has privileged us over many of His faithful servants.' And Dawud was succeeded by Sulaiman, who said, 'O people! We have been taught the language of birds and been given everything we need. This is indeed a great privilege.' Solomon’s forces of jinn, humans, and birds were rallied for him, perfectly organized." — (Surah An-Naml, ayat 15-17)

While relating all the ways Prophet Sulaiman (عَلَيْهِ ٱلسَّلَامُ) was blessed, the way he responds is nothing short of extraordinary. The power and success would corrupt most people in his station.

Yet, this superiority he was granted only increased his humility. Whatever he was given was considered a direct gift from his Creator, and so, as the verse tells us, he responded by saying, "Alhamdulillah," All the praises and thanks be to Allah.

Also, while recounting all these graces, the first thing mentioned above all else is the gift of knowledge. Some commentators have suggested this quality shows the eminence of knowledge as being superior to being a ruler over the people and Jinn, as well as speaking the language of birds and other animals.

Knowledge here is believed to mean that of the worldly life and of understanding prophethood. In the Tafheem ul-Qur'an, the author writes that it refers to:
"knowledge of the reality, the knowledge that whatever they have is not theirs but the gift of Allah and whatever rights they have been granted over those things should be used strictly according to Allah’s will. For, they will be held answerable before Allah, the real Owner, for the right and wrong use of those rights. This knowledge is the opposite of the ignorance in which Pharaoh was involved."

The Pharaoh was given dominion and rule, but his ignorance molded him to a different path. Contrast this to Prophet Sulaiman (عَلَيْهِ ٱلسَّلَامُ), whose character was built on the correct knowledge, leading to a vastly different outcome.

PROPHET SULAIMAN'S TEST

When Prophet Muhammad (ﷺ) was asked which people have been tested most severely, he replied:
"They are the prophets, then the next best, then the next best. A man is put to trial according to his religion. If he is firm in his religion, his trials will be more severe. If he is weak in his religion, he is put to trial according to his strength in religion." — (Jami at-Tirmidhi 2398)

Although on paper, it seems as though Prophet Sulaiman (عَلَيْهِ ٱلسَّلَامُ) had everything, this was not without adversity or tests. Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) says in the Qur'an that We have tested Sulaiman (عَلَيْهِ ٱلسَّلَامُ). His wealth and kingdom may seem like a blessing, but really, this is a difficult test from Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ). How many in this position would feel they won the lottery but, on the Day of Judgment, realize it was the worst thing to happen for their imaan (faith)?

Prophet Sulaiman (عَلَيْهِ ٱلسَّلَامُ) shouldered many responsibilities as both a leader and a prophet. First, and most importantly, being a servant to Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ), he was constantly engaged in dhikr and remembrance of Allah. The Qur'an praises him, saying: "And We blessed Dawud with Sulaiman. He was an excellent servant. Surely, he was great in turning (to Us, in penitence and praise)." — (Surah Sad, ayah 30)

One day, as the night was fast approaching, his finest, most well-trained horses were readied for a campaign and were brought to him for a final inspection.

Here, he became enamored with their beauty and his love for them. The Qur'an gives an account of this event, saying:
“One evening well-trained and running horses of noble breed were brought to him. He said: 'Lo! I have come to love these good things on account of the remembrance of my Lord'—until it went behind the veil.” — (Surah Sad, ayat 30-32)

Prophet Sulaiman (عَلَيْهِ ٱلسَّلَامُ) became momentarily distracted by his love for (ٱلْخَيْرِ) al-khayr which has been translated to mean love of good things, in this case, his horses. The verse continues, "until it went behind the veil," and here, 'it' is understood by commentators to refer to the sun setting beyond the horizon. So, Prophet Sulaiman (عَلَيْهِ ٱلسَّلَامُ) unintentionally missed the time of Asr prayer. It was not deliberate, but rather due to forgetfulness.

Also, his expression of love for these things wasn't rooted in vanity. As the verse clarifies, "on the account of the remembrance of my Lord." Sulaiman (عَلَيْهِ ٱلسَّلَامُ) found the love of Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) in all things, just being an observer seeing Allah's glory and greatness in all creation.

The ayah continues:
"'Bring them back to me' - and he started passing his hands over the legs and the necks (of the horses)." — (Surah Sad, ayah 33)

So, after missing the prayer and the horses were sent away, he began to feel remorseful. He called back the horses who'd left and rubbed his hands over their necks and legs. Now, there is a difference of opinion here. Some commentators say the Arabic word (مَسْحًۢا) mashan means to stroke with a sword. It is suggested that after Prophet Sulaiman (عَلَيْهِ ٱلسَّلَامُ) neglected the remembrance of Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ), he imposed a penalty on himself. He sacrificed the very horses he loved in the name of Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) and distributed the meat for sadaqah (charity). On the other hand, scholars like Imam Ibn Jarir wrote that he called the horses back to pat them and further show his love. This view holds that it is not of character for a Prophet to punish an animal for one's shortcomings. Both these interpretations are often cited regarding this event.

Then Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) says:
"And indeed We tested Sulaiman while We threw on his throne a body after which he turned (to Us)." — (Surah Sad, ayah 34)

We must be careful regarding explanations of this ayah. There are many Israiliyat narrations (these are narrations originating from Hebrew scriptures). However, these are often fabricated stories and disrespect the Prophet of Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ). With that, it is difficult to discern with certainty what this trial Prophet Sulaiman (عَلَيْهِ ٱلسَّلَامُ) underwent. Our curiosity causes us to want to create an answer, and so it has led to many fanciful fabrications of this event.

Ibn Kathir's approach is more suitable: anything the Qur'an has left ambiguous should be left as is, without having to dig into its details. It is better for us not to want more details beyond what Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) and His messenger have mentioned. All we can gather is that Prophet Sulaiman (عَلَيْهِ ٱلسَّلَامُ) was once again tested, and this caused him to turn to Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) with an even greater sense of devotion.

THE WINDS AND THE JINNS

Following this event, Prophet Sulaiman (عَلَيْهِ ٱلسَّلَامُ) was recorded to have made the following supplication:
رَبِّ ٱغۡفِرۡ لِي وَهَبۡ لِي مُلۡكٗا لَّا يَنۢبَغِي لِأَحَدٖ مِّنۢ بَعۡدِيٓۖ إِنَّكَ أَنتَ ٱلۡوَهَّابُ

Transliteration: Rabbigh fir lee wa hab lee mulkal laa yambaghee li ahadin min ba’dee innaka Antal Wahhaab (35)

English Translation: "My Lord, forgive me and grant me a kingdom such as will not belong to anyone after me. Indeed, You are the Bestower." — (Surah Sad, ayah 35)

The aim of any Prophet is not to concern oneself with the material and worldly life. Prophet Sulaiman (عَلَيْهِ ٱلسَّلَامُ) does not ask for a kingdom unlike any other just for power-seeking sake. This is made clear by noticing how he begins the du'a. In his heart and mind, he begins with purifying his soul, asking for forgiveness. His concern is not of this dunya, but begins with the akhirah. Furthermore, Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) knows His prophet; He knows Sulaiman (عَلَيْهِ ٱلسَّلَامُ) was free from all selfish desires and wanted these resources to spread goodness in His cause.

Moreover, Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) placed the entire shayateen (the rebellious and evil jinns) under his control. With this power, he could command them as builders and divers, fetching the rarest of resources from the depths of the sea to constructing the largest buildings for his kingdom:

"Then We subjugated the wind for him that blew smoothly on his command to wherever he wished, and (We subjugated to him) the devils (among Jinns), all builders and divers, and many others held in chains. This is Our gift. So, do favor (to someone) or withhold (it), with no (requirement to give) account." — (Surah Sad, ayat 36-39)

THE ANTS

One day, Prophet Sulaiman (عَلَيْهِ ٱلسَّلَامُ) gathered his army to journey to the country of Askalon. He had various battalions, including jinn, men, birds, and animals of all kinds marching in unison. While they were passing through a valley, one observant ant noticed the army approaching from a distance. It cried out, warning the others: "O ants, enter your dwellings that you not be crushed by Solomon and his soldiers while they perceive not." — (Surah An-Naml, ayah 18)

Prophet Sulaiman (عَلَيْهِ ٱلسَّلَامُ) heard the speech of the ant, and he started to smile and laugh. He was so filled with the love of his Creator that he made another du'a: "My Lord, enable me to be grateful for Your favor which You have bestowed upon me and upon my parents and to do righteousness of which You approve. And admit me by Your mercy into [the ranks of] Your righteous servants." — (Surah An-Naml, ayah 19)

The words he uses show the exemplary character of Prophet Sulaiman (عَلَيْهِ ٱلسَّلَامُ). He is the embodiment of gratitude, always happy and attributing his success to Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) rather than self-glorifying. His thankfulness goes beyond just words; he asks in his du'a, "enable me to be grateful for Your favor." This plea reflects his desire to demonstrate his thankfulness, to be shown or instructed ways in which he can demonstrate his gratitude through service and good deeds.

THE HOOPOE BIRD

A quality shown by great leaders is knowing about their companions' well-being. This is something Prophet Muhammad (ﷺ) was known to do. He would visit his companions if he heard they were sick. If some people were afflicted with troubles, he would try to make an effort to remove it. Prophet Sulaiman (عَلَيْهِ ٱلسَّلَامُ) possessed this quality on a scale we cannot even imagine.

He was inspecting his army and noticed among the hoopoe birds, one was missing. He said:
"Why do I not see the hoopoe - or is he among the absent?" — (Surah An-Naml, ayah 20)

Sulaiman (عَلَيْهِ ٱلسَّلَامُ) was aware of all his subjects, down to a single bird. Its absence alarmed him and did not go unnoticed:
"I will inflict a severe punishment on him or maybe even slaughter him unless he comes forth with a convincing reason (for his absence)." — (Surah An-Naml, ayah 21)

Everything has a role to play; it was said by some commentators that the hoopoe bird previously guided Prophet Sulaiman (عَلَيْهِ ٱلسَّلَامُ) to water. Others have suggested these birds provided shade from the sun. Regardless, the single bird's absence was felt and known. Some leaders would default straight into anger and punishment, seeing the absence as a challenge to their authority. But Prophet Sulaiman (عَلَيْهِ ٱلسَّلَامُ) was calm; he said first to find out the reason.

To see if what the hoopoe bird said was true, he told the bird:
"Take this letter of mine and deliver it to them. Then leave them and see what [answer] they will return." — (Surah An-Naml, ayah 28)

THE QUEEN OF SHEBA

The Queen of Sheba ruled over what is now known as Yemen, or as the Qur'an mentions, Saba (Sheba). Although the Qur'an does not explicitly mention this, it is believed her name was Bilqis.

Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) says she was given power, authority, and a magnificent throne. Still, her empire did not match the size and grandeur of Prophet Sulaiman (عَلَيْهِ ٱلسَّلَامُ), but it was remarkable in its own right. She possessed everything she needed.

She (the queen) said to her officials after receiving the letter:
“O chieftains, there has been delivered to me an esteemed letter. It is from Sulaiman, and it reads: 'With the name of Allah, the All-Merciful, the Very-Merciful. Do not rebel against me, and come to me in submission.'" — (Surah An-Naml, ayat 29-31)

The Queen became very worried, seeing this letter as hinting towards war. She summoned her trusted advisors to help consult her:
"O chieftains, let me have your counsel in this matter for I make no firm decision without you." — (Surah An-Naml, ayah 32)

They replied:
"We are a people of strength and great military might, but the decision is yours, so decide what you will command." — (Surah An-Naml, ayah 33)

She responded to the matter quite realistically:
"Peace and friendship are better and wiser; war only brings humiliation, enslaves people, and destroys the good things. I have decided to send gifts to Sulaiman, selected from our most precious treasure. The courtiers who will deliver the gifts will also have an opportunity to learn about Sulaiman and his military might."

They had never seen such a commandment and domestication of lions, tigers, birds, and soldiers.

They then presented Sulaiman (عَلَيْهِ ٱلسَّلَامُ) with the gifts, but it did not interest him in the least. His integrity could not be bought with a few gifts. He only had one objective and that was to spread the belief in Tawheed, or the oneness of Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ).

He said:
"Do you provide me with wealth? But what Allah has given me is better than what He has given you. Rather, it is you who rejoice in your gift. Return to them, for we will surely come to them with soldiers that they will be powerless to encounter, and we will surely expel them therefrom in humiliation, and they will be debased." — (Surah An-Naml, ayat 36-37)

The envoys then returned to Bilqis with the gift and reported to her the magnificence of Prophet Sulaiman (عَلَيْهِ ٱلسَّلَامُ) and his kingdom. The queen was impressed by him and decided that she would accept his invitation but wished to speak with him directly. She then prepared herself and set off for the travel to Jerusalem.

THE THRONE OF BILQIS

Prophet Sulaiman (عَلَيْهِ ٱلسَّلَامُ) strategically wanted to demonstrate his power rather than actually use it. Understanding the Queen's inclination towards embracing Islam, he sought to facilitate a miraculous event to strengthen her faith.

He challenged his Jinns, as stated in the Qur'an:
"O assembly [of jinn], which of you will bring me her throne before they come to me in submission?" — (Surah An-Naml, ayah 38)

This mission was no easy task: to enter her palace unnoticed, secure the throne, and transport it before the queen's arrival. But completing it, he believed, would help her see Allah's unlimited power and control. He could explain how Allah's enablement, not his own power, made such miracles possible.

A powerful one from among the jinn spoke:
"I will bring it to you before you rise from your place, and indeed, I am for this [task] strong and trustworthy." — (Surah An-Naml, ayah 39)

Sulaiman (عَلَيْهِ ٱلسَّلَامُ) did not respond to this Jinn. Then another Jinn, who was said to have knowledge of the book, said he could bring it even faster than that. Before Prophet Sulaiman (عَلَيْهِ ٱلسَّلَامُ) could even blink, the magnificent throne that the hoopoe bird spoke of was placed in front of him.

He was once again amazed at the blessing of Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) and immediately turned to supplication:
"This is by the grace of my Lord, so that He may test me whether I am grateful or ungrateful. Whoever is grateful is grateful for his own benefit, and whoever is ungrateful, then my Lord is Need-Free, Bountiful." — (Surah An-Naml, ayah 40)

THE QUEEN ARRIVES

When Bilqis arrived at Prophet Sulaiman's palace, she was greeted with a ceremony. Earlier, Prophet Sulaiman (عَلَيْهِ ٱلسَّلَامُ) had asked to disguise the throne slightly to test her reaction.

He said to her:
"Is your throne like this one?" — (Surah An-Naml, ayah 41)

She was wise and patient. She did not hasten to reject this claim as most people would, seeing it would be inconceivable that the throne she just left was now in her presence. Instead, she kept looking at it, assessing all the details and noticing the striking resemblance.

She replied:
"It seems to be the same." — (Surah An-Naml, ayah 42)

From this simple interaction, Sulaiman (عَلَيْهِ ٱلسَّلَامُ) was impressed to see that she was very diplomatic in her approach.

She then continued saying:
"We have been made to recognize the truth even before this, and we have already submitted."

As Prophet Sulaiman (عَلَيْهِ ٱلسَّلَامُ) led the Queen through his palace, he brought her into a grand hall that was constructed by the jinn. The floor was crafted from a thick layer of transparent glass, and underneath it flowed water. Mistaking the floor for a pool of water, the Queen lifted her garment to keep it dry. Sulaiman (عَلَيْهِ ٱلسَّلَامُ) clarified: "Indeed, it is a palace [whose floor is] made smooth with glass." — (Surah An-Naml, ayah 44)

In her heart, she had already been drawn to Islam, but this experience made her realize something more — outward appearances can deceive the understanding of people. She began to connect the lessons from Sulaiman (عَلَيْهِ ٱلسَّلَامُ) and saw how worshipping the sun and moon because of their prominence was foolish.

This is the visible reality, but truly, only Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) could make their appearance prominent. At that moment, she renounced the religion of polytheism and embraced Islam, saying: "My Lord, I had surely wronged myself, and now I submit, along with Sulaiman, to Allah, the Lord of all the worlds." — (Surah An-Naml, ayah 44)

JINNS AND THEIR MAGIC

Before Prophet Sulaiman (عَلَيْهِ ٱلسَّلَامُ) had gained dominion over the jinns, some of them strayed from the right path and spent time deceiving people with their books of magic.

They falsely claimed abilities to tell the future and see the unseen, leading many to misguided beliefs. With the support of Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ), Prophet Sulaiman put an end to this practice. He subdued the jinns, thereby protecting the people from false worship. For their punishment, the jinns were made to be public servants helping carry out any tasks Prophet Sulaiman (عَلَيْهِ ٱلسَّلَامُ) had.

The Qur'an mentions this part of the story in verses 12-13 of Surah Saba:
"And to Solomon [We subjected] the wind - its morning [journey was that of] a month - and its afternoon [journey was that of] a month, and We made flow for him a spring of [liquid] copper. And among the jinn were those who worked for him by the permission of his Lord. And whoever deviated among them from Our command - We will make him taste of the punishment of the Blaze. They made for him what he willed of elevated chambers, statues, bowls like reservoirs, and stationary kettles. [We said], 'Work, O family of David, in gratitude.' And few of My servants are grateful." — (Surah Saba, ayat 12-13)

PROPHET SULAIMAN'S (عَلَيْهِ ٱلسَّلَامُ) DEATH

As the time drew near for Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) to call His faithful servant back to Him, Sulaiman (عَلَيْهِ ٱلسَّلَامُ) made a final request. He asked if the Angel of Death could take his soul while he remained seated, upright, supported by his staff. Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) granted his request. As Sulaiman (عَلَيْهِ ٱلسَّلَامُ) watched the jinns laboring away, the Angel quietly came and took his soul. His body remained propped, showing no sign of departure from this world.

Oblivious to the Prophet's passing, the jinn continued to work tirelessly day in and day out. It wasn't until some termites came and ate through his staff that Prophet Sulaiman's (عَلَيْهِ ٱلسَّلَامُ) body fell to the floor.

Only then did the people come to know of his passing. They gathered around and questioned how long he had been like this.

They wondered how the Jinns remained clueless about his passing. This event served as a powerful demonstration to show his people that the evil Jinns are truly incapable of seeing the unseen and knowing the future. Had they been aware of the Prophet's passing, they would've abandoned their stations and stopped working immediately.

The Qur'an captures this moment, stating:
"So, when We decided (that) death (should come) upon him, nothing gave them any indication of his death, except a creature of the earth that had eaten up his sceptre. So, when he fell down, the Jinns came to know that if they had the knowledge of the Unseen, they would not have stayed (so long) in the humiliating punishment." — (Surah Saba, ayah 14)
STORY
    ],

    'yunus' => [
        'id'      => 'yunus',
        'number'  => 12,
        'name'    => 'Prophet Yunus (AS)',
        'arabic'  => 'يُونُس',
        'era'     => 'Dhun-Nun (The Companion of the Whale)',
        'region'  => 'Nineveh (Northern Iraq) → Mediterranean Sea',
        'surah'   => 'Surah Yunus (10:98), Al-Anbiya (21:87-88), As-Saffat (37:139-148), Al-Qalam (68:48-50)',
        'arabic_verse' => 'لَّا إِلَٰهَ إِلَّا أَنتَ سُبْحَانَكَ إِنِّي كُنتُ مِنَ الظَّالِمِينَ',
        'verse_translation' => '"There is no god but You. Glory be to You! I have done wrong." — (Qur\'an 21:87)',
        'story'   => <<<'STORY'
THE STORY OF PROPHET YUNUS (عَلَيْهِ ٱلسَّلَامُ)

Yunus Ibn Matta was a Messenger of Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) sent to Nineveh, a city in northern Iraq with a population of over a hundred thousand. Prophet Yunus (عَلَيْهِ ٱلسَّلَامُ) was seemingly an ordinary man who was born and raised amongst the fellow citizens of Nineveh.

The booming city of Nineveh had long forgotten the message of Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) and became a city filled with idol worshiping and sin. Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) decided to send Prophet Yunus (عَلَيْهِ ٱلسَّلَامُ), a man born amongst them, as a Messenger to guide them to His path — the path of light.

Prophet Yunus immediately set out to fulfill his Lord’s wish and invited his people to turn to Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) and shun idol worship. But the people of Nineveh rejected Yunus, just as many nations rejected the prophets and messengers before him.

Yunus was not deterred; he continued to call them to the worship of Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ), reminding them of the terrible wrath of Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) that was directed at Ad, Thamud, and the people of Nuh.

But they rejected this and said:
“We and our forefathers have worshipped these gods for many years and no harm has come to us.”

Prophet Yunus (عَلَيْهِ ٱلسَّلَامُ) wanted to help them and was persistent, he did not give up on his people; despite their ignorance and harsh words, he continued to warn them of Allah’s punishment.

“Let it happen,” the men laughed and informed Yunus that they were not the least afraid of his empty threats. Prophet Yunus (عَلَيْهِ ٱلسَّلَامُ) was disheartened. Despite his desire to help his people, he feared their fate was sealed. Anticipating the forthcoming wrath of Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ), he fled the city, fearing the prophecy of its destruction might soon be fulfilled. Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) was displeased with His prophet for departing from his people without specific command.

English Translation:
"And [mention] the man of the fish, when he went off in anger and thought that We would not decree [anything] upon him..." — (Qur'an 21:87)

THE SAVED CITY

The calm skies over Nineveh soon turned red with anger, preparing to spit out the wrath of Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ). Men, women, and children gathered at the mountaintops, watching the combat of the skies above them with hearts filled with fear.

They soon remembered Yunus’s warning of Allah’s punishment and feared the predicament of Ad, Thamud, and the people of Nuh. With newfound faith, they fell on their knees, with their hands stretched out, as they began to beg for Allah’s forgiveness and mercy. Moved by this display of sincere repentance, Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) lifted His punishment, forgave his subjects, and showered his blessings upon them.

As the skies cleared, the people prayed for the safe return of their Prophet Yunus (عَلَيْهِ ٱلسَّلَامُ) so that he could further guide them along the path of righteousness.

YUNUS (عَلَيْهِ ٱلسَّلَامُ) AND THE WHALE

Meanwhile, Prophet Yunus (عَلَيْهِ ٱلسَّلَامُ), who had left Nineveh, had boarded a small passenger ship with the intention of travelling as far away from his people as possible. The ship traveled through the calm waters during the day, but as the night closed in, a storm raged on, rocking the ship wildly to and fro.

The crew and passengers began to fear for their lives as the sea water gradually began flooding into the deck, slowly sinking the ship.

As the storm raged through the night, the ship's captain ordered his men to throw off all the unnecessary luggage and extra weight to lighten the ship's load. As instructed, the crew, one by one, discarded just about anything they could, but their efforts fell short as the ship struggled to stay afloat.

The Captain was left with no choice — he realized that the sacrifice of one might be necessary to save the many. As was common practice among men during those times, the Captain decided to draw lots to choose the passengers to be sacrificed.

The lots were cast, and Prophet Yunus’s name was selected. The men knew that Yunus (عَلَيْهِ ٱلسَّلَامُ) was a young, righteous, honest, and blessed man, so they refused to throw him out and agreed to draw lots again.

So the lots were cast, and Yunus’s name appeared again.

The men refused to throw Yunus, saying:
“We are not going to get rid of Yunus. He is our blessing on the boat. He is the best man we have on the boat; we are not going to get rid of him.”

So they drew lots for the third time, and Yunus’s name appeared yet again! The men were baffled, but Prophet Yunus (عَلَيْهِ ٱلسَّلَامُ) knew that this was the verdict of Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ), for he had left his people without his Lord’s consent. So Yunus (عَلَيْهِ ٱلسَّلَامُ) jumped out of the ship into the dark, angry waves in the middle of the ocean.

As Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) commanded, the largest whale in the ocean surfaced and swallowed Yunus (عَلَيْهِ ٱلسَّلَامُ) just as he hit the water.

The whale then descended to the depths of the ocean. Yunus, who was initially unconscious, awoke to find himself enveloped by three layers of darkness. The first layer is the night's darkness, then the sea's darkness, and lastly, the dark confines of the whale's stomach.

The creatures of the deep sea heard the invocations of Yunus (عَلَيْهِ ٱلسَّلَامُ) and gathered around the whale to join in the celebration of the praises of Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ).

لَّآ إِلَٰهَ إِلَّآ أَنتَ سُبۡحَٰنَكَ إِنِّي كُنتُ مِنَ ٱلظَّـٰلِمِينَ

Transliteration: laaa ilaaha illaaa Anta Subhaanaka innee kuntu minaz zaalimeen

English Translation: "There is no god but You. Glory be to You! I have done wrong." — (Qur'an 21:87)

Allah, the Most Merciful, was immensely moved by Yunus’s repentance:
“So bear with patience until the Judgement of your Lord comes, and do not belike the man in the fish (i.e., Jonah) who called out, choking with grief: had his Lord not bestowed His favour upon him, he would have been cast upon that barren shore (and would have remained there) in disgrace. But his Lord exalted him, and included him among His righteous servants.” — (Surah Qalam, ayat 48-50)

He commanded the whale to spit out His Messenger at the nearest shore. The whale obeyed Allah’s command, swam to the nearest shore, and ejected Yunus (عَلَيْهِ ٱلسَّلَامُ). Yunus’s body was inflamed as a result of the acids in the whale’s stomach.

He had no protection against the sun and wind, so Allah commanded a tree to grow over Yunus to provide him with food and shade. Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) forgave him and informed him that if it were not for his sincere invocations, Yunus would continue to be in the stomach of the whale till the Day of Judgment.

Yunus was the only Prophet whose entire community accepted Islam. Allah stated in the Holy Quran regarding the people of Yunus Ibn Matta:
“Was there any town community that believed after seeing the punishment, and its Faith at that moment, saved it from the punishment? (the answer is none) — except the people of Yunus; when they believed, We removed from them the torment of disgrace in the life of the present world, and permitted them to enjoy for a while.” — (Surah Yunus, Ayah 98)

The life and trials of Prophet Yunus's (عَلَيْهِ ٱلسَّلَامُ) life are summarized in Surah Saffat verses 139 to 148.

Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) recounts:
"And Jonah too was one of the Messengers. Call to mind when he fled to the laden ship, cast lots, and was among the losers. Then a fish swallowed him, and he was blameworthy. Had he not been one of those who glorify Allah, he would certainly have remained in its belly till the Day of Resurrection. But We threw him on a wide bare tract of land while he was ill; and caused a gourd tree to grow over him, and We sent him forth to a nation of a hundred thousand or more, and they believed. So We let them enjoy life for a while." — (Surah Saffat, ayat 139-148)
STORY
    ],

    'zakariyah' => [
        'id'      => 'zakariyah',
        'number'  => 13,
        'name'    => 'Prophet Zakariyah (AS)',
        'arabic'  => 'زَكَرِيَّا',
        'era'     => 'Guardian of Maryam & Father of Yahya',
        'region'  => 'Jerusalem (Bayt al-Maqdis / Masjid Al-Aqsa)',
        'surah'   => 'Surah Maryam (19:2-15), Al-Imran (3:33-44), Al-Anbiya (21:89-90)',
        'arabic_verse' => 'رَبِّ لَا تَذَرْنِي فَرْدًا وَأَنتَ خَيْرُ الْوَارِثِينَ',
        'verse_translation' => '"My Lord, do not leave me alone [with no heir], while You are the best of inheritors." — (Surah Al-Anbiya 21:89)',
        'story'   => <<<'STORY'
THE CHARACTER OF ZAKARIYAH (عَلَيْهِ ٱلسَّلَامُ)

Like the Prophets who came before and after him, Prophet Zakariyah (عَلَيْهِ ٱلسَّلَامُ) was a righteous man of noble descent. He was among the Prophets sent to tread the blessed soil of Jerusalem, guiding the Children of Israel along the path of Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ).

Prophet Zakariyah (عَلَيْهِ ٱلسَّلَامُ) was a man of humble means but always eager to help those in need.

Abu Hurairah narrated that the Messenger of Allah (ﷺ) said:
"Zakariyya was a carpenter." — (Sahih hadith from Sunan Ibn Majah 2150 as well as Sahih Muslim 2379)

Imam Nawawi mentions how this profession further reflects his humility and dedication to earning a living through honest means. In a separate hadith, The Messenger of Allah (ﷺ) said:
“No one has ever eaten food better than that which his hands have earned.” — (Sahih al-Bukhari 2072)

Aside from his work as a carpenter, he remained steadfast in his service to Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ). He oversaw Bayt al-Maqdis (Masjid Al-Aqsa), and here, he tirelessly strived to remind his people of their duty through his sermons.

While content and grateful for all that Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) had blessed him with, he harbored one growing concern. He was well into his nineties with no heir to continue his legacy. He felt Bani Israel needed a strong, vibrant leader who would keep them on the straight path of Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ). As the seasons passed, Prophet Zakariyah (عَلَيْهِ ٱلسَّلَامُ) and his wife aged, reaching well beyond the years of parenthood.

THE BLESSED FAMILY OF IMRAN AND THE BIRTH OF MARYAM (رضی اللہ عنہ)

The Holy Qur'an mentions how:
"Allah chose Adam, Nuh, the family of Ibrahim and the family of 'Imran above the 'Alamin (mankind and jinns). They were descendants one of another. Allah is Hearer, Knower." — (Surah Al-Imran, ayat 33-34)

The Qur'an further has two surahs titled "Surah Al-Imran" and "Surah Maryam," named after Imran, who was the father of Maryam (RA), who in turn was the mother of Isa or Jesus (عَلَيْهِ ٱلسَّلَامُ).

This was a very blessed family, and the verse traces the bloodline of The House of Imran back to Ibrahim and Nuh and ultimately from Adam (peace be upon them all). This ayah is significant from the perspective of understanding that Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) did not elevate one family over the other. Rather, they were all descendants of one another and further connected through their obedient worship of one God.

Now, the wife of Imran is believed to be Hannah, although not explicitly named in the Qur'an. She was a very pious and respected woman. Ibn Katheer mentions how one day, Hannah came across a bird feeding its chick. She herself was unable to conceive, and she deeply longed for a child.

Upon seeing the birds, it inspired her to pray to Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ), saying:
"My Lord! I dedicate what is in my belly entirely to Your service, so accept it from me. You alone are truly the All-Hearing, All-Knowing." — (Surah al-Imran, ayah 35)

This highlights an important aspect of their imaan (faith). Their primary concern was not around the material aspirations of their children. Rather, success and happiness were from the level of the child's dedication and devotion to Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ). This means keeping on the straight path, being virtuous, doing good deeds, and being safe from the whispers of shaitan.

So, Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) heard the call, bestowed his blessings, and granted Hannah a daughter who was given the beautiful name Maryam. Hannah was happy at the birth of her newborn baby but was initially surprised to find she had given birth to a girl. She was expecting Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) to provide her with a son to fulfill specific religious duties better suited for a male inside the masjid.

She called out to Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ), saying:
"O Lord! I have given birth to a female," but Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) was fully aware of what she had given birth to. She continued to say, "I have named her Maryam and commit her and her offspring to You for protection from Shaitan, the accursed." — (Surah Al-Imran, ayah 36)

In a hadith, the Prophet (ﷺ) said:
"Many a man achieved perfection, but no woman achieved perfection except for Maryam, the daughter of 'Imran, and Asiyah, the wife of Fir'awn." — (Sahih Darussalam Jami at-Tirmidhi 1834)

Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) blessed and honored Maryam and protected her from shaitan.

The Qur'an further mentions:
"Then came the time when the angels said: ‘O Maryam! Behold, Allah has chosen you, and made you pure, and exalted you above all the women in the world. O Mary, be devoutly obedient to your Lord and prostrate and bow with those who bow [in prayer].'" — (Surah al-Imran, ayah 42)

And this was Maryam's (RA) test; she was commanded by the angels to increase in acts of worship, to prostrate, submit, and remember Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) often. She lived and grew up inside Bayt al-Maqdis, spending countless hours in service to Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ).

Fun fact: Maryam (RA) is the only woman mentioned in the Qur'an by her name. However, the Qur'an does refer to a total of 33 different women.

Furthermore, when Maryam (RA) was born, it was reported she did not cry. The Prophet (ﷺ) said:
"No child is born but that Shaitan touches it when it is born, whereupon it starts crying loudly because of being touched by shaitan, except Mary and her son." — (Sahih al-Bukhari 4548)

PROPHET ZAKARIYAH'S (عَلَيْهِ ٱلسَّلَامُ) RELATIONSHIP WITH MARYAM (رضی اللہ عنہ)

As for the relationship between Zakariyah (عَلَيْهِ ٱلسَّلَامُ) and Maryam (RA), there is a difference of opinion. The majority view is that Zakariyah was married to a woman named Eeshaa, and she was Maryam's elder sister. The second opinion is that Eeshaa was the maternal aunt, meaning the sister of Maryam's mother. If true, this would make Zakariyah her maternal uncle.

Regardless, before Maryam (RA) was born, her father, Imran, had already passed away. With the custom of appointing a guardian for children born without a father prevalent at that time, priests and religious leaders began arguing over who would sponsor Maryam.

The people at the masjid said:
"She is the daughter of our Imam," as Imran used to lead them in prayer and take care of their rituals. They recognized Maryam (RA) as a special child who came from a blessed family, and they wanted to be the ones to support her.

Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) revealed in the Quran:
"This is news of the unseen that We reveal to you. You were not with them when they cast lots to decide who would be Maryam's guardian, nor were you there when they argued about it." — (Surah Al-Imran, ayah 44)

Among others, Prophet Zakariyah’s (عَلَيْهِ ٱلسَّلَامُ) name was suggested as a potential guardian for Maryam. The men drew their quills (a writing pen) and placed them in a container, inviting a child to select one. They decided that the owner of the chosen quill would claim their right over Maryam.

The priests placed the quills in a stream, ruling that the last quill to resist the water's current would claim guardianship. By Allah’s (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) infinite power, Prophet Zakariyah’s (عَلَيْهِ ٱلسَّلَامُ) quill remained afloat and idle in its place while the others moved with the water.

This time, they asserted that the quill moving with the water would receive rights over the child. As Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) decreed, Prophet Zakariyah's (عَلَيْهِ ٱلسَّلَامُ) quill flowed fastest downstream while the others sunk under.

Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) says:
"So her Lord accepted her graciously and blessed her with a pleasant upbringing — entrusting her to the care of Zakariyah." — (Surah Al-Imran, ayah 37)

Prophet Zakariyah (عَلَيْهِ ٱلسَّلَامُ) was the imam of Al-Aqsa mosque and spent most of his days there in service to Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ). He had built a separate chamber just for Maryam رضی اللہ عنہ so he could leave her there alone in her studies and worship. No one was provided entry to her chamber but Prophet Zakariyah (عَلَيْهِ ٱلسَّلَامُ).

Much to his surprise, each time Zakariyah (عَلَيْهِ ٱلسَّلَامُ) visited Maryam’s sanctuary, he found fresh fruit. Fruits that grew in Summer were found fresh in her room during winter, and fruits that grew in winter were found fresh in her room during summer.

Zakariyah (عَلَيْهِ ٱلسَّلَامُ) found it a miracle and was curious as to who would supply these fresh fruits when only he had access to her chamber.

He exclaimed:
“O Maryam! Where did this come from?” — (Surah Al-Imran, ayah 37)

Maryam replied:
“It is from Allah. Surely Allah provides for whoever He wills without limit.” — (Surah Al-Imran, ayah 37)

Prophet Zakariyah (عَلَيْهِ ٱلسَّلَامُ) did not doubt her response. Instead, he was inspired. He felt that if Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) could miraculously provide Maryam رضی اللہ عنہ with fruits that were not available in that season, Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) could miraculously bless him and his wife with a child in their old age.

So, he raised his hand and called out:
“My Lord! Surely my bones have become brittle, and gray hair has spread across my head, but I have never been disappointed in my prayer to You, my Lord! And I am concerned about the faith of my relatives after me, since my wife is barren. So grant me, by Your grace, an heir, who will inherit prophethood from me and the family of Yaqub, and make him, O Lord, pleasing to You!” — (Surah Maryam, ayat 4-6)

NOTHING IS IMPOSSIBLE FOR ALLAH (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ)

Nothing happens by chance or coincidence; Allah, the All-Wise, was awaiting this prayer from His Prophet. The Lord’s response was immediate:

“…Yahya will confirm the Word of Allah and will be a great leader, chaste, and a prophet among the righteous.” — (Surah Al-Imran, ayah 39)

Although Prophet Zakariyah (عَلَيْهِ ٱلسَّلَامُ) was resolute and sincere in his du'a to Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ), he was truly shocked at the knowledge that Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) had not only heard his dua but also accepted it.

He wondered:
“My Lord! How can I have a son when my wife is barren, and I have become extremely old?” — (Surah Maryam, ayah 8)

An angel replied:
“So will it be! Your Lord says, ‘It is easy for Me, just as I created you before when you were nothing!’” — (Surah Maryam, ayah 9)

Prophet Zakariyah (عَلَيْهِ ٱلسَّلَامُ) was grateful to his Lord. He called out to Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ), asking Him to give him a sign when his wife had conceived.

Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) responded:
“Your sign is that you will not be able to speak to people for three nights, despite being healthy.” — (Surah Maryam, ayah 10)

As Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) ordained, while Zakariyah (عَلَيْهِ ٱلسَّلَامُ) was in the mihrab, he realized that his voice had eluded him. He came out signaling to his people to glorify Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) morning and evening. (Surah Maryam, ayah 11)

In due course, Prophet Yahya (عَلَيْهِ ٱلسَّلَامُ) was born.

The Quran narrates:
"O Yahya! Hold firmly to the Scriptures.” We granted him wisdom while he was still a child, as well as purity and compassion from Us. And he was God-fearing and kind to his parents. He was neither arrogant nor disobedient. Peace be upon him the day he was born, and the day of his death, and the day he will be raised back to life!" — (Surah Maryam, ayat 12-15)

2 PROPHETIC DU'AS OF PROPHET ZAKARIYA (عَلَيْهِ ٱلسَّلَامُ)

Dua 1 – Asking Allah for righteous offspring
Arabic:
رَبِّ هَبْ لِي مِن لَّدُنكَ ذُرِّيَّةً طَيِّبَةً ۖ إِنَّكَ سَمِيعُ الدُّعَاءِ
Transliteration: Rabbi hab lee mil ladunka zurriyyatan taiyibatan innaka samee'ud du'aaa'
English Translation: "My Lord, grant me from Yourself a good offspring. Indeed, You are the Hearer of supplication."
Reference: Surah Al-Imran, Ayah 38.

Dua 2 – Asking Allah not to leave him without a righteous heir
Arabic:
رَبِّ لَا تَذَرْنِي فَرْدًا وَأَنتَ خَيْرُ الْوَارِثِينَ
Transliteration: Rabbi laa tazarnee fardanw wa Anta khairul waariseen
English Translation: "My Lord, do not leave me alone [with no heir], while You are the best of inheritors."
Reference: Surah Al-Anbiya, Ayah 89.
STORY
    ],

    'yahya' => [
        'id'      => 'yahya',
        'number'  => 14,
        'name'    => 'Prophet Yahya (AS)',
        'arabic'  => 'يَحْيَىٰ',
        'era'     => 'Wisdom in Youth & Martyrdom for Truth',
        'region'  => 'Jerusalem & Jordan River Valley (Palestine)',
        'surah'   => 'Surah Maryam (19:7, 12-15), Al-Imran (3:39), Al-An\'am (6:85), Al-Anbiya (21:90)',
        'arabic_verse' => 'يَا يَحْيَىٰ خُذِ الْكِتَابَ بِقُوَّةٍ ۖ وَآتَيْنَاهُ الْحُكْمَ صَبِيًّا',
        'verse_translation' => '"O Yahya! Hold the scripture with all your strength." And We bestowed wisdom upon him while he was still a child. — (Surah Maryam, ayah 12)',
        'story'   => <<<'STORY'
THE STORY OF PROPHET AL-YAHYA (عَلَيْهِ ٱلسَّلَامُ)

A MIRACULOUS BIRTH

Prophet Yahya (عَلَيْهِ ٱلسَّلَامُ) is known as John the Baptist in Judeo-Christian tradition.

The birth of Prophet Yahya (عَلَيْهِ ٱلسَّلَامُ) can be considered a miracle as Prophet Zakariyah’s (عَلَيْهِ ٱلسَّلَامُ) wife was believed to be barren and was past childbearing age when the couple was blessed with him.

The name Yahya was given to the newborn by Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) — a name that was not used by any other before.

Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) says in the Holy Quran:
"Zechariah, We bring you the good news of the birth of a son whose name shall be Yahya (John), one whose namesake We never created before." — (Surah Maryam, ayah 7)

HIS EARLY LIFE AND CHARACTER

Prophet Yahya (عَلَيْهِ ٱلسَّلَامُ) was unlike other children his age; when they preferred to play during their leisure time, Prophet Yahya (عَلَيْهِ ٱلسَّلَامُ) busied himself with activities that expanded his knowledge.

In a divine command, Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) instructed him:
"O Yahya! Hold the scripture with all your strength." — (Surah Maryam, ayah 12)

The same verse reveals that Prophet Yahya (may peace be upon him) was given Hukm, meaning wisdom, knowledge, and good judgment to discern as an authority on the scripture.

The ayah further states:
"We had bestowed wisdom upon him while he was still a child;"

The scripture referenced in this verse was the Torah, originally given to Prophet Musa (عَلَيْهِ ٱلسَّلَامُ). From a young age, Yahya (عَلَيْهِ ٱلسَّلَامُ) was instructed to deeply understand, believe in, and act upon these religious texts. His precocious spiritual understanding set him apart from the other children. He showed a lack of interest in their games and lived a life devoted to his spiritual studies.

With the gift of knowledge granted to him, Yahya (عَلَيْهِ ٱلسَّلَامُ) became the wisest and most knowledgeable man of his time. His innate sensitivity and empathy deepened with age, and it led him to show even greater compassion towards his parents, community, and all of Allah's (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) creation.

Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) says in Surah Maryam that Prophet Yahya (عَلَيْهِ ٱلسَّلَامُ) was bestowed with purity and compassion. The Almighty also states that by His will, Yahya (عَلَيْهِ ٱلسَّلَامُ) attained piety and compassion towards his parents:
"We also endowed him with tenderness and purity, and he was exceedingly pious, and cherishing to his parents. Never was he insolent or rebellious. Peace be upon him the day he was born, and the day he will die, and the day he will be raised up alive." — (Surah Maryam, ayat 13-15)

The scholars interpret the word "Hanan" as tenderness, an innate quality likened to a mother's love, characterized by intense gentleness, mercy, and compassion. This kind of empathy is a divine gift by Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) instilled in one's heart.

Next, it mentions his purity, referring to the state of either being absolved from sin or his righteousness in deeds (having sincere niyyah). Prophet Yahya (عَلَيْهِ ٱلسَّلَامُ) also embodied taqwa and humility. He was never arrogant to disobey Allah's (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) commands and was always dutiful to his parents.

With this, Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) allowed Yahya (عَلَيْهِ ٱلسَّلَامُ) to counsel people on various matters, warn them against disobedience and disbelief, urge them to repent for their sins, and guide them to the religion of truth.

PROPHET YAHYA'S (عَلَيْهِ ٱلسَّلَامُ) LOVE OF NATURE

Prophet Yahya (عَلَيْهِ ٱلسَّلَامُ) was a humble servant of Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) who found peace and solace in nature. He often slept in mountains, fields, caves, or holes in the ground. His nights were spent crying and praising Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) for His countless blessings.

He even had a couple of run-ins with wild lions and bears, but he never heeded them, being deeply immersed in praising his Lord. The wild animals recognized Yahya (عَلَيْهِ ٱلسَّلَامُ) as the Prophet who cared for all creatures, so they would leave bowing their heads with respect.

There are also stories reported of Prophet Yahya (عَلَيْهِ ٱلسَّلَامُ), which show his sensitive heart and sincere devotion. It was said he used to cry so much that the tears marked his cheeks. One day, after not having seen his son for three days, Prophet Zakariyah (عَلَيْهِ ٱلسَّلَامُ) went in search of him. He eventually found his son resting inside a grave which he had dug himself.

Prophet Zakariyah (عَلَيْهِ ٱلسَّلَامُ) said:
"My son, I have been looking for you, and you are dwelling in this grave weeping!"

Yahya (عَلَيْهِ ٱلسَّلَامُ) replied:
"O father, did you not tell me that between Paradise and Hell is only a span, and it will not be crossed except by tears of weepers?"

"Weep then, my son," Prophet Zakariyah (عَلَيْهِ ٱلسَّلَامُ) said as they wept together.

In another heartfelt account, Prophet Yahya (عَلَيْهِ ٱلسَّلَامُ) was said to be sitting alone at the Jordan River, overlooking the water, crying in devotion to Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ). Unnoticed, his parents, who had been searching for him, quietly approached. Overwhelmed by his devotion to Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ), they, too, were moved to tears.

This instance highlights a common theme throughout his life: his words were so moving that the people had no reservations about the veracity of the message he was delivering. Whenever Prophet Yahya (عَلَيْهِ ٱلسَّلَامُ) called out to his folk to worship Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ), he made them weep in their love and reverence for the Almighty.

It was narrated that Prophet Yahya (عَلَيْهِ ٱلسَّلَامُ) once said:
"The dwellers of Paradise are sleepless out of the sweetness of Allah's bounty; That is why the faithful must be sleepless because of Allah's love in their hearts. How far between the two luxuries, how far between them?"

Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) speaks of Prophet Yahya (عَلَيْهِ ٱلسَّلَامُ) in the Quran:
"...shall be outstanding among men, utterly chaste, and a Prophet from among the righteous." — (Surah Al-Imran, ayah 39)

Scholars state that Prophet Yahya (عَلَيْهِ ٱلسَّلَامُ) was devoted to Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) to such an extent that he remained chaste till his final breath. They further state that while this is an accepted act of worship during the time of Prophet Yahya (عَلَيْهِ ٱلسَّلَامُ), it is encouraged for Muslims to marry, as per the sunnah of Prophet Muhammad (ﷺ).

A chain of narrators reported Idris Al Khawlawi said:
“Shall I tell you who ate the best food?”

He then continued:
“It is Yahya Ibn Zakariyah. He ate with the company of animals at dinner, because he feared mixing with people."

Prophet Yahya (عَلَيْهِ ٱلسَّلَامُ), who was extremely disciplined and lived a purposeful life in solitude having enough with just his relationship with Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ).

PROPHET YAHYA'S (عَلَيْهِ ٱلسَّلَامُ) RELATIONSHIP WITH PROPHET ISA (عَلَيْهِ ٱلسَّلَامُ)

In Islamic tradition, Mary and Jesus are known as Maryam (may Allah be pleased with her) and Isa (عَلَيْهِ ٱلسَّلَامُ), respectively. The view of many biographers and historians is that the mother of Maryam and the mother of Prophet Yahya were sisters. This would make Prophet Isa (عَلَيْهِ ٱلسَّلَامُ) and Prophet Yahya (عَلَيْهِ ٱلسَّلَامُ) maternal cousins.

Isa (عَلَيْهِ ٱلسَّلَامُ) made the supplication:
“Indeed, I am the servant of Allah. He has given me the Scripture and made me a prophet. And He has made me blessed wherever I am and has enjoined upon me prayer and zakah as long as I remain alive And [made me] dutiful to my mother, and He has not made me a wretched tyrant. And peace is on me the day I was born and the day I will die and the day I am raised alive.” — (Surah Maryam, ayat 30-33)

The Quranic verses concerning Prophet Isa's (عَلَيْهِ ٱلسَّلَامُ) character share similarities with those about Prophet Yahya (عَلَيْهِ ٱلسَّلَامُ), particularly in verses 12-15, where Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) speaks of Yahya's virtues.

The difference, however, is in these verses Prophet Isa (عَلَيْهِ ٱلسَّلَامُ) speaks in first person saying how he is, "dutiful to my mother" instead of saying parents since he was born without a father.

Both Prophet Yahya (عَلَيْهِ ٱلسَّلَامُ) and Prophet Isa (عَلَيْهِ ٱلسَّلَامُ) mention the triple blessing of peace — a divine protection placed by Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) at their birth, death, and resurrection.

The scholars interpret these blessings as follows: peace at birth referring to the protection placed from the influence of Shaitan and his evil, peace at death indicating being exempt from the trials of the grave, and peace at resurrection as being free from the fear and worry that will overcome others on that day.

PROPHET MUHAMMAD (ﷺ) MEETS PROPHET YAHYA (عَلَيْهِ ٱلسَّلَامُ)

During Prophet Muhammad’s (ﷺ) night journey and ascension to the heavens, he met his brothers, Prophet Yahya (عَلَيْهِ ٱلسَّلَامُ) and Prophet Isa (عَلَيْهِ ٱلسَّلَامُ).

In the famous hadith known as "Hadith of Isra and Mi'raj" in Sahih Bukhari 3207, it mentions:
"…Then we ascended to the second heaven. It was asked, 'Who is it?' Jibreel said, 'Jibreel.' It was said, 'Who is with you?' He said, 'Muhammad.' It was asked, 'Has he been sent for?' He said, 'Yes.' It was said, 'He is welcomed. What a wonderful visit his is!' Then I met Jesus and Yahya (John) who said, 'You are welcomed, O brother and a Prophet.'"

After this encounter, Prophet Muhammad (ﷺ) continues to ascend through the heavens, meeting various other prophets, including Yusuf in the third, Idris in the fourth, Harun in the fifth, Musa in the sixth, and Ibrahim in the seventh.

It is here where the fifty daily prayers were initially obligated, but after a series of discussions with Prophet Musa (عَلَيْهِ ٱلسَّلَامُ) and subsequent pleas to Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ), the obligation was reduced to the five daily prayers.

PROPHET YAHYA'S (عَلَيْهِ ٱلسَّلَامُ) UNTIMELY DEATH

The Ruler of Palestine Herod Antipas, a tyrant king, planned to marry his niece Salome with whom he was in love. Salome’s mother and some learned men of Zion openly encouraged the marriage.

Prophet Yahya (عَلَيْهِ ٱلسَّلَامُ), who got wind of the impending marriage, publicly condemned the proposed marriage as incestuous, violating the holy Torah's laws.

Salome, eager to ascend to power and rule alongside her uncle, devised a plan. She dressed attractively and enticed Herod with a provocative dance. She captivated him, leading him to promise her any wish.

Seizing the moment, Salome demanded Yahya's head:
“I would love to have the head of Yahya because he has defiled your honor and mine throughout the land. If you grant me this wish, I shall be very happy and will offer myself to you.”

Herod, spellbound by Salome, complied. Prophet Yahya (عَلَيْهِ ٱلسَّلَامُ) was captured and executed, and his head was taken to a delighted Queen.
STORY
    ],

    'isa' => [
        'id'      => 'isa',
        'number'  => 15,
        'name'    => 'Prophet Isa (AS)',
        'arabic'  => 'عِيسَىٰ',
        'era'     => 'The Messiah, Son of Maryam & The Injeel',
        'region'  => 'Nazareth & Jerusalem (Palestine)',
        'surah'   => 'Surah Maryam (19:16-36), Al-Imran (3:33-59), Al-Ma\'idah (5:17-19, 110-115), An-Nisa (4:157-158, 171)',
        'arabic_verse' => 'إِنِّي عَبْدُ اللَّهِ آتَانِيَ الْكِتَابَ وَجَعَلَنِي نَبِيًّا',
        'verse_translation' => '"Verily I am Allah’s servant. He has granted me the Book and has made me a Prophet." — (Surah Maryam, Ayah 30)',
        'story'   => <<<'STORY'
THE STORY OF PROPHET ISA (عَلَيْهِ ٱلسَّلَامُ)

Before we begin the story of Prophet Isa (عَلَيْهِ ٱلسَّلَامُ), note that some details of family lineage and the context of certain early life events have been more extensively covered in the story of Prophet Zakariya (عَلَيْهِ ٱلسَّلَامُ). Since their timelines overlap, their stories have a lot of crossovers. We briefly summarize the relevant information so you, the reader or listener, may understand the story of Prophet Isa (عَلَيْهِ ٱلسَّلَامُ) without prior knowledge. We still strongly encourage reading the story of Zakariyah (عَلَيْهِ ٱلسَّلَامُ) to understand the differences in scholarly opinions.

Imran's wife, believed to be named Hannah (although not explicitly mentioned by name in the Qur'an), looked on as the mother bird nurtured and cared for her young. The couple remained childless for many, many years, so the sight of the bird nurturing her young deepened her desire for motherhood. The admirable quality in Hannah was she never lost hope; she was a very pious woman, believing in Allah's plan and only focusing on whatever was in her control.

Seeing the bird inspired her to raise her hands once more and pray to Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ), saying:
"My Lord! I dedicate what is in my womb entirely to Your service, so accept it from me. You alone are truly the All-Hearing, All-Knowing." — (Surah Al-Imran, ayah 35)

She vowed that if she were ever granted a child, its life would be dedicated to Allah’s (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) service at Masjid Al-Aqsa, just like her husband Imran.

Imran was a righteous man who had surrendered his life in Allah’s (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) service. He was said to be a leader of the Israelites and spent his days leading his people in prayer and engaging in acts of worship at Masjid Al-Aqsa.

Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) mentions in the Qur'an:
“Indeed, Allah chose Adam, Nuh, the family of Ibrahim, and the family of Imran above all people of their time.” — (Surah Al-Imran, ayah 33)

And so, Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) answered her prayer and blessed the couple with a child. Although Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) had planned a great future for Imran’s child and its progeny, Imran passed away before getting to see the birth of his child.

When the child was born, Imran’s wife was a little surprised to find out it was a girl. She was expecting a boy, as a boy would be better suited to fulfill the duties inside the masjid. How would she keep her vow to Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ)?

“My Lord! I have given birth to a girl, and the male is not like the female.” — (Surah Al-Imran, ayah 36)

But Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) is All-Aware. He knew full well how this child would serve Him – and it was beyond any human’s comprehension.

Hannah lovingly named her child Maryam, a name as beautiful as her hopes for the baby; she then prayed to Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ):
"I seek Your protection for her and her offspring from Satan, the accursed." — (Surah Al-Imran, ayah 36)

The prayer was accepted.

We are told by the Prophet (ﷺ) that when a child is born, Shaitan touches him on both sides of the body with two fingers, causing the baby to cry. However, Maryam and Isa were protected from Shaitan's touch; he tried and failed, for he could only touch the placenta cover. — (Sahih Bukhari 4548 and 3286)

In another hadith mentioning Maryam رضی اللہ عنہ, the Prophet (ﷺ) said:
"Many a man achieved perfection, but no woman achieved perfection except for Maryam, the daughter of 'Imran, and Asiyah, the wife of Fir'awn." — (Sahih Darussalam Jami at-Tirmidhi 1834)

MARYAM’S GUARDIAN

In Islam, a child who loses their father before reaching maturity is considered an orphan. Seen as vulnerable yet deserving, such children need support to flourish. The Qur'an speaks about the Muslim community's duty to care for those less fortunate:

"Righteousness is not that you turn your faces toward the east or the west, but [true] righteousness is [in] one who believes in Allah, the Last Day, the angels, the Book, and the prophets and gives wealth, in spite of love for it, to relatives, orphans, the needy, the traveler, those who ask [for help], and for freeing slaves; [and who] establishes prayer and gives zakah; [those who] fulfill their promise when they promise; and [those who] are patient in poverty and hardship and during battle. Those are the ones who have been true, and it is those who are the righteous." — (Surah Baqarah, ayah 177)

Prophet Muhammad (ﷺ) had a rough childhood, losing both his parents early on in his life. He further emphasized the importance and reward of caring for an orphan in many ahadith.

For example, in one hadith, he (ﷺ) says:
"Blessed is the wealth of a Muslim from which he gives to the poor, the orphans and to needy travelers." — (Sahih Bukhari 1465)

In another hadith, he highlights the reward of Jannah:
"The best house among the Muslims is the house in which orphans are well treated [...] I and the guardian of the orphan will be in the Garden like that," indicating closeness with his two fingers. — (Al-Adab Al-Mufrad 137)

With the vow fresh in her mind, Hannah wrapped her daughter in a sheet and handed her to the leaders of the mosque to appoint a guardian and sponsor the child.

Prophet Zakariyah (عَلَيْهِ ٱلسَّلَامُ), who was also a prominent leader at the masjid, stepped forward to claim guardianship of Maryam رضی اللہ عنہ as he was a relative to her. This sparked an intense debate among priests and other religious leaders who all wanted to sponsor Maryam رضی اللہ عنہ. The people at the masjid said, "She is the daughter of our Imam." They recognized Maryam رضی اللہ عنہ as a special child who came from a blessed family, and they wanted to be the one to support her.

To resolve the debate, they drew lots, a common practice when they struggled to reach an agreement.

Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) revealed in the Quran:
"This is news of the unseen that We reveal to you. You were not with them when they cast lots to decide who would be Maryam's guardian, nor were you there when they argued about it." — (Surah Al-Imran, ayah 44)

The men drew their quills and placed them in a container, inviting a child to select one. They decided that the owner of the chosen quill would claim their right over Maryam. By Allah’s (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) will, Prophet Zakariyah's (عَلَيْهِ ٱلسَّلَامُ) quill was chosen. However, this did not satisfy the contenders, so they decided to let nature choose the rightful guardian.

The priests placed the quills in a stream, ruling that the last quill to resist the water's current would claim guardianship. By Allah’s (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) infinite power, Prophet Zakariyah’s (عَلَيْهِ ٱلسَّلَامُ) quill remained afloat and idle in its place while the others moved with the water.

The priests were still not convinced. This time, they asserted that the quill moving with the water would receive rights over the child. As Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) decreed, Prophet Zakariyah's (عَلَيْهِ ٱلسَّلَامُ) quill flowed fastest downstream while the others sunk under.

Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) says:
"So her Lord accepted her graciously and blessed her with a pleasant upbringing—entrusting her to the care of Zakariyah." — (Surah Al-Imran, ayah 37)

GROWING UP IN AL-AQSA MASJID

Prophet Zakariyah (عَلَيْهِ ٱلسَّلَامُ) was the imam of Al-Aqsa mosque and spent most of his days there in service to Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ). He had built a separate chamber just for Maryam رضی اللہ عنہ so he could leave her there alone in her studies and worship. No one was provided entry to her chamber but Prophet Zakariyah (عَلَيْهِ ٱلسَّلَامُ).

"Then came the time when the angels said: ‘O Maryam! Behold, Allah has chosen you, and made you pure, and exalted you above all the women in the world. O Mary, be devoutly obedient to your Lord and prostrate and bow with those who bow [in prayer]." — (Surah Al-Imran, ayah 42)

She was commanded by the angels to increase in acts of worship, to prostrate, submit, and remember Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) often. She lived and grew up inside Masjid Al-Aqsa, spending countless hours in service to Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ).

Much to his surprise, each time Zakariyah (عَلَيْهِ ٱلسَّلَامُ) visited Maryam’s sanctuary, he found fresh fruit. Fruits that grew in summer were found fresh in her room during winter, and fruits that grew in winter were found fresh in her room during summer. Zakariyah (عَلَيْهِ ٱلسَّلَامُ) found it a miracle and was curious as to who would supply these fresh fruits when only he had access to her chamber.

He exclaimed:
“O Maryam! Where did this come from?” — (Surah Al-Imran, ayah 37)

Maryam replied:
“It is from Allah. Surely Allah provides for whoever He wills without limit.”

MARYAM RECEIVES NEWS OF A CHILD

One day, while Maryam رضی اللہ عنہ was praying by herself in her chamber, she was confronted by the presence of an unknown man. This intrusion sent a wave of fear through her body, her heart racing as she did not know the intentions of the man. Was he here to harm her? And how had he been given access to her room? Her sanctuary was safeguarded from any outsider, only permitting Zakariyah (عَلَيْهِ ٱلسَّلَامُ) entrance.

She then prayed, saying:
"I truly seek refuge in the Most Compassionate from you! So leave me alone if you are God-fearing." — (Surah Maryam, ayah 18)

The man calmly responded:
"I am just a message-bearer of your Lord" — (Surah Maryam, ayah 19)

The Qur'an clarifies the man's identity, stating:
"We sent to her our Ruh (angel Jibreel), and he appeared before her in the form of a man in all respects." — (Surah Maryam, ayah 17)

Thus, it was Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) who had sent down His angel bearing some good news. He continued by informing her he was sent down to announce the blessing of a pure son (pure signifying a righteous son who is free from all faults and sins).

This moment is also recounted in Surah Al-Imran ayat 45-46:
"And when the angels said: ‘O Mary! Allah gives you the glad tidings of a command from Him: his name shall be Messiah, Jesus, the son of Mary. He shall be highly honoured in this world and in the next, and shall be one of those near stationed to Allah. And he shall speak to men in the cradle and also later when he grows to maturity and shall indeed be among the righteous.’"

Confused, Maryam رضی اللہ عنہ says:
"How can a boy be born to me when no man has even touched me, nor have I ever been unchaste?" — (Surah Maryam, ayah 20)

And Jibreel replied:
"Thus shall it be. Your Lord says: 'It is easy for Me, and We shall do so in order to make him a Sign for mankind and a mercy from Us. This has been decreed.'" — (Surah Maryam, ayah 21)

ISA (عَلَيْهِ ٱلسَّلَامُ) AND ADAM (عَلَيْهِ ٱلسَّلَامُ)

"Indeed, the example of Jesus in the sight of Allah is like that of Adam. He created him from dust, then said to him, 'Be!' And he was!" — (Surah Al-Imran, ayah 59)

Just as Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) miraculously created Adam (عَلَيْهِ ٱلسَّلَامُ) without a father or mother, He created Isa (may peace be upon him) without a father. In Islam, Jesus (Isa) is not considered the son of God, as he is in Christian belief.

The Qur'an says Jesus was made like Adam in the sense of a miracle birth and shared attributes. However, Christians do recognize Adam (عَلَيْهِ ٱلسَّلَامُ) as the first man. And there is agreement between the two faiths that he was fashioned out of clay and mud.

We're told in Surah Sad, ayah 72 after Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) created him, he breathed into him a (ruh) spirit and the angels then prostrated before him.

So, if Adam (عَلَيْهِ ٱلسَّلَامُ) was not born in a normal way, and his status was not elevated, the same logic should apply to Isa (عَلَيْهِ ٱلسَّلَامُ).

It's common for human nature to believe that what they follow is superior to others. In Islam, it is recognized that each Prophet was endowed with special gifts or miracles to convey Allah's (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) message relevant to the historical period they lived in. However, their followers attached too much significance to the miracles of their Prophet and tried to discredit or deny the Prophets who succeeded them or came prior. And we see this, believers in Musa (عَلَيْهِ ٱلسَّلَامُ) discredit Isa (عَلَيْهِ ٱلسَّلَامُ) and deny him as being a prophet of God.

This tendency to elevate their leader is precisely why Prophet Muhammad (ﷺ) cautioned, as recorded in Sahih al-Bukhari 3445:
"Do not exaggerate in praising me as the Christians praised the son of Mary, for I am only a Slave. So, call me the Slave of Allah and His Apostle."

In the Qur'an, Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) guides us, saying:
"O Muslims, say to them, 'We believe in Allah and the Guidance which has been sent down to us and which was sent to Abraham, Ismail, Isaac and Jacob and his descendants and which was given by their Lord to Moses and Jesus and to all other Prophets. We do not discriminate against any of them and we have completely surrendered to Allah as Muslims.'" — (Surah Al-Baqarah, ayah 136)

MARYAM SECLUDES HERSELF FOR THE BIRTH

Fearing the tales of the townsfolk for carrying a child out of wedlock, Maryam decides to seclude herself until the birth of the baby. Although she knew that she was fulfilling a divine duty, the anxieties of facing people consumed her mind day and night. Everyone knew that she came from a respectable family and that both her father and mother were righteous people who dedicated their lives to the worship of One true God. How would the people react when they found out she had no husband? What would she tell them when they asked about the baby’s father?

After some months, Maryam (RA) could no longer contain the mental strain. Consumed with anxiety for the future, she left Nazareth: "...she withdrew with him to a remote place" (Surah Maryam, ayah 22). She hadn’t gone far when she was overcome with the pains of childbirth. It was finally time for the birth of her miracle baby. Alone and in immense pain, she settled herself beneath a palm tree to give birth.

As Maryam رضی اللہ عنہ looked down at her son, her fears intensified, and she cried out in distress:
"Oh, would that I had died before this and had been all forgotten" — (Surah Maryam, ayah 23)

This outcry reflects the immense emotional burden she carried, the pains of childbirth, the daunting task of nurturing a baby alone, without a husband, and forced to leave and live in isolation. Despite her revered status among the worshippers, she faced judgment and knew people would not believe her. All these emotions came crashing down in this moment.

Suddenly, she heard a voice:
"Grieve not, for your Lord has caused a stream of water to flow beneath you. Shake the trunk of the palm-tree towards yourself and fresh and ripe dates shall fall upon you. So eat and drink and cool your eyes; and if you see any person say to him: ‘Verily I have vowed a fast to the Most Compassionate Lord, and so I shall not speak to anyone today.’" — (Surah Maryam, ayat 24-26)

Iron deficiency and anemia are two common conditions that women can suffer from during as well as after birth. This can negatively affect the long-term health of both the mother and her child. It's a blessing from Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) that after Maryam رضی اللہ عنہ gave birth, he told her to shake the tree, and the dates fell down. It's through these gifts Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) reassured Maryam رضی اللہ عنہ and gave her the resolve to return to her people.

Today, many studies have been conducted on dried dates, especially around labor. Some reports show eating dates in the later stages of pregnancy can promote a healthy and natural childbirth. Moreover, dates are considered to be a superfood; they are dense in many nutrients, specifically iron, which is much needed after labor. Another study showed that pregnant women who ate 6 dates a day for 4 weeks before their due date had a shorter first stage of labor. Eating dates in late pregnancy has also been shown to lessen the need for oxytocin, the medication used to start or speed up labor. This is one of the many marvels mentioned in the Qur'an.

THE BABY IN THE CRADLE SPEAKS

As Maryam returned, the townsfolk watched with curiosity, horror, and disgust. As expected, a barrage of questions and criticisms ensued:
“Then she came to her people, carrying her baby. They said: 'O Mary! You have committed a monstrous thing. O sister of Aaron! Your father was not an evil man, nor was your mother an unchaste woman." — (Surah Maryam, ayat 27-28)

With the strength from Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) and his reassurance, Maryam pointed to the baby in the cradle. The people exclaimed:
"How can we speak to one who is in the cradle, a mere child?" — (Surah Maryam, ayah 29)

To the great surprise of the people, the baby began to speak:
"Verily I am Allah’s servant. He has granted me the Book and has made me a Prophet and has blessed me wherever I might be and has enjoined upon me Prayer and Zakah (purifying alms) as long as I live; and has made me dutiful to my mother. He has not made me oppressive, nor bereft of God’s blessings. Peace be upon me the day I was born and the day I will die, and the day I will be raised up alive." — (Surah Maryam, ayat 30-33)

Realizing that the baby was not ordinary, many of the townsfolk ceased their harassment of Maryam رضی اللہ عنہ. Some thought it was a strange trick, but at least she could stay in Nazareth without being harassed.

THE PROPHETHOOD OF ISA (عَلَيْهِ ٱلسَّلَامُ)

When Isa (عَلَيْهِ ٱلسَّلَامُ) was just a child, he found himself wandering into the temples to listen to sermons of the Rabbis amongst a crowd of adults. He would listen to them intently, question them, and express his opinion without fear or intimidation. This was, however, not welcomed by learned Rabbis who felt threatened by having their authority challenged by a child.

He was great at debating, and they often failed to respond to his questions, so instead, they tried to silence him. But, he would not shy away from expressing his views.

As Isa (عَلَيْهِ ٱلسَّلَامُ) grew older, the wisdom and the special abilities that Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) bestowed upon him became apparent to those around him. As was the mystery and miraculous nature surrounding his conception and birth, his entire life was filled with unexplainable miracles – this was a clear sign to the people of his prophethood. All the while, he called out to his people to worship Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ), the One true God:

“Surely Allah is my Lord and your Lord, so worship Him alone. This is the Straight Path.” — (Surah Maryam, ayah 36)

Now, into his adulthood, on the day of Sabbath, the Jewish priests maintained a holy day for complete rest. Although this day was chosen by Prophet Musa (عَلَيْهِ ٱلسَّلَامُ) to dedicate for Allah’s (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) worship, strange practices were maintained by the Jews. Followers could not light or extinguish a fire, women could not braid their hair, nor could they call a doctor to save a patient who was in critical condition. On this day, Isa (عَلَيْهِ ٱلسَّلَامُ), who was well aware of the apparently sacred practices of Sabbath, picked fruits to feed a hungry child and lit a fire to keep an old woman warm – practices that violated the law.

Isa (عَلَيْهِ ٱلسَّلَامُ) was observant of the monetization that occurred in the name of faith and worship. He observed how the priests earned a hefty living through the temple; he watched on as the temple had been transformed into a marketplace selling sheep and doves for sacrifice and was astonished at how the poor could not afford the rates.

Isa (عَلَيْهِ ٱلسَّلَامُ) failed to understand why offerings were burned in the temple when thousands of poor people were starving outside the temple walls. It was on this night that Prophets Zakariyah (عَلَيْهِ ٱلسَّلَامُ) and Yahya (عَلَيْهِ ٱلسَّلَامُ) were killed, and Isa (عَلَيْهِ ٱلسَّلَامُ) received the message from his Lord. In his first revelation, Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) commanded Isa (عَلَيْهِ ٱلسَّلَامُ) to begin preaching the truth to the Children of Israel who were clearly led astray.

THE MESSAGE OF ISA (عَلَيْهِ ٱلسَّلَامُ)

Isa (عَلَيْهِ ٱلسَّلَامُ) openly denounced the materialistic life of luxury and invited his people to lead a humble life. He appealed to his people to refrain from hoarding wealth and to spend their time in the worship of Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) so that they may have a prosperous afterlife. He preached forgiveness and mercy to each other and the creatures that roam the earth. It was very clear from all accounts that Isa (عَلَيْهِ ٱلسَّلَامُ) was not seeking worldly power, either as a ruler or through financial means. His mission was to establish the worship of one creator in the manner the creator commanded.

He denounced the practices held by the Pharisees, one of the more prominent Jewish sects. It was in conflict with the Jews' superficial interpretation of the Torah. Isa (عَلَيْهِ ٱلسَّلَامُ) informed them that he did not wish to denounce the Torah but aimed to help people understand the true essence of its words. He knew they were hypocrites; they said one thing but did another. They taught about God, but they did not do things for the love of God.

He further clarified some of the teachings of the Ten Commandments. For example, the Sixth Commandment prohibits adultery. However, this does not mean just the physical contact between a man and a woman, but all unlawful acts that might lead one to adultery. This begins with the gaze. The eye commits adultery when it looks at anything with passion, and therefore, lowering one's gaze would protect one from any unlawful desire.

These teachings further threatened the position and authority of the high priests. They thus began their schemes to take down Prophet Isa (عَلَيْهِ ٱلسَّلَامُ).

THE ATTEMPT TO DISCREDIT ISA (عَلَيْهِ ٱلسَّلَامُ)

One day, the priests dragged a known adulteress to Isa (عَلَيْهِ ٱلسَّلَامُ) and asked him:
“Does not the [Mosaic] law stipulate the stoning of the adulteress?”

When Isa (عَلَيْهِ ٱلسَّلَامُ) replied 'yes,' they declared:
“This woman is an adulteress.”

Isa (عَلَيْهِ ٱلسَّلَامُ) understood their plot. He knew that if he approved the application of the Mosaic law, he would contradict his teachings of forgiveness and mercy. He also knew that the priests had more sins to their names than the woman standing before him.

So, he announced to the men:
“Whoever among you is sinless can stone her.”

This brought a new law pertaining to adultery: only the sinless can judge sin; after all, none could judge a sinner but the Almighty, All-Knowing.

As Isa (عَلَيْهِ ٱلسَّلَامُ) left the temple, the woman followed him. She knelt before him, washed his feet with perfume and her tears, and dried them with her hair.

Asking her to rise, Isa (عَلَيْهِ ٱلسَّلَامُ) then said:
"O Lord, forgive her sins."

Through this gesture, Isa (عَلَيْهِ ٱلسَّلَامُ) showed the high priests that those in the path of Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) are not executioners but those who show mercy.

ISA'S (عَلَيْهِ ٱلسَّلَامُ) GIFT OF MIRACLES

Some Qur'anic commentators believe, with Allah’s (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) help and permission, Isa (عَلَيْهِ ٱلسَّلَامُ) brought the dead to life. A total of four people were brought to life: a friend of Isa (عَلَيْهِ ٱلسَّلَامُ) named Al-Azam, an older woman’s son, a woman’s only daughter, and a man by the name of Sam Ibn Noah.

It is revealed that when the Prophet Isa (عَلَيْهِ ٱلسَّلَامُ) brought back the first three, who had died during the lifetime of Prophet Isa (عَلَيْهِ ٱلسَّلَامُ), the disbelievers charged that Isa (عَلَيْهِ ٱلسَّلَامُ) only brought back people who died recently and argued that perhaps these people did not die at all but had simply fainted. The disbelievers then issued Isa (عَلَيْهِ ٱلسَّلَامُ) a challenge to bring back the man named Sam Ibn Noah to life, who had died before the lifetime of Isa (عَلَيْهِ ٱلسَّلَامُ).

Isa (عَلَيْهِ ٱلسَّلَامُ) did not shy away from the challenge as he was aware that Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) was by his side, so he asked the contenders to point him to the deceased’s grave. Isa (عَلَيْهِ ٱلسَّلَامُ) invoked Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) to bring the man back to life. Before long, a grey-haired Sam Ibn Noah climbed out of his grave.

Isa (عَلَيْهِ ٱلسَّلَامُ) asked Sam:
“How did you get gray hair, when there was no aging in your time?”

The man answered:
“O Spirit of Allah, I thought that the Day of Resurrection had come; from the fear of that day, my hair turned gray.”

MIRACLES OF ISA (عَلَيْهِ ٱلسَّلَامُ)

With Allah's (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) authorization, Prophet Isa (عَلَيْهِ ٱلسَّلَامُ) performed several miracles:
1. Talking in his infancy.
2. Breathing life into a clay bird, making it come alive.
3. Curing the blind and a person with leprosy.
4. Giving life to the dead.
5. He had knowledge that was hidden from others. He could answer every question anyone asked to the extent that he knew what food people had eaten and what they had stored in their homes.
6. Table of food from heaven.

These miracles are mentioned in the following verses of the Qur'an:

"Allah will say: ‘Jesus, son of Mary, recall My favour upon you and your mother, and when I strengthened you with the spirit of holiness so that you talked to men in the cradle and also when you became of age; and when I taught you the Book and Wisdom, and the Torah and the Gospel; and when, by My leave, you fashioned from clay the likeness of a bird and you breathed into it, and by My leave it became a bird; you healed, by My leave, the blind from birth and the leprous; and when, by My leave, you caused the dead to come to life. And recall when I restrained the Israelites from you when you came to them with clear proofs whereupon those of them who disbelieved said: “This is nothing but clear magic.” And recall when I revealed to the disciples to believe in Me and in My Messenger, they said: “We do believe, and we bear witness that we indeed are the ones who submit to Allah.”'" — (Surah Maidah, ayat 110-111; miracles are also repeated in Surah Al-Imran, ayat 49-51)

This verse importantly repeats the phrase, "by My leave," meaning these miracles are performed with Allah's (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) blessing. Thus, it is not really Isa (عَلَيْهِ ٱلسَّلَامُ) who independently acted and raised the dead or gave life to inanimate objects, but rather it is through the power and permission of Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) that enabled him to do so.

"I will also inform you of what things you eat and what you treasure up in your houses. Surely this is a sign for you if you are true believers." — (Surah Al-Imran, ayah 49)

The sixth and final miracle we are told of in the Qur'an is famously known in the Christian faith as 'The Last Supper.' In Islamic tradition, this event is referenced as "Table Spread" or "The Feast." This is the title of the fifth surah of the Qur'an (Surah Maidah).

A FEAST FOR THE FOLLOWERS

After thirty days of fasting, commanded by Isa (عَلَيْهِ ٱلسَّلَامُ) in service of Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ), the believers requested Isa (عَلَيْهِ ٱلسَّلَامُ) to provide food from the heavens to break their fast:
“O Isa, son of Maryam! Would your Lord be willing to send down to us a table spread with food from heaven?” — (Surah Ma’idah, ayah 112)

Commentators of this verse suggest that the apostles of Isa (عَلَيْهِ ٱلسَّلَامُ) were not well-intentioned when they asked whether it would be possible for Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) to provide them food from heaven. Their question was seen as a sign of disrespect, challenging Allah's ability and asking the Prophet for yet another miracle because they lacked faith.

This is viewed in the context of the verses prior, which highlighted all the various signs and miracles of Isa (عَلَيْهِ ٱلسَّلَامُ). This ingratitude prompted Isa (عَلَيْهِ ٱلسَّلَامُ) to rebuke them, saying:
"Fear Allah if you are truly believers." — (Surah Ma'idah, ayah 112)

They pleaded:
"We wish to eat from it and let our hearts be reassured and know that you have been truthful to us and be among its witnesses." — (Surah Ma’idah, ayah 113)

So Prophet Isa (عَلَيْهِ ٱلسَّلَامُ) called:
"O Allah, our Lord! Send us from heaven a table spread with food as a feast for us — the first and last of us — and as a sign from You. Provide for us! You are indeed the Best Provider." — (Surah Ma’idah, ayah 114)

Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) answered:
"I shall indeed send it down to you; then, I shall afflict whoever among you who disbelieves with a chastisement wherewith I will afflict none in the worlds." — (Surah Ma’idah, ayah 115)

This came as a warning: the better the blessing, the worse the curse of ingratitude. When Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) bestows His gifts on a person, it is a test to see whether we will be grateful and see His signs. This was the test of Al-Khidr from the story of Musa (عَلَيْهِ ٱلسَّلَامُ).

And so, by the command of Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ), the followers of Isa (عَلَيْهِ ٱلسَّلَامُ) were treated with an amazing feast with foods from jannah. It is related that thousands ate from the food sent down from heaven, and yet they never exhausted it.

THE CRUCIFIXION OF ISA (عَلَيْهِ ٱلسَّلَامُ)

Whenever Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) sent His messengers to this world, the majority often met them with disbelief and rejection. These prophets faced attempts to silence their sincere calls through intimidation and bullying tactics. However, when these efforts inevitably failed, they resorted to violence to put an end to their message. This case with Prophet Isa (عَلَيْهِ ٱلسَّلَامُ) was no different.

As the religion of Isa (عَلَيْهِ ٱلسَّلَامُ) began to attract more followers, the high priests grew increasingly fearful of their waning influence. They saw the potential threat to their enterprise. As a result, they conspired against him, accusing him of sorcery, violating the Mosaic law, and being in allegiance with the devil. When all these attempts to slander and defame Isa (عَلَيْهِ ٱلسَّلَامُ) failed, they escalated their efforts. They held secret meetings to plot his demise. Here, they came up with a plan; since they lacked the authority to impose a death sentence, the priests decided to convince the Roman Governor that Isa (عَلَيْهِ ٱلسَّلَامُ) posed a threat to the security of the Roman Empire. Alarmed by these claims and unwilling to take any risk, the Governor ordered the arrest of Prophet Isa.

It is believed one of Isa's (عَلَيْهِ ٱلسَّلَامُ) disciples named Judas was at the meeting when they plotted to kill him.

He spoke up:
"What will you give me if I deliver him to you?"

The council proposed some silver shekels, and they negotiated back and forth until agreeing upon thirty shekels.

Note, however, The Qur'an hasn't explored the narrative of Judas, and only Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) knows what really transpired.

According to the Bible, the army came to arrest Isa (عَلَيْهِ ٱلسَّلَامُ). They flogged him, tortured him, and spat on him. They put a crown of thorns on his head to mock him and above his cross it read:
"JESUS OF NAZARETH, THE KING OF THE JEWS."

The chiefs and elders then joked:
"He saved others," they said, "but he can't save himself! He's the king of Israel! Let him come down now from the cross, and we will believe in him."

He slowly died on the cross, was resurrected 3 days later, and ascended to heaven.

However, the Qur'an presents a different account. Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) says in the Quran:
"And [for] their saying, “Indeed, we have killed the Messiah, Jesus, the son of Mary, the messenger of Allah.” And they did not kill him, nor did they crucify him; but [another] was made to resemble him to them. And indeed, those who differ over it are in doubt about it. They have no knowledge of it except the following of assumption. And they did not kill him, for certain. Rather, Allah raised him to Himself. And ever is Allah Exalted in Might and Wise." — (Surah An-Nisa, ayat 157-158)

Furthermore, Surah Al-Imran, ayah 55, states:
"(And it was part of His scheme) when Allah said: ‘O Jesus! I will recall you and raise you up to Me and will purify you (of the company) of those who disbelieve, and will set your followers above the unbelievers till the Day of Resurrection. Then to Me you shall return, and I will judge between you regarding what you differed.’"

The Islamic belief holds that Isa (عَلَيْهِ ٱلسَّلَامُ) was protected and saved by Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ). Some Qur'an exegetes believe that it was the betrayer of Isa (عَلَيْهِ ٱلسَّلَامُ) who was made to resemble him and was crucified in his place, while Isa (عَلَيْهِ ٱلسَّلَامُ) was raised to heaven.

Muslims believe in the second coming of Isa (عَلَيْهِ ٱلسَّلَامُ). Abu Huraira reported that the Prophet Muhammad (ﷺ) said:
"By Him in Whose hand is my life, the son of Mary will soon descend among you as a just judge. He will break crosses, kill swine, and abolish Jizya, and wealth will pour forth to such an extent that no one will accept it." — (Sahih Muslim 155a)

THE WORSHIPPERS OF ISA (عَلَيْهِ ٱلسَّلَامُ)

From the Qur'anic perspective, the key mistake of the Jewish faith was in the denial of certain prophets like Isa (عَلَيْهِ ٱلسَّلَامُ), who were sent to guide them. Conversely, the error in Christianity was in its exaggeration of Isa's (عَلَيْهِ ٱلسَّلَامُ) status, ascribing divinity and making partners with God. Isa (عَلَيْهِ ٱلسَّلَامُ) while he was alive never claimed himself God. Nor did any of his disciples think of him as one.

And so, over time, deviations from the original scripture which were sent by Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) became more pronounced. It tarnished the credibility of these scriptures as the manner of worship and law cannot be determined by man. This prompted Allah (سُبْحَٰنَهُۥ وَتَعَٰلَىٰ) to once more send down His final revelation through Prophet Muhammad (ﷺ) to reconcile these differences and to preserve His word.

The Qur'an advises:
"People of the Book! Do not exceed the limits in your religion, and attribute to Allah nothing except the truth. The Messiah, Jesus, son of Mary, was only a Messenger of Allah, and His command that He conveyed unto Mary, and a spirit from Him (which led to Mary’s conception). So believe in Allah and in His Messengers, and do not say: (Allah is a) trinity. Give up this assertion; it would be better for you. Allah is indeed just one God. Far be it from His glory that He should have a son. To Him belongs all that is in the heavens and in the earth. Allah is sufficient for a guardian." — (Surah An-Nisa, ayah 171)

They claim:
“The Most Compassionate Lord has taken a son to Himself.” Surely you have made a monstrous statement. It is such a monstrosity that heavens might well-nigh burst forth at it, the earth might be cleaved, and the mountains fall at their ascribing a son to the Most Compassionate Lord. It does not befit the Most Compassionate Lord that He should take a son. There is no one in the heavens and the earth but he shall come to the Most Compassionate Lord as His servant. Verily He encompasses them and has counted them all. On the Day of Resurrection each one of these will come to Him singly. Indeed, the Most Compassionate Lord will soon create enduring love for those who believe and do righteous works." — (Surah Maryam, ayat 88-95)

It further states in another surah:
"Indeed those who said: ‘Christ, the son of Mary, he is indeed God’, disbelieved. Say (O Muhammad!): ‘Who could have overruled Allah had He so willed to destroy Christ, the son of Mary, and his mother, and all those who are on earth?’ For to Allah belongs the dominion of the heavens and the earth and all that is between them; He creates what He wills. Allah is All-Powerful. The Jews and the Christians say: ‘We are Allah’s children and His beloved ones.’ Ask them: ‘Why, then, does He chastise you for your sins?’ You are the same as other men He has created. He forgives whom He wills and chastises whom He wills. And to Allah belongs the dominion of the heavens and the earth, and all that is between them. To Him is the eventual return. People of the Book! After a long interlude during which no Messengers have appeared there has come to you Our Messenger to elucidate the teaching of the true faith lest you say: ‘No bearer of glad tidings and no warner has come to us.’ For now there indeed has come to you a bearer of glad tidings and a warner, Allah is All-Powerful." — (Surah Maidah, ayat 17-19)
STORY
    ],
    'idris' => [
        'id'      => 'idris',
        'number'  => 16,
        'name'    => 'Prophet Idris (AS)',
        'arabic'  => 'إِدْرِيس',
        'era'     => 'First to Write with a Pen, Raised to a Lofty Station',
        'region'  => 'Babylon (Iraq) → Egypt → Fourth Heaven',
        'surah'   => 'Surah Maryam (19:56-57), Al-Anbiya (21:85)',
    ],

    'saleh' => [
        'id'      => 'saleh',
        'number'  => 17,
        'name'    => 'Prophet Saleh (AS)',
        'arabic'  => 'صَالِح',
        'era'     => 'The Prophet of Thamud & The Miraculous She-Camel',
        'region'  => 'Al-Hijr / Madain Saleh (Northwestern Arabia)',
        'surah'   => 'Surah Hud (11:61-68), Al-A\'raf (7:73-79), Ash-Shu\'ara (26:141-159)',
    ],

    'ishaq' => [
        'id'      => 'ishaq',
        'number'  => 18,
        'name'    => 'Prophet Ishaq (AS)',
        'arabic'  => 'إِسْحَاق',
        'era'     => 'The Miraculous Glad Tidings & Father of the Bani Israel Lineage',
        'region'  => 'Canaan (Hebron, Palestine)',
        'surah'   => 'Surah Hud (11:69-73), As-Saffat (37:112-113), Maryam (19:49)',
    ],

    'yaqub' => [
        'id'      => 'yaqub',
        'number'  => 19,
        'name'    => 'Prophet Yaqub (AS)',
        'arabic'  => 'يَعْقُوب',
        'era'     => 'Israel, Father of the Twelve Tribes & Exemplar of Beautiful Patience',
        'region'  => 'Canaan (Palestine) → Egypt',
        'surah'   => 'Surah Yusuf (12:4-100), Al-Baqarah (2:132-136)',
    ],

    'shuaib' => [
        'id'      => 'shuaib',
        'number'  => 20,
        'name'    => 'Prophet Shu\'aib (AS)',
        'arabic'  => 'شُعَيْب',
        'era'     => 'The Eloquent Preacher to the People of Madyan & Al-Aykah',
        'region'  => 'Madyan (Northwestern Arabia / Greater Syria)',
        'surah'   => 'Surah Al-A\'raf (7:85-93), Hud (11:84-95), Ash-Shu\'ara (26:176-191)',
    ],

    'harun' => [
        'id'      => 'harun',
        'number'  => 21,
        'name'    => 'Prophet Harun (AS)',
        'arabic'  => 'هَارُون',
        'era'     => 'The Eloquent Minister, Partner in Prophethood & Defender of Tawheed',
        'region'  => 'Egypt → Sinai Peninsula → The Wilderness',
        'surah'   => 'Surah Taha (20:25-94), Al-A\'raf (7:121-154), Maryam (19:53)',
    ],

    'dhulkifl' => [
        'id'      => 'dhulkifl',
        'number'  => 22,
        'name'    => 'Prophet Dhul-Kifl (AS)',
        'arabic'  => 'ذُو الْكِفْل',
        'era'     => 'The Possessor of Double Requital & Exemplar of Steadfast Patience',
        'region'  => 'Greater Syria / Iraq',
        'surah'   => 'Surah Al-Anbiya (21:85-86), Sad (38:48-52)',
    ],

    'ilyas' => [
        'id'      => 'ilyas',
        'number'  => 23,
        'name'    => 'Prophet Ilyas (AS)',
        'arabic'  => 'إِلْيَاس',
        'era'     => 'The Preacher Against Baal-Worship & Caller to Tawheed',
        'region'  => 'Baalbek (Lebanon / Northern Israel)',
        'surah'   => 'Surah Al-An\'am (6:85), As-Saffat (37:123-132)',
    ],

    'alyasa' => [
        'id'      => 'alyasa',
        'number'  => 24,
        'name'    => 'Prophet Al-Yasa (AS)',
        'arabic'  => 'الْيَسَع',
        'era'     => 'The Successor to Elijah & Guide of the Children of Israel',
        'region'  => 'Greater Syria / Northern Israel',
        'surah'   => 'Surah Al-An\'am (6:86), Sad (38:48)',
    ],
];

// Active selected prophet
$selectedId = isset($_GET['prophet']) && isset($prophets[$_GET['prophet']]) ? $_GET['prophet'] : null;
$activeProphet = $selectedId ? $prophets[$selectedId] : null;

// Clean paragraph & section formatter
function renderHardcodedStory($text) {
    $lines = explode("\n", trim($text));
    $html = '';
    foreach ($lines as $rawLine) {
        $line = trim($rawLine);
        if ($line === '') continue;

        if ($line === strtoupper($line) && strlen($line) > 4) {
            $html .= '<h3 class="text-lg sm:text-xl font-bold font-serif text-qolbPrimary mt-7 mb-3 pt-4 border-t border-qolbPrimary/10">'
                   . htmlspecialchars($line)
                   . '</h3>';
        } else {
            $html .= '<p class="text-sm sm:text-base text-qolbDark/90 leading-relaxed mb-4">'
                   . htmlspecialchars($line)
                   . '</p>';
        }
    }
    return $html;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quran Stories & Knowledge Map — NOOR QURAN WORLD</title>
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        qolbBg: '#F4F7F5',
                        qolbCard: '#FFFFFF',
                        qolbPrimary: '#2F5E4E',
                        qolbGreenLight: '#E6F0EC',
                        qolbGreenHover: '#D2E4DC',
                        qolbMuted: '#718077',
                        qolbDark: '#192E26',
                        goldAccent: '#C59B27'
                    },
                    fontFamily: {
                        arabic: ['Amiri', 'serif'],
                        sans: ['Plus Jakarta Sans', 'sans-serif']
                    }
                }
            }
        }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Amiri:wght@400;700&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        .font-arabic { font-family: 'Amiri', serif; }
        html { scroll-behavior: smooth; }
        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: #F4F7F5; }
        ::-webkit-scrollbar-thumb { background: #2F5E4E; border-radius: 3px; }


        
    </style>
</head>
<body class="bg-qolbBg text-qolbDark font-sans min-h-screen flex flex-col selection:bg-qolbPrimary selection:text-white">

    <!-- MEMBER NAVIGATION HEADER (Identical to home.php) -->
    <header class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full h-24 flex items-center justify-between sticky top-0 z-50 bg-qolbBg/90 backdrop-blur-md">
        
        <!-- Logo -->
        <a href="home.php?view=dashboard" class="flex items-center space-x-3">
            <div class="w-10 h-10 rounded-xl bg-qolbPrimary flex items-center justify-center shadow-md">
                <span class="text-white font-arabic text-xl font-bold">ن</span>
            </div>
            <div>
                <span class="text-lg font-bold tracking-tight text-qolbPrimary block">NOOR QURAN WORLD</span>
                <span class="text-[9px] uppercase tracking-widest text-goldAccent font-bold">Member Command Center</span>
            </div>
        </a>

        <!-- Member Navigation Tabs -->
        <nav class="hidden xl:flex items-center space-x-1 bg-qolbGreenLight p-1.5 rounded-full border border-qolbPrimary/10 text-xs font-semibold">
            <a href="home.php?view=dashboard" class="px-3 py-2 rounded-full transition-all text-qolbMuted hover:text-qolbPrimary">Dashboard</a>
            <a href="surah.php" class="px-3 py-2 rounded-full transition-all text-qolbMuted hover:text-qolbPrimary">Surah</a>
            <a href="juz.php" class="px-3 py-2 rounded-full transition-all text-qolbMuted hover:text-qolbPrimary">Juz</a>
            <a href="rqla.php" class="px-3 py-2 rounded-full transition-all text-qolbMuted hover:text-qolbPrimary">Read & Listen</a>
            <a href="qskm.php" class="px-3 py-2 rounded-full transition-all bg-qolbPrimary text-white shadow">Stories</a>
            <a href="home.php?view=tafsir" class="px-3 py-2 rounded-full transition-all text-qolbMuted hover:text-qolbPrimary">Tafsir & Topics</a>
            <a href="home.php?view=arabic" class="px-3 py-2 rounded-full transition-all text-qolbMuted hover:text-qolbPrimary">Arabic</a>
            <a href="home.php?view=kids" class="px-3 py-2 rounded-full transition-all text-teal-600 font-bold hover:underline">Kids ✨</a>
        </nav>

        <!-- User Badge & Logout -->
        <div class="flex items-center space-x-3">
            <div class="text-right hidden sm:block">
                <span class="block text-xs font-bold text-qolbPrimary">Salam, <?= htmlspecialchars($user['name'] ?? $user['full_name'] ?? $user['username'] ?? 'Learner', ENT_QUOTES, 'UTF-8') ?></span>
                <span class="block text-[10px] text-qolbMuted">Active Learner</span>
            </div>
            <a href="home.php?logout=1" class="px-5 py-2.5 rounded-full bg-red-100 text-red-600 text-xs font-bold hover:bg-red-200 transition-all shadow-sm">
                Logout
            </a>
        </div>
    </header>

    <!-- MAIN CONTENT -->
    <main class="flex-grow max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full py-8">

        <!-- HERO BANNER -->
        <div class="bg-qolbGreenLight/60 border border-qolbPrimary/10 rounded-[2.5rem] p-8 sm:p-10 mb-8 shadow-sm flex flex-col lg:flex-row justify-between items-start lg:items-center gap-6">
            <div>
                <span class="px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider bg-qolbPrimary/10 text-qolbPrimary inline-block mb-3">
                    📜 QSKM — Prophetic Chronicles & Knowledge Map
                </span>
                <h1 class="text-3xl sm:text-4xl font-bold font-serif text-qolbPrimary">
                    Quran Stories & Knowledge Map
                </h1>
                <p class="text-xs sm:text-sm text-qolbMuted mt-1 max-w-2xl">
                    Click on any Prophet below to read their complete Quranic story, key verses, and geographic knowledge map.
                </p>
            </div>

            <!-- Live Prophet Filter Input -->
            <div class="w-full lg:w-80">
                <input 
                    type="text" 
                    id="prophetSearch" 
                    placeholder="🔍 Search Prophet or Region..." 
                    class="w-full px-5 py-3.5 rounded-2xl bg-white border border-qolbPrimary/20 text-xs font-medium text-qolbDark focus:outline-none focus:border-qolbPrimary shadow-sm"
                >
            </div>
        </div>

        <!-- ALL PROPHETS DIRECTORY CARDS -->
        <div class="mb-10">
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-lg font-extrabold font-serif text-qolbPrimary">
                    Select a Prophet to Read Full Story (<?= count($prophets) ?> Prophets)
                </h2>
                <?php if ($activeProphet): ?>
                    <a href="qskm.php" class="text-xs font-bold text-goldAccent hover:underline">
                        ← View Knowledge Map Overview
                    </a>
                <?php endif; ?>
            </div>

            <div id="prophetGrid" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">
                <?php foreach ($prophets as $p): 
                    $isSelected = ($activeProphet && $activeProphet['id'] === $p['id']);
                ?>
                    <a href="qskm.php?prophet=<?= urlencode($p['id']) ?>#story-reader" 
                       data-search="<?= strtolower($p['name'] . ' ' . $p['region'] . ' ' . $p['surah']) ?>"
                       class="prophet-card p-5 rounded-3xl border transition-all flex flex-col justify-between group <?= $isSelected ? 'bg-qolbPrimary text-white border-qolbPrimary shadow-lg scale-[1.02]' : 'bg-qolbCard text-qolbDark border-qolbPrimary/10 hover:border-qolbPrimary shadow-sm' ?>">
                        
                        <div class="flex items-center justify-between mb-3">
                            <span class="w-7 h-7 rounded-full flex items-center justify-center text-xs font-extrabold <?= $isSelected ? 'bg-white/20 text-white' : 'bg-qolbGreenLight text-qolbPrimary' ?>">
                                <?= $p['number'] ?>
                            </span>
                            <span class="font-arabic text-xl font-bold <?= $isSelected ? 'text-amber-300' : 'text-goldAccent' ?>">
                                <?= htmlspecialchars($p['arabic']) ?>
                            </span>
                        </div>

                        <div>
                            <h3 class="font-bold text-sm <?= $isSelected ? 'text-white' : 'text-qolbDark group-hover:text-qolbPrimary' ?>">
                                <?= htmlspecialchars($p['name']) ?>
                            </h3>
                            <p class="text-[11px] mt-1 line-clamp-1 <?= $isSelected ? 'text-white/80' : 'text-qolbMuted' ?>">
                                📍 <?= htmlspecialchars($p['region']) ?>
                            </p>
                        </div>

                        <div class="mt-3 pt-2.5 border-t <?= $isSelected ? 'border-white/15' : 'border-qolbPrimary/10' ?> flex items-center justify-between text-[10px] font-bold">
                            <span class="<?= $isSelected ? 'text-amber-300' : 'text-qolbPrimary' ?>">
                                <?= $isSelected ? 'Currently Reading' : 'Read Full Story' ?>
                            </span>
                            <span>→</span>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>

        <?php if ($activeProphet): ?>
            <!-- ========================================================= -->
            <!-- FULL PROPHET STORY READER                                 -->
            <!-- ========================================================= -->
            <div id="story-reader" class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                
                <!-- Left Sticky Knowledge Map & Quick Switcher -->
                <aside class="lg:col-span-4 space-y-6 lg:sticky lg:top-28">
                    <div class="bg-qolbCard p-6 rounded-3xl border-2 border-goldAccent/40 shadow-md">
                        <span class="text-[10px] font-extrabold uppercase tracking-widest text-goldAccent block mb-1">
                            🗺️ Prophetic Knowledge Card
                        </span>
                        <div class="flex items-center justify-between border-b border-qolbPrimary/10 pb-4 mb-4">
                            <h2 class="text-2xl font-bold font-serif text-qolbPrimary">
                                <?= htmlspecialchars($activeProphet['name']) ?>
                            </h2>
                            <span class="font-arabic text-3xl text-qolbPrimary font-bold">
                                <?= htmlspecialchars($activeProphet['arabic']) ?>
                            </span>
                        </div>

                        <div class="space-y-3 text-xs">
                            <div class="bg-qolbBg p-3.5 rounded-2xl">
                                <span class="text-[10px] font-bold uppercase text-qolbMuted block">Geographic Region</span>
                                <span class="font-bold text-qolbDark">📍 <?= htmlspecialchars($activeProphet['region']) ?></span>
                            </div>
                            <div class="bg-qolbBg p-3.5 rounded-2xl">
                                <span class="text-[10px] font-bold uppercase text-qolbMuted block">Historical Era / Title</span>
                                <span class="font-bold text-qolbDark">⏳ <?= htmlspecialchars($activeProphet['era']) ?></span>
                            </div>
                            <div class="bg-qolbBg p-3.5 rounded-2xl">
                                <span class="text-[10px] font-bold uppercase text-qolbMuted block">Primary Quranic Surahs</span>
                                <span class="font-bold text-qolbPrimary">📖 <?= htmlspecialchars($activeProphet['surah']) ?></span>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Jump List -->
                    <div class="bg-qolbCard p-5 rounded-3xl border border-qolbPrimary/10 shadow-sm hidden lg:block">
                        <h3 class="text-xs font-extrabold uppercase tracking-wider text-qolbMuted mb-3 px-2">All Prophets Index</h3>
                        <div class="max-h-72 overflow-y-auto space-y-1 pr-1">
                            <?php foreach ($prophets as $navP): ?>
                                <a href="qskm.php?prophet=<?= urlencode($navP['id']) ?>#story-reader" 
                                   class="flex items-center justify-between px-3 py-2 rounded-xl text-xs font-semibold transition-all <?= $navP['id'] === $activeProphet['id'] ? 'bg-qolbPrimary text-white' : 'text-qolbDark hover:bg-qolbGreenLight' ?>">
                                    <span><?= $navP['number'] ?>. <?= htmlspecialchars($navP['name']) ?></span>
                                    <span class="font-arabic text-sm"><?= htmlspecialchars($navP['arabic']) ?></span>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </aside>

                <!-- Right Main Full Story Reader -->
                <article class="lg:col-span-8 bg-qolbCard p-6 sm:p-10 rounded-[2.5rem] border border-qolbPrimary/10 shadow-sm">
                    <div class="flex flex-wrap items-center justify-between gap-4 pb-6 mb-6 border-b border-qolbPrimary/10">
                        <div>
                            <span class="px-3 py-1 rounded-full bg-qolbGreenLight text-qolbPrimary text-[11px] font-bold">
                                Complete Quranic Narrative
                            </span>
                            <h2 class="text-2xl sm:text-4xl font-bold font-serif text-qolbPrimary mt-2">
                                The Story of <?= htmlspecialchars($activeProphet['name']) ?>
                            </h2>
                        </div>
                        <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})" class="px-4 py-2 rounded-xl bg-qolbBg text-qolbPrimary text-xs font-bold hover:bg-qolbGreenLight transition-all">
                            ↑ All Prophets
                        </button>
                    </div>

                    <!-- Featured Quranic Ayah / Dua Box -->
                    <div class="mb-8 p-6 rounded-3xl bg-qolbGreenLight/70 border border-qolbPrimary/15">
                        <p class="text-right font-arabic text-2xl sm:text-3xl leading-loose text-qolbDark mb-3" dir="rtl">
                            <?= htmlspecialchars($activeProphet['arabic_verse']) ?>
                        </p>
                        <blockquote class="pl-4 border-l-4 border-goldAccent text-xs sm:text-sm italic text-qolbDark/90">
                            <?= htmlspecialchars($activeProphet['verse_translation']) ?>
                        </blockquote>
                    </div>

                    <!-- Rendered Story Chapters -->
                    <div class="prose max-w-none">
                        <label for="story-lang-select">Translate Story:</label>
<select id="story-lang-select" data-prophet-id="<?= htmlspecialchars($activeProphet['id'] ?? 'story', ENT_QUOTES, 'UTF-8') ?>">
    <option value="en">English</option>
<option value="te">Telugu</option>
<option value="hi">Hindi</option>
<option value="ur">Urdu</option>
<option value="ar">Arabic</option>
<option value="fr">French</option>
<option value="es">Spanish</option>
</select>
<span id="story-translate-status"></span>

<div id="story-content">
    <?= renderHardcodedStory($activeProphet['story']) ?>
</div>
                    </div>

                    <!-- Next / Previous Prophet Navigation Footer -->
                    <?php
                        $keys = array_keys($prophets);
                        $currentIndex = array_search($activeProphet['id'], $keys);
                        $prevKey = $currentIndex > 0 ? $keys[$currentIndex - 1] : null;
                        $nextKey = $currentIndex < count($keys) - 1 ? $keys[$currentIndex + 1] : null;
                    ?>
                    <div class="mt-10 pt-6 border-t border-qolbPrimary/10 flex flex-col sm:flex-row justify-between gap-4">
                        <?php if ($prevKey): ?>
                            <a href="qskm.php?prophet=<?= urlencode($prevKey) ?>#story-reader" class="px-5 py-3.5 rounded-2xl bg-qolbBg hover:bg-qolbGreenLight text-qolbPrimary text-xs font-bold transition-all">
                                ← Previous: <?= htmlspecialchars($prophets[$prevKey]['name']) ?>
                            </a>
                        <?php else: ?>
                            <div></div>
                        <?php endif; ?>

                        <?php if ($nextKey): ?>
                            <a href="qskm.php?prophet=<?= urlencode($nextKey) ?>#story-reader" class="px-5 py-3.5 rounded-2xl bg-qolbPrimary hover:bg-qolbPrimary/90 text-white text-xs font-bold shadow transition-all text-center">
                                Next Story: <?= htmlspecialchars($prophets[$nextKey]['name']) ?> →
                            </a>
                        <?php endif; ?>
                    </div>
                </article>
            </div>

        <?php else: ?>
            <!-- ========================================================= -->
            <!-- KNOWLEDGE MAP OVERVIEW (When no prophet is clicked yet)   -->
            <!-- ========================================================= -->
            <div class="bg-qolbCard p-8 sm:p-10 rounded-[2.5rem] border border-qolbPrimary/10 shadow-sm">
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-6">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-wider text-goldAccent">🗺️ Geographic & Chronological Atlas</span>
                        <h2 class="text-2xl font-bold font-serif text-qolbPrimary mt-1">Prophetic Knowledge Map</h2>
                    </div>
                    <a href="qskm.php?prophet=adam#story-reader" class="px-6 py-3 rounded-2xl bg-qolbPrimary text-white text-xs font-extrabold hover:bg-qolbPrimary/90 transition-all shadow">
                        Start Reading from Prophet Adam (AS) →
                    </a>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="border-b border-qolbPrimary/15 text-[11px] uppercase tracking-wider text-qolbMuted">
                                <th class="py-3 px-4">#</th>
                                <th class="py-3 px-4">Prophet</th>
                                <th class="py-3 px-4">Region / Location</th>
                                <th class="py-3 px-4">Key Surahs</th>
                                <th class="py-3 px-4 text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-qolbPrimary/10 text-xs">
                            <?php foreach ($prophets as $p): ?>
                                <tr class="hover:bg-qolbBg/80 transition-colors">
                                    <td class="py-4 px-4 font-bold text-qolbMuted"><?= $p['number'] ?></td>
                                    <td class="py-4 px-4">
                                        <span class="font-bold text-qolbDark block"><?= htmlspecialchars($p['name']) ?></span>
                                        <span class="font-arabic text-base text-goldAccent"><?= htmlspecialchars($p['arabic']) ?></span>
                                    </td>
                                    <td class="py-4 px-4 text-qolbDark font-medium">📍 <?= htmlspecialchars($p['region']) ?></td>
                                    <td class="py-4 px-4 text-qolbMuted"><?= htmlspecialchars($p['surah']) ?></td>
                                    <td class="py-4 px-4 text-right">
                                        <a href="qskm.php?prophet=<?= urlencode($p['id']) ?>#story-reader" class="inline-block px-4 py-2 rounded-xl bg-qolbGreenLight text-qolbPrimary font-bold hover:bg-qolbPrimary hover:text-white transition-all">
                                            Read Story →
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        <?php endif; ?>

    </main>

    <!-- FOOTER (Identical to home.php) -->
    <footer class="bg-qolbCard border-t border-qolbPrimary/10 py-8 text-center text-xs text-qolbMuted mt-auto">
        <p class="font-bold text-qolbPrimary mb-1">NOOR QURAN WORLD — MEMBER COMMAND CENTER</p>
        <p>Logged in as <?= htmlspecialchars($user['email']) ?></p>
    </footer>

    <!-- Instant Search Filter Script -->
    <script>
        document.getElementById('prophetSearch').addEventListener('input', function(e) {
            const term = e.target.value.toLowerCase().trim();
            document.querySelectorAll('.prophet-card').forEach(card => {
                const text = card.getAttribute('data-search');
                card.style.display = text.includes(term) ? 'flex' : 'none';
            });
        });
    </script>
<script>
(function () {
  const langSelect = document.getElementById('story-lang-select');
  const storyContent = document.getElementById('story-content');
  const statusEl = document.getElementById('story-translate-status') || document.getElementById('translate-status');

  if (!langSelect || !storyContent) return;

  // Save original English HTML once per load
  const originalEnglishHtml = storyContent.innerHTML;

  function getCurrentProphetId() {
    return (
      langSelect.dataset.prophetId ||
      storyContent.dataset.prophetId ||
      new URLSearchParams(window.location.search).get('prophet') ||
      new URLSearchParams(window.location.search).get('id') ||
      'adam'
    );
  }

  function setStatus(msg) {
    if (statusEl) statusEl.textContent = msg;
  }

  async function applyStoryLanguage(lang) {
    const prophetId = getCurrentProphetId();

    if (!lang || lang === 'en') {
      storyContent.innerHTML = originalEnglishHtml;
      setStatus('');
      return;
    }

    setStatus('(loading...)');

    try {
      const formData = new URLSearchParams();
      formData.append('action', 'get');
      formData.append('prophet_id', prophetId);
      formData.append('lang', lang);

      const res = await fetch('translate_story_cache.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' },
        body: formData.toString()
      });

      const data = await res.json();

      if (data && data.ok && data.cached && data.html) {
  storyContent.innerHTML = data.html;
  setStatus('(instant)');
}
       else {
        storyContent.innerHTML = originalEnglishHtml;
        setStatus('(not saved yet)');
      }
    } catch (err) {
      console.error('Translation load error:', err);
      setStatus('(error)');
    }
  }

  langSelect.addEventListener('change', function () {
    applyStoryLanguage(this.value);
  });

  // If page loads with a non-English language already selected, apply it
  if (langSelect.value && langSelect.value !== 'en') {
    applyStoryLanguage(langSelect.value);
  }
)();
</script>
</body>
</html>