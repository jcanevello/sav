<div class="span10">
	<div><hr>
		<ul class="breadcrumb">
			<li>
				<a href="/panel">Panel</a> <span class="divider">/</span>
			</li>
			<li>
				<a href="#"> Cursos Matriculados</a>
			</li>
		</ul><hr>
	</div>
</div>
<div class="row-fluid">
	<div class="box span12">
		<div class="box-header">
			<h2><i class="fa-icon-pushpin"></i><span class="break"></span>Cursos Matriculados</h2>
		</div>
		<div class="box-content">
			<table class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>Curso</th>
						<th>Grupo</th>
						<th>Tipo</th>
						<th>Profesor</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($aCurso as $oCurso): ?>
					<tr>
						<th><?php echo Model_Curso::getNombreCurso($oCurso['cur_codigo']) ?></th>
						<th><?php echo Model_Tabladetabla::getNombreGrupo($oCurso['cg_codigo']) ?></th>
						<th><?php echo Model_Tabladetabla::getNombreTipo($oCurso['cgt_codigo']) ?></th>
						<th><?php echo Auth_Usuario::getNombre($oCurso['usu_usuario']) ?></th>
					</tr>
					<?php endforeach ?>
				</tbody>
			</table>
			<div class="row-fluid">
				<div class="span12">
					<a href="/panel" class="btn btn-info span3" style="float: none; margin: auto; display: block;">Regresar</a>
				</div>
			</div>
		</div>
	</div>
</div><hr>