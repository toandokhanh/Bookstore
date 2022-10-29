
@include('admin.include.header')
@include('admin.include.slidebar')
{{-- {{ $model }} --}}
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Danh sách</h2>
                <div class="block">        
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							@foreach($configs as $config)
								<th>{{ $config['name'] }}</th>
							@endforeach
							<th >HÀNH ĐỘNG</th>
						</tr>
					</thead>
					<tbody>
						@foreach($records as $record)
						<tr class="odd gradeX">
							@foreach($configs as $config)
								@switch ($config['type'])
									@case('text')
										<td>{{ $record[$config['field']] }}</td>
									@break
									@case('image')
										<td><img width="50" height="50" src="{{ $record[$config['field']] }}" alt=""></td>
									@break
									@case('number')
										<td>{{ number_format($record[$config['field']], 0, '.', '.'). " VND" }}</td>
									@break
									@case('role')
										@switch ($record[$config['field']])
											@case('1')
											<td>Khách hàng</td>
											@break
											@case('2') 
											<td>Nhân viên</td>
											@break
											@case('3') 
											<td>Quản trị viên</td> 
											@break
										@endswitch
									@break
									@endswitch
							@endforeach

							<td>
								<a href="{{ route('listing-edit',['model' => $model ,'id' => $record['id']]) }}">Sửa</a> || 
								<a href="{{ route('listing-delete',['model' => $model,'id' => $record['id']]) }}">Xóa</a></td>
							{{-- <td><a href="">Sửa</a> || <a href="">Xóa</a></td> --}}
						</tr>
						@endforeach
						
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
