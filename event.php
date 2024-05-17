<?php

require 'REQUIRED/config.php';

$id = $_GET['id'];
$stmt = $con->prepare("SELECT * FROM events WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $date = date('d-m-Y', strtotime($row['date']));
    echo '<!DOCTYPE html>
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
        <title>GatherPics | Evenement</title>
    </head>
    <body class="animate__animated animate__fadeIn">
        <div class="content">
            <h1>' . $row['naam'] . '</h1>
            <div class="event-content">
                <div class="event-info">
                    <h2>Evenement Informatie</h2>
                    <p><strong>Datum:</strong> ' . $date . '</p>
                    <p><strong>Locatie:</strong> ' . $row['locatie'] . '</p>
                    <p><strong>Status:</strong> <span class="status-badge status-' . $row['status'] . '">' . $row['status'] . '</span></p>
                </div>
                <br/>
                <h1>Fotos:</h1>';

    echo '</div>
            </div>
        </div>
        <script src="https://kit.fontawesome.com/a88fb386eb.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    </body>
    </html>';
} else {
    echo '<!DOCTYPE html>
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
        <title>GatherPics | Evenement</title>
    </head>
    <body class="animate__animated animate__fadeIn">
        <div class="content">
            <h1>Evenement niet gevonden</h1>
        </div>
        <script src="https://kit.fontawesome.com/a88fb386eb.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    </body>
    </html>';
}

?>
