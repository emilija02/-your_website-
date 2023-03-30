// Add this code to your PHP file (delete_products.php)
<?php
// Connecting to the database
$servername = "localhost";
$username = "id20534402_root";
$password = "N0/5#d-cV_maQbNL";
$dbname = "id20534402_mydb";

// Creating connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Checking connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Getting the product IDs from the AJAX request
$productIds = json_decode($_POST['productIds']);

// Deleting the selected products from the database
foreach ($productIds as $productId) {
  $sql = "DELETE FROM products WHERE id='$productId'";
  $conn->query($sql);
}

$conn->close();
?>