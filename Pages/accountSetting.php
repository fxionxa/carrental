<!-- SJSU CMPE 138 FALL 2023 TEAM9-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Settings</title>
    <link rel="stylesheet" href="Style/accountSetting.css">
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
