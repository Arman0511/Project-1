<?php
// Define property details
$propertyDetails = array(
    "details1" => array(
        "Location" => "La Palacio Ordinaire",
        "Price" => "P 1,535,290.75",
        "Description" => "This property is located in a prime location and offers spacious rooms with modern amenities.",
        "Features" => array("3 bedrooms", "2 bathrooms", "Swimming pool"),
    ),
    "details2" => array(
        "Location" => "La Palacio Royale",
        "Price" => "P 1,500,230.80",
        "Description" => "A luxurious property with breathtaking views and top-notch facilities.",
        "Features" => array("4 bedrooms", "3 bathrooms", "Gym", "Garden")
    ),
    "details3" => array(
        "Location" => "La Palacio Y Caridad",
        "Price" => "P 1,560,130.10",
        "Description" => "A stunning property with elegant architecture and modern amenities.",
        "Features" => array("5 bedrooms", "4 bathrooms", "Swimming pool", "Garden")
    ),
    "details4" => array(
        "Location" => "La Palacio De La Concepcion",
        "Price" => "P 1,595,100.20",
        "Description" => "A majestic property offering luxurious living spaces and panoramic views.",
        "Features" => array("6 bedrooms", "5 bathrooms", "Gym", "Spa", "Balcony")
    ),
    "details5" => array(
        "Location" => "La Palacio De Cristi",
        "Price" => "P 1,595,500.00",
        "Description" => "An exquisite property featuring modern design and stunning amenities.",
        "Features" => array("4 bedrooms", "3 bathrooms", "Home theater", "Library")
    )
);

// Check if property details are requested
if(isset($_GET['property_id'])) {
    $propertyId = $_GET['property_id'];
    $details = isset($propertyDetails[$propertyId]) ? $propertyDetails[$propertyId] : array(); // Check if property exists
} else {
    // No property details requested
    $details = array();
}

// Initialize billing and payments options
$billingOptions = array("Online", "Walk In");
$paymentTerms = array("6 mos", "12 mos", "18 mos", "24 mos", "36 mos");

// Define down payment percentages for each property
$downPaymentPercentages = array(
    "details1" => 0.30, // 30% down payment for details1
    "details2" => 0.30, // 30% down payment for details2
    "details3" => 0.30, // 30% down payment for details3
    "details4" => 0.30, // 30% down payment for details4
    "details5" => 0.30  // 30% down payment for details5
);

// Check if billing option is chosen and process payments
if(isset($_POST['billing_option']) && isset($_POST['payment_term'])) {
    $billingOption = $_POST['billing_option'];
    $paymentTerm = $_POST['payment_term'];
    
    // Calculate down payment and total amount
    $downPaymentPercentage = isset($downPaymentPercentages[$propertyId]) ? $downPaymentPercentages[$propertyId] : 0;
    $downPayment = calculateDownPayment($details['Price'], $downPaymentPercentage);
    $totalAmount = calculateTotalAmount($details['Price'], $paymentTerm);
    
    // Generate official receipt
    $officialReceipt = generateOfficialReceipt($totalAmount, $paymentTerm, $downPayment);

    // Display official receipt
    echo "<h2>Official Receipt</h2>";
    echo "<p>Property: " . $details['Location'] . "</p>";
    echo "<p>Total Amount: " . $totalAmount . "</p>";
    echo "<p>Down Payment: " . $downPayment . "</p>";
    echo "<p>Payment Term: " . $paymentTerm . "</p>";
    echo "<p>Official Receipt: " . $officialReceipt . "</p>";
}

// Function to calculate total amount
function calculateTotalAmount($price, $paymentTerm) {
    $price = (float) str_replace('P ', '', str_replace(',', '', $price));
    $interestRate = 0.05;
    $months = (int)$paymentTerm * 12;
    $totalAmount = $price + ($price * $interestRate * $months);
    return $totalAmount;
}

// Function to calculate down payment
function calculateDownPayment($price, $downPaymentPercentage) {
    $price = (float) str_replace('P ', '', str_replace(',', '', $price));
    $downPayment = $price * $downPaymentPercentage;
    return $downPayment;
}

// Function to generate official receipt
function generateOfficialReceipt($totalAmount, $paymentTerm, $downPayment) {
    $receiptNumber = uniqid('Receipt_');
    $officialReceipt = "Receipt Number: $receiptNumber <br>";
    $officialReceipt .= "Total Amount: $totalAmount <br>";
    $officialReceipt .= "Down Payment: $downPayment <br>";
    $officialReceipt .= "Payment Term: $paymentTerm <br>";
    return $officialReceipt;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Details</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background: linear-gradient(to right, #0077FF, #FFFFFF); /* Marine Blue and White combination */
}

.box {
    background-color: #0077FF; /* Marine Blue */
    color: #FFFFFF; /* White */
    padding: 20px;
    text-align: center;
    font-size: 24px;
    font-weight: bold;
}

/* Additional CSS to enhance text font and color */
h2, h3, p, li {
    color: #FFFFFF; /* White */
    font-size: 20px;
    font-weight: normal;
}
    </style>
</head>
<body>
    <h2>Property Details</h2>
    <?php if(!empty($details)): ?>
    <div>
        <h3><?php echo $details['Location']; ?></h3>
        <p><strong>Price:</strong> <?php echo $details['Price']; ?></p>
        <p><strong>Description:</strong> <?php echo $details['Description']; ?></p>
        <p><strong>Features:</strong></p>
        <ul>
            <?php foreach($details['Features'] as $feature): ?>
            <li><?php echo $feature; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>

    <!-- Billing and Payments Form -->
    <form method="post" action="">
    <h2>Billing and Payments</h2>
    <p>Select billing option:</p>
    <select name="billing_option" id="billing_option">
        <option value="Online">Online</option>
        <option value="Walk In">Walk In</option>
    </select>
    <br><br>
    <!-- Payment methods for online -->
    <div id="online_payment_methods" style="display:none;">
        <p>Select payment method for Online:</p>
        <select name="online_payment_method">
            <option value="PayPal">PayPal</option>
            <option value="GCash">GCash</option>
        </select>
        <br><br>
    </div>
    <!-- Payment methods for walk-in -->
    <div id="walk_in_payment_methods" style="display:none;">
        <p>Select payment method for Walk In:</p>
        <select name="walk_in_payment_method">
            <option value="Cash">Cash</option>
            <option value="Cheque">Cheque</option>
            <option value="Credit Card">Credit Card</option>
        </select>
        <br><br>
    </div>
    <!-- Common payment term selection -->
    <p>Select payment term:</p>
    <select name="payment_term">
        <?php foreach($paymentTerms as $term): ?>
        <option value="<?php echo $term; ?>"><?php echo $term; ?></option>
        <?php endforeach; ?>
    </select>
    <br><br>
    <!-- Buttons -->
    <input type="submit" name="action" value="BUY">
    <a href="front.php"><button type="button">EXIT</button></a>
</form>

<script>
    // JavaScript to show/hide payment methods based on billing option selection
    document.getElementById('billing_option').addEventListener('change', function() {
        var onlinePaymentMethods = document.getElementById('online_payment_methods');
        var walkInPaymentMethods = document.getElementById('walk_in_payment_methods');
        
        if (this.value === 'Online') {
            onlinePaymentMethods.style.display = 'block';
            walkInPaymentMethods.style.display = 'none';
        } else if (this.value === 'Walk In') {
            onlinePaymentMethods.style.display = 'none';
            walkInPaymentMethods.style.display = 'block';
        } else {
            onlinePaymentMethods.style.display = 'none';
            walkInPaymentMethods.style.display = 'none';
        }
    });
</script>

    <?php else: ?>
    <p>No details available for this property.</p>
    <?php endif; ?>
</body>
</html>