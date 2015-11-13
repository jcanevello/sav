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
				<a href="/archivo/list/<?php echo $idTrabajo ?>"> Archivos</a>
			</li>
		</ul><hr>
	</div>
</div>
<div class="row-fluid">
	<div class="box span12">
		<div class="box-header">
			<h2><i class="fa-icon-pushpin"></i><span class="break"></span>Nuevo Archivo</h2>
		</div>
		<div class="box-content">
			<form class="form-horizontal" enctype="multipart/form-data" action="/archivo/new/<?php echo $idTrabajo ?>" method="POST"> 
				<div class="control-group">
					<label class="control-label" for="fileInput">Archivo</label>
					<div class="controls">
						<input class="input-file uniform_on" type="file" name="archivo" required>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Nombre de archivo</label>
					<div class="controls">
						<input type="text" name="arc_nombre" required>
					</div>
				</div>
				
				<?php if ($formaTrabajo == 1 AND $oUser->per_codigo == 'P001'): ?>
					<div class="control-group">
						<label class="control-label">Integrantes</label>
						<div class="controls">
							<select multiple data-rel="chosen" name="integrantes[]">
								<?php foreach ($aAlumno as $aAlumno): ?>
									<?php if($aAlumno['usu_usuario'] != $oUser->usu_usuario AND (!Model_Archivo::tieneArchivo($idTrabajo, $aAlumno['usu_usuario']))): ?>
								<option value="<?php echo $aAlumno['usu_usuario'] ?>" <?php echo ($aAlumno['usu_usuario'] == $oUser->usu_usuario) ? 'selected' : NULL ?>><?php echo Auth_Usuario::getNombre($aAlumno['usu_usuario']) ?></option>
									<?php endif ?>
								<?php endforeach ?>
							</select>
						</div>
					</div>
				<?php endif ?>

				<div class="form-actions">
					<button type="submit" class="btn btn-primary">Cargar</button>
					<button class="btn">Cancel</button>
				</div>
			</form>
		</div>
	</div>
</div><hr>


