<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJ DCruz Real Estate</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to right, #003366, #000000);
            color: white;
            font-size: 20px; /* Set text font size to 20 */
        }
        .box {
            background-color: #003366;
            padding: 20px;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
        }
        .logo {
            max-width: 150px; /* Adjust logo size */
            margin: 0 auto 20px; /* Center logo and add bottom margin */
        }
        footer {
            background-color: #003366;
            color: white;
            padding: 10px 0;
            text-align: center;
        }
        .exit-button, .continue-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: white;
            color: black;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .exit-button:hover, .continue-button:hover {
            background-color: #F6AE99;
            color: white;
        }
        .realtor {
            background-color: #6A5ACD; /* Lavender */
            color: #F6AE99; /* Marigold */
            padding: 20px;
            margin: 20px;
            border-radius: 10px;
        }
        .realtor img {
            max-width: 100px;
            border-radius: 50%;
            margin-bottom: 10px;
        }
        .owner {
            background-color: #6A5ACD; /* Lavender */
            color: #F6AE99; /* Marigold */
            padding: 20px;
            margin: 20px;
            border-radius: 10px;
            text-align: center;
        }
        .owner img {
            max-width: 100px;
            border-radius: 50%;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <img src="EJ.JPG" alt="EJ" style="width: 100%; height: auto;"> <!-- Adjusted logo size -->
        </div>
    </header>
    <section>
        <?php
        // Sample property data array (you can modify this according to your realtors or employees)
        $realtors = array(
            array(
                "name" => "Ranel",
                "position" => "Realtor",
                "phone" => "09245167290",
                "email" => "ranelcalamba@gmail.com",
                "photo" => "RANEL.jpg" // Add photo file name
            ),
            array(
                "name" => "Aldrin",
                "position" => "Realtor",
                "phone" => "09456378291",
                "email" => "kenaldrinplaras@gmail.com",
                "photo" => "KEN.jpg" // Add photo file name
            ),
            array(
                "name" => "Marco",
                "position" => "Realtor",
                "phone" => "09132546390",
                "email" => "kenjohn@gmail.com",
                "photo" => "aldrin.webp" // Add photo file name
            )
        );

        // Display information about each realtor
        foreach ($realtors as $realtor) {
            echo '<div class="realtor">';
            echo '<img src="' . $realtor['photo'] . '" alt="' . $realtor['name'] . '">'; // Display photo
            echo '<h3>' . $realtor['name'] . '</h3>';
            echo '<p>' . $realtor['position'] . '</p>';
            echo '<p>Phone: ' . $realtor['phone'] . '</p>';
            echo '<p>Email: <a href="mailto:' . $realtor['email'] . '">' . $realtor['email'] . '</a></p>';
            echo '</div>';
        }
        ?>
        <!-- Information about the owner -->
        <div class="owner">
            <img src="eze.jpg" alt="Owner">
            <h3>Exequel John</h3>
            <p>Owner</p>
            <p>Phone: 09385141818</p>
            <p>Email: <a href="mailto:ejboicalamba@gmail.com">ejcboicalamba@gmail.com</a></p>
        </div>
        <a href="homepage.php" class="exit-button">Exit</a> <!-- Exit button -->
    </section>
    <footer>
        <p>&copy; EJ DCruz Real Estate</p>
    </footer>
</body>
</html>