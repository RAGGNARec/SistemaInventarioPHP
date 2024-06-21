<div class="container pb-4">
	<?php

	include "./app/views/inc/btn_back.php";

	$code = $insLogin->limpiarCadena($url[1]);

	$datos = $insLogin->seleccionarDatos("Normal", "venta INNER JOIN cliente ON venta.cliente_id=cliente.cliente_id INNER JOIN usuario ON venta.usuario_id=usuario.usuario_id INNER JOIN caja ON venta.caja_id=caja.caja_id WHERE (venta_codigo='" . $code . "')", "*", 0);

	if ($datos->rowCount() == 1) {
		$datos_venta = $datos->fetch();
	?>
		<h2 class="title has-text-centered"> <i class="fas fa-cash-register fa-fw"></i> &nbsp;Datos de la venta <?php echo " (" . $code . ")"; ?></h2>



		<div class="row">
    <div class="col-md-4">
        <div class="card border rounded shadow-sm">
            <div class="card-body">
                <h5 class="card-title font-weight-bold">Fecha</h5>
                <p class="card-text text-primary"><?php echo date("d-m-Y", strtotime($datos_venta['venta_fecha'])) . " " . $datos_venta['venta_hora']; ?></p>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card border rounded shadow-sm">
            <div class="card-body">
                <h5 class="card-title font-weight-bold">Nro. de factura</h5>
                <p class="card-text text-primary"><?php echo $datos_venta['venta_id']; ?></p>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card border rounded shadow-sm">
            <div class="card-body">
                <h5 class="card-title font-weight-bold">Código de venta</h5>
                <p class="card-text text-primary"><?php echo $datos_venta['venta_codigo']; ?></p>
            </div>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-md-4">
        <div class="card border rounded shadow-sm">
            <div class="card-body">
                <h5 class="card-title font-weight-bold">Caja</h5>
                <p class="card-text text-primary">Nro. <?php echo $datos_venta['caja_numero'] . " (" . $datos_venta['caja_nombre']; ?>)</p>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card border rounded shadow-sm">
            <div class="card-body">
                <h5 class="card-title font-weight-bold">Vendedor</h5>
                <p class="card-text text-primary"><?php echo $datos_venta['usuario_nombre'] . " " . $datos_venta['usuario_apellido']; ?></p>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card border rounded shadow-sm">
            <div class="card-body">
                <h5 class="card-title font-weight-bold">Cliente</h5>
                <p class="card-text text-primary"><?php echo $datos_venta['cliente_nombre'] . " " . $datos_venta['cliente_apellido']; ?></p>
            </div>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-md-4">
        <div class="card border rounded shadow-sm">
            <div class="card-body">
                <h5 class="card-title font-weight-bold">Total</h5>
                <p class="card-text text-primary"><?php echo MONEDA_SIMBOLO . number_format($datos_venta['venta_total'], MONEDA_DECIMALES, MONEDA_SEPARADOR_DECIMAL, MONEDA_SEPARADOR_MILLAR) . ' ' . MONEDA_NOMBRE; ?></p>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card border rounded shadow-sm">
            <div class="card-body">
                <h5 class="card-title font-weight-bold">Pagado</h5>
                <p class="card-text text-primary"><?php echo MONEDA_SIMBOLO . number_format($datos_venta['venta_pagado'], MONEDA_DECIMALES, MONEDA_SEPARADOR_DECIMAL, MONEDA_SEPARADOR_MILLAR) . ' ' . MONEDA_NOMBRE; ?></p>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card border rounded shadow-sm">
            <div class="card-body">
                <h5 class="card-title font-weight-bold">Cambio</h5>
                <p class="card-text text-primary"><?php echo MONEDA_SIMBOLO . number_format($datos_venta['venta_cambio'], MONEDA_DECIMALES, MONEDA_SEPARADOR_DECIMAL, MONEDA_SEPARADOR_MILLAR) . ' ' . MONEDA_NOMBRE; ?></p>
            </div>
        </div>
    </div>
</div>


		<div class="columns  pt-6">
			<div class="column">
				<div class="table-container">
				<table class="table table-bordered table-striped table-hover">
			<thead class="thead-dark">
							<tr>
								<th class="text-center text-white">#</th>
								<th class="text-center text-white">Producto</th>
								<th class="text-center text-white">Cant.</th>
								<th class="text-center text-white">Precio</th>
								<th class="text-center text-white">Subtotal</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$detalle_venta = $insLogin->seleccionarDatos("Normal", "venta_detalle WHERE venta_codigo='" . $datos_venta['venta_codigo'] . "'", "*", 0);

							if ($detalle_venta->rowCount() >= 1) {

								$detalle_venta = $detalle_venta->fetchAll();
								$cc = 1;

								foreach ($detalle_venta as $detalle) {
							?>
									<tr class="has-text-centered">
										<td><?php echo $cc; ?></td>
										<td><?php echo $detalle['venta_detalle_descripcion']; ?></td>
										<td><?php echo $detalle['venta_detalle_cantidad']; ?></td>
										<td><?php echo MONEDA_SIMBOLO . number_format($detalle['venta_detalle_precio_venta'], MONEDA_DECIMALES, MONEDA_SEPARADOR_DECIMAL, MONEDA_SEPARADOR_MILLAR) . " " . MONEDA_NOMBRE; ?></td>
										<td><?php echo MONEDA_SIMBOLO . number_format($detalle['venta_detalle_total'], MONEDA_DECIMALES, MONEDA_SEPARADOR_DECIMAL, MONEDA_SEPARADOR_MILLAR) . " " . MONEDA_NOMBRE; ?></td>
									</tr>
								<?php
									$cc++;
								}
								?>
								<tr class="has-text-centered">
									<td colspan="3"></td>
									<td class="has-text-weight-bold">
										TOTAL
									</td>
									<td class="has-text-weight-bold">
										<?php echo MONEDA_SIMBOLO . number_format($datos_venta['venta_total'], MONEDA_DECIMALES, MONEDA_SEPARADOR_DECIMAL, MONEDA_SEPARADOR_MILLAR) . " " . MONEDA_NOMBRE; ?>
									</td>
								</tr>
							<?php
							} else {
							?>
								<tr class="has-text-centered">
									<td colspan="8">
										No hay productos agregados
									</td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<div class="columns pb-6 pt-6">
			<p class="has-text-centered full-width">
				<?php
				echo '<button type="button" class="button is-link is-light is-medium" onclick="print_invoice(\'' . APP_URL . 'app/pdf/invoice.php?code=' . $datos_venta['venta_codigo'] . '\')" title="Imprimir factura Nro. ' . $datos_venta['venta_id'] . '" >
			<i class="fas fa-file-invoice-dollar fa-fw"></i> &nbsp; Imprimir factura
			</button> &nbsp;&nbsp; 

			<button type="button" class="button is-link is-light is-medium" onclick="print_ticket(\'' . APP_URL . 'app/pdf/ticket.php?code=' . $datos_venta['venta_codigo'] . '\')" title="Imprimir ticket Nro. ' . $datos_venta['venta_id'] . '" ><i class="fas fa-receipt fa-fw"></i> &nbsp; Imprimir ticket</button>';
				?>
			</p>
		</div>
	<?php
		include "./app/views/inc/print_invoice_script.php";
	} else {
		include "./app/views/inc/error_alert.php";
	}
	?>
</div>