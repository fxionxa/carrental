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
        <form action="javascript:void(0);" onsubmit="redirectAfterLogin();">
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

            // You should implement logic to verify the credentials
            // Here, we assume "admin" is an admin account, and others are user accounts
            if (username === "admin" && password === "adminpassword") {
                window.location.href = 'admin.php'; // Redirect to the admin page
            } else if (username === "renter" && password === "renterpassword") {
                window.location.href = 'renter.php'; // Redirect to the renter page
            } else if (username === "carowner" && password === "carownerpassword") {
                window.location.href = 'carowner.php'; // Redirect to the car owner page
            } else {
                // Handle invalid credentials or other cases
                alert("Invalid login credentials. Please try again.");
            }
        }
    </script>
</body>
</html>
