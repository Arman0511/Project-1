<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Homepage</title>
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

    .contact-info {
        margin-top: 30px;
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
    <nav>
        <a href="employee_homepage.php">Home</a>
        <a href="about.php">About</a>
        <!-- Add the login button here -->
        <a href="employee_login.php">Login</a>
    </nav>
    <section>
        <div class="logo">
            <img src="EJ.JPG" alt="EJ DCruz Real Estate">
        </div>
        <h2>Welcome, Employee!</h2>
        <p>Explore your options and manage tasks efficiently.</p>
        <div class="employee-info">
            <!-- Add employee-specific information here -->
        </div>
        <div class="social-icons">
            <a href="https://www.facebook.com/EJDCruzRealEstate"><i class="fab fa-facebook"></i></a> <!-- Facebook -->
            <a href="https://twitter.com/the_EJDCruzRS"><i class="fab fa-twitter"></i></a> <!-- Twitter -->
            <a href="https://www.instagram.com/ej_dcruzrealestate/"><i class="fab fa-instagram"></i></a> <!-- Instagram -->
        </div>
        <!-- Add more employee-specific content or features here -->
    </section>
    <footer>
        &copy; 2024 EJ DCruz Real Estate
    </footer>
</body>
</html>