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
    <title>Add Listing</title>
<link rel="stylesheet" href="Style/carListing.css">
</head>
<body>
    <header>
        <h1>Add Listing</h1>
    </header>

    <div class="container">
        <h2>Add Listing</h2>
        
        <form action="../routes/process_addListing.php" method="POST" id="addCarForm">
            <div>
                <label for="carID">Car ID:</label>
                <input type="text" id="carID" name="carID" required>
            </div>
            <div>
                <label for="startDate">Start Date:</label>
                <input type="date" id="startDate" name="startDate" required>
            </div>
            <div>
                <label for="pricePerDay">Price Per Day:</label>
                <input type="decimal" id="pricePerDay" name="pricePerDay" required>
            </div>
            <button type="submit" class="button">Add Listing</button>
        </form> 
        <a href="carListing.php"><button class="button">Back to Car Listings</button></a>
    </div>
</body>
</html>
