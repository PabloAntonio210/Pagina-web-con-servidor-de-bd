<?php
require "consulta.php";
$query="SELECT * from area";
$resultado=$conexion -> query ($query);
?>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>DATOS AREA</title>
        <link rel="stylesheet" href="datos.css">
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
    <br><br><br><br><br><br><br>
    <center><h1>DATOS DE AREAS</h1></center>
    <table>
        <tr>
            <td>id area</td>
            <td>id clase</td>
            <td>nombre_area</td>
</tr>
<?php while ($fila=$resultado ->fetch_assoc()){?>
    <tr>
        <td><?=$fila ['id_area'];?></td>
        <td><?=$fila ['id_clase'];?></td>
        <td><?=$fila ['nombre_area'];?></td>
</tr>
<?php }?>
</table>
</body>
</html>