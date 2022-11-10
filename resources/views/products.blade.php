
@vite('resources/css/app.css')
@if (isset(Auth::user()->use_name))
		<x-app-layout>
			@include('include.header')
			@include('include.slider')
			
				<div class="main">
				<div class="content">
					<div class="content_top">
						<div class="heading">
							@if(isset($cate_name))
								<h3>{{ $cate_name }}</h3>
							@else
								<h3>Trang chủ</h3>
							@endif
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
							@if(isset($cate_name))
								<h3>{{ $cate_name }}</h3>
							@else
								<h3>Trang chủ</h3>
							@endif
						</div>
						<div class="clear"></div>
					</div>
					<div style="margin-left: 90px" class="section group sm:ml-20 ">
						@foreach($products as $product)
						<div  class="grid_1_of_4 images_1_of_4 ">
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

			<br>
			<br>
			<br>
			@include('include.footer')


	
@endif


