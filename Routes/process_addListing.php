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

    if ((isset($_POST["carID"])) && (isset($_POST["startDate"])) && (isset($_POST["pricePerDay"]))) {
        
        require "../../credentials.php";

        $conn = mysqli_connect($host, $user, $pass, $name);

        if (!$conn) { 
            die("Connection failed: " . mysqli_connect_error());
        }

        $carID = test_input($_POST["carID"]);
        $startDate = test_input($_POST["startDate"]);
        $pricePerDay = test_input($_POST["pricePerDay"]);
        $uid = $_SESSION["user_id"];

        $sql = "INSERT INTO listings VALUES(null, $carID, '$startDate', '$pricePerDay', DEFAULT, $uid)";
        $results = mysqli_query($conn, $sql);

        header('Location: '.$uri.'/carrental/pages/carListing.php');
        exit();    
    }
    header('Location: '.$uri.'/carrental/pages/carListing.php');
    exit();
?>