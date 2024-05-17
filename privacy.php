<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacybeleid | GatherPics</title>
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="stylesheet" href="./CSS/privacy.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="MEDIA/IMG/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="MEDIA/IMG/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="MEDIA/IMG/favicon-16x16.png">
    <link rel="manifest" href="MEDIA/IMG/site.webmanifest">
    <link rel="mask-icon" href="MEDIA/IMG/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="MEDIA/IMG/favicon.ico">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/scrollify/1.0.19/jquery.scrollify.min.js"></script>
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="MEDIA/IMG/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
</head>

<body>
    <div class="top-spacer"></div>
    <div class="cursor"></div>
    <div class="cursor-follower"></div>

    <div class="navbar">
        <div class="logo-container">
            <img src="./MEDIA/IMG/logo-no-background.png" alt="Logo GatherPics" class="logo">
        </div>
        <div class="nav-links">
            <div class="nav-item submenu">
                <a href="#" class="nav-link">Meer&nbsp;&nbsp;&nbsp; &#9207;</a>
                <div class="submenu-content">
                    <a href="./about.php" class="submenu-item">Over</a>
                    <a href="./credit.php" class="submenu-item">Credits</a>
                    <a href="./tos.php" class="submenu-item">AGV</a>
                    <a href="./privacy.php" class="submenu-item">Privacy</a>
                </div>
            </div>
            <?php
            if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                echo '<a href="dashboard" class="nav-link">Dashboard</a>';
            } else {
                echo '<a href="login" class="nav-link">Login</a>';
                echo '<a href="signup.php" class="nav-link sign-up-link">Sign up</a>';
            }
            ?>
        </div>
    </div>

    <div class="privacy-section">
        <h1 class="animate__animated animate__fadeInDown">Privacybeleid</h1>
        <h2>1. Introductie</h2>
        <p>Welkom bij GatherPics. Wij hechten veel waarde aan uw privacy en doen er alles aan om deze te beschermen. Dit
            privacybeleid legt uit hoe we uw persoonlijke gegevens verzamelen, gebruiken en beschermen.</p>

        <h2>2. Verzamelde Gegevens</h2>
        <p>We verzamelen verschillende soorten gegevens om onze diensten te verbeteren:</p>
        <ul>
            <li><strong>Persoonlijke Gegevens:</strong> Informatie die u direct aan ons verstrekt, zoals naam,
                e-mailadres en wachtwoord bij het aanmaken van een account.</li>
            <li><strong>Gebruiksgegevens:</strong> Informatie over hoe u onze website gebruikt, zoals bezochte pagina's
                en de tijd die u op elke pagina doorbrengt.</li>
            <li><strong>Technische Gegevens:</strong> Informatie zoals uw IP-adres, browser type en versie,
                tijdzone-instelling, browser plug-in types en versies, besturingssysteem en platform.</li>
        </ul>

        <h2>3. Gebruik van Gegevens</h2>
        <p>We gebruiken de verzamelde gegevens voor verschillende doeleinden:</p>
        <ul>
            <li>Om onze diensten te leveren en te onderhouden.</li>
            <li>Om u te informeren over wijzigingen in onze diensten.</li>
            <li>Om u de mogelijkheid te bieden deel te nemen aan interactieve functies van onze diensten wanneer u
                daarvoor kiest.</li>
            <li>Om klantenondersteuning te bieden.</li>
            <li>Om analyses of waardevolle informatie te verzamelen zodat we onze diensten kunnen verbeteren.</li>
            <li>Om het gebruik van onze diensten te controleren.</li>
            <li>Om technische problemen op te sporen, te voorkomen en aan te pakken.</li>
        </ul>

        <h2>4. Delen van Gegevens</h2>
        <p>We zullen uw persoonlijke gegevens niet verkopen of verhuren aan derden. We kunnen uw gegevens echter delen
            in de volgende situaties:</p>
        <ul>
            <li><strong>Met uw toestemming:</strong> We kunnen uw gegevens delen wanneer u ons daarvoor toestemming
                geeft.</li>
            <li><strong>Voor wettelijke doeleinden:</strong> We kunnen uw gegevens openbaar maken als dit wettelijk
                verplicht is of als dit noodzakelijk is om te reageren op verzoeken van overheidsinstanties.</li>
            <li><strong>Met serviceproviders:</strong> We kunnen uw gegevens delen met serviceproviders die diensten
                voor ons uitvoeren, zoals hosting en gegevensanalyse.</li>
        </ul>

        <h2>5. Beveiliging van Gegevens</h2>
        <p>We nemen de beveiliging van uw gegevens serieus en gebruiken passende technische en organisatorische
            maatregelen om uw gegevens te beschermen. Houd er echter rekening mee dat geen enkele methode van overdracht
            via internet of elektronische opslag 100% veilig is.</p>

        <h2>6. Uw Rechten</h2>
        <p>U heeft bepaalde rechten met betrekking tot uw persoonlijke gegevens, waaronder het recht om toegang te
            vragen tot uw gegevens, deze te corrigeren of te verwijderen. Als u een dergelijk verzoek wilt indienen,
            neem dan contact met ons op via <a href="mailto:info@gatherpics.com">info@gatherpics.com</a>.</p>

        <h2>7. Wijzigingen in dit Privacybeleid</h2>
        <p>We kunnen dit privacybeleid van tijd tot tijd bijwerken. We zullen u op de hoogte brengen van eventuele
            wijzigingen door het nieuwe privacybeleid op deze pagina te plaatsen. U wordt aangeraden dit privacybeleid
            regelmatig te bekijken voor eventuele wijzigingen.</p>

        <h2>8. Contact</h2>
        <p>Als u vragen heeft over dit privacybeleid, neem dan contact met ons op via <a
                href="mailto:info@gatherpics.com">info@gatherpics.com</a>.</p>
    </div>

    <script src="./JAVASCRIPT/script.js"></script>
    <script src="./JAVASCRIPT/cursor.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
</body>

</html>