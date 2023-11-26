<!-- SJSU CMPE 138 FALL 2023 TEAM9-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Car</title>
    <link rel="stylesheet" href="Style/carListing.css">
</head>
<body>
    <header>
        <h1>Add Car</h1>
    </header>

    <div class="header">
        <img src="flexwheelzlogo.png" alt="Flex Wheelz Logo" class="logo">
    </div>

    <div class="container">
        <h2>Add An New Car</h2>



        <form action="../routes/process_addCar.php" method="POST" id="addCarForm">
            <div>
                <label for="make">Make:</label>
                <input type="text" id="make" name="make" required>
            </div>
            <div>
                <label for="model">Model:</label>
                <input type="text" id="model" name="model" required>
            </div>
            <div>
                <label for="year">Year:</label>
                <input type="number" id="year" name="year" required>
            </div>
            <div>
                <label for="licensePlate">License Plate:</label>
                <input type="text" id="licensePlate" name="licensePlate" required>
            </div>
            <button type="submit" class="button">Add Car</button>
        </form>

        <a href="carListing.php"><button class="button">Back to Car Listings</button></a>
    </div>
</body>
</html>
