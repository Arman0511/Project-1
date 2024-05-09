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
            background: linear-gradient(to right, #0077FF, #FFFFFF); /* Marine Blue and White combination */
            color: black; /* Text color changed to black */
        }
        header {
            background-color: #003366; /* Marine Blue */
            color: black; /* Text color changed to black */
            padding: 10px 20px;
            text-align: center;
            font-size: 16px;
            font-weight: bold;
        }
        nav {
            background-color: #666;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
        nav a {
            color: #fff;
            text-decoration: none;
            padding: 5px 10px;
        }
        nav a:hover {
            background-color: #444;
        }
        section {
            padding: 20px;
            display: flex;
            justify-content: center;
            overflow-x: auto; /* Enable horizontal scrolling */
        }
        .property {
            border: 1px solid #ccc;
            margin: 10px;
            padding: 10px;
            width: 300px;
            text-align: center;
        }
        .property img {
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
        }
       .logo img {
    max-width: 400px; /* Adjust the max-width to make the logo wider */
    height: auto;
}
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <img src="EJ.JPG" alt="EJ">
        </div>
    </header>
      <nav>
    <a href="about.php">About</a> 
	<nav/>
    <section>
        <?php
        // Sample property data array
        $properties = array(
            array(
                "image" => "PALACIO_1.jpeg",
                "title" => "Property 1",
                "description" => "LA PALACIO ORDINAIRE'.",
                "price" => "P 1,535,290.75",
                "details_id" => "details1"
            ),
            array(
                "image" => "PALACIO_2.jpeg",
                "title" => "Property 2",
                "description" => "LA PALACIO ROYALE'.",
                "price" => "P 1,500,230.80",
                "details_id" => "details2"
            ),
            array(
                "image" => "PALACIO_3.jpeg",
                "title" => "Property 3",
                "description" => "LA PALACIO Y CARIDAD.",
                "price" => "P 1,560,130.10",
                "details_id" => "details3"
            ),
            array(
                "image" => "PALACIO_4.jpeg",
                "title" => "Property 4",
                "description" => "LA PALACIO DE LA CONCEPCION'.",
                "price" => "P 1,595,100.20",
                "details_id" => "details4"
            ),
            array(
                "image" => "PALACIO_5.jpg",
                "title" => "Property 5",
                "description" => "LA PALACIO DE CRISTI'.",
                "price" => "P 1,595,500.00",
                "details_id" => "details5"
            )
        );

        // Loop through each property and display them
        foreach ($properties as $property) {
            echo '<div class="property">';
            echo '<img src="' . $property['image'] . '" alt="' . $property['title'] . '">';
            echo '<h3>' . $property['title'] . '</h3>';
            echo '<p>' . $property['description'] . '</p>';
            echo '<p>Price: ' . $property['price'] . '</p>';
            echo '<a href="seedetails.php?property_id=' . $property['details_id'] . '">SEE DETAILS</a>';
            echo '<div id="' . $property['details_id'] . '" style="display: none;">';
            echo '<!-- Details of ' . $property['title'] . ' -->';
            echo '<!-- You can add details here, such as number of rooms, area, etc. -->';
            echo '</div>';
            echo '</div>';
        }
        ?>
    </section>
    <footer>
        <p>&copy; EJ DCruz Real Estate</p>
    </footer>

    <script>
        function showDetails(id) {
            var details = document.getElementById(id);
            if (details.style.display === "none") {
                details.style.display = "block";
            } else {
                details.style.display = "none";
            }
        }
    </script>
</body>
</html>