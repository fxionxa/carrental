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

    if ((isset($_POST["listingID"])) && (isset($_POST["incidentType"])) && (isset($_POST["incidentDate"])) && (isset($_POST["incidentLocation"])) && (isset($_POST["coverage"])) && (isset($_POST["involvedParties"])) && (isset($_POST["incidentDescription"]))) {
        
        require "../../credentials.php";

        $conn = mysqli_connect($host, $user, $pass, $name);

        if (!$conn) { 
            die("Connection failed: " . mysqli_connect_error());
        }

        $listingID = test_input($_POST["listingID"]);
        $incidentType = test_input($_POST["incidentType"]);
        $incidentDate = test_input($_POST["incidentDate"]);
        $incidentLocation = test_input($_POST["incidentLocation"]);
        $coverage = test_input($_POST["coverage"]);
        $involvedParties = test_input($_POST["involvedParties"]);
        $incidentDescription = test_input($_POST["incidentDescription"]);
        $uid = $_SESSION["user_id"];

        $sql = "INSERT INTO incidents VALUES(null, $uid, $listingID, '$incidentType', '$incidentDate', '$incidentLocation', '$incidentDescription', '$coverage', '$involvedParties')";
        $results = mysqli_query($conn, $sql);

        header('Location: '.$uri.'/carrental/pages/makeReport.php');
        exit();    
    }
    header('Location: '.$uri.'/carrental/pages/makeReport.php');
    exit();
?>