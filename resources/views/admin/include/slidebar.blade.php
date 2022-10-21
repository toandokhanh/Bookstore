<div class="grid_2">
    <div class="box sidemenu">
        <div class="block" id="section-menu">
            <ul class="section menu">
               <li><a class="menuitem">Tùy chọn trang web</a>
                    <ul class="submenu">
                        <li><a href="#titleslogan">Tiêu đề & Khẩu hiệu</a></li>
                        <li><a href="#social">Truyền thông xã hội</a></li>
                        <li><a href="#copyright">Bản quyền</a></li>
                        
                    </ul>
                </li>
				
                 <li><a class="menuitem">Cập nhật trang</a>
                    <ul class="submenu">
                        <li><a>Về chúng tôi</a></li>
                        <li><a>Liên hệ</a></li>
                    </ul>
                </li>
				<li><a class="menuitem">Tùy chọn thanh trượt</a>
                    <ul class="submenu">
                        <li><a href="#addslider">Thêm thanh trượt</a> </li>
                        <li><a href="#sliderlist">Danh sách thanh trượt</a> </li>
                    </ul>
                </li>
                <li><a class="menuitem">Danh mục</a>
                    <ul class="submenu">
                        <li><a href="#addcat">Thêm danh mục</a> </li>
                        <li><a href="#catlist">Danh sách danh mục</a> </li>
                    </ul>
                </li>
                <li><a class="menuitem">Tùy chọn sản phẩm</a>
                    <ul class="submenu">
                        <li><a href={{ route('listing-addproduct')}}>Thêm sản phẩm</a> </li>
                        <li><a href={{ route('listing-index',['model'=>'Product'])}}>Danh sách sản phẩm</a> </li>
                    </ul>
                </li>
                @if (Auth::guard('admin')->user()->role === 3)
                     <li><a class="menuitem">Quản lý nhân viên <script src="https://cdn.lordicon.com/pzdvqjsp.js"></script>
                        <lord-icon
                            src="https://cdn.lordicon.com/dnmvmpfk.json"
                            trigger="loop"
                            delay="1000"
                            colors="primary:#c71f16"
                            style="width:22px;height:22px;margin-left:10px;">
                        </lord-icon></a>
                    <ul class="submenu">
                        <li><a href="#addstaff">Thêm nhân viên</a> </li>
                        <li><a href="#stafflist">Danh sách nhân viên</a> </li>
                    </ul>
                </li>
                @endif
            </ul>
        </div>
    </div>
</div>