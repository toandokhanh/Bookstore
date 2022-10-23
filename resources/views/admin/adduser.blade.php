<div hidden >{{ $roles = DB::table('roles')
    ->get()
    ;}}
</div>
<style>
    .suc{
        position: absolute;
        top:160px;
        color: green;
        left: 640px;
    }
</style>
@include('admin.include.header')
@include('admin.include.slidebar')<div class="grid_10">
    <div class="grid_10">
        <div class="box round first grid">
            <h2>Thêm Người dùng</h2>
            <div class="block">               
             <form action={{ route('listing-store-adduser') }} method="post" enctype="multipart/form-data">
                @csrf
                <table class="form">
                   
                    <tr>
                        <td>
                            <label>Tên người dùng</label>
                        </td>
                        <td>
                            <input required name="use_name" type="text" placeholder="Nhập tên người dùng" class="medium" />
                        </td>
                    </tr>
                    
                     <tr>
                        <td style="vertical-align: top; padding-top: 9px;">
                            <label>Địa chỉ</label>
                        </td>
                        <td>
                            <textarea required name="address" width='100px' class="tinymce"></textarea>
    
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Số điện thoại</label>
                        </td>
                        <td>
                            <input required name="phone" type="text" placeholder="Nhập vào số điện thoại người dùng ..." class="medium @error('product_price') is-invalid @enderror" />
                            @error('phone')
                            <div style="color: red" class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Email</label>
                        </td>
                        <td>
                            <input required name="email" type="text" placeholder="Nhập email người dùng để đăng nhập..." class="medium @error('product_price') is-invalid @enderror" />
                            @error('email')
                            <div style="color: red" class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Giới tính</label>
                        </td>
                        <td>
                            <select required name="gender" id="select" name="select">
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
                            <select required name="role" id="select" name="select">
                                <option>Chọn quyền</option>
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->role_name }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <tr>
                            <td>
                                <label>Mật khẩu</label>
                            </td>
                            <td>
                                <input required name="password" type="password" class="medium @error('product_price') is-invalid @enderror" />
                                @error('password')
                                <div style="color: red" class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </td>
                            
                        </tr>
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
