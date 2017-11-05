<?php
session_start();
	require_once ('../Models/Connection.php');
	require_once ('../Models/Queries.php');
	require_once ('../Controllers/Configcontrol/getConfigcontrol.php');
?>
<?php include "partials/head.php" ?>
<?php include "partials/menu.php" ?>
	<div class="namePage">
		<h1>Configuracion</h1>
		<a href="newconfigcontrol.php"><h3>Nuevo ConfigControl</h3></a>
	</div>
	<table class="tbres zonas">
        <thead>
            <tr>
                <th>Producto</th>
                <th>Vol. Rociado</th>
                <th>Periodo Regado</th>
                <th>Control Sombra</th>
                <th colspan="2">Acciones</th>
            </tr>
        </thead>
        <tbody>
			<?php getConfigs(); ?>
		</tbody>
	</table>
<?php include "partials/footer.php" ?>
