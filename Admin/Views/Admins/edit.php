<div class="card">
    <h5 class="card-header text-danger">Sửa Thông Tin Admin  -  <?php if (isset($admin["name"])) echo $admin["name"]; ?></h5>
    <div class="card-body">
        <a href="/shop/bshop/admin/admins/admin/" class="btn btn-info btn-sm" style="margin-bottom: 20px">Trở lại</a>

        <form method='post' action='#' enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">Tên Admin</label>
                <input type="text" class="form-control" id="title" name="name" value="<?php if (isset($admin["name"])) echo $admin["name"]; ?>" required="">
            </div>

            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="image">Ảnh Admin</label>
                    <input style="display: none;" type="file" id="image" class="custom-file-input" name="image[]" required="">
                    <label class="custom-file-lable" for="image"><?php echo $admin['img']; ?></label>
                </div>

                <div class="col-md-12" id="image_show">
                    <img class="img_view" width="100px" src="/shop/bshop/admin/Views/imgadmin/<?php echo $admin['img']; ?>" class="thumbnail" alt="<?php echo $admin['img']; ?>">
                </div>
            </div>

            <div class="form-group">
                <label for="title">Tài khoản</label>
                <input type="text" class="form-control" id="username" name="username" value="<?php if (isset($admin["username"])) echo $admin["username"]; ?>" required="">
            </div>

            <div class="form-group">
                <label for="title">Mật khẩu</label>
                <input type="text" class="form-control" id="password" name="password" value="<?php if (isset($admin["password"])) echo $admin["password"]; ?>" required="">
            </div>

            <div class="form-group">
                <label for="description">Email</label>
                <input type="text" class="form-control" id="email" name="email" value="<?php if (isset($admin["email"])) echo $admin["email"]; ?>" required="">
            </div>

            <div class="form-group">
                <label for="description">Số điện thoại</label>
                <input type="text" class="form-control" id="tell" name="tell" value="<?php if (isset($admin["tell"])) echo $admin["tell"]; ?>" required="">
            </div>
            <input style="width: 120px;" type="submit" class="btn btn-primary" value="Lưu">
        </form>
    </div>
</div>