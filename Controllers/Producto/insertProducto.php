<?php  

	require_once ('../../Models/Connection.php');
	require_once ('../../Models/Queries.php');

	$message = null;

	$ProductoName = $_POST['ProductoName'];

	if(strlen($ProductoName) > 0){
		$query = new Queries();
		$message = $query->insertProducto($ProductoName);
	}else{
		echo "Por favor completa todos los datos";
	}

	echo $message;

?>