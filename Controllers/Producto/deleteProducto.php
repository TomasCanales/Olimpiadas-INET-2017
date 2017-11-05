<?php 

	require_once ('../../Models/Connection.php');
	require_once ('../../Models/Queries.php');

	if($_POST['id']){
		$productoID = $_POST['id'];
		$query = new Queries();
		$message = $query->deleteProducto($productoID);
		echo $message;
	}	

?>