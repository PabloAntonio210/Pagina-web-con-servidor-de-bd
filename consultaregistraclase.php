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
                <a href="formularioregistraclase.php">registrar</a>
                <a href="formularioeditaclase.php">Editar</a>
                <a href="formularioborrarclase.php">Borrar</a>
                <a href="formularioconsultaclase.php">Consulta</a>
                <a href="https://wa.me/+524428497005">Contactanos</a>
            </nav>
        </div>
    </header><br><br><br><br><br><br><br><br><?php
//conexion
$conexion=mysqli_connect('localhost', 'root', '', 'escuela');

//obtener los datos del formulario
$id_clase=$_POST['id_clase'];
$id_instructor=$_POST['id_empleado'];
$id_area=$_POST['id_area'];
$deporte=$_POST['deporte'];
$hora_inicio=$_POST['hora_inicio'];
$hora_fin=$_POST['hora_fin'];
$dia_1=$_POST['dia_1'];
$dia_2=$_POST['dia_2'];


//mostrar lo obtenido

echo "<p> se ha agregado con exito lo siguiente a la BD</p>";
echo "<p> id_clase". $id_clase. "</p>";
echo "<p> id_instructor:". $id_instructor. "</p>";
echo "<p> id_area:". $id_area. "</p>";
echo "<p> deporte:". $deporte. "</p>";
echo "<p> inicia:". $hora_inicio. "</p>";
echo "<p> finaliza:". $hora_fin. "</p>";
echo "<p> dia 1:". $dia_1. "</p>";
echo "<p> dia 2:". $dia_2. "</p>";



//consultar el inserte de datos
$consulta= "INSERT INTO clase(id_clase, id_empleado, id_area, deporte, hora_inicio, hora_fin, dia_1, dia_2) VALUES ('$id_clase', '$id_instructor', '$id_area', '$deporte', '$hora_inicio', '$hora_fin', '$dia_1', '$dia_2')";

//ejecutar consulta
mysqli_query($conexion, $consulta);
//cerrar la conexion
mysqli_close($conexion);
?>
</body>
</html>