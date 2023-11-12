<!-- SJSU CMPE 138 FALL 2023 TEAM9-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Listings</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #007BFF;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        h1 {
            margin: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        h2 {
            color: #333;
        }

        p {
            margin: 0;
        }

        .car-listing {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin: 10px 0;
        }

        .button {
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s; /* Add a transition for background color */
        }

        .button:hover {
            background-color: #0056b3; /* Change background color on hover */
        }

        .back-button {
            display: block;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s; /* Add a transition for background color */
        }

        .back-button:hover {
            background-color: #0056b3; /* Change background color on hover */
        }

        .delete-button {
            background-color: #ff0000;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 5px 10px;
            cursor: pointer;
            transition: background-color 0.3s; /* Add a transition for background color */
        }

        .delete-button:hover {
            background-color: #cc0000; /* Change background color on hover for delete button */
        }

        a {
            text-decoration: none;
            color: #fff;
        }
    </style>
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
