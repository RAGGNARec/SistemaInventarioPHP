<div class="container-fluid mb-5">
    <h1 class="display-4 text-center">Gestión de Cajas</h1>
    <h2 class="lead text-center"><i class="fas fa-cash-register fa-fw"></i> &nbsp; Nueva caja</h2>
</div>

<div class="container pb-4">

    <form class="FormularioAjax" action="<?php echo APP_URL; ?>app/ajax/cajaAjax.php" method="POST" autocomplete="off">

        <input type="hidden" name="modulo_caja" value="registrar">

        <div class="row">
            <div class="col-md-4 mb-3">
                <label for="caja_numero" class="form-label">Número de caja <?php echo CAMPO_OBLIGATORIO; ?></label>
                <input class="form-control" type="text" name="caja_numero" id="caja_numero" pattern="[0-9]{1,5}" maxlength="5" required>
            </div>
            <div class="col-md-4 mb-3">
                <label for="caja_nombre" class="form-label">Nombre o código de caja <?php echo CAMPO_OBLIGATORIO; ?></label>
                <input class="form-control" type="text" name="caja_nombre" id="caja_nombre" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ:# ]{3,70}" maxlength="70" required>
            </div>
            <div class="col-md-4 mb-3">
                <label for="caja_efectivo" class="form-label">Efectivo en caja <?php echo CAMPO_OBLIGATORIO; ?></label>
                <div class="input-group">
                    <span class="input-group-text">$</span>
                    <input class="form-control" type="text" name="caja_efectivo" id="caja_efectivo" pattern="[0-9.]{1,25}" maxlength="25" value="0.00" required>
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