<?php
    session_start();
    unset($_SESSION["signup_error"]);
    unset($_SESSION["login_error"]);

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if ((isset($_POST["username"])) && (isset($_POST["email"])) && (isset($_POST["password"]) && (isset($_POST["user_type"])))) {
        require "../../credentials.php";

        $conn = mysqli_connect($host, $user, $pass, $name);

        if (!$conn) { 
            die("Connection failed: " . mysqli_connect_error());
        }

        $username = test_input($_POST["username"]);
        $email = test_input($_POST["email"]);
        $password = test_input($_POST["password"]);
        if($_POST["user_type"] == "renter"){
            $renter = 1;
            $carOwner = 0;
        }
        elseif($_POST["user_type"] == "car_owner"){
            $renter = 0;
            $carOwner = 1;
        }
        else {
            $renter = 1;
            $carOwner = 1;
        }
        

        try {
            $sql = "INSERT INTO users VALUES (NULL, '$username', '$email', '$password', DEFAULT, DEFAULT, DEFAULT, DEFAULT, DEFAULT, '$renter', '$carOwner')";
            $results = mysqli_query($conn, $sql);

            if($results){
                echo "The user has been added successfully.";
                header("Location: ../pages/login.php");
                exit();
            } else{
                $_SESSION["signup_error"] = "Username already taken, ";
                echo mysqli_error($conn);
            }
        }
        catch(Exception $error){
            $_SESSION["signup_error"] = "Username already taken, ";
            echo 'Error: ' . $error->getMessage();
        }

        mysqli_close($conn);
    }

    header("Location: ../pages/register.php");
    exit();
?>