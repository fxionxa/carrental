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

    if ((isset($_POST["listingID"])) && (isset($_POST["startDate"])) && (isset($_POST["endDate"]))) {
        
        require "../../credentials.php";

        $conn = mysqli_connect($host, $user, $pass, $name);

        if (!$conn) { 
            die("Connection failed: " . mysqli_connect_error());
        }

        $listingID = test_input($_POST["listingID"]);
        $startDate = test_input($_POST["startDate"]);
        $endDate = test_input($_POST["endDate"]);
        $uid = $_SESSION["user_id"];


        $sql = "INSERT INTO bookings VALUES(null, $listingID, '$uid', '$startDate', '$endDate')";
        $results = mysqli_query($conn, $sql);

        header('Location: '.$uri.'/carrental/pages/findCar.php');
        exit();    
    }
    header('Location: '.$uri.'/carrental/pages/findCar.php');
    exit();
?>