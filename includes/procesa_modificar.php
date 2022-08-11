<?php

include_once "../conexion/conexion.php";

$id     = (isset($_POST['id'])) ? $_POST['id'] : '';
$nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';
$edad   = (isset($_POST['edad'])) ? $_POST['edad'] : '';
$fecha = (isset($_POST['fecha'])) ? $_POST['fecha'] : '';

$sentencia = $base_de_datos->prepare("UPDATE mascotas SET nombre= ? , edad= ?, fecha= ? WHERE id = ?;");
$resultado = $sentencia->execute([$nombre, $edad, $fecha, $id]);

if($resultado){

    echo "1";

}else{

    echo "0";
    
}

?>