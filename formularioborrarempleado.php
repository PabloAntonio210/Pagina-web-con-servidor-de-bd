<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ELIMINAR EMPLEADO</title>
    <link rel="stylesheet" href="formulario.css">
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
    <FORM ACTION="consultaborrarempleado.php" method="post">
        <p><label>BORRAR EMPLEADO</label></p>
<p><label> PROPORCIONE EL ID DEL EMPLEADO QUE DESEA ELIMINAR</label>
    <input type="int" name="id_empleado" class="field">
</p>
<p class="center-content"><input type="submit" name="eliminar" class="boton" value="eliminar"></p>
</FORM>
</body>