<?php echo $header ?>
<!-- start: Header -->

<div class="container-fluid">
	<div class="row-fluid">
		
		<!-- start: Main Menu -->
		<?php echo $navbar ?>
		<!-- end: Main Menu -->

		<noscript>
		<div class="alert alert-block span10">
			<h4 class="alert-heading">Warning!</h4>
			<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
		</div>
		</noscript>

		<div id="content" class="span<?php echo (Request::initial()->controller() == 'Panel') ? '12' : '10' ?>">
			<!-- start: Content -->

			<?php echo $content ?>

			<!-- end: Content -->
		</div><!--/#content.span10-->
	</div><!--/fluid-row-->

	<div class="clearfix"></div>

<?php echo $footer ?>