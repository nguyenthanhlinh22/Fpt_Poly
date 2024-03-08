<?php
//khởi tạo session
session_start();
//kiểm tra xem session user có tồn tại không
if (isset($_SESSION['user'])) {
?>Xin chào <?php echo $_SESSION["user"]; ?>.
<?php
} else echo "<a href='login.php' title='Login'>Vui lòng đăng nhập</a>";
?>
<?php
include 'connect.php';
$query = "SELECT * FROM sanpham";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sản Phẩm</title>
    <link rel="stylesheet" href="css/sanpham.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://kit.fontawesome.com/7250252e91.js" crossorigin="anonymous"></script>
    <style>
        /* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
    </style>

</head>

<body>
    <div class="content">
        <h1 style="text-align: center;">Tiệm ảnh 2004 </h1>
        <nav>
            <a href="sanpham.php">Trang chủ</a>
        </nav>
        <div class="search-container">
            <form method="GET" action="search.php">
                <!-- <input class="timkiem" type="text" placeholder="Tìm kiếm sản phẩm..." name="query">
                <button class="tim" type="submit"><i class="fa-solid fa-magnifying-glass" style="color: #ffffff;"></i></button> -->
            </form>
        </div>
        <div class="icon-z">
            <div class="icon">
                <a href="cart.php">
                    <i class="fas fa-shopping-cart" style="color: #fff;"></i>
                </a>
            </div>

            <div class="settings-icon">
                    <i class="fas fa-bars"></i>
                    <div class="caidat" id="setting-caidat">
                        <a href="read.php">cài đặt</a>
                        <a href="user.php">tài khoản cá nhân</a>
                        <a href="logout.php" title="Logout">Đăng xuất</a>
                    </div>
                </a>
            </div>
        </div>
        

    </div>
    <marquee behavior="" direction="">Chào bạn đến với tiệm ảnh 2004 , chúc bạn chọn được những combo giá tốt ,Tiệm ảnh 2004 Yêu nghề và Nhiệt Huyết <3</marquee>
    <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="715cba980bcfeb5fb8d6078121f0a59d.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="387821331_1725927491180920_8906661102296379798_n.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="c6dac88d132d66c4433b559ce28d1dfc.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>



    <?php

    while ($row = mysqli_fetch_assoc($result)) {
        echo '
     <div class="container">
         <div class="col"> 
            <div class="im-product">
                <img src="' . $row['anhSp'] . '" alt="">
            </div>
            <div class="name-product">
                <h1>' . $row['tenSp'] . '</h1>
            </div>
            <div class="maSp">
                <p><span>Code:</span>' . $row['maSp'] . ' </p>
            </div>
            <div class="theloaiSp">
                <p><span>Thể loại:</span> ' . $row['theloaiSp'] . ' </p>
            </div>
            <div class="giaSp">
                <p><span>Giá:</span> ' . $row['giaSp'] . '.000đ</p>
            </div>
            <div class="soluong">
                <p><span>Số lượng:</span> ' . $row['soluong'] . '</p>
            </div>

            <form action="cart.php" method="post">
                <input type="number" name="soluong" min="1" max="10" value="1">
                <input type="submit" name="addcart" value="Mua Hàng">
                <input type="hidden" name="tenSp" value= ' . $row['tenSp'] . '>
                <input type="hidden" name="giaSp" value= ' . $row['giaSp'] . '>
                <input type="hidden" name="hinh" value=' . $row['anhSp'] . '>
            </form>
        </div>
     </div> ';
    }
    ?>
    <footer class="footer" style="width: 100%; height: 200px; background-color: #717171; text-align: center; padding-top: 30px;">
  Tiệm ảnh 2004 yeu cac ban 
</footer>
    <script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) { 
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
</body>

</html>