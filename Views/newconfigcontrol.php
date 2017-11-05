<?php
session_start();
	require_once ('../Models/Connection.php');
	require_once ('../Models/Queries.php');
	require_once ('../Controllers/Zona/getZona.php');
?>
<?php include "partials/head.php" ?>
<?php include "partials/menu.php" ?>
	<h1>Insertar nueva zona</h1>
	<form id="insertZona" method="POST" action="../Controllers/Configcontrol/inserConfigcontrol.php">
		<select name="controlProducto">
            <?php productoOption(); ?>
        </select>
		<input type="text" name="controlVRociado" placeholder="Volumen Rociado">
		<input type="text" name="controlRegado" placeholder="Control P. Regado">
		<input type="text" name="controlSombra" placeholder="Control Sombra">
		<input type="submit" value="Insertar">
	</form>
<?php include "partials/footer.php" ?>