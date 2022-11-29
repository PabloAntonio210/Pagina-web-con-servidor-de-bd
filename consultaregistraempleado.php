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
                <a href="formularioregistraempleado.php">registrar</a>
                <a href="formularioeditaempleado.php">Editar</a>
                <a href="formularioborrarempleado.php">Borrar</a>
                <a href="formularioconsultaempleado.php">Consulta</a>
                <a href="https://wa.me/+524428497005">Contactanos</a>
            </nav>
        </div>
    </header>
    <br><br><br><br><br><br><br>
<?php
//conexion
$conexion=mysqli_connect('localhost', 'root', '', 'escuela');

//obtener los datos del formulario
$su_id_empleado=$_POST['id_empleado'];
$su_id_area=$_POST['id_area'];
$su_nombre=$_POST['nombre'];
$su_apellido=$_POST['apellido'];
$su_genero=$_POST['genero'];
$su_direccion=$_POST['direccion'];
$su_puesto=$_POST['puesto'];
$su_telefono=$_POST['telefono'];
$su_gmail=$_POST['gmail'];
$su_fecha_nacimiento=$_POST['fecha_nacimiento'];
$su_curriculum=$_POST['curriculum'];
$su_comentario=$_POST['comentario'];

//mostrar lo obtenido

echo "<p> se ha agregado con exito lo siguiente a la BD</p>";
echo "<p> ID:". $su_id_empleado. "</p>";
echo "<p> id_area:". $su_id_area. "</p>";
echo "<p> nombre:". $su_nombre. "</p>";
echo "<p> apellido:". $su_apellido. "</p>";
echo "<p> genero:". $su_genero. "</p>";
echo "<p> direccion:". $su_direccion. "</p>";
echo "<p> Puesto:". $su_puesto. "</p>";
echo "<p> telefono:". $su_telefono. "</p>";
echo "<p> gmail:". $su_gmail. "</p>";
echo "<p> fecha de nacimiento:". $su_fecha_nacimiento. "</p>";
echo "<p> curriculum:". $su_curriculum. "</p>";
echo "<p> comentarios:". $su_comentario. "</p>";



//consultar el inserte de datos
$consulta= "INSERT INTO empleado(id_empleado, id_area, nombre, apellido, genero, direccion, puesto, telefono, gmail, fecha_nacimiento, curriculum, comentario) VALUES ('$su_id_empleado', '$su_id_area', '$su_nombre', '$su_apellido', '$su_genero', '$su_direccion', '$su_puesto', '$su_telefono', '$su_gmail', '$su_fecha_nacimiento', '$su_curriculum', '$su_comentario')";

//ejecutar consulta
mysqli_query($conexion, $consulta);
//cerrar la conexion
mysqli_close($conexion);
?>
</body>
</html>