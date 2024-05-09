<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Font Awesome CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        .container {
            width: 80%;
            margin: auto;
            text-align: center;
        }

        h2 {
            margin-top: 50px;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="password"] {
            width: 250px;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #003366;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 4px;
        }

        input[type="submit"]:hover {
            background-color: #001f4d;
        }

        .error-message {
            color: red;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <section>
        <div class="logo">
            <img src="EJ.JPG" alt="EJ DCruz Real Estate">
        </div>
        <h2>Welcome, Employee!</h2>
        <p>Explore your options and manage tasks efficiently.</p>
        <!-- Employee Dashboard Content -->
        <div class="dashboard">
            <h3>Daily Sales</h3>
            <!-- Add content for daily sales here -->
            <p>Daily sales information goes here...</p>
            <h3>Employee Sales Status</h3>
            <!-- Add content for employee sales status here -->
            <p>Employee sales status information goes here...</p>
            <h3>Employee Profile/Account</h3>
            <!-- Add content for employee profile/account here -->
            <p>Employee profile/account information goes here...</p>
        </div>
        <!-- Add more employee-specific content or features here -->
        <div class="social-icons">
            <a href="https://www.facebook.com/EJDCruzRealEstate"><i class="fab fa-facebook"></i></a> <!-- Facebook -->
            <a href="https://twitter.com/the_EJDCruzRS"><i class="fab fa-twitter"></i></a> <!-- Twitter -->
            <a href="https://www.instagram.com/ej_dcruzrealestate/"><i class="fab fa-instagram"></i></a> <!-- Instagram -->
        </div>
    </section>
    <footer>
        &copy; 2024 EJ DCruz Real Estate
    </footer>
</body>
</html>