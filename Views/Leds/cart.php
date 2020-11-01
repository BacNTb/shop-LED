<!-- Page info -->
<div class="page-top-info">
    <div class="container">
        <h4>Giỏ Hàng</h4>
        <!-- <div class="site-pagination">
            <a href="">Home</a> /
            <a href="">Your cart</a>
        </div> -->
    </div>
</div>
<!-- Page info end -->

<!-- cart section end -->
<section class="cart-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="cart-table">
                    <h3>Sản Phẩm Đã Chọn</h3>

                    <?php if (isset($_SESSION['cart'])) { ?>

                        <?php if (count($led) > 0) { ?>

                            <div class="cart-table-warp">
                                <form action="" id="form-submit" method="post">

                                    <table>
                                        <thead>
                                            <tr>
                                                <th class="product-th">Sản phẩm</th>
                                                <th class="quy-th">Số lượng</th>
                                                <th class="total-th">Giá tiền</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php $totalpriceAll = 0 ?>

                                            <?php foreach ($led as $rowLed) { ?>
                                                <?php $totalprice = $rowLed['price'] * $_SESSION['quantity'][$rowLed['id']]; ?>

                                                <?php $totalpriceAll += $totalprice; ?>


                                                <?php $arrImg = []; ?>
                                                <?php foreach ($img as $key => $rowImg) {

                                                    if ($rowLed['id'] == $rowImg['led_id']) {

                                                        $arrImg[] = $rowImg['name'];
                                                    }
                                                }
                                                ?>
                                                <tr>
                                                    <td class="product-col">
                                                        <div class="img">
                                                            <img src="/shop/bshop/views/layouts/img/<?php echo $arrImg['0']; ?>" alt="<?php echo $arrImg['0']; ?>">
                                                        </div>

                                                        <div class="pc-title">
                                                            <h4><?php echo $rowLed['name']; ?></h4>
                                                            <p><?php echo number_format($rowLed['price'], 0, ',', '.'); ?><sup>đ</sup></p>
                                                        </div>
                                                    </td>
                                                    <td class="quy-col">
                                                        <div class="quantity">
                                                            <div class="pro-qty">

                                                                <input name=sum[<?php echo $rowLed['id']; ?>] type="number" min="0" value="<?php echo $_SESSION['quantity'][$rowLed['id']]; ?>">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="total-col">
                                                        <h4><?php echo number_format($totalprice, 0, ',', '.'); ?><sup>đ</sup></h4>
                                                    </td>
                                                </tr>
                                            <?php } ?>

                                        </tbody>
                                    </table>
                                </form>

                            </div>
                            <div class="total-cost">
                                <h6>Tổng tiền <span><?php echo number_format($totalpriceAll, 0, ',', '.'); ?><sup>đ</sup></span></h6>
                            </div>
                        <?php } else { ?>
                            <h5>Không Có Sản Phẩm Nào</h5>

                        <?php } ?>
                    <?php } ?>
                </div>
            </div>
            <div class="col-lg-3 card-right">
                <form class="promo-code-form">
                    <input type="text" placeholder="Mã giảm giá ...">
                    <button>Gửi</button>
                </form>
                <a href="" onclick="$('#form-submit').submit(); return false;" class="site site-btn">Cập Nhật</a>
                <a href="/shop/bshop/leds/checkout/" class="site-btn">Mua Hàng</a>
                <a href="/shop/bshop/leds/categori/all/" class="site-btn sb-dark">Mua Thêm Sản Phẩm</a>
            </div>
        </div>
    </div>
</section>


<section class="related-product-section">
    <div class="container">
        <div class="section-title text-uppercase">
            <h2>Sản Phẩm Khác</h2>
        </div>
        <div class="product-slider owl-carousel">

            <?php foreach ($top as $rowTop) { ?>
                <?php $arrImg = []; ?>
                <?php foreach ($img as $key => $rowImg) { ?>

                    <?php if ($rowTop['id'] == $rowImg['led_id']) { ?>

                        <?php $arrImg[] = $rowImg['name']; ?>

                    <?php } ?>
                <?php } ?>
                <div class="product-item">
                    <div class="pi-pic">

                        <div class="tag-new">New</div>
                        <img class="product-big-img" src="/shop/bshop/views/layouts/img/<?php echo $arrImg['0']; ?>" class="thumbnail" alt="<?php echo $arrImg['0']; ?>">

                        <div class="pi-links">
                            <a href="/shop/bshop/leds/cart/<?php echo $rowTop['id']; ?>/1" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                            <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6><?php echo number_format($rowTop['price'], 0, ',', '.'); ?><sup>đ</sup></h6>
                        <p><?php echo $rowTop['name']; ?></p>
                    </div>
                </div>

            <?php } ?>

        </div>
    </div>
</section>
