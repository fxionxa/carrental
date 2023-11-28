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
<link rel="stylesheet" href="Style/admin.css">
</head>
<body>
    <header>
        <h1>View Feedback</h1>
    </header>

    <div class="header">
        <img src="flexwheelzlogo.png" alt="Flex Wheelz Logo" class="logo">
    </div>

    <div class="container">
        <h2>View Feedback</h2>

        <?php
            require "../../credentials.php";

            $conn = mysqli_connect($host, $user, $pass, $name);

            if (!$conn) { 
                die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "SELECT * FROM reviews";
            $result = mysqli_query($conn,$sql);

            if($result) {
                while ($row = $result->fetch_assoc()) {
                    
                    $reviewID = $row["review_id"];
                    $userID = $row["user_id"];
                    $listingID = $row["listing_id"];
                    $rating = $row["rating"];
                    $comment = $row["comment"];

                    echo "
                    <div class='car-listing'>
                    <h3>Review ID: $reviewID</h3>
                    <p>User ID: $userID</p>
                    <p>Listing ID: $listingID</p>
                    <p>Rating: $rating</p>
                    <p>Comment: $comment</p>
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
