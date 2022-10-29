
<style>
    .suc{
        position: absolute;
        top:160px;
        color: green;
        left: 640px;
    }
</style>
<div hidden >{{ $catetorys = DB::table('catetorys')
    ->get()
    ;}}
    {{ $publishers = DB::table('publishers')
    ->get()
    ;}}
    {{ $authors = DB::table('authors')
    ->get()
    ;}}
</div>
@include('admin.include.header')
@include('admin.include.slidebar')
<div class="grid_10">
    <div class="box round first grid">
        <h2>Thêm sản phẩm</h2>
        <div class="block">               
         <form action="{{ route('listing-store-addproduct')}}" method="post" enctype="multipart/form-data" >
            @csrf
            @if (isset($title))
                <span>{{ $title }}</span>
            @endif
            <table class="form">
                <tr>
                    <td>
                        <label hidden >Mã người tạo</label>
                    </td>
                    <td>
                            <input hidden  name="ac_id" type="text" value="{{ Auth::guard('admin')->user()->id; }}" class="medium" />   
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Tên sản phẩm</label>
                    </td>
                    <td>
                        <input required name="product_name" type="text" placeholder="Nhập tên sản phẩm" class="medium" />
                    </td>
                </tr>
				<tr>
                    <td>
                        <label>Thể loại</label>
                    </td>
                    <td>
                        <select  name="cate_id" id="select" >
                            <option>Chọn thể loại sách</option>
                            @foreach ($catetorys as $catetory)
                                <option value="{{ $catetory->id }}">{{ $catetory->cate_name }}</option>   
                            @endforeach
                            
                        </select>
                    </td>
                </tr>
				<tr>
                    <td>
                        <label>Nhà xuất bản</label>
                    </td>
                    <td>
                        <select  name="publisher_id" id="select" >
                            <option>Chọn nhà xuất bản</option>
                            @foreach ($publishers as $publisher)
                            <option  value="{{ $publisher->id }}">{{ $publisher->publisher_name }}</option>
                            @endforeach

                        </select>
                    </td>
                </tr>
				<tr>
                    <td>
                        <label>Tác giả</label>
                    </td>
                    <td>
                        <select  name="author_id" id="select" >
                            <option>Chọn tác giả</option>
                            @foreach ($authors as $author)
                            <option value="{{ $author->id }}">{{ $author->author_name }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
				 <tr>
                    <td style="vertical-align: top; padding-top: 9px;">
                        <label>Mô tả</label>
                    </td>
                    <td>
                        <textarea rows="5" cols="66" required name="describe" width='100px' class="tinymce"></textarea>

                    </td>
                </tr>
				<tr>
                    <td>
                        <label>Giá</label>
                    </td>
                    <td>
                        <input  name="product_price" type="text" placeholder="Nhập vào giá sản phẩm ..." class="medium @error('product_price') is-invalid @enderror" />
                        @error('product_price')
                            <div style="color: red" class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Kích thước</label>
                    </td>
                    <td>
                        <input  name="size" type="text" placeholder="Nhập kích thước sản phẩm..." class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Người dịch</label>
                    </td>
                    <td>
                        <input  name="translater" type="text" placeholder="Nhập tên người dịch sách..." class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Hình mô tả</label>
                    </td>
                    <td>
                        <input  type="file" id="image" name="image" class="medium"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Năm xuất bản</label>
                    </td>
                    <td>
                        <input  name="year_of_manufacture" type="text" placeholder="Nhập vào năm xuất bản..." class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Số trang</label>
                    </td>
                    <td>
                        <input  name="number_of_pages" type="text" placeholder="Nhập vào số trang..." class="medium" />
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
<!-- Load TinyMCE -->
@include('admin.include.footer')
