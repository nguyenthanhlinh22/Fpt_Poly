<?php
    include 'connect.php';
    // try still product list 
    $query = " SELECT * FROM  qlnv ";
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
    <a href="Creat.php">Add new Products</a>
    <table>
        <tr>
            <th>ID</th>
            <th>ho tên  </th>
            <th>ma nhân viên </th>
            <th>tiền lương </th>
            <th>hệ số </th>
            <th>ngày vào làm  </th>
            <th>action</th>
        </tr>
        <?php
        //
        while ($row = mysqli_fetch_assoc($result) ){
            echo "<tr>";
            echo "<td>" . $row['id']."</td>";
            echo "<td>" . $row['hoTen']."</td>";
            echo "<td>" . $row['maNhanVien']."</td>";
            echo "<td>" . $row['tienLuong']."</td>";
            echo "<td>" . $row['heSo']."</td>";
            echo "<td>" . $row['ngayVaoLam']."</td>";
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