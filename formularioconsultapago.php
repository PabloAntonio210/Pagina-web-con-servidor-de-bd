<?php
require "consulta.php";
$query="SELECT * from plan_pago";
$resultado=$conexion -> query ($query);
?>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>DATOS PAGO</title>
        <link rel="stylesheet" href="datos.css">
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
    <table>
        <center><h1>DATOS DE PAGOS</h1></center>
        <tr>
            <td>id plan</td>
            <td>precio</td>
            <td>metodo pago</td>
</tr>
<?php while ($fila=$resultado ->fetch_assoc()){?>
    <tr>
        <td><?=$fila ['id_plan'];?></td>
        <td><?=$fila ['precio'];?></td>
        <td><?=$fila ['metodo_pago'];?></td>
</tr>
<?php }?>
</table>
</body>
</html>