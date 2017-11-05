<?php  

	function selectZonaN(){
		if(isset($_GET['zonaID'])){
			$query = new Queries();
			$zonaID = $_GET['zonaID'];
			$datas = $query->reselectZona($zonaID);
			echo $datas['ZonaName'];
		}
	}

	function selectZonaIP(){
		if(isset($_GET['zonaID'])){
			$query = new Queries();
			$zonaID = $_GET['zonaID'];
			$datas = $query->reselectZona($zonaID);
			echo $datas['ZonaIP'];
		}
	}

	function productoSOption(){
        if(isset($_GET['zonaID'])){
            $query = new Queries();
            $zonaID = $_GET['zonaID'];
            $data = $query->reselectPOption($zonaID);
            echo "<option value='".$data['ProductoID']."'>".$data['pName']."</option>";
        }
        
    }
?>