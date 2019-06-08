<div class="container">
	<h1>Danh sách sản phẩm</h1>
	<a href="{{ url('product/create') }}">Thêm mới</a>
	<div class="col-md-8">
		<table class="table table-striped table-bordered table-hover" id="dataTables-example">
	        <thead>
	            <tr role="row">
	                <th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1"
	                    colspan="1" aria-sort="ascending"
	                    aria-label="Rendering engine: activate to sort column ascending">
	                    ID
	                </th>
	                <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1"
	                    colspan="1" aria-label="Browser: activate to sort column ascending">Tên sản phẩm
	                </th>
	                <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1"
	                    colspan="1" aria-label="Browser: activate to sort column ascending">Ảnh
	                </th>
	            </tr>
	        </thead>
	        <tbody>
	            @foreach($products as $item)
					<tr class="even gradeC">
						<td>{{ $item->id }}</td>  
						<td>{{ $item->name }}</td>
						<td>
							<img src='{{ url("upload/product/$item->avatar") }}' width="100px" height="100px">
						</td>
					</tr>
				@endforeach
			</tbody>
	    </table>
	</div>
</div>