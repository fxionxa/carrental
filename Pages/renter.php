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
    <title>Renter Home Page</title>
<link rel="stylesheet" href="Style/renter.css">
</head>
<body>
    <header>
        <h1>Welcome, Renter!</h1>
    </header>

    <div class="header">
        <img src="flexwheelzlogo.png" alt="Flex Wheelz Logo" class="logo">
    </div>

    <div class="container">
        <h2>Find a Car to Rent</h2>
        <p>Search for available cars in your area and book them for your trips.</p>
        <a href="findCar.php"><button class="button">Search for Cars</button></a>

        <h2>Your Bookings</h2>
        <p>View and manage your upcoming and past bookings.</p>
        <a href="viewBooking.php"><button class="button">View Bookings</button></a>

        <h2>Account Settings</h2>
        <p>Update your profile information and preferences.</p>
        <a href="accountSetting.php"><button class="button">Account Settings</button></a>

        <h2>Logout</h2>
        <p>Click the button below to logout.</p>
        <a href="../routes/process_logout.php"><button class="button logout-button">Logout</button></a>
    </div>
</body>
</html>
