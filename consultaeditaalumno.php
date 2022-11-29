<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATOS CAMBIADOS</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
<header>
        <div class="container">
            <p class="logo"><img src="media/descarga.jpg" alt="logo" width="100px"></p>
            <nav>
                <a href="index.php">Inicio</a>
                <a href="formularioregistraalumno.php">registrar</a>
                <a href="formularioeditaalumno.php">Editar</a>
                <a href="formularioborraralumno.php">Borrar</a>
                <a href="formularioconsultaalumno.php">Consulta</a>
                <a href="https://wa.me/+524428497005">Contactanos</a>
            </nav>
        </div>
    </header>
    <br><br><br><br><br><br><br><br><br><br>
<?php 
//conexion a la BD
$conexion=mysqli_connect("localhost", "root", "", "escuela");

//se recuperan el id del formulario
$su_id_alumno=$_POST['id_alumno'];
$su_id_plan=$_POST['id_plan'];
$su_nombre=$_POST['nombre'];
$su_apellido=$_POST['apellido'];
$su_genero=$_POST['genero'];
$su_direccion=$_POST['direccion'];
$su_telefono=$_POST['telefono'];
$su_gmail=$_POST['gmail'];
$su_fecha_nacimiento=$_POST['fecha_nacimiento'];
$su_condicion_fisica=$_POST['condicion_fisica'];

//consulta SQL actualizacion de datos
$consulta= "UPDATE alumno SET id_alumno='$su_id_alumno', id_plan='$su_id_plan', nombre='$su_nombre', apellido='$su_apellido', genero='$su_genero', direccion='$su_direccion', telefono='$su_telefono', gmail='$su_gmail', fecha_nacimiento='$su_fecha_nacimiento', condicion_fisica='$su_condicion_fisica' WHERE id_alumno='$su_id_alumno'";

//ejecucion de la consulta anterior
mysqli_query($conexion, $consulta);
//cerrar la conexion
mysqli_close($conexion);

echo "Se ha actualizado el alumno con el  ID: ".$su_id_alumno;
?>
</body>
</html>