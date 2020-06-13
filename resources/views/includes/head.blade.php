<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Connect</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="stylesheet" type="text/css" href="{{asset('connect/css/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('connect/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('connect/css/line-awesome.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('connect/css/line-awesome-font-awesome.min.css')}}">
	<link href="{{asset('connect/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="{{asset('connect/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('connect/css/jquery.mCustomScrollbar.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('connect/lib/slick/slick.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('connect/lib/slick/slick-theme.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('connect/css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('connect/css/responsive.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('connect/imageUpload/croppie.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('connect/toastr.css')}}">
</head>
<style>
	/* styles unrelated to zoom */
	* { border:0; margin:0; padding:0; }
	p { position:absolute; top:3px; right:28px; color:#555; font:bold 13px/1 sans-serif;}

	/* these styles are for the demo, but are not required for the plugin */
	.zoom {
		display:inline-block;
		position: relative;
	}
	
	/* magnifying glass icon */
	.zoom:after {
		content:'';
		display:block; 
		width:33px; 
		height:33px; 
		position:absolute; 
		top:0;
		right:0;
		background:url(icon.png);
	}

	.zoom img {
		display: block;
	}

	.zoom img::selection { background-color: transparent; }

	#ex2 img:hover { cursor: url(grab.cur), default; }
	#ex2 img:active { cursor: url(grabbed.cur), default; }
</style>
<body oncontextmenu="return false;">	