<div class="container-fluid mb-6">
    <h1 class="display-4 text-center">Gestión de Productos</h1>
    <h2 class="lead text-center"><i class="fas fa-box fa-fw"></i> &nbsp; Nuevo producto</h2>
</div>

<div class="container pb-4 pt-4 clientenew">
    <form class="FormularioAjax" action="<?php echo APP_URL; ?>app/ajax/productoAjax.php" method="POST" autocomplete="off" enctype="multipart/form-data">
        <input type="hidden" name="modulo_producto" value="registrar">

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="producto_codigo">Código de barra <?php echo CAMPO_OBLIGATORIO; ?></label>
                    <input class="form-control" type="text" name="producto_codigo" pattern="[a-zA-Z0-9- ]{1,77}" maxlength="77" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="producto_nombre">Nombre <?php echo CAMPO_OBLIGATORIO; ?></label>
                    <input class="form-control" type="text" name="producto_nombre" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,$#\-\/ ]{1,100}" maxlength="100" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="producto_precio_compra">Precio de compra <?php echo CAMPO_OBLIGATORIO; ?></label>
                    <input class="form-control" type="text" name="producto_precio_compra" pattern="[0-9.]{1,25}" maxlength="25" value="0.00" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="producto_precio_venta">Precio de venta <?php echo CAMPO_OBLIGATORIO; ?></label>
                    <input class="form-control" type="text" name="producto_precio_venta" pattern="[0-9.]{1,25}" maxlength="25" value="0.00" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="producto_stock">Stock o existencias <?php echo CAMPO_OBLIGATORIO; ?></label>
                    <input class="form-control" type="text" name="producto_stock" pattern="[0-9]{1,22}" maxlength="22" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="producto_marca">Marca</label>
                    <input class="form-control" type="text" name="producto_marca" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,#\- ]{1,30}" maxlength="30">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="producto_modelo">Modelo</label>
                    <input class="form-control" type="text" name="producto_modelo" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,#\- ]{1,30}" maxlength="30">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="producto_unidad">Presentación del producto <?php echo CAMPO_OBLIGATORIO; ?></label><br>
                    <select class="form-control" name="producto_unidad">
                        <option value="" selected>Seleccione una opción</option>
                        <?php echo $insLogin->generarSelect(PRODUCTO_UNIDAD, "VACIO"); ?>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="producto_categoria">Categoría <?php echo CAMPO_OBLIGATORIO; ?></label><br>
                    <select class="form-control" name="producto_categoria">
                        <option value="" selected>Seleccione una opción</option>
                        <?php
                        $datos_categorias = $insLogin->seleccionarDatos("Normal", "categoria", "*", 0);
                        $cc = 1;
                        while ($campos_categoria = $datos_categorias->fetch()) {
                            echo '<option value="' . $campos_categoria['categoria_id'] . '">' . $cc . ' - ' . $campos_categoria['categoria_nombre'] . '</option>';
                            $cc++;
                        }
                        ?>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="producto_foto">Foto o imagen del producto</label><br>
                    <input class="form-control" type="file" name="producto_foto" accept=".jpg, .png, .jpeg">
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