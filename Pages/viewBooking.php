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
    <title>View Bookings</title>
<link rel="stylesheet" href="Style/renter.css">
</head>
<body>
    <header>
        <h1>View Bookings</h1>
    </header>

    <div class="header">
        <img src="flexwheelzlogo.png" alt="Flex Wheelz Logo" class="logo">
    </div>

    <div class="container">
        <h2>Your Bookings</h2>
        <p>View and manage your upcoming and past bookings.</p>

        <?php
            require "../../credentials.php";

            $conn = mysqli_connect($host, $user, $pass, $name);

            if (!$conn) { 
                die("Connection failed: " . mysqli_connect_error());
            }

            $uid = $_SESSION["user_id"];
            $sql = "SELECT * FROM bookings WHERE renter_id = $uid";
            $result = mysqli_query($conn,$sql);

            if($result) {
                while ($row = $result->fetch_assoc()) {
                    
                    $requestID = $row["request_id"];
                    $listingID = $row["listing_id"];
                    $startDate = $row["start_date"];
                    $endDate = $row["end_date"];

                    echo "
                    <div class='car-listing'>
                    <h3>Request ID: $requestID</h3>
                    <p>Listing ID: $listingID</p>
                    <p>Start Date: $startDate</p>
                    <p>End Date: $endDate</p>
                    </div>
                ";   
                }
            }
        ?>
    </div>
    <div class="container">
        <a href="renter.php"><button class="button">Back to Previous Page</button></a>
    </div>
</body>
</html>
