<div class="card">
    <h5 class="card-header">Sửa Thông Tin Danh Mục</h5>
    <div class="card-body">
        <a href="/admin/categoris/cate/" class="btn btn-info btn-sm" style="margin-bottom: 20px">Trở lại</a>

        <form method='post' action='#'>
            <div class="form-group">
                <label for="title">Tên danh mục</label>
                <input type="text" class="form-control" name="name" value="<?php if (isset($Cate["name"])) echo $Cate["name"]; ?>">
            </div>

            <div class="form-group">
                <label for="title">Thông tin danh mục</label>
                <input type="text" class="form-control" id="description" name="description" value="<?php if (isset($Cate["description"])) echo $Cate["description"]; ?>">
            </div>

            <div class="form-group">
                <label for="title">Trạng thái </label>
                <input type="number" min="0" max="1" class="form-control" id="status" name="status" value="<?php if (isset($Cate["status"])) echo $Cate["status"]; ?>">
            </div>

            <button type="submit" class="btn btn-success">Lưu</button>
            <button type="reset" class="btn btn-warning">Nhập lại</button>
        </form>
    </div>
</div>