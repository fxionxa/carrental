<!-- SJSU CMPE 138 FALL 2023 TEAM9-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
<link rel="stylesheet" href="Style/admin.css">
</head>
<body>
    <header>
        <h1>Welcome, Admin!</h1>
    </header>

    <div class="container">
        <h2>Manage Users</h2>
        <p>View and manage user accounts, including password resets and refunds.</p>
        <a href="manageUsers.php"><button class="button">Manage Users</button></a>

        <h2>View Reports</h2>
        <p>Access and review incident reports and user feedback.</p>
        <a href="viewReports.php"><button class="button">View Reports</button></a>

        <h2>Logout</h2>
        <p>Click the button below to logout.</p>
        <a href="../routes/process_logout.php"><button class="button logout-button">Logout</button></a>
    </div>
</body>
</html>
