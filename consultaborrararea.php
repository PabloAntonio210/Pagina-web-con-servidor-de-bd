<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATOS BORRADOS</title>
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
    <br><br><br><br> <br><br><br><br>
<?php
$conexion=new mysqli("localhost", "root", "", "escuela") or die (mysqli_error($mysqli));

$su_id_area=$_POST["id_area"];
echo "<p> se ha eliminado con exito el empleado con el ID: ". $su_id_area. "</p>";
$consulta="DELETE FROM area WHERE id_area='$su_id_area'";

mysqli_query($conexion, $consulta);
mysqli_close($conexion);
?>
</body>
</html>