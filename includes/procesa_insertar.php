<?php

include_once "../conexion/conexion.php";
$nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';
$edad = (isset($_POST['edad'])) ? $_POST['edad'] : '';
$fecha = (isset($_POST['fecha'])) ? $_POST['fecha'] : '';

$sentencia = $base_de_datos->prepare("INSERT INTO mascotas(nombre, edad, fecha) VALUES (?, ?, ?);");
$resultado = $sentencia->execute([$nombre, $edad, $fecha]);

if($resultado){

    echo "1";

}else{

    echo "0";
    
}

?>