<?php
    include 'connect.php';
    // try still product list 
    $query = " SELECT * FROM  sanpham ";
    $result = mysqli_query($conn, $query);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Listing management</title>
</head>
<body>
    <h2>Product List </h2>
    <a href="Create.php">Add new Products</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Name Product</th>
            <th>description</th>
            <th>price</th>
            <th>action</th>
        </tr>
        <?php
        //
        while ($row = mysqli_fetch_assoc($result) ){
            echo "<tr>";
            echo "<td>" . $row['id']."</td>";
            echo "<td>" . $row['name']."</td>";
            echo "<td>" . $row['description']."</td>";
            echo "<td>" . $row['price']."</td>";
            echo "<td>";
            echo "<a href='update.php?id=" . $row['id'] ."'>correct</a> |" ;
            echo "<a href='delete.php?id=" . $row['id'] ."'>delete</a> " ;
            echo "<td>";
            echo "<tr>";
        }
        
        
        
        
        ?>
    </table>

    
</body>
</html>
<?php
        //close conncet
        mysqli_close($conn);
?>