<?php
require "consulta.php";
$query="SELECT * from alumno";
$resultado=$conexion -> query ($query);
?>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>REGISTRO DE ALUMNOS</title>
        <link rel="stylesheet" href="datos.css">
        <link rel="stylesheet" href="index.css">
</head>
<body>
<header>
        <div class="container">
            <p class="logo"><img src="media/descarga.jpg" alt="logo" width="100px"></p>
            <nav>
                <a href="index.php">Inicio</a>
                <a href="formularioregistraalumno.php">registrar</a>
                <a href="formularioeditaalumno.php">Editar</a>
                <a href="formularioborraralumno.php">Borrar</a>
                <a href="formularioconsultaalumno.php">Consulta</a>
                <a href="https://wa.me/+524428497005">Contactanos</a>
            </nav>
        </div>
    </header>
    <br><br><br><br><br><br><br>
    <center><h1>DATOS DE ALUMNOS REGISTRADOS</h1></center>
    <table>
        <tr>
            <td>id alumno</td>
            <td>id plan</td>
            <td>nombre</td>
            <td>apellido</td>
            <td>genero</td>
            <td>direccion</td>
            <td>telefono</td>
            <td>gmail</td>
            <td>fecha_nacimiento</td>
            <td>condicion_fisica</td>
</tr>
<?php while ($fila=$resultado ->fetch_assoc()){?>
    <tr>
        <td><?=$fila ['id_alumno'];?></td>
        <td><?=$fila ['id_plan'];?></td>
        <td><?=$fila ['nombre'];?></td>
        <td><?=$fila ['apellido'];?></td>
        <td><?=$fila ['genero'];?></td>
        <td><?=$fila ['direccion'];?></td>
        <td><?=$fila ['telefono'];?></td>
        <td><?=$fila ['gmail'];?></td>
        <td><?=$fila ['fecha_nacimiento'];?></td>
        <td><?=$fila ['condicion_fisica'];?></td>
</tr>
<?php }?>
</table>
</body>
</html>