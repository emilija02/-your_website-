<?php
// Connection to the database
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





// SQL query to select data from database
$sql = "SELECT * FROM products";
$result = $conn->query($sql);
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <link rel="stylesheet" href="./resources/product_list.css">
    
</head>
<header>
    <h2>Product List</h2>
    <p><a href="./product_add.html" id="add-product-btn">ADD</a></p>
    <button class="delete-product-btn" onclick="deleteProducts()">MASS DELETE</button>
</header>

<body>
    


    <?php
                // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
    ?>

      <div class="product-container">
            <div class="product-box">
            <input type="checkbox" class="delete-checkbox" name="delete-product[]" value="<?php echo $rows['id']; ?>">
              <p><?php echo $rows['sku'];?></p>
              <p><?php echo $rows['name'];?></p>
              <p><?php echo $rows['price'];?> $</p>
              <?php if($rows['size'] !== null && $rows['size'] !== '') { ?>
                <p>Size: <?php echo $rows['size']; ?>MB</p>
              <?php } ?>

              <?php if($rows['weight'] !== null && $rows['weight'] !== '') { ?>
                <p>Weight: <?php echo $rows['weight']; ?>KG</p>
              <?php } ?>

              <?php if($rows['height'] !== null && $rows['width'] !== null && $rows['length'] !== '') { ?>
                <p>Dimension: <?php echo $rows['height'].' x '.$rows['width'].' x '.$rows['length']; ?></p>
              <?php } ?>

            </div>
      </div>


    <?php
                }
    ?>

<script>
function deleteProducts() {
  // Getting all the checkboxes that are checked
  var checkboxes = document.querySelectorAll('.delete-checkbox:checked');
  
  // Creating an array of product IDs
  var productIds = [];
  for (var i = 0; i < checkboxes.length; i++) {
    productIds.push(checkboxes[i].value);
  }
  
  // Sending an AJAX request to delete_products.php
  var xhr = new XMLHttpRequest();
  xhr.open('POST', 'delete_products.php', true);
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  xhr.onreadystatechange = function() {
    if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
      // Reloading the page to show the updated list of products
      location.reload();
    }
  };
  xhr.send('productIds=' + JSON.stringify(productIds));
}

</script>


</body>
<footer>
    <div class="footer">
        <p>Scandiweb Test assignment</p>
    </div>
</footer>
</html>