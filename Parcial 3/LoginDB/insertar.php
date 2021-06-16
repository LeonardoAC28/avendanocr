<?php
    if(!isset($_POST['oculto']))
    {
        echo "ingrese datos para su captura";
        exit();
    }

    include 'model/conexion.php';

    $nombrecompleto =$_POST['txtNombrecompleto'];
    $correo =$_POST['txtCorreo'];
    $usuario =$_POST['txtUsuario'];
    $contrasena =$_POST['txtContrasena']; 

    $sentencia= $bd-> prepare("INSERT INTO usuarios(nombre_completo,correo,usuario,contrasena) VALUES(?,?,?,?);");
    $resultado = $sentencia->execute([$nombrecompleto,$correo,$usuario,$contrasena]);


    if($resultado === TRUE)
    {
        header('Location: index2.php');
        //echo "insertado correctamente";
    }else
    {
        echo "ocurrio un error";
    }
?>