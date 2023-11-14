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

        mysqli_close($conn);
    }
?>