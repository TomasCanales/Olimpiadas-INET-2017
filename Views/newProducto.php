<?php  
	require_once ('../Models/Connection.php');
	require_once ('../Models/Queries.php');
?>
<?php include "partials/head.php" ?>
<?php include "partials/menu.php" ?>
	<h1>Insertar nuevo Producto</h1>
	<form id="insertProducto" method="POST" action="../Controllers/Producto/insertProducto.php">
		<input type="text" name="ProductoName" placeholder="Nombre">
		<input type="submit" value="Insertar">
	</form>
<?php include "partials/footer.php" ?>