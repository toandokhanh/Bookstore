@include('admin.include.header')
@include('admin.include.slidebar')<div class="grid_10">
    <div class="grid_10">
        <div class="box round first grid">
            <h2>Thêm Người dùng</h2>
            <div class="block">               
             <form action="" method="post" enctype="multipart/form-data">
                <table class="form">
                   
                    <tr>
                        <td>
                            <label>Tên người dùng</label>
                        </td>
                        <td>
                            <input type="text" placeholder="Nhập tên người dùng" class="medium" />
                        </td>
                    </tr>
                    
                     <tr>
                        <td style="vertical-align: top; padding-top: 9px;">
                            <label>Địa chỉ</label>
                        </td>
                        <td>
                            <textarea width='100px' class="tinymce"></textarea>
    
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Số điện thoại</label>
                        </td>
                        <td>
                            <input type="text" placeholder="Nhập vào số điện thoại người dùng ..." class="medium" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Email</label>
                        </td>
                        <td>
                            <input type="text" placeholder="Nhập email người dùng để đăng nhập..." class="medium" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Giới tính</label>
                        </td>
                        <td>
                            <select id="select" name="select">
                                <option>Chọn giới tính</option>
                                <option value="0">Nữ</option>
                                <option value="1">Nam</option>
                                <option value="2">Khác</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Phân quyền</label>
                        </td>
                        <td>
                            <select id="select" name="select">
                                <option>Chọn quyền</option>
                                <option value="1">Khách hàng</option>
                                <option value="2">Nhân viên</option>
                                <option value="3">Quản trị viên</option>
                            </select>
                        </td>
                    </tr>
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
@include('admin.include.footer')
