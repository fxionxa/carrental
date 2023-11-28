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
    <title>View Reports</title>
<link rel="stylesheet" href="Style/renter.css">
</head>
<body>
    <header>
        <h1>View Reports</h1>
    </header>

    <div class="header">
        <img src="flexwheelzlogo.png" alt="Flex Wheelz Logo" class="logo">
    </div>

    <div class="container">
        <h2>View Reports</h2>

        <?php
            require "../../credentials.php";

            $conn = mysqli_connect($host, $user, $pass, $name);

            if (!$conn) { 
                die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "SELECT * FROM incidents";
            $result = mysqli_query($conn,$sql);

            if($result) {
                while ($row = $result->fetch_assoc()) {
                    
                    $incidentID = $row["incident_id"];
                    $userID = $row["user_id"];
                    $listingID = $row["listing_id"];
                    $incidentType = $row["incident_type"];
                    $incidentDate = $row["incident_date"];
                    $incidentLocation = $row["incident_location"];
                    $coverage = $row["coverage"];
                    $incidentDescription = $row["incident_description"];

                    echo "
                    <div class='car-listing'>
                    <h3>Incident ID: $incidentID</h3>
                    <p>User ID: $userID</p>
                    <p>Listing ID: $listingID</p>
                    <p>Incident Type: $incidentType</p>
                    <p>Incident Date: $incidentDate</p>
                    <p>Incident Location: $incidentLocation</p>
                    <p>Coverage: $coverage</p>
                    <p>Incident Description: $incidentDescription</p>
                    </div>
                ";   
                }
            }
        ?>
    </div>
    <div class="container">
        <a href="admin.php"><button class="button">Back to Previous Page</button></a>
    </div>
</body>
</html>
