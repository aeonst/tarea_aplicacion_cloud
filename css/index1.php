<?php
$conexion = mysqli_connect('remotemysql.com','FQYZPEPc03','oiu8Vihi61','FQYZPEPc03') or die(mysqli_error($mysqli));
insertar($conexion);
function insertar($conexion){
$nombre = $_POST['nombre'];
$apellido = $_POST['Apellido'];
$ciudad = $_POST['Ciudad'];
$email = $_POST['Email'];
$tipos = $_POST['sangre'];
$enfer = $_POST['enfermedad'];
$eps = $_POST['eps'];

$consulta =" INSERT INTO enferma  VALUES ( '$nombre','$apellido','$ciudad','$email','$tipos','$enfer','$eps')";
mysqli_query($conexion,$consulta);
mysqli_close($conexion);
header("location:index.html");
}
?>