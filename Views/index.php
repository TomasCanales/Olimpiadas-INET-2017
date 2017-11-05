<?php session_start();
if(isset($_SESSION["User"])){ 
header("Location:home.php");
}else{ 
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Dashboard Vivero</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="partials/css/login.css">
    <link href="https://fonts.googleapis.com/css?family=Encode+Sans+Semi+Condensed:300,400,500,700" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <div class="wrapper-top">
            <img src="partials/img/logo.png" alt="">
            <h1>Bienvenido, inicie sesion.</h1>
        </div>
        <div class="container">
            <form method="POST" action="../Controllers/User/loginEmpleado.php" class="form-login">
                <div class="form-group">
                    <label class="label-control">
                        <span class="label-text">Email de empleado</span>
                    </label>
                    <input type="email" name="UserEmail" class="form-control">
                </div>
                <div class="form-group">
                    <label class="label-control">
                        <span class="label-text">Contraseña</span>
                    </label>
                    <input type="password" name="UserPass" class="form-control">
                </div>
                <input type="submit" value="Ingresar" class="btn-login">
                <p class="text-login"><a href="#">¿Has olvidado la contraseña?</a></p>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script type="text/javascript">
            $(window).load(function() {
                $('.form-group input').on('focus blur', function(e) {
                    $(this).parents('.form-group').toggleClass('active', (e.type === 'focus' || this.value.length > 0));
                }).trigger('blur');
            });
    </script>
    </script>
</body>

</html>

<?php }  ?>