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
                <a href="formularioregistraclase.php">registrar</a>
                <a href="formularioeditaclase.php">Editar</a>
                <a href="formularioborrarclase.php">Borrar</a>
                <a href="formularioconsultaclase.php">Consulta</a>
                <a href="https://wa.me/+524428497005">Contactanos</a>
            </nav>
        </div>
    </header>
    <br><br><br><br><br><br><br><br><br><br>
<?php 
//conexion a la BD
$conexion=mysqli_connect("localhost", "root", "", "escuela");

//se recuperan el id del formulario
$id_clase=$_POST['id_clase'];
$id_instructor=$_POST['id_empleado'];
$id_area=$_POST['id_area'];
$deporte=$_POST['deporte'];
$hora_inicio=$_POST['hora_inicio'];
$hora_fin=$_POST['hora_fin'];
$dia_1=$_POST['dia_1'];
$dia_2=$_POST['dia_2'];

//consulta SQL actualizacion de datos
$consulta= "UPDATE clase SET id_clase='$id_clase', id_empleado='$id_instructor', id_area='$id_area', deporte='$deporte', hora_inicio='$hora_inicio', hora_fin='$hora_fin', dia_1='$dia_1', dia_2='$dia_2' WHERE id_clase='$id_clase'";

//ejecucion de la consulta anterior
mysqli_query($conexion, $consulta);
//cerrar la conexion
mysqli_close($conexion);

echo "Se ha actualizado la clase con el  ID: ".$id_clase;
?>
</body>
</html>