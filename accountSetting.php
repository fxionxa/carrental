<!-- SJSU CMPE 138 FALL 2023 TEAM9-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Settings</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #007BFF;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        h1 {
            margin: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        h2 {
            color: #333;
        }

        p {
            margin: 0;
        }

        .button {
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s; /* Add a transition for background color */
        }

        .button:hover {
            background-color: #0056b3; /* Change background color on hover */
        }

        .back-button {
            display: block;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s; /* Add a transition for background color */
        }

        .back-button:hover {
            background-color: #0056b3; /* Change background color on hover */
        }

        a {
            text-decoration: none;
            color: #fff;
        }

        label {
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Account Settings</h1>
    </header>

    <div class="container">
        <h2>Update Your Profile Information</h2>

        <form action="update_profile.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br>

            <label for="password">New Password:</label>
            <input type="password" id="password" name="password"><br>

            <label for="confirm_password">Confirm New Password:</label>
            <input type="password" id="confirm_password" name="confirm_password"><br>

            <button class="button">Update Profile</button>
        </form>

        <h2>Change Your Preferences</h2>

        <!-- Add more preferences fields here -->

        <a href="renter.php"><button class="back-button">Back to Previous Page</button></a>
    </div>
</body>
</html>
