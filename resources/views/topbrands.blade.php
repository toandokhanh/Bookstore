<div hidden >{{ $products = DB::table('products')
    ->whereIn('year_of_manufacture', [2022])	
    ->get()
    ;}}
</div>
@if (isset(Auth::user()->use_name))

	<x-app-layout>
        @include('include.header')
        @include('include.slider')
        <div class="main">
            <div class="content">
                <div class="content_top">
                <div>
                    <div class="heading">
                    <h3>Sách bán chạy nhất trong năm 2022</h3>
                    </div>
                    <div class="clear"></div>
                </div>
                <div style="margin-left: 90px"  class="section group sm:ml-20 ">
                    @foreach($products as $product)
                    <div class="grid_1_of_4 images_1_of_4 ">
                        <a href="{{ route('detail-product',['id'=>$product->id]) }}"><img src={{ $product->image }} alt="" /></a>
                        <h2 class="product_name">	
                                    {{ $product->product_name }}
                        </h2>
                        <p class="describe">
                            {{ $product->describe }}
                        </p>
                        <p><span class="price">{{ number_format($product->product_price, 0, '.', '.'). " VND" }}</span></p>
                        <!-- https://www.fahasa.com/kiep-nao-ta-cung-tim-thay-nhau-tai-ban-2022.html -->
                        <div class="button"><span><a href={{ route('detail-product',['id'=>$product->id]) }} class="details">Thông tin chi tiết</a></span></div>
                    </div>
                    @endforeach
                </div>
                </div>
            </div>
        </div>
        <br>
        <br>
	</x-app-layout> @include('include.footer')
	 
@else

@include('include.header')
@include('include.slider')
<div class="main">
    <div class="content">
        <div class="content_top">
        <div>
            <div class="heading">
            <h3>Sách bán chạy nhất trong năm 2022</h3>
            </div>
            <div class="clear"></div>
        </div>
        <div style="margin-left: 90px"  class="section group sm:ml-20 ">
            @foreach($products as $product)
            <div class="grid_1_of_4 images_1_of_4 ">
                <a href="{{ route('detail-product',['id'=>$product->id]) }}"><img src={{ $product->image }} alt="" /></a>
                <h2 class="product_name">	
                            {{ $product->product_name }}
                </h2>
                <p class="describe">
                    {{ $product->describe }}
                </p>
                <p><span class="price">{{ number_format($product->product_price, 0, '.', '.'). " VND" }}</span></p>
                <!-- https://www.fahasa.com/kiep-nao-ta-cung-tim-thay-nhau-tai-ban-2022.html -->
                <div class="button"><span><a href={{ route('detail-product',['id'=>$product->id]) }} class="details">Thông tin chi tiết</a></span></div>
            </div>
            @endforeach
        </div>
        </div>
    </div>
</div>
 <br>
 <br>
 @include('include.footer')
@endif