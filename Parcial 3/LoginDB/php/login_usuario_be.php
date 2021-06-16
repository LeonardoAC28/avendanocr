<?php

    session_start();

    include 'conexion_be.php';

    $correo= $_POST['correo'];
    $contrasena= $_POST['contrasena'];
    
    /*encriptar contrasena
    $contrasena= hash('sha512', $contrasena)
*/
    $validar_login =mysqli_query($conexion, "SELECT * FROM usuarios where correo='$correo' and contrasena='$contrasena'  ");


    if(mysqli_num_rows($validar_login)>0 ) 
    {
        $_SESSION['usuario']= $correo;
        header("location: ../index.php");
        exit;
    }
    else
    {
        echo 
        '
        <script>
            alert("usuario no existe, porfavor verifique los datos introducidos");
            window.location ="../index.php";
        </script>
        ';
        exit;
    }

?>