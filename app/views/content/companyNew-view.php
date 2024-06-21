<div class="container mb-4">
	<h1 class="display-4 text-center">Empresa</h1>
	<h2 class="lead text-center"><i class="fas fa-store-alt fa-fw"></i> &nbsp; Datos de la empresa</h2>
</div>

<div class="container pb-4 pt-4">
	<?php
	$datos = $insLogin->seleccionarDatos("Normal", "empresa LIMIT 1", "*", 0);

	if ($datos->rowCount() == 1) {
		$datos = $datos->fetch();
	?>

		<div class="card">
			<h5 class="card-header text-center"><?php echo $datos['empresa_nombre']; ?></h5>
			<div class="card-body">
				<form class="FormularioAjax" action="<?php echo APP_URL; ?>app/ajax/empresaAjax.php" method="POST" autocomplete="off">

					<input type="hidden" name="modulo_empresa" value="actualizar">
					<input type="hidden" name="empresa_id" value="<?php echo $datos['empresa_id']; ?>">

					<div class="form-group">
						<label for="empresa_nombre">Nombre <span class="text-danger">*</span></label>
						<input class="form-control" type="text" id="empresa_nombre" name="empresa_nombre" value="<?php echo $datos['empresa_nombre']; ?>" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ., ]{4,85}" maxlength="85" required>
					</div>
					<div class="form-row">
						<div class="col">
							<div class="form-group">
								<label for="empresa_telefono">Teléfono</label>
								<input class="form-control" type="text" id="empresa_telefono" name="empresa_telefono" value="<?php echo $datos['empresa_telefono']; ?>" pattern="[0-9()+]{8,20}" maxlength="20">
							</div>
						</div>
						<div class="col">
							<div class="form-group">
								<label for="empresa_email">Email</label>
								<input class="form-control" type="email" id="empresa_email" name="empresa_email" value="<?php echo $datos['empresa_email']; ?>" maxlength="50">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="empresa_direccion">Dirección</label>
						<input class="form-control" type="text" id="empresa_direccion" name="empresa_direccion" value="<?php echo $datos['empresa_direccion']; ?>" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,#\- ]{4,97}" maxlength="97">
					</div>
					<div class="text-center">
						<button type="submit" class="btn btn-success"><i class="fas fa-sync-alt"></i> &nbsp; Actualizar</button>
					</div>
				</form>
				<p class="text-center mt-3">
					<small>Los campos marcados con <span class="text-danger">*</span> son obligatorios</small>
				</p>
			</div>
		</div>

	<?php } else { ?>

		<div class="card">
			<div class="card-body">
				<form class="FormularioAjax" action="<?php echo APP_URL; ?>app/ajax/empresaAjax.php" method="POST" autocomplete="off">

					<input type="hidden" name="modulo_empresa" value="registrar">

					<div class="form-group">
						<label for="empresa_nombre">Nombre <span class="text-danger">*</span></label>
						<input class="form-control" type="text" id="empresa_nombre" name="empresa_nombre" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ., ]{4,85}" maxlength="85" required>
					</div>
					<div class="form-row">
						<div class="col">
							<div class="form-group">
								<label for="empresa_telefono">Teléfono</label>
								<input class="form-control" type="text" id="empresa_telefono" name="empresa_telefono" pattern="[0-9()+]{8,20}" maxlength="20">
							</div>
						</div>
						<div class="col">
							<div class="form-group">
								<label for="empresa_email">Email</label>
								<input class="form-control" type="email" id="empresa_email" name="empresa_email" maxlength="50">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="empresa_direccion">Dirección</label>
						<input class="form-control" type="text" id="empresa_direccion" name="empresa_direccion" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,#\- ]{4,97}" maxlength="97">
					</div>
					<div class="text-center">
						<button type="reset" class="btn btn-light"><i class="fas fa-paint-roller"></i> &nbsp; Limpiar</button>
						<button type="submit" class="btn btn-info"><i class="far fa-save"></i> &nbsp; Guardar</button>
					</div>
				</form>
				<p class="text-center mt-3">
					<small>Los campos marcados con <span class="text-danger">*</span>
				</p>
				</form>
			<?php } ?>
			</div>
		</div>
</div>