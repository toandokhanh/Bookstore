
@include('admin.include.header')
@include('admin.include.slidebar')

        <div class="grid_10">
            <div class="box round first grid">
                <h2>Danh sách sản phẩm</h2>
                <div class="block">        
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<?php foreach($configs as $config) {?>
								<th>{{ $config['name'] }}</th>
							<?php } ?>
							<th >HÀNH ĐỘNG</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($records as $record){ ?>
						<tr class="odd gradeX">
							<?php foreach($configs as $config) {?>
								<?php switch ($config['type']) {
									case 'text':?>
										<td>{{ $record[$config['field']] }}</td>
										<?php 
										break;
									case 'image':?>
										<td><img width="50" height="50" src="{{ $record[$config['field']] }}" alt=""></td>
										<?php
										break;
									case 'number':?>
										<td>{{ number_format($record[$config['field']], 0, '.', '.'). " VND" }}</td>
									<?php
										break;	
									case 'role':?>
									<?php switch ($record[$config['field']]) {
										case '1':
											?>
											<td>Khách hàng</td>
											<?php 
											break;
										case '2':
											?>
											<td>Nhân viên</td>
											<?php 
											break;
										case '3':
											?>
											<td>Quản trị viên</td>
											<?php 
											break;
									}?>

									<?php
									break;	
								}?>
							
							<?php } ?>
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
