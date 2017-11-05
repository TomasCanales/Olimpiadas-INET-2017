<?php  

	function selectEmpleadoN(){
		if(isset($_GET['empleadoID'])){
			$query = new Queries();
			$empleadoID = $_GET['empleadoID'];
			$datas = $query->reselectEmpleado($empleadoID);
			echo $datas['empleadoName'];
		}
	}

	function selectEmpleadoLN(){
		if(isset($_GET['empleadoID'])){
			$query = new Queries();
			$empleadoID = $_GET['empleadoID'];
			$datas = $query->reselectEmpleado($empleadoID);
			echo $datas['empleadoLName'];
		}
	}

	function selectEmpleadoC(){
		if(isset($_GET['empleadoID'])){
			$query = new Queries();
			$empleadoID = $_GET['empleadoID'];
			$datas = $query->reselectEmpleado($empleadoID);
			echo $datas['empleadoCompany'];
		}
	}



?>