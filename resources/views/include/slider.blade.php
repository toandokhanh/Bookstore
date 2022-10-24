<div hidden >{{ $sliders = DB::table('sliders')
    ->get()
    ;}}
</div>
	<div class="header_bottom">
		<div class="header_bottom_left">
			<div class="section group">
				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						 <a href="preview.php"> <img src="image_books/book/slide1.jpg" alt="" /></a>
					</div>
				    <div class="text list_2_of_1">
						<h2>coyote</h2>
						<p>Sách bán chạy nhất trên Thời báo Quốc gia và New York ...</p>
						<div class="button"><span><a href="preview.php">Thêm <span class="fix-icon-in-slider"><ion-icon style="width: 20px;" class="cart__icon" name="cart-outline"></ion-icon> </span></a></span></div>
				   </div>
			   </div>			
				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						  <a href="preview.php"><img src="image_books/book/slide2.jpg" alt=""></a>
					</div>
					<div class="text list_2_of_1">
						  <h2>Friends</h2>
						  <p>owen Ashleigh là một nhà văn đang gặp khó khăn và ...</p>
						  <div class="button"><span><a href="preview.php">Thêm <span class="fix-icon-in-slider"><ion-icon style="width: 20px;" class="cart__icon" name="cart-outline"></ion-icon> </span></a></span></div>
					</div>
				</div>
			</div>
			<div class="section group">
				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						 <a href="preview.php"> <img src="image_books/book/slide3.jpg" alt="" /></a>
					</div>
				    <div class="text list_2_of_1">
						<h2>Rising</h2>
						<p>Một người mẹ trẻ gặp rắc rối khao khát khao được...</p>
						<div class="button"><span><a href="preview.php">Thêm <span class="fix-icon-in-slider"><ion-icon style="width: 20px;" class="cart__icon" name="cart-outline"></ion-icon> </span></a></span></div>
				   </div>
			   </div>			
				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						  <a href="preview.php"><img src="image_books/book/slide4.jpg" alt="" /></a>
					</div>
					<div class="text list_2_of_1">
						  <h2>Franzs</h2>
						  <p>Từ Colleen Hoover, tác giả bán chạy nhất ...</p>
						  <div class="button"><span><a href="preview.php">Thêm <span class="fix-icon-in-slider"><ion-icon style="width: 20px;" class="cart__icon" name="cart-outline"></ion-icon> </span></a></span></div>
					</div>
				</div>
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
