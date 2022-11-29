<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATOS CAMBIADOS</title>
    <link rel="stylesheet" href="formulario.css">
    <link rel="stylesheet" href="index.css">
</head>
<body>
<header>
        <div class="container">
            <p class="logo"><img src="media/descarga.jpg" alt="logo" width="100px"></p>
            <nav>
            <a href="index.php">Inicio</a>
                <a href="formularioregistrapago.php">registrar</a>
                <a href="formularioeditapago.php">Editar</a>
                <a href="formularioborrarpago.php">Borrar</a>
                <a href="formularioconsultapago.php">Consulta</a>
                <a href="https://wa.me/+524428497005">Contactanos</a>
            </nav>
        </div>
    </header><br><br><br><br><br><br><br><br>
<?php
$conexion=mysqli_connect("localhost", "root", "", "escuela");

$su_id_plan=$_POST['id_plan'];
$su_precio=$_POST['precio'];
$su_metodo_pago=$_POST['metodo_pago'];

$consulta="UPDATE plan_pago SET id_plan='$su_id_plan', precio='$su_precio', metodo_pago='$su_metodo_pago' WHERE id_plan='$su_id_plan'";    
mysqli_query($conexion, $consulta);
//cerrar la conexion
mysqli_close($conexion);

echo "Se ha actualizado el pago con el  ID: ".$su_id_plan;
?>
</body>
</html>