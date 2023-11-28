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
echo "yes";
    if ((isset($_POST["listingID"])) && (isset($_POST["rating"])) && (isset($_POST["comment"]))) {
        
        require "../../credentials.php";

        $conn = mysqli_connect($host, $user, $pass, $name);

        if (!$conn) { 
            die("Connection failed: " . mysqli_connect_error());
        }

        $listingID = test_input($_POST["listingID"]);
        $rating = test_input($_POST["rating"]);
        $comment = test_input($_POST["comment"]);
        $uid = $_SESSION["user_id"];

        $sql = "INSERT INTO reviews VALUES(null, $listingID, $uid, $rating, '$comment')";
        $results = mysqli_query($conn, $sql);

        header('Location: '.$uri.'/carrental/pages/writeReview.php');
        exit();    
    }
    header('Location: '.$uri.'/carrental/pages/writeReview.php');
    exit();
?>