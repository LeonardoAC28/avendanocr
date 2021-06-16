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


    include 'model/conexion.php';
    $sentencia = $bd->query("SELECT * FROM usuarios;");
    $usuario=$sentencia->fetchAll(PDO::FETCH_OBJ);
    /*probando el funcionamiento del query, imprime todo el objeto print_r($usuario);*/
    
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>Lista de usuarios</title>
    <meta charset= "utf-8" >
    <link rel="stylesheet" href="assets/css/estilos_index2.css">
</head>
<body> 
    <div class="div_todo">
    <h3>Mostrar datos del usuario logeado</h3>>
    <a href="php/DB.php"> consultar datos de usuarios</a>
    <!--mostar datos -->
    <table class="tablalista">
        <div class="div_mostrardatos">
        <thead class="listausuarios">
                <th>Lista de usuarios </th>
         </thead>   
            <table>
            <thead class="listaids"><tr>
                <td>ID</td>
                <td>Nombre Completo</td>
                <td>Correo</td>
                <td>usuario</td>
                <td>Editar</td>
                <td>  Eliminar</td>
            </tr>   
        </thead>
        </div>

<?php
foreach($usuario as $dato)
{
    ?>
        <tr>
            <td><?php echo $dato->id; ?></td>
            <td><?php echo $dato->nombre_completo; ?></td>
            <td><?php echo $dato->correo; ?></td>
            <td><?php echo $dato->usuario; ?></td>
            <td><a href ="editar.php?id=<?php echo $dato->id;?>">Editar</td>
            <td><a href ="eliminar.php?id=<?php echo $dato->id;?>">  Eliminar</td>
            
        </tr>
    <?php
    

}
?>
</table class="tbcapturarusuario">

         <!-- insertar datos a la tabla -->
        <h3>Capturar usuario </h3>
        <form method="POST" action="insertar.php" class="formulario_insertar">
        <table>
         <tr>
            <td>Nombre completo:</td>
            <td><input type="text" name="txtNombrecompleto"></td>
         </tr>
         <tr>
            <td>correo:</td>
            <td><input type="text" name="txtCorreo"></td>
         </tr>
         <tr>
            <td>usuario:</td>
            <td><input type="text" name="txtUsuario"></td>
         </tr>
         <tr>
            <td>contraseña:</td>
            <td><input type="text" name="txtContrasena"></td>
         </tr>
         <input type="hidden" name="oculto" value="1">
        <tr>
            <td> <input type="submit" value="Registrar usuario"</td>
        </tr>
        </table>
         <!-- fin insert -->
     </center>
</div>
     <a href="php/cerrar_sesion.php">cerrar sesion </a>
</body>


</html>
