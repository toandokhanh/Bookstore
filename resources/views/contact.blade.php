@if (isset(Auth::user()->use_name))
    <x-app-layout>
    	@include('include.header')
		<div class="main">
			<div class="content">
				<div class="support">
					<div class="support_desc">
						<h3>Hỗ trợ trực tuyến</h3>
						<p><span>24 Giờ  |  7 ngày trong tuần  |  365 ngày trong năm  |  Hỗ trợ kỹ thuật trực tiếp</span></p>
						<p> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
					</div>
						<img src="" alt="" />
					<div class="clear"></div>
				</div>
				<div class="section group">
						<div class="col span_2_of_3">
						<div class="contact-form">
							<h2>Liên hệ với chúng tôi</h2> <br>
								<form class="text-[20px]" method="POST" action="{{ route('feedbackAccount') }}">
									@csrf
									<input style="display: none"  type="text" name="ac_id" value="{{ Auth::user()->id }}">
									<span><label>Lời nhắn</label></span> 
									<span><textarea name="feedback"> </textarea></span> <br>
									<span><input type="submit" value="Gửi"></span>
								</form>
						</div>
						</div>
						<div class="col span_1_of_3">
						<div class="company_address">
								<h2>Thông tin CTY</h2>
										<p>xxx, An Khánh, Ninh Kiều, Cần Thơ </p>
										<p>12/09/2002</p>
										<p>VIỆT NAM</p>
								<p>Phone:(+84) 09168149xx</p>
								<p>Fax: (+84) 03350002xx</p>
								<p>Email: <span>toanb2012046@student.ctu.edu.vn</span></p>
								<p>Follow on: <span>Facebook</span>, <span>Twitter</span></p> <br>
								<div class="map">	
									<iframe
										src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15715.73357121595!2d105.77034015000001!3d10.0223554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a0895a51d60719%3A0x9d76b0035f6d53d0!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBD4bqnbiBUaMah!5e0!3m2!1svi!2s!4v1668423858919!5m2!1svi!2s"
										width="350"
										height="260"
										style="border:0;"
										allowfullscreen=""
										loading="lazy"
										referrerpolicy="no-referrer-when-downgrade"
										>
									</iframe>
								</div>
						</div>
						</div>
					</div>    	
			</div>
		</div>
    	@include('include.footer')
    </x-app-layout>
	 
@else
    @include('include.header')
	<div class="main">
		<div class="content">
			<div class="support">
				<div class="support_desc">
					<h3>Hỗ trợ trực tuyến</h3>
					<p><span>24 Giờ  |  7 ngày trong tuần  |  365 ngày trong năm  |  Hỗ trợ kỹ thuật trực tiếp</span></p>
					<p> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
				</div>
					<img src="" alt="" />
				<div class="clear"></div>
			</div>
			<div class="section group">
					<div class="col span_2_of_3">
					<div class="contact-form">
						<h2>Liên hệ với chúng tôi</h2>
							<form class="text-[20px]" method="POST" action="{{ route('feedbackUse') }}">
								@csrf
								<div>
									<span><label>Họ và Tên</label></span>
									<span><input name="use_name" type="text" value=""></span>
								</div>
								<div>
									<span><label>Email</label></span>
									<span><input name="email" type="text" value=""></span>
								</div>
								<div>
									<span><label>Số điện thoại</label></span>
									<span><input name="phone" type="text" value=""></span>
								</div>
								<div>
									<span><label>Lời nhắn</label></span>
									<span><textarea name="feedback"> </textarea></span>
								</div>
							<div>
									<span><input type="submit" value="GỨI"></span>
							</div>
							</form>
					</div>
					</div>
					<div class="col span_1_of_3">
					<div class="company_address">
							<h2>Thông tin CTY</h2>
									<p>xxx, An Khánh, Ninh Kiều, Cần Thơ </p>
									<p>12/09/2002</p>
									<p>VIỆT NAM</p>
							<p>Phone:(+84) 0916814948</p>
							<p>Fax: (+84) 0335000275</p>
							<p>Email: <span>toanb2012046@student.ctu.edu.vns</span></p>
							<p>Follow on: <span>Facebook</span>, <span>Twitter</span></p> <br>
							<iframe
										src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15715.73357121595!2d105.77034015000001!3d10.0223554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a0895a51d60719%3A0x9d76b0035f6d53d0!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBD4bqnbiBUaMah!5e0!3m2!1svi!2s!4v1668423858919!5m2!1svi!2s"
										width="350"
										height="260"
										style="border:0;"
										allowfullscreen=""
										loading="lazy"
										referrerpolicy="no-referrer-when-downgrade"
										>
									</iframe>
					</div>
					</div>
				</div>    	
		</div>
	</div>
	@include('include.footer')
@endif