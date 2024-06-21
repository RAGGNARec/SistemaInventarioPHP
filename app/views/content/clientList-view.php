<div class="container-fluid mb-6">
    <h1 class="display-4 text-center">Clientes</h1>
    <h2 class="lead text-center"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de clientes</h2>
</div>

<div class="container pb-4">
    <div class="form-rest mb-4 mt-4"></div>

    <?php
        use app\controllers\clientController;

        $insCliente = new clientController();

        echo $insCliente->listarClienteControlador($url[1],15,$url[0],"");
    ?>
</div>
