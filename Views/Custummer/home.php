<div class="card">
    <h5 class="card-header">Danh sách sản phẩm</h5>
    <div class="card-body">
        <div>
            <a href="/admin/leds/create/" class="btn btn-primary btn-xs">
                Thêm sản phẩm
            </a>
        </div>


        <?php foreach ($admin as $row) { ?>
            <a href="/admin/leds/homecateid/<?php echo $row['id']; ?>" class="btn btn-xs">
                <?php echo $row['name'];?>
            </a>
        <?php } ?>
    </div>
</div>