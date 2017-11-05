<?php  

	require_once ('../Models/Connection.php');
    require_once ('../Models/Queries.php');

    $message = null;

    $empleadoName = $_POST['empleadoName'];
    $empleadoLName = $_POST['empleadoLName'];
    $empleadoCompany = $_POST['empleadoCompany'];

    if(strlen($empleadoName) > 0 && strlen($empleadoLName) > 0 && strlen($empleadoCompany) > 0){
    	$query = new Queries();
    	$message = $query->insertEmpleado($empleadoName, $empleadoLName, $empleadoCompany);
    }else{
    	echo "Por favor completa todos los datos";
    }

    echo $message;

?>