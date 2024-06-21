<div class="container-fluid mb-5">
    <h1 class="display-4 text-center">Ventas</h1>
    <h2 class="lead text-center"><i class="fas fa-cash-register fa-fw"></i>Buscar ventas por código</h2>
</div>

<div class="container pb-4">
    <?php
    
        use app\controllers\saleController;
        $insVenta = new saleController();

        if(!isset($_SESSION[$url[0]]) && empty($_SESSION[$url[0]])){
    ?>
      <div class="row justify-content-center">
            <div class="col-md-6">
            <form class="FormularioAjax" action="<?php echo APP_URL; ?>app/ajax/buscadorAjax.php" method="POST" autocomplete="off" >
                <input type="hidden" name="modulo_buscador" value="buscar">
                <input type="hidden" name="modulo_url" value="<?php echo $url[0]; ?>">
                <div class="input-group">
                        <input class="form-control rounded-pill" type="text" name="txt_buscador" placeholder="¿Qué estás buscando?" maxlength="100" required>
                        <button class="btn btn-info rounded-pill ml-2" type="submit">Buscar</button>
                    </div>
                </form>
        </div>
    </div>
    <?php }else{ ?>
    <div class="columns">
        <div class="column">
            <form class="has-text-centered mt-6 mb-6 FormularioAjax" action="<?php echo APP_URL; ?>app/ajax/buscadorAjax.php" method="POST" autocomplete="off" >
                <input type="hidden" name="modulo_buscador" value="eliminar">
                <input type="hidden" name="modulo_url" value="<?php echo $url[0]; ?>">
                <p><i class="fas fa-search fa-fw"></i> &nbsp; Estas buscando por código <strong>“<?php echo $_SESSION[$url[0]]; ?>”</strong></p>
                <br>
                <button type="submit" class="button is-danger is-rounded"><i class="fas fa-trash-restore"></i> &nbsp; Eliminar busqueda</button>
            </form>
        </div>
    </div>
    <?php
            echo $insVenta->listarVentaControlador($url[1],15,$url[0],$_SESSION[$url[0]]);

            include "./app/views/inc/print_invoice_script.php";
        }
    ?>
</div>