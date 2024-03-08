<!-- Product-detail -->

<div class="container mt-3">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= $ROOT_URL ?>">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="<?= $SITE_URL . '/hang-hoa/liet-ke.php' ?>">Sản phẩm</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Chi tiết</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <!-- Image -->
        <div class="col-12 col-lg-6">
            <div class="card bg-light mb-3">
                <div class="card-body text-center">
                    <a href="#" data-toggle="modal" data-target="#productModal">
                        <!-- Ảnh sản phẩm -->
                        <img class="img-fluid" src="<?= $UPLOAD_URL . "/products/" . $hinh ?>" />
                        <p class="text-center">Phóng to ảnh</p>
                    </a>
                </div>
            </div>
        </div>

        <!-- Add to cart -->
        <div class="col-12 col-lg-6 add_to_cart_block">
            <div class="card bg-light mb-3">
                <div class="card-body text-center">
                    <h4 class="card-title"><?= $ten_hh ?></h4>
                    <!-- Giá sản phẩm -->
                    <?php
                    if ($don_gia > 0) {
                        $percent_discount = number_format($giam_gia / $don_gia * 100);
                    } else {
                        $percent_discount = 0;
                    }
                    ?>
                    <div class="product-price">
                        <div class="col d-flex justify-content-center align-items-center">
                            <del class="d-block"><?= number_format($don_gia, 0, ',') ?>đ</del>
                            <p class="text-danger font-weight-bold d-block ml-3 mb-0">
                                <?= number_format($don_gia - $giam_gia, 0, ',') ?>đ</p>
                        </div>
                    </div>

                    <!-- <p class="price_discounted">149.90 $</p> -->
                    <form method="get" action="cart.html">

                        <div class="form-group">
                            <label>Quantity :</label>
                            <div class="input-group mb-3 justify-content-center">
                                <div class="input-group-prepend">
                                    <button type="button" class="quantity-left-minus btn btn-danger btn-number"
                                        data-type="minus" data-field="">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                </div>