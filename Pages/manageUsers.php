<!-- SJSU CMPE 138 FALL 2023 TEAM9-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Users</title>
<link rel="stylesheet" href="manageUsers.css">
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
        <a href="admin.php">
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
