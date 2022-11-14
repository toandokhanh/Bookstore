<div hidden >{{ $sliders = DB::table('sliders')
    ->get()
    ;}}
</div>
<div hidden >{{ $products = DB::table('products')
	->whereIn('id', [21,22,23,19])	
	->get()
	;}}
</div>
	<div class="header_bottom">
		<div class="header_bottom_left">
			<div class="section group">
				@foreach ($products as $product)
				<div style="margin-left: 10px" class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						 <a href="{{ route('detail-product',['id'=>$product->id]) }}"> <img src="{{ $product->image }}" alt="" /></a>
					</div>
				    <div class="text list_2_of_1">
						<h2 style="font-size: 15px; margin-bottom: 5px;" class="product_name">{{ $product->product_name }}</h2>
						<p style="height: 59px; text-align: start;" class="describe">{{ $product->describe }}</p>
						<div style="margin-bottom: 5px;" class="button"><span><a href="{{ route('detail-product',['id'=>$product->id]) }}">Thêm <span class="fix-icon-in-slider"><ion-icon style="width: 20px;" class="cart__icon" name="cart-outline"></ion-icon> </span></a></span></div>
				   </div>
			   </div>
			   @endforeach		
			</div>
		  <div class="clear"></div>
		</div>
			 <div class="header_bottom_right_images">
		   <!-- FlexSlider -->
             
			<section class="slider">
				  <div class="flexslider">
					<ul class="slides">
						<?php foreach ($sliders as $slider) { ?>
						<li><img src={{ $slider->slider_image }} alt=""/></li>
						<?php }?>
				    </ul>
				  </div>
	      </section>
<!-- FlexSlider -->
	    </div>
	  <div class="clear"></div>
  </div>	
