<div class="container">
    <div class="page-title">

        <h4 class="mt-5 font-weight-bold text-center">Chi tiết bình luận</h4>
    </div>
    <div class="box box-primary">
        <div class="box-body">
            <form action="?btn_delete_all" method="post" class="table-responsive"> <!-- form được sử dụng để gửi dữ liệu  -->
             
                <button type="submit" class="btn btn-danger mb-1" id="deleteAll" onclick="return checkDelete()">
                    Xóa mục đã chọn</button> <i class="ml-5">hàng hóa: <b><?= $items[0]['ten_hh'] ?></b></i>
                <table width="100%" class="table table-hover table-bordered text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th><input type="checkbox" id="select-all"></th>
                            <th>Đánh giá</th>
                            <th>Nội dung</th>
                            <th>Ngày BL</th>
                            <th>Người BL</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Vòng lặp này sẽ duyệt qua mảng $items và lấy từng phần tử trong mảng đó gán cho biến $item
                        foreach ($items as $item) { 
                            extract($item);

                        ?>
                        <tr>
                            <td><input type="checkbox" name="ma_bl[]" value="<?= $ma_bl ?>"></td> <!-- Tạo một ô chứa một ô checkbox để chọn bình luận. -->
                            <td><?= $rating ?> sao</td> <!-- Tạo một ô để hiển thị số sao đánh giá, dữ liệu được lấy từ $rating -->
                            <td><?= $noi_dung ?></td>
                            <td><?= $ngay_bl ?></td>
                            <td><?= $ma_kh ?></td>
                            <td class="text-end">
                                 <a href="index.php?btn_delete&ma_bl=<?= $ma_bl ?>&ma_hh=<?= $ma_hh ?>"  
                                    class="btn btn-outline-danger btn-rounded" onclick="return checkDelete()"><i   
                                        class="fas fa-trash"></i></a>   <!-- Tạo 1 button xoá --> <!-- khi nhấn xoá sẽ hỏi xác nhận -->
                            </td>
                        </tr>
                        <?php
                        }

                        ?>
                    </tbody>

                </table>
                <input type="hidden" name="ma_hh" value="<?= $ma_hh ?>">
                <div class="mt-3" width="100%">
                    <ul class="pagination justify-content-center">
                        <?php for ($i = 1; $i <= $_SESSION['total_page']; $i++) { ?> <!--tạo 1 danh sách các trang-->

                        <li class="page-item <?= $_SESSION['page'] == $i ? 'active' : '' ?>">
                            <a class="page-link" href="?ma_hh=<?= $ma_hh ?>&page=<?= $i ?>"><?= $i ?></a>
                        </li>

                        <?php } ?>

                    </ul>
                </div>
                <a class="btn btn-dark" href="index.php">Quay lại</a>
            </form>
        </div>
    </div>
</div>