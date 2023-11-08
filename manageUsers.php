<!-- SJSU CMPE 138 FALL 2023 TEAM9-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Users</title>
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

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #007BFF;
            color: #fff;
        }

        .button {
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <header>
        <h1>Manage Users</h1>
    </header>

    <div class="container">
        <h2>User List</h2>
        <table>
            <thead>
                <tr>
                    <th>User ID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>User1</td>
                    <td>user1@example.com</td>
                    <td>
                        <button class="button" onclick="editUser(1)">Edit</button>
                        <button class="button" onclick="deleteUser(1)">Delete</button>
                        <button class="button" onclick="resetPassword(1)">Reset Password</button>
                        <button class="button" onclick="refundUser(1)">Refund</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>User2</td>
                    <td>user2@example.com</td>
                    <td>
                        <button class="button" onclick="editUser(2)">Edit</button>
                        <button class="button" onclick="deleteUser(2)">Delete</button>
                        <button class="button" onclick="resetPassword(2)">Reset Password</button>
                        <button class="button" onclick="refundUser(2)">Refund</button>
                    </td>
                </tr>
                <!-- Add more user rows as needed -->
            </tbody>
        </table>
        
        <!-- Back to Previous Page Button -->
        <a href="admin.html">
            <button class="button">Back to Previous Page</button>
        </a>
    </div>

    <script>
        function editUser(userId) {
            // Handle editing user with ID userId
            alert(`Edit user with ID ${userId}`);
        }

        function deleteUser(userId) {
            // Handle deleting user with ID userId
            alert(`Delete user with ID ${userId}`);
        }

        function resetPassword(userId) {
            // Handle resetting the password for user with ID userId
            alert(`Reset password for user with ID ${userId}`);
        }

        function refundUser(userId) {
            // Handle refunding user with ID userId
            alert(`Refund user with ID ${userId}`);
        }
    </script>
</body>
</html>
