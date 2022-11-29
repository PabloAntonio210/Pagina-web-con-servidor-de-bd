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
                <a href="formularioregistrapago.php">registrar</a>
                <a href="formularioeditapago.php">Editar</a>
                <a href="formularioborrarpago.php">Borrar</a>
                <a href="formularioconsultapago.php">Consulta</a>
                <a href="https://wa.me/+524428497005">Contactanos</a>
            </nav>
        </div>
    </header><br><br><br><br><br><br><br><br><?php
$conexion=new mysqli("localhost", "root", "", "escuela") or die (mysqli_error($mysqli));

$su_id_plan=$_POST["id_plan"];
echo "<p> se ha eliminado con exito el empleado con el ID: ". $su_id_plan. "</p>";
$consulta="DELETE FROM plan_pago WHERE id_plan='$su_id_plan'";

mysqli_query($conexion, $consulta);
mysqli_close($conexion);
?>
</body>
</html>