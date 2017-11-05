<?php

session_start();
$connect = mysqli_connect("localhost","root","","olimpiadas");

if(isset($_POST["user"]) && isset($_POST["pass"])){
  $user = mysqli_real_escape_string($connect, $_POST["user"]);
  $pass = mysqli_real_escape_string($connect, $_POST["pass"]);
  $sql = "SELECT UserEmail FROM user WHERE UserEmail='$user' AND UserPass='$pass'";
  $result = mysqli_query($connect, $sql);
  $num_row = mysqli_num_rows($result);
  if ($num_row == "1") {
    $data = mysqli_fetch_array($result);
    $_SESSION["UserEmail"] = $data["UserEmail"];
    echo "1";
  } else {
    echo "error";
  }
} else {
  echo "error";
}

?>
