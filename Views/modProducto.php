<?php  
	require_once ('../Models/Connection.php');
    require_once ('../Models/Queries.php');
    require_once ('../Controllers/Producto/selectProducto.php');
    $ProductoID = $_GET['productoID'];
?>
<?php include "partials/head.php" ?>
<?php include "partials/menu.php" ?>
	<h1>Actualizar producto</h1>
	<form id="updateProducto" method="POST" action="../Controllers/Producto/updateProducto.php">
		<input type="text" name="ProductoName" value="<?php selectProductoN(); ?>">
		<input type="hidden" name="ProductoID" value="<?php echo $ProductoID; ?>">
		<input type="submit" value="Actualizar">
	</form>
<?php include "partials/footer.php" ?>