<!-- SJSU CMPE 138 FALL 2023 TEAM9-->
<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" href="style/register.css">
    <script>
        // SHA-256 hashing function
        function sha256(plain) {
            const encoder = new TextEncoder();
            const data = encoder.encode(plain);
            return window.crypto.subtle.digest('SHA-256', data).then(buffer => {
                let hashArray = Array.from(new Uint8Array(buffer));
                let hashHex = hashArray.map(byte => byte.toString(16).padStart(2, '0')).join('');
                return hashHex;
            });
        }

        function hashPasswordAndSubmit(event) {
            event.preventDefault(); // Prevent the form from submitting

            const username = document.getElementById("username").value;
            const email = document.getElementById("email").value;
            const password = document.getElementById("password").value;
            const firstName = document.getElementById("first_name").value;
            const lastName = document.getElementById("last_name").value;
            const phoneNumber = document.getElementById("phone_number").value;
            const address = document.getElementById("address").value;
            const userType = document.querySelector('input[name="user_type"]:checked').value;

            // Hash the password using SHA-256
            sha256(password).then(hashedPassword => {
                // Set the hashed password back into the password field
                document.getElementById("password").value = hashedPassword;

                // Now, you can submit the form with the hashed password
                document.forms[0].submit();
            });
        }
    </script>
</head>
<body>
    <div class="container">
        <h2>Registration</h2>
        <form method="post" action="../routes/process_register.php" onsubmit="hashPasswordAndSubmit(event);">
            <label for="first_name">First Name:</label>
            <input type="text" id="first_name" name="first_name" required>

            <label for="last_name">Last Name:</label>
            <input type="text" id="last_name" name="last_name" required>

            <label for="phone_number">Phone Number:</label>
            <input type="tel" id="phone_number" name="phone_number" required>

            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required>

            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <label>Renter/Car Owner?</label>
            <div class="radio-group">
                <input type="radio" id="renter" name="user_type" value="renter" required>
                <label for="renter">Renter</label>

                <input type="radio" id="car_owner" name="user_type" value="car_owner" required>
                <label for="car_owner">Car Owner</label><br>
            </div>

            <input type="submit" value="Register">
        </form>

        <p class="go-back-link"><a href="login.php">Go Back to Login Page</a></p>
    </div>
</body>
</html>
