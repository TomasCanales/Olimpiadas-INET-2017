<?php  

	require_once ('../Models/Connection.php');
    require_once ('../Models/Queries.php');

    $message = null;

    $query = new Queries();

    $empleadoName = $_POST['empleadoName'];
    $empleadoLName = $_POST['empleadoLName'];
    $empleadoCompany = $_POST['empleadoCompany'];
    $empleadoID = $_POST['empleadoID'];

    if(strlen($empleadoName) > 0 && strlen($empleadoLName) > 0 && strlen($empleadoCompany) > 0){
    	$message = $query->updateEmpleado("empleadoName", $empleadoName, $empleadoID);
    	$message = $query->updateEmpleado("empleadoLName", $empleadoLName, $empleadoID);
    	$message = $query->updateEmpleado("empleadoCompany", $empleadoCompany, $empleadoID);
    	echo $message;
    }else{
    	echo "Por favor complete todos los campos";
    }
?>