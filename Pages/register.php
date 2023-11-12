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
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            width: 100%;
            max-width: 400px;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        h2 {
            color: #333;
        }

        input[type="text"],
        input[type="password"],
        input[type="email"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="radio"] {
            margin: 5px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        
        input[type="submit"]:hover {
            background-color: #0056b3; /* Change background color on hover */
            transform: scale(1.05); /* Scale the button on hover */
        }
        
        .go-back-link {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Registration</h2>
        <form method= "post" action="../routes/process_register.php" onsubmit="hashPasswordAndSubmit(event);">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br>

            <label>Renter/Car Owner?</label><br>
            <input type="radio" id="renter" name="user_type" value="renter" required>
            <label for="renter">Renter</label>
            <input type="radio" id="car_owner" name="user_type" value="car_owner" required>
            <label for="car_owner">Car Owner</label>
            <input type="radio" id="both" name="user_type" value="both" required>
            <label for="both">Both</label><br>

            <input type="submit" value="Register">
        </form>

        <p class="go-back-link"><a href="login.php">Go Back to Login Page</a></p>
    </div>
</body>
</html>
