
@if (isset(Auth::user()->cart_id))
    <div hidden >{{ $cart_id = Auth::user()->cart_id }}</div>
@endif
<div hidden >
    {{ $details = DB::table('products')
    ->join('catetorys', 'products.cate_id', '=', 'catetorys.id')
    ->join('authors', 'products.author_id', '=', 'authors.id')
    ->join('publishers', 'products.publisher_id', '=', 'publishers.id')
    // ->join('catetorys', 'products.id', '=', 'catetorys.id')
    ->whereIn('products.id', [$id])
    // ->select('products.*', 'catetorys.cate_name')
    ->get(); }}
    {{ 
        $catetorys = DB::table('catetorys')
        ->get()
    ;}}

</div>
<style>
    .docthem{
        margin: 0 20px; 
        color: #333; 
        font-size: 14px;
        text-align: justify;
        overflow: hidden;
        max-height: 200px;
        transition: 0.5s linear ;
    }
    div .active_{
	max-height: 100%;
}
</style>
@foreach ($details as $detail)


{{-- Nếu đã đăng nhập --}}
@if (isset(Auth::user()->use_name))
<x-app-layout>
@include('include.header')
<div class="main">
    <div class="content">
        <div class="section group">
                <div class="cont-desc span_1_of_2">				
                    <div class="grid images_3_of_2">
                      
                        <img src="{{ $detail->image }}" alt="" />
                    </div>
                <div class="desc span_3_of_2">
                    <h2 style="font-weight: 600;">{{ $detail->product_name }}</h2>
                    <p style="height: 150px" class="describe">{{ $detail->describe }}</p>					
                    <div class="price">
                        <p style="font-weight: 600;">Giá: <span>{{ number_format($detail->product_price, 0, '.', '.'). " VND" }}</span></p>
                        <p style="font-weight: 600;">Thể loại: <span>{{ $detail->cate_name}}</span></p>
                        <p style="font-weight: 600;">Tác giả: <span>{{ $detail->author_name}}</span></p>
                    </div>
                <div class="add-cart">
                    <form action={{ route('order',['cart_id'=>$cart_id])}} method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" class="" name="product_id" value="{{ $id }}"/>
                        <input type="number" class="buyfield" max="10" min="1" name="quantity" value="1"/>
                        <input type="submit" class="buysubmit" name="submit" value="Mua ngay"/>
                    </form>			    	
                </div>
            </div>
            <div class="product-desc">
            <h2 style="margin-bottom: 30px;">Thông tin chi tiết sản phẩm</h2>
            <div style="display: flex;">
                <div style="display: flex;flex-direction: column; margin-right: 120px;">
                    <span>Mã hàng</span>
                    <span>Tác giả</span>
                    <span>Người dịch</span>
                    <span>NXB</span>
                    <span>Năm XB</span>
                    <span>Kích thước</span>
                    <span>Số trang</span>


                </div>
                <div style="display: flex;flex-direction: column;">
                    <span>8936107812845</span>
                    <span>{{ $detail->author_name}}</span>
                    <span>{{ $detail->translater}}</span>
                    <span>{{ $detail->publisher_name}}</span>
                    <span>{{ $detail->year_of_manufacture}}</span>
                    <span>{{ $detail->size}}</span>
                    <span>{{ $detail->number_of_pages}}</span>
                </div>
            </div>
            <div>
                <h3 style="margin: 20px; font-weight: 600;">{{ $detail->product_name}}</h3>
                <p class="docthem">{{ $detail->describe  }} </p>
                <button 
                        id="btn" 
                        style=
                        "border:rgb(29, 25, 25) 1px solid;
                        font-size:15px;
                        padding: 5px 10px;
                        text-align: center;
                        margin: 0 auto;
                        display: block;
                        margin-top: 10px;
                        background-color: #1a8849;
                        color: #fff;
                        border-radius: 4px;
                        font-family: Arial;"
                        date-url="Thu gọn"
                        >
                        Đọc thêm
                </button>
        </div>
        </div>
                
    </div>
                <div class="rightsidebar span_3_of_1">
                    <h2>NHỮNG THỂ LOẠI SÁCH HAY, NÊN ĐỌC</h2> <br>
                    <ul>
                        
                        @foreach ($catetorys as $catetory)
                        <li><a href="{{ route('productsCate', $catetory->id) }}">{{ $catetory->cate_name}}</a></li>
                        @endforeach
                    </ul>
        
                    </div>
            </div>
        </div>
    <br>
    <br>
    {{-- <script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}">
        const btnDocThem = document.querySelector('#btn');
        const describe = document.querySelector('#describe');
        btnDocThem.addEventListener('click', ()=> {
            // describe.classList.toggle('active');
            alert('123')
        })
    </script> --}}
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
    <script type="text/javascript">
        function click(){
            $('.docthem').toggleClass('active_');  
        }
        $(function (){
            $('#btn').on('click',click)
        })



        
    </script> 

@include('include.footer')
</x-app-layout>
	 


{{-- khi chưa đăng nhập --}}
@else

@include('include.header')
<div class="main">
    <div class="content">
        <div class="section group">
                <div class="cont-desc span_1_of_2">				
                    <div class="grid images_3_of_2">
                        <img src="{{ $detail->image }}" alt="" />
                    </div>
                <div class="desc span_3_of_2">
                    <h2 style="font-weight: 600;">{{ $detail->product_name }}</h2>
                    <p style="height: 150px" class="describe">{{ $detail->describe }}</p>					
                    <div class="price">
                        <p style="font-weight: 600;">Giá: <span>{{ number_format($detail->product_price, 0, '.', '.'). " VND" }}</span></p>
                        <p style="font-weight: 600;">Thể loại: <span>{{ $detail->cate_name}}</span></p>
                        <p style="font-weight: 600;">Tác giả: <span>{{ $detail->author_name}}</span></p>
                    </div>
                <div class="add-cart">
                    <form action="{{ route('login') }}" method="get">
                        <input min=1 max=10 type="number" class="buyfield" name="quantity" value="1"/>
                        <input type="submit" class="buysubmit" name="submit" value="Mua ngay"/>
                    </form>					
                </div>
            </div>
            <div class="product-desc">
            <h2 style="margin-bottom: 30px;">Thông tin chi tiết sản phẩm</h2>
            <div style="display: flex;">
                <div style="display: flex;flex-direction: column; margin-right: 120px;">
                    <span>Mã hàng</span>
                    <span>Tác giả</span>
                    <span>Người dịch</span>
                    <span>NXB</span>
                    <span>Năm XB</span>
                    <span>Kích thước</span>
                    <span>Số trang</span>


                </div>
                <div style="display: flex;flex-direction: column;">
                    <span>8936107812845</span>
                    <span>{{ $detail->author_name}}</span>
                    <span>{{ $detail->translater}}</span>
                    <span>{{ $detail->publisher_name}}</span>
                    <span>{{ $detail->year_of_manufacture}}</span>
                    <span>{{ $detail->size}}</span>
                    <span>{{ $detail->number_of_pages}}</span>
                </div>
            </div>
            <div>
                <h3 style="margin: 20px; font-weight: 600;">{{ $detail->product_name}}</h3>
                <p class="docthem">{{ $detail->describe  }} </p>
                <button 
                        id="btn" 
                        style=
                        "border:rgb(29, 25, 25) 1px solid;
                        font-size:15px;
                        padding: 5px 10px;
                        text-align: center;
                        margin: 0 auto;
                        display: block;
                        margin-top: 10px;
                        background-color: #1a8849;
                        color: #fff;
                        border-radius: 4px;
                        font-family: Arial;"
                        date-url="Thu gọn"
                        >
                        Đọc thêm
                </button>
        </div>
        </div>
                
    </div>
                <div class="rightsidebar span_3_of_1">
                    <h2>NHỮNG THỂ LOẠI SÁCH HAY, NÊN ĐỌC</h2> <br>
                    <ul>
                        @foreach ($catetorys as $catetory)
                            <li><a href="{{ route('productsCate', $catetory->id) }}">{{ $catetory->cate_name}}</a></li>
                        @endforeach
                    </ul>
        
                    </div>
            </div>
        </div>
    <br>
    <br>
    {{-- <script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}">
        const btnDocThem = document.querySelector('#btn');
        const describe = document.querySelector('#describe');
        btnDocThem.addEventListener('click', ()=> {
            // describe.classList.toggle('active');
            alert('123')
        })
    </script> --}}
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
    <script type="text/javascript">
        function click(){
            $('.docthem').toggleClass('active_');  
        }
        $(function (){
            $('#btn').on('click',click)
        })
    </script> 

@include('include.footer')

@endif


@endforeach