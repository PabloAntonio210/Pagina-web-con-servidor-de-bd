<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ELIMINAR AREAS</title>
    <link rel="stylesheet" href="formulario.css">
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
    <br><br><br><br>
    <FORM ACTION="consultaborrararea.php" method="post">
        <P><Label>ELIMINA UN AREA</Label></P>
<p><label> PROPORCIONE EL ID DEL AREA QUE DESEA ELIMINAR</label>
    <input type="int" name="id_area" class="field">
</p>
<p class="center-content"><input class="boton" type="submit" name="eliminar" value="eliminar"></p>
</FORM>
</body>
</html>