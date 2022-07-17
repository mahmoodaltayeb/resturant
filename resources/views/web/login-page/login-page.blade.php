<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{url('/')}}/web-theme/login-theme/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('/')}}/web-theme/login-theme/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('/')}}/web-theme/login-theme/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('/')}}/web-theme/login-theme/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('/')}}/web-theme/login-theme/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{url('/')}}/web-theme/login-theme/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('/')}}/web-theme/login-theme/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('/')}}/web-theme/login-theme/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{url('/')}}/web-theme/login-theme/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('/')}}/web-theme/login-theme/css/util.css">
	<link rel="stylesheet" type="text/css" href="{{url('/')}}/web-theme/login-theme/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="border-on-img">
					<!-- border on image -->
				</div>
				<div class="login100-form-title " >
					<span class="login100-form-title-1 ">
						<div class="signin-txt">
						<span style="color:#bb9356;">Sign</span> in
					</div>
					</span>
				</div>

				<form method="POST" action="{{url('web/do-login')}}" class="login100-form validate-form ">
					@csrf
					<div class="zindx wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="email" placeholder="Enter username">
						<span class="focus-input100"></span>
					</div>

					<div class="zindx wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Enter password">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox zindx">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div class="zindx">
							<a href="#" class="txt1 ">
								Forgot Password?
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn zindx">
						<button class="login100-form-btn">
							Login
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="{{url('/')}}/web-theme/login-theme/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="{{url('/')}}/web-theme/login-theme/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="{{url('/')}}/web-theme/login-theme/vendor/bootstrap/js/popper.js"></script>
	<script src="{{url('/')}}/web-theme/login-theme/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="{{url('/')}}/web-theme/login-theme/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="{{url('/')}}/web-theme/login-theme/vendor/daterangepicker/moment.min.js"></script>
	<script src="{{url('/')}}/web-theme/login-theme/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="{{url('/')}}/web-theme/login-theme/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="{{url('/')}}/web-theme/login-theme/js/main.js"></script>

</body>
</html>