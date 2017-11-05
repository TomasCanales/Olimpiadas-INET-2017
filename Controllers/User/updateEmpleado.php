<?php  

	require_once ('../../Models/Connection.php');
    require_once ('../../Models/Queries.php');

    $message = null;

    $query = new Queries();

    $UserName = $_POST['UserName'];
    $UserLName = $_POST['UserLName'];
    $UserPass = $_POST['UserPass'];
    $UserPerm = $_POST['UserPerm'];
    $UserID = $_POST['UserID'];

    if(strlen($UserName) > 0 && strlen($UserLName) > 0 && strlen($UserPass) > 0 && strlen($UserPerm) > 0){
    	$message = $query->updateEmpleado("UserName", $UserName, $UserID);
    	$message = $query->updateEmpleado("UserLName", $UserLName, $UserID);
    	$message = $query->updateEmpleado("UserPass", $UserPass, $UserID);
        $message = $query->updateEmpleado("UserPerm", $UserPerm, $UserID);
    	echo $message;
    }else{
    	echo "Por favor complete todos los campos";
    }
?>