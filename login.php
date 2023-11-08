<!-- SJSU CMPE 138 FALL 2023 TEAM9-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
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
            max-width: 300px;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        h2 {
            color: #333;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            transition: background-color 0.3s; /* Add a transition for background color */
        }

        input[type="submit"]:hover {
            background-color: #0056b3; /* Change background color on hover */
        }

        .register-link {
            margin-top: 10px;
        }
    </style>
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

            <p class="register-link">Do you have an account? <a href="register.html">Register</a></p>
        </form>
    </div>

    <script>
        function redirectAfterLogin() {
            const username = document.getElementById("username").value; // Get the entered username
            const password = document.getElementById("password").value; // Get the entered password

            // You should implement logic to verify the credentials
            // Here, we assume "admin" is an admin account, and others are user accounts
            if (username === "admin" && password === "adminpassword") {
                window.location.href = 'admin.html'; // Redirect to the admin page
            } else if (username === "renter" && password === "renterpassword") {
                window.location.href = 'renter.html'; // Redirect to the renter page
            } else if (username === "carowner" && password === "carownerpassword") {
                window.location.href = 'carowner.html'; // Redirect to the car owner page
            } else {
                // Handle invalid credentials or other cases
                alert("Invalid login credentials. Please try again.");
            }
        }
    </script>
</body>
</html>
