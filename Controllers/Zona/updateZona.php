<?php  

	require_once ('../../Models/Connection.php');
    require_once ('../../Models/Queries.php');

    $message = null;

    $query = new Queries();

    $ZonaName = $_POST['ZonaName'];
    $ZonaIP = $_POST['ZonaIP'];
    $ZonaProducto = $_POST['ZonaProducto'];
    $ZonaID = $_POST['ZonaID'];

    if(strlen($ZonaName) > 0 && strlen($ZonaIP) > 0 && strlen($ZonaProducto) > 0){
    	$message = $query->updateZona("ZonaName", $ZonaName, $ZonaID);
    	$message = $query->updateZona("ZonaIP", $ZonaIP, $ZonaID);
    	$message = $query->updateZona("ZonaProducto", $ZonaProducto, $ZonaID);
    	echo $message;
    }else{
    	echo "Por favor complete todos los campos";
    }
?>