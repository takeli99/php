<?php
session_start();
$username = $_POST["user"];
$password = $_POST["password"];

if($username == "admin" && $password == "1234") {
    $_SESSION["user"] = "admin";
    $_SESSION["fecha"] = date("Y-m-d H:i:s");
    header("Location:actividades.php");
} elseif ($username == "cliente1" && $password == "c1234") {
    $_SESSION["user"] = "cliente1";
    $_SESSION["fecha"] = date("Y-m-d H:i:s");
    header("Location:actividades.php");
}else {
    header("Location:login.html");
}
?>
