<?php

  require_once ('../../Models/Connection.php');

  $User = $_POST['UserEmail'];
  $Password = $_POST['UserPass'];

  if(empty($User) || empty($Password)){
    header("Location: ../../Views/index.php");
    exit();
  }

  $user = new Connection();
  $connection = $user->get_connection();
  $sql = "SELECT * FROM user WHERE UserEmail = :uE";
  $statement = $connection->prepare($sql);
  $statement->bindParam(':uE', $User);
  $statement->execute();
  if($row = $statement->fetch()) {
    if($row['UserPass'] == $Password){
      $Permiso = $row['UserPerm'];
      session_start();
      $_SESSION['User'] = $User;
      $_SESSION['UserP'] = $Permiso;
      if($_SERVER["REMOTE_ADDR"] === $_SERVER['SERVER_ADDR']){
          header("location: ../../Views/Admin.php");
      }else if($_SESSION['UserP'] == 1){
        header("Location: ../../Views/administracion.php");
      }else if($_SESSION['UserP'] == 2){
        header("Location: ../../Views/supervisor.php");
      }else if($_SESSION['UserP'] == 3){
        header("Location: ../../Views/operador.php");
      }
      
    }else{
      header("Location: ../../Views/index.php");
      exit();
    }
  }else{
    header("Location: ../../Views/index.php");
    exit();
  }
?>
