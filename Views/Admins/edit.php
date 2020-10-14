<div class="card">
    <h5 class="card-header">Sửa Thông Tin Admin</h5>
    <div class="card-body">
        <a href="/admin/admins/admin/" class="btn btn-info btn-sm" style="margin-bottom: 20px">Trở lại</a>

        <form method='post' action='#'>
            <div class="form-group">
                <label for="title">Tên Admin</label>
                <input type="text" class="form-control" id="title" name="name" value="<?php if (isset($Admin["name"])) echo $Admin["name"]; ?>">
            </div>

            <div class="form-group">
                <label for="title">Tài khoản</label>
                <input type="text" class="form-control" id="username" name="username" value="<?php if (isset($Admin["username"])) echo $Admin["username"]; ?>">
            </div>

            <div class="form-group">
                <label for="title">Mật khẩu</label>
                <input type="text" class="form-control" id="password" name="password" value="<?php if (isset($Admin["password"])) echo $Admin["password"]; ?>">
            </div>

            <div class="form-group">
                <label for="description">Email</label>
                <input type="text" class="form-control" id="email" name="email" value="<?php if (isset($Admin["email"])) echo $Admin["email"]; ?>">
            </div>

            <div class="form-group">
                <label for="description">Số điện thoại</label>
                <input type="text" class="form-control" id="tell" name="tell" value="<?php if (isset($Admin["tell"])) echo $Admin["tell"]; ?>">
            </div>
            <button type="submit" class="btn btn-success">Lưu</button>
            <button type="reset" class="btn btn-warning">Nhập lại</button>
        </form>
    </div>
</div>