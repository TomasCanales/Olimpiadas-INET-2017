<?php  

	function getConfigs(){
		$query = new Queries();
		$datas = $query->getConfig();
		foreach ($datas as $data) {
			echo "<tr>";
			echo "<td>".$data['pName']."</td>";
			echo "<td>".$data['controlVRociado']."</td>";
			echo "<td>".$data['controlRegado']."</td>";
			echo "<td>".$data['controlSombra']."</td>";
			echo "<td><a href='#' id='".$data['controlID']."' class='deleteZona'>Eliminar</a></td>";
			echo "<td><a href='modZona.php?zonaID=".$data['controlID']."'>Actualizar</a></td>";
			echo "</tr>";
		}
	}

	function productoOption(){
        $query = new Queries();
        $datas = $query->getProducto();
        foreach ($datas as $data) {
            echo "<option value='".$data['ProductoID']."'>".$data['ProductoName']."</option>";
        }
    }

?>