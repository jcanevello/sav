<!DOCTYPE html>
<html lang="en">
	<head>

		<!-- start: Meta -->
		<meta charset="utf-8">
		<title>SAV</title>
		<meta name="description" content="Perfectum Dashboard Bootstrap Admin Template.">
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

		<style type="text/css">
			body { background: url(/media/img/bg-login.jpg) !important; }
		</style>

	</head>

	<body>
		<div class="container-fluid">
			<div class="row-fluid">

				<div class="row-fluid">
					<div class="login-box">
						<div class="icons">
<!--							<a href="#"><i class="icon-home"></i></a>
							<a href="#"><i class="icon-cog"></i></a>-->
						</div>
						<h2>Ingresa con tu cuenta</h2>
						<form class="form-horizontal" action="/login/initsession" method="post">
							<fieldset>
								<?php if( ! empty($error)): ?>
								<div class="alert alert-danger" style="width: 250px; text-align: center; margin: auto;">
									<?php echo $error ?>
								</div>
								<?php endif ?>
								<div class="input-prepend" title="Usuario">
									<span class="add-on"><i class="icon-user"></i></span>
									<input class="input-large span10" name="usuario" id="username" type="text" placeholder="Usuario"/>
								</div>
								<div class="clearfix"></div>

								<div class="input-prepend" title="Contraseña">
									<span class="add-on"><i class="icon-lock"></i></span>
									<input class="input-large span10" name="contrasena" id="password" type="password" placeholder="Contrasena"	/>
								</div>
								<div class="clearfix"></div>
								<div class="button-login">	
									<button type="submit" class="btn btn-primary"><i class="icon-off icon-white"></i> Ingresar</button>
								</div>
								<div class="clearfix"></div>
							</fieldset>
						</form>
					</div><!--/span-->
				</div><!--/row-->

			</div><!--/fluid-row-->

		</div><!--/.fluid-container-->

		<!-- start: JavaScript-->


	</body>
</html>
