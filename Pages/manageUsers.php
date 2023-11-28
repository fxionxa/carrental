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
    <div class="header">
        <img src="flexwheelzlogo.png" alt="Flex Wheelz Logo" class="logo">
    </div>

    <div class="container">
        <h2>Renters</h2>
        <?php
            require "../../credentials.php";

            $conn = mysqli_connect($host, $user, $pass, $name);

            if (!$conn) { 
                die("Connection failed: " . mysqli_connect_error());
            }

            $uid = $_SESSION["user_id"];
            $sql = "SELECT * FROM users WHERE user_type = 'renter'";
            $result = mysqli_query($conn,$sql);

            if($result) {
                echo "
                    <table>
                        <thread>
                            <tr>
                                <th>User ID</th>
                                <th>Username</th>
                                <th>Email</th>
                            </tr>
                        </thead>";
                while ($row = $result->fetch_assoc()) {
                    $userID = $row["user_id"];
                    $username = $row["username"];
                    $email = $row["email"];
                    
                    echo "
                        <tbody>
                            <tr>
                                <td>$userID</td>
                                <td>$username</td>
                                <td>$email</td>
                            </tr>
                        </tbody>                                    
                ";
                }
                echo "</table>";
            }
        ?>
        <form method="POST" id="manageUsers">
            <br>
            <div>
                <label for="userID">Renter ID:</label>
                <input type="text" id="userID" name="userID" required> 
                <button formaction="../routes/process_makeAdmin.php" type="submit" class="button">Make Admin</button> <button formaction="../routes/process_deleteUser.php" type="submit" class="button delete-button">Delete User</button>
            </div>
        </form>
    </div>

    <div class="container">
        <h2>Owners</h2>
        <?php
            $sql = "SELECT * FROM users WHERE user_type = 'owner'";
            $result = mysqli_query($conn,$sql);

            if($result) {
                echo "
                    <table>
                        <thread>
                            <tr>
                                <th>User ID</th>
                                <th>Username</th>
                                <th>Email</th>
                            </tr>
                        </thead>";
                while ($row = $result->fetch_assoc()) {
                    $userID = $row["user_id"];
                    $username = $row["username"];
                    $email = $row["email"];
                    
                    echo "
                        <tbody>
                            <tr>
                                <td>$userID</td>
                                <td>$username</td>
                                <td>$email</td>
                            </tr>
                        </tbody>                                    
                ";
                }
                echo "</table>";
            }
        ?>
        <form method="POST" id="manageUsers">
            <br>
            <div>
                <label for="userID">Owner ID:</label>
                <input type="text" id="userID" name="userID" required> 
                <button formaction="../routes/process_makeAdmin.php" type="submit" class="button">Make Admin</button> <button formaction="../routes/process_deleteUser.php" type="submit" class="button delete-button">Delete User</button>
            </div>
        </form>
        
        <!-- Back to Previous Page Button -->
    </div>

    <div class="container">
        <h2>Admins</h2>
        <?php
            $sql = "SELECT * FROM users WHERE user_type = 'admin'";
            $result = mysqli_query($conn,$sql);

            if($result) {
                echo "
                    <table>
                        <thread>
                            <tr>
                                <th>User ID</th>
                                <th>Username</th>
                                <th>Email</th>
                            </tr>
                        </thead>"
                ;
                while ($row = $result->fetch_assoc()) {
                    $userID = $row["user_id"];
                    $username = $row["username"];
                    $email = $row["email"];
                    
                    echo "
                        <tbody>
                            <tr>
                                <td>$userID</td>
                                <td>$username</td>
                                <td>$email</td>
                            </tr>
                        </tbody>                                    
                ";
                }
                echo "</table>";
            }
        ?>
        <form method="POST" id="manageUsers">
            <br>
            <div>
                <label for="userID">Admin ID:</label>
                <input type="text" id="userID" name="userID" required> 
                <button formaction="../routes/process_deleteUser.php" type="submit" class="button delete-button">Delete User</button>
            </div>
        </form>
        <!-- Back to Previous Page Button -->
    </div>

    <div class="container">
    <a href="admin.php"><button class="button">Back to Previous Page</button></a>
    </div>
</body>
</html>
