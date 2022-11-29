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
                <a href="formularioregistrapago.php">registrar</a>
                <a href="formularioeditapago.php">Editar</a>
                <a href="formularioborrarpago.php">Borrar</a>
                <a href="formularioconsultapago.php">Consulta</a>
                <a href="https://wa.me/+524428497005">Contactanos</a>
            </nav>
        </div>
    </header>
    <br><br><br><br><br><br><br><?php
//conexion
$conexion=mysqli_connect('localhost', 'root', '', 'escuela');

//obtener los datos del formulario
$su_id_plan=$_POST['id_plan'];
$su_precio=$_POST['precio'];
$su_metodo_pago=$_POST['metodo_pago'];

//mostrar lo obtenido

echo "<p> se ha agregado con exito lo siguiente a la BD</p>";
echo "<p> id Plan:". $su_id_plan. "</p>";
echo "<p> precio:". $su_precio. "</p>";
echo "<p> metodo_pago:". $su_metodo_pago. "</p>";

//consultar el inserte de datos
$consulta= "INSERT INTO plan_pago(id_plan, precio, metodo_pago) VALUES ('$su_id_plan', '$su_precio', '$su_metodo_pago')";

//ejecutar consulta
mysqli_query($conexion, $consulta);
//cerrar la conexion
mysqli_close($conexion);
?>
</body>
</html>