<!-- SJSU CMPE 138 FALL 2023 TEAM9-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Bookings</title>
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

        a {
            text-decoration: none;
            color: #fff;
        }
    </style>
</head>
<body>
    <header>
        <h1>View Bookings</h1>
    </header>

    <div class="container">
        <h2>Your Bookings</h2>
        <p>View and manage your upcoming and past bookings.</p>
        <!-- (Bookings content here) -->
        
        <!-- The booking data should be from the database-->
        
        
        <!-- Add a "Back to Previous Page" link -->
        <a href="renter.html"><button class="back-button">Back to Previous Page</button></a>
    </div>
</body>
</html>
