<!-- SJSU CMPE 138 FALL 2023 TEAM9-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Car</title>
    <link rel="stylesheet" href="Style/renter.css">
</head>
<body>
    <header>
        <h1>Write A Review</h1>
    </header>

    <div class="header">
        <img src="flexwheelzlogo.png" alt="Flex Wheelz Logo" class="logo">
    </div>

    <div class="container">
        <h2>Write A Review</h2>



        <form action="../routes/process_writeReview.php" method="POST" id="addCarForm">
            <div>
                <label for="listingID">Listing ID:</label>
                <input type="text" id="listingID" name="listingID" required>
            </div>
            <br>
            <div>
                <label for="rating">Rating:</label>
                <input type="number" id="rating" name="rating" max = "10" required>
            </div>
            <br>
            <div>
                <label for="comment">Comment:</label>
                <br>
                <textarea id="comment" name="comment" rows="4" cols="50"></textarea>
            </div>
            <br>
            <button type="submit" class="button">Submit</button>
        </form>
    </div>
    
    <div class="container">
        <a href="renter.php"><button class="button">Back to Previous Page</button></a>
    </div>
</body>
</html>
