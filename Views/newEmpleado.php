<?php  
	require_once ('../Models/Connection.php');
	require_once ('../Models/Queries.php');
?>
<?php include "partials/head.php" ?>
<?php include "partials/menu.php" ?>
	<h1>Insertar nuevo empleado</h1>
	<form id="insertEmpleado" method="POST" action="../Controllers/User/insertEmpleado.php">
		<input type="text" name="UserName" placeholder="Nombre">
		<input type="text" name="UserLName" placeholder="Apellido">
		<input type="password" name="UserPass" placeholder="Contraseña">
		<input type="text" name="UserPerm" placeholder="Permiso">
		<input type="submit" value="Insertar">
	</form>
<?php include "partials/footer.php" ?>