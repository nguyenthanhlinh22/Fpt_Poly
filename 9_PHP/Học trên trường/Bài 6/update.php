<?php
    include 'Connect.php';
    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $query = "UPDATE sanpham SET name = '$name', description = '$description', price = '$price'WHERE id = '$id' ";
        $result = mysqli_query($conn, $query);
        if ($result) {
            echo "update seccect product.";
        }else{
            echo " Error " . mysqli_error($conn);

        }
        mysqli_close($conn);

    }elseif(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "SELECT * FROM sanpham WHERE  id = '$id'";
        $result = mysqli_query($conn , $query);

        if ($result) {
           $row = mysqli_fetch_assoc($result);
           $name = $row['name'];
           $description = $row['description'];
           $price = $row['price'];

        }else{
            echo " Error " . mysqli_error($conn);
        }
        mysqli_close($conn);
    }else{
        echo "not found update product";
}



?>










<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update product</title>
</head>
<body>
    <a href="read.php">List product</a>
    <h2>update Product</h2>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method ='post'>
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label for="name"> Name Product:</label> 
        <input type="text" name="name" value="<?php echo $name; ?>" required> <br>
        <label for="description">description:</label>
        <textarea name="description" required ><?php echo $description; ?></textarea><br>
        <label for="price" >Price</label>
        <input type="number" name="price" value="<?php echo $price; ?>"required> <br>
        <input type="submit" name="submit" value="update Product">









    </form>
    
</body>
</html>