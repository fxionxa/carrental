<!-- SJSU CMPE 138 FALL 2023 TEAM9-->
<?php
    session_start();

    unset($_SESSION["listing_error"]);

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if (!isset($_SESSION["user_id"])) {
        header('Location: '.$uri.'/carrental/pages/login.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Users</title>
<link rel="stylesheet" href="Style/manageUsers.css">
</head>
<body>
    <header>
        <h1>Manage Users</h1>
    </header>

    <div class="container">
        <h2>User List</h2>
        <?php
            require "../../credentials.php";

            $conn = mysqli_connect($host, $user, $pass, $name);

            if (!$conn) { 
                die("Connection failed: " . mysqli_connect_error());
            }

            $uid = $_SESSION["user_id"];
            $sql = "SELECT * FROM users";
            $result = mysqli_query($conn,$sql);

            if($result) {
                while ($row = $result->fetch_assoc()) {
                    $userID = $row["user_id"];
                    $username = $row["username"];
                    $email = $row["email"];
                    
                    echo "
                    <table>
                        <thread>
                            <tr>
                                <th>User ID</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>$userID</td>
                                <td>$username</td>
                                <td>$email</td>
                                <td>
                                    <button class='button' onclick='editUser(1)'>Edit</button>
                                    <button class='button' onclick='deleteUser(1)'>Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>                                    
                ";
                }
            }
        ?>
        
        <!-- Back to Previous Page Button -->
    </div>
    
    <div class="container">
    <a href="admin.php"><button class="button">Back to Previous Page</button></a>
    </div>
</body>
</html>
