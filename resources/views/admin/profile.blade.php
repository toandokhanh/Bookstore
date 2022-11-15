@include('admin.include.header')
@include('admin.include.slidebar')<div class="grid_10">
    
    <div class="grid_10">
        <div class="box round first grid">
            <h2>Hồ sơ cá nhân </h2>
            <div class="block">               
             <form action="" method="post" enctype="multipart/form-data">
                <table class="form">
                   
                    <tr>
                        <td>
                            <label>Tên nhân viên</label>
                        </td>
                        <td>
                            <input disabled style="background-color: #ccc" type="text" class="medium" value="{{  Auth::guard('admin')->user()->use_name  }}" />
                        </td>
                    </tr>
                    
                     <tr>
                        <td style="vertical-align: top; padding-top: 9px;">
                            <label>Địa chỉ</label>
                        </td>
                        <td>
                            <input disabled style="background-color: #ccc" size="56" type="text" name="address" id="address" value="{{  Auth::guard('admin')->user()->address  }}">
    
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Số điện thoại</label>
                        </td>
                        <td>
                            <input disabled style="background-color: #ccc" type="text" value={{ Auth::guard('admin')->user()->phone }} class="medium" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Email</label>
                        </td>
                        <td>
                            <input  style="background-color: #ccc" disabled type="text" value={{ Auth::guard('admin')->user()->email }} class="medium" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Giới tính</label>
                        </td>
                        <td>
                            <?php switch (Auth::guard('admin')->user()->gender) {
                                case '0': ?>
                                    <input type="text" value="Nữ" class="medium" style="background-color: #ccc" disabled >
                                    <?php
                                    break;
                                case '1': ?>
                                    <input type="text" value="Nam" class="medium" style="background-color: #ccc" disabled >
                                    <?php
                                    break; 
                                case '2': ?>
                                <input type="text" value="Khác" class="medium" style="background-color: #ccc" disabled >
                                <?php
                                    break;
                            } ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Phân quyền</label>
                        </td>
                        <td>
                            <?php switch (Auth::guard('admin')->user()->role) {
                                case '2': ?>
                                    <input type="text" value="Nhân viên" class="medium" style="background-color: #ccc" disabled >
                                    <?php
                                    break; 
                                case '3': ?>
                                    <input type="text" value="Quản trị viên" class="medium" style="background-color: #ccc" disabled >
                                    <?php
                                    break;
                            } ?>

                        </td>
                    </tr>
                    {{-- <tr>
                        <td></td>
                        <td>
                            <input type="submit" name="submit" Value="Thêm" />
                        </td>
                    </tr> --}}
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
