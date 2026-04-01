<?php
ini_set('display_errors', 0);
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="robots" content="noindex,nofollow">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Viscosupport Admin</title>

  <link href="css_login/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

  <style>
    /* Global Styles */
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #0f0f2f, #121332);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #fff;
    }

    /* Login wrapper */
    .login-wrapper {
      width: 100%;
      max-width: 420px;
      padding: 20px;
    }

    /* Login card */
    .login-card {
      background: #1a1a3a;
      border-radius: 12px;
      padding: 45px 35px;
      box-shadow: 0 25px 50px rgba(0, 0, 0, 0.4);
      transition: all 0.3s;
    }

    .login-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 35px 60px rgba(0, 0, 0, 0.5);
    }

    /* Logo */
    .login-logo {
      text-align: center;
      margin-bottom: 20px;
    }

    .login-logo img {
      width: 170px;
    }

    /* Title */
    .login-title {
      text-align: center;
      font-size: 1.5rem;
      font-weight: 600;
      color: #FFD700;
      margin-bottom: 30px;
      text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
    }

    /* Inputs */
    .form-control {
      height: 50px;
      border-radius: 8px;
      border: 1px solid #333366;
      padding-left: 15px;
      margin-bottom: 20px;
      background: #1f1f44;
      color: #fff;
    }

    .form-control::placeholder {
      color: #bbb;
    }

    .form-control:focus {
      border-color: #FFD700;
      box-shadow: 0 0 8px rgba(255, 215, 0, 0.5);
      background: #1f1f44;
      color: #fff;
    }

    /* Button */
    .btn-login {
      width: 100%;
      height: 50px;
      border: none;
      border-radius: 8px;
      background: #FFD700;
      color: #121332;
      font-weight: 600;
      font-size: 1rem;
      transition: all 0.3s;
    }

    .btn-login:hover {
      background: #e6c200;
      color: #0f0f2f;
    }

    /* Alert */
    .alert {
      border-radius: 8px;
      font-size: 14px;
      text-align: center;
      padding: 10px;
      margin-bottom: 15px;
    }

    /* Responsive */
    @media(max-width:576px) {
      .login-card {
        padding: 35px 25px;
      }
    }
  </style>
</head>

<body>

  <div class="login-wrapper">

    <form action="proc-login.php" method="post">

      <div class="login-card">

        <div class="login-logo">
          <img src="../images/visco-new-logo-Trim-ezgif.com-crop.gif" alt="Viscosupport">
        </div>

        <div class="login-title">
          Viscosupport Admin Portal
        </div>

        <?php
        if (isset($error)) {
          echo '<div class="alert alert-danger">' . $error . '</div>';
        }
        ?>

        <input type="text" name="username" placeholder="Username" class="form-control" required>

        <input type="password" name="password" placeholder="Password" class="form-control" required>

        <button type="submit" name="btn" class="btn btn-login">
          Login
        </button>

      </div>

    </form>

  </div>

  <script src="css_login/bootstrap.min.js"></script>

</body>

</html>