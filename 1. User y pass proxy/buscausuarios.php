<!DOCTYPE html>
<html>

<head>
    <title>Página por defecto</title>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
</head>
<?php
error_reporting(0);
session_start();
$str = strtoupper($_POST['usuario']);

if ($str == "ADMIN" && $_POST['clave'] == "1234") {
echo "Ingreso Correcto. ";
echo $_POST['usuario'];
echo " - ";
echo $_POST['clave'];
}else{
echo "Ingreso INCorrecto.";
echo $_POST['usuario'];
echo " - ";
echo $_POST['clave'];	
}
?>

<p><a href="http://localhost">Volver</a></p>


</html>
