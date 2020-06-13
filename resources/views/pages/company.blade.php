@extends('layouts.default')
@section('main_section')
<section class="companies-info">
	<div class="container">
		<div class="company-title">
			<h3>All Companies</h3>
		</div><!--company-title end-->
		<div class="companies-list">
			<div class="row">
				@foreach ($companies as $company)
					<div class="col-lg-3 col-md-4 col-sm-6">
						<div class="company_profile_info">
							<div class="company-up-info">
								<img src="{{asset('connect/images/resources/companies/original/'.$company->profile_image)}}" alt="">
								<h3>{{$company->name}}</h3>   <?php $dt = $company->created_at  ?>
								<h4>Establish {{$dt->diffForHumans()}}</h4>
								<ul>
									<li><a href="#" title="" class="message-us">Apply for a post</a></li>
									
								</ul>
							</div>
							<a href="company-profile.html" title="" class="view-more-pro">View Profile</a>
						</div><!--company_profile_info end-->
					</div>
				@endforeach
			</div>
		</div><!--companies-list end-->
	</div>
</section><!--companies-info end-->
@endsection

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="{{asset('connect/toastr.js')}}"></script>
<script type="text/javascript" src="{{asset('connect/js/popper.js')}}"></script>
<script type="text/javascript" src="{{asset('connect/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('connect/js/jquery.mCustomScrollbar.js')}}"></script>
<script type="text/javascript" src="{{asset('connect/lib/slick/slick.min.js')}}"></script>
<script type="text/javascript" src="{{asset('connect/js/scrollbar.js')}}"></script>
<script type="text/javascript" src="{{asset('connect/js/script.js')}}"></script>
<script type="text/javascript" src="{{asset('connect/vue.js')}}"></script>