<div class="card">
    <h5 class="card-header">Thêm Admin</h5>
    <div class="card-body">
        <a href="/admin/admins/admin/home" class="btn btn-info btn-sm" style="margin-bottom: 20px">Trở lại</a>

        <form method='post' action='#'>
            <div class="form-group">
                <label for="title">Tên Admin</label>
                <input type="text" class="form-control" id="name" placeholder="VD: Nguyễn Thế Bắc" name="name">
            </div>

            <div class="form-group">
                <label for="title">Tài khoản</label>
                <input type="text" class="form-control" id="username" placeholder="VD: Bacnt" name="username">
            </div>

            <div class="form-group">
                <label for="title">Mật khẩu </label>
                <input type="password" class="form-control" id="password" placeholder="VD: 123456789" name="password">
            </div>

            <div class="form-group">
                <label for="description">Email</label>
                <input type="email" class="form-control" id="email" placeholder="VD: 20090000" name="email">
            </div>

            <div class="form-group">
                <label for="description">Số điện thoại</label>
                <input type="tell" class="form-control" id="tell" placeholder="VD: 0977888999" name="tell">
            </div>

            <button type="submit" class="btn btn-success">Thêm</button>
            <button type="reset" class="btn btn-warning">Nhập lại</button>
        </form>
    </div>
</div>