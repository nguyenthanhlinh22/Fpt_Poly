<div class="container">
    <div class="page-title">
        <h4 class="mt-5 font-weight-bold text-center">THỐNG KÊ HÀNG HÓA TỪNG LOẠI</h4>
    </div>
    <div class="box box-primary">
        <div class="box-body">
            <input type="button" class="btn btn-danger mb-1" value="Xóa các mục đã chọn">
            <table width="100%" class="table table-hover table-bordered text-center">
                <thead class="thead-dark">
                    <tr>
                        <th>LOẠI HÀNG</th>
                        <th>SỐ LƯỢNG</th>
                        <th>GIÁ CAO NHẤT</th>
                        <th>GIÁ THẤP NHẤT</th>
                        <th>GIÁ TRUNG BÌNH</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    foreach ($items as $item) { //Duyệt qua từng ptu của mảng $items và gán giá trị cho biến $item
                        extract($item); //tạo ra các biến trong phạm vi hiện tại dựa trên các gtr của ptu $item

                    ?>
                    <tr>
                        <td><?= $ten_loai ?></td> <!--Hiển thị giá trị của biến $ten_loai-->
                        <td><?= $so_luong ?></td>
                        <td>$<?= number_format($gia_min, 2) ?></td>  <!--Hiển thị giá trị của biến $gia_min dưới dạng tiền tệ với hai chữ số thập phân-->
                        <td>$<?= number_format($gia_max, 2) ?></td>
                        <td>$<?= number_format($gia_avg, 2) ?></td> <!--Hiển thị giá trị của biến avg(trung bình)-->
                    </tr>
                    <?php
                    }

                    ?>
                </tbody>
            </table>
            <a href="index.php?chart" class="btn btn-info text-white">Xem biểu đồ<i class="fas fa-eye ml-2"></i></a>
        </div>
    </div>
</div>