<div class="card">
    <h5 class="card-header text-danger">Thông Tin Admin</h5>
    <div class="card-body">
        <a href="/shop/bshop/admin/admins/admin/home" class="btn btn-info btn-sm">Trở lại</a>
        <table class="table table-hover table-product table-product mt-3 text-center">
            <thead>
                <tr class="thead-light">
                    <th>ID</th>
                    <th>Tên admin</th>
                    <th>Tên đang nhập</th>
                    <th>Email</th>
                    <th>Số điện thoại</th>
                    <th>Lựa chọn</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($admin as $row) { ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td>0<?php echo $row['tell']; ?></td>

                        <td class='text-center'>
                            <a class='btn btn-outline-info btn-sm' href='/shop/bshop/admin/admins/edit/<?php echo $row["id"]; ?>'>
                                <span class='glyphicon glyphicon-edit'></span>
                                Sửa
                            </a>
                            <a href='/shop/bshop/admin/admins/delete/<?php echo $row["id"]; ?>' class='btn btn-outline-danger btn-sm'>
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