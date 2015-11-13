<div class="span10">
	<div><hr>
		<ul class="breadcrumb">
			<li>
				<a href="/panel">Panel</a> <span class="divider">/</span>
			</li>
			<li>
				<a href="/trabajo"> Trabajos</a>
			</li>
		</ul><hr>
	</div>
</div>
<div class="row-fluid">
	<div class="box span12">
		<div class="box-header">
			<h2><i class="fa-icon-pushpin"></i><span class="break"></span>Lista de Trabajos</h2>
			<div class="box-icon">
				<?php if($perfil == 'Profesor'):  ?>
				<a class="btn btn-info pull-right" href="/trabajo/new" style="margin: -5px 5px;"> Registrar Trabajo</a><br><br>
				<?php endif ?>
			</div>
		</div>
		<div class="box-content">
			<table class="table table-striped table-bordered datatable">
				<thead>
					<tr>
						<th>Trabajo</th>
						<th>Curso</th>
						<th>Grupo</th>
						<th>Tipo</th>
						<th>Fecha límite</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($aTrabajo as $oTrabajo): ?>
					<tr>
						<td><?php echo $oTrabajo['tra_nombre'] ?></td>
						<td><?php echo $oTrabajo['cur_nombre'] ?></td>
						<td><?php echo Model_Tabladetabla::getValue($oTrabajo['tab_codigo_grupo']) ?></td>
						<td><?php echo Model_Tabladetabla::getValue($oTrabajo['tab_codigo_tipo']) ?></td>
						<td><?php echo Util::date_format($oTrabajo['tra_fecha_limite']) ?></td>
						<td>
							<a class="btn btn-warning" href="/archivo/list/<?php echo $oTrabajo['tra_codigo'] ?>"><i class="icon-file icon-white"></i></a>
							<?php if($perfil == 'P002'):  ?>
							<a class="btn btn-info" href="/trabajo/edit/<?php echo $oTrabajo['tra_codigo'] ?>"><i class="icon-edit icon-white"></i></a>
							<a class="btn btn-danger" href="/trabajo/delete/<?php echo $oTrabajo['tra_codigo'] ?>"><i class="icon-trash icon-white"></i></a>
							<?php endif ?>
						</td>
					</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>
</div><hr>