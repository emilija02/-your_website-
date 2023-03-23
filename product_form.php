
<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


// Get the product information from the form
$sku = isset($_POST['sku']) ? $_POST['sku'] : '';
$name = isset($_POST['name']) ? $_POST['name'] : '';
$price = isset($_POST['price']) ? $_POST['price'] : '';
$productType = isset($_POST['productType']) ? $_POST['productType'] : '';
$uniqueAttribute = isset($_POST['uniqueAttribute']) ? $_POST['uniqueAttribute'] : '';
$size = isset($_POST['size']) ? $_POST['size'] : '';
$weight = isset($_POST['weight']) ? $_POST['weight'] : '';
$height = isset($_POST['height']) ? $_POST['height'] : '';
$width = isset($_POST['width']) ? $_POST['width'] : '';
$length = isset($_POST['length']) ? $_POST['length'] : '';


include './product_add.html';


// Insert the product into the database
$sql = "INSERT INTO products (sku, name, price, productType, uniqueAttribute, size, weight, height, width, length)
VALUES ('$sku', '$name', '$price', '$productType', '$uniqueAttribute', '$size', '$weight', '$height', '$width', '$length' )";

if ($conn->query($sql) === TRUE) {
  echo "Product added successfully";
} else {
  echo "Error adding product: " . $conn->error;
}


$result = mysqli_query($conn, $sql);
if (!$result) {
  printf("Error: %s\n", mysqli_error($conn));
  exit();
}

$conn->close();


?>