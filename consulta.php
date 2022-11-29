<?php
//conexion a la base de datos , con los paámatros requeridos:
//servidor, usuario, contraseña, y bd
//si no se conecta, enviara el mensaje
$conexion=new mysqli("localhost", "root", "", "escuela", 3306);
if ($conexion-> connect_errno){
    echo "Falló la conexion";
}
?>