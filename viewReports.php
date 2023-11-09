<!-- SJSU CMPE 138 FALL 2023 TEAM9-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Reports</title>
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

        .report {
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
            transition: background-color 0.3s;
        }
        
        .button:hover {
            background-color: #0056b3;
        }
        
        .back-button {
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        
        .back-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <header>
        <h1>View Reports</h1>
    </header>

    <!-- This Part need to modified. The data should retrieve from the database-->

    <div class="container">
        <h2>Incident Reports</h2>

        <!-- Incident Report 1 -->
        <div class="report">
            <h3>Incident Report 1</h3>
            <p>Date: January 10, 2023</p>
            <p>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <button class="button" onclick="viewIncidentReport(1)">View Report</button>
        </div>

        <!-- Incident Report 2 -->
        <div class="report">
            <h3>Incident Report 2</h3>
            <p>Date: February 5, 2023</p>
            <p>Description: Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <button class="button" onclick="viewIncidentReport(2)">View Report</button>
        </div>

        <!-- Add more incident reports as needed -->

        <h2>User Feedback</h2>

        <!-- User Feedback 1 -->
        <div class="report">
            <h3>User Feedback 1</h3>
            <p>Date: March 20, 2023</p>
            <p>Feedback: The service was excellent. I had a great experience using this platform.</p>
            <button class="button" onclick="viewUserFeedback(1)">View Feedback</button>
        </div>

        <!-- User Feedback 2 -->
        <div class="report">
            <h3>User Feedback 2</h3>
            <p>Date: April 15, 2023</p>
            <p>Feedback: There were some issues with the app. It needs improvement.</p>
            <button class="button" onclick="viewUserFeedback(2)">View Feedback</button>
        </div>

        <!-- Add more user feedback as needed -->
        
        
        <!-- Add more user feedback as needed -->
        
        <a href="admin.php"><button class="back-button">Back to Previous Page</button></a>
    </div>


    <script>
        function viewIncidentReport(reportId) {
            // Handle viewing the incident report with ID reportId
            alert(`Viewing Incident Report ${reportId}`);
        }

        function viewUserFeedback(feedbackId) {
            // Handle viewing the user feedback with ID feedbackId
            alert(`Viewing User Feedback ${feedbackId}`);
        }
    </script>
</body>
</html>
