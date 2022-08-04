<?php

$contraseña = "413471*IIO";
$usuario = "sa";
$nombreBaseDeDatos = "pruebas_parzibyte";
$rutaServidor = "147.182.192.121";
try {
    $base_de_datos = new PDO("sqlsrv:server=$rutaServidor;database=$nombreBaseDeDatos;Encrypt=false", $usuario, $contraseña);
    $base_de_datos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (Exception $e) {
    echo "Ocurrió un error con la base de datos: $nombreBaseDeDatos" . $e->getMessage();
}


  /*  class Cconexion{
        static function ConexionBD(){

            $host       ='peoplebpo.altitude.com';
            $dbname     ='rdb2';
            $username   ='bq_PeopleBPO';
            $password   ='$A3R+tROx1';
            $puerto     =9433;

            try{
                $conn= new PDO("sqlsrv:Server=$host,$puerto;Database=$dbname;Encrypt=false",$username,$password);
                echo "Se conecto a la base de datos";
            }
            catch(PDOException $exp){
                echo ("No se logro conectar a la base de datos: $dbname, error: $exp");
            }
            return $conn;
        }
    }*/

?>