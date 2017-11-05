<?php  

	function selectEmpleadoN(){
		if(isset($_GET['userID'])){
			$query = new Queries();
			$empleadoID = $_GET['userID'];
			$datas = $query->reselectEmpleado($empleadoID);
			echo $datas['UserName'];
		}
	}

	function selectEmpleadoLN(){
		if(isset($_GET['userID'])){
			$query = new Queries();
			$empleadoID = $_GET['userID'];
			$datas = $query->reselectEmpleado($empleadoID);
			echo $datas['UserLName'];
		}
	}

	function selectEmpleadoP(){
		if(isset($_GET['userID'])){
			$query = new Queries();
			$empleadoID = $_GET['userID'];
			$datas = $query->reselectEmpleado($empleadoID);
			echo $datas['UserPass'];
		}
	}

    function selectEmpleadoPe(){
		if(isset($_GET['userID'])){
			$query = new Queries();
			$empleadoID = $_GET['userID'];
			$datas = $query->reselectEmpleado($empleadoID);
			echo $datas['UserPerm'];
		}
	}



?>