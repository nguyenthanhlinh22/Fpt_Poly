<?php
    //connect to mysql 
    include('Connect.php');

    if(isset($_POST['submit'])){

        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        // echo $name;
        // echo $description;
        // echo $price;
        $query = "INSERT INTO sanpham (name, description, price) VALUES ('$name', '$description', '$price')";
        // var_dump($query);
        $result = mysqli_query($conn, $query);


        if ($result) {
            echo "add seccect product.";
        }else{
            echo " co loi xay ra " . mysqli_error($connection);

        }
        mysqli_close($conn);  
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Add Product</title>

</head>
<body>
    <div class="addproduct">
        <h2>Add product</h2>
        <a href="Read.php">List product</a>
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
            <label for="name">hoten nv</label>
            <input type="text" name="name" id="name" required > <br>
            <label for="description">he số:</label>
            <textarea name="description" id="description" required></textarea> <br>
            <label for="price">tiền lương </label>
            <input type="number" name="price" id="price" required> <br>
            <input type="submit" name="submit" value="add Product">


    </div>


    </form>
    
</body>
</html>