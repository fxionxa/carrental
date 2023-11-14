<?php
    session_start();

    unset($_SESSION["login_error"]);

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    if ((isset($_POST["username"])) && (isset($_POST["password"]))) {
        require "../../credentials.php";
        $conn = mysqli_connect($host, $user, $pass, $name);

        if (!$conn) { 
            die("Connection failed: " . mysqli_connect_error());
        }

        $username = test_input($_POST["username"]);
        $password = test_input($_POST["password"]);

        $sql = "SELECT user_id, password, user_type FROM users WHERE username = '$username'";
        $results = mysqli_query($conn, $sql);

        if($results) {
            $row = mysqli_fetch_assoc($results);

            if ($row["password"] == $password) {
                $_SESSION["username"] = $username;
                $_SESSION["user_id"] = $row["user_id"];

                if ($row["user_type"] == "renter"){
                    $_SESSION["user_type"] = "renter";
                    header("Location: ../pages/renter.php");
                    exit();
                } elseif ($row["user_type"] == "owner"){
                    $_SESSION["user_type"] = "owner";
                    header("Location: ../pages/carowner.php");
                    exit();
                } elseif ($row["user_type"] == "admin"){
                    $_SESSION["user_type"] = "admin";
                    header("Location: ../pages/admin.php");
                    exit();
                }
            }
        }

        mysqli_close($conn);
    }
?>