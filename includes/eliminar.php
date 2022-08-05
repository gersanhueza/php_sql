<?php


$id = (isset($_POST['id'])) ? $_POST['id'] : '';

include_once "../conexion/conexion.php";
$sentencia = $base_de_datos->prepare("DELETE FROM mascotas WHERE id = $id;");
$resultado = $sentencia->execute([$id]);
if ($resultado === true) {
    header("Location: ../index.php");
} else {
    echo "Algo salió mal";
}

?>