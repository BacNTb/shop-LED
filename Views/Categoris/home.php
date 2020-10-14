<div class="card">
    <h5 class="card-header">Danh sách sản phẩm</h5>
    <div class="card-body">
        <div>
            <a href="/admin/categoris/create/" class="btn btn-primary btn-xs">
                Thêm Danh Mục
            </a>
        </div>

        <ul class="list-group mt-3">
            <?php foreach ($cate as $row) { ?>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a href="/admin/leds/homecateid/<?php echo $row['id']; ?>" class="btn btn-xs">
                        <?php echo $row['name'];?>
                    </a>
                    <span class="badge badge-primary badge-pill">14</span>
                </li>
            <?php } ?>
        </ul>

    </div>
</div>