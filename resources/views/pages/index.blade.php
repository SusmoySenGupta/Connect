@extends('layouts.default')
@section('main_section')
<main>
	<div class="main-section">
		<div class="container">
			<div class="main-section-data">
				<div class="row">
					<div class="col-lg-3 col-md-4 pd-left-none no-pd">
						<div class="main-left-sidebar no-margin">
							<div class="user-data full-width">
								<div class="user-profile">
									<div class="username-dt">
										<div class="usr-pic">		
										<img src="{{asset('connect/images/resources/users/original/'.$user->profile_image)}}" alt="">
										</div>
									</div><!--username-dt end-->
									<div class="user-specs">
										<h3>{{session()->get('name')}}</h3>
										<span>{{$position}}</span>
									</div>
								</div><!--user-profile end-->
								<ul class="user-fw-status">
									<li>
										<h4>Followers</h4>
										<span>{{$followers}}</span>
									</li>
									<li>	
										<h4>Following</h4>
										<span>{{$following}}</span>
									</li>
									<li>
										<a href="{{url()->to('profile/'.session()->get('username'))}}" title="">View Profile</a>
									</li>
								</ul>
							</div><!--user-data end-->
								<div class="suggestions full-width">
									<div class="sd-title">
										<h3>Suggestions</h3>
										<i class="la la-ellipsis-v"></i>
									</div><!--sd-title end-->
									<div class="suggestions-list">
										{{-- dynamic suggestion--}}
										<div class="suggestion-usd">
										<img src="{{asset('connect/images/resources/s1.png')}}" alt="">
											<div class="sgt-text">
												<h4>Jessica William</h4>
												<span>Graphic Designer</span>
											</div>
											<span><i class="la la-plus"></i></span>
										</div>
										{{-- /dynamic suggestion --}}
										<div class="view-more">
											<a href="#" title="">View More</a>
										</div>
									</div><!--suggestions-list end-->
								</div><!--suggestions end-->
								@include('includes.extras.tags')
							</div><!--main-left-sidebar end-->
						</div>
						<div class="col-lg-6 col-md-8 no-pd">
							<div class="main-ws-sec">
								<div class="post-topbar">
									<div class="user-picy">
									<img src="{{asset('connect/images/resources/users/original/'.$user->profile_image)}}" alt="">
									</div>
									
								</div><!--post-topbar end-->
								@foreach ($posts as $post)	
								<div class="posts-section">
									<div class="post-bar">
										<div class="post_topbar">
											<div class="usy-dt">
												<img src="{{asset('connect/images/resources/users/original/'.$post->profile_image)}}" height="30px" width="30px" alt="">
												<div class="usy-name">
													<h3>
													<a href="{{url()->to('profile/'.$post->username)}}" style="color:black">{{$post->name}}</a>
													</h3>
													<span><img src="{{asset('connect/images/clock.png')}}" alt=""></span>
												</div>
											</div>
											<div class="ed-opts">
												<a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
												<ul class="ed-options">
													<li><a href="#" title="">Edit Post</a></li>
													<li><a href="#" title="">Unsaved</a></li>
													<li><a href="#" title="">Unbid</a></li>
													<li><a href="#" title="">Close</a></li>
													<li><a href="#" title="">Hide</a></li>
												</ul>
											</div>
										</div>
										<div class="epi-sec">
											<ul class="descp">
												
												<li><img src="{{asset('connect/images/icon9.png')}}" alt=""><span>Dreamweaver</span></li>
											</ul>
										</div>
										<div class="job_descp">
										<img src="{{asset('connect/images/resources/users/original/posts/'.$post->image)}}" alt="">
										</div>
										<div class="job-status-bar">
											<ul class="like-com">
												<li>
													<a href="#" class="active"><i class="fas fa-heart"></i> Like</a>
												</li> 
											</ul>
											<a href="#"><i class="fas fa-eye"></i>Views 50</a>
										</div>
									</div><!--post-bar end-->
								
								</div><!--posts-section end-->
								@endforeach
							</div><!--main-ws-sec end-->
						</div>

						
						
					</div>
				</div><!-- main-section-data end-->
			</div> 
		</div>
	</main>

	

</div><!--theme-layout end-->
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="{{asset('connect/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('connect/js/popper.js')}}"></script>
<script type="text/javascript" src="{{asset('connect/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('connect/js/jquery.mCustomScrollbar.js')}}"></script>
<script type="text/javascript" src="{{asset('connect/lib/slick/slick.min.js')}}"></script>
<script type="text/javascript" src="{{asset('connect/js/scrollbar.js')}}"></script>
<script type="text/javascript" src="{{asset('connect/js/script.js')}}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script type="text/javascript" src="{{asset('connect/vue.js')}}"></script>
<script>
	toastr.options = {
  "closeButton": false,
  "debug": false,
  "newestOnTop": false,
  "progressBar": true,
  "positionClass": "toast-bottom-left",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "4000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
};
toastr.success('Have fun storming the castle!', 'Miracle Max Says');
</script>
</body>
</html>
