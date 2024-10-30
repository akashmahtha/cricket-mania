<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <style type="text/css">
        * {
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: flex-end; /* Aligns the form to the right */
            align-items: center;
            min-height: 100vh;
            background-image: url('https://img.freepik.com/premium-photo/icc-world-cup-cricket-stadium-background-with-flag-trophy-vector-wallpaper-design-illustration_837518-24209.jpg?semt=ais_hybrid');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        .container {
            width: 100%;
            max-width: 400px; /* Limits the width of the form */
            padding: 20px;
            background-color: rgba(245, 249, 252, 0.9); /* semi-transparent white */
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
            margin-right: 20px; /* Adds spacing from the right edge */
        }
        .form-title {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            transition: border-color 0.2s ease-in-out;
        }
        .form-control:focus {
            border-color: #3498db;
            outline: none;
        }
        .btn {
            background-color: #3498db;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.2s ease-in-out;
            width: 100%;
        }
        .btn:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="registration-form">
            <h2 class="form-title">Cricket Registration</h2>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name" class="label">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <div class="form-group">
                    <label for="email" class="label">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="address" class="label">Address:</label>
                    <textarea class="form-control" id="address" name="address" required></textarea>
                </div>

                <div class="form-group">
                    <label for="mobile" class="label">Mobile:</label>
                    <input type="tel" class="form-control" id="mobile" name="mobile" required>
                </div>

                <div class="form-group">
                    <label for="sex" class="label">Sex:</label>
                    <select class="form-control" id="sex" name="sex" required>
                        <option value="">Select Sex</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="nationality" class="label">Nationality:</label>
                    <input type="text" class="form-control" id="nationality" name="nationality" required>
                </div>

                <div class="form-group">
                    <label for="category" class="label">Type:</label>
                    <select class="form-control" id="category" name="category" required>
                        <option value="">Select Type</option>
                        <option value="coach">Coach</option>
                        <option value="player">Player</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="password" class="label">Set Password:</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>

                <div class="form-group">
                    <label for="confirm_password" class="label">Confirm Password:</label>
                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn">Register</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
