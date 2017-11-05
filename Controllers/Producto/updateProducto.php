<?php  

	require_once ('../../Models/Connection.php');
    require_once ('../../Models/Queries.php');

    $message = null;

    $query = new Queries();

    $ProductoName = $_POST['ProductoName'];
    $ProductoID = $_POST['ProductoID'];

    if(strlen($ProductoName) > 0){
    	$message = $query->updateProducto("ProductoName", $ProductoName, $ProductoID);
    	echo $message;
    }else{
    	echo "Por favor complete todos los campos";
    }
?>