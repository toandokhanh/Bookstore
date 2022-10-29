

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
    {{ $products = DB::table('products')
    ->where('id', [$id])
    ->get()
    ;}}
</div>

@include('admin.include.header')
@include('admin.include.slidebar')
<div class="grid_10">
    <div class="box round first grid">
        <h2>Sửa sản phẩm</h2>
        <div class="block">               
         <form action="{{ route('listing-update-product',['id'=>$id])}}" method="post" enctype="multipart/form-data" >
            @csrf
            {{-- @method('put') --}}
            <table class="form">
                <tr>
                    <td>
                        <label hidden>Mã người tạo</label>
                    </td>
                    <td>
                            <input hidden name="ac_id" type="text" value="{{ Auth::guard('admin')->user()->id; }}" class="medium" />   
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Tên sản phẩm</label>
                    </td>
                    <td>
                        @foreach ($products as $product) 
                        
                        <input required name="product_name" type="text" value="{{$product->product_name }}" placeholder="Nhập tên sản phẩm" class="medium" />
                        
                    </td>
                </tr>
				<tr>
                    <td>
                        <label>Thể loại</label>
                    </td>
                    <td>
                        <select required name="cate_id" id="select" >
                            <option>Chọn thể loại sách</option>
                            @foreach ($catetorys as $catetory)
                                @if ($catetory->id === $product->cate_id)
                                <option  selected value="{{ $product->cate_id }}">{{ $catetory->cate_name }}</option>   
                                @endif
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
                        <select required  name="publisher_id" id="select" >
                            <option>Chọn nhà xuất bản</option>
                            @foreach ($publishers as $publisher)
                            @if ($publisher->id === $product->publisher_id)
                                <option selected value="{{ $product->publisher_id }}">{{ $publisher->publisher_name }}</option>   
                            @endif
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
                        <select required name="author_id" id="select" >
                            <option>Chọn tác giả</option>
                            @foreach ($authors as $author)
                            @if ($author->id === $product->author_id)
                                <option selected value="{{ $product->author_id }}">{{ $author->author_name }}</option>   
                            @endif
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
                        <textarea rows="5" cols="66" aria-valuemax="123" required name="describe" width='100px' class="tinymce">{{ $product->describe }}</textarea>
                    </td>
                </tr>
				<tr>
                    <td>
                        <label>Giá</label>
                    </td>
                    <td>
                        <input value="{{ $product->product_price }}" name="product_price" type="text" placeholder="Nhập vào giá sản phẩm ..." class="medium @error('product_price') is-invalid @enderror" />
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
                        <input value="{{ $product->size }}" name="size" type="text" placeholder="Nhập kích thước sản phẩm..." class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Người dịch</label>
                    </td>
                    <td>
                        <input value="{{ $product->translater }}" name="translater" type="text" placeholder="Nhập tên người dịch sách..." class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Hình mô tả</label>
                    </td>
                    <td>
                        <input  name="product_image" size="72px" type="text" value= "{{ $product->image }}">
                    </td>
                    {{-- <td>
                        <input  type="file" id="image" name="image" class="medium"/>
                    </td> --}}
                </tr>
                {{-- <tr>
                    <td>
                        <label>Hình mô tả ban đầu</label>
                    </td>
                    <td>
                        <img width="160px" height="160px" src="{{ $product->image }}" alt="">
                    </td>
                </tr> --}}
                <tr>
                    <td>
                        <label>Năm xuất bản</label>
                    </td>
                    <td>
                        <input value="{{ $product->year_of_manufacture }}" name="year_of_manufacture" type="text" placeholder="Nhập vào năm xuất bản..." class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Số trang</label>
                    </td>
                    <td>
                        <input value="{{ $product->number_of_pages }}" name="number_of_pages" type="text" placeholder="Nhập vào số trang..." class="medium" />
                    </td>
                    @endforeach
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
