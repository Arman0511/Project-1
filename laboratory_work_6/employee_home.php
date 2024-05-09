<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJ DCruz Real Estate - Employee Homepage</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Font Awesome CSS -->
    <style>
        body {
            font-family: 'Arial Rounded MT Bold', Arial, sans-serif; /* Use Arial Rounded MT Bold as primary font with fallback */
            margin: 0;
            padding: 0;
            background-color: white; /* White background */
            color: #003366; /* Marine Blue text color */
        }

        header {
            background-color: #003366; /* Marine Blue */
            color: white; /* White */
            padding: 20px 0;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
        }

        nav {
            background-color: white; /* White background */
            color: #003366; /* Marine Blue text color */
            padding: 10px;
            text-align: center;
            border-top: 2px solid #003366; /* Marine Blue border */
            border-bottom: 2px solid #003366; /* Marine Blue border */
        }

        nav a {
            color: #003366; /* Marine Blue */
            text-decoration: none;
            padding: 5px 10px;
            font-weight: bold;
        }

        nav a:hover {
            background-color: #003366; /* Marine Blue */
            color: white; /* White */
        }

        section {
            padding: 20px;
            text-align: center;
            color: #003366; /* Marine Blue */
        }

        .logo img {
            max-width: 300px; /* Adjust the logo size as needed */
            height: auto;
        }

        .employee-info {
            margin-top: 30px;
        }

        .tasks {
            margin-top: 50px;
        }

        .task {
            border: 1px solid #ccc;
            margin: 10px;
            padding: 10px;
            width: 300px;
            text-align: left;
            display: inline-block;
        }

        .announcements {
            margin-top: 50px;
        }

        .announcement {
            border: 1px solid #ccc;
            margin: 10px;
            padding: 10px;
            width: 600px;
            text-align: left;
        }

        footer {
            background-color: #003366; /* Marine Blue */
            color: white; /* White */
            padding: 10px 0;
            text-align: center;
        }

        .social-icons a {
            color: #003366; /* Marine Blue */
            text-decoration: none;
            font-size: 24px;
            margin: 0 10px;
        }

        .social-icons a:hover {
            color: white; /* White */
        }
    </style>
</head>
<body>
    <header>
        <h1>EJ DCruz Real Estate - Employee Homepage</h1>
        <div class="logo">
            <img src="EJ.JPG" alt="EJ">
        </div>
    </header>
  
    <nav>
        <a href="employee_homepage.php">Home</a>
        <a href="employee_tasks.php">Tasks</a>
        <a href="employee_announcements.php">Announcements</a>
        <!-- Add more employee-specific links here -->
    </nav>

    <section>
        <h2>Welcome, Employee!</h2>
        <div class="employee-info">
            <!-- Add employee-specific information here -->
            <?php
            // Example PHP code to display employee information
            $employeeName = "John Doe";
            $position = "Sales Agent";
            echo "<p>Employee Name: $employeeName</p>";
            echo "<p>Position: $position</p>";
            ?>
        </div>
    </section>

    <section class="tasks">
        <h2>Tasks</h2>
        <div class="task">
            <h3>Task 1</h3>
            <p>Description of Task 1...</p>
            <a href="#">Complete Task</a>
        </div>
        <div class="task">
            <h3>Task 2</h3>
            <p>Description of Task 2...</p>
            <a href="#">Complete Task</a>
        </div>
        <!-- Add more tasks as needed -->
    </section>

    <section class="announcements">
        <h2>Announcements</h2>
        <div class="announcement">
            <h3>Important Announcement</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div class="announcement">
            <h3>Another Announcement</h3>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
        <!-- Add more announcements as needed -->
    </section>

    <footer>
        <p>&copy; 2024 EJ DCruz Real Estate</p>
    </footer>
</body>
</html>