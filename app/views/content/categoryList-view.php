<div class="container-fluid mb-6">
    <h1 class="display-4 text-center">Categorías</h1>
    <h2 class="lead text-center"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de categorías</h2>
</div>
<div class="container pb-4">
    <div class="form-rest mb-4 mt-4"></div>

    <?php
        use app\controllers\categoryController;

        $insCategoria = new categoryController();

        echo $insCategoria->listarCategoriaControlador($url[1],15,$url[0],"");
    ?>
</div>
