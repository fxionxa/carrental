<!-- SJSU CMPE 138 FALL 2023 TEAM9-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Owner Page</title>
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

        .logout-button {
            background-color: #ff0000;
        }

        .logout-button:hover {
            background-color: #cc0000; /* Change background color on hover for the logout button */
        }

        a {
            text-decoration: none;
            color: #fff;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome, Car Owner!</h1>
    </header>

    <div class="container">
        <h2>Your Car Listings</h2>
        <p>Manage your car listings and rental information.</p>
        <a href="carListing.php"><button class="button">Manage Listings</button></a>

        <h2>Account Settings</h2>
        <p>Update your profile information and preferences.</p>
        <a href="carOwnerACSetting.php"><button class="button">Account Settings</button></a>


        <h2>Logout</h2>
        <p>Click the button below to logout.</p>
        <a href="login.php"><button class="button logout-button">Logout</button></a>
    </div>
</body>
</html>
