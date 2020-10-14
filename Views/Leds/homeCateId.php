<div class="card">
    <h5 class="card-header">Danh sách sản phẩm theo danh mục</h5>
    <div class="card-body">
        <!-- <div>
            <a href="/admin/leds/create/" class="btn btn-primary btn-xs">
                Thêm sản phẩm
            </a>
        </div> -->


        <div class="row">
            <?php foreach ($cate as $row) { ?>
                <div class="col-md-3 mt-3">
                    <a href="/admin/leds/homecateid/<?php echo $row['id']; ?>" class="btn btn-outline-info btn-xs w-100">
                        <?php echo $row['name']; ?>
                    </a>
                </div>
            <?php } ?>
        </div>


        <?php if ($led) { ?>

            <table class="table table-hover table-product table-product mt-3 text-center">
                <thead>
                    <tr class="thead-light">
                        <th>ID</th>
                        <th>Danh mục</th>
                        <th>Tên sản phẩm</th>
                        <th style="width: 20%;">Ảnh sản phẩm</th>
                        <th>Giá sản phẩm</th>
                        <!-- <th>Thông tin sản phẩm</th> -->
                        <th>Lựa chọn</th>
                    </tr>
                </thead>

                <tbody>

                    <?php foreach ($led as $rowLed) { ?>
                        <tr>
                            <td><?php echo $rowLed['id']; ?></td>
                            <td>
                                <?php foreach ($cate as $rowCate) { ?>
                                    <?php if ($rowLed['categori_id'] == $rowCate['id']) { ?>

                                        <?php echo $rowCate['name']; ?>

                                    <?php } ?>
                                <?php } ?>
                            </td>
                            <td><?php echo $rowLed['name']; ?></td>

                            <td>
                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <?php foreach ($img as $rowImg) { ?>
                                            <?php if ($rowLed['id'] == $rowImg['led_id']) { ?>

                                                <?php $img_name = $rowImg['name']; ?>
                                                <?php $img_id = $rowImg['led_id']; ?>

                                                <div class="carousel-item active">
                                                    <img style="margin: 0 auto;" width="100px" src="/admin/Views/img/<?php echo $img_name; ?>" class="thumbnail" alt="<?php echo $img_name; ?>">
                                                </div>

                                            <?php } ?>
                                        <?php } ?>
                                    </div>
                                </div>
                            </td>

                            <td><?php echo number_format($rowLed['price'], 0, ',', '.'); ?><sup>đ</sup></td>
                            <!-- <td style="width: 200px;"><?php //echo $rowLed['description']; 
                                                            ?></td> -->
                            <td class='text-center'>
                                <a class='btn btn-outline-info btn-sm' href='/admin/leds/edit/<?php echo $rowLed["id"]; ?>'>
                                    <span class='glyphicon glyphicon-edit'></span>
                                    Sửa
                                </a>
                                <a href='/admin/leds/delete/<?php echo $rowLed["id"]; ?>' class='btn btn-outline-danger btn-sm'>
                                    <span class='glyphicon glyphicon-remove'></span>
                                    Xóa
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        <?php } ?>

    </div>
</div>