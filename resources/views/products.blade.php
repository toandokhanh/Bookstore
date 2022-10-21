@vite('resources/css/app.css')
	
<div hidden >{{ $products = DB::table('products')
	// ->whereIn('id', [1,2,3,4])	
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
						<div class="heading">
						<h3>Trang chủ</h3>
						</div>
						<div class="clear"></div>
					</div>
					<div class="section group sm:ml-20 ">
						<?php foreach($products as $product){?>
						<div class="grid_1_of_4 images_1_of_4 ">
							<a href="#"><img src={{ $product->image }} alt="" /></a>
							<h2 class="product_name"">	
										{{ $product->product_name }}
							</h2>
							<p class="describe">
								{{ $product->describe }}
							</p>
							<p><span class="price">{{ $product->product_price }}</span></p>
							<!-- https://www.fahasa.com/kiep-nao-ta-cung-tim-thay-nhau-tai-ban-2022.html -->
							<div class="button"><span><a href={{ route('detail') }} class="details">Thông tin chi tiết</a></span></div>
						</div>
						<?php };?>
					</div>
				</div>
			</div>

			<br>
			<br>
			<br>
			@include('include.footer')
		</x-app-layout>
	 
@else
			@include('include.header')
			@include('include.slider')
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
							<a href="#"><img src={{ $product->image }} alt="" /></a>
							<h2 class="product_name"">	
										{{ $product->product_name }}
							</h2>
							<p class="describe">
								{{ $product->describe }}
							</p>
							<p><span class="price">{{ $product->product_price }}</span></p>
							<!-- https://www.fahasa.com/kiep-nao-ta-cung-tim-thay-nhau-tai-ban-2022.html -->
							<div class="button"><span><a href={{ route('detail') }} class="details">Thông tin chi tiết</a></span></div>
						</div>
						<?php };?>
					</div>
				</div>
			</div>

			<br>
			<br>
			<br>
			@include('include.footer')


	
@endif