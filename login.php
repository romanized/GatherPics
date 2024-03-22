<?php
require_once 'REQUIRED/config.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if (empty($email)) {
        header("Location: login?error=emptyemail");
        exit();
    }
    if (empty($password)) {
        header("Location: login?error=emptypassword");
        exit();
    }

    $stmt = $con->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['loggedin'] = true;
            $_SESSION['email'] = $row['email'];
            $_SESSION['role'] = $row['role'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['id'] = $row['id'];

            $stmt = $con->prepare("UPDATE users SET last_login = NOW() WHERE id = ?");
            $stmt->bind_param("i", $row['id']);
            $stmt->execute();

            // Redirect logic with proper exit
            if (!empty($_SERVER['HTTP_REFERER']) && strpos($_SERVER['HTTP_REFERER'], 'login') === false) {
                header('Location: ' . $_SERVER['HTTP_REFERER']);
            } else {
                header("Location: dashboard");
            }
            exit(); // Add an exit() after redirection
        } else {
            header("Location: login?error=invalidpassword");
            exit();
        }
    } else {
        header("Location: login?error=nouser");
        exit();
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
  <title>GatherPics | Login</title>
</head>

<body>
  <div class="cursor-follower"></div>
  <div class="login-container bg-gray-100 dark:bg-gray-900">
    <div class="login-card">
      <h1 class="text-2xl font-black tracking-tight sm:text-3xl md:text-4xl">
        Welkom terug.
      </h1>
      <p class="text-gray-500 dark:text-gray-400 my-4">
        Login om verder te gaan
      </p>
      <form method="post">
        <div class="mb-4">
          <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
          <input name="email" type="email" id="email" class="form-input mt-1" placeholder="email@gatherpics.nl">
        </div>
        <div class="mb-4">
          <label for="password" class="block text-sm font-medium text-gray-700">Wachtwoord</label>
          <input name="password" type="password" id="password" class="form-input mt-1">
          <a href="passwordforgot"
            class="text-sm text-blue-600 hover:text-blue-500 display-block text-right mt-2">Wachtwoord
            vergeten?</a>
          <br />
          <a href="singup" class="text-sm text-blue-600 hover:text-blue-500 display-block text-right mt-2">Nog geen
            account?</a>
        </div>
        <button type="submit" class="btn-primary">
          Login
        </button>
      </form>
    </div>
  </div>
  <script src="./JAVASCRIPT/cursor.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>

</body>

</html>