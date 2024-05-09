<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Send email to the realtor/employee
    $to = "ejboiicalmba@gmail.com"; // Change this to the realtor/employee's email address
    $subject = "Contact Form Submission";
    $body = "Name: $name\nEmail: $email\nMessage: $message";

    // Assuming a basic mail function here, you can use a library like PHPMailer for more advanced features
    if (mail($to, $subject, $body)) {
        $status = "success";
        $message = "Thank you for your message. We'll get back to you shortly.";
    } else {
        $status = "error";
        $message = "Oops! Something went wrong. Please try again later.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJ DCruise's Real Estate</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to right, #F6AE99, #DAC4F7); /* Marigold and Lavender combination */
        }
        header {
            background-color: #6A5ACD; /* Lavender */
            color: #F6AE99; /* Marigold */
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
            flex-wrap: wrap;
            justify-content: center;
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
            max-width: 200px; /* Adjust the max-width to your desired size */
            height: auto;
            display: block;
            margin: 0 auto;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <header>
        <h1>EJ DCruz Real Estate</h1>
        <div class="logo">
            <img src="EJ.JPG" alt="EJ">
        </div>
    </header>
  
    <section>
        <div class="contact-form">
            <h2>Contact Us</h2>
            <?php if(isset($status) && isset($message)): ?>
                <?php if($status == 'success'): ?>
                    <div style="color: green;"><?php echo $message; ?></div>
                <?php else: ?>
                    <div style="color: red;"><?php echo $message; ?></div>
                <?php endif; ?>
            <?php endif; ?>
            <form action="" method="post">
                <label for="name">Name:</label><br>
                <input type="text" id="name" name="name" required><br><br>
        
                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" required><br><br>
        
                <label for="message">Message:</label><br>
                <textarea id="message" name="message" rows="4" required></textarea><br><br>
        
                <input type="submit" value="Submit">
            </form>
        </div>
    </section>

    <footer>
        <p>&copy; EJ DCruz Real Estate</p>
    </footer>
</body>
</html>