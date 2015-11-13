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
		</div><!-- start: Header -->

<div class="container-fluid">
	<div class="row-fluid">

		<!-- start: Main Menu -->
		<div class="span2 main-menu-span">
	<div class="nav-collapse sidebar-nav">
		<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="#"><i class="icon-home icon-white"></i><span class="hidden-tablet"> Trabajos</span></a></li>
			<li><a href="#"><i class="icon-eye-open icon-white"></i><span class="hidden-tablet"> Cursos</span></a></li>
			<li><a href="#"><i class="icon-edit icon-white"></i><span class="hidden-tablet"> Matrícula</span></a></li>
					</ul>
	</div><!--/.well -->
</div><!--/span-->
		<!-- end: Main Menu -->

		<noscript>
		<div class="alert alert-block span10">
			<h4 class="alert-heading">Warning!</h4>
			<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
		</div>
		</noscript>

		<div id="content" class="span10">
			<!-- start: Content -->

			<style type="text/css">
#kohana_error { background: #ddd; font-size: 1em; font-family:sans-serif; text-align: left; color: #111; }
#kohana_error h1,
#kohana_error h2 { margin: 0; padding: 1em; font-size: 1em; font-weight: normal; background: #911; color: #fff; }
	#kohana_error h1 a,
	#kohana_error h2 a { color: #fff; }
#kohana_error h2 { background: #222; }
#kohana_error h3 { margin: 0; padding: 0.4em 0 0; font-size: 1em; font-weight: normal; }
#kohana_error p { margin: 0; padding: 0.2em 0; }
#kohana_error a { color: #1b323b; }
#kohana_error pre { overflow: auto; white-space: pre-wrap; }
#kohana_error table { width: 100%; display: block; margin: 0 0 0.4em; padding: 0; border-collapse: collapse; background: #fff; }
	#kohana_error table td { border: solid 1px #ddd; text-align: left; vertical-align: top; padding: 0.4em; }
#kohana_error div.content { padding: 0.4em 1em 1em; overflow: hidden; }
#kohana_error pre.source { margin: 0 0 1em; padding: 0.4em; background: #fff; border: dotted 1px #b7c680; line-height: 1.2em; }
	#kohana_error pre.source span.line { display: block; }
	#kohana_error pre.source span.highlight { background: #f0eb96; }
		#kohana_error pre.source span.line span.number { color: #666; }
#kohana_error ol.trace { display: block; margin: 0 0 0 2em; padding: 0; list-style: decimal; }
	#kohana_error ol.trace li { margin: 0; padding: 0; }
.js .collapsed { display: none; }
</style>
<script type="text/javascript">
document.documentElement.className = document.documentElement.className + ' js';
function koggle(elem)
{
	elem = document.getElementById(elem);

	if (elem.style && elem.style['display'])
		// Only works with the "style" attr
		var disp = elem.style['display'];
	else if (elem.currentStyle)
		// For MSIE, naturally
		var disp = elem.currentStyle['display'];
	else if (window.getComputedStyle)
		// For most other browsers
		var disp = document.defaultView.getComputedStyle(elem, null).getPropertyValue('display');

	// Toggle the state of the "display" style
	elem.style.display = disp == 'block' ? 'none' : 'block';
	return false;
}
</script>
<div id="kohana_error">
	<h1><span class="type">ErrorException [ Warning ]:</span> <span class="message">filesize() [&lt;a href=&#039;function.filesize&#039;&gt;function.filesize&lt;/a&gt;]: stat failed for 3xceladcgl.sql</span></h1>
	<div id="error53a4606191394" class="content">
		<p><span class="file">APPPATH\classes\Util.php [ 25 ]</span></p>
		<pre class="source"><code><span class="line"><span class="number">20</span> 			header('Content-Disposition: attachment; filename=' . $downloadfilename);
</span><span class="line"><span class="number">21</span> 			header('Content-Transfer-Encoding: binary');
</span><span class="line"><span class="number">22</span> 			header('Expires: 0');
</span><span class="line"><span class="number">23</span> 			header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
</span><span class="line"><span class="number">24</span> 			header('Pragma: public');
</span><span class="line highlight"><span class="number">25</span> 			header('Content-Length: ' . filesize($archivo));
</span><span class="line"><span class="number">26</span> 
</span><span class="line"><span class="number">27</span> 			ob_clean();
</span><span class="line"><span class="number">28</span> 			flush();
</span><span class="line"><span class="number">29</span> 			readfile($archivo);
</span><span class="line"><span class="number">30</span> 			exit;
</span></code></pre>		<ol class="trace">
					<li>
				<p>
					<span class="file">
													{PHP internal call}
											</span>
					&raquo;
					Kohana_Core::error_handler(<a href="#error53a4606191394args0" onclick="return koggle('error53a4606191394args0')">arguments</a>)
				</p>
								<div id="error53a4606191394args0" class="collapsed">
					<table cellspacing="0">
											<tr>
							<td><code>0</code></td>
							<td><pre><small>integer</small> 2</pre></td>
						</tr>
											<tr>
							<td><code>1</code></td>
							<td><pre><small>string</small><span>(94)</span> "filesize() [&lt;a href='function.filesize'&gt;function.filesize&lt;/a&gt;]: stat failed for 3xceladcgl.sql"</pre></td>
						</tr>
											<tr>
							<td><code>2</code></td>
							<td><pre><small>string</small><span>(45)</span> "C:\Ampps\www\sav\application\classes\Util.php"</pre></td>
						</tr>
											<tr>
							<td><code>3</code></td>
							<td><pre><small>integer</small> 25</pre></td>
						</tr>
											<tr>
							<td><code>4</code></td>
							<td><pre><small>array</small><span>(2)</span> <span>(
    "archivo" => <small>string</small><span>(14)</span> "3xceladcgl.sql"
    "downloadfilename" => <small>string</small><span>(14)</span> "3xceladcgl.sql"
)</span></pre></td>
						</tr>
										</table>
				</div>
											</li>
								<li>
				<p>
					<span class="file">
													<a href="#error53a4606191394source1" onclick="return koggle('error53a4606191394source1')">APPPATH\classes\Util.php [ 25 ]</a>
											</span>
					&raquo;
					filesize(<a href="#error53a4606191394args1" onclick="return koggle('error53a4606191394args1')">arguments</a>)
				</p>
								<div id="error53a4606191394args1" class="collapsed">
					<table cellspacing="0">
											<tr>
							<td><code>filename</code></td>
							<td><pre><small>string</small><span>(14)</span> "3xceladcgl.sql"</pre></td>
						</tr>
										</table>
				</div>
													<pre id="error53a4606191394source1" class="source collapsed"><code><pre class="source"><code><span class="line"><span class="number">20</span> 			header('Content-Disposition: attachment; filename=' . $downloadfilename);
</span><span class="line"><span class="number">21</span> 			header('Content-Transfer-Encoding: binary');
</span><span class="line"><span class="number">22</span> 			header('Expires: 0');
</span><span class="line"><span class="number">23</span> 			header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
</span><span class="line"><span class="number">24</span> 			header('Pragma: public');
</span><span class="line highlight"><span class="number">25</span> 			header('Content-Length: ' . filesize($archivo));
</span><span class="line"><span class="number">26</span> 
</span><span class="line"><span class="number">27</span> 			ob_clean();
</span><span class="line"><span class="number">28</span> 			flush();
</span><span class="line"><span class="number">29</span> 			readfile($archivo);
</span><span class="line"><span class="number">30</span> 			exit;
</span></code></pre></code></pre>
							</li>
								<li>
				<p>
					<span class="file">
													<a href="#error53a4606191394source2" onclick="return koggle('error53a4606191394source2')">APPPATH\views\archivo\list.php [ 62 ]</a>
											</span>
					&raquo;
					Util::download_file(<a href="#error53a4606191394args2" onclick="return koggle('error53a4606191394args2')">arguments</a>)
				</p>
								<div id="error53a4606191394args2" class="collapsed">
					<table cellspacing="0">
											<tr>
							<td><code>0</code></td>
							<td><pre><small>string</small><span>(14)</span> "3xceladcgl.sql"</pre></td>
						</tr>
										</table>
				</div>
													<pre id="error53a4606191394source2" class="source collapsed"><code><pre class="source"><code><span class="line"><span class="number">57</span> 					&lt;?php foreach ($aArchivoAlumno as  $oArchivoAlumno): ?&gt;
</span><span class="line"><span class="number">58</span> 					&lt;tr&gt;
</span><span class="line"><span class="number">59</span> 						&lt;td&gt;&lt;?php echo $oArchivoAlumno['arc_nombre'] ?&gt;&lt;/td&gt;
</span><span class="line"><span class="number">60</span> 						&lt;td&gt;
</span><span class="line"><span class="number">61</span> 							&lt;?php if($oArchivoAlumno['usu_usuario'] == $oUser-&gt;usu_usuario OR $oUser-&gt;per_codigo == 'P002'):  ?&gt;
</span><span class="line highlight"><span class="number">62</span> 							&lt;a class="btn btn-success" href="&lt;?php echo Util::download_file($oArchivoAlumno['arc_slug']) ?&gt;"&gt;&lt;i class="icon-download-alt icon-white"&gt;&lt;/i&gt;&lt;/a&gt;
</span><span class="line"><span class="number">63</span> 							&lt;?php endif ?&gt;
</span><span class="line"><span class="number">64</span> 							&lt;?php if($oArchivoAlumno['usu_usuario'] == $oUser-&gt;usu_usuario):  ?&gt;
</span><span class="line"><span class="number">65</span> 							&lt;a class="btn btn-info" href="#"&gt;&lt;i class="icon-edit icon-white"&gt;&lt;/i&gt;&lt;/a&gt;
</span><span class="line"><span class="number">66</span> 							&lt;a class="btn btn-danger" href="#"&gt;&lt;i class="icon-trash icon-white"&gt;&lt;/i&gt;&lt;/a&gt;
</span><span class="line"><span class="number">67</span> 							&lt;?php endif ?&gt;
</span></code></pre></code></pre>
							</li>
								<li>
				<p>
					<span class="file">
													<a href="#error53a4606191394source3" onclick="return koggle('error53a4606191394source3')">SYSPATH\classes\Kohana\View.php [ 61 ]</a>
											</span>
					&raquo;
					include(<a href="#error53a4606191394args3" onclick="return koggle('error53a4606191394args3')">arguments</a>)
				</p>
								<div id="error53a4606191394args3" class="collapsed">
					<table cellspacing="0">
											<tr>
							<td><code>0</code></td>
							<td><pre><small>string</small><span>(51)</span> "C:\Ampps\www\sav\application\views\archivo\list.php"</pre></td>
						</tr>
										</table>
				</div>
													<pre id="error53a4606191394source3" class="source collapsed"><code><pre class="source"><code><span class="line"><span class="number">56</span> 		ob_start();
</span><span class="line"><span class="number">57</span> 
</span><span class="line"><span class="number">58</span> 		try
</span><span class="line"><span class="number">59</span> 		{
</span><span class="line"><span class="number">60</span> 			// Load the view within the current scope
</span><span class="line highlight"><span class="number">61</span> 			include $kohana_view_filename;
</span><span class="line"><span class="number">62</span> 		}
</span><span class="line"><span class="number">63</span> 		catch (Exception $e)
</span><span class="line"><span class="number">64</span> 		{
</span><span class="line"><span class="number">65</span> 			// Delete the output buffer
</span><span class="line"><span class="number">66</span> 			ob_end_clean();
</span></code></pre></code></pre>
							</li>
								<li>
				<p>
					<span class="file">
													<a href="#error53a4606191394source4" onclick="return koggle('error53a4606191394source4')">SYSPATH\classes\Kohana\View.php [ 348 ]</a>
											</span>
					&raquo;
					Kohana_View::capture(<a href="#error53a4606191394args4" onclick="return koggle('error53a4606191394args4')">arguments</a>)
				</p>
								<div id="error53a4606191394args4" class="collapsed">
					<table cellspacing="0">
											<tr>
							<td><code>0</code></td>
							<td><pre><small>string</small><span>(51)</span> "C:\Ampps\www\sav\application\views\archivo/list.php"</pre></td>
						</tr>
											<tr>
							<td><code>1</code></td>
							<td><pre><small>array</small><span>(4)</span> <span>(
    "aArchivoProfesor" => <small>array</small><span>(1)</span> <span>(
        0 => <small>array</small><span>(7)</span> <span>(
            "arc_codigo" => <small>string</small><span>(1)</span> "1"
            "tra_codigo" => <small>string</small><span>(1)</span> "9"
            "tab_codigo" => <small>string</small><span>(2)</span> "12"
            "arc_nombre" => <small>string</small><span>(4)</span> "aaaa"
            "arc_slug" => <small>string</small><span>(3)</span> "sss"
            "usu_usuario" => <small>string</small><span>(5)</span> "fcs27"
            "arc_fecha_registro" => <small>string</small><span>(14)</span> "20140620030922"
        )</span>
    )</span>
    "aArchivoAlumno" => <small>array</small><span>(2)</span> <span>(
        0 => <small>array</small><span>(7)</span> <span>(
            "arc_codigo" => <small>string</small><span>(1)</span> "2"
            "tra_codigo" => <small>string</small><span>(1)</span> "9"
            "tab_codigo" => <small>string</small><span>(2)</span> "12"
            "arc_nombre" => <small>string</small><span>(5)</span> "aaaaa"
            "arc_slug" => <small>string</small><span>(13)</span> "jxpt3iqgaesql"
            "usu_usuario" => <small>string</small><span>(6)</span> "jcss09"
            "arc_fecha_registro" => <small>string</small><span>(14)</span> "20140620035932"
        )</span>
        1 => <small>array</small><span>(7)</span> <span>(
            "arc_codigo" => <small>string</small><span>(1)</span> "3"
            "tra_codigo" => <small>string</small><span>(1)</span> "9"
            "tab_codigo" => <small>string</small><span>(2)</span> "12"
            "arc_nombre" => <small>string</small><span>(5)</span> "aaaaa"
            "arc_slug" => <small>string</small><span>(14)</span> "3xceladcgl.sql"
            "usu_usuario" => <small>string</small><span>(6)</span> "jcss08"
            "arc_fecha_registro" => <small>string</small><span>(14)</span> "20140620040009"
        )</span>
    )</span>
    "idTrabajo" => <small>string</small><span>(1)</span> "9"
    "oUser" => <small>object</small> <span>Model_Auth_Usuario(34)</span> <code>{
        <small>protected</small> _table_name => <small>string</small><span>(7)</span> "usuario"
        <small>protected</small> _belongs_to => <small>array</small><span>(1)</span> <span>(
            "oPerfil" => <small>array</small><span>(2)</span> <span>(
                "foreign_key" => <small>string</small><span>(10)</span> "per_codigo"
                "model" => <small>string</small><span>(11)</span> "auth_perfil"
            )</span>
        )</span>
        <small>protected</small> _has_one => <small>array</small><span>(0)</span> 
        <small>protected</small> _has_many => <small>array</small><span>(0)</span> 
        <small>protected</small> _load_with => <small>array</small><span>(0)</span> 
        <small>protected</small> _validation => <small>NULL</small>
        <small>protected</small> _object => <small>array</small><span>(7)</span> <span>(
            "usu_usuario" => <small>string</small><span>(6)</span> "jcss08"
            "per_codigo" => <small>string</small><span>(4)</span> "P001"
            "usu_contrasena" => <small>string</small><span>(32)</span> "e10adc3949ba59abbe56e057f20f883e"
            "usu_nombre" => <small>string</small><span>(10)</span> "Jean Carlo"
            "usu_apellido" => <small>string</small><span>(10)</span> "Canevello "
            "tab_codigo" => <small>string</small><span>(2)</span> "01"
            "usu_fecha_registro" => <small>NULL</small>
        )</span>
        <small>protected</small> _changed => <small>array</small><span>(0)</span> 
        <small>protected</small> _original_values => <small>array</small><span>(0)</span> 
        <small>protected</small> _related => <small>array</small><span>(0)</span> 
        <small>protected</small> _valid => <small>bool</small> FALSE
        <small>protected</small> _loaded => <small>bool</small> FALSE
        <small>protected</small> _saved => <small>bool</small> FALSE
        <small>protected</small> _sorting => <small>NULL</small>
        <small>protected</small> _foreign_key_suffix => <small>string</small><span>(3)</span> "_id"
        <small>protected</small> _object_name => <small>string</small><span>(12)</span> "auth_usuario"
        <small>protected</small> _object_plural => <small>string</small><span>(13)</span> "auth_usuarios"
        <small>protected</small> _table_columns => <small>array</small><span>(7)</span> <span>(
            "usu_usuario" => <small>array</small><span>(12)</span> <span>(
                "type" => <small>string</small><span>(6)</span> "string"
                "column_name" => <small>string</small><span>(11)</span> "usu_usuario"
                "column_default" => <small>NULL</small>
                "data_type" => <small>string</small><span>(7)</span> "varchar"
                "is_nullable" => <small>bool</small> FALSE
                "ordinal_position" => <small>integer</small> 1
                "character_maximum_length" => <small>string</small><span>(2)</span> "20"
                "collation_name" => <small>string</small><span>(15)</span> "utf8_general_ci"
                "comment" => <small>string</small><span>(0)</span> ""
                "extra" => <small>string</small><span>(0)</span> ""
                "key" => <small>string</small><span>(3)</span> "PRI"
                "privileges" => <small>string</small><span>(31)</span> "select,insert,update,references"
            )</span>
            "per_codigo" => <small>array</small><span>(12)</span> <span>(
                "type" => <small>string</small><span>(6)</span> "string"
                "column_name" => <small>string</small><span>(10)</span> "per_codigo"
                "column_default" => <small>NULL</small>
                "data_type" => <small>string</small><span>(7)</span> "varchar"
                "is_nullable" => <small>bool</small> FALSE
                "ordinal_position" => <small>integer</small> 2
                "character_maximum_length" => <small>string</small><span>(1)</span> "8"
                "collation_name" => <small>string</small><span>(15)</span> "utf8_general_ci"
                "comment" => <small>string</small><span>(0)</span> ""
                "extra" => <small>string</small><span>(0)</span> ""
                "key" => <small>string</small><span>(3)</span> "MUL"
                "privileges" => <small>string</small><span>(31)</span> "select,insert,update,references"
            )</span>
            "usu_contrasena" => <small>array</small><span>(12)</span> <span>(
                "type" => <small>string</small><span>(6)</span> "string"
                "column_name" => <small>string</small><span>(14)</span> "usu_contrasena"
                "column_default" => <small>NULL</small>
                "data_type" => <small>string</small><span>(7)</span> "varchar"
                "is_nullable" => <small>bool</small> TRUE
                "ordinal_position" => <small>integer</small> 3
                "character_maximum_length" => <small>string</small><span>(3)</span> "150"
                "collation_name" => <small>string</small><span>(15)</span> "utf8_general_ci"
                "comment" => <small>string</small><span>(0)</span> ""
                "extra" => <small>string</small><span>(0)</span> ""
                "key" => <small>string</small><span>(0)</span> ""
                "privileges" => <small>string</small><span>(31)</span> "select,insert,update,references"
            )</span>
            "usu_nombre" => <small>array</small><span>(12)</span> <span>(
                "type" => <small>string</small><span>(6)</span> "string"
                "column_name" => <small>string</small><span>(10)</span> "usu_nombre"
                "column_default" => <small>NULL</small>
                "data_type" => <small>string</small><span>(7)</span> "varchar"
                "is_nullable" => <small>bool</small> TRUE
                "ordinal_position" => <small>integer</small> 4
                "character_maximum_length" => <small>string</small><span>(3)</span> "150"
                "collation_name" => <small>string</small><span>(15)</span> "utf8_general_ci"
                "comment" => <small>string</small><span>(0)</span> ""
                "extra" => <small>string</small><span>(0)</span> ""
                "key" => <small>string</small><span>(0)</span> ""
                "privileges" => <small>string</small><span>(31)</span> "select,insert,update,references"
            )</span>
            "usu_apellido" => <small>array</small><span>(12)</span> <span>(
                "type" => <small>string</small><span>(6)</span> "string"
                "column_name" => <small>string</small><span>(12)</span> "usu_apellido"
                "column_default" => <small>NULL</small>
                "data_type" => <small>string</small><span>(7)</span> "varchar"
                "is_nullable" => <small>bool</small> TRUE
                "ordinal_position" => <small>integer</small> 5
                "character_maximum_length" => <small>string</small><span>(3)</span> "150"
                "collation_name" => <small>string</small><span>(15)</span> "utf8_general_ci"
                "comment" => <small>string</small><span>(0)</span> ""
                "extra" => <small>string</small><span>(0)</span> ""
                "key" => <small>string</small><span>(0)</span> ""
                "privileges" => <small>string</small><span>(31)</span> "select,insert,update,references"
            )</span>
            "tab_codigo" => <small>array</small><span>(12)</span> <span>(
                "type" => <small>string</small><span>(6)</span> "string"
                "column_name" => <small>string</small><span>(10)</span> "tab_codigo"
                "column_default" => <small>NULL</small>
                "data_type" => <small>string</small><span>(7)</span> "varchar"
                "is_nullable" => <small>bool</small> FALSE
                "ordinal_position" => <small>integer</small> 6
                "character_maximum_length" => <small>string</small><span>(1)</span> "8"
                "collation_name" => <small>string</small><span>(15)</span> "utf8_general_ci"
                "comment" => <small>string</small><span>(0)</span> ""
                "extra" => <small>string</small><span>(0)</span> ""
                "key" => <small>string</small><span>(3)</span> "MUL"
                "privileges" => <small>string</small><span>(31)</span> "select,insert,update,references"
            )</span>
            "usu_fecha_registro" => <small>array</small><span>(12)</span> <span>(
                "type" => <small>string</small><span>(6)</span> "string"
                "column_name" => <small>string</small><span>(18)</span> "usu_fecha_registro"
                "column_default" => <small>NULL</small>
                "data_type" => <small>string</small><span>(7)</span> "varchar"
                "is_nullable" => <small>bool</small> TRUE
                "ordinal_position" => <small>integer</small> 7
                "character_maximum_length" => <small>string</small><span>(2)</span> "20"
                "collation_name" => <small>string</small><span>(15)</span> "utf8_general_ci"
                "comment" => <small>string</small><span>(0)</span> ""
                "extra" => <small>string</small><span>(0)</span> ""
                "key" => <small>string</small><span>(0)</span> ""
                "privileges" => <small>string</small><span>(31)</span> "select,insert,update,references"
            )</span>
        )</span>
        <small>protected</small> _updated_column => <small>NULL</small>
        <small>protected</small> _created_column => <small>NULL</small>
        <small>protected</small> _serialize_columns => <small>array</small><span>(0)</span> 
        <small>protected</small> _primary_key => <small>string</small><span>(2)</span> "id"
        <small>protected</small> _primary_key_value => <small>NULL</small>
        <small>protected</small> _table_names_plural => <small>bool</small> TRUE
        <small>protected</small> _reload_on_wakeup => <small>bool</small> TRUE
        <small>protected</small> _db => <small>object</small> <span>Database_MySQL(6)</span> <code>{
            <small>protected</small> _connection_id => <small>string</small><span>(40)</span> "b673bb311874c2cbb8ce196f26ab792771471297"
            <small>protected</small> _identifier => <small>string</small><span>(1)</span> "`"
            <small>public</small> last_query => <small>string</small><span>(150)</span> "SELECT `perfil`.`per_codigo` FROM `usuario` JOIN `perfil` ON (`perfil`.`per_codigo` = `usuario`.`per_codigo`) WHERE `usuario`.`u&nbsp;&hellip;"
            <small>protected</small> _instance => <small>string</small><span>(7)</span> "default"
            <small>protected</small> _connection => <small>resource</small><span>(mysql link)</span>
            <small>protected</small> _config => <small>array</small><span>(5)</span> <span>(
                "type" => <small>string</small><span>(5)</span> "MySQL"
                "connection" => <small>array</small><span>(3)</span> <span>(
                    "hostname" => <small>string</small><span>(9)</span> "localhost"
                    "database" => <small>string</small><span>(3)</span> "SAV"
                    "persistent" => <small>bool</small> FALSE
                )</span>
                "table_prefix" => <small>string</small><span>(0)</span> ""
                "charset" => <small>string</small><span>(4)</span> "utf8"
                "caching" => <small>bool</small> FALSE
            )</span>
        }</code>
        <small>protected</small> _db_group => <small>NULL</small>
        <small>protected</small> _db_applied => <small>array</small><span>(0)</span> 
        <small>protected</small> _db_pending => <small>array</small><span>(0)</span> 
        <small>protected</small> _db_reset => <small>bool</small> TRUE
        <small>protected</small> _db_builder => <small>NULL</small>
        <small>protected</small> _with_applied => <small>array</small><span>(0)</span> 
        <small>protected</small> _cast_data => <small>array</small><span>(0)</span> 
        <small>protected</small> _errors_filename => <small>string</small><span>(12)</span> "auth_usuario"
    }</code>
)</span></pre></td>
						</tr>
										</table>
				</div>
													<pre id="error53a4606191394source4" class="source collapsed"><code><pre class="source"><code><span class="line"><span class="number">343</span> 		{
</span><span class="line"><span class="number">344</span> 			throw new View_Exception('You must set the file to use within your view before rendering');
</span><span class="line"><span class="number">345</span> 		}
</span><span class="line"><span class="number">346</span> 
</span><span class="line"><span class="number">347</span> 		// Combine local and global data and capture the output
</span><span class="line highlight"><span class="number">348</span> 		return View::capture($this-&gt;_file, $this-&gt;_data);
</span><span class="line"><span class="number">349</span> 	}
</span><span class="line"><span class="number">350</span> 
</span><span class="line"><span class="number">351</span> }
</span></code></pre></code></pre>
							</li>
								<li>
				<p>
					<span class="file">
													<a href="#error53a4606191394source5" onclick="return koggle('error53a4606191394source5')">SYSPATH\classes\Kohana\View.php [ 228 ]</a>
											</span>
					&raquo;
					Kohana_View->render()
				</p>
													<pre id="error53a4606191394source5" class="source collapsed"><code><pre class="source"><code><span class="line"><span class="number">223</span> 	 */
</span><span class="line"><span class="number">224</span> 	public function __toString()
</span><span class="line"><span class="number">225</span> 	{
</span><span class="line"><span class="number">226</span> 		try
</span><span class="line"><span class="number">227</span> 		{
</span><span class="line highlight"><span class="number">228</span> 			return $this-&gt;render();
</span><span class="line"><span class="number">229</span> 		}
</span><span class="line"><span class="number">230</span> 		catch (Exception $e)
</span><span class="line"><span class="number">231</span> 		{
</span><span class="line"><span class="number">232</span> 			/**
</span><span class="line"><span class="number">233</span> 			 * Display the exception message.
</span></code></pre></code></pre>
							</li>
								<li>
				<p>
					<span class="file">
													<a href="#error53a4606191394source6" onclick="return koggle('error53a4606191394source6')">APPPATH\views\template.php [ 21 ]</a>
											</span>
					&raquo;
					Kohana_View->__toString()
				</p>
													<pre id="error53a4606191394source6" class="source collapsed"><code><pre class="source"><code><span class="line"><span class="number">16</span> 		&lt;/noscript&gt;
</span><span class="line"><span class="number">17</span> 
</span><span class="line"><span class="number">18</span> 		&lt;div id="content" class="span&lt;?php echo (Request::initial()-&gt;controller() == 'Panel') ? '12' : '10' ?&gt;"&gt;
</span><span class="line"><span class="number">19</span> 			&lt;!-- start: Content --&gt;
</span><span class="line"><span class="number">20</span> 
</span><span class="line highlight"><span class="number">21</span> 			&lt;?php echo $content ?&gt;
</span><span class="line"><span class="number">22</span> 
</span><span class="line"><span class="number">23</span> 			&lt;!-- end: Content --&gt;
</span><span class="line"><span class="number">24</span> 		&lt;/div&gt;&lt;!--/#content.span10--&gt;
</span><span class="line"><span class="number">25</span> 	&lt;/div&gt;&lt;!--/fluid-row--&gt;
</span><span class="line"><span class="number">26</span> 
</span></code></pre></code></pre>
							</li>
								<li>
				<p>
					<span class="file">
													<a href="#error53a4606191394source7" onclick="return koggle('error53a4606191394source7')">SYSPATH\classes\Kohana\View.php [ 61 ]</a>
											</span>
					&raquo;
					include(<a href="#error53a4606191394args7" onclick="return koggle('error53a4606191394args7')">arguments</a>)
				</p>
								<div id="error53a4606191394args7" class="collapsed">
					<table cellspacing="0">
											<tr>
							<td><code>0</code></td>
							<td><pre><small>string</small><span>(47)</span> "C:\Ampps\www\sav\application\views\template.php"</pre></td>
						</tr>
										</table>
				</div>
													<pre id="error53a4606191394source7" class="source collapsed"><code><pre class="source"><code><span class="line"><span class="number">56</span> 		ob_start();
</span><span class="line"><span class="number">57</span> 
</span><span class="line"><span class="number">58</span> 		try
</span><span class="line"><span class="number">59</span> 		{
</span><span class="line"><span class="number">60</span> 			// Load the view within the current scope
</span><span class="line highlight"><span class="number">61</span> 			include $kohana_view_filename;
</span><span class="line"><span class="number">62</span> 		}
</span><span class="line"><span class="number">63</span> 		catch (Exception $e)
</span><span class="line"><span class="number">64</span> 		{
</span><span class="line"><span class="number">65</span> 			// Delete the output buffer
</span><span class="line"><span class="number">66</span> 			ob_end_clean();
</span></code></pre></code></pre>
							</li>
								<li>
				<p>
					<span class="file">
													<a href="#error53a4606191394source8" onclick="return koggle('error53a4606191394source8')">SYSPATH\classes\Kohana\View.php [ 348 ]</a>
											</span>
					&raquo;
					Kohana_View::capture(<a href="#error53a4606191394args8" onclick="return koggle('error53a4606191394args8')">arguments</a>)
				</p>
								<div id="error53a4606191394args8" class="collapsed">
					<table cellspacing="0">
											<tr>
							<td><code>0</code></td>
							<td><pre><small>string</small><span>(47)</span> "C:\Ampps\www\sav\application\views\template.php"</pre></td>
						</tr>
											<tr>
							<td><code>1</code></td>
							<td><pre><small>array</small><span>(4)</span> <span>(
    "header" => <small>object</small> <span>View(2)</span> <code>{
        <small>protected</small> _file => <small>string</small><span>(45)</span> "C:\Ampps\www\sav\application\views\header.php"
        <small>protected</small> _data => <small>array</small><span>(0)</span> 
    }</code>
    "navbar" => <small>object</small> <span>View(2)</span> <code>{
        <small>protected</small> _file => <small>string</small><span>(45)</span> "C:\Ampps\www\sav\application\views\navbar.php"
        <small>protected</small> _data => <small>array</small><span>(1)</span> <span>(
            "perfil" => <small>string</small><span>(4)</span> "P001"
        )</span>
    }</code>
    "footer" => <small>object</small> <span>View(2)</span> <code>{
        <small>protected</small> _file => <small>string</small><span>(45)</span> "C:\Ampps\www\sav\application\views\footer.php"
        <small>protected</small> _data => <small>array</small><span>(0)</span> 
    }</code>
    "content" => <small>object</small> <span>View(2)</span> <code>{
        <small>protected</small> _file => <small>string</small><span>(51)</span> "C:\Ampps\www\sav\application\views\archivo/list.php"
        <small>protected</small> _data => <small>array</small><span>(4)</span> <span>(
            "aArchivoProfesor" => <small>array</small><span>(1)</span> <span>(
                0 => <small>array</small><span>(7)</span> <span>(
                    "arc_codigo" => <small>string</small><span>(1)</span> "1"
                    "tra_codigo" => <small>string</small><span>(1)</span> "9"
                    "tab_codigo" => <small>string</small><span>(2)</span> "12"
                    "arc_nombre" => <small>string</small><span>(4)</span> "aaaa"
                    "arc_slug" => <small>string</small><span>(3)</span> "sss"
                    "usu_usuario" => <small>string</small><span>(5)</span> "fcs27"
                    "arc_fecha_registro" => <small>string</small><span>(14)</span> "20140620030922"
                )</span>
            )</span>
            "aArchivoAlumno" => <small>array</small><span>(2)</span> <span>(
                0 => <small>array</small><span>(7)</span> <span>(
                    "arc_codigo" => <small>string</small><span>(1)</span> "2"
                    "tra_codigo" => <small>string</small><span>(1)</span> "9"
                    "tab_codigo" => <small>string</small><span>(2)</span> "12"
                    "arc_nombre" => <small>string</small><span>(5)</span> "aaaaa"
                    "arc_slug" => <small>string</small><span>(13)</span> "jxpt3iqgaesql"
                    "usu_usuario" => <small>string</small><span>(6)</span> "jcss09"
                    "arc_fecha_registro" => <small>string</small><span>(14)</span> "20140620035932"
                )</span>
                1 => <small>array</small><span>(7)</span> <span>(
                    "arc_codigo" => <small>string</small><span>(1)</span> "3"
                    "tra_codigo" => <small>string</small><span>(1)</span> "9"
                    "tab_codigo" => <small>string</small><span>(2)</span> "12"
                    "arc_nombre" => <small>string</small><span>(5)</span> "aaaaa"
                    "arc_slug" => <small>string</small><span>(14)</span> "3xceladcgl.sql"
                    "usu_usuario" => <small>string</small><span>(6)</span> "jcss08"
                    "arc_fecha_registro" => <small>string</small><span>(14)</span> "20140620040009"
                )</span>
            )</span>
            "idTrabajo" => <small>string</small><span>(1)</span> "9"
            "oUser" => <small>object</small> <span>Model_Auth_Usuario(34)</span> <code>{
                <small>protected</small> _table_name => <small>string</small><span>(7)</span> "usuario"
                <small>protected</small> _belongs_to => <small>array</small><span>(1)</span> <span>(
                    "oPerfil" => <small>array</small><span>(2)</span> <span>(
                        "foreign_key" => <small>string</small><span>(10)</span> "per_codigo"
                        "model" => <small>string</small><span>(11)</span> "auth_perfil"
                    )</span>
                )</span>
                <small>protected</small> _has_one => <small>array</small><span>(0)</span> 
                <small>protected</small> _has_many => <small>array</small><span>(0)</span> 
                <small>protected</small> _load_with => <small>array</small><span>(0)</span> 
                <small>protected</small> _validation => <small>NULL</small>
                <small>protected</small> _object => <small>array</small><span>(7)</span> <span>(
                    "usu_usuario" => <small>string</small><span>(6)</span> "jcss08"
                    "per_codigo" => <small>string</small><span>(4)</span> "P001"
                    "usu_contrasena" => <small>string</small><span>(32)</span> "e10adc3949ba59abbe56e057f20f883e"
                    "usu_nombre" => <small>string</small><span>(10)</span> "Jean Carlo"
                    "usu_apellido" => <small>string</small><span>(10)</span> "Canevello "
                    "tab_codigo" => <small>string</small><span>(2)</span> "01"
                    "usu_fecha_registro" => <small>NULL</small>
                )</span>
                <small>protected</small> _changed => <small>array</small><span>(0)</span> 
                <small>protected</small> _original_values => <small>array</small><span>(0)</span> 
                <small>protected</small> _related => <small>array</small><span>(0)</span> 
                <small>protected</small> _valid => <small>bool</small> FALSE
                <small>protected</small> _loaded => <small>bool</small> FALSE
                <small>protected</small> _saved => <small>bool</small> FALSE
                <small>protected</small> _sorting => <small>NULL</small>
                <small>protected</small> _foreign_key_suffix => <small>string</small><span>(3)</span> "_id"
                <small>protected</small> _object_name => <small>string</small><span>(12)</span> "auth_usuario"
                <small>protected</small> _object_plural => <small>string</small><span>(13)</span> "auth_usuarios"
                <small>protected</small> _table_columns => <small>array</small><span>(7)</span> <span>(
                    "usu_usuario" => <small>array</small><span>(12)</span> <span>(
                        "type" => <small>string</small><span>(6)</span> "string"
                        "column_name" => <small>string</small><span>(11)</span> "usu_usuario"
                        "column_default" => <small>NULL</small>
                        "data_type" => <small>string</small><span>(7)</span> "varchar"
                        "is_nullable" => <small>bool</small> FALSE
                        "ordinal_position" => <small>integer</small> 1
                        "character_maximum_length" => <small>string</small><span>(2)</span> "20"
                        "collation_name" => <small>string</small><span>(15)</span> "utf8_general_ci"
                        "comment" => <small>string</small><span>(0)</span> ""
                        "extra" => <small>string</small><span>(0)</span> ""
                        "key" => <small>string</small><span>(3)</span> "PRI"
                        "privileges" => <small>string</small><span>(31)</span> "select,insert,update,references"
                    )</span>
                    "per_codigo" => <small>array</small><span>(12)</span> <span>(
                        "type" => <small>string</small><span>(6)</span> "string"
                        "column_name" => <small>string</small><span>(10)</span> "per_codigo"
                        "column_default" => <small>NULL</small>
                        "data_type" => <small>string</small><span>(7)</span> "varchar"
                        "is_nullable" => <small>bool</small> FALSE
                        "ordinal_position" => <small>integer</small> 2
                        "character_maximum_length" => <small>string</small><span>(1)</span> "8"
                        "collation_name" => <small>string</small><span>(15)</span> "utf8_general_ci"
                        "comment" => <small>string</small><span>(0)</span> ""
                        "extra" => <small>string</small><span>(0)</span> ""
                        "key" => <small>string</small><span>(3)</span> "MUL"
                        "privileges" => <small>string</small><span>(31)</span> "select,insert,update,references"
                    )</span>
                    "usu_contrasena" => <small>array</small><span>(12)</span> <span>(
                        "type" => <small>string</small><span>(6)</span> "string"
                        "column_name" => <small>string</small><span>(14)</span> "usu_contrasena"
                        "column_default" => <small>NULL</small>
                        "data_type" => <small>string</small><span>(7)</span> "varchar"
                        "is_nullable" => <small>bool</small> TRUE
                        "ordinal_position" => <small>integer</small> 3
                        "character_maximum_length" => <small>string</small><span>(3)</span> "150"
                        "collation_name" => <small>string</small><span>(15)</span> "utf8_general_ci"
                        "comment" => <small>string</small><span>(0)</span> ""
                        "extra" => <small>string</small><span>(0)</span> ""
                        "key" => <small>string</small><span>(0)</span> ""
                        "privileges" => <small>string</small><span>(31)</span> "select,insert,update,references"
                    )</span>
                    "usu_nombre" => <small>array</small><span>(12)</span> <span>(
                        "type" => <small>string</small><span>(6)</span> "string"
                        "column_name" => <small>string</small><span>(10)</span> "usu_nombre"
                        "column_default" => <small>NULL</small>
                        "data_type" => <small>string</small><span>(7)</span> "varchar"
                        "is_nullable" => <small>bool</small> TRUE
                        "ordinal_position" => <small>integer</small> 4
                        "character_maximum_length" => <small>string</small><span>(3)</span> "150"
                        "collation_name" => <small>string</small><span>(15)</span> "utf8_general_ci"
                        "comment" => <small>string</small><span>(0)</span> ""
                        "extra" => <small>string</small><span>(0)</span> ""
                        "key" => <small>string</small><span>(0)</span> ""
                        "privileges" => <small>string</small><span>(31)</span> "select,insert,update,references"
                    )</span>
                    "usu_apellido" => <small>array</small><span>(12)</span> <span>(
                        "type" => <small>string</small><span>(6)</span> "string"
                        "column_name" => <small>string</small><span>(12)</span> "usu_apellido"
                        "column_default" => <small>NULL</small>
                        "data_type" => <small>string</small><span>(7)</span> "varchar"
                        "is_nullable" => <small>bool</small> TRUE
                        "ordinal_position" => <small>integer</small> 5
                        "character_maximum_length" => <small>string</small><span>(3)</span> "150"
                        "collation_name" => <small>string</small><span>(15)</span> "utf8_general_ci"
                        "comment" => <small>string</small><span>(0)</span> ""
                        "extra" => <small>string</small><span>(0)</span> ""
                        "key" => <small>string</small><span>(0)</span> ""
                        "privileges" => <small>string</small><span>(31)</span> "select,insert,update,references"
                    )</span>
                    "tab_codigo" => <small>array</small><span>(12)</span> <span>(
                        "type" => <small>string</small><span>(6)</span> "string"
                        "column_name" => <small>string</small><span>(10)</span> "tab_codigo"
                        "column_default" => <small>NULL</small>
                        "data_type" => <small>string</small><span>(7)</span> "varchar"
                        "is_nullable" => <small>bool</small> FALSE
                        "ordinal_position" => <small>integer</small> 6
                        "character_maximum_length" => <small>string</small><span>(1)</span> "8"
                        "collation_name" => <small>string</small><span>(15)</span> "utf8_general_ci"
                        "comment" => <small>string</small><span>(0)</span> ""
                        "extra" => <small>string</small><span>(0)</span> ""
                        "key" => <small>string</small><span>(3)</span> "MUL"
                        "privileges" => <small>string</small><span>(31)</span> "select,insert,update,references"
                    )</span>
                    "usu_fecha_registro" => <small>array</small><span>(12)</span> <span>(
                        "type" => <small>string</small><span>(6)</span> "string"
                        "column_name" => <small>string</small><span>(18)</span> "usu_fecha_registro"
                        "column_default" => <small>NULL</small>
                        "data_type" => <small>string</small><span>(7)</span> "varchar"
                        "is_nullable" => <small>bool</small> TRUE
                        "ordinal_position" => <small>integer</small> 7
                        "character_maximum_length" => <small>string</small><span>(2)</span> "20"
                        "collation_name" => <small>string</small><span>(15)</span> "utf8_general_ci"
                        "comment" => <small>string</small><span>(0)</span> ""
                        "extra" => <small>string</small><span>(0)</span> ""
                        "key" => <small>string</small><span>(0)</span> ""
                        "privileges" => <small>string</small><span>(31)</span> "select,insert,update,references"
                    )</span>
                )</span>
                <small>protected</small> _updated_column => <small>NULL</small>
                <small>protected</small> _created_column => <small>NULL</small>
                <small>protected</small> _serialize_columns => <small>array</small><span>(0)</span> 
                <small>protected</small> _primary_key => <small>string</small><span>(2)</span> "id"
                <small>protected</small> _primary_key_value => <small>NULL</small>
                <small>protected</small> _table_names_plural => <small>bool</small> TRUE
                <small>protected</small> _reload_on_wakeup => <small>bool</small> TRUE
                <small>protected</small> _db => <small>object</small> <span>Database_MySQL(6)</span> <code>{
                    <small>protected</small> _connection_id => <small>string</small><span>(40)</span> "b673bb311874c2cbb8ce196f26ab792771471297"
                    <small>protected</small> _identifier => <small>string</small><span>(1)</span> "`"
                    <small>public</small> last_query => <small>string</small><span>(150)</span> "SELECT `perfil`.`per_codigo` FROM `usuario` JOIN `perfil` ON (`perfil`.`per_codigo` = `usuario`.`per_codigo`) WHERE `usuario`.`u&nbsp;&hellip;"
                    <small>protected</small> _instance => <small>string</small><span>(7)</span> "default"
                    <small>protected</small> _connection => <small>resource</small><span>(mysql link)</span>
                    <small>protected</small> _config => <small>array</small><span>(5)</span> <span>(
                        "type" => <small>string</small><span>(5)</span> "MySQL"
                        "connection" => <small>array</small><span>(3)</span> <span>(
                            "hostname" => <small>string</small><span>(9)</span> "localhost"
                            "database" => <small>string</small><span>(3)</span> "SAV"
                            "persistent" => <small>bool</small> FALSE
                        )</span>
                        "table_prefix" => <small>string</small><span>(0)</span> ""
                        "charset" => <small>string</small><span>(4)</span> "utf8"
                        "caching" => <small>bool</small> FALSE
                    )</span>
                }</code>
                <small>protected</small> _db_group => <small>NULL</small>
                <small>protected</small> _db_applied => <small>array</small><span>(0)</span> 
                <small>protected</small> _db_pending => <small>array</small><span>(0)</span> 
                <small>protected</small> _db_reset => <small>bool</small> TRUE
                <small>protected</small> _db_builder => <small>NULL</small>
                <small>protected</small> _with_applied => <small>array</small><span>(0)</span> 
                <small>protected</small> _cast_data => <small>array</small><span>(0)</span> 
                <small>protected</small> _errors_filename => <small>string</small><span>(12)</span> "auth_usuario"
            }</code>
        )</span>
    }</code>
)</span></pre></td>
						</tr>
										</table>
				</div>
													<pre id="error53a4606191394source8" class="source collapsed"><code><pre class="source"><code><span class="line"><span class="number">343</span> 		{
</span><span class="line"><span class="number">344</span> 			throw new View_Exception('You must set the file to use within your view before rendering');
</span><span class="line"><span class="number">345</span> 		}
</span><span class="line"><span class="number">346</span> 
</span><span class="line"><span class="number">347</span> 		// Combine local and global data and capture the output
</span><span class="line highlight"><span class="number">348</span> 		return View::capture($this-&gt;_file, $this-&gt;_data);
</span><span class="line"><span class="number">349</span> 	}
</span><span class="line"><span class="number">350</span> 
</span><span class="line"><span class="number">351</span> }
</span></code></pre></code></pre>
							</li>
								<li>
				<p>
					<span class="file">
													<a href="#error53a4606191394source9" onclick="return koggle('error53a4606191394source9')">SYSPATH\classes\Kohana\Controller\Template.php [ 44 ]</a>
											</span>
					&raquo;
					Kohana_View->render()
				</p>
													<pre id="error53a4606191394source9" class="source collapsed"><code><pre class="source"><code><span class="line"><span class="number">39</span> 	 */
</span><span class="line"><span class="number">40</span> 	public function after()
</span><span class="line"><span class="number">41</span> 	{
</span><span class="line"><span class="number">42</span> 		if ($this-&gt;auto_render === TRUE)
</span><span class="line"><span class="number">43</span> 		{
</span><span class="line highlight"><span class="number">44</span> 			$this-&gt;response-&gt;body($this-&gt;template-&gt;render());
</span><span class="line"><span class="number">45</span> 		}
</span><span class="line"><span class="number">46</span> 
</span><span class="line"><span class="number">47</span> 		parent::after();
</span><span class="line"><span class="number">48</span> 	}
</span><span class="line"><span class="number">49</span> 
</span></code></pre></code></pre>
							</li>
								<li>
				<p>
					<span class="file">
													<a href="#error53a4606191394source10" onclick="return koggle('error53a4606191394source10')">APPPATH\classes\Controller\Sav.php [ 36 ]</a>
											</span>
					&raquo;
					Kohana_Controller_Template->after()
				</p>
													<pre id="error53a4606191394source10" class="source collapsed"><code><pre class="source"><code><span class="line"><span class="number">31</span> 		}
</span><span class="line"><span class="number">32</span> 	}
</span><span class="line"><span class="number">33</span> 	
</span><span class="line"><span class="number">34</span> 	public function after()
</span><span class="line"><span class="number">35</span> 	{
</span><span class="line highlight"><span class="number">36</span> 		parent::after();
</span><span class="line"><span class="number">37</span> 	}
</span><span class="line"><span class="number">38</span> } // End Welcome
</span></code></pre></code></pre>
							</li>
								<li>
				<p>
					<span class="file">
													<a href="#error53a4606191394source11" onclick="return koggle('error53a4606191394source11')">SYSPATH\classes\Kohana\Controller.php [ 87 ]</a>
											</span>
					&raquo;
					Controller_Sav->after()
				</p>
													<pre id="error53a4606191394source11" class="source collapsed"><code><pre class="source"><code><span class="line"><span class="number">82</span> 
</span><span class="line"><span class="number">83</span> 		// Execute the action itself
</span><span class="line"><span class="number">84</span> 		$this-&gt;{$action}();
</span><span class="line"><span class="number">85</span> 
</span><span class="line"><span class="number">86</span> 		// Execute the "after action" method
</span><span class="line highlight"><span class="number">87</span> 		$this-&gt;after();
</span><span class="line"><span class="number">88</span> 
</span><span class="line"><span class="number">89</span> 		// Return the response
</span><span class="line"><span class="number">90</span> 		return $this-&gt;response;
</span><span class="line"><span class="number">91</span> 	}
</span><span class="line"><span class="number">92</span> 
</span></code></pre></code></pre>
							</li>
								<li>
				<p>
					<span class="file">
													{PHP internal call}
											</span>
					&raquo;
					Kohana_Controller->execute()
				</p>
											</li>
								<li>
				<p>
					<span class="file">
													<a href="#error53a4606191394source13" onclick="return koggle('error53a4606191394source13')">SYSPATH\classes\Kohana\Request\Client\Internal.php [ 97 ]</a>
											</span>
					&raquo;
					ReflectionMethod->invoke(<a href="#error53a4606191394args13" onclick="return koggle('error53a4606191394args13')">arguments</a>)
				</p>
								<div id="error53a4606191394args13" class="collapsed">
					<table cellspacing="0">
											<tr>
							<td><code>0</code></td>
							<td><pre><small>object</small> <span>Controller_Archivo(8)</span> <code>{
    <small>public</small> template => <small>object</small> <span>View(2)</span> <code>{
        <small>protected</small> _file => <small>string</small><span>(47)</span> "C:\Ampps\www\sav\application\views\template.php"
        <small>protected</small> _data => <small>array</small><span>(4)</span> <span>(
            "header" => <small>object</small> <span>View(2)</span> <code>{
                <small>protected</small> _file => <small>string</small><span>(45)</span> "C:\Ampps\www\sav\application\views\header.php"
                <small>protected</small> _data => <small>array</small><span>(0)</span> 
            }</code>
            "navbar" => <small>object</small> <span>View(2)</span> <code>{
                <small>protected</small> _file => <small>string</small><span>(45)</span> "C:\Ampps\www\sav\application\views\navbar.php"
                <small>protected</small> _data => <small>array</small><span>(1)</span> <span>(
                    "perfil" => <small>string</small><span>(4)</span> "P001"
                )</span>
            }</code>
            "footer" => <small>object</small> <span>View(2)</span> <code>{
                <small>protected</small> _file => <small>string</small><span>(45)</span> "C:\Ampps\www\sav\application\views\footer.php"
                <small>protected</small> _data => <small>array</small><span>(0)</span> 
            }</code>
            "content" => <small>object</small> <span>View(2)</span> <code>{
                <small>protected</small> _file => <small>string</small><span>(51)</span> "C:\Ampps\www\sav\application\views\archivo/list.php"
                <small>protected</small> _data => <small>array</small><span>(4)</span> <span>(
                    "aArchivoProfesor" => <small>array</small><span>(1)</span> <span>(
                        0 => <small>array</small><span>(7)</span> <span>(
                            "arc_codigo" => <small>string</small><span>(1)</span> "1"
                            "tra_codigo" => <small>string</small><span>(1)</span> "9"
                            "tab_codigo" => <small>string</small><span>(2)</span> "12"
                            "arc_nombre" => <small>string</small><span>(4)</span> "aaaa"
                            "arc_slug" => <small>string</small><span>(3)</span> "sss"
                            "usu_usuario" => <small>string</small><span>(5)</span> "fcs27"
                            "arc_fecha_registro" => <small>string</small><span>(14)</span> "20140620030922"
                        )</span>
                    )</span>
                    "aArchivoAlumno" => <small>array</small><span>(2)</span> <span>(
                        0 => <small>array</small><span>(7)</span> <span>(
                            "arc_codigo" => <small>string</small><span>(1)</span> "2"
                            "tra_codigo" => <small>string</small><span>(1)</span> "9"
                            "tab_codigo" => <small>string</small><span>(2)</span> "12"
                            "arc_nombre" => <small>string</small><span>(5)</span> "aaaaa"
                            "arc_slug" => <small>string</small><span>(13)</span> "jxpt3iqgaesql"
                            "usu_usuario" => <small>string</small><span>(6)</span> "jcss09"
                            "arc_fecha_registro" => <small>string</small><span>(14)</span> "20140620035932"
                        )</span>
                        1 => <small>array</small><span>(7)</span> <span>(
                            "arc_codigo" => <small>string</small><span>(1)</span> "3"
                            "tra_codigo" => <small>string</small><span>(1)</span> "9"
                            "tab_codigo" => <small>string</small><span>(2)</span> "12"
                            "arc_nombre" => <small>string</small><span>(5)</span> "aaaaa"
                            "arc_slug" => <small>string</small><span>(14)</span> "3xceladcgl.sql"
                            "usu_usuario" => <small>string</small><span>(6)</span> "jcss08"
                            "arc_fecha_registro" => <small>string</small><span>(14)</span> "20140620040009"
                        )</span>
                    )</span>
                    "idTrabajo" => <small>string</small><span>(1)</span> "9"
                    "oUser" => <small>object</small> <span>Model_Auth_Usuario(34)</span> <code>{
                        <small>protected</small> _table_name => <small>string</small><span>(7)</span> "usuario"
                        <small>protected</small> _belongs_to => <small>array</small><span>(1)</span> <span>(
                            "oPerfil" => <small>array</small><span>(2)</span> <span>(
                                "foreign_key" => <small>string</small><span>(10)</span> "per_codigo"
                                "model" => <small>string</small><span>(11)</span> "auth_perfil"
                            )</span>
                        )</span>
                        <small>protected</small> _has_one => <small>array</small><span>(0)</span> 
                        <small>protected</small> _has_many => <small>array</small><span>(0)</span> 
                        <small>protected</small> _load_with => <small>array</small><span>(0)</span> 
                        <small>protected</small> _validation => <small>NULL</small>
                        <small>protected</small> _object => <small>array</small><span>(7)</span> <span>(
                            "usu_usuario" => <small>string</small><span>(6)</span> "jcss08"
                            "per_codigo" => <small>string</small><span>(4)</span> "P001"
                            "usu_contrasena" => <small>string</small><span>(32)</span> "e10adc3949ba59abbe56e057f20f883e"
                            "usu_nombre" => <small>string</small><span>(10)</span> "Jean Carlo"
                            "usu_apellido" => <small>string</small><span>(10)</span> "Canevello "
                            "tab_codigo" => <small>string</small><span>(2)</span> "01"
                            "usu_fecha_registro" => <small>NULL</small>
                        )</span>
                        <small>protected</small> _changed => <small>array</small><span>(0)</span> 
                        <small>protected</small> _original_values => <small>array</small><span>(0)</span> 
                        <small>protected</small> _related => <small>array</small><span>(0)</span> 
                        <small>protected</small> _valid => <small>bool</small> FALSE
                        <small>protected</small> _loaded => <small>bool</small> FALSE
                        <small>protected</small> _saved => <small>bool</small> FALSE
                        <small>protected</small> _sorting => <small>NULL</small>
                        <small>protected</small> _foreign_key_suffix => <small>string</small><span>(3)</span> "_id"
                        <small>protected</small> _object_name => <small>string</small><span>(12)</span> "auth_usuario"
                        <small>protected</small> _object_plural => <small>string</small><span>(13)</span> "auth_usuarios"
                        <small>protected</small> _table_columns => <small>array</small><span>(7)</span> <span>(
                            "usu_usuario" => <small>array</small><span>(12)</span> <span>(
                                "type" => <small>string</small><span>(6)</span> "string"
                                "column_name" => <small>string</small><span>(11)</span> "usu_usuario"
                                "column_default" => <small>NULL</small>
                                "data_type" => <small>string</small><span>(7)</span> "varchar"
                                "is_nullable" => <small>bool</small> FALSE
                                "ordinal_position" => <small>integer</small> 1
                                "character_maximum_length" => <small>string</small><span>(2)</span> "20"
                                "collation_name" => <small>string</small><span>(15)</span> "utf8_general_ci"
                                "comment" => <small>string</small><span>(0)</span> ""
                                "extra" => <small>string</small><span>(0)</span> ""
                                "key" => <small>string</small><span>(3)</span> "PRI"
                                "privileges" => <small>string</small><span>(31)</span> "select,insert,update,references"
                            )</span>
                            "per_codigo" => <small>array</small><span>(12)</span> <span>(
                                "type" => <small>string</small><span>(6)</span> "string"
                                "column_name" => <small>string</small><span>(10)</span> "per_codigo"
                                "column_default" => <small>NULL</small>
                                "data_type" => <small>string</small><span>(7)</span> "varchar"
                                "is_nullable" => <small>bool</small> FALSE
                                "ordinal_position" => <small>integer</small> 2
                                "character_maximum_length" => <small>string</small><span>(1)</span> "8"
                                "collation_name" => <small>string</small><span>(15)</span> "utf8_general_ci"
                                "comment" => <small>string</small><span>(0)</span> ""
                                "extra" => <small>string</small><span>(0)</span> ""
                                "key" => <small>string</small><span>(3)</span> "MUL"
                                "privileges" => <small>string</small><span>(31)</span> "select,insert,update,references"
                            )</span>
                            "usu_contrasena" => <small>array</small><span>(12)</span> <span>(
                                "type" => <small>string</small><span>(6)</span> "string"
                                "column_name" => <small>string</small><span>(14)</span> "usu_contrasena"
                                "column_default" => <small>NULL</small>
                                "data_type" => <small>string</small><span>(7)</span> "varchar"
                                "is_nullable" => <small>bool</small> TRUE
                                "ordinal_position" => <small>integer</small> 3
                                "character_maximum_length" => <small>string</small><span>(3)</span> "150"
                                "collation_name" => <small>string</small><span>(15)</span> "utf8_general_ci"
                                "comment" => <small>string</small><span>(0)</span> ""
                                "extra" => <small>string</small><span>(0)</span> ""
                                "key" => <small>string</small><span>(0)</span> ""
                                "privileges" => <small>string</small><span>(31)</span> "select,insert,update,references"
                            )</span>
                            "usu_nombre" => <small>array</small><span>(12)</span> <span>(
                                "type" => <small>string</small><span>(6)</span> "string"
                                "column_name" => <small>string</small><span>(10)</span> "usu_nombre"
                                "column_default" => <small>NULL</small>
                                "data_type" => <small>string</small><span>(7)</span> "varchar"
                                "is_nullable" => <small>bool</small> TRUE
                                "ordinal_position" => <small>integer</small> 4
                                "character_maximum_length" => <small>string</small><span>(3)</span> "150"
                                "collation_name" => <small>string</small><span>(15)</span> "utf8_general_ci"
                                "comment" => <small>string</small><span>(0)</span> ""
                                "extra" => <small>string</small><span>(0)</span> ""
                                "key" => <small>string</small><span>(0)</span> ""
                                "privileges" => <small>string</small><span>(31)</span> "select,insert,update,references"
                            )</span>
                            "usu_apellido" => <small>array</small><span>(12)</span> <span>(
                                "type" => <small>string</small><span>(6)</span> "string"
                                "column_name" => <small>string</small><span>(12)</span> "usu_apellido"
                                "column_default" => <small>NULL</small>
                                "data_type" => <small>string</small><span>(7)</span> "varchar"
                                "is_nullable" => <small>bool</small> TRUE
                                "ordinal_position" => <small>integer</small> 5
                                "character_maximum_length" => <small>string</small><span>(3)</span> "150"
                                "collation_name" => <small>string</small><span>(15)</span> "utf8_general_ci"
                                "comment" => <small>string</small><span>(0)</span> ""
                                "extra" => <small>string</small><span>(0)</span> ""
                                "key" => <small>string</small><span>(0)</span> ""
                                "privileges" => <small>string</small><span>(31)</span> "select,insert,update,references"
                            )</span>
                            "tab_codigo" => <small>array</small><span>(12)</span> <span>(
                                "type" => <small>string</small><span>(6)</span> "string"
                                "column_name" => <small>string</small><span>(10)</span> "tab_codigo"
                                "column_default" => <small>NULL</small>
                                "data_type" => <small>string</small><span>(7)</span> "varchar"
                                "is_nullable" => <small>bool</small> FALSE
                                "ordinal_position" => <small>integer</small> 6
                                "character_maximum_length" => <small>string</small><span>(1)</span> "8"
                                "collation_name" => <small>string</small><span>(15)</span> "utf8_general_ci"
                                "comment" => <small>string</small><span>(0)</span> ""
                                "extra" => <small>string</small><span>(0)</span> ""
                                "key" => <small>string</small><span>(3)</span> "MUL"
                                "privileges" => <small>string</small><span>(31)</span> "select,insert,update,references"
                            )</span>
                            "usu_fecha_registro" => <small>array</small><span>(12)</span> <span>(
                                "type" => <small>string</small><span>(6)</span> "string"
                                "column_name" => <small>string</small><span>(18)</span> "usu_fecha_registro"
                                "column_default" => <small>NULL</small>
                                "data_type" => <small>string</small><span>(7)</span> "varchar"
                                "is_nullable" => <small>bool</small> TRUE
                                "ordinal_position" => <small>integer</small> 7
                                "character_maximum_length" => <small>string</small><span>(2)</span> "20"
                                "collation_name" => <small>string</small><span>(15)</span> "utf8_general_ci"
                                "comment" => <small>string</small><span>(0)</span> ""
                                "extra" => <small>string</small><span>(0)</span> ""
                                "key" => <small>string</small><span>(0)</span> ""
                                "privileges" => <small>string</small><span>(31)</span> "select,insert,update,references"
                            )</span>
                        )</span>
                        <small>protected</small> _updated_column => <small>NULL</small>
                        <small>protected</small> _created_column => <small>NULL</small>
                        <small>protected</small> _serialize_columns => <small>array</small><span>(0)</span> 
                        <small>protected</small> _primary_key => <small>string</small><span>(2)</span> "id"
                        <small>protected</small> _primary_key_value => <small>NULL</small>
                        <small>protected</small> _table_names_plural => <small>bool</small> TRUE
                        <small>protected</small> _reload_on_wakeup => <small>bool</small> TRUE
                        <small>protected</small> _db => <small>object</small> <span>Database_MySQL(6)</span> <code>{
                            <small>protected</small> _connection_id => <small>string</small><span>(40)</span> "b673bb311874c2cbb8ce196f26ab792771471297"
                            <small>protected</small> _identifier => <small>string</small><span>(1)</span> "`"
                            <small>public</small> last_query => <small>string</small><span>(150)</span> "SELECT `perfil`.`per_codigo` FROM `usuario` JOIN `perfil` ON (`perfil`.`per_codigo` = `usuario`.`per_codigo`) WHERE `usuario`.`u&nbsp;&hellip;"
                            <small>protected</small> _instance => <small>string</small><span>(7)</span> "default"
                            <small>protected</small> _connection => <small>resource</small><span>(mysql link)</span>
                            <small>protected</small> _config => <small>array</small><span>(5)</span> <span>(
                                "type" => <small>string</small><span>(5)</span> "MySQL"
                                "connection" => <small>array</small><span>(3)</span> <span>(
                                    "hostname" => <small>string</small><span>(9)</span> "localhost"
                                    "database" => <small>string</small><span>(3)</span> "SAV"
                                    "persistent" => <small>bool</small> FALSE
                                )</span>
                                "table_prefix" => <small>string</small><span>(0)</span> ""
                                "charset" => <small>string</small><span>(4)</span> "utf8"
                                "caching" => <small>bool</small> FALSE
                            )</span>
                        }</code>
                        <small>protected</small> _db_group => <small>NULL</small>
                        <small>protected</small> _db_applied => <small>array</small><span>(0)</span> 
                        <small>protected</small> _db_pending => <small>array</small><span>(0)</span> 
                        <small>protected</small> _db_reset => <small>bool</small> TRUE
                        <small>protected</small> _db_builder => <small>NULL</small>
                        <small>protected</small> _with_applied => <small>array</small><span>(0)</span> 
                        <small>protected</small> _cast_data => <small>array</small><span>(0)</span> 
                        <small>protected</small> _errors_filename => <small>string</small><span>(12)</span> "auth_usuario"
                    }</code>
                )</span>
            }</code>
        )</span>
    }</code>
    <small>public</small> header => <small>string</small><span>(6)</span> "header"
    <small>public</small> navbar => <small>string</small><span>(6)</span> "navbar"
    <small>public</small> footer => <small>string</small><span>(6)</span> "footer"
    <small>public</small> oUser => <small>object</small> <span>Model_Auth_Usuario(34)</span> <code>{
        <small>protected</small> _table_name => <small>string</small><span>(7)</span> "usuario"
        <small>protected</small> _belongs_to => <small>array</small><span>(1)</span> <span>(
            "oPerfil" => <small>array</small><span>(2)</span> <span>(
                "foreign_key" => <small>string</small><span>(10)</span> "per_codigo"
                "model" => <small>string</small><span>(11)</span> "auth_perfil"
            )</span>
        )</span>
        <small>protected</small> _has_one => <small>array</small><span>(0)</span> 
        <small>protected</small> _has_many => <small>array</small><span>(0)</span> 
        <small>protected</small> _load_with => <small>array</small><span>(0)</span> 
        <small>protected</small> _validation => <small>NULL</small>
        <small>protected</small> _object => <small>array</small><span>(7)</span> <span>(
            "usu_usuario" => <small>string</small><span>(6)</span> "jcss08"
            "per_codigo" => <small>string</small><span>(4)</span> "P001"
            "usu_contrasena" => <small>string</small><span>(32)</span> "e10adc3949ba59abbe56e057f20f883e"
            "usu_nombre" => <small>string</small><span>(10)</span> "Jean Carlo"
            "usu_apellido" => <small>string</small><span>(10)</span> "Canevello "
            "tab_codigo" => <small>string</small><span>(2)</span> "01"
            "usu_fecha_registro" => <small>NULL</small>
        )</span>
        <small>protected</small> _changed => <small>array</small><span>(0)</span> 
        <small>protected</small> _original_values => <small>array</small><span>(0)</span> 
        <small>protected</small> _related => <small>array</small><span>(0)</span> 
        <small>protected</small> _valid => <small>bool</small> FALSE
        <small>protected</small> _loaded => <small>bool</small> FALSE
        <small>protected</small> _saved => <small>bool</small> FALSE
        <small>protected</small> _sorting => <small>NULL</small>
        <small>protected</small> _foreign_key_suffix => <small>string</small><span>(3)</span> "_id"
        <small>protected</small> _object_name => <small>string</small><span>(12)</span> "auth_usuario"
        <small>protected</small> _object_plural => <small>string</small><span>(13)</span> "auth_usuarios"
        <small>protected</small> _table_columns => <small>array</small><span>(7)</span> <span>(
            "usu_usuario" => <small>array</small><span>(12)</span> <span>(
                "type" => <small>string</small><span>(6)</span> "string"
                "column_name" => <small>string</small><span>(11)</span> "usu_usuario"
                "column_default" => <small>NULL</small>
                "data_type" => <small>string</small><span>(7)</span> "varchar"
                "is_nullable" => <small>bool</small> FALSE
                "ordinal_position" => <small>integer</small> 1
                "character_maximum_length" => <small>string</small><span>(2)</span> "20"
                "collation_name" => <small>string</small><span>(15)</span> "utf8_general_ci"
                "comment" => <small>string</small><span>(0)</span> ""
                "extra" => <small>string</small><span>(0)</span> ""
                "key" => <small>string</small><span>(3)</span> "PRI"
                "privileges" => <small>string</small><span>(31)</span> "select,insert,update,references"
            )</span>
            "per_codigo" => <small>array</small><span>(12)</span> <span>(
                "type" => <small>string</small><span>(6)</span> "string"
                "column_name" => <small>string</small><span>(10)</span> "per_codigo"
                "column_default" => <small>NULL</small>
                "data_type" => <small>string</small><span>(7)</span> "varchar"
                "is_nullable" => <small>bool</small> FALSE
                "ordinal_position" => <small>integer</small> 2
                "character_maximum_length" => <small>string</small><span>(1)</span> "8"
                "collation_name" => <small>string</small><span>(15)</span> "utf8_general_ci"
                "comment" => <small>string</small><span>(0)</span> ""
                "extra" => <small>string</small><span>(0)</span> ""
                "key" => <small>string</small><span>(3)</span> "MUL"
                "privileges" => <small>string</small><span>(31)</span> "select,insert,update,references"
            )</span>
            "usu_contrasena" => <small>array</small><span>(12)</span> <span>(
                "type" => <small>string</small><span>(6)</span> "string"
                "column_name" => <small>string</small><span>(14)</span> "usu_contrasena"
                "column_default" => <small>NULL</small>
                "data_type" => <small>string</small><span>(7)</span> "varchar"
                "is_nullable" => <small>bool</small> TRUE
                "ordinal_position" => <small>integer</small> 3
                "character_maximum_length" => <small>string</small><span>(3)</span> "150"
                "collation_name" => <small>string</small><span>(15)</span> "utf8_general_ci"
                "comment" => <small>string</small><span>(0)</span> ""
                "extra" => <small>string</small><span>(0)</span> ""
                "key" => <small>string</small><span>(0)</span> ""
                "privileges" => <small>string</small><span>(31)</span> "select,insert,update,references"
            )</span>
            "usu_nombre" => <small>array</small><span>(12)</span> <span>(
                "type" => <small>string</small><span>(6)</span> "string"
                "column_name" => <small>string</small><span>(10)</span> "usu_nombre"
                "column_default" => <small>NULL</small>
                "data_type" => <small>string</small><span>(7)</span> "varchar"
                "is_nullable" => <small>bool</small> TRUE
                "ordinal_position" => <small>integer</small> 4
                "character_maximum_length" => <small>string</small><span>(3)</span> "150"
                "collation_name" => <small>string</small><span>(15)</span> "utf8_general_ci"
                "comment" => <small>string</small><span>(0)</span> ""
                "extra" => <small>string</small><span>(0)</span> ""
                "key" => <small>string</small><span>(0)</span> ""
                "privileges" => <small>string</small><span>(31)</span> "select,insert,update,references"
            )</span>
            "usu_apellido" => <small>array</small><span>(12)</span> <span>(
                "type" => <small>string</small><span>(6)</span> "string"
                "column_name" => <small>string</small><span>(12)</span> "usu_apellido"
                "column_default" => <small>NULL</small>
                "data_type" => <small>string</small><span>(7)</span> "varchar"
                "is_nullable" => <small>bool</small> TRUE
                "ordinal_position" => <small>integer</small> 5
                "character_maximum_length" => <small>string</small><span>(3)</span> "150"
                "collation_name" => <small>string</small><span>(15)</span> "utf8_general_ci"
                "comment" => <small>string</small><span>(0)</span> ""
                "extra" => <small>string</small><span>(0)</span> ""
                "key" => <small>string</small><span>(0)</span> ""
                "privileges" => <small>string</small><span>(31)</span> "select,insert,update,references"
            )</span>
            "tab_codigo" => <small>array</small><span>(12)</span> <span>(
                "type" => <small>string</small><span>(6)</span> "string"
                "column_name" => <small>string</small><span>(10)</span> "tab_codigo"
                "column_default" => <small>NULL</small>
                "data_type" => <small>string</small><span>(7)</span> "varchar"
                "is_nullable" => <small>bool</small> FALSE
                "ordinal_position" => <small>integer</small> 6
                "character_maximum_length" => <small>string</small><span>(1)</span> "8"
                "collation_name" => <small>string</small><span>(15)</span> "utf8_general_ci"
                "comment" => <small>string</small><span>(0)</span> ""
                "extra" => <small>string</small><span>(0)</span> ""
                "key" => <small>string</small><span>(3)</span> "MUL"
                "privileges" => <small>string</small><span>(31)</span> "select,insert,update,references"
            )</span>
            "usu_fecha_registro" => <small>array</small><span>(12)</span> <span>(
                "type" => <small>string</small><span>(6)</span> "string"
                "column_name" => <small>string</small><span>(18)</span> "usu_fecha_registro"
                "column_default" => <small>NULL</small>
                "data_type" => <small>string</small><span>(7)</span> "varchar"
                "is_nullable" => <small>bool</small> TRUE
                "ordinal_position" => <small>integer</small> 7
                "character_maximum_length" => <small>string</small><span>(2)</span> "20"
                "collation_name" => <small>string</small><span>(15)</span> "utf8_general_ci"
                "comment" => <small>string</small><span>(0)</span> ""
                "extra" => <small>string</small><span>(0)</span> ""
                "key" => <small>string</small><span>(0)</span> ""
                "privileges" => <small>string</small><span>(31)</span> "select,insert,update,references"
            )</span>
        )</span>
        <small>protected</small> _updated_column => <small>NULL</small>
        <small>protected</small> _created_column => <small>NULL</small>
        <small>protected</small> _serialize_columns => <small>array</small><span>(0)</span> 
        <small>protected</small> _primary_key => <small>string</small><span>(2)</span> "id"
        <small>protected</small> _primary_key_value => <small>NULL</small>
        <small>protected</small> _table_names_plural => <small>bool</small> TRUE
        <small>protected</small> _reload_on_wakeup => <small>bool</small> TRUE
        <small>protected</small> _db => <small>object</small> <span>Database_MySQL(6)</span> <code>{
            <small>protected</small> _connection_id => <small>string</small><span>(40)</span> "b673bb311874c2cbb8ce196f26ab792771471297"
            <small>protected</small> _identifier => <small>string</small><span>(1)</span> "`"
            <small>public</small> last_query => <small>string</small><span>(150)</span> "SELECT `perfil`.`per_codigo` FROM `usuario` JOIN `perfil` ON (`perfil`.`per_codigo` = `usuario`.`per_codigo`) WHERE `usuario`.`u&nbsp;&hellip;"
            <small>protected</small> _instance => <small>string</small><span>(7)</span> "default"
            <small>protected</small> _connection => <small>resource</small><span>(mysql link)</span>
            <small>protected</small> _config => <small>array</small><span>(5)</span> <span>(
                "type" => <small>string</small><span>(5)</span> "MySQL"
                "connection" => <small>array</small><span>(3)</span> <span>(
                    "hostname" => <small>string</small><span>(9)</span> "localhost"
                    "database" => <small>string</small><span>(3)</span> "SAV"
                    "persistent" => <small>bool</small> FALSE
                )</span>
                "table_prefix" => <small>string</small><span>(0)</span> ""
                "charset" => <small>string</small><span>(4)</span> "utf8"
                "caching" => <small>bool</small> FALSE
            )</span>
        }</code>
        <small>protected</small> _db_group => <small>NULL</small>
        <small>protected</small> _db_applied => <small>array</small><span>(0)</span> 
        <small>protected</small> _db_pending => <small>array</small><span>(0)</span> 
        <small>protected</small> _db_reset => <small>bool</small> TRUE
        <small>protected</small> _db_builder => <small>NULL</small>
        <small>protected</small> _with_applied => <small>array</small><span>(0)</span> 
        <small>protected</small> _cast_data => <small>array</small><span>(0)</span> 
        <small>protected</small> _errors_filename => <small>string</small><span>(12)</span> "auth_usuario"
    }</code>
    <small>public</small> auto_render => <small>bool</small> TRUE
    <small>public</small> request => <small>object</small> <span>Request(19)</span> <code>{
        <small>protected</small> _requested_with => <small>NULL</small>
        <small>protected</small> _method => <small>string</small><span>(3)</span> "GET"
        <small>protected</small> _protocol => <small>string</small><span>(8)</span> "HTTP/1.1"
        <small>protected</small> _secure => <small>bool</small> FALSE
        <small>protected</small> _referrer => <small>string</small><span>(22)</span> "http://sav.dev/trabajo"
        <small>protected</small> _route => <small>object</small> <span>Route(5)</span> <code>{
            <small>protected</small> _filters => <small>array</small><span>(0)</span> 
            <small>protected</small> _uri => <small>string</small><span>(32)</span> "(&lt;controller&gt;(/&lt;action&gt;(/&lt;id&gt;)))"
            <small>protected</small> _regex => <small>array</small><span>(0)</span> 
            <small>protected</small> _defaults => <small>array</small><span>(2)</span> <span>(
                "controller" => <small>string</small><span>(5)</span> "panel"
                "action" => <small>string</small><span>(5)</span> "index"
            )</span>
            <small>protected</small> _route_regex => <small>string</small><span>(95)</span> "#^(?:(?P&lt;controller&gt;[^/.,;?\n]++)(?:/(?P&lt;action&gt;[^/.,;?\n]++)(?:/(?P&lt;id&gt;[^/.,;?\n]++))?)?)?$#uD"
        }</code>
        <small>protected</small> _routes => <small>array</small><span>(0)</span> 
        <small>protected</small> _header => <small>object</small> <span>HTTP_Header(0)</span> <code>{
        }</code>
        <small>protected</small> _body => <small>NULL</small>
        <small>protected</small> _directory => <small>string</small><span>(0)</span> ""
        <small>protected</small> _controller => <small>string</small><span>(7)</span> "Archivo"
        <small>protected</small> _action => <small>string</small><span>(4)</span> "list"
        <small>protected</small> _uri => <small>string</small><span>(14)</span> "archivo/list/9"
        <small>protected</small> _external => <small>bool</small> FALSE
        <small>protected</small> _params => <small>array</small><span>(1)</span> <span>(
            "id" => <small>string</small><span>(1)</span> "9"
        )</span>
        <small>protected</small> _get => <small>array</small><span>(0)</span> 
        <small>protected</small> _post => <small>array</small><span>(0)</span> 
        <small>protected</small> _cookies => <small>array</small><span>(1)</span> <span>(
            "session" => <small>NULL</small>
        )</span>
        <small>protected</small> _client => <small>object</small> <span>Request_Client_Internal(9)</span> <code>{
            <small>protected</small> _previous_environment => <small>NULL</small>
            <small>protected</small> _cache => <small>NULL</small>
            <small>protected</small> _follow => <small>bool</small> FALSE
            <small>protected</small> _follow_headers => <small>array</small><span>(1)</span> <span>(
                0 => <small>string</small><span>(13)</span> "Authorization"
            )</span>
            <small>protected</small> _strict_redirect => <small>bool</small> TRUE
            <small>protected</small> _header_callbacks => <small>array</small><span>(1)</span> <span>(
                "Location" => <small>string</small><span>(34)</span> "Request_Client::on_header_location"
            )</span>
            <small>protected</small> _max_callback_depth => <small>integer</small> 5
            <small>protected</small> _callback_depth => <small>integer</small> 1
            <small>protected</small> _callback_params => <small>array</small><span>(0)</span> 
        }</code>
    }</code>
    <small>public</small> response => <small>object</small> <span>Response(5)</span> <code>{
        <small>protected</small> _status => <small>integer</small> 200
        <small>protected</small> _header => <small>object</small> <span>HTTP_Header(0)</span> <code>{
        }</code>
        <small>protected</small> _body => <small>string</small><span>(0)</span> ""
        <small>protected</small> _cookies => <small>array</small><span>(0)</span> 
        <small>protected</small> _protocol => <small>string</small><span>(8)</span> "HTTP/1.1"
    }</code>
}</code></pre></td>
						</tr>
										</table>
				</div>
													<pre id="error53a4606191394source13" class="source collapsed"><code><pre class="source"><code><span class="line"><span class="number"> 92</span> 
</span><span class="line"><span class="number"> 93</span> 			// Create a new instance of the controller
</span><span class="line"><span class="number"> 94</span> 			$controller = $class-&gt;newInstance($request, $response);
</span><span class="line"><span class="number"> 95</span> 
</span><span class="line"><span class="number"> 96</span> 			// Run the controller's execute() method
</span><span class="line highlight"><span class="number"> 97</span> 			$response = $class-&gt;getMethod('execute')-&gt;invoke($controller);
</span><span class="line"><span class="number"> 98</span> 
</span><span class="line"><span class="number"> 99</span> 			if ( ! $response instanceof Response)
</span><span class="line"><span class="number">100</span> 			{
</span><span class="line"><span class="number">101</span> 				// Controller failed to return a Response.
</span><span class="line"><span class="number">102</span> 				throw new Kohana_Exception('Controller failed to return a Response');
</span></code></pre></code></pre>
							</li>
								<li>
				<p>
					<span class="file">
													<a href="#error53a4606191394source14" onclick="return koggle('error53a4606191394source14')">SYSPATH\classes\Kohana\Request\Client.php [ 114 ]</a>
											</span>
					&raquo;
					Kohana_Request_Client_Internal->execute_request(<a href="#error53a4606191394args14" onclick="return koggle('error53a4606191394args14')">arguments</a>)
				</p>
								<div id="error53a4606191394args14" class="collapsed">
					<table cellspacing="0">
											<tr>
							<td><code>0</code></td>
							<td><pre><small>object</small> <span>Request(19)</span> <code>{
    <small>protected</small> _requested_with => <small>NULL</small>
    <small>protected</small> _method => <small>string</small><span>(3)</span> "GET"
    <small>protected</small> _protocol => <small>string</small><span>(8)</span> "HTTP/1.1"
    <small>protected</small> _secure => <small>bool</small> FALSE
    <small>protected</small> _referrer => <small>string</small><span>(22)</span> "http://sav.dev/trabajo"
    <small>protected</small> _route => <small>object</small> <span>Route(5)</span> <code>{
        <small>protected</small> _filters => <small>array</small><span>(0)</span> 
        <small>protected</small> _uri => <small>string</small><span>(32)</span> "(&lt;controller&gt;(/&lt;action&gt;(/&lt;id&gt;)))"
        <small>protected</small> _regex => <small>array</small><span>(0)</span> 
        <small>protected</small> _defaults => <small>array</small><span>(2)</span> <span>(
            "controller" => <small>string</small><span>(5)</span> "panel"
            "action" => <small>string</small><span>(5)</span> "index"
        )</span>
        <small>protected</small> _route_regex => <small>string</small><span>(95)</span> "#^(?:(?P&lt;controller&gt;[^/.,;?\n]++)(?:/(?P&lt;action&gt;[^/.,;?\n]++)(?:/(?P&lt;id&gt;[^/.,;?\n]++))?)?)?$#uD"
    }</code>
    <small>protected</small> _routes => <small>array</small><span>(0)</span> 
    <small>protected</small> _header => <small>object</small> <span>HTTP_Header(0)</span> <code>{
    }</code>
    <small>protected</small> _body => <small>NULL</small>
    <small>protected</small> _directory => <small>string</small><span>(0)</span> ""
    <small>protected</small> _controller => <small>string</small><span>(7)</span> "Archivo"
    <small>protected</small> _action => <small>string</small><span>(4)</span> "list"
    <small>protected</small> _uri => <small>string</small><span>(14)</span> "archivo/list/9"
    <small>protected</small> _external => <small>bool</small> FALSE
    <small>protected</small> _params => <small>array</small><span>(1)</span> <span>(
        "id" => <small>string</small><span>(1)</span> "9"
    )</span>
    <small>protected</small> _get => <small>array</small><span>(0)</span> 
    <small>protected</small> _post => <small>array</small><span>(0)</span> 
    <small>protected</small> _cookies => <small>array</small><span>(1)</span> <span>(
        "session" => <small>NULL</small>
    )</span>
    <small>protected</small> _client => <small>object</small> <span>Request_Client_Internal(9)</span> <code>{
        <small>protected</small> _previous_environment => <small>NULL</small>
        <small>protected</small> _cache => <small>NULL</small>
        <small>protected</small> _follow => <small>bool</small> FALSE
        <small>protected</small> _follow_headers => <small>array</small><span>(1)</span> <span>(
            0 => <small>string</small><span>(13)</span> "Authorization"
        )</span>
        <small>protected</small> _strict_redirect => <small>bool</small> TRUE
        <small>protected</small> _header_callbacks => <small>array</small><span>(1)</span> <span>(
            "Location" => <small>string</small><span>(34)</span> "Request_Client::on_header_location"
        )</span>
        <small>protected</small> _max_callback_depth => <small>integer</small> 5
        <small>protected</small> _callback_depth => <small>integer</small> 1
        <small>protected</small> _callback_params => <small>array</small><span>(0)</span> 
    }</code>
}</code></pre></td>
						</tr>
											<tr>
							<td><code>1</code></td>
							<td><pre><small>object</small> <span>Response(5)</span> <code>{
    <small>protected</small> _status => <small>integer</small> 200
    <small>protected</small> _header => <small>object</small> <span>HTTP_Header(0)</span> <code>{
    }</code>
    <small>protected</small> _body => <small>string</small><span>(0)</span> ""
    <small>protected</small> _cookies => <small>array</small><span>(0)</span> 
    <small>protected</small> _protocol => <small>string</small><span>(8)</span> "HTTP/1.1"
}</code></pre></td>
						</tr>
										</table>
				</div>
													<pre id="error53a4606191394source14" class="source collapsed"><code><pre class="source"><code><span class="line"><span class="number">109</span> 		$orig_response = $response = Response::factory(array('_protocol' =&gt; $request-&gt;protocol()));
</span><span class="line"><span class="number">110</span> 
</span><span class="line"><span class="number">111</span> 		if (($cache = $this-&gt;cache()) instanceof HTTP_Cache)
</span><span class="line"><span class="number">112</span> 			return $cache-&gt;execute($this, $request, $response);
</span><span class="line"><span class="number">113</span> 
</span><span class="line highlight"><span class="number">114</span> 		$response = $this-&gt;execute_request($request, $response);
</span><span class="line"><span class="number">115</span> 
</span><span class="line"><span class="number">116</span> 		// Execute response callbacks
</span><span class="line"><span class="number">117</span> 		foreach ($this-&gt;header_callbacks() as $header =&gt; $callback)
</span><span class="line"><span class="number">118</span> 		{
</span><span class="line"><span class="number">119</span> 			if ($response-&gt;headers($header))
</span></code></pre></code></pre>
							</li>
								<li>
				<p>
					<span class="file">
													<a href="#error53a4606191394source15" onclick="return koggle('error53a4606191394source15')">SYSPATH\classes\Kohana\Request.php [ 986 ]</a>
											</span>
					&raquo;
					Kohana_Request_Client->execute(<a href="#error53a4606191394args15" onclick="return koggle('error53a4606191394args15')">arguments</a>)
				</p>
								<div id="error53a4606191394args15" class="collapsed">
					<table cellspacing="0">
											<tr>
							<td><code>0</code></td>
							<td><pre><small>object</small> <span>Request(19)</span> <code>{
    <small>protected</small> _requested_with => <small>NULL</small>
    <small>protected</small> _method => <small>string</small><span>(3)</span> "GET"
    <small>protected</small> _protocol => <small>string</small><span>(8)</span> "HTTP/1.1"
    <small>protected</small> _secure => <small>bool</small> FALSE
    <small>protected</small> _referrer => <small>string</small><span>(22)</span> "http://sav.dev/trabajo"
    <small>protected</small> _route => <small>object</small> <span>Route(5)</span> <code>{
        <small>protected</small> _filters => <small>array</small><span>(0)</span> 
        <small>protected</small> _uri => <small>string</small><span>(32)</span> "(&lt;controller&gt;(/&lt;action&gt;(/&lt;id&gt;)))"
        <small>protected</small> _regex => <small>array</small><span>(0)</span> 
        <small>protected</small> _defaults => <small>array</small><span>(2)</span> <span>(
            "controller" => <small>string</small><span>(5)</span> "panel"
            "action" => <small>string</small><span>(5)</span> "index"
        )</span>
        <small>protected</small> _route_regex => <small>string</small><span>(95)</span> "#^(?:(?P&lt;controller&gt;[^/.,;?\n]++)(?:/(?P&lt;action&gt;[^/.,;?\n]++)(?:/(?P&lt;id&gt;[^/.,;?\n]++))?)?)?$#uD"
    }</code>
    <small>protected</small> _routes => <small>array</small><span>(0)</span> 
    <small>protected</small> _header => <small>object</small> <span>HTTP_Header(0)</span> <code>{
    }</code>
    <small>protected</small> _body => <small>NULL</small>
    <small>protected</small> _directory => <small>string</small><span>(0)</span> ""
    <small>protected</small> _controller => <small>string</small><span>(7)</span> "Archivo"
    <small>protected</small> _action => <small>string</small><span>(4)</span> "list"
    <small>protected</small> _uri => <small>string</small><span>(14)</span> "archivo/list/9"
    <small>protected</small> _external => <small>bool</small> FALSE
    <small>protected</small> _params => <small>array</small><span>(1)</span> <span>(
        "id" => <small>string</small><span>(1)</span> "9"
    )</span>
    <small>protected</small> _get => <small>array</small><span>(0)</span> 
    <small>protected</small> _post => <small>array</small><span>(0)</span> 
    <small>protected</small> _cookies => <small>array</small><span>(1)</span> <span>(
        "session" => <small>NULL</small>
    )</span>
    <small>protected</small> _client => <small>object</small> <span>Request_Client_Internal(9)</span> <code>{
        <small>protected</small> _previous_environment => <small>NULL</small>
        <small>protected</small> _cache => <small>NULL</small>
        <small>protected</small> _follow => <small>bool</small> FALSE
        <small>protected</small> _follow_headers => <small>array</small><span>(1)</span> <span>(
            0 => <small>string</small><span>(13)</span> "Authorization"
        )</span>
        <small>protected</small> _strict_redirect => <small>bool</small> TRUE
        <small>protected</small> _header_callbacks => <small>array</small><span>(1)</span> <span>(
            "Location" => <small>string</small><span>(34)</span> "Request_Client::on_header_location"
        )</span>
        <small>protected</small> _max_callback_depth => <small>integer</small> 5
        <small>protected</small> _callback_depth => <small>integer</small> 1
        <small>protected</small> _callback_params => <small>array</small><span>(0)</span> 
    }</code>
}</code></pre></td>
						</tr>
										</table>
				</div>
													<pre id="error53a4606191394source15" class="source collapsed"><code><pre class="source"><code><span class="line"><span class="number">981</span> 			throw new Request_Exception('Unable to execute :uri without a Kohana_Request_Client', array(
</span><span class="line"><span class="number">982</span> 				':uri' =&gt; $this-&gt;_uri,
</span><span class="line"><span class="number">983</span> 			));
</span><span class="line"><span class="number">984</span> 		}
</span><span class="line"><span class="number">985</span> 
</span><span class="line highlight"><span class="number">986</span> 		return $this-&gt;_client-&gt;execute($this);
</span><span class="line"><span class="number">987</span> 	}
</span><span class="line"><span class="number">988</span> 
</span><span class="line"><span class="number">989</span> 	/**
</span><span class="line"><span class="number">990</span> 	 * Returns whether this request is the initial request Kohana received.
</span><span class="line"><span class="number">991</span> 	 * Can be used to test for sub requests.
</span></code></pre></code></pre>
							</li>
								<li>
				<p>
					<span class="file">
													<a href="#error53a4606191394source16" onclick="return koggle('error53a4606191394source16')">DOCROOT\index.php [ 118 ]</a>
											</span>
					&raquo;
					Kohana_Request->execute()
				</p>
													<pre id="error53a4606191394source16" class="source collapsed"><code><pre class="source"><code><span class="line"><span class="number">113</span> 	/**
</span><span class="line"><span class="number">114</span> 	 * Execute the main request. A source of the URI can be passed, eg: $_SERVER['PATH_INFO'].
</span><span class="line"><span class="number">115</span> 	 * If no source is specified, the URI will be automatically detected.
</span><span class="line"><span class="number">116</span> 	 */
</span><span class="line"><span class="number">117</span> 	echo Request::factory(TRUE, array(), FALSE)
</span><span class="line highlight"><span class="number">118</span> 		-&gt;execute()
</span><span class="line"><span class="number">119</span> 		-&gt;send_headers(TRUE)
</span><span class="line"><span class="number">120</span> 		-&gt;body();
</span><span class="line"><span class="number">121</span> }
</span></code></pre></code></pre>
							</li>
							</ol>
	</div>
	<h2><a href="#error53a4606191394environment" onclick="return koggle('error53a4606191394environment')">Environment</a></h2>
	<div id="error53a4606191394environment" class="content collapsed">
				<h3><a href="#error53a4606191394environment_included" onclick="return koggle('error53a4606191394environment_included')">Included files</a> (107)</h3>
		<div id="error53a4606191394environment_included" class="collapsed">
			<table cellspacing="0">
								<tr>
					<td><code>DOCROOT\index.php</code></td>
				</tr>
								<tr>
					<td><code>APPPATH\bootstrap.php</code></td>
				</tr>
								<tr>
					<td><code>SYSPATH\classes\Kohana\Core.php</code></td>
				</tr>
								<tr>
					<td><code>SYSPATH\classes\Kohana.php</code></td>
				</tr>
								<tr>
					<td><code>SYSPATH\classes\I18n.php</code></td>
				</tr>
								<tr>
					<td><code>SYSPATH\classes\Kohana\I18n.php</code></td>
				</tr>
								<tr>
					<td><code>SYSPATH\classes\HTTP.php</code></td>
				</tr>
								<tr>
					<td><code>SYSPATH\classes\Kohana\HTTP.php</code></td>
				</tr>
								<tr>
					<td><code>SYSPATH\classes\Kohana\Exception.php</code></td>
				</tr>
								<tr>
					<td><code>SYSPATH\classes\Kohana\Kohana\Exception.php</code></td>
				</tr>
								<tr>
					<td><code>SYSPATH\classes\Log.php</code></td>
				</tr>
								<tr>
					<td><code>SYSPATH\classes\Kohana\Log.php</code></td>
				</tr>
								<tr>
					<td><code>SYSPATH\classes\Config.php</code></td>
				</tr>
								<tr>
					<td><code>SYSPATH\classes\Kohana\Config.php</code></td>
				</tr>
								<tr>
					<td><code>SYSPATH\classes\Log\File.php</code></td>
				</tr>
								<tr>
					<td><code>SYSPATH\classes\Kohana\Log\File.php</code></td>
				</tr>
								<tr>
					<td><code>SYSPATH\classes\Log\Writer.php</code></td>
				</tr>
								<tr>
					<td><code>SYSPATH\classes\Kohana\Log\Writer.php</code></td>
				</tr>
								<tr>
					<td><code>SYSPATH\classes\Config\File.php</code></td>
				</tr>
								<tr>
					<td><code>SYSPATH\classes\Kohana\Config\File.php</code></td>
				</tr>
								<tr>
					<td><code>SYSPATH\classes\Kohana\Config\File\Reader.php</code></td>
				</tr>
								<tr>
					<td><code>SYSPATH\classes\Kohana\Config\Reader.php</code></td>
				</tr>
								<tr>
					<td><code>SYSPATH\classes\Kohana\Config\Source.php</code></td>
				</tr>
								<tr>
					<td><code>SYSPATH\classes\Route.php</code></td>
				</tr>
								<tr>
					<td><code>SYSPATH\classes\Kohana\Route.php</code></td>
				</tr>
								<tr>
					<td><code>SYSPATH\classes\Cookie.php</code></td>
				</tr>
								<tr>
					<td><code>SYSPATH\classes\Kohana\Cookie.php</code></td>
				</tr>
								<tr>
					<td><code>SYSPATH\classes\Request.php</code></td>
				</tr>
								<tr>
					<td><code>SYSPATH\classes\Kohana\Request.php</code></td>
				</tr>
								<tr>
					<td><code>SYSPATH\classes\HTTP\Request.php</code></td>
				</tr>
								<tr>
					<td><code>SYSPATH\classes\Kohana\HTTP\Request.php</code></td>
				</tr>
								<tr>
					<td><code>SYSPATH\classes\HTTP\Message.php</code></td>
				</tr>
								<tr>
					<td><code>SYSPATH\classes\Kohana\HTTP\Message.php</code></td>
				</tr>
								<tr>
					<td><code>SYSPATH\classes\HTTP\Header.php</code></td>
				</tr>
								<tr>
					<td><code>SYSPATH\classes\Kohana\HTTP\Header.php</code></td>
				</tr>
								<tr>
					<td><code>SYSPATH\classes\Request\Client\Internal.php</code></td>
				</tr>
								<tr>
					<td><code>SYSPATH\classes\Kohana\Request\Client\Internal.php</code></td>
				</tr>
								<tr>
					<td><code>SYSPATH\classes\Request\Client.php</code></td>
				</tr>
								<tr>
					<td><code>SYSPATH\classes\Kohana\Request\Client.php</code></td>
				</tr>
								<tr>
					<td><code>SYSPATH\classes\Arr.php</code></td>
				</tr>
								<tr>
					<td><code>SYSPATH\classes\Kohana\Arr.php</code></td>
				</tr>
								<tr>
					<td><code>SYSPATH\classes\Response.php</code></td>
				</tr>
								<tr>
					<td><code>SYSPATH\classes\Kohana\Response.php</code></td>
				</tr>
								<tr>
					<td><code>SYSPATH\classes\HTTP\Response.php</code></td>
				</tr>
								<tr>
					<td><code>SYSPATH\classes\Kohana\HTTP\Response.php</code></td>
				</tr>
								<tr>
					<td><code>SYSPATH\classes\Profiler.php</code></td>
				</tr>
								<tr>
					<td><code>SYSPATH\classes\Kohana\Profiler.php</code></td>
				</tr>
								<tr>
					<td><code>APPPATH\classes\Controller\Archivo.php</code></td>
				</tr>
								<tr>
					<td><code>APPPATH\classes\Controller\Sav.php</code></td>
				</tr>
								<tr>
					<td><code>SYSPATH\classes\Controller\Template.php</code></td>
				</tr>
								<tr>
					<td><code>SYSPATH\classes\Kohana\Controller\Template.php</code></td>
				</tr>
								<tr>
					<td><code>SYSPATH\classes\Controller.php</code></td>
				</tr>
								<tr>
					<td><code>SYSPATH\classes\Kohana\Controller.php</code></td>
				</tr>
								<tr>
					<td><code>SYSPATH\classes\View.php</code></td>
				</tr>
								<tr>
					<td><code>SYSPATH\classes\Kohana\View.php</code></td>
				</tr>
								<tr>
					<td><code>APPPATH\classes\Auth\Usuario.php</code></td>
				</tr>
								<tr>
					<td><code>SYSPATH\classes\Session.php</code></td>
				</tr>
								<tr>
					<td><code>SYSPATH\classes\Kohana\Session.php</code></td>
				</tr>
								<tr>
					<td><code>SYSPATH\config\session.php</code></td>
				</tr>
								<tr>
					<td><code>MODPATH\database\config\session.php</code></td>
				</tr>
								<tr>
					<td><code>SYSPATH\classes\Config\Group.php</code></td>
				</tr>
								<tr>
					<td><code>SYSPATH\classes\Kohana\Config\Group.php</code></td>
				</tr>
								<tr>
					<td><code>SYSPATH\classes\Session\Native.php</code></td>
				</tr>
								<tr>
					<td><code>SYSPATH\classes\Kohana\Session\Native.php</code></td>
				</tr>
								<tr>
					<td><code>MODPATH\orm\classes\ORM.php</code></td>
				</tr>
								<tr>
					<td><code>MODPATH\orm\classes\Kohana\ORM.php</code></td>
				</tr>
								<tr>
					<td><code>SYSPATH\classes\Model.php</code></td>
				</tr>
								<tr>
					<td><code>SYSPATH\classes\Kohana\Model.php</code></td>
				</tr>
								<tr>
					<td><code>APPPATH\classes\Model\Auth\Usuario.php</code></td>
				</tr>
								<tr>
					<td><code>SYSPATH\classes\Inflector.php</code></td>
				</tr>
								<tr>
					<td><code>SYSPATH\classes\Kohana\Inflector.php</code></td>
				</tr>
								<tr>
					<td><code>SYSPATH\config\inflector.php</code></td>
				</tr>
								<tr>
					<td><code>MODPATH\database\classes\Database.php</code></td>
				</tr>
								<tr>
					<td><code>MODPATH\database\classes\Kohana\Database.php</code></td>
				</tr>
								<tr>
					<td><code>MODPATH\database\config\database.php</code></td>
				</tr>
								<tr>
					<td><code>APPPATH\config\database.php</code></td>
				</tr>
								<tr>
					<td><code>MODPATH\database\classes\Database\MySQL.php</code></td>
				</tr>
								<tr>
					<td><code>MODPATH\database\classes\Kohana\Database\MySQL.php</code></td>
				</tr>
								<tr>
					<td><code>MODPATH\database\classes\Database\MySQL\Result.php</code></td>
				</tr>
								<tr>
					<td><code>MODPATH\database\classes\Kohana\Database\MySQL\Result.php</code></td>
				</tr>
								<tr>
					<td><code>MODPATH\database\classes\Database\Result.php</code></td>
				</tr>
								<tr>
					<td><code>MODPATH\database\classes\Kohana\Database\Result.php</code></td>
				</tr>
								<tr>
					<td><code>MODPATH\database\classes\DB.php</code></td>
				</tr>
								<tr>
					<td><code>MODPATH\database\classes\Kohana\DB.php</code></td>
				</tr>
								<tr>
					<td><code>MODPATH\database\classes\Database\Query\Builder\Select.php</code></td>
				</tr>
								<tr>
					<td><code>MODPATH\database\classes\Kohana\Database\Query\Builder\Select.php</code></td>
				</tr>
								<tr>
					<td><code>MODPATH\database\classes\Database\Query\Builder\Where.php</code></td>
				</tr>
								<tr>
					<td><code>MODPATH\database\classes\Kohana\Database\Query\Builder\Where.php</code></td>
				</tr>
								<tr>
					<td><code>MODPATH\database\classes\Database\Query\Builder.php</code></td>
				</tr>
								<tr>
					<td><code>MODPATH\database\classes\Kohana\Database\Query\Builder.php</code></td>
				</tr>
								<tr>
					<td><code>MODPATH\database\classes\Database\Query.php</code></td>
				</tr>
								<tr>
					<td><code>MODPATH\database\classes\Kohana\Database\Query.php</code></td>
				</tr>
								<tr>
					<td><code>APPPATH\classes\Model\Trabajo.php</code></td>
				</tr>
								<tr>
					<td><code>MODPATH\database\classes\Database\Query\Builder\Join.php</code></td>
				</tr>
								<tr>
					<td><code>MODPATH\database\classes\Kohana\Database\Query\Builder\Join.php</code></td>
				</tr>
								<tr>
					<td><code>APPPATH\views\template.php</code></td>
				</tr>
								<tr>
					<td><code>APPPATH\views\header.php</code></td>
				</tr>
								<tr>
					<td><code>APPPATH\views\navbar.php</code></td>
				</tr>
								<tr>
					<td><code>APPPATH\views\archivo\list.php</code></td>
				</tr>
								<tr>
					<td><code>APPPATH\classes\Util.php</code></td>
				</tr>
								<tr>
					<td><code>SYSPATH\classes\Debug.php</code></td>
				</tr>
								<tr>
					<td><code>SYSPATH\classes\Kohana\Debug.php</code></td>
				</tr>
								<tr>
					<td><code>SYSPATH\classes\Date.php</code></td>
				</tr>
								<tr>
					<td><code>SYSPATH\classes\Kohana\Date.php</code></td>
				</tr>
								<tr>
					<td><code>SYSPATH\views\kohana\error.php</code></td>
				</tr>
								<tr>
					<td><code>SYSPATH\classes\UTF8.php</code></td>
				</tr>
								<tr>
					<td><code>SYSPATH\classes\Kohana\UTF8.php</code></td>
				</tr>
							</table>
		</div>
				<h3><a href="#error53a4606191394environment_loaded" onclick="return koggle('error53a4606191394environment_loaded')">Loaded extensions</a> (49)</h3>
		<div id="error53a4606191394environment_loaded" class="collapsed">
			<table cellspacing="0">
								<tr>
					<td><code>Core</code></td>
				</tr>
								<tr>
					<td><code>bcmath</code></td>
				</tr>
								<tr>
					<td><code>calendar</code></td>
				</tr>
								<tr>
					<td><code>ctype</code></td>
				</tr>
								<tr>
					<td><code>date</code></td>
				</tr>
								<tr>
					<td><code>ereg</code></td>
				</tr>
								<tr>
					<td><code>filter</code></td>
				</tr>
								<tr>
					<td><code>ftp</code></td>
				</tr>
								<tr>
					<td><code>hash</code></td>
				</tr>
								<tr>
					<td><code>iconv</code></td>
				</tr>
								<tr>
					<td><code>json</code></td>
				</tr>
								<tr>
					<td><code>mcrypt</code></td>
				</tr>
								<tr>
					<td><code>SPL</code></td>
				</tr>
								<tr>
					<td><code>odbc</code></td>
				</tr>
								<tr>
					<td><code>pcre</code></td>
				</tr>
								<tr>
					<td><code>Reflection</code></td>
				</tr>
								<tr>
					<td><code>session</code></td>
				</tr>
								<tr>
					<td><code>standard</code></td>
				</tr>
								<tr>
					<td><code>mysqlnd</code></td>
				</tr>
								<tr>
					<td><code>tokenizer</code></td>
				</tr>
								<tr>
					<td><code>zip</code></td>
				</tr>
								<tr>
					<td><code>zlib</code></td>
				</tr>
								<tr>
					<td><code>libxml</code></td>
				</tr>
								<tr>
					<td><code>dom</code></td>
				</tr>
								<tr>
					<td><code>PDO</code></td>
				</tr>
								<tr>
					<td><code>bz2</code></td>
				</tr>
								<tr>
					<td><code>SimpleXML</code></td>
				</tr>
								<tr>
					<td><code>wddx</code></td>
				</tr>
								<tr>
					<td><code>xml</code></td>
				</tr>
								<tr>
					<td><code>xmlreader</code></td>
				</tr>
								<tr>
					<td><code>xmlwriter</code></td>
				</tr>
								<tr>
					<td><code>apache2handler</code></td>
				</tr>
								<tr>
					<td><code>openssl</code></td>
				</tr>
								<tr>
					<td><code>curl</code></td>
				</tr>
								<tr>
					<td><code>gd</code></td>
				</tr>
								<tr>
					<td><code>mbstring</code></td>
				</tr>
								<tr>
					<td><code>mysql</code></td>
				</tr>
								<tr>
					<td><code>mysqli</code></td>
				</tr>
								<tr>
					<td><code>Phar</code></td>
				</tr>
								<tr>
					<td><code>pdo_mysql</code></td>
				</tr>
								<tr>
					<td><code>pdo_sqlite</code></td>
				</tr>
								<tr>
					<td><code>soap</code></td>
				</tr>
								<tr>
					<td><code>SQLite</code></td>
				</tr>
								<tr>
					<td><code>sqlite3</code></td>
				</tr>
								<tr>
					<td><code>xmlrpc</code></td>
				</tr>
								<tr>
					<td><code>mongo</code></td>
				</tr>
								<tr>
					<td><code>com_dotnet</code></td>
				</tr>
								<tr>
					<td><code>mhash</code></td>
				</tr>
								<tr>
					<td><code>ionCube Loader</code></td>
				</tr>
							</table>
		</div>
						<h3><a href="#error53a4606191394environment_session" onclick="return koggle('error53a4606191394environment_session')">$_SESSION</a></h3>
		<div id="error53a4606191394environment_session" class="collapsed">
			<table cellspacing="0">
								<tr>
					<td><code>last_active</code></td>
					<td><pre><small>integer</small> 1403261914</pre></td>
				</tr>
								<tr>
					<td><code>user</code></td>
					<td><pre><small>string</small><span>(6)</span> "jcss08"</pre></td>
				</tr>
							</table>
		</div>
												<h3><a href="#error53a4606191394environment_cookie" onclick="return koggle('error53a4606191394environment_cookie')">$_COOKIE</a></h3>
		<div id="error53a4606191394environment_cookie" class="collapsed">
			<table cellspacing="0">
								<tr>
					<td><code>session</code></td>
					<td><pre><small>string</small><span>(26)</span> "pr6k12iajv56k53e2odheeeqg6"</pre></td>
				</tr>
							</table>
		</div>
						<h3><a href="#error53a4606191394environment_server" onclick="return koggle('error53a4606191394environment_server')">$_SERVER</a></h3>
		<div id="error53a4606191394environment_server" class="collapsed">
			<table cellspacing="0">
								<tr>
					<td><code>REDIRECT_TMP</code></td>
					<td><pre><small>string</small><span>(12)</span> "C:/Ampps/tmp"</pre></td>
				</tr>
								<tr>
					<td><code>REDIRECT_STATUS</code></td>
					<td><pre><small>string</small><span>(3)</span> "200"</pre></td>
				</tr>
								<tr>
					<td><code>TMP</code></td>
					<td><pre><small>string</small><span>(12)</span> "C:/Ampps/tmp"</pre></td>
				</tr>
								<tr>
					<td><code>HTTP_HOST</code></td>
					<td><pre><small>string</small><span>(7)</span> "sav.dev"</pre></td>
				</tr>
								<tr>
					<td><code>HTTP_CONNECTION</code></td>
					<td><pre><small>string</small><span>(10)</span> "keep-alive"</pre></td>
				</tr>
								<tr>
					<td><code>HTTP_CACHE_CONTROL</code></td>
					<td><pre><small>string</small><span>(9)</span> "max-age=0"</pre></td>
				</tr>
								<tr>
					<td><code>HTTP_ACCEPT</code></td>
					<td><pre><small>string</small><span>(74)</span> "text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8"</pre></td>
				</tr>
								<tr>
					<td><code>HTTP_USER_AGENT</code></td>
					<td><pre><small>string</small><span>(109)</span> "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/35.0.1916.153 Safari/537.36"</pre></td>
				</tr>
								<tr>
					<td><code>HTTP_REFERER</code></td>
					<td><pre><small>string</small><span>(22)</span> "http://sav.dev/trabajo"</pre></td>
				</tr>
								<tr>
					<td><code>HTTP_ACCEPT_ENCODING</code></td>
					<td><pre><small>string</small><span>(17)</span> "gzip,deflate,sdch"</pre></td>
				</tr>
								<tr>
					<td><code>HTTP_ACCEPT_LANGUAGE</code></td>
					<td><pre><small>string</small><span>(23)</span> "es-ES,es;q=0.8,en;q=0.6"</pre></td>
				</tr>
								<tr>
					<td><code>HTTP_COOKIE</code></td>
					<td><pre><small>string</small><span>(34)</span> "session=pr6k12iajv56k53e2odheeeqg6"</pre></td>
				</tr>
								<tr>
					<td><code>PATH</code></td>
					<td><pre><small>string</small><span>(360)</span> "C:\Program Files (x86)\NVIDIA Corporation\PhysX\Common;C:\Windows\system32;C:\Windows;C:\Windows\System32\Wbem;C:\Windows\System&nbsp;&hellip;"</pre></td>
				</tr>
								<tr>
					<td><code>SystemRoot</code></td>
					<td><pre><small>string</small><span>(10)</span> "C:\Windows"</pre></td>
				</tr>
								<tr>
					<td><code>COMSPEC</code></td>
					<td><pre><small>string</small><span>(27)</span> "C:\Windows\system32\cmd.exe"</pre></td>
				</tr>
								<tr>
					<td><code>PATHEXT</code></td>
					<td><pre><small>string</small><span>(53)</span> ".COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC"</pre></td>
				</tr>
								<tr>
					<td><code>WINDIR</code></td>
					<td><pre><small>string</small><span>(10)</span> "C:\Windows"</pre></td>
				</tr>
								<tr>
					<td><code>SERVER_SIGNATURE</code></td>
					<td><pre><small>string</small><span>(0)</span> ""</pre></td>
				</tr>
								<tr>
					<td><code>SERVER_SOFTWARE</code></td>
					<td><pre><small>string</small><span>(72)</span> "Apache/2.4.9 (Win32) OpenSSL/1.0.1g PHP/5.3.28 mod_wsgi/3.4 Python/2.7.2"</pre></td>
				</tr>
								<tr>
					<td><code>SERVER_NAME</code></td>
					<td><pre><small>string</small><span>(7)</span> "sav.dev"</pre></td>
				</tr>
								<tr>
					<td><code>SERVER_ADDR</code></td>
					<td><pre><small>string</small><span>(9)</span> "127.0.0.1"</pre></td>
				</tr>
								<tr>
					<td><code>SERVER_PORT</code></td>
					<td><pre><small>string</small><span>(2)</span> "80"</pre></td>
				</tr>
								<tr>
					<td><code>REMOTE_ADDR</code></td>
					<td><pre><small>string</small><span>(9)</span> "127.0.0.1"</pre></td>
				</tr>
								<tr>
					<td><code>DOCUMENT_ROOT</code></td>
					<td><pre><small>string</small><span>(16)</span> "C:/Ampps/www/sav"</pre></td>
				</tr>
								<tr>
					<td><code>REQUEST_SCHEME</code></td>
					<td><pre><small>string</small><span>(4)</span> "http"</pre></td>
				</tr>
								<tr>
					<td><code>CONTEXT_PREFIX</code></td>
					<td><pre><small>string</small><span>(0)</span> ""</pre></td>
				</tr>
								<tr>
					<td><code>CONTEXT_DOCUMENT_ROOT</code></td>
					<td><pre><small>string</small><span>(16)</span> "C:/Ampps/www/sav"</pre></td>
				</tr>
								<tr>
					<td><code>SERVER_ADMIN</code></td>
					<td><pre><small>string</small><span>(15)</span> "admin@localhost"</pre></td>
				</tr>
								<tr>
					<td><code>SCRIPT_FILENAME</code></td>
					<td><pre><small>string</small><span>(26)</span> "C:/Ampps/www/sav/index.php"</pre></td>
				</tr>
								<tr>
					<td><code>REMOTE_PORT</code></td>
					<td><pre><small>string</small><span>(5)</span> "57288"</pre></td>
				</tr>
								<tr>
					<td><code>REDIRECT_URL</code></td>
					<td><pre><small>string</small><span>(15)</span> "/archivo/list/9"</pre></td>
				</tr>
								<tr>
					<td><code>GATEWAY_INTERFACE</code></td>
					<td><pre><small>string</small><span>(7)</span> "CGI/1.1"</pre></td>
				</tr>
								<tr>
					<td><code>SERVER_PROTOCOL</code></td>
					<td><pre><small>string</small><span>(8)</span> "HTTP/1.1"</pre></td>
				</tr>
								<tr>
					<td><code>REQUEST_METHOD</code></td>
					<td><pre><small>string</small><span>(3)</span> "GET"</pre></td>
				</tr>
								<tr>
					<td><code>QUERY_STRING</code></td>
					<td><pre><small>string</small><span>(0)</span> ""</pre></td>
				</tr>
								<tr>
					<td><code>REQUEST_URI</code></td>
					<td><pre><small>string</small><span>(15)</span> "/archivo/list/9"</pre></td>
				</tr>
								<tr>
					<td><code>SCRIPT_NAME</code></td>
					<td><pre><small>string</small><span>(10)</span> "/index.php"</pre></td>
				</tr>
								<tr>
					<td><code>PATH_INFO</code></td>
					<td><pre><small>string</small><span>(15)</span> "/archivo/list/9"</pre></td>
				</tr>
								<tr>
					<td><code>PATH_TRANSLATED</code></td>
					<td><pre><small>string</small><span>(41)</span> "redirect:\index.php\archivo\list\9\list\9"</pre></td>
				</tr>
								<tr>
					<td><code>PHP_SELF</code></td>
					<td><pre><small>string</small><span>(25)</span> "/index.php/archivo/list/9"</pre></td>
				</tr>
								<tr>
					<td><code>REQUEST_TIME</code></td>
					<td><pre><small>integer</small> 1403281505</pre></td>
				</tr>
							</table>
		</div>
			</div>
</div>

			<!-- end: Content -->
		</div><!--/#content.span10-->
	</div><!--/fluid-row-->

	<div class="clearfix"></div>

<footer>
	<p>
		<span style="text-align:left;float:left">&copy; <a href="http://clabs.co" target="_blank">FISI</a> 2014-I</span>
		<span style="text-align:right;float:right">Powered by: <a href="#">Grupo 2 - Diseño de Sistemas</a></span>
	</p>

</footer>

</div><!--/.fluid-container-->

<!-- start: JavaScript-->

<script src="/media/js/jquery-1.7.2.min.js"></script>
<script src="/media/js/jquery-ui-1.8.21.custom.min.js"></script>

<script src="/media/js/bootstrap.js"></script>

<script src="/media/js/jquery.cookie.js"></script>

<script src='/media/js/fullcalendar.min.js'></script>

<script src='/media/js/jquery.dataTables.min.js'></script>

<script src="/media/js/excanvas.js"></script>
<script src="/media/js/jquery.flot.min.js"></script>
<script src="/media/js/jquery.flot.pie.min.js"></script>
<script src="/media/js/jquery.flot.stack.js"></script>
<script src="/media/js/jquery.flot.resize.min.js"></script>

<script src="/media/js/jquery.chosen.min.js"></script>

<script src="/media/js/jquery.uniform.min.js"></script>

<script src="/media/js/jquery.cleditor.min.js"></script>

<script src="/media/js/jquery.noty.js"></script>

<script src="/media/js/jquery.elfinder.min.js"></script>

<script src="/media/js/jquery.raty.min.js"></script>

<script src="/media/js/jquery.iphone.toggle.js"></script>

<script src="/media/js/jquery.uploadify-3.1.min.js"></script>

<script src="/media/js/jquery.gritter.min.js"></script>

<script src="/media/js/jquery.imagesloaded.js"></script>

<script src="/media/js/jquery.masonry.min.js"></script>

<script src="/media/js/jquery.knob.js"></script>

<script src="/media/js/jquery.sparkline.min.js"></script>

<script src="/media/js/custom.js"></script>
<script src="/media/js/app.js"></script>
<!-- end: JavaScript-->

</body>
</html>