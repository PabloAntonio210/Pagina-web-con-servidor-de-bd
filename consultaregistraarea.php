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
                <a href="formularioregistraarea.php">registrar</a>
                <a href="formularioeditaarea.php">Editar</a>
                <a href="formularioborrararea.php">Borrar</a>
                <a href="formularioconsultaarea.php">Consulta</a>
                <a href="https://wa.me/+524428497005">Contactanos</a>
            </nav>
        </div>
    </header>
    <br><br><br><br>
<?php
//conexion
$conexion=mysqli_connect('localhost', 'root', '', 'escuela');

//obtener los datos del formulario
$su_id_area=$_POST['id_area'];
$su_id_clase=$_POST['id_clase'];
$su_nombre_area=$_POST['nombre_area'];

//mostrar lo obtenido

echo "<p> se ha agregado con exito lo siguiente a la BD</p>";
echo "<p> ID:". $su_id_area. "</p>";
echo "<p> id_clase:". $su_id_clase. "</p>";
echo "<p> nombre_area:". $su_nombre_area. "</p>";

//consultar el inserte de datos
$consulta= "INSERT INTO area(id_area, id_clase, nombre_area) VALUES ('$su_id_area', '$su_id_clase', '$su_nombre_area')";

//ejecutar consulta
mysqli_query($conexion, $consulta);
//cerrar la conexion
mysqli_close($conexion);
?>
</body>
</html>