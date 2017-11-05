<?php  

	require_once ('../../Models/Connection.php');
    require_once ('../../Models/Queries.php');

    $message = null;

    $ZonaName = $_POST['ZonaName'];
    $ZonaIP = $_POST['ZonaIP'];
    $ZonaProducto = $_POST['ZonaProducto'];

    if(strlen($ZonaName) > 0 && strlen($ZonaIP) > 0 && strlen($ZonaProducto) > 0){
    	$query = new Queries();
    	$message = $query->insertZona($ZonaName, $ZonaIP, $ZonaProducto);
    }else{
    	echo "Por favor completa todos los datos";
    }

    echo $message;

?>