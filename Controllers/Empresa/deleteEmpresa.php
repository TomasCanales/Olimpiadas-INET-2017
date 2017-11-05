<?php 

	require_once ('../Models/Connection.php');
	require_once ('../Models/Queries.php');

	if($_POST['id']){
		$empleadoID = $_POST['id'];
		$query = new Queries();
		$message = $query->deleteEmpleado($empleadoID);
		echo $message;
	}	

?>