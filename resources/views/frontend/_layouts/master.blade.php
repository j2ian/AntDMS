<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link
		href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i"
		rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{asset("css/app.css")}}" type="text/css" />
	<link rel="stylesheet" href="{{asset("css/theme.css")}}" type="text/css" />
	<link rel="stylesheet" href="{{asset("css/custom.css")}}" type="text/css" />

	<meta name="viewport" content="width=device-width, initial-scale=1" />
	@yield('css')
	<!-- Document Title
	============================================= -->
	<title>@yield('title') | Canvas</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">
		<!-- Header
		============================================= -->
		@include('frontend._layouts.header')
		<!-- #header end -->
		
		@yield('slider')
		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				@yield('content')

			</div>

		</section><!-- #content end -->
		<!-- Footer
		============================================= -->
		@include('frontend._layouts.footer ')
		<!-- #footer end -->
	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script src="{{asset("js/app.js")}}"></script>
	<script src="{{asset("js/theme.js")}}"></script>
	@yield('script')
</body>

</html>