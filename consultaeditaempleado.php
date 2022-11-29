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
    <br><br><br><br><br><br><br><br>
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


//consultar el inserte de datos
$consulta= "UPDATE  empleado SET id_empleado='$su_id_empleado', id_area='$su_id_area', nombre='$su_nombre', apellido='$su_apellido', genero='$su_genero', direccion='$su_direccion', puesto='$su_puesto', telefono='$su_telefono', gmail='$su_gmail', fecha_nacimiento='$su_fecha_nacimiento', curriculum='$su_curriculum', comentario='$su_comentario' WHERE id_empleado='$su_id_empleado'";

//ejecutar consulta
mysqli_query($conexion, $consulta);
//cerrar la conexion
mysqli_close($conexion);
echo "se ha actualizado el empleado con el ID:$su_id_empleado"
?>
</body>
</html>