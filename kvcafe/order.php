<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation</title>
    <!-- Link to your CSS file -->
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <h1>Order Confirmation</h1>
    
    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $item = $_POST["item"];
        $quantity = $_POST["quantity"];
        
        // Process the order (this is just a placeholder)
        // You would typically insert the order into a database, handle payment, etc.
        echo "<p>Your order of $quantity $item has been received. Thank you!</p>";
    } else {
        // If the form is not submitted, show an error message
        echo "<p>Error: Order form not submitted.</p>";
    }
    ?>

    <a href="menu.php">Return to Menu</a> <!-- Link back to the menu page -->
</body>
</html>
