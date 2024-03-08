<div class="col-12" id="reviews">
    <div class="card border-light mb-3">
        <div class="card-header bg-primary text-white text-uppercase"><i class="fa fa-comment"></i> Đánh giá
        </div>
        <div class="card-body">
            <?php foreach ($binh_luan_list as $bl) : ?> <!--bắt đầu vòng lặp foreach và định nghĩa biến $bl để lặp qua mảng hoặc ds $binh_luan_list-->
            <div class="review">
                <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                <meta itemprop="datePublished" content="01-01-2016"><?= $bl['ngay_bl'] ?>

                <!--Vòng lặp này sẽ chạy từ $i = 1 đến khi $i lớn hơn hoặc bằng giá trị đánh giá (rating) của bình luận ($bl['rating']-->
                <?php for ($i = 1; $i <= $bl['rating']; $i++) {
                        echo '<span class="review_rating fa fa-star"></span>'; //mỗi ần lặp sẽ in ra 1 sao
                    } ?>

                by <b><?= $bl['ho_ten'] ?></b>
                <img width="40" height="40" class="rounded-circle object-fit-cover"
                    src="<?= $UPLOAD_URL . "/users/" . $bl['hinh'] ?>" />
                <p class="blockquote">
                <p class="mb-0"><?= $bl['noi_dung'] ?></p>
                </p>
                <hr>
            </div>
            <?php endforeach ?>
            <nav aria-label="..." class="text-center">

                <ul class="pagination justify-content-center">
                    <!--Bắt đầu vòng lặp for để tạo các liên kết đến các trang-->
                    <?php for ($i = 1; $i <= $_SESSION['total_page']; $i++) { ?> 
                        <!--Vòng lặp này sẽ chạy từ $i = 1 đến $i nhỏ hơn hoặc bằng giá trị tổng số trang (total_page) được lưu trữ trong $_SESSION-->
                        
                    <li class="page-item <?= $_SESSION['page'] == $i ? 'active' : '' ?>">
                        <a class="page-link" href="?ma_hh=<?= $ma_hh ?>&page=<?= $i ?>"><?= $i ?></a>
                    </li>

                    <?php } ?>

                </ul>
            </nav>

        </div>
        <?php

        if (!isset($_SESSION['user'])) {//kt nếu ng dùng chưa có trong session thì thông báo phải đăng  nhập 
            echo '<h5 class="text-center"><i class="text-danger">Đăng nhập để bình luận về sản phẩm này</i></h5>';
        } else {

        ?>
        <div class="comment-box text-center">
            <h4>Để lại bình luận</h4>
            <form action="" method="POST">
                <div class="rating">
                    <input type="radio" name="rating" value="5" id="5" checked>
                    <label for="5">☆</label>
                    <input type="radio" name="rating" value="4" id="4">
                    <label for="4">☆</label>
                    <input type="radio" name="rating" value="3" id="3">
                    <label for="3">☆</label>
                    <input type="radio" name="rating" value="2" id="2">
                    <label for="2">☆</label>
                    <input type="radio" name="rating" value="1" id="1">
                    <label for="1">☆</label>
                </div>
                <div class="comment-area">
                    <textarea class="form-control" name="noi_dung" placeholder="Nội dung..." rows="4"></textarea>
                </div>
                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-success send px-5">Đăng bình luận
                        <i class="fa fa-long-arrow-right ml-1"></i>
                    </button>
                </div>
            </form>
        </div>
        <?php
        } ?>
    </div>
</div>