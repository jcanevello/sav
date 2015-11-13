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
			<h2><i class="fa-icon-pushpin"></i><span class="break"></span>Nuevo trabajo</h2>
		</div>
		<div class="box-content">
			<form class="form-horizontal" action="" method="POST"> 
				<div class="control-group">
					<label class="control-label">Curso</label>
					<div class="controls">
						<select id="cursos" required>
							<option value="">---</option>
							<?php foreach ($aCurso as $oCurso): ?>
							<option value="<?php echo $oCurso['cur_codigo'] ?>"><?php echo $oCurso['cur_nombre'] ?></option>
							<?php endforeach ?>
						</select>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Grupos</label>
					<div class="controls">
						<select id="grupos" required>
							<option value="">---</option>
						</select>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Tipo</label>
					<div class="controls" required>
						<select id="tipos" name="cgt_codigo">
							<option value="">---</option>
						</select>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Nombre de trabajo</label>
					<div class="controls">
						<input type="text" class="" name="tra_nombre" required>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Fecha límite</label>
					<div class="controls">
						<input type="text" class="datepicker" id="date01" value="<?php echo date('Y-m-d') ?>" name="tra_fecha_limite" required>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Forma de trabajo</label>
					<div class="controls">
						<?php foreach ($aTipo as $key => $oTipo): ?>
						<label class="radio">
							<input <?php echo ($key == 0) ? ' checked' : null ?> type="radio" name="tab_codigo" value="<?php echo $oTipo['tab_codigo'] ?>" style="margin: 4px 10px 4px 0px" data-val="<?php echo $oTipo['tab_valor'] ?>">
							<?php echo $oTipo['tab_nombre'] ?>
						</label><br>
						<?php endforeach ?>
					</div>
				</div>
				<div class="control-group" id="tra_cantidad_alum">
					<label class="control-label">Número de integrantes</label>
					<div class="controls">
						<input type="number" min="2" class="" value="2" name="tra_cantidad_alum">
					</div>
				</div>
				<div class="form-actions">
					<button type="submit" class="btn btn-primary">Registrar</button>
					<button class="btn">Cancel</button>
				</div>
			</form>
		</div>
	</div>
</div><hr>

	
	