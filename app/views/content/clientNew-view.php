<div class="container-fluid mb-6">
    <h1 class="display-4 text-center">Gestión de Clientes</h1>
    <h2 class="lead text-center"><i class="fas fa-male fa-fw"></i> &nbsp; Nuevo cliente</h2>
</div>

<div class="container pb-4 pt-4">
    <form class="FormularioAjax" action="<?php echo APP_URL; ?>app/ajax/clienteAjax.php" method="POST" autocomplete="off" enctype="multipart/form-data">
        <input type="hidden" name="modulo_cliente" value="registrar">

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="cliente_nombre">Nombres <?php echo CAMPO_OBLIGATORIO; ?></label>
                    <input class="form-control" type="text" name="cliente_nombre" id="cliente_nombre" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}" maxlength="40" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="cliente_apellido">Apellidos <?php echo CAMPO_OBLIGATORIO; ?></label>
                    <input class="form-control" type="text" name="cliente_apellido" id="cliente_apellido" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}" maxlength="40" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="cliente_tipo_documento">Tipo de documento <?php echo CAMPO_OBLIGATORIO; ?></label>
                    <select class="form-control" name="cliente_tipo_documento" id="cliente_tipo_documento" required>
                        <option value="" selected>Seleccione una opción</option>
                        <?php echo $insLogin->generarSelect(DOCUMENTOS_USUARIOS, "VACIO"); ?>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="cliente_numero_documento">Número de documento <?php echo CAMPO_OBLIGATORIO; ?></label>
                    <input class="form-control" type="text" name="cliente_numero_documento" id="cliente_numero_documento" pattern="[a-zA-Z0-9-]{7,30}" maxlength="30" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="cliente_provincia">Estado, provincia o departamento <?php echo CAMPO_OBLIGATORIO; ?></label>
                    <input class="form-control" type="text" name="cliente_provincia" id="cliente_provincia" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}" maxlength="30" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="cliente_ciudad">Ciudad o pueblo <?php echo CAMPO_OBLIGATORIO; ?></label>
                    <input class="form-control" type="text" name="cliente_ciudad" id="cliente_ciudad" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}" maxlength="30" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="cliente_direccion">Calle o dirección de casa <?php echo CAMPO_OBLIGATORIO; ?></label>
                    <input class="form-control" type="text" name="cliente_direccion" id="cliente_direccion" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,#\- ]{4,70}" maxlength="70" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="cliente_telefono">Teléfono</label>
                    <input class="form-control" type="text" name="cliente_telefono" id="cliente_telefono" pattern="[0-9()+]{8,20}" maxlength="20">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="cliente_email">Email</label>
                    <input class="form-control" type="email" name="cliente_email" id="cliente_email" maxlength="70">
                </div>
            </div>
        </div>
        <div class="text-center">
            <button type="reset" class="btn btn-link"><i class="fas fa-paint-roller"></i> &nbsp; Limpiar</button>
            <button type="submit" class="btn btn-info"><i class="far fa-save"></i> &nbsp; Guardar</button>
        </div>
        <p class="text-center pt-3">
            <small>Los campos marcados con <?php echo CAMPO_OBLIGATORIO; ?> son obligatorios</small>
        </p>
    </form>
</div>
