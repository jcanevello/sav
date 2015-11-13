<div class="span10">
	<div><hr>
		<ul class="breadcrumb">
			<li>
				<a href="/panel">Panel</a> <span class="divider">/</span>
			</li>
			<li>
				<a href="#"> Matrícula</a>
			</li>
		</ul><hr>
	</div>
</div>
<div class="row-fluid">
	<div class="box span12">
		<div class="box-header">
			<h2><i class="fa-icon-pushpin"></i><span class="break"></span>Matrícula</h2>
		</div>
		<div class="box-content">
			<form class="form-horizontal" action="/matricula/new" method="POST">
				<div class="control-group">
					<div class="controls">
						<div class="row-fluid">
							<div class="span6">
								<table class="table" >
									<thead>
										<tr>
											<th>Cursos</th>
											<th>Grupos</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($aCurso as $oCurso): ?>
											<tr>
												<td><?php echo $oCurso->cur_nombre ?></td>
												<td>
													<select name="grupos[]">
														<?php $aGrupo = Model_Curso::getGrupos($oCurso->cur_codigo) ?>
														<option value=""></option>
														<?php foreach ($aGrupo as $oGrupo): ?>
														<option value="<?php echo $oGrupo['cg_codigo'] ?>"><?php echo $oGrupo['tab_nombre'] ?></option>
														<?php endforeach ?>
													</select>
												</td>
											</tr>

										<?php endforeach ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="form-actions">
					<button type="submit" class="btn btn-primary">Matricular</button>
					<button class="btn">Cancel</button>
				</div>
			</form>
		</div>
	</div>
</div><hr>