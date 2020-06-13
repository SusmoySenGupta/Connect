<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{asset('register/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('register/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('register/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('register/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('register/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('register/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('register/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('register/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('register/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('register/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('register/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
                <form class="login100-form validate-form" method="POST" action="{{ url()->to('signup') }}">
                    @csrf
					<span class="login100-form-title p-b-34">
						Register
					</span>
					
					<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type your name">
                    <input class="input100" type="text" name="name" placeholder="Name" value="{{old('name')}}">
                        <span class="focus-input" style="color:red">{{$errors->first('name')}}</span>
					</div>
					<div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Type username">
						<input class="input100" type="text" name="username" placeholder="User name" value="{{old('username')}}">
						<span class="focus-input" style="color:red">{{$errors->first('username')}}</span>
                    </div>
                    <div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type your email">
						<input class="input100" type="email" name="email" placeholder="Email" value="{{old('email')}}">
						<span class="focus-input" style="color:red">{{$errors->first('email')}}</span>
					</div>
					<div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Type your nid no">
						<input class="input100" type="number" name="nid" placeholder="NID no" value="{{old('nid')}}">
                        <span class="focus-input" style="color:red">{{$errors->first('nid')}}</span>
					</div>
					<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type your phonr number">
						<input  class="input100" type="text" name="phone_no" placeholder="Phone number"value="{{old('phone_no')}}">
						<span class="focus-input" style="color:red">{{$errors->first('phone_no')}}</span>
					</div>
					<div class="wrap-input100 rs2-wrap-input100 m-b-20" data-validate="Select your gender">
							<select class="input100" name="gender_code" style="padding-top: 15px; padding-bottom: 15px" data-validate="Type your name">
									<option value="">Gender</option>
									<option value="1">Male</option>
									<option value="2">Female</option>
									<option value="3">Other</option>
								  </select>
						<span class="focus-input" style="color:red">{{$errors->first('gender_code')}}</span>
                    </div>
                    <div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type your address">
						<input  class="input100" type="text" name="address" placeholder="Address"value="{{old('address')}}">
						<span class="focus-input" style="color:red">{{$errors->first('address')}}</span>
					</div>
					<div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Type your birth date">
						<input class="input100" type="date" name="birth_date" placeholder="Date of birth"value="{{old('birth_date')}}">
						<span class="focus-input" style="color:red">{{$errors->first('birth_date')}}</span>
                    </div>
                    <div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type user name">
						<input  class="input100" type="password" name="password" placeholder="password">
						<span class="focus-input" style="color:red">{{$errors->first('password')}}</span>
					</div>
					<div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
						<input class="input100" type="password" name="confirm_password" placeholder="Confirm Password">
						<span class="focus-input" style="color:red">{{$errors->first('confirm_password')}}</span>
                    </div>            				
					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
                            {{-- {{ __('Register') }} --}}
                            Register
						</button>
					</div>
				</form>

            <div class="login100-more" style="background-image: url('{{asset('register/images/'.'bg-'.rand(1,5).'.jpg')}}');"></div>
			</div>
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="{{asset('register/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('register/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('register/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('register/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('register/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('register/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('register/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('register/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('register/js/main.js')}}"></script>
<!--===============================================================================================-->
    {{-- <script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script> --}}

</body>
</html>