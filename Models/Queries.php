<?php 

	class Queries {

		public function getEmpresa(){
			$rows = null;
			$empresa = new Connection();
			$connection = $empresa->get_connection();
			$sql = "SELECT * FROM empresa";
			$statement = $connection->prepare($sql);
			$statement->execute();
			$result = $statement->fetch();
			return $result;
		}
        
        public function getEmpleado(){
			$rows = null;
			$empleado = new Connection();
			$connection = $empleado->get_connection();
			$sql = "SELECT * FROM user";
			$statement = $connection->prepare($sql);
			$statement->execute();
			while ($result = $statement->fetch()) {
				$rows[] = $result;
			}
			return $rows;
		}

		public function getProducto(){
			$rows = null;
			$producto = new Connection();
			$connection = $producto->get_connection();
			$sql = "SELECT * FROM producto";
			$statement = $connection->prepare($sql);
			$statement->execute();
			while ($result = $statement->fetch()) {
				$rows[] = $result;
			}
			return $rows;
		}

		public function getZona(){
			$rows = null;
			$zona = new Connection();
			$connection = $zona->get_connection();
			$sql = "SELECT zona.ZonaID, zona.ZonaName, zona.ZonaIP, producto.ProductoName AS pName FROM zona INNER JOIN producto ON producto.ProductoID = zona.ZonaProducto ORDER BY ZonaID";
			$statement = $connection->prepare($sql);
			$statement->execute();
			while ($result = $statement->fetch()) {
				$rows[] = $result;
			}
			return $rows;
		}

		public function getConfig(){
			$rows = null;
			$zona = new Connection();
			$connection = $zona->get_connection();
			$sql = "SELECT configcontrol.controlID, configcontrol.controlVRociado, configcontrol.controlRegado, configcontrol.controlSombra , producto.ProductoName AS pName FROM configcontrol INNER JOIN producto ON producto.ProductoID = configcontrol.controlProducto";
			$statement = $connection->prepare($sql);
			$statement->execute();
			while ($result = $statement->fetch()) {
				$rows[] = $result;
			}
			return $rows;
		}

		public function insertEmpleado($UserName, $UserLName, $UserPass, $UserPerm){
			$empleado = new Connection();
			$connection = $empleado->get_connection();
			$sql = "INSERT INTO user (UserName, UserLName, UserPass, UserPerm) VALUES(:uName, :uLName, :uPass, :uPerm)";
			$statement = $connection->prepare($sql);
			$statement->bindParam(':uName', $UserName);
			$statement->bindParam(':uLName', $UserLName);
			$statement->bindParam(':uPass', $UserPass);
            $statement->bindParam(':uPerm', $UserPerm);
			if(!$statement){
				return "Error al cargar el registro";
			}else{
				$statement->execute();
				return "Registro cargado correctamente";
			}
		}

		public function insertProducto($ProductoName){
			$producto = new Connection();
			$connection = $producto->get_connection();
			$sql = "INSERT INTO producto (ProductoName) VALUES(:pName)";
			$statement = $connection->prepare($sql);
			$statement->bindParam(':pName', $ProductoName);
			if(!$statement){
				return "Error al cargar el registro";
			}else{
				$statement->execute();
				return "Registro cargado correctamente";
			}
		}

		public function insertZona($ZonaName, $ZonaIP, $ZonaProducto){
			$zona = new Connection();
			$connection = $zona->get_connection();
			$sql = "INSERT INTO zona (ZonaName, ZonaIP, ZonaProducto) VALUES(:zName, :zIP, :zProducto)";
			$statement = $connection->prepare($sql);
			$statement->bindParam(':zName', $ZonaName);
			$statement->bindParam(':zIP', $ZonaIP);
			$statement->bindParam(':zProducto', $ZonaProducto);
			if(!$statement){
				return "Error al cargar el registro";
			}else{
				$statement->execute();
				return "Registro cargado correctamente";
			}
		}

		public function insertData($arduinoIP, $temp, $etemp, $hum, $ehum, $som, $esom){
			$data = new Connection();
			$connection = $data->get_connection();
			$sql = "INSERT INTO prueba (PruebaIP,PruebaZona,PruebaProducto,pruebaTemp,pruebaTE,pruebaHum,pruebaHE,pruebaSom,pruebaSE) SELECT ZonaIP, ZonaName, ZonaProducto, :temp, :etemp, :hum, :ehum, :som, :esom FROM zona WHERE ZonaIP = :aIP";
			$statement = $connection->prepare($sql);
			$statement->bindParam(':aIP', $arduinoIP);
			$statement->bindParam(':temp', $temp);
			$statement->bindParam(':etemp', $etemp);
			$statement->bindParam(':hum', $hum);
			$statement->bindParam(':ehum', $ehum);
			$statement->bindParam(':som', $som);
			$statement->bindParam(':esom', $esom);
			if(!$statement){
				return "Error al cargar el registro";
			}else{
				$statement->execute();
				return "Registro cargado correctamente";
			}
		}

		public function insertConfig($controlProducto, $controlVRociado, $controlRegado, $controlSombra){
			$config = new Connection();
			$connection = $config->get_connection();
			$sql = "INSERT INTO configcontrol (controlProducto, controlVRociado, controlRegado, controlSombra) VALUES(:cP, :cVR, :cR, :cS)";
			$statement = $connection->prepare($sql);
			$statement->bindParam(':cP', $controlProducto);
			$statement->bindParam(':cVR', $controlVRociado);
			$statement->bindParam(':cR', $controlRegado);
			$statement->bindParam(':cS', $controlSombra);
			if(!$statement){
				return "Error al cargar el registro";
			}else{
				$statement->execute();
				return "Registro cargado correctamente";
			}
		}

		public function reselectEmpleado($UserID){
			$data = new Connection();
			$connection = $data->get_connection();
			$sql = "SELECT * FROM user WHERE UserID = :uID";
			$statement = $connection->prepare($sql);
			$statement->bindParam(":uID", $UserID);
			$statement->execute();
			$result = $statement->fetch();
			return $result;
		}

		public function reselectProducto($ProductoID){
			$data = new Connection();
			$connection = $data->get_connection();
			$sql = "SELECT * FROM producto WHERE ProductoID = :pID";
			$statement = $connection->prepare($sql);
			$statement->bindParam(":pID", $ProductoID);
			$statement->execute();
			$result = $statement->fetch();
			return $result;
		}

		public function reselectZona($ZonaID){
			$data = new Connection();
			$connection = $data->get_connection();
			$sql = "SELECT * FROM zona WHERE ZonaID = :zID";
			$statement = $connection->prepare($sql);
			$statement->bindParam(":zID", $ZonaID);
			$statement->execute();
			$result = $statement->fetch();
			return $result;
		}

		public function reselectPOption($ZonaID){
			$data = new Connection();
			$connection = $data->get_connection();
			$sql = "SELECT zona.ZonaID, zona.ZonaProducto, producto.ProductoID, producto.productoName AS pName FROM zona INNER JOIN producto ON producto.ProductoID = zona.ZonaProducto WHERE ZonaID = :zID";
			$statement = $connection->prepare($sql);
			$statement->bindParam(":zID", $ZonaID);
			$statement->execute();
			$result = $statement->fetch();
			return $result;
		}

		public function updateEmpleado($field, $value, $UserID){
            $data = new Connection();
            $connection = $data->get_connection();
            $sql = "UPDATE user set $field = :value WHERE UserID = :uID";
            $statement = $connection->prepare($sql);
            $statement->bindParam(":value", $value);
            $statement->bindParam(":uID", $UserID);
            if(!$statement){
                return "Error al actualizar el empleado";
            }else{
                $statement->execute();
                return "Empleado actualizado correctamente";
            }
        }

        public function updateProducto($field, $value, $ProductoID){
            $data = new Connection();
            $connection = $data->get_connection();
            $sql = "UPDATE producto set $field = :value WHERE ProductoID = :pID";
            $statement = $connection->prepare($sql);
            $statement->bindParam(":value", $value);
            $statement->bindParam(":pID", $ProductoID);
            if(!$statement){
                return "Error al actualizar el empleado";
            }else{
                $statement->execute();
                return "Producto actualizado correctamente";
            }
        }

        public function updateZona($field, $value, $ZonaID){
            $data = new Connection();
            $connection = $data->get_connection();
            $sql = "UPDATE zona set $field = :value WHERE ZonaID = :zID";
            $statement = $connection->prepare($sql);
            $statement->bindParam(":value", $value);
            $statement->bindParam(":zID", $ZonaID);
            if(!$statement){
                return "Error al actualizar el empleado";
            }else{
                $statement->execute();
                return "Zona actualizada correctamente";
            }
        }

        public function deleteEmpleado($UserID){
        	$data = new Connection();
        	$connection = $data->get_connection();
        	$sql = "DELETE FROM user WHERE UserID = :uID";
        	$statement = $connection->prepare($sql);
        	$statement->bindParam(':uID', $UserID);
        	if(!$statement){
        		return "Error al eliminar el empleado";
        	}else{
        		$statement->execute();
        		return "Empleado eliminado correctamente";
        	}
        }

        public function deleteProducto($ProductoID){
        	$data = new Connection();
        	$connection = $data->get_connection();
        	$sql = "DELETE FROM producto WHERE ProductoID = :pID";
        	$statement = $connection->prepare($sql);
        	$statement->bindParam(':pID', $ProductoID);
        	if(!$statement){
        		return "Error al eliminar el empleado";
        	}else{
        		$statement->execute();
        		return "Producto eliminado correctamente";
        	}
        }

        public function deleteZona($ZonaID){
        	$data = new Connection();
        	$connection = $data->get_connection();
        	$sql = "DELETE FROM zona WHERE ZonaID = :zID";
        	$statement = $connection->prepare($sql);
        	$statement->bindParam(':zID', $ZonaID);
        	if(!$statement){
        		return "Error al eliminar la zona";
        	}else{
        		$statement->execute();
        		return "Zona eliminada correctamente";
        	}
        }

        public function sendArduino($arduinoIP){
        	$data = new Connection();
        	$connection = $data->get_connection();
        	$sql = "SELECT configcontrol.controlProducto, configcontrol.controlVRociado, configcontrol.controlRegado, configcontrol.controlSombra, zona.ZonaIP, zona.ZonaProducto INNER JOIN zona zona.ZonaProducto = configcontrol.controlProducto WHERE zona.ZonaIP = :aIP FROM configcontrol";
        	$statement = $connection->prepare($sql);
			$statement->bindParam(":aIP", $arduinoIP);
			$statement->execute();
			$result = $statement->fetch();
			return $result;
        }
	}

?>