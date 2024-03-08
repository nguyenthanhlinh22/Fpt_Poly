<?php
function thongtindonhang()
{
}


function taogiohang($tenSp, $hinhSp, $dongia, $soluong, $thanhtien, $idbill)
{
    $conn = ketnoidb();
    $sql = "INSERT INTO cart(tenSp,hinhSp,dongia,soluong,thanhtien,idbill) VALUES ('$tenSp','$hinhSp','$dongia','$soluong','$thanhtien','$idbill')";
    // use exec() because no results are returned
    $conn->exec($sql);
    $conn = null;
    // return $last_id;
}
function taodonhang($name, $diachi, $tel, $total, $thanhtoan)
{
    $conn = ketnoidb();
    $sql = "INSERT INTO bill (name,diachi,tel,total,thanhtoan) VALUES ('$name','$diachi','$tel','$total','$thanhtoan')";
    // use exec() because no results are returned
    $conn->exec($sql);
    $last_id = $conn->lastInsertId();
    $conn = null;
    return $last_id;
}
function ketnoidb()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "shop";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
        // $sql = "INSERT INTO MyGuests (firstname, lastname, email)
        //  VALUES ('John', 'Doe', 'john@example.com')";
        // // use exec() because no results are returned
        // $conn->exec($sql);
        // echo "New record created successfully";
    } catch (PDOException $e) {
        return  $e->getMessage();
    }
}
function tongdonhang()
{
    $tong = 0;
    //nếu giỏ hàng có tồn tại mà nó đúng là cái mảng thì nó sẽ chạy for 
    if (isset($_SESSION['giohang']) && (is_array($_SESSION['giohang']))) {
        if (sizeof($_SESSION['giohang']) > 0) {

            //và để chạy for thì chúng t phải biết giohang đó chiều dài bnhiu
            for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {
                //lấy đơn hàng của từng mặt hàng * sô lượng mặt hàng 2*3
                $tt = $_SESSION['giohang'][$i][2] * $_SESSION['giohang'][$i][3];
                //và cộng dồn vào $tong
                $tong += $tt;
            }
        }
    }
    return $tong;
}



function showgiohang()
{
    $thongtingiohang = "";
    //nếu giỏ hàng có tồn tại mà nó đúng là cái mảng thì nó sẽ chạy for 
    if (isset($_SESSION['giohang']) && (is_array($_SESSION['giohang']))) {
        if (sizeof($_SESSION['giohang']) > 0) {
            $tong = 0;
            //và để chạy for thì chúng t phải biết giohang đó chiều dài bnhiu
            for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {
                //lấy đơn hàng của từng mặt hàng * sô lượng mặt hàng 2*3
                $tt = $_SESSION['giohang'][$i][1] * $_SESSION['giohang'][$i][3];
                //và cộng dồn vào $tong
                $tong += $tt;
                $thongtingiohang .= '<tr>
                        <td>' . ($i + 1) . '</td>
                        <td><img src="img/' . $_SESSION['giohang'][$i][1] . '" alt=""></td>
                        <td>' . $_SESSION['giohang'][$i][0] . '</td>
                        <td>' . $_SESSION['giohang'][$i][3] . '</td>
                        <td>' . $_SESSION['giohang'][$i][2] . '</td>
                        <td>
                        <div> ' . $tt . ' </div>
                        </td>
                        <td> 
                            <a href="cart.php?delid=' . $i . '">Xóa</a>
                        </td>
                    </tr>';
            }
            $thongtingiohang .= '<tr>
                 <th colspan="5">Tổng đơn hàng</th>
                 <th>
                     <div>' . $tong . '</div>
                 </th>
            </tr>';
        }
    }
    return $thongtingiohang;
}
