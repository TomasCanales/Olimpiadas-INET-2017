<?php  
session_start();
	require_once ('../Models/Connection.php');
	require_once ('../Models/Queries.php');
	require_once ('../Controllers/Producto/getProducto.php');
?>
<?php include "partials/head.php" ?>
<?php include "partials/menu.php" ?>
	<h1>Lista de Productos</h1>
	<a href="newProducto.php"><h3>Nuevo producto</h3></a>
	<table>
		<thead>
			<tr>
				<th>#</th>
				<th>Nombre</th>
				<th colspan="2">Acciones</th>
			</tr>
		</thead>
		<tbody>
			<?php getProductos(); ?>
		</tbody>
	</table>
<?php include "partials/footer.php" ?>