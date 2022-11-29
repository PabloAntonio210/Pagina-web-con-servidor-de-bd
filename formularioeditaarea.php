<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITAR AREAS</title>
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
<FORM ACTION="consultaeditaarea.php" method="POST">
    <p><label >EDITA UN AREA</label></p>
    <p> <label >id_area: </label>
        <input type="int" name="id_area" class="field"/>
    </p>
    <p> <label >id_clase: </label>
        <input type="int" name="id_clase" class="field"/>
    </p>
    <p> <label >nombre_area: </label>
        <input type="text" name="nombre_area" class="field"/>
    </p>
    <p class="center-content"><input class="boton" type="submit" name="enviar" value="enviar"></p>
</FORM>
</body>
</html>