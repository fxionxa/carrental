<!-- SJSU CMPE 138 FALL 2023 TEAM9-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Settings</title>
    <link rel="stylesheet" href="Style/accountSetting.css">
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

        function hashPasswordAndSubmit() {
            event.preventDefault(); // Prevent the form from submitting

            const username = document.getElementById("username").value;
            const email = document.getElementById("email").value;
            const password = document.getElementById("password").value;
            const cpassword = document.getElementById("confirm_password").value;

            // Hash the password using SHA-256
            sha256(password).then(hashedPassword => {
                // Set the hashed password back into the password field
                document.getElementById("password").value = hashedPassword;

                // Now, you can submit the form with the hashed password
                document.forms[0].submit();
            });

            sha256(cpassword).then(chashedPassword => {
                // Set the hashed password back into the password field
                document.getElementById("confirm_password").value = chashedPassword;

                // Now, you can submit the form with the hashed password
                document.forms[0].submit();
            });
        }
    </script>
</head>
<body>
    <header>
        <h1>Account Settings</h1>
    </header>
    <br>

    <div class="header">
        <img src="flexwheelzlogo.png" alt="Flex Wheelz Logo" class="logo">
    </div>

    <div class="container">
        <h2>Update Your Profile Information</h2>

        <form action="../routes/process_carOwnerACSetting.php" method="POST" onsubmit="hashPasswordAndSubmit();">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br>

            <label for="password">New Password:</label>
            <input type="password" id="password" name="password" required><br>

            <label for="confirm_password">Confirm New Password:</label>
            <input type="password" id="confirm_password" name="confirm_password" required><br>
            <br>
            <button class="button">Update Profile</button>
        </form> 
        </div>       
    </div>
    <div class="container">
        <a href="carOwner.php"><button class="button">Back to Previous Page</button></a>
    </div>
</body>
</html>
