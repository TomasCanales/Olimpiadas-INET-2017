<?php 
session_start();
	require_once ('../Models/Connection.php');
	require_once ('../Models/Queries.php');
	require_once ('../Controllers/Zona/getZona.php');
?>
<?php include "partials/head.php" ?>
<?php include "partials/menu.php" ?>
	<div class="namePage">
		<h1>Lista de Zonas</h1>
		<a href="newZona.php"><h3>Nueva Zona</h3></a>
	</div>
	<table class="tbres zonas">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>IP</th>
                <th>Producto</th>
                <th colspan="2">Acciones</th>
            </tr>
        </thead>
        <tbody>
			<?php getZonas(); ?>
		</tbody>
	</table>
<?php include "partials/footer.php" ?>