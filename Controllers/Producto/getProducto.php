<?php  

	function getProductos(){
		$query = new Queries();
		$datas = $query->getProducto();
		foreach ($datas as $data) {
			echo "<tr>";
			echo "<td>".$data['ProductoID']."</td>";
			echo "<td>".$data['ProductoName']."</td>";
			echo "<td><a href='#' id='".$data['ProductoID']."' class='deleteProducto'>Eliminar</a></td>";
			echo "<td><a href='modProducto.php?productoID=".$data['ProductoID']."'>Actualizar</a></td>";
			echo "</tr>";
		}
	}

?>
