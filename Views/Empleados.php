<?php  
session_start();
	require_once ('../Models/Connection.php');
	require_once ('../Models/Queries.php');
	require_once ('../Controllers/User/getEmpleado.php');
?>
<?php include "partials/head.php" ?>
<?php include "partials/menu.php" ?>
	<div class="namePage"><h1>Lista de Empleados</h1>
	<a href="newEmpleado.php"><h3>Nuevo empleado</h3></a>
	</div>
	<table class="tbres empleados">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Cargo</th>
                <th colspan="2">Acciones</th>
            </tr>
        </thead>
        <tbody>
			<?php getEmpleados(); ?>
		</tbody>
	</table>
<?php include "partials/footer.php" ?>