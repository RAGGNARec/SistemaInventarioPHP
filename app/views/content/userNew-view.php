<div class="container-fluid mb-6">
    <h1 class="display-4 text-center">Gestión de Usuarios</h1>
    <h2 class="lead text-center"><i class="fas fa-user-plus fa-fw"></i> &nbsp; Nuevo usuario</h2>
</div>

<div class="container pb-4 pt-4">
    <form class="FormularioAjax" action="<?php echo APP_URL; ?>app/ajax/usuarioAjax.php" method="POST" autocomplete="off" enctype="multipart/form-data">
        <input type="hidden" name="modulo_usuario" value="registrar">

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="usuario_nombre">Nombres <?php echo CAMPO_OBLIGATORIO; ?></label>
                    <input class="form-control" type="text" name="usuario_nombre" id="usuario_nombre" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}" maxlength="40" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="usuario_apellido">Apellidos <?php echo CAMPO_OBLIGATORIO; ?></label>
                    <input class="form-control" type="text" name="usuario_apellido" id="usuario_apellido" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}" maxlength="40" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="usuario_usuario">Usuario <?php echo CAMPO_OBLIGATORIO; ?></label>
                    <input class="form-control" type="text" name="usuario_usuario" id="usuario_usuario" pattern="[a-zA-Z0-9]{4,20}" maxlength="20" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="usuario_email">Email</label>
                    <input class="form-control" type="email" name="usuario_email" id="usuario_email" maxlength="70">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="usuario_clave_1">Clave <?php echo CAMPO_OBLIGATORIO; ?></label>
                    <input class="form-control" type="password" name="usuario_clave_1" id="usuario_clave_1" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="usuario_clave_2">Repetir clave <?php echo CAMPO_OBLIGATORIO; ?></label>
                    <input class="form-control" type="password" name="usuario_clave_2" id="usuario_clave_2" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <div class="custom-file">
                    <label class="custom-file-label" for="usuario_foto">Foto de perfil</label>
                        <input class="form-control" type="file" id="usuario_foto" name="usuario_foto" accept=".jpg, .png, .jpeg">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="usuario_caja">Caja de ventas <?php echo CAMPO_OBLIGATORIO; ?></label><br>
                    <select class="form-control" name="usuario_caja" id="usuario_caja">
                        <option value="" selected>Seleccione una opción</option>
                        <?php
                        $datos_cajas = $insLogin->seleccionarDatos("Normal", "caja", "*", 0);
                        while ($campos_caja = $datos_cajas->fetch()) {
                            echo '<option value="' . $campos_caja['caja_id'] . '">Caja No.' . $campos_caja['caja_numero'] . ' - ' . $campos_caja['caja_nombre'] . '</option>';
                        }
                        ?>
                    </select>
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
