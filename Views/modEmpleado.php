<?php  
	require_once ('../Models/Connection.php');
    require_once ('../Models/Queries.php');
    require_once ('../Controllers/User/selectEmpleado.php');
    $UserID = $_GET['userID'];
?>
<?php include "partials/head.php" ?>
<?php include "partials/menu.php" ?>
	<h1>Actualizar empleado</h1>
	<form id="updateEmpleado" method="POST" action="../Controllers/User/updateEmpleado.php">
		<input type="text" name="UserName" value="<?php selectEmpleadoN(); ?>">
		<input type="text" name="UserLName" value="<?php selectEmpleadoLN(); ?>">
		<input type="text" name="UserPass" value="<?php selectEmpleadoP(); ?>">
		<input type="text" name="UserPerm" value="<?php selectEmpleadoPe(); ?>">
		<input type="hidden" name="UserID" value="<?php echo $UserID; ?>">
		<input type="submit" value="Actualizar">
	</form>
<?php include "partials/footer.php" ?>