<div class="card">
  <h5 class="card-header text-danger">Thông Tin Danh Mục</h5>
  <div class="card-body">
    <!-- <a href="/admin/categoris/create/" class="btn btn-primary btn-xs">
        Thêm danh mục
    </a> -->

    <table class="table table-hover table-product table-product mt-3 text-center">
        <thead>
            <tr class="thead-light">
                <th>ID</th>
                <th>Tên Danh Mục</th>
                <th>Thông Tin</th>
                <th>Trạng Thái</th>
                <th>Lựa chọn</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($cate as $row) { ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td>
                        <a style="border-radius:5px; border: none;" href="/shop/bshop/admin/leds/homecateid/<?php echo $row['id']; ?>" class="list-group-item list-group-item-action"><?php echo $row['name']; ?></a>
                    </td>
                    <td><?php echo $row['description']; ?></td>
                    <td><?php echo $row['status']; ?></td>
                    <td class='text-center'>
                        <a class='btn btn-outline-info btn-sm' href='/shop/bshop/admin/categoris/edit/<?php echo $row["id"];?>' >
                            <span class='glyphicon glyphicon-edit'></span> 
                            Sửa
                        </a> 
                        <a href='/shop/bshop/admin/categoris/delete/<?php echo $row["id"];?>' class='btn btn-outline-danger btn-sm'>
                            <span class='glyphicon glyphicon-remove'></span> 
                            Xóa
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
  </div>
</div>

