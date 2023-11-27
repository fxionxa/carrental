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
    <title>Find a Car to Rent</title>
<link rel="stylesheet" href="Style/renter.css">
</head>
<body>
    <header>
        <h1>Find a Car to Rent</h1>
    </header>

    <div class="container">
        <h2>Available Cars</h2>
        <?php
            require "../../credentials.php";

            $conn = mysqli_connect($host, $user, $pass, $name);

            if (!$conn) { 
                die("Connection failed: " . mysqli_connect_error());
            }

            $uid = $_SESSION["user_id"];
            $sql = "SELECT cars.*, listings.price_per_day, listings.listing_id, listings.is_available FROM cars, listings WHERE cars.car_id = listings.car_id";
            $result = mysqli_query($conn,$sql);

            if($result) {
                while ($row = $result->fetch_assoc()) {
                    if($row["is_available"] == 1){
                        $listingID = $row["listing_id"];
                        $make = $row["make"];
                        $model = $row["model"];
                        $year = $row["year"];
                        $pricePerDay = $row["price_per_day"];

                        echo "
                        <div class='car-listing'>
                        <h3>Listing ID: $listingID</h3>
                        <p>Make: $make</p>
                        <p>Model: $model</p>
                        <p>Year: $year</p>
                        <p>Price Per Day: $$pricePerDay</p>
                        </div>
                    ";
                    }
                }
            }
        ?>
        <br>
        
    </div>
    <div class="container">
        <a href="booking.php"><button class="button">Book A Car</button></a> <a href="renter.php"><button class="button">Back to Previous Page</button></a>
    </div>
</body>
</html>
