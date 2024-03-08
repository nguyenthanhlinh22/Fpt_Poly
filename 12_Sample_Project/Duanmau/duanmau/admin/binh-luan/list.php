<div class="container">
    <div class="page-title">
        <h4 class="mt-5 font-weight-bold text-center">Tổng hợp bình luận</h4>
    </div>
    <div class="box box-primary">
        <div class="box-body">
            <table width="100%" class="table table-hover table-bordered text-center">
                <thead class="thead-dark">
                    <tr>
                        <th>Hàng hóa</th>
                        <th>Số bình luận</th>
                        <th>Cũ nhất</th>
                        <th>Mới nhất</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        //Duyệt qua từng ptu của mảng $items và gán cho biến $item
                    foreach ($items as $item) {
                        extract($item); //tạo ra các biến trong phạm vi hiện tại dựa trên các gtr của ptu $item

                    ?>
                    <tr>
                        <td><?= $ten_hh ?></td>  <!--hiển thị tên hh lấy từ $ten_hh-->
                        <td><?= $so_luong ?></td>
                        <td><?= $cu_nhat ?></td>
                        <td><?= $moi_nhat ?></td>
                        <td class="text-end">
                            <a href="../binh-luan/index.php?ma_hh=<?= $ma_hh ?>"
                                class="btn btn-outline-info btn-rounded">Chi tiết <i
                                    class="fas fa-info-circle"></i>
                                </a>
                        </td>
                    </tr>
                    <?php
                    }

                    ?>
                </tbody>

            </table>
        </div>
    </div>
</div>