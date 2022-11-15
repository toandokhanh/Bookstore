<script src="https://cdn.lordicon.com/pzdvqjsp.js"></script>
<div hidden >
    {{ $messages = DB::table('messages')
    ->whereIn('messages.seen',['0'])
    ->get();
    }}
</div> 
<div hidden >
    {{ $bills = DB::table('bills')
    ->join('accounts', 'bills.ac_id', '=', 'accounts.id')
    ->select('bills.*','accounts.use_name','accounts.email','accounts.phone')
    ->whereIn('bills.confirmed',[0])
    ->get();
    }}
</div>   
<div class="grid_2">
    <div class="box sidemenu">
        <div class="block" id="section-menu">
            <ul class="section menu">
               <li><a class="menuitem">Chăm sóc khách hàng</a>
                    <ul class="submenu">
                        <li><a href="{{ route('amdin-turnover') }}">Doanh thu</a></li>
                        <li><a href="{{ route('admin-reply') }}">Phản hồi
                        @if (count($messages) >= 1)
                        <lord-icon
                            src="https://cdn.lordicon.com/dnmvmpfk.json"
                            trigger="loop"
                            delay="1000"
                            colors="primary:#c71f16"
                            style="width:22px;height:22px;margin-left:10px;">
                        </lord-icon>
                        @endif
                        </a></li>
                        <li><a href="{{ route('admin-confirmed') }}">Duyệt đơn 
                            @if (count($bills) >= 1)
                            <lord-icon
                                src="https://cdn.lordicon.com/dnmvmpfk.json"
                                trigger="loop"
                                delay="1000"
                                colors="primary:#c71f16"
                                style="width:22px;height:22px;margin-left:10px;">
                            </lord-icon>
                        @endif
                        </a></li>
                        
                    </ul>
                </li>
                <li><a class="menuitem">Tác giả</a>
                    <ul class="submenu">
                        <li><a href="{{ route('listing-addauthor')}}">Thêm Tác giả</a></li>
                        <li><a href="{{ route('listing-index',['model'=>'Author'])}}">Danh nhà Tác giả </a></li>
                    </ul>
                </li>
                 <li><a class="menuitem">Nhà xuất bản</a>
                    <ul class="submenu">
                        <li><a href="{{ route('listing-addpublisher')}}">Thêm nhà xuất bản</a></li>
                        <li><a href="{{ route('listing-index',['model'=>'Publisher'])}}">Danh nhà xuất bản</a></li>
                    </ul>
                </li>
				<li><a class="menuitem">Tùy chọn thanh trượt</a>
                    <ul class="submenu">
                        <li><a href={{ route('listing-addslider')}}>Thêm thanh trượt</a> </li>
                        <li><a href={{ route('listing-index',['model'=>'Slider'])}}>Danh sách thanh trượt</a> </li>
                    </ul>
                </li>
                <li><a class="menuitem">Danh mục</a>
                    <ul class="submenu">
                        <li><a href={{ route('listing-addcatetory')}}>Thêm danh mục</a> </li>
                        <li><a href={{ route('listing-index',['model'=>'Catetorys'])}}>Danh sách danh mục</a> </li>
                    </ul>
                </li>
                <li><a class="menuitem">Tùy chọn sản phẩm</a>
                    <ul class="submenu">
                        <li><a href={{ route('listing-addproduct')}}>Thêm sản phẩm</a> </li>
                        <li><a href={{ route('listing-index',['model'=>'Products'])}}>Danh sách sản phẩm</a> </li>
                    </ul>
                </li>
                @if (Auth::guard('admin')->user()->role === 3)
                     <li><a class="menuitem">Quản lý người dùng</a>
                    <ul class="submenu">
                        {{--  --}}
                        <li><a href={{ route('listing-adduser')}}>Thêm Người dùng</a> </li>
                        <li><a href={{ route('listing-index',['model'=>'User'])}}>Danh sách Người dùng</a> </li>
                    </ul>
                </li>
                @endif
            </ul>
        </div>
    </div>
</div>