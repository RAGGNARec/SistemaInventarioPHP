<div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">
	<form action="" method="POST" autocomplete="off">
		<div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white rounded shadow-base">
			<div class="signin-logo tx-center tx-28 tx-bold tx-inverse"> <img src="https://miro.medium.com/v2/resize:fit:640/1*oHO1q89fxLEmS-OJ9cduuA.png" alt="logo cemlad" width="100%">
			</div>
			<div class="tx-center mg-b-30">Ingresar al Sistema Inventario</div>
			<p class="mb-0">Para acceder al sistema de ventas, por favor utilice las siguientes credenciales:</p>
			<br>
			<p class="font-weight-bold">Usuario: Administrador</p>
			<p class="font-weight-bold">Contraseña: Administrador</p>

			<?php
			if (isset($_POST['login_usuario']) && isset($_POST['login_clave'])) {
				$insLogin->iniciarSesionControlador();
			}
			?>
			<div class="input-group pt-3 pb-3">
				<span class="input-group-addon"><i class="icon ion-person tx-16 lh-0 op-6"></i></span>
				<input type="text" name="login_usuario" pattern="[a-zA-Z0-9]{4,20}" maxlength="20" required class="form-control" placeholder="Ingrese usuario">
			</div><!-- form-group -->
			<div class="input-group">
				<span class="input-group-addon"><i class="icon ion-locked tx-16 lh-0 op-6"></i></span>
				<input type="password" name="login_clave" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" required class="form-control" placeholder="Ingrese contraseña">
			</div><!-- form-group -->
			<input type="hidden" name="enviar" class="form-control" value="si">
			<br>
			<button type="submit" class="btn btn-primary btn-block tx-uppercase">Ingresar</button>
		</div><!-- login-wrapper -->
	</form>
</div><!-- d-flex -->
