<?php  

	function selectProductoN(){
		if(isset($_GET['productoID'])){
			$query = new Queries();
			$productoID = $_GET['productoID'];
			$datas = $query->reselectProducto($productoID);
			echo $datas['ProductoName'];
		}
	}


?>