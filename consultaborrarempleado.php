<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATOS ELIMINADOS</title>
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
$conexion=new mysqli("localhost", "root", "", "escuela") or die (mysqli_error($mysqli));

$su_id_empleado=$_POST["id_empleado"];
echo "<p> se ha eliminado con exito el empleado con el ID: ". $su_id_empleado. "</p>";
$consulta="DELETE FROM empleado WHERE id_empleado='$su_id_empleado'";

mysqli_query($conexion, $consulta);
mysqli_close($conexion);
?>
</body>
</html>