<!-- SJSU CMPE 138 FALL 2023 TEAM9-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Settings</title>
<link rel="stylesheet" href="carOwnerACSetting.css">
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
        
        <a href="carOwner.php"><button class="back-button">Back to Previous Page</button></a>
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
