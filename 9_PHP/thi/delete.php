<?php
if(isset($_GET['id'])){
    include 'Connect.php';
    $id = $_GET['id'];
    $query = "DELETE FROM qlnv WHERE  id = '$id'";
    $result = mysqli_query($conn , $query);
    if ($result) {
        echo "delete seccect product.";
        header("location: read.php");
    }else {
        echo " Error " . mysqli_error($conn);
        print(" <a href='read.php'>List Product</a> ");

    }
    mysqli_close($conn);

}else{
    echo " khong tim thay sp de xoa";
    print(" <a href='read.php'>List Product</a> ");
}






?>