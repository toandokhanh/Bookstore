
@if (isset(Auth::user()->use_name))
<x-app-layout>
   {{-- <h1>da dang nhap</h1> --}}
   @include('include.header')
   @include('include.slider')
   <div class="main">
    <div class="content">
    	<div class="content_top">
    		<div class="heading">
    		@if(count($products) == 0)
                <h3>Không tìm thấy sản phẩm nào liên quan đến "{{ $keys }}"</h3>
            @else
                <h3>Tìm thấy {{ count($products) }} sản phẩm liên quan đến "{{ $keys }}"</h3>
            @endif
    		</div>
    		<div class="clear"></div>
    	</div>
		<div class="section group sm:ml-20 ">
			<?php foreach($products as $product){?>
			<div class="grid_1_of_4 images_1_of_4 ">
				 <a href="{{ route('detail-product',['id'=>$product->id]) }}"><img src={{ $product->image }} alt="" /></a>
				 <h2 class="product_name"">	
							{{ $product->product_name }}
				 </h2>
				 <p class="describe">
					{{ $product->describe }}
				 </p>
				 <p><span class="price">{{ number_format($product->product_price, 0, '.', '.'). " VND" }}</span></p>
				 <!-- https://www.fahasa.com/kiep-nao-ta-cung-tim-thay-nhau-tai-ban-2022.html -->
				 <div class="button"><span><a href={{ route('detail-product',['id'=>$product->id]) }} class="details">Thông tin chi tiết</a></span></div>
			</div>
			<?php };?>
		</div>
    </div>
 </div>
   @include('include.footer')
   
</x-app-layout>
@else
   {{-- <h1>chua dang nhap</h1> --}}
   @include('include.header')
   @include('include.slider')
   <div class="main">
    <div class="content">
    	<div class="content_top">
    		<div class="heading">
    		@if(count($products) == 0)
                <h3>Không tìm thấy sản phẩm nào liên quan đến "{{ $keys }}"</h3>
            @else
                <h3>Tìm thấy {{ count($products) }} sản phẩm liên quan đến "{{ $keys }}"</h3>
            @endif
    		</div>
    		<div class="clear"></div>
    	</div>
		<div class="section group sm:ml-20 ">
			<?php foreach($products as $product){?>
			<div class="grid_1_of_4 images_1_of_4 ">
				 <a href="{{ route('detail-product',['id'=>$product->id]) }}"><img src={{ $product->image }} alt="" /></a>
				 <h2 class="product_name"">	
							{{ $product->product_name }}
				 </h2>
				 <p class="describe">
					{{ $product->describe }}
				 </p>
				 <p><span class="price">{{ number_format($product->product_price, 0, '.', '.'). " VND" }}</span></p>
				 <!-- https://www.fahasa.com/kiep-nao-ta-cung-tim-thay-nhau-tai-ban-2022.html -->
				 <div class="button"><span><a href={{ route('detail-product',['id'=>$product->id]) }} class="details">Thông tin chi tiết</a></span></div>
			</div>
			<?php };?>
		</div>
    </div>
 </div>
   @include('include.footer')
@endif