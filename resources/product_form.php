<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get the product information from the form
$sku = $_POST['sku'];
$name = $_POST['name'];
$price = $_POST['price'];
$productType = $_POST['productType'];
$uniqueAttribute = $_POST['uniqueAttribute'];
$size = $_POST['size'];
$weight = $_POST['weight'];
$height = $_POST['height'];
$width = $_POST['width'];
$length = $_POST['length'];





// Insert the product into the database
$sql = "INSERT INTO products (sku, name, price, productType, uniqueAttribute, size, weight, height, width, length)
VALUES ('$sku', '$name', '$price', '$productType', '$uniqueAttribute', '$size', '$weight', '$height', '$width', '$length' )";

if ($conn->query($sql) === TRUE) {
  echo "Product added successfully";
} else {
  echo "Error adding product: " . $conn->error;
}

$conn->close();
?>