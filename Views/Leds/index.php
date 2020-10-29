  <!-- Hero section -->
  <section class="hero-section">
    <div class="hero-slider owl-carousel">
      <div class="hs-item set-bg" data-setbg="/bshop/views/layouts/img/ledpanel_banner.gif">
        <div class="container">
          <div class="row">
            <div class="col-xl-6 col-lg-7 text-white">
              <span>New Arrivals</span>
              <h2>denim jackets</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
              <a href="#" class="site-btn sb-line">XEM</a>
              <a href="#" class="site-btn sb-white">THÊM VÀO GIỎ HÀNG</a>
            </div>
          </div>
          <div class="offer-card text-white">
            <span>from</span>
            <h2>$29</h2>
            <p>SHOP NOW</p>
          </div>
        </div>
      </div>
      <div class="hs-item set-bg" data-setbg="/bshop/views/layouts/img/ledpanel_banner.gif">
        <div class="container">
          <div class="row">
            <div class="col-xl-6 col-lg-7 text-white">
              <span>New Arrivals</span>
              <h2>denim jackets</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
              <a href="#" class="site-btn sb-line">XEM</a>
              <a href="#" class="site-btn sb-white">THÊM VÀO GIỎ HÀNG</a>
            </div>
          </div>
          <div class="offer-card text-white">
            <span>from</span>
            <h2>$29</h2>
            <p>SHOP NOW</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="slide-num-holder" id="snh-1"></div>
    </div>
  </section>
  <!-- Hero section end -->



  <!-- Features section -->
  <section class="features-section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4 p-0 feature">
          <div class="feature-inner">
            <div class="feature-icon">
              <img src="/bshop/views/layouts/img/icons/1.png" alt="#">
            </div>
            <h2>THANH TOÁN AN TOÀN</h2>
          </div>
        </div>
        <div class="col-md-4 p-0 feature">
          <div class="feature-inner">
            <div class="feature-icon">
              <img src="/bshop/views/layouts/img/icons/2.png" alt="#">
            </div>
            <h2>SẢN PHẨM CAO CẤP</h2>
          </div>
        </div>
        <div class="col-md-4 p-0 feature">
          <div class="feature-inner">
            <div class="feature-icon">
              <img src="/bshop/views/layouts/img/icons/3.png" alt="#">
            </div>
            <h2>GIAO HÀNG MIỄN PHÍ</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Features section end -->


  <!-- letest product section -->
  <section class="top-letest-product-section">
    <div class="container">
      <div class="section-title">
        <h2>SẢN PHẨM MỚI NHẤT</h2>
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
                    <img class="product-big-img" src="/bshop/views/layouts/img/<?php echo $arrImg['0']; ?>" class="thumbnail" alt="<?php echo $arrImg['0']; ?>">

              <div class="pi-links">
                <a href="/bshop/leds/cart/<?php echo $rowTop['id']; ?>/1" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
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
  <!-- letest product section end -->



  <!-- Product filter section -->
  <section class="product-filter-section">
    <div class="container">
      <div class="section-title">
        <h2>DANH SÁCH SẢN PHẨM THEO DANH MỤC</h2>
      </div>

      <div class="row">
        <?php
        $arrName = [];
        $arrId = [];
        ?>
        <?php foreach ($cate as $rowCate) { ?>

          <?php
          $arrName[$rowCate['name']] = $rowCate['name'];
          $arrId[$rowCate['id']] = $rowCate['id'];
          ?>

          <div class="col-md-3 product-filter-menu">
            <a href="/bshop/leds/categori/<?php echo $rowCate['id']; ?>" class="btn btn-info btn-lg">
              <?php echo $rowCate['name']; ?>
            </a>
          </div>
        <?php } ?>
      </div>
      <hr class="my-4">

      <div class="row mt-5">

        <?php foreach ($cate as $rowCate) { ?>

          <div class="col-md-12">
            <div class="col-md-12 product-filter-menu product-filter-menu-a">
              <p class="lead">
                <a class="btn btn-primary btn-lg" href="/bshop/leds/categori/<?php echo $rowCate['id']; ?>" role="button"><?php echo $rowCate['name']; ?></a>
              </p>
            </div>

            <div class="row">
              <?php foreach ($led as $rowLed) { ?>
                <?php if ($rowLed['categori_id'] == $rowCate['id']) { ?>
                  <div class="col-lg-3 col-sm-6 product-index">
                    <div class="product-item">
                      <div class="pi-pic">

                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                          <div class="carousel-inner">
                            <?php foreach ($img as $rowImg) { ?>
                              <?php if ($rowLed['id'] == $rowImg['led_id']) { ?>

                                <?php $img_name = $rowImg['name']; ?>

                                <div class="carousel-item active">
                                  <a href="/bshop/leds/product/<?php echo $rowLed['id']; ?>">
                                    <img src="/bshop/views/layouts/img/<?php echo $img_name; ?>" class="thumbnail" alt="<?php echo $img_name; ?>">
                                  </a>
                                </div>

                              <?php } ?>
                            <?php } ?>
                          </div>
                        </div>

                        <div class="pi-links">
                          <a href="/bshop/leds/cart/<?php echo $rowLed['id']; ?>/1" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                          <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                        </div>
                      </div>
                      <div class="pi-text">
                        <h6><?php echo number_format($rowLed['price'], 0, ',', '.'); ?><sup>đ</sup></h6>
                        <p><?php echo $rowLed['name']; ?></p>
                      </div>
                    </div>
                  </div>
                <?php } ?>
              <?php } ?>
            </div>
          </div>

          <hr class="my-4">

        <?php } ?>


      </div>
    </div>
  </section>
  <!-- Product filter section end -->


  <!-- Banner section -->
  <section class="banner-section">
    <div class="container">
      <div class="banner set-bg" data-setbg="img/banner-bg.jpg">
        <div class="tag-new">MỚI</div>
        <span>SẢN PHẨM MỚI NHẤT</span>
        <h2>THEO DANH MỤC</h2>
        <a href="/bshop/leds/categori/all" class="site-btn">XEM NGAY</a>
      </div>
    </div>
  </section>
  <!-- Banner section end  -->