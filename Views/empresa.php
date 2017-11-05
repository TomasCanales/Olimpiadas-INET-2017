<?php
    require_once ('../Models/Connection.php');
	require_once ('../Models/Queries.php');
	require_once ('../Controllers/Empresa/getEmpresa.php');
?>
<?php include "partials/head.php" ?>
<?php include "partials/menu.php" ?>
<div class="wrapper">
    <div class="container">
       <p class="title">Nombre empresa</p>
       <p class="data"><?php getEmpN(); ?></p>
       <p class="title">Clave Fiscal</p>
       <p class="data"><?php getEmpFC(); ?></p>
    </div>
</div>
<?php include "partials/footer.php" ?>