<div class="card">
    <h5 class="card-header">Danh sách Admin</h5>
    <div class="card-body">
        <a href="/admin/admins/create/" class="btn btn-primary btn-xs">
            Thêm Admin
        </a>
        <table class="table table-hover table-product table-product text-center">
            <thead>
                <tr class="thead-light">
                    <th>ID</th>
                    <th>Tên Khách Hàng</th>
                    <th>Email</th>
                    <th>Số điện thoại</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($admin as $row) { ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['tell']; ?></td>

                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>