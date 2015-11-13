<?php if(Request::initial()->controller() != 'Panel'): ?>
<div class="span2 main-menu-span">
	<div class="nav-collapse sidebar-nav">
		<ul class="nav nav-tabs nav-stacked main-menu">
			<?php if(Util::hasMenu($permisos, 'menu_panel_alumno')): ?>
			<li><a href="/trabajo"><i class="icon-home icon-white"></i><span class="hidden-tablet"> Trabajos</span></a></li>
			<li><a href="/curso"><i class="icon-eye-open icon-white"></i><span class="hidden-tablet"> Cursos</span></a></li>
			<li><a href="/matricula" class="matricula"><i class="icon-edit icon-white"></i><span class="hidden-tablet"> Matrícula</span></a></li>
			<?php elseif(Util::hasMenu($permisos, 'menu_panel_alumno')): ?>
			<li><a href="/trabajo"><i class="icon-list-alt icon-white"></i><span class="hidden-tablet"> Trabajos</span></a></li>
			<li><a href="#"><i class="icon-font icon-white"></i><span class="hidden-tablet"> Evaluación</span></a></li>
			<li><a href="/matricula/alumnos"><i class="fa-icon-group icon-white"></i><span class="hidden-tablet"> Alumnos</span></a></li>
			<?php endif ?>
		</ul>
	</div><!--/.well -->
</div><!--/span-->
<?php endif ?>