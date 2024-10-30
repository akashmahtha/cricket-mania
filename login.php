<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login</title>
    <style type="text/css">
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-image: url('https://thumbs.dreamstime.com/b/sticker-label-design-cricket-mania-stylish-blue-background-49006430.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .login-container {
            display: flex;
            width: 30%;
            max-width: 800px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
            background-color: rgba(255, 255, 255, 0.9); /* Adds a white background with slight opacity */
        }

        .login-form {
            flex: 1;
            padding: 40px;
        }

        .login-form h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            color: #555;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            transition: border-color 0.2s ease-in-out;
        }

        .form-group input:focus {
            border-color: #3498db;
            outline: none;
        }

        button {
            background-color: #3498db;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.2s ease-in-out;
            width: 100%;
        }

        button:hover {
            background-color: #2980b9;
        }

        .login-links {
            text-align: center;
            color: #333;
            margin-top: 10px;
        }

        .login-links a {
            color: #3498db;
            text-decoration: none;
            margin: 0 10px;
        }

        .login-image {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #3498db;
        }

        .login-image img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="login-container">
            <div class="login-form">
                <h2>Cricket Mania Login</h2>
                <form action="process_login.php" method="post">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <button type="submit">Login</button>
                </form>
                <br>
                <div class="login-links">
                    <a href="forgot_password.php">Forgot Password?</a>
                    <a href="registration.php">New Registration</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
