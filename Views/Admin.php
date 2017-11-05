<?php
session_start();
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
        <?php 
            if($_SESSION['UserP'] == 1){ 
        ?>
        <div class="panel">
            <a href="Configcontrol.php"><div class="btnFull-panel">Config. Controles</div></a>
        </div>
        <?php }else{?>
			<p>Esto es una prueba de concepto de que por mas que un usuario que no sea Administrador inicie sesion desde la PC donde esta el servidor no podra ver su contenido. Se cerrara su conexion.</p>

        <?php header('refresh:20; url=http://localhost/Views/logout.php'); } ?>
        
    </div>

<?php include "partials/footer.php" ?>