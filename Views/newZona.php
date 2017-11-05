<?php  
	require_once ('../Models/Connection.php');
	require_once ('../Models/Queries.php');
	require_once ('../Controllers/Zona/getZona.php');
?>
<?php include "partials/head.php" ?>
<?php include "partials/menu.php" ?>
	<h1>Insertar nueva zona</h1>
	<form id="insertZona" method="POST" action="../Controllers/Zona/insertZona.php">
		<input type="text" name="ZonaName" placeholder="Nombre">
		<input type="text" name="ZonaIP" placeholder="IP">
		<select name="ZonaProducto">
            <?php productoOption(); ?>
        </select>
		<input type="submit" value="Insertar">
	</form>
<?php include "partials/footer.php" ?>