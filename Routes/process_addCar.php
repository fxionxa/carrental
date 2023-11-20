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

    if ((isset($_POST["make"])) && (isset($_POST["model"])) && (isset($_POST["year"])) && (isset($_POST["licensePlate"]))) {
        
        require "../../credentials.php";

        $conn = mysqli_connect($host, $user, $pass, $name);

        if (!$conn) { 
            die("Connection failed: " . mysqli_connect_error());
        }

        $make = test_input($_POST["make"]);
        $model = test_input($_POST["model"]);
        $year = test_input($_POST["year"]);
        $licensePlate = test_input($_POST["licensePlate"]);
        $uid = $_SESSION["user_id"];


        $sql = "INSERT INTO cars VALUES(null, $uid, '$make', '$model', $year, '$licensePlate')";
        $results = mysqli_query($conn, $sql);

        header('Location: '.$uri.'/carrental/pages/addCar.php');
        exit();    
    }
    header('Location: '.$uri.'/carrental/pages/addCar.php');
    exit();
?>