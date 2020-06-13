@extends('layouts.login')
@section('main_section')
<body class="sign-in" oncontextmenu="return false;">
	<div class="wrapper">		
		<div class="sign-in-page">
			<div class="signin-popup">
				<div class="signin-pop">
					<div class="row">
						<div class="col-lg-6">
							<div class="cmp-info">
								<div class="cm-logo">
                                <img src="{{asset('connect/images/cm-logo.png')}}" alt="">
									
								</div><!--cm-logo end-->	
								<img src="{{asset('register/images/'.'bg-'.rand(1,5).'.jpg')}}" alt="">			
							</div><!--cmp-info end-->
						</div>
						<div class="col-lg-6">
							<div class="login-sec">
								<ul class="sign-control">
								<a href="{{url()->to('signup')}}" title="">Create new account</a>			
		
								</ul>			
								<div class="sign_in_sec current" id="tab-1">
									<h3>Sign in</h3>
                                <form method="POST" action="{{url()->to('signin')}}">
                                    @csrf
										<div class="row">
											<div class="col-lg-12 no-pdd">
												<div class="sn-field">
                                                <input type="email" name="email" placeholder="Email" value="{{old('email')}}">
                                                    <i class="la la-user"></i>
                                                    <span style="color:red">{{$errors->first('email')}}</span>
												</div><!--sn-field end-->
											</div>
											<div class="col-lg-12 no-pdd">
												<div class="sn-field">
													<input type="password" name="password" placeholder="Password">
													<i class="la la-lock"></i>
												</div>
                                            </div>
                                            @if(Session::has('msg'))
                                            <div class="col-lg-12 no-pdd">
												<div class="alert alert-danger" role="alert">
													Worng email or password
												</div>
                                            </div>
                                            @endif
											<div class="col-lg-12 no-pdd">
												<button type="submit" value="submit">Sign in</button>
											</div>
										</div>
									</form>
								</div><!--sign_in_sec end-->
								
								</div>		
							</div><!--login-sec end-->
						</div>
					</div>		
				</div><!--signin-pop end-->
			</div><!--signin-popup end-->
			<div class="footy-sec">
				<div class="container">
					<ul>
						<li><a href="help-center.html" title="">Help Center</a></li>
						<li><a href="about.html" title="">About</a></li>
						<li><a href="#" title="">Privacy Policy</a></li>
						<li><a href="#" title="">Community Guidelines</a></li>
						<li><a href="#" title="">Cookies Policy</a></li>
						<li><a href="#" title="">Career</a></li>
						<li><a href="forum.html" title="">Forum</a></li>
						<li><a href="#" title="">Language</a></li>
						<li><a href="#" title="">Copyright Policy</a></li>
					</ul>
					
				</div>
			</div><!--footy-sec end-->
		</div><!--sign-in-page end-->
@endsection