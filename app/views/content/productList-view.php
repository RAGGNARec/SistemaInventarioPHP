<div class="container is-fluid mb-6">
<h1 class="display-4 text-center">Productos</h1>
<h2 class="lead text-center"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de Productos</h2></div>
<div class="container pb-4">
    <div class="form-rest mb-4 mt-4"></div>

	<?php
		use app\controllers\productController;

		$insProducto = new productController();

		echo $insProducto->listarProductoControlador($url[1],10,$url[0],"",0);
	?>
</div>