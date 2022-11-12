{{-- trang chủ --}}
@vite('resources/css/app.css')
<div hidden >{{ $products = DB::table('products')
										->whereIn('id', [1,2,3,24])	
										->get()
										;}}
</div>
<div class="main">
    <div class="content">
    	<div class="content_top">
    		<div class="heading">
    		<h3>Trang chủ</h3>
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
