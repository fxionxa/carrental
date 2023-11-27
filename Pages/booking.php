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
    <title>Book Car</title>
    <link rel="stylesheet" href="Style/renter.css">
</head>
<body>
    <header>
        <h1>Book Car</h1>
    </header>

    <div class="header">
        <img src="flexwheelzlogo.png" alt="Flex Wheelz Logo" class="logo">
    </div>

    <div class="container">
        <h2>Book Car</h2>



        <form action="../routes/process_booking.php" method="POST" id="addCarForm">
            <div>
                <label for="listingID">Listing ID:</label>
                <input type="number" id="listingID" name="listingID" required>
            </div>
            <br>
            <div>
                <label for="startDate">Start Date:</label>
                <input type="date" id="startDate" name="startDate" required>
            </div>
            <br>
            <div>
                <label for="endDate">End Date:</label>
                <input type="date" id="endDate" name="endDate" required>
            </div>
            <br>
            <button type="submit" class="button">Book Car</button> 
        </form>
    </div>

    <div class="container">
        <a href="findCar.php"><button class="button">Back to Cars</button></a>
    </div>
</body>
</html>
