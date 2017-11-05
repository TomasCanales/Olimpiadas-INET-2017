<?php  

	function getEmpleados(){
		$query = new Queries();
		$datas = $query->getEmpleado();
		foreach ($datas as $data) {
			echo "<tr>";
			echo "<td>".$data['UserName']."</td>";
			echo "<td>".$data['UserLName']."</td>";
			if($data['UserPerm'] == 1){
				echo "<td>Administrador</td>";
			}else if($data['UserPerm'] == 2){
				echo "<td>Supervisor</td>";
			}else if($data['UserPerm'] == 3){
				echo "<td>Operador</td>";
			}
			echo "<td><a href='#' id='".$data['UserID']."' class='deleteEmpleado'>Eliminar</a></td>";
			echo "<td><a href='modEmpleado.php?userID=".$data['UserID']."'>Actualizar</a></td>";
			echo "</tr>";
		}
	}

?>