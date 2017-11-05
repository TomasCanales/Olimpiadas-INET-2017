<?php  
	require_once ('../Models/Connection.php');
    require_once ('../Models/Queries.php');
    require_once ('../Controllers/Zona/selectZona.php');
    require_once ('../Controllers/Zona/getZona.php');
    $ZonaID = $_GET['zonaID'];
?>
<?php include "partials/head.php" ?>
<?php include "partials/menu.php" ?>
	<h1>Actualizar zona</h1>
	<form id="updateZona" method="POST" action="../Controllers/Zona/updateZona.php">
		<input type="text" name="ZonaName" value="<?php selectZonaN(); ?>">
		<input type="text" name="ZonaIP" value="<?php selectZonaIP(); ?>">
		<select name="ZonaProducto">
			<?php productoSOption(); ?>
            <?php productoOption(); ?>
        </select>
		<input type="hidden" name="ZonaID" value="<?php echo $ZonaID; ?>">
		<input type="submit" value="Actualizar">
	</form>
<?php include "partials/footer.php" ?>