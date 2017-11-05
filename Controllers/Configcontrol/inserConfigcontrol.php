<?php  

	require_once ('../../Models/Connection.php');
    require_once ('../../Models/Queries.php');

    $message = null;

    $controlProducto = $_POST['controlProducto'];
    $controlVRociado = $_POST['controlVRociado'];
    $controlRegado = $_POST['controlRegado'];
    $controlSombra = $_POST['controlSombra'];

    if(strlen($controlProducto) > 0 && strlen($controlVRociado) > 0 && strlen($controlRegado) > 0 && strlen($controlSombra) > 0){
    	$query = new Queries();
    	$message = $query->insertConfig($controlProducto, $controlVRociado, $controlRegado, $controlSombra);
    }else{
    	echo "Por favor completa todos los datos";
    }

    echo $message;

?>