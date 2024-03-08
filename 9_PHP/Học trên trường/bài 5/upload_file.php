<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// kiểm tra xem form đã đc submit hay chưa 
    if(isset($_POST['submit'])){
        $target_dir = "uploads/";
    //đường dẫn đến thư mục lưu trữ file
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    //gán tạng thái upload file = 1 ( thành công )
        $upLoadOk = 1 ; 
    // lấy định dạng ảnh 
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // kiểm tra xem file đã tồn tại hay chưa 
    if(file_exists($target_file)) {
        echo "file đã tồn tại";
    // bật trạng thái upload khi file đang lỗi 
    $upLoadOk = 0 ;
    }
    // kiểm tra định dạng file
    if($_FILES["fileToUpload"]["size"]> 500000) {
        echo "file quá lớn";
        $upLoadOk = 0 ;

    }
    //kiểm tra ddingj dạng file
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" 
    && $imageFileType != "gif"){
        echo " chỉ chấp nhận file JPG, JPEG , PNG, GIF";
        $upLoadOk = 0 ;

    } 
    //kiểm tra $upLoadOk = 0 xảy ra lỗi 
    if($upLoadOk == 0 ){
        echo "tập tin không được tải lên ";

    }else{
        //dichuyen thư mục tạm lên thư mục chính 
        if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)){
            echo "file" . htmlspecialchars(  basename($_FILES["fileToUpload"]["name"])). " đã được tải lên thành công";
        }else {
            echo " đã xãy ra lỗi khi đã tải file lên";
        }
    }
}

?>
<h2>up picture </h2>

<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" enctype="multipart/form-data">
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload File" name="submit">

</form>

</body>
</html>