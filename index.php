<?php

require_once 'REQUIRED/config.php';


?>

<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | GatherPics</title>
    <link rel="stylesheet" href="./CSS/style.css">
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


    <div id="fullpage">
        <div class="section first">
            <svg class="cameraicon" width="120" height="100" viewBox="0 0 120 100" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <g id="fullicon">
                    <rect id="icon" x="21" y="11" width="79" height="79" rx="26" fill="#849FFF" />
                    <rect id="Flits" x="36" y="30" width="16" height="4" rx="2" fill="#FFF500" />
                    <path id="Camera"
                        d="M38.9688 27C36.2256 27 34 29.2076 34 31.9286V68.0714C34 70.7924 36.2256 73 38.9688 73H82.0312C84.7744 73 87 70.7924 87 68.0714V31.9286C87 29.2076 84.7744 27 82.0312 27H38.9688ZM38.9688 30.2857H49.9414C50.283 30.2857 50.5625 30.5629 50.5625 30.9018V32.9554C50.5625 33.2942 50.283 33.5714 49.9414 33.5714H37.9336C37.592 33.5714 37.3125 33.2942 37.3125 32.9554V31.9286C37.3125 31.025 38.0578 30.2857 38.9688 30.2857ZM83.0664 40.1429H37.9336C37.592 40.1429 37.3125 39.8656 37.3125 39.5268V35.8304C37.3125 35.4915 37.592 35.2143 37.9336 35.2143H52.2188L55.3449 30.5629C55.4588 30.3884 55.6555 30.2857 55.8625 30.2857H82.0312C82.9422 30.2857 83.6875 31.025 83.6875 31.9286V39.5268C83.6875 39.8656 83.408 40.1429 83.0664 40.1429ZM60.5 67.25C53.6473 67.25 48.0781 61.7259 48.0781 54.9286C48.0781 48.1313 53.6473 42.6071 60.5 42.6071C67.3527 42.6071 72.9219 48.1313 72.9219 54.9286C72.9219 61.7259 67.3527 67.25 60.5 67.25ZM60.5 45.8929C55.4795 45.8929 51.3906 49.9487 51.3906 54.9286C51.3906 59.9085 55.4795 63.9643 60.5 63.9643C65.5205 63.9643 69.6094 59.9085 69.6094 54.9286C69.6094 49.9487 65.5205 45.8929 60.5 45.8929ZM55.5312 56.5714C54.6203 56.5714 53.875 55.8321 53.875 54.9286C53.875 51.304 56.8459 48.3571 60.5 48.3571C61.4109 48.3571 62.1562 49.0964 62.1562 50C62.1562 50.9036 61.4109 51.6429 60.5 51.6429C58.6781 51.6429 57.1875 53.1214 57.1875 54.9286C57.1875 55.8321 56.4422 56.5714 55.5312 56.5714Z"
                        fill="white" />
                </g>
            </svg>
            <svg class="personicon" width="120" height="100" viewBox="0 0 120 100" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <g id="personfull">
                    <rect width="120" height="100" fill="white" />
                    <rect id="rect" x="21" y="11" width="79" height="79" rx="26" fill="#FF9820" />
                    <path id="person"
                        d="M60.5 53.8125C68.7295 53.8125 75.4062 47.1357 75.4062 38.9062C75.4062 30.6768 68.7295 24 60.5 24C52.2705 24 45.5938 30.6768 45.5938 38.9062C45.5938 47.1357 52.2705 53.8125 60.5 53.8125ZM73.75 57.125H68.0463C65.7482 58.1809 63.1914 58.7812 60.5 58.7812C57.8086 58.7812 55.2621 58.1809 52.9537 57.125H47.25C39.9314 57.125 34 63.0564 34 70.375V72.0312C34 74.7744 36.2256 77 38.9688 77H82.0312C84.7744 77 87 74.7744 87 72.0312V70.375C87 63.0564 81.0686 57.125 73.75 57.125Z"
                        fill="white" />
                </g>
            </svg>
            <svg class="hearticon" width="120" height="100" viewBox="0 0 120 100" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <g id="heartfull">
                    <rect width="120" height="100" fill="white" />
                    <rect id="iconHart" x="21" y="11" width="79" height="79" rx="26" fill="#FF6161" />
                    <path id="Hart"
                        d="M81.8556 30.1453C76.1831 25.3503 67.7467 26.2128 62.54 31.5417L60.5008 33.6261L58.4615 31.5417C53.2652 26.2128 44.8184 25.3503 39.1459 30.1453C32.6452 35.6488 32.3036 45.5263 38.1211 51.4918L58.151 72.0066C59.4449 73.3311 61.5462 73.3311 62.8402 72.0066L82.8701 51.4918C88.6979 45.5263 88.3563 35.6488 81.8556 30.1453Z"
                        fill="white" />
                </g>
            </svg>
            <svg class="qrcode" width="120" height="100" viewBox="0 0 120 100" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <g id="Frame 4">
                    <rect width="120" height="100" fill="white" />
                    <rect id="iconqrcode" x="21" y="11" width="79" height="79" rx="26" fill="#48FA96" />
                    <path id="qrcode"
                        d="M34 46.7143H56.7143V27H34V46.7143ZM41.5714 33.5714H49.1429V40.1429H41.5714V33.5714ZM64.2857 27V46.7143H87V27H64.2857ZM79.4286 40.1429H71.8571V33.5714H79.4286V40.1429ZM34 73H56.7143V53.2857H34V73ZM41.5714 59.8571H49.1429V66.4286H41.5714V59.8571ZM83.2143 53.2857H87V66.4286H75.6429V63.1429H71.8571V73H64.2857V53.2857H75.6429V56.5714H83.2143V53.2857ZM83.2143 69.7143H87V73H83.2143V69.7143ZM75.6429 69.7143H79.4286V73H75.6429V69.7143Z"
                        fill="white" />
                </g>
            </svg>
            <p class="text-1">Sla jouw speciale momenten</p>
            <p class="text-2">op met GatherPics</p>
            <p class="text-3">Al jouw belangerijke herinneringen op een plek.</p>
            <div class="starting-link-container">
                <?php
                if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                    echo '<a href="dashboard" class="starting-link">Ga verder</a>';
                } else {
                    echo '<a href="signup" class="starting-link">Nu Beginnen</a>';
                }
                ?>
                <span class="hover-text">Welkom &#128075;</span>
            </div>
        </div>

        <div class="section" id="new-section">
            <div class="content-container">
                <p class="big-text">Maak, nodig uit, begin</p>
                <p class="big-text second">Genodigden delen met elkaar</p>
                <p class="small-text">Van bruiloften en verjaardagen tot grote evenementen, maak je eigen evenement aan
                    en laat genodigden hun foto's delen om samen een prachtige fotocollage te creëren.</p>
                <a href="./about.html" class="styled-button">Meer informatie</a>
            </div>
        </div>

        <div class="section" id="last-section">
            <p>Hier komt een video...</p>
        </div>

        <div class="section footer">
            <div class="footer-links">
                <a href="./about.html" class="footer-link">Over GatherPics</a>
                <a href="./credit.html" class="footer-link">Credits</a>
                <a href="./tos.html" class="footer-link">Algemene voorwaarden</a>
                <a href="./privacy.html" class="footer-link">Privacy</a>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 GatherPics.nl</p>
            </div>
        </div>
    </div>

    <script src="./JAVASCRIPT/script.js"></script>
    <script src="./JAVASCRIPT/cursor.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
</body>

</html>