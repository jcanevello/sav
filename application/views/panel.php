<style>
	.quick-button {
		float: none !important;
		margin-left: auto !important;
		margin-right: auto !important;
		margin-bottom: 30px !important;
	}
</style>
<div class="row-fluid">
	<?php if(Util::hasMenu($permisos, 'menu_panel_alumno')):  ?>
		<a href="/trabajo" class="quick-button span4 <?php echo (empty($matricula)) ? ' no-matricula' : null ?>">
			<i class="fa-icon-pushpin"></i>
			<p>Trabajos</p>
		</a>
		<a href="/curso" class="quick-button span4 <?php echo (empty($matricula)) ? ' no-matricula' : null ?>">
			<i class="fa-icon-book"></i>
			<p>Cursos</p>
		</a>
		<a href="<?php echo (empty($matricula)) ? 'matricula/' : '#' ?>" class="quick-button span4 <?php echo (!empty($matricula)) ? ' matricula' : null ?>">
			<i class="fa-icon-bookmark"></i>
			<p>Matrícula</p>
		</a>
	<?php elseif(Util::hasMenu($permisos, 'menu_panel_profesor')): ?>
		<a href="/trabajo" class="quick-button span4">
			<i class="fa-icon-pushpin"></i>
			<p>Trabajos</p>
		</a>
		<a class="quick-button span4">
			<i class="fa-icon-pencil"></i>
			<p>Evaluación</p>
		</a>
		<a  href="/matricula/alumnos" class="quick-button span4">
			<i class="fa-icon-group"></i>
			<p>Alumnos</p>
		</a>
	<?php endif ?>
</div>