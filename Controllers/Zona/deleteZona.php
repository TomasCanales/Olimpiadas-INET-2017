<?php 

	require_once ('../../Models/Connection.php');
	require_once ('../../Models/Queries.php');

	if($_POST['id']){
		$zonaID = $_POST['id'];
		$query = new Queries();
		$message = $query->deleteZona($zonaID);
		echo $message;
	}	

?>