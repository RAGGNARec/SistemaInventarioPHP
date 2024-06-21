<div class="container is-fluid">
<h1 class="display-4 text-center">Gestionar el Inventario</h1>
    <h2 class="lead text-center"><i class="fas fa-box fa-fw"></i> &nbsp; Inicio</h2>
</div>

<?php
$total_cajas = $insLogin->seleccionarDatos("Normal", "caja", "caja_id", 0);
$total_usuarios = $insLogin->seleccionarDatos("Normal", "usuario WHERE usuario_id!='1' AND usuario_id!='" . $_SESSION['id'] . "'", "usuario_id", 0);
$total_clientes = $insLogin->seleccionarDatos("Normal", "cliente WHERE cliente_id!='1'", "cliente_id", 0);
$total_categorias = $insLogin->seleccionarDatos("Normal", "categoria", "categoria_id", 0);
$total_productos = $insLogin->seleccionarDatos("Normal", "producto", "producto_id", 0);
$total_ventas = $insLogin->seleccionarDatos("Normal", "venta", "venta_id", 0);
?>

<style>
    .dashboard-box {
        background-color: #f5f5f5;
        border-radius: 8px;
        padding: 20px;
        transition: transform 0.2s;
    }

    .dashboard-box:hover {
        transform: translateY(-10px);
        background-color: #e0e0e0;
    }

    .dashboard-icon {
        font-size: 3rem;
        color: #3273dc;
    }

    .dashboard-title {
        font-size: 2rem;
        color: #4a4a4a;
    }

    .dashboard-heading {
        font-size: 1.25rem;
        color: #7a7a7a;
    }
</style>

<div class="container pb-6 pt-6">
    <div class="columns is-multiline">
        <div class="column is-one-third">
            <div class="box dashboard-box has-text-centered">
                <a href="<?php echo APP_URL; ?>cashierList/">
                    <i class="fas fa-cash-register fa-fw dashboard-icon"></i>
                    <p class="heading dashboard-heading">Cajas</p>
                    <p class="title dashboard-title"><?php echo $total_cajas->rowCount(); ?></p>
                </a>
            </div>
        </div>
        <div class="column is-one-third">
            <div class="box dashboard-box has-text-centered">
                <a href="<?php echo APP_URL; ?>userList/">
                    <i class="fas fa-users fa-fw dashboard-icon"></i>
                    <p class="heading dashboard-heading">Usuarios</p>
                    <p class="title dashboard-title"><?php echo $total_usuarios->rowCount(); ?></p>
                </a>
            </div>
        </div>
        <div class="column is-one-third">
            <div class="box dashboard-box has-text-centered">
                <a href="<?php echo APP_URL; ?>clientList/">
                    <i class="fas fa-address-book fa-fw dashboard-icon"></i>
                    <p class="heading dashboard-heading">Clientes</p>
                    <p class="title dashboard-title"><?php echo $total_clientes->rowCount(); ?></p>
                </a>
            </div>
        </div>
        <div class="column is-one-third">
            <div class="box dashboard-box has-text-centered">
                <a href="<?php echo APP_URL; ?>categoryList/">
                    <i class="fas fa-tags fa-fw dashboard-icon"></i>
                    <p class="heading dashboard-heading">Categorías</p>
                    <p class="title dashboard-title"><?php echo $total_categorias->rowCount(); ?></p>
                </a>
            </div>
        </div>
        <div class="column is-one-third">
            <div class="box dashboard-box has-text-centered">
                <a href="<?php echo APP_URL; ?>productList/">
                    <i class="fas fa-cubes fa-fw dashboard-icon"></i>
                    <p class="heading dashboard-heading">Productos</p>
                    <p class="title dashboard-title"><?php echo $total_productos->rowCount(); ?></p>
                </a>
            </div>
        </div>
        <div class="column is-one-third">
            <div class="box dashboard-box has-text-centered">
                <a href="<?php echo APP_URL; ?>saleList/">
                    <i class="fas fa-shopping-cart fa-fw dashboard-icon"></i>
                    <p class="heading dashboard-heading">Ventas</p>
                    <p class="title dashboard-title"><?php echo $total_ventas->rowCount(); ?></p>
                </a>
            </div>
        </div>
    </div>
</div>
