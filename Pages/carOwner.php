<!-- SJSU CMPE 138 FALL 2023 TEAM9-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Owner Page</title>
<link rel="stylesheet" href="Style/carOwner.css">

</head>
<body>

    <header>
        <h1>Welcome, Car Owner!</h1>
    </header>

    <div class="header">
        <img src="flexwheelzlogo.png" alt="Flex Wheelz Logo" class="logo">
    </div>

    <div class="container">
        <h2>Your Car Listings</h2>
        <p>Manage your car listings and rental information.</p>
        <a href="carListing.php"><button class="button">Manage Listings</button></a>

        <h2>Account Settings</h2>
        <p>Update your profile information and preferences.</p>
        <a href="carOwnerACSetting.php"><button class="button">Account Settings</button></a>


        <h2>Logout</h2>
        <p>Click the button below to logout.</p>
        <a href="../routes/process_logout.php"><button class="button logout-button">Logout</button></a>
    </div>
</body>
</html>
