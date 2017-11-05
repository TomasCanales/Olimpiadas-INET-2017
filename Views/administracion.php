<?php
session_start();
?>
<?php include "partials/head.php" ?>
<?php include "partials/menu.php" ?>

    <div class="container">
    	<div class="info">
    		<div class="infoData">

    		</div>
    		<div class="infoData">
    			
    		</div>
    	</div>
        <div class="panel"
            <a href="Empleados.php"><div class="btn-panel">Empleados</div></a>
            <a href="Zonas.php"><div class="btn-panel">Zonas</div></a>
            <a href="Productos.php"><div class="btn-panel">Productos</div></a>
        </div>
        <div class="panel">
            <a href="Configcontrol.php"><div class="btnFull-panel">Config. Controles</div></a>
        </div>
        <div class="panel">
            <a href="Consultas.php"><div class="btn-panel">Consultas</div></a>
            <a href="Reporte.php"><div class="btn-panel">Reporte</div></a>
            <a href="Monitor.php"><div class="btn-panel">Monitoreo</div></a>
        </div>
        
    </div>

<?php include "partials/footer.php" ?>