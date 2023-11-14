<!-- SJSU CMPE 138 FALL 2023 TEAM9-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Listings</title>
<link rel="stylesheet" href="carListing.css">
</head>
<body>
    <header>
        <h1>Car Listings</h1>
    </header>

    <div class="container">
        <h2>Car Listings</h2>
        <p>Here are some available cars for rent:</p>

        <!-- Car Listing with Delete Button -->
        <div class="car-listing">
            <h3>Car 1</h3>
            <p>Make: Toyota</p>
            <p>Model: Camry</p>
            <p>Year: 2022</p>
            <p>License Plate: ABC 123</p>
            <button class="delete-button" onclick="deleteCar(1)">Delete</button>
        </div>

        <!-- Car Listing with Delete Button -->
        <div class="car-listing">
            <h3>Car 2</h3>
            <p>Make: Honda</p>
            <p>Model: Accord</p>
            <p>Year: 2021</p>
            <p>License Plate: XYZ 789</p>
            <button class="delete-button" onclick="deleteCar(2)">Delete</button>
        </div>

        <!-- Add more car listings as needed -->

        <a href="carOwner.php"><button class="button">Back to Previous Page</button></a>
    </div>

    <script>
        // Function to simulate deleting a car (placeholder, you would need a real backend for this)
        function deleteCar(carId) {
            // You can remove the car listing from the page here
            alert(`Car with ID ${carId} has been deleted.`);
        }
    </script>
</body>
</html>
