<!DOCTYPE html>
<html lang="en">
	<head>

		<!-- start: Meta -->
		<meta charset="utf-8">
		<title>SAV</title>
		<meta name="description" content="Perfectum Dashboard Bootstrap Admin Template.">
		<meta name="author" content="Łukasz Holeczek">
		<!-- end: Meta -->

		<!-- start: Mobile Specific -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- end: Mobile Specific -->

		<!-- start: CSS -->
		<link id="bootstrap-style" href="/media/css/bootstrap.css" rel="stylesheet">
		<link href="/media/css/bootstrap-responsive.css" rel="stylesheet">
		<link id="base-style" href="/media/css/style.css" rel="stylesheet">
		<link id="base-style-responsive" href="/media/css/style-responsive.css" rel="stylesheet">

		<!--[if lt IE 7 ]>
		<link id="ie-style" href="/media/css/style-ie.css" rel="stylesheet">
		<![endif]-->
		<!--[if IE 8 ]>
		<link id="ie-style" href="/media/css/style-ie.css" rel="stylesheet">
		<![endif]-->
		<!--[if IE 9 ]>
		<![endif]-->

		<!-- end: CSS -->


		<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<!-- start: Favicon -->
		<link rel="shortcut icon" href="img/favicon.ico">
		<!-- end: Favicon -->




	</head>

	<body>
<!--		<div id="overlay">
			<ul>
				<li class="li1"></li>
				<li class="li2"></li>
				<li class="li3"></li>
				<li class="li4"></li>
				<li class="li5"></li>
				<li class="li6"></li>
			</ul>
		</div>	-->
		<!-- start: Header -->
		<div class="navbar">
			<div class="navbar-inner">
				<div class="container-fluid">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
					<a class="brand" href="/panel"> 
						<!--<img alt="Perfectum Dashboard" src="img/logo20.png" />-->
						<span class="hidden-phone">Aula Virtual</span>
					</a>

					<!-- start: Header Menu -->
					<div class="nav-no-collapse header-nav">
						<ul class="nav pull-right">
							<!-- start: User Dropdown -->
							<li style="margin-top: 10px;">
								<span><?php echo $oUser->usu_nombre . ' ' . $oUser->usu_apellido ?></span>
								<span>(<?php echo $perfil ?>)</span>
							</li>
							<li class="dropdown">
								<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
									<i class="icon-user icon-white"></i>
									<span class="caret"></span>
								</a>
								<ul class="dropdown-menu">
									<!--<li><a href="#"><i class="icon-user"></i> Profile</a></li>-->
									<li><a href="/login/logout"><i class="icon-off"></i> Cerrar Sesion</a></li>
								</ul>
							</li>
							<!-- end: User Dropdown -->
						</ul>
					</div>
					<!-- end: Header Menu -->

				</div>
			</div>
		</div>