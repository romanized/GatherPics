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
  <link rel="stylesheet" href="CSS/login.css">
  <link rel="stylesheet" href="./CSS/cursor.css">
  <title>GatherPics | Login</title>
</head>

<body>
  <div class="cursor-follower"></div>
  
  <script src="./JAVASCRIPT/cursor.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>

</body>

</html>