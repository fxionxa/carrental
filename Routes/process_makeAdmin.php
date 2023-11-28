<?php
    session_start();

    unset($_SESSION["add_error"]);

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

    if ((isset($_POST["userID"]))){
        
        require "../../credentials.php";

        $conn = mysqli_connect($host, $user, $pass, $name);

        if (!$conn) { 
            die("Connection failed: " . mysqli_connect_error());
        }

        $userID = test_input($_POST["userID"]);

        $sql = "UPDATE users SET user_type = 'admin' WHERE user_id = $userID";
        $results = mysqli_query($conn, $sql);

        header('Location: '.$uri.'/carrental/pages/manageUsers.php');
        exit();    
    }
    header('Location: '.$uri.'/carrental/pages/manageUsers.php');
    exit();
?>