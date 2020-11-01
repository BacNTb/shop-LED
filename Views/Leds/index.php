   <!-- Hero section -->
   <section class="hero-section">
     <div class="hero-slider owl-carousel">
       <div class="hs-item set-bg" data-setbg="/shop/bshop/views/layouts/img/images.jpg">
         <div class="container">
           <div class="row">
             <div class="col-xl-6 col-lg-7 text-white">
               <span>Sản phẩm mới</span>
               <h2>Đèn led BB</h2>
               <p>Mùa mưa bão đang đến, nếu khách chưa tìm được loại đèn thích hợp hãy đến với đèn đường LED Dragon</p>
               <a href="#" class="site-btn sb-line">XEM</a>
               <a href="#" class="site-btn sb-white">THÊM VÀO GIỎ HÀNG</a>
             </div>
           </div>
           <div class="offer-card text-white">
             <span>CHỈ TỪ</span>
             <h5>990.000<sup>đ</sup></h5>
             <p>MUA NGAY</p>
           </div>
         </div>
       </div>
       <div class="hs-item set-bg" data-setbg="/shop/bshop/views/layouts/img/unnamed.jpg">
         <div class="container">
           <div class="row">
             <div class="col-xl-6 col-lg-7 text-white">
               <span>Sản phẩm mới</span>
               <h2>Đèn led BB</h2>
               <p>Mùa mưa bão đang đến, nếu khách chưa tìm được loại đèn thích hợp hãy đến với đèn đường LED Dragon</p>
               <a href="#" class="site-btn sb-line">XEM</a>
               <a href="#" class="site-btn sb-white">THÊM VÀO GIỎ HÀNG</a>
             </div>
           </div>
           <div class="offer-card text-white">
             <span>CHỈ TỪ</span>
             <h5>990.000<sup>đ</sup></h5>
             <p>MUA NGAY</p>
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
               <img src="/shop/bshop/views/layouts/img/icons/1.png" alt="#">
             </div>
             <h2>THANH TOÁN AN TOÀN</h2>
           </div>
         </div>
         <div class="col-md-4 p-0 feature">
           <div class="feature-inner">
             <div class="feature-icon">
               <img src="/shop/bshop/views/layouts/img/icons/2.png" alt="#">
             </div>
             <h2>SẢN PHẨM CAO CẤP</h2>
           </div>
         </div>
         <div class="col-md-4 p-0 feature">
           <div class="feature-inner">
             <div class="feature-icon">
               <img src="/shop/bshop/views/layouts/img/icons/3.png" alt="#">
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
               <a href="/shop/bshop/leds/product/<?php echo $rowTop['id']; ?>">
                 <img class="product-big-img" src="/shop/bshop/views/layouts/img/product/<?php echo $arrImg['0']; ?>" class="thumbnail" alt="<?php echo $arrImg['0']; ?>">
               </a>

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
             <a href="/shop/bshop/leds/categori/<?php echo $rowCate['id']; ?>" class="btn btn-info btn-lg">
               <?php echo $rowCate['name']; ?>
             </a>
           </div>
         <?php } ?>
       </div>
       <hr class="my-4">

       <div class="row mt-5">

         <?php foreach ($cate as $rowCate) { ?>

           <div class="col-md-12 product-heading">
             <div class="heading">
               <div class="heading-title">
                 <a href="/shop/bshop/leds/categori/<?php echo $rowCate['id']; ?>" role="button">
                   <h2>
                     <span>
                       <?php echo $rowCate['name']; ?>
                     </span>
                   </h2>
                 </a>
               </div>
             </div>

             <div class="row">

               <?php $a = 0; ?>
               <?php foreach ($led as $rowLed) { ?>
                 <?php if ($rowLed['categori_id'] == $rowCate['id']) { ?>

                   <?php $a += 1; ?>

                   <?php if ($a <= 4) { ?>

                     <div class="col-lg-3 col-sm-6 product-index">
                       <div class="product-item">
                         <div class="pi-pic">

                           <?php $arrImg = []; ?>
                           <?php foreach ($img as $key => $rowImg) { ?>

                             <?php if ($rowLed['id'] == $rowImg['led_id']) { ?>

                               <?php $arrImg[] = $rowImg['name']; ?>

                             <?php } ?>
                           <?php } ?>

                           <div class="carousel-inner-img">
                             <a href="/shop/bshop/leds/product/<?php echo $rowLed['id']; ?>">
                               <img src="/shop/bshop/views/layouts/img/product/<?php echo $arrImg['0']; ?>" alt="<?php echo $arrImg['0']; ?>">
                             </a>
                           </div>

                           <div class="pi-links">
                             <a href="/shop/bshop/leds/cart/<?php echo $rowLed['id']; ?>/1" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                             <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                           </div>
                         </div>
                         <div class="pi-text">
                           <h6><?php echo number_format($rowLed['price'], 0, ',', '.'); ?><sup>đ</sup></h6>
                           <a href="/shop/bshop/leds/product/<?php echo $rowLed['id']; ?>">
                             <p><?php echo $rowLed['name']; ?></p>
                           </a>
                         </div>
                       </div>
                     </div>
                   <?php } ?>
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
               <a href="/shop/bshop/leds/product/<?php echo $rowTop['id']; ?>">
                 <img class="product-big-img" src="/shop/bshop/views/layouts/img/product/<?php echo $arrImg['0']; ?>" class="thumbnail" alt="<?php echo $arrImg['0']; ?>">
               </a>

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
   <!-- letest product section end -->


   <!-- Banner section -->
   <section class="banner-section">
     <div class="container">
       <div class="banner set-bg" data-setbg="img/banner-bg.jpg">
         <div class="tag-new">MỚI</div>
         <span>SẢN PHẨM MỚI NHẤT</span>
         <h2>THEO DANH MỤC</h2>
         <a href="/shop/bshop/leds/categori/all" class="site-btn">XEM NGAY</a>
       </div>
     </div>
   </section>
   <!-- Banner section end  -->