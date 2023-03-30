
<?php
// Connecting to the database
$servername = "localhost";
$username = "id20534402_root";
$password = "N0/5#d-cV_maQbNL";
$dbname = "id20534402_mydb";

$conn = new mysqli($servername, $username, $password, $dbname);

// Checking connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


// Getting the product information from the form
$sku = isset($_POST['sku']) ? $_POST['sku'] : '';
$name = isset($_POST['name']) ? $_POST['name'] : '';
$price = isset($_POST['price']) ? $_POST['price'] : '';
$productType = isset($_POST['productType']) ? $_POST['productType'] : '';

$size = isset($_POST['size']) ? $_POST['size'] : '';
$weight = isset($_POST['weight']) ? $_POST['weight'] : '';
$height = isset($_POST['height']) ? $_POST['height'] : '';
$width = isset($_POST['width']) ? $_POST['width'] : '';
$length = isset($_POST['length']) ? $_POST['length'] : '';


include './product_add.html';





// Inserting the product into the database
$sql = "INSERT INTO products (sku, name, price, productType, size, weight, height, width, length)
VALUES ('$sku', '$name', '$price', '$productType', '$size', '$weight', '$height', '$width', '$length' )";

if ($conn->query($sql) === TRUE) {
  echo "Product added successfully";
} else {
  echo "Error adding product: " . $conn->error;
}



$conn->close();


?>