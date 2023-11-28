<!-- SJSU CMPE 138 FALL 2023 TEAM9-->
<?php
    session_start();

    unset($_SESSION["listing_error"]);

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if (!isset($_SESSION["user_id"])) {
        header('Location: '.$uri.'/carrental/pages/login.php');
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Listings</title>
<link rel="stylesheet" href="Style/carListing.css">
</head>
<body>
    <header>
        <h1>Car Listings</h1>
    </header>

    <div class="container">
        <h2>Your Listings</h2>
        <?php
            require "../../credentials.php";

            $conn = mysqli_connect($host, $user, $pass, $name);

            if (!$conn) { 
                die("Connection failed: " . mysqli_connect_error());
            }

            $uid = $_SESSION["user_id"];

            $sql = "SELECT * FROM listings WHERE user_id = $uid";
            $result = mysqli_query($conn,$sql);

            if($result) {
                while ($row = $result->fetch_assoc()) {
                    $lisingID = $row["listing_id"];
                    $carID = $row["car_id"];
                    $startDate = $row["ready_start"];
                    $pricePerDay = $row["price_per_day"];
                    
                    echo "
                    <div class='car-listing'>
                    <h3>Listing ID: $lisingID</h3>
                    <p>Car ID: $carID</p>
                    <p>Start Date: $startDate</p>
                    <p>Price Per Day: $$pricePerDay</p>
                    </div>
                    ";
                }
                echo "<a href='addListing.php'><button class='button'>Add Listing</button></a>";
            }
        ?>
    </div>

<div class="container">
    <h2>Your Cars</h2>
    <?php

        $sql2 = "SELECT * FROM cars WHERE owner_id = $uid";
        $result2 = mysqli_query($conn,$sql2);

        if($result2) {
            while ($row2 = $result2->fetch_assoc()) {
                $carID = $row2["car_id"];
                $make = $row2["make"];
                $model = $row2["model"];
                $year = $row2["year"];
                $licensePlate = $row2["license_plate"];
                    
                echo "
                <div class='car-listing'>
                <h3>Car ID: $carID</h3>
                <p>Make: $make</p>
                <p>Model: $model</p>
                <p>Year: $year</p>
                <p>License Plate: $licensePlate</p>
                </div>
                ";
            }
            echo "<a href='addCar.php'><button class='button'>Add Car</button></a>";
        }
    ?>
</div>    

    <div class="container">
        <a href="carOwner.php"><button class="button">Back to Previous Page</button></a>
        </body> 
    </div>   
</html>