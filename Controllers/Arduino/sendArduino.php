<?php  

	require_once ('../../Models/Connecion.php');
	require_once ('../../Models/Queries.php');

	$arduinoIP = $_GET['ip'];

	$query = new Queries();
	$data = $query->sendArduino($arduinoIP);
	echo "<".','.$data['controlVRociado'].','.$data['controlRegado'].','.$data['controlSombra'].">";

?>