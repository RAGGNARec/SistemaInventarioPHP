<div class="container-fluid mb-5">
    <h1 class="display-4 text-center">Gestión de Usuarios</h1>
    <h2 class="lead text-center"><i class="fas fa-list-alt fa-fw"></i> &nbsp; Lista de Usuarios</h2>
</div>

<div class="container pb-4">
    <div class="form-rest mb-4 mt-4"></div>
    <?php
    use app\controllers\userController;

    $insUsuario = new userController();

    echo $insUsuario->listarUsuarioControlador($url[1], 15, $url[0], "");
    ?>
</div>
