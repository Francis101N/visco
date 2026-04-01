<?php
session_start();
include('connection/connect.php');

if (!isset($_SESSION['admin_user'])) {
    include('index.php');
    exit;
}
header("refresh:3;url=dashboard");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="noindex,nofollow">
    <title>Welcome - Viscosupport Admin</title>

    <link href="css_login/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #0f0f2f 0%, #121332 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
        }

        .welcome-card {
            background: #1a1a3a;
            border-radius: 15px;
            padding: 50px 35px;
            max-width: 450px;
            width: 100%;
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.4);
            text-align: center;
            position: relative;
            overflow: hidden;
            animation: fadeInUp 0.6s ease;
        }

        .welcome-card::before {
            content: '';
            position: absolute;
            top: -20px;
            left: -20px;
            right: -20px;
            bottom: -20px;
            border-radius: 20px;
            background: linear-gradient(135deg, #FFD700, #b89452);
            z-index: -1;
            filter: blur(25px);
        }

        .welcome-icon {
            width: 90px;
            height: 90px;
            background: #FFD700;
            color: #121332;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 42px;
            margin: 0 auto 25px;
            box-shadow: 0 5px 15px rgba(255, 215, 0, 0.4);
        }

        .welcome-card h3 {
            font-weight: 600;
            color: #fff;
            margin-bottom: 10px;
            font-size: 1.6rem;
        }

        .username {
            color: #FFD700;
        }

        .welcome-card p {
            color: #ccc;
            font-size: 15px;
            line-height: 1.6;
        }

        .redirect-text {
            margin-top: 25px;
            font-size: 14px;
        }

        .redirect-text a {
            color: #FFD700;
            font-weight: 600;
            text-decoration: none;
        }

        .redirect-text a:hover {
            text-decoration: underline;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>

    <div class="welcome-card">

        <div class="welcome-icon">✔</div>

        <h3>Welcome, <span class="username"><?php echo ucwords($_SESSION['admin_user']); ?></span></h3>

        <p>You are successfully logged in to the Viscosupport admin panel.</p>

        <p class="redirect-text">
            Redirecting to your dashboard in <strong>3 seconds</strong>.<br>
            If not redirected, <a href="dashboard">click here</a>.
        </p>

    </div>

</body>

</html>