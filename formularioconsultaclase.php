<?php
require "consulta.php";
$query="SELECT * from clase";
$resultado=$conexion -> query ($query);
?>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>DATOS CLASE</title>
        <link rel="stylesheet" href="datos.css">
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
    </header><br><br><br><br><br><br><br><br>
    <table>
        <center><h1>DATOS DE CLASES</h1></center>
        <tr>
            <td>id clase</td>
            <td>id instructor</td>
            <td>id area</td>
            <td>deporte</td>
            <td>hora Inicio</td>
            <td>hora fin</td>
            <td>dia 1</td>
            <td>dia 2</td>
</tr>
<?php while ($fila=$resultado ->fetch_assoc()){?>
    <tr>
        <td><?=$fila ['id_clase'];?></td>
        <td><?=$fila ['id_empleado'];?></td>
        <td><?=$fila ['id_area'];?></td>
        <td><?=$fila ['deporte'];?></td>
        <td><?=$fila ['hora_inicio'];?></td>
        <td><?=$fila ['hora_fin'];?></td>
        <td><?=$fila ['dia_1'];?></td>
        <td><?=$fila ['dia_2'];?></td>
</tr>
<?php }?>
</table>
</body>
</html>