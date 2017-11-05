<?php  

	function getZonas(){
		$query = new Queries();
		$datas = $query->getZona();
		foreach ($datas as $data) {
			echo "<tr>";
			echo "<td>".$data['ZonaName']."</td>";
			echo "<td>".$data['ZonaIP']."</td>";
			echo "<td>".$data['pName']."</td>";
			echo "<td><a href='#' id='".$data['ZonaID']."' class='deleteZona'>Eliminar</a></td>";
			echo "<td><a href='modZona.php?zonaID=".$data['ZonaID']."'>Actualizar</a></td>";
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