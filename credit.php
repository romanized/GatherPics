<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Credits | GatherPics</title>
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="stylesheet" href="./CSS/credit.css">
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
                    <a href="./about.html" class="submenu-item">Over</a>
                    <a href="./credit.html" class="submenu-item">Credits</a>
                    <a href="./tos.html" class="submenu-item">AGV</a>
                    <a href="./privacy.html" class="submenu-item">Privacy</a>
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

    <div class="credits-section" style="margin-top: 12vh;">
        <div class="developer">
            <div class="profile-pic">
                <img src="./MEDIA/IMG/nebi.png" alt="Developer 1">
            </div>
            <h2>Nebi Canlioglu</h2>
            <p>Hey, ik ben Nebi. Een Software Developer, momenteel studerend aan het Grafisch Lyceum Rotterdam. Mijn
                passie ligt in coderen, en ik ben voortdurend bezig mijn kennis uit te breiden door nieuwe technologieën
                en programmeertalen te verkennen. Ik ben enthousiast over de wereld van softwareontwikkeling en blijf
                streven naar groei en innovatie. Hier onder kan je mijn GitHub pagina vinden waar meer informatie te
                vinden is over wat voor soort projecten ik maak.</p>
            <a href="https://nebicanlioglu.nl" class="profile-link">Portfolio</a>
        </div>
        <div class="developer">
            <div class="profile-pic">
                <img src="./MEDIA/IMG/sil.png" alt="Developer 2">
            </div>
            <h2>Silvester Hensen</h2>
            <p>Hallo, ik ben Silvester. Als Software Developer studeer ik aan het Grafisch Lyceum Rotterdam. ik ben
                voortdurend bezig mijn kennis uit te breiden door nieuwe technologieën en programmeertalen te verkennen.
                Ik ben enthousiast over de wereld van softwareontwikkeling en streef voortdurend naar groei en
                innovatie. Op mijn GitHub-pagina kun je meer informatie vinden over de soorten projecten waaraan ik
                werk.</p>
            <a href="https://silvesterhensen.dev/" class="profile-link">Portfolio</a>
        </div>
    </div>

    <div class="footer">
        <div class="footer-links">
            <a href="about.html" class="footer-link">About</a>
            <a href="credit.html" class="footer-link">Credits</a>
            <a href="tos.html" class="footer-link">Terms of Service</a>
            <a href="privacy.html" class="footer-link">Privacy Policy</a>
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