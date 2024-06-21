<div class="container is-fluid mb-5">
    <h1 class="display-4 text-center">Categorías</h1>
    <h2 class="lead text-center"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar categorías</h2>
</div>

<div class="container pb-4 pt-4">
    <?php

    use app\controllers\categoryController;

    $insCategoria = new categoryController();

    if (!isset($_SESSION[$url[0]]) && empty($_SESSION[$url[0]])) {
    ?>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form class="FormularioAjax" action="<?php echo APP_URL; ?>app/ajax/buscadorAjax.php" method="POST" autocomplete="off">
                    <input type="hidden" name="modulo_buscador" value="buscar">
                    <input type="hidden" name="modulo_url" value="<?php echo $url[0]; ?>">
                    <div class="input-group">
                        <input class="form-control rounded-pill" type="text" name="txt_buscador" placeholder="¿Qué estás buscando?" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]{1,30}" maxlength="30" required>
                        <button class="btn btn-info rounded-pill ml-2" type="submit">Buscar</button>
                    </div>
                </form>
            </div>
        </div>
    <?php } else { ?>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form class="has-text-centered mt-4 mb-4 FormularioAjax" action="<?php echo APP_URL; ?>app/ajax/buscadorAjax.php" method="POST" autocomplete="off">
                    <input type="hidden" name="modulo_buscador" value="eliminar">
                    <input type="hidden" name="modulo_url" value="<?php echo $url[0]; ?>">
                    <p><i class="fas fa-search fa-fw"></i> &nbsp; Estás buscando <strong>“<?php echo $_SESSION[$url[0]]; ?>”</strong></p>
                    <button type="submit" class="btn btn-danger rounded-pill mt-2"><i class="fas fa-trash-restore"></i> &nbsp; Eliminar búsqueda</button>
                </form>
            </div>
        </div>
    <?php
        echo $insCategoria->listarCategoriaControlador($url[1], 15, $url[0], $_SESSION[$url[0]]);
    }
    ?>
</div>