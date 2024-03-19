<?php
  require_once 'REQUIRED/config.php';

  if($_SERVER['REQUEST_METHOD'] == "POST") {
    if (trim($_POST['email']) == NULL) {
        Header("Location:login?error");
    }
    if (trim($_POST['password']) == NULL) {
        Header("Location:login?error");
    }        
    $query = $con->query("SELECT * FROM users WHERE email = '".$con->real_escape_string($_POST['email'])."'");

    if ($query->num_rows == 1) {
        $row = $query->fetch_assoc();
        if (password_verify($_POST['password'],$row['password'])) {
            $_SESSION['loggedin'] = true;
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['role'] = $row['role'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['profilepic'] = $row['profilepic'];
            $_SESSION['id'] = $row['id'];
            
            $con->query("UPDATE users SET last_login = '".date('Y-m-d')."' WHERE id = '".$row['id']."'");
            if ($_SERVER['HTTP_REFFER'] != "") {
                header('Location: ' . $_SERVER['HTTP_REFERER']);
            } else {
                Header("Location: dashboard");
                // Disable cache
                header("Cache-Control: no-cache, no-store, must-revalidate");
                header("Pragma: no-cache");
                header("Expires: 0");
            }
        } else {
            Header("Location: login?error");
        }
    } else {
        Header("Location: login?error");
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