<?php  

    require_once ('../../Models/Connection.php');
    require_once ('../../Models/Queries.php');

	$message = null;

    $arduinoIP = $_GET['ip'];
    $temp = $_GET['temp'];
    $hum = $_GET['hum'];
    $som = $_GET['som'];
    $etemp = $_GET['tempEstado'];
    $ehum = $_GET['humEstado'];
    $esom = $_GET['somEstado'];  

    $query = new Queries();
    $message = $query->insertData($arduinoIP, $temp, $etemp, $hum, $ehum, $som, $esom);

    echo $message;   

?>