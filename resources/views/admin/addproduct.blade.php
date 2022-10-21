@include('admin.include.header')
@include('admin.include.slidebar')
<div class="grid_10">
    <div class="box round first grid">
        <h2>Thêm sản phẩm</h2>
        <div class="block">               
         <form action="" method="post" enctype="multipart/form-data">
            <table class="form">
               
                <tr>
                    <td>
                        <label>Tên sản phẩm</label>
                    </td>
                    <td>
                        <input type="text" placeholder="Nhập tên sản phẩm" class="medium" />
                    </td>
                </tr>
				<tr>
                    <td>
                        <label>Thể loại</label>
                    </td>
                    <td>
                        <select id="select" name="select">
                            <option>Chọn thể loại sách</option>
                            <option value="1">Công nghệ thông tin</option>
                            <option value="2">Kinh tế</option>
                            <option value="3">Khoa học</option>
                        </select>
                    </td>
                </tr>
				<tr>
                    <td>
                        <label>Tác giả</label>
                    </td>
                    <td>
                        <select id="select" name="select">
                            <option>Chọn tác giả</option>
                            <option value="1">Tác giả 1</option>
                            <option value="2">Tác giả 2</option>
                            <option value="3">Tác giả 3</option>
                        </select>
                    </td>
                </tr>
				
				 <tr>
                    <td style="vertical-align: top; padding-top: 9px;">
                        <label>Mô tả</label>
                    </td>
                    <td>
                        <textarea width='100px' class="tinymce"></textarea>

                    </td>
                </tr>
				<tr>
                    <td>
                        <label>Giá</label>
                    </td>
                    <td>
                        <input type="text" placeholder="Nhập vào giá sản phẩm ..." class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Kích thước</label>
                    </td>
                    <td>
                        <input type="text" placeholder="Nhập kích thước sản phẩm..." class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Người dịch</label>
                    </td>
                    <td>
                        <input type="text" placeholder="Nhập tên người dịch sách..." class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Hình mô tả</label>
                    </td>
                    <td>
                        <input type="file" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Năm xuất bản</label>
                    </td>
                    <td>
                        <input type="text" placeholder="Nhập vào năm xuất bản..." class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Số trang</label>
                    </td>
                    <td>
                        <input type="text" placeholder="Nhập vào số trang..." class="medium" />
                    </td>
                </tr>
				{{-- <tr>
                    <td>
                        <label>Product Type</label>
                    </td>
                    <td>
                        <select id="select" name="select">
                            <option>Select Type</option>
                            <option value="1">Featured</option>
                            <option value="2">Non-Featured</option>
                        </select>
                    </td>
                </tr> --}}

				<tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" Value="Thêm" />
                    </td>
                </tr>
            </table>
            </form>
        </div>
    </div>
</div>
<!-- Load TinyMCE -->
<script src="js/tiny-mce/jquery.tinymce.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        setupTinyMCE();
        setDatePicker('date-picker');
        $('input[type="checkbox"]').fancybutton();
        $('input[type="radio"]').fancybutton();
    });
</script>
<!-- Load TinyMCE -->
@include('admin.include.footer')
