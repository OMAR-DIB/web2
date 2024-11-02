<?php
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Add Product</h2>
    <form action="" method="post">
        <label for="product_id">Id :</label>
        <input type="number" id="product_id" name="product_id" required>
        <label for="product_name">Name :</label>
        <input type="text" id="product_name" name="product_name" required>
        <label for="price">Price :</label>
        <input type="number" id="price" name="price" required>
        <button type="submit" value="submit">Submit -></button>
    </form>

</body>

</html>
<?php
if (isset($_POST["product_id"]) && isset($_POST["product_name"]) && isset($_POST["price"])) {
    $product_id = $_POST["product_id"];
    $product_name = $_POST["product_name"];
    $product_price = $_POST["price"];

    $query = "INSERT INTO product VALUES ('$product_id','$product_name','$product_price')";
    $result = mysqli_query($con, $query);

    if (!$result) {
        echo "Error: " . mysqli_error($con);
    } else {
        echo "Product added successfully!";
    }
}
?>