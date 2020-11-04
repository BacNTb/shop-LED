<div class="card">
    <h5 class="card-header text-danger">Thêm Admin</h5>
    <div class="card-body">
        <a href="/shop/bshop/admin/admins/admin/home" class="btn btn-info btn-sm" style="margin-bottom: 20px">Trở lại</a>

        <form method='post' action='#' enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">Tên Admin</label>
                <input type="text" class="form-control" id="name" placeholder="VD: Nguyễn Thế Bắc" name="name" required="">
            </div>

            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="image">Ảnh Admin</label>
                    <input style="display: none;" type="file" id="image" class="custom-file-input" name="image[]" required="">
                    <label class="custom-file-lable" for="image">Chọn ảnh</label>
                </div>
                <div class="col-md-12" id="image_show">
                
                </div>
            </div>

            <div class="form-group">
                <label for="title">Tài khoản</label>
                <input type="text" class="form-control" id="username" placeholder="VD: Bacnt" name="username" required="">
            </div>

            <div class="form-group">
                <label for="title">Mật khẩu </label>
                <input type="password" class="form-control" id="password" placeholder="VD: 123456789" name="password" required="">
            </div>

            <div class="form-group">
                <label for="description">Email</label>
                <input type="email" class="form-control" id="email" placeholder="VD: 20090000" name="email" required="">
            </div>

            <div class="form-group">
                <label for="description">Số điện thoại</label>
                <input type="tell" class="form-control" id="tell" placeholder="VD: 0977888999" name="tell" required="">
            </div>

            <input style="width: 120px;" type="submit" class="btn btn-primary" value="Thêm">
            <input style="width: 120px;" type="reset" class="btn btn-warning" value="Nhập lại">
        </form>
    </div>
</div>