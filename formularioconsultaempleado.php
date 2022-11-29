<?php
require "consulta.php";
$query="SELECT * from empleado";
$resultado=$conexion -> query ($query);
?>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>DATOS EMPLEADO</title>
        <link rel="stylesheet" href="datos.css">
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
    <center><h1>DATOS DE EMPLEADOS</h1></center>
    <table>
        <tr>
            <td>id empleado</td>
            <td>id area</td>
            <td>nombre</td>
            <td>apellido</td>
            <td>genero</td>
            <td>direccion</td>
            <td>puesto</td>
            <td>telefono</td>
            <td>gmail</td>
            <td>fecha_nacimiento </td>
            <td>curriculum</td>
            <td>comentario</td>
</tr>
<?php while ($fila=$resultado ->fetch_assoc()){?>
    <tr>
        <td><?=$fila ['id_empleado'];?></td>
        <td><?=$fila ['id_area'];?></td>
        <td><?=$fila ['nombre'];?></td>
        <td><?=$fila ['apellido'];?></td>
        <td><?=$fila ['genero'];?></td>
        <td><?=$fila ['direccion'];?></td>
        <td><?=$fila ['puesto'];?></td>
        <td><?=$fila ['telefono'];?></td>
        <td><?=$fila ['gmail'];?></td>
        <td><?=$fila ['fecha_nacimiento'];?></td>
        <td><?=$fila ['curriculum'];?></td>
        <td><?=$fila ['comentario'];?></td>
</tr>
<?php }?>
</table>
</body>
</html>