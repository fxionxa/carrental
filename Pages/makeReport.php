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
        <h1>Make A Report</h1>
    </header>

    <div class="header">
        <img src="flexwheelzlogo.png" alt="Flex Wheelz Logo" class="logo">
    </div>

    <div class="container">
        <h2>Make A Report</h2>



        <form action="../routes/process_makeReport.php" method="POST" id="addCarForm">
            <div>
                <label for="listingID">Listing ID:</label>
                <input type="text" id="listingID" name="listingID" required>
            </div>
            <br>
            <div>
                <label for="incidentType">Incident Type:</label>
                <input type="text" id="incidentType" name="incidentType" required>
            </div>
            <br>
            <div>
                <label for="incidentDate">Incident Date:</label>
                <input type="date" id="incidentDate" name="incidentDate" required>
            </div>
            <br>
            <div>
                <label for="incidentLocation">Incident Location:</label>
                <input type="text" id="incidentLocation" name="incidentLocation" required>
            </div>
            <br>
            <div>
                <label for="coverage">Coverage:</label>
                <input type="text" id="coverage" name="coverage" required>
            </div>
            <br>
            <div>
                <label for="involvedParties">Involved Parties:</label>
                <input type="text" id="involvedParties" name="involvedParties" required>
            </div>
            <br>
            <div>
                <label for="incidentDescription">Incident Description:</label>
                <br>
                <textarea id="incidentDescription" name="incidentDescription" rows="4" cols="50" required></textarea>
            </div>
            <br>
            <button type="submit" class="button">Report</button>
        </form>
    </div>
    
    <div class="container">
        <a href="renter.php"><button class="button">Back to Previous Page</button></a>
    </div>
</body>
</html>
