<?php
require_once ('../Controllers/Empresa/getEmpresa.php');
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
        <div class="panel">
            <?php
                if($_SESSION['UserP'] == 1){
             ?>
            <a href="Empleados.php"><div class="btn-panel">Empleados</div></a>
            <a href="Zonas.php"><div class="btn-panel">Zonas</div></a>
            <a href="Productos.php"><div class="btn-panel">Productos</div></a>
        </div>
        <?php } ?>
        <?php
            if($_SESSION['UserP'] == 1 || 2){
        ?>
        <div class="panel">
            <a href="Configcontrol.php"><div class="btnFull-panel">Config. Controles</div></a>
        </div>
        <?php } ?>
        <?php
            if($_SESSION['UserP'] == 1 || 2 || 3 ){
        ?>
        <div class="panel">
            <a href="Consultas.php"><div class="btn-panel">Consultas</div></a>
            <a href="Reporte.php"><div class="btn-panel">Reporte</div></a>
            <a href="Monitor.php"><div class="btn-panel">Monitoreo</div></a>
        </div>
        <?php } ?>

    </div>

<?php include "partials/footer.php" ?>
