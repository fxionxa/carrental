<?php
    session_start();

    unset($_SESSION["update_error"]);

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if (!isset($_SESSION["user_id"])) {
        header('Location: '.$uri.'/carrental/pages/login.php');
        exit;
    }

    if ((isset($_POST["username"])) && (isset($_POST["email"])) && (isset($_POST["password"])) && (isset($_POST["confirm_password"]))) {
        if(($_POST["password"]) == ($_POST["confirm_password"])) {
            require "../../credentials.php";

            $conn = mysqli_connect($host, $user, $pass, $name);

            if (!$conn) { 
                die("Connection failed: " . mysqli_connect_error());
            }

            $username = test_input($_POST["username"]);
            $email = test_input($_POST["email"]);
            $password = test_input($_POST["password"]);
            $uid = $_SESSION["user_id"];


            $sql = "UPDATE users SET username = '$username', email = '$email', password = '$password' WHERE user_id = $uid";
            $results = mysqli_query($conn, $sql);

            header('Location: '.$uri.'/carrental/pages/carOwnerACSetting.php');
            exit;    
        }
        else {
            $_SESSION["update_error"] = "Passwords do not match";
            header('Location: '.$uri.'/carrental/pages/carOwnerACSetting.php');
        }
    }
    header('Location: '.$uri.'/carrental/pages/carOwnerACSetting.php');
    exit();
?>