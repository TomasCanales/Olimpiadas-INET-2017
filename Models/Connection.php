<?php 

	class Connection {
		public function get_connection(){
			$user = "root";
			$pass = "root";
			$host = "localhost";
			$db = "olimpiadas";
			$connection = new PDO("mysql:host=$host;dbname=$db;", $user, $pass);
			return $connection;
		}
	}

?>
