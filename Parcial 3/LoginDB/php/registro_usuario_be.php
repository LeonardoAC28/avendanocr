<?php

    include 'conexion_be.php';

    $nombre_completo= $_POST['nombre_completo'];
    $correo=$_POST['correo'];
    $usuario=$_POST['usuario'];
    $contrasena=$_POST['contrasena'];

    /*encriptar contrasena
    $contrasena= hash('sha512',$contrasena)
    */

    $query = "INSERT INTO usuarios(nombre_completo,correo,usuario,contrasena)
                VALUES('$nombre_completo','$correo','$usuario','$contrasena');";
// verificar que el correo no se repita 
    $verificar_correo= mysqli_query($conexion, "SELECT * FPOM usuarios WHERE correo='$correo' ");

    if(mysqli_num_rows($verificar_correo) >0)
    {
        echo 
        '
        <script> 
        alert("Este correo ya esta registrado, intenta con otro correo");
        windows.location="../index.php"
        </script> 
        ';
        exit();
    }

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar)
    {
        echo
        '
        <script> alert("usuario almacenado exitosamente");
        window.location = "../index.php";
        
        </script>
        ';
    }
    else
    {
        echo
        '
        <script> alert("intentelo de nuevo, usuario no almacenado");
        window.location = "../index.php";
        
        </script>
        ';

    }
    mysqli_close($conexion);

?>