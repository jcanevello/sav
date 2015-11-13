<div class="span10">
	<div><hr>
		<ul class="breadcrumb">
			<li>
				<a href="/panel">Panel</a> <span class="divider">/</span>
			</li>
			<li>
				<a href="/trabajo"> Trabajos</a><span class="divider">/</span>
			</li>
			<li>
				<a href="#"> Archivos</a>
			</li>
		</ul><hr>
	</div>
</div>
<div class="row-fluid">
	<div class="box span12">
		<div class="box-header">
			<h2><i class="fa-icon-pushpin"></i><span class="break"></span>Lista de Archivos</h2>
			<div class="box-icon">
				<?php if( ! Model_Archivo::tieneArchivo($idTrabajo, $oUser->usu_usuario)): ?>
				<a class="btn btn-info pull-right" href="/archivo/new/<?php echo $idTrabajo ?>" style="margin: -5px 5px;"> Cargar Archivo</a><br><br>
				<?php endif ?>
			</div>
		</div>
		<div class="box-content">
			<label>Archivos del profesor</label>
			<table class="table table-striped table-bordered ">
				<thead>
					<tr>
						<th>Archivo</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($aArchivoProfesor as  $oArchivoProfesor): ?>
					<tr>
						<td><?php echo $oArchivoProfesor['arc_nombre']. '.' . pathinfo($oArchivoProfesor['arc_slug'], PATHINFO_EXTENSION) ?></td>
						<td>
							<a class="btn btn-success" href="/archivo/descargarArchivo/<?php echo $oArchivoProfesor['arc_codigo'] ?>" target="_blank"><i class="icon-download-alt icon-white"></i></a>
							<?php if($oUser->per_codigo == 'P002'):  ?>
							<a class="btn btn-info" href="#"><i class="icon-edit icon-white"></i></a>
							<a class="btn btn-danger" href="#"><i class="icon-trash icon-white"></i></a>
							<?php endif ?>
						</td>
					</tr>
					<?php endforeach ?>
				</tbody>
			</table>
			<label>Archivos de los alumnos</label>
			<table class="table table-striped table-bordered ">
				<thead>
					<tr>
						<th>Archivo</th>
						<th>Integrantes</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($aArchivoAlumno as  $oArchivoAlumno): ?>
					<tr>
						<td><?php echo $oArchivoAlumno['arc_nombre']. '.' . pathinfo($oArchivoAlumno['arc_slug'], PATHINFO_EXTENSION) ?></td>
						<td>
							<?php $aAlumno = Model_Archivo::getIntegrantesArchivo($oArchivoAlumno['arc_codigo']) ?>
							<?php foreach ($aAlumno  as $oAlumno): ?>
							<span><?php echo Auth_Usuario::getNombre($oAlumno->usu_usuario) ?></span><br>
							<?php endforeach ?>
						</td>
						<td>
							<?php if(Model_Archivo::perteneceArchivo($oArchivoAlumno['arc_codigo'], $oUser->usu_usuario) OR $oUser->per_codigo == 'P002'):  ?>
							<a class="btn btn-success" href="/archivo/descargarArchivo/<?php echo $oArchivoAlumno['arc_codigo'] ?>" target="_blank"><i class="icon-download-alt icon-white"></i></a>
							<?php endif ?>
							<?php if(Model_Archivo::perteneceArchivo($oArchivoAlumno['arc_codigo'], $oUser->usu_usuario)):  ?>
							<a class="btn btn-info" href="#" target="_blank"><i class="icon-edit icon-white"></i></a>
							<a class="btn btn-danger delete-archivo" href="#" data-idArchivo="<?php echo $oArchivoAlumno['arc_codigo'] ?>" ><i class="icon-trash icon-white"></i></a>
							<?php endif ?>
						</td>
					</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>
</div><hr>