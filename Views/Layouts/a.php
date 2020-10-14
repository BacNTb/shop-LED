<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trang quản trị | Admin</title>

    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
    <link rel="stylesheet" href="/admin/views/layouts/css/default.css">

</head>

<body>
    <nav class="navbar navbar-dark bg-dark navbar-fixed">
        <div class="navbar-header">
            <a class="navbar-brand" href="/admin/">Trang Quản Trị</a>
            <div class="btn-group">
                <button class="btn btn-secondary btn-sm dropdown-toggle bg-dark btn-login" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <a href="#"><?php if (isset($_SESSION['username'])) {
                                    echo $_SESSION['name'];
                                } ?></a>
                </button>
                <div class="dropdown-menu">
                    <li><a href="/admin/admins/login/out"> Đăng xuất</a></li>
                </div>
            </div>

        </div>
    </nav>
    <div class="conten">
        <div class="row">
            <div class="col-md-2 conten-nav">
                <ul class="col-sm-3 col-lg-2 nav menu">
                    <hr class="solid">
                    <li class="menu-nav active"><a href="/admin/"> Trang chủ</a></li>
                    <li class="menu-nav"><a href="/admin/categoris/cate/">Danh mục</a></li>
                    <li class="menu-nav"><a href="/admin/leds/home/">Danh sách sản phẩm</a></li>
                    <li class="menu-nav"><a href="/admin/leds/home/">Tất cả sản phẩm</a></li>
                    <li class="menu-nav"><a href="/admin/leds/homecateid/">Đèn Led đường</a></li>
                    <li class="menu-nav"><a href="/admin/admins/admin/"> Admin</a></li>
                    <hr class="solid">
                </ul>
            </div>

            <div class="col-md-10 conten-nav">
                <?php
                echo $content_for_layout;
                ?>
            </div>
        </div>
    </div>


    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <!-- JS Only  -->
    <script src="/admin/views/layouts/js/js.js"></script>
</body>

</html>