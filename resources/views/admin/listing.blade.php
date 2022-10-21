
@include('admin.include.header')
@include('admin.include.slidebar')

        <div class="grid_10">
            <div class="box round first grid">
                <h2>Category List</h2>
                <div class="block">        
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>Stt</th>
							<th>Tên sản phẩm</th>
							<th>Giá</th>
							<th>kích thước</th>
							<th>Người dịch</th>
							<th>Hình ảnh</th>
							<th>Năm phát hành</th>
							<th>Số trang</th>
							<th>HÀNH ĐỘNG</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($records as $record){ ?>
						<tr class="odd gradeX">
							<td>{{ $record->id }}</td>
							<td>{{ $record->product_name }}</td>
							<td>{{ $record->product_price }}</td>
							<td>{{ $record->size }}</td>
							<td>{{ $record->translater }} </td>
							<td><img height="30" width="30" src="{{ $record->image }}"></td>
							<td>{{ $record->year_of_manufacture }}</td>
							<td>{{ $record->number_of_pages }}</td>
							<td><a href="">Sửa</a> || <a href="">Xóa</a></td>
						</tr>
						<?php };?>

					</tbody>
				</table>
               </div>
            </div>
        </div>
<script type="text/javascript">
	$(document).ready(function () {
	    setupLeftMenu();

	    $('.datatable').dataTable();
	    setSidebarHeight();
	});
</script>
@include('admin.include.footer')
