<div class="container-fluid mb-6">
    <h1 class="display-4 text-center">Categorías</h1>
    <h2 class="lead text-center"><i class="fas fa-tag fa-fw"></i> &nbsp; Nueva categoría</h2>
</div>

<div class="container pb-4 pt-4">
    <form class="FormularioAjax" action="<?php echo APP_URL; ?>app/ajax/categoriaAjax.php" method="POST" autocomplete="off" enctype="multipart/form-data">
        <input type="hidden" name="modulo_categoria" value="registrar">

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="categoria_nombre">Nombre <?php echo CAMPO_OBLIGATORIO; ?></label>
                    <input class="form-control" type="text" name="categoria_nombre" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]{4,50}" maxlength="50" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="categoria_ubicacion">Ubicación</label>
                    <input class="form-control" type="text" name="categoria_ubicacion" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]{5,150}" maxlength="150">
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
