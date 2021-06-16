<?php
if(!isset($_GET['id']))
{
    header('location:index2.php');
}
include 'model/conexion.php';
$id= $_GET['id'];
$sentencia = $bd->prepare("SELECT * FROM usuarios WHERE id=?;");
$resultado=$sentencia->execute([$id]);
$usuario=$sentencia->fetch(PDO::FETCH_OBJ);


?>


<!DOCTYPE html>
<html lang="es">
<head>
    <title>Editar usuarios</title>
    <meta charset= "utf-8" >
</head>
<body> 
    <!--editar datos -->
    <center> 
        <h3>Editar usuario:</h3>
        <form method="POST" action="editarproceso.php">
            <table>
                <tr>
                    <td>Nombre Completo:</td>
                    <td><input type="text" name="txtnombrecompleto2" value="<?php echo $usuario->nombre_completo; ?>"</td>
                   
                </tr>
                <tr>
                      <td>Correo:</td>
                    <td><input type="text" name="txtcorreo2" value="<?php echo $usuario->correo; ?>"</td>
                    
                </tr>
                <tr>
                    <td>Usuario:</td> 
                    <td><input type="text" name="txtusuario2" value="<?php echo $usuario->usuario; ?>"</td>
                
                </tr>
                <tr>
                    <td>contraseña:</td>
                    <td><input type="text" name="txtcontrasena2" value="<?php echo $usuario->contrasena; ?>"</td>
                </tr>
                <tr>
                    <input type="hidden" name="oculto">
                    <input type="hidden" name="id2"value="<?php echo $usuario->id; ?>">
                    <td colspan="2"><input type="submit" value="editar usuario"></td>
                </tr>
            </table>
     </center>
</body>


</html>