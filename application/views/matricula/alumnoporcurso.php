<div class="span10">
	<div><hr>
		<ul class="breadcrumb">
			<li>
				<a href="/panel">Panel</a> <span class="divider">/</span>
			</li>
			<li>
				<a href="#"> Alumnos</a>
			</li>
		</ul><hr>
	</div>
</div>

<div class="row-fluid">
	<div class="box span12">
		<div class="box-header">
			<h2><i class="fa-icon-group"></i><span class="break"></span>Alumnos</h2>
		</div>
		<div class="box-content">
			<div class="row-fluid">
				<div class="span4">
					<div class="control-group">
						<label class="control-label">Curso: </label>
						<div class="controls">
							<select id="cursos" required>
								<option value="">---</option>
								<?php foreach ($aCurso as $oCurso): ?>
									<option value="<?php echo $oCurso['cur_codigo'] ?>"><?php echo $oCurso['cur_nombre'] ?></option>
								<?php endforeach ?>
							</select>
						</div>
					</div>
				</div>
				<div class="span4">
					<div class="control-group">
						<label class="control-label">Grupos</label>
						<div class="controls">
							<select id="grupos" required>
								<option value="">---</option>
							</select>
						</div>
					</div>
				</div>
				<div class="span4">
					<div class="control-group">
						<label class="control-label">Tipo</label>
						<div class="controls" required>
							<select id="tipos" name="cgt_codigo" class="ac-tipo">
								<option value="">---</option>
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span12">
					<table id="alumnosporcurso" class="table table-bordered">
						<thead>
							<tr>
								<th>Codigo</th>
								<th>Nombre</th>
								<th>Apellido</th>
							</tr>
						</thead>
						<tbody>
						</tbody>
					</table>
				</div>
			</div><hr>
			<div class="row-fluid">
				<div class="span12" style="text-align: center;">
					<a href="/panel" class="btn btn-info">Salir</a>
				</div>
			</div>
		</div>
	</div>
</div><hr>