<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Joan's Real Estate</title>
	
    <style>
			   body {
			background-image: repeating-linear-gradient(
				45deg,
				rgba(255, 255, 255, 0.1),
				rgba(255, 255, 255, 0.1) 10px,
				transparent 10px,
				transparent 20px
			),
			linear-gradient(to right, #f0f0f0, #f0f0f0);
			background-size: 20px 20px;
			color: #333;
			font-family: Arial, sans-serif;
			font-size: 18px;
			margin: 0;
			padding: 0;
		}

		header {
			background: linear-gradient(to right, #445f74, #253746);
			color: #fff;
			padding: 20px;
			text-align: center;
			font-size: 36px;
			font-weight: bold;
		}

		nav {
			background:#445f74;
			color: #fff;
			padding: 10px;
			text-align: center;
			position: relative;
		}

		nav a {
			color: #fff;
			text-decoration: none;
			padding: 10px 20px;
			font-weight: bold;
			border: 2px solid transparent;
			transition: all 0.3s ease;
			background-clip: padding-box;
		}

		nav a:hover {
			background-color: #fff;
			color: #ff7e5f;
			border-color: #ff7e5f;
		}

		section {
			padding: 50px 20px;
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
			align-items: center;
			background: linear-gradient(to bottom, #ffcc99, #ff9966); /* Gradient background with suggested orange tones */
		}

		.logo img {
			max-width: 200px;
			height: auto;
			display: block;
			margin-left: auto;
			margin-right: auto;
			margin-bottom: 20px;
		}


		.realestate-name {
			font-size: 48px;
			margin-bottom: 20px;
			text-align: center;
			font-weight: bold;
			color: #333;
		}

		.tagline {
			font-size: 24px;
			text-align: center;
			margin-bottom: 50px;
			color: #555;
			font-style: italic;
		}

		.card {
			background: linear-gradient(to right, #fff, #f9f9f9);
			border-radius: 10px;
			box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
			margin: 20px;
			padding: 30px;
			text-align: center;
			width: 300px;
			transition: all 0.3s ease;
		}

		.card:hover {
			transform: translateY(-5px);
			box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
		}

		.card h2 {
			font-size: 24px;
			margin-bottom: 20px;
			color: #ff7e5f;
		}

		.card p {
			font-size: 18px;
			margin-bottom: 20px;
			color: #555;
		}

		.card a {
			background: linear-gradient(to right, #ff7e5f, #feb47b);
			border-radius: 5px;
			color: #fff;
			padding: 10px 20px;
			text-decoration: none;
			transition: all 0.3s ease;
		}

		.card a:hover {
			background: linear-gradient(to right, #feb47b, #ff7e5f);
		}

		footer {
			background: linear-gradient(to right, #ff7e5f, #feb47b);
			color: #fff;
			padding: 20px;
			text-align: center;
		}


    </style>
</head>
<body>
    <header>
        Joan's Real Estate
		
    </header>
    <nav>
        <a href="home.html">Home</a>
        <a href="sign-up.html">Sign Up</a>
        <a href="login.html">Log In</a>
        <a href="realtors.php">Our Realtors</a>
    </nav>
    <section>
        <div class="logo">
            <img src="images/J.jpg" alt="joan">
        </div>
        <h1 class="realestate-name">Joan's Real Estate</h1>
		<div class="tagline">Welcome to Your Dream Home Destination!</div>

    </section>
    <section>
        <div class="card">
            <h2>About Us</h2>
            <p>Learn more about Joan's Real Estate and our mission to help you find your dream home.</p>
            <a href="about.php">Read More</a>
        </div>
        <div class="card">
            <h2>Our Realtors</h2>
            <p>Meet our team of experienced realtors who are dedicated to helping you find the perfect home.</p>
            <a href="realtors.php">Meet the Team</a>
        </div>
    </section>
    <footer>
        &copy; Joan's Real Estate
    </footer>
</body>
</html>
