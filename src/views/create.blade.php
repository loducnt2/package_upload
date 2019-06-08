<form action="{{ url('product/create') }}" method="POST" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="form-group">
        <label>Tên sản phẩm</label>
        <input class="form-control" name="name" placeholder="Tên sản phẩm">
    </div>
    <div class="form-group">
        <label>Ảnh</label>
        <input type="file" class="form-control" name="avatar" />
    </div>

    <button type="submit" class="btn btn-primary">Thêm</button>
    <button type="reset" class="btn btn-success">Làm mới</button>
</form>