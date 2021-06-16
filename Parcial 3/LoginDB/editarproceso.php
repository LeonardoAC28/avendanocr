<?php
if(!isset($_POST['oculto']))
{
    header('location:index2.php');
}

include 'model/conexion.php';
$id2=$_POST["id2"];
$nombrecompleto2=$_POST['txtnombrecompleto2'];
$correo2=$_POST['txtcorreo2'];
$usuario2=$_POST['txtusuario2'];
$contrasena2=$_POST['txtcontrasena2'];


$setencia =$bd->prepare("UPDATE usuarios SET nombre_completo=?,correo=?,usuario=?,contrasena=? WHERE id=?;");
$resultado=$setencia->execute([$nombrecompleto2,$correo2,$usuario2,$contrasena2,$id2]);


if($resultado === TRUE)
{
    header('Location:index2.php');
}else
{
    echo "error";
}

?>