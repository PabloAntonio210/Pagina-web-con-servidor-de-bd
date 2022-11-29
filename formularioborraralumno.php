<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ELIMINAR ALUMNO</title>
    <link rel="stylesheet" href="formulario.css">
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
    <br><br><br><br><br> <br><br><br><br><br>
    <FORM ACTION="consultaborraralumno.php" method="post">
        <p><label>BORRAR ALUMNO</label></p>
<p><label> PROPORCIONE EL ID DEL ALUMNO QUE DESEA ELIMINAR</label>
    <input type="int" name="id_alumno" class="field">
</p>
<p class="center-content"><input class="boton" type="submit" name="eliminar" value="eliminar"></p>
</FORM>
</body>
</html>