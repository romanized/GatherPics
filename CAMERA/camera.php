<?php
require_once '../REQUIRED/config.php';


$event_id = 1;
$userid = 50;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $imageData = file_get_contents('php://input');
    $base64Data = explode(',', $imageData)[1];
    $decodedImageData = base64_decode($base64Data);
    $imagePath = 'Pictures/' . $event_id . '_' . $userid . '_' . uniqid() .'.jpg';
    file_put_contents($imagePath, $decodedImageData);
    $stmt = $con->prepare("INSERT INTO pictures (event_id, user_id, path) VALUES (?, ?, ?)");
    $stmt->bind_param("iis", $event_id, $userid, $imagePath);
    $stmt->execute();
    $stmt->close();
    
} 
?>

<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="camera.css">
    <title>GatherPics | Camera</title>
</head>


<body>
    <main id="camera">
        <canvas id="camera--sensor"></canvas>
        <video id="camera--view" autoplay playsinline></video>
        <button id="camera--trigger"><i class="fa-solid fa-circle"></i></button>
    </main>
    <script src="camera.js"></script>
    <script src="https://kit.fontawesome.com/a88fb386eb.js" crossorigin="anonymous"></script>
</body>

</html>