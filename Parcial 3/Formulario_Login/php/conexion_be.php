<?php

    $conexion = mysqli_connect("localhost", "root","","avendanocr");

    if($conexion)
    {
         echo 'conectado exitosamente a la base de datos'; 
    }
    else
    {
        echo 'No se a podido conectar a la base de datos';
    }
    
 
?>