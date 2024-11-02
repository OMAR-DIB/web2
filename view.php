<?php include "connection.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>View Product</h2>
    <table border="5">
        <tr>
            <th>Product id</th>
            <th>product name</th>
            <th>price</th>
        </tr>
        
        <?php
        $query = "SELECT * FROM product";
        $result = mysqli_query($con, $query);
        $row_number = mysqli_num_rows($result);
        for ($i = 0; $i < $row_number; $i++) {
            $row = mysqli_fetch_assoc($result);
            echo"<tr>";
            echo "<td>$row[product_id]</td>";
            echo "<td>$row[product_name]</td>";
            echo "<td>$row[price]</td>";
            echo "<td><a href='edit.php?sid=$row[product_id]'><img src='img/wrench-solid.svg' alt='update' width='40' height='15'></a></td>";
            echo "<td><a href='delete.php?sid=$row[product_id]'><img src='img/trash-solid.svg' alt='update' width='40' height='15'></a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>