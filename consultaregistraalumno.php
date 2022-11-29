<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATOS ENVIADOS</title>
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
    <br><br><br><br><br><br><br><b></b>
<?php
//conexion
$conexion=mysqli_connect('localhost', 'root', '', 'escuela');

//obtener los datos del formulario
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

//mostrar lo obtenido

echo "<p> se ha agregado con exito lo siguiente a la BD</p>";
echo "<p> ID:". $su_id_alumno. "</p>";
echo "<p> id_plan:". $su_id_plan. "</p>";
echo "<p> nombre:". $su_nombre. "</p>";
echo "<p> apellido:". $su_apellido. "</p>";
echo "<p> genero:". $su_genero. "</p>";
echo "<p> direccion:". $su_direccion. "</p>";
echo "<p> telefono:". $su_telefono. "</p>";
echo "<p> gmail:". $su_gmail. "</p>";
echo "<p> fecha de nacimiento:". $su_fecha_nacimiento. "</p>";
echo "<p> condicion fisica:". $su_condicion_fisica. "</p>";



//consultar el inserte de datos
$consulta= "INSERT INTO alumno(id_alumno, id_plan, nombre, apellido, genero, direccion, telefono, gmail, fecha_nacimiento, condicion_fisica) VALUES ('$su_id_alumno', '$su_id_plan', '$su_nombre', '$su_apellido', '$su_genero', '$su_direccion', '$su_telefono', '$su_gmail', '$su_fecha_nacimiento', '$su_condicion_fisica')";

//ejecutar consulta
mysqli_query($conexion, $consulta);
//cerrar la conexion
mysqli_close($conexion);
?>
</body>
</html>