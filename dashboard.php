<?php 
require_once 'REQUIRED/config.php';

if (!$_SESSION['loggedin'] == true) { 
    header('Location: login'); 
} 
?>

<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.7/tailwind.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="CSS/dashboard.css">
    <link rel="stylesheet" href="./CSS/cursor.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="MEDIA/IMG/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="MEDIA/IMG/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="MEDIA/IMG/favicon-16x16.png">
    <link rel="manifest" href="MEDIA/IMG/site.webmanifest">
    <link rel="mask-icon" href="MEDIA/IMG/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="MEDIA/IMG/favicon.ico">
    <title>GatherPics | Dashboard</title>
</head>

<body class="animate__animated animate__fadeIn">
    <div class="cursor-follower"></div>
    <nav class="sidebar">
        <div class="sidebar-header">
            <a href="./" class="logo">
                <h3>GatherPics</h3>
            </a>
        </div>
        <ul class="nav-links">
            <li><a onclick="navigate('dashboard')">Dashboard</a></li>
            <li><a onclick="navigate('events')">Evenementen</a></li>
            <li><a onclick="navigate('settings')">Settings</a></li>
            <li><a onclick="navigate('contact')">Contact</a></li>
            <?php if ($_SESSION['role'] == 'admin') { ?>
            <hr>
            <li><a href="admin">Admin</a></li>
            <?php } ?>
        </ul>
        <div class="user-info">
            <span class="logged-user-hey">Hey, &#128075;</span><br>
            <span class="logged-in-user"><?php echo $_SESSION['name']; ?></span>
            <a href="logout" class="logout-icon">
                <i class="fas fa-sign-out-alt"></i>
            </a>
        </div>
    </nav>
    <div class="content">
        <div class="dashboard active">
            <h1>Dashboard</h1>
            <div class="dashboard-content">
                <h2>Recente Evenementen</h2>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Event Naam</th>
                                <th>Datum</th>
                                <th>Locatie</th>
                                <th>Status</th>
                                <th>Acties</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $stmt = $con->prepare("SELECT * FROM events WHERE FIND_IN_SET(?, users)");
                            $stmt->bind_param("i", $_SESSION['id']);
                            $stmt->execute();
                            $result = $stmt->get_result();
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    $date = date('d-m-Y', strtotime($row['date']));
                                    echo '<tr>
                                        <td>' . $row['naam'] . '</td>
                                        <td>' . $date . '</td>
                                        <td>' . $row['locatie'] . '</td>
                                        <td><span class="status-badge status-'. $row['status'].'">'. $row['status'].'</span></td>
                                        <td>';
                                    if ($row['userid'] == $_SESSION['id']) {
                                        echo '<a href="event?id=' . $row['id'] . '" class="btn btn-primary btn-sm">Bekijk</a>';
                                        echo '<a href="edit-event?id=' . $row['id'] . '" class="btn btn-secondary btn-sm">Bewerk</a>';
                                    } else {
                                        echo '<a href="event?id=' . $row['id'] . '" class="btn btn-primary btn-sm">Bekijk</a>';
                                    }
                                    echo '</td>
                                    </tr>';
                                }
                            } else {
                                echo '<tr>
                                    <td>Geen evenementen gevonden</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>';
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="choose">
                    <h2>Hoe werkt het?</h2>
                    <div class="images">
                        <div class="make">
                            <img src="MEDIA/SVG/choose.svg" alt="Maak evenement" class="choose-event">
                            <h2>Maak een evenement</h2>
                            <span>Maak een evenement aan en zet deze op actief.</span>
                        </div>
                        <div class="share">
                            <img src="MEDIA/SVG/share.svg" alt="Deel evenement" class="choose-event">
                            <h2>Deel de link of QR-code</h2>
                            <span>Deel de link met genodigden en laat ze foto's uploaden.</span>
                        </div>
                        <div class="watch">
                            <img src="MEDIA/SVG/watch.svg" alt="Bekijk evenement" class="choose-event">
                            <h2>Bekijk de foto's</h2>
                            <span>Bekijk de foto's die genodigden hebben geüpload.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="events">
            <h1>Events</h1>
            <?php
            $stmt = $con->prepare("SELECT * FROM events WHERE FIND_IN_SET(?, users)");
            $stmt->bind_param("i", $_SESSION['id']);
            $stmt->execute();
            $result = $stmt->get_result();
            if ($result->num_rows > 0) {
                echo '<div class="event-list">';
                while ($row = $result->fetch_assoc()) {
                    $date = date('d-m-Y', strtotime($row['date']));
                    echo '<div class="event-card">
                        <h3 class="text-lg font-semibold">' . $row['naam'] . '</h3>
                        <p>Datum: ' . $date . '</p>
                        <p>Locatie: ' . $row['locatie'] . '</p>
                        <div class="event-actions">';
                    if ($row['userid'] == $_SESSION['id']) {
                        echo '<a href="event?id=' . $row['id'] . '" class="btn btn-primary btn-sm">Bekijk</a>';
                        echo '<a href="edit-event?id=' . $row['id'] . '" class="btn btn-secondary btn-sm">Bewerk</a>';
                    } else {
                        echo '<a href="event?id=' . $row['id'] . '" class="btn btn-primary btn-sm">Bekijk</a>';
                    }
                    echo '</div>
                    </div>';
                }
                echo '</div>';
            } else {
                echo '<div class="no-events">
                    <h2>Geen evenementen gevonden</h2>
                </div>';
            }
            ?>
            <div class="create-event">
                <button class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded">Maak een event</button>
            </div>
        </div>
    </div>
    <script src="./JAVASCRIPT/cursor.js"></script>
    <script src="./JAVASCRIPT/dashboard.js"></script>
    <script src="https://kit.fontawesome.com/a88fb386eb.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://kit.fontawesome.com/your-font-awesome-kit.js"></script>
</body>

</html>