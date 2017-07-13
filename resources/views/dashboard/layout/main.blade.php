<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title>{{ config( 'dashboard.page.title', 'Unamed Page' ) }}</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
  @section( 'dashboard.page.head' )
  <!-- page stylesheets -->
	<link rel="stylesheet" href="{{ asset( 'css/webfont.css' ) }}">
	<link rel="stylesheet" href="{{ asset( 'css/climacons-font.css' ) }}">
	<link rel="stylesheet" href="{{ asset( 'bower_components/bootstrap/dist/css/bootstrap.css' ) }}">
	<link rel="stylesheet" href="{{ asset( 'css/font-awesome.css' ) }}">
	<link rel="stylesheet" href="{{ asset( 'css/card.css' ) }}">
	<link rel="stylesheet" href="{{ asset( 'css/sli.css' ) }}">
	<link rel="stylesheet" href="{{ asset( 'css/animate.css' ) }}">
	<link rel="stylesheet" href="{{ asset( 'css/app.css' ) }}">
	<link rel="stylesheet" href="{{ asset( 'css/app.skins.css' ) }}"> 
	<!-- end page stylesheets -->
	@show
	<!-- endbuild -->
</head>
<body class="page-loading">
	<!-- page loading spinner -->
	{{-- <div class="pageload">
		<div class="pageload-inner">
			<div class="sk-rotating-plane"></div>
			</div>
		</div>
	</body> --}}
	<div class="app layout-fixed-header">
		@include( 'dashboard.layout.sidebar' )
		@include( 'dashboard.layout.content' )
		@include( 'dashboard.layout.footer' )
	</div>
</html>