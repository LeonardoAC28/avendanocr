<?php
    session_start();

    if(!isset($_SESSION['usuario']))
    {
        echo
        '
        <script>
        alert("Por favor debes iniciar sesion");
        window.location = "index.php";
        </script>
        ';
        session_destroy();
        die();
    }


?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta  name ="viewport" content="width=device-width, initial-scale=1.0">
    <title>bienvenida</title>
</head>   
<body>
    <h1> Bienvenido</h1>
 
    <a href="php/cerrar_sesion.php">cerrar sesion </a>
    
    <a href="php/DB.php"> consultar datos de usuarios</a>



    <script>
</body>








</html>