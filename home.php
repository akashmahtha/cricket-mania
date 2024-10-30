<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cricket Mania</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
        }

        header {
            background-color: #3498db; /* Solid background color */
            color: white;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .header-title {
            font-size: 3rem;
            font-weight: bold;
        }

        .header-subtitle {
            font-size: 1.5rem;
            margin: 10px 0;
        }

        .btn {
            background-color: #2980b9; /* Slightly darker shade */
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.2s ease-in-out;
            text-decoration: none;
            margin: 10px;
        }

        .btn:hover {
            background-color: #1c598a; /* Darker on hover */
        }

        section {
            padding: 50px 20px;
            text-align: center;
        }

        .about {
            background-color: #fff;
            margin: 20px auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            max-width: 800px;
        }

        .features {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin: 20px auto;
        }

        .feature {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            margin: 10px;
            width: 200px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .feature i {
            font-size: 40px;
            color: #3498db;
        }

        footer {
            text-align: center;
            padding: 20px;
            background-color: #3498db;
            color: white;
        }

        footer a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<header>
    <h1 class="header-title">Welcome to Cricket Mania</h1>
    <p class="header-subtitle">Your Ultimate Destination for All Things Cricket!</p>
    <a href="registration.php" class="btn">Join Us Now</a>
    <a href="login.php" class="btn">Login</a>
</header>

<section class="about">
    <h2>About Us</h2>
    <p>Cricket Mania is dedicated to bringing together cricket enthusiasts from around the world. Whether you are a player, coach, or a fan, our platform provides you with the latest news, updates, and opportunities in the cricketing world.</p>
</section>

<section>
    <h2>Features</h2>
    <div class="features">
        <div class="feature">
            <i class="fas fa-trophy"></i>
            <h3>Tournaments</h3>
            <p>Stay updated with upcoming tournaments and matches.</p>
        </div>
        <div class="feature">
            <i class="fas fa-users"></i>
            <h3>Join a Team</h3>
            <p>Find or create a team to play and compete.</p>
        </div>
        <div class="feature">
            <i class="fas fa-newspaper"></i>
            <h3>News & Updates</h3>
            <p>Get the latest news and updates from the cricket world.</p>
        </div>
        <div class="feature">
            <i class="fas fa-chart-line"></i>
            <h3>Statistics</h3>
            <p>Track player and team statistics to enhance your game.</p>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>

</body>
</html>
