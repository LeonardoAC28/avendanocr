<?php 

$contrasena='';
$usuario='root';
$nombredb='avendanocr';

try
{
    $bd= new PDO
    (
        'mysql:host=localhost;
        dbname=' .$nombredb,$usuario,$contrasena,
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
      
    );

}catch(exception $e)
{
    echo "Error de conexion".$e->getMessage();
}

?>