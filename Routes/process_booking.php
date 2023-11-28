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

    mysqli_autocommit($conn, false); // Turn off autocommit to start a transaction

    $listingID = test_input($_POST["listingID"]);
    $startDate = test_input($_POST["startDate"]);
    $endDate = test_input($_POST["endDate"]);
    $uid = $_SESSION["user_id"];

    $success = true;

    // begin a transaction
    mysqli_begin_transaction($conn);

    $sql1 = "INSERT INTO bookings VALUES(null, $listingID, '$uid', '$startDate', '$endDate')";
    $result1 = mysqli_query($conn, $sql1);

    if (!$result1) {
        $success = false;
    }


    if ($success) {
        mysqli_commit($conn); // commit on success
        header('Location: '.$uri.'/carrental/pages/findCar.php');
        exit();
    } else {
        mysqli_rollback($conn); // rollback on failure
        header('Location: '.$uri.'/carrental/pages/error.php');
        exit();
    }
}
header('Location: '.$uri.'/carrental/pages/findCar.php');
exit();

?>