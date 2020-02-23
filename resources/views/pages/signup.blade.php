<!DOCTYPE html>
<html lang="en">
<head>
	<title>ĐĂNG KÝ </title>
	<base href="{{ asset('') }}">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/login_v11/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/login_v11/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="public/login_v11/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/login_v11/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/login_v11/css/util.css">
	<link rel="stylesheet" type="text/css" href="public/login_v11/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30">
				@include('errors.note')
				<form class="login100-form validate-form" action="{{ route('post.signup') }}" method="post">
					@csrf
					<span class="login100-form-title p-b-55">
						Đăng ký
					</span>

					<div class="wrap-input100 validate-input m-b-16" >
						<input class="input100" type="text" name="fullname" placeholder="Họ và Tên">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-envelope"></span>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="email" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-envelope"></span>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Mật khẩu">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-lock"></span>
						</span>
					</div>					
					<div class="container-login100-form-btn p-t-25">
						<button class="login100-form-btn">
							Đăng ký
						</button>
					</div>

					<div class="text-center w-full p-t-115">
						<span class="txt1">
							Bạn đã có tài khoản?
						</span>

						<a class="txt1 bo1 hov1" href="{{ route('get.signin') }}">
							Đăng nhập ngay						
						</a>
					</div>

					<div class="container-login100-form-btn p-t-25">
						<a href="{{ route('home') }}">Trang chủ</a>
					</div>

				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="public/login_v11/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="public/login_v11/vendor/bootstrap/js/popper.js"></script>
	<script src="public/login_v11/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="public/login_v11/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="public/login_v11/js/main.js"></script>

</body>
</html>