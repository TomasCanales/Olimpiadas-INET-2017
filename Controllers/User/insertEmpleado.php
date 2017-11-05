<?php  

	require_once ('../../Models/Connection.php');
    require_once ('../../Models/Queries.php');

    $message = null;

    $UserName = $_POST['UserName'];
    $UserLName = $_POST['UserLName'];
    $UserPass = $_POST['UserPass'];
    $UserPerm = $_POST['UserPerm'];

    if(strlen($UserName) > 0 && strlen($UserLName) > 0 && strlen($UserPass) > 0 && strlen($UserPerm) > 0){
    	$query = new Queries();
    	$message = $query->insertEmpleado($UserName, $UserLName, $UserPass, $UserPerm);
    }else{
    	echo "Por favor completa todos los datos";
    }

    echo $message;

?>