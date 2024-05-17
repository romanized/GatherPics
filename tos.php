<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Algemene Voorwaarden | GatherPics</title>
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="stylesheet" href="./CSS/tos.css">
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

    <div class="tos-section">
        <h1 class="animate__animated animate__fadeInDown">Algemene Voorwaarden</h1>
        <h2>1. Introductie</h2>
        <p>Welkom bij GatherPics. Door gebruik te maken van onze website, gaat u akkoord met de volgende Algemene
            Voorwaarden. Lees deze zorgvuldig door.</p>

        <h2>2. Doel van de Website</h2>
        <p>GatherPics biedt een platform waar gebruikers evenementen kunnen aanmaken en foto's kunnen uploaden. Het doel
            is om het delen van herinneringen en visuele verhalen te vergemakkelijken.</p>

        <h2>3. Gebruikersaccount</h2>
        <p>Gebruikers moeten een account aanmaken om evenementen te kunnen maken en foto's te kunnen uploaden. U bent
            verantwoordelijk voor de veiligheid van uw account en wachtwoord.</p>

        <h2>4. Evenementen Aanmaken</h2>
        <p>Gebruikers kunnen evenementen aanmaken door de vereiste informatie in te vullen, zoals de naam van het
            evenement, datum, tijd en locatie. Evenementen moeten voldoen aan onze richtlijnen en mogen geen
            aanstootgevende of illegale inhoud bevatten.</p>

        <h2>5. Foto's Uploaden</h2>
        <p>Gebruikers kunnen foto's uploaden naar hun evenementen. Alle geüploade foto's moeten eigendom zijn van de
            gebruiker of de gebruiker moet de juiste rechten hebben om deze te delen. Foto's mogen geen aanstootgevende
            of illegale inhoud bevatten.</p>

        <h2>6. Intellectueel Eigendom</h2>
        <p>Alle inhoud die door gebruikers wordt geüpload, blijft eigendom van de gebruiker. Door inhoud op GatherPics
            te plaatsen, verleent de gebruiker GatherPics een niet-exclusieve, royaltyvrije licentie om de inhoud te
            gebruiken, weer te geven en te distribueren op het platform.</p>

        <h2>7. Beperkingen van Aansprakelijkheid</h2>
        <p>GatherPics is niet aansprakelijk voor enige schade die voortvloeit uit het gebruik van onze website of de
            onmogelijkheid om onze diensten te gebruiken. Dit omvat, maar is niet beperkt tot, directe, indirecte,
            incidentele, gevolg- en punitieve schade.</p>

        <h2>8. Wijzigingen in de Algemene Voorwaarden</h2>
        <p>GatherPics behoudt zich het recht voor om deze Algemene Voorwaarden op elk moment te wijzigen. Wijzigingen
            worden van kracht zodra ze op de website worden geplaatst. Het is de verantwoordelijkheid van de gebruiker
            om de Algemene Voorwaarden regelmatig te controleren.</p>

        <h2>9. Contact</h2>
        <p>Als u vragen heeft over deze Algemene Voorwaarden, neem dan contact met ons op via <a
                href="mailto:info@gatherpics.com">info@gatherpics.com</a>.</p>
    </div>

    <script src="./JAVASCRIPT/script.js"></script>
    <script src="./JAVASCRIPT/cursor.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
</body>

</html>