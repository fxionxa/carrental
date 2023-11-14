<!-- SJSU CMPE 138 FALL 2023 TEAM9-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style/login.css">
    
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form method="post" action="../routes/process_login.php" onsubmit="redirectAfterLogin();">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br>

            <input type="submit" value="Login">

            <p class="register-link">Do you have an account? <a href="register.php">Register</a></p>
        </form>
    </div>

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

        
        function redirectAfterLogin() {
            const username = document.getElementById("username").value; // Get the entered username
            const password = document.getElementById("password").value; // Get the entered password

            // Hash the password using SHA-256
            sha256(password).then(hashedPassword => {
                // Set the hashed password back into the password field
                document.getElementById("password").value = hashedPassword;

                // Now, you can submit the form with the hashed password
                document.forms[0].submit();
            });
        }
    </script>
</body>
</html>
