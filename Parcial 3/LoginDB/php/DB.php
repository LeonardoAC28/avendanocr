 <?php

$conexion=new PDO("mysql:host=localhost;dbname=avendanocr","root","");

$busqueda=$conexion->query("Select * from usuarios");
/*Almacenamos el resultado de fetchAll en una variable*/
$arrDatos=$busqueda->fetchAll(PDO::FETCH_ASSOC);

?>

<table   class="table table-bordered">
<th class="bg-primary" scope="col">id</th>
<th class="bg-primary" scope="col">nombre completo</th>
<th class="bg-primary" scope="col">correo</th>
<th class="bg-primary" scope="col">usuario</th>
<?php

/* var_dump($arrDatos);*/
/*Recorremos todos los resultados, ya no hace falta invocar más a fetchAll como si fuera fetch...*/
foreach ($arrDatos as $muestra) {
    echo '<tr>';

    echo '<td >' . $muestra['id'] . '</td>';
    echo '<td >' . $muestra['nombre_completo'] . '</td>';
    echo '<td >' . $muestra['correo'] . '</td>';
    echo '<td >' . $muestra['usuario'] . '</td>';
  
    echo ' </tr>';

}
?>
<a href="../index.php"> regresar </a>
</table>
 