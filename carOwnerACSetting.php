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

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
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
    </style>
</head>
<body>
    <header>
        <h1>Account Settings</h1>
    </header>

    <div class="container">
        <h2>Update Profile Information</h2>
        <form action="javascript:void(0);" onsubmit="updateProfile();">
            <div class="form-group">
                <label for="ownerName">Owner Name:</label>
                <input type="text" id="ownerName" name="ownerName" required>
            </div>

            <div class "form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="password">New Password:</label>
                <input type="password" id="password" name="password" required>
            </div>

            <div class="form-group">
                <label for="confirmPassword">Confirm Password:</label>
                <input type="password" id="confirmPassword" name="confirmPassword" required>
            </div>

            <input type="submit" class="button" value="Update Profile">
        </form>

        <h2>Update Preferences</h2>
        <form action="javascript:void(0);" onsubmit="updatePreferences();">
            <div class="form-group">
                <label for="carType">Preferred Car Type:</label>
                <input type="text" id="carType" name="carType">
            </div>

            <div class="form-group">
                <label for="location">Preferred Location:</label>
                <input type="text" id="location" name="location">
            </div>

            <input type="submit" class="button" value="Update Preferences">
        </form>
        
        <!-- Add a space here -->
        <div style="margin-bottom: 20px;"></div>
        
        <a href="carOwner.html"><button class="back-button">Back to Previous Page</button></a>
    </div>

    <script>
        function updateProfile() {
            // Handle updating profile information here
            alert("Profile information updated!");
        }

        function updatePreferences() {
            // Handle updating preferences here
            alert("Preferences updated!");
        }
    </script>
</body>
</html>
