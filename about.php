<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About | GatherPics</title>
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="stylesheet" href="./CSS/about.css">
    <link rel="stylesheet" href="./CSS/cursor.css">
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
        <a href="./index.php">
            <div class="logo-container">
                <img src="./MEDIA/IMG/logo-no-background.png" alt="Logo GatherPics" class="logo">
            </div>
        </a>
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

    <div class="about-section">
        <h1 class="animate__animated animate__fadeInDown">Over GatherPics</h1>
        <p class="animate__animated animate__fadeInUp">Welkom bij GatherPics, jouw platform voor het delen en ontdekken
            van prachtige foto's. Onze missie is om een naadloze en plezierige ervaring te bieden voor alle
            fotografieliefhebbers, of je nu een professional bent of net begint.</p>
        <p class="animate__animated animate__fadeInUp">Bij GatherPics geloven we in de kracht van visueel vertellen. Ons
            platform stelt je in staat om je werk te laten zien, contact te maken met andere fotografen en een divers
            scala aan afbeeldingen van over de hele wereld te verkennen.</p>
        <p class="animate__animated animate__fadeInUp">GatherPics biedt een gebruiksvriendelijke interface waarmee je
            eenvoudig foto's kunt uploaden, organiseren en delen. Onze geavanceerde zoekfuncties helpen je snel de
            foto's te vinden die je zoekt, en ons communitygedeelte stelt je in staat om deel te nemen aan discussies,
            feedback te geven en te ontvangen, en samenwerkingen aan te gaan.</p>
        <p class="animate__animated animate__fadeInUp">Bedankt dat je deel uitmaakt van onze gemeenschap. We hopen dat
            je geniet van je tijd op GatherPics!</p>
    </div>

    <div class="footer">
        <div class="footer-links">
            <a href="about.php" class="footer-link">About</a>
            <a href="credit.php" class="footer-link">Credits</a>
            <a href="tos.php" class="footer-link">Terms of Service</a>
            <a href="privacy.php" class="footer-link">Privacy Policy</a>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 GatherPics. All rights reserved.</p>
        </div>
    </div>

    <script src="./JAVASCRIPT/script.js"></script>
    <script src="./JAVASCRIPT/cursor.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
</body>

</html>