<?php
require_once 'REQUIRED/config.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  if (trim($_POST['email']) == NULL) {
    Header("Location:signup?error");
  }
  if (trim($_POST['password']) == NULL) {
    Header("Location:signup?error");
  }
  if (trim($_POST['username']) == NULL) {
    Header("Location:signup?error");
  }
  $query = $con->query("SELECT * FROM users WHERE email = '" . $con->real_escape_string($_POST['email']) . "'");

  if ($query->num_rows == 1) {
    Header("Location: signup?error");
  } else {
    $con->query("INSERT INTO users (email, password, name, last_login) VALUES ('" . $con->real_escape_string($_POST['email']) . "','" . password_hash($_POST['password'], PASSWORD_BCRYPT) . "','" . $con->real_escape_string($_POST['username']) . "','" . date('Y-m-d') ."')");
    $_SESSION['loggedin'] = true;
    Header("Location: dashboard?newuser");
  }
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
  <title>GatherPics | Registreer</title>
</head>

<body>
  <div class="cursor-follower"></div>
  <div class="login-container bg-gray-100 dark:bg-gray-900">
    <div class="login-card">
      <h1 class="text-2xl font-black tracking-tight sm:text-3xl md:text-4xl">
        Welkom.
      </h1>
      <p class="text-gray-500 dark:text-gray-400 my-4">
        We gaan een account maken
      </p>
      <form method="post">
      <div class="mb-4">
          <label for="username" class="block text-sm font-medium text-gray-700">Gebruikersnaam</label>
          <input name="username" type="text" id="email" class="form-input mt-1">
        </div>
        <div class="mb-4">
          <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
          <input name="email" type="email" id="email" class="form-input mt-1">
        </div>
        <div class="mb-4">
          <label for="password" class="block text-sm font-medium text-gray-700">Wachtwoord</label>
          <input name="password" type="password" id="password" class="form-input mt-1">
          <br />
          <a href="login" class="text-sm text-blue-600 hover:text-blue-500 display-block text-right mt-2">Heb je al een
            account?</a>
        </div>
        <button type="submit" class="btn-primary">
          Registreer
        </button>
      </form>
    </div>
  </div>
  <script src="./JAVASCRIPT/cursor.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>

</body>

</html>