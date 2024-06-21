<div class="container-fluid mb-5">
	<h1 class="display-4 text-center">Gestión de Ventas</h1>
	<h2 class="lead text-center"><i class="fas fa-cash-register fa-fw"></i> &nbsp; Lista de Ventas</h2>
</div>
<div class="container pb-4">
	<div class="form-rest mb-4 mt-4"></div>

	<?php

	use app\controllers\saleController;

	$insVenta = new saleController();

	echo $insVenta->listarVentaControlador($url[1], 15, $url[0], "");

	include "./app/views/inc/print_invoice_script.php";
	?>
</div>