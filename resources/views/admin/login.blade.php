@vite('resources/css/app.css')
<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Login admin</title>
<link rel="stylesheet" type="text/css" href="../admin/css/stylelogin.css" media="screen" />
<style>
	.bug{
		color:red;
		display: flex;
		justify-content: center;
		align-items: center;
		z-index: 1000000000000;
		margin-top: -450px
	}
	</style>	
</head>
<body>
    <br><br><br><br>
    <br>  
	<div class="flex justify-center items-center mb-5">{{ view('components.application-logo-new') }} </div>
	<br>
<div class="container">
	
	<section id="content">
		<form action="/ad/login" method="POST">
            @csrf
			<h1>Đăng nhập</h1>
            <p>Hãy đăng nhập với vai trò là quản trị viên</p>
            <br>
			<div>
				<input type="text" placeholder="Email" required="" name="email"/>
			</div>
			<div>
				<input type="password" placeholder="Mật khẩu" required="" name="password"/>
			</div>
			<div>
				<input type="text" value="2" name="role" hidden />
			</div>
			<div class="flex justify-center items-center">
				<input class="" type="submit" value="Log in" />
			</div>
		</form><!-- form -->
		<div class="button">
			<a href="">Đào tạo với dự án trực tiếp</a>
		</div><!-- button -->
	</section><!-- content -->
</div><!-- container -->
</body>
</html>