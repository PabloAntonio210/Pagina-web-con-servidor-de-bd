<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ELIMINAR CLASE</title>
    <link rel="stylesheet" href="formulario.css">
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
    <FORM ACTION="consultaborrarclase.php" method="post">
        <p><label>ELIMINAR CLASE</label></p>
<p><label> PROPORCIONE EL ID DE LA CLASE QUE DESEA ELIMINAR</label>
    <input type="int" name="id_clase" class="field">
</p>
<p class="center-content"><input type="submit" name="eliminar" value="eliminar" class="boton"></p>
</FORM>
</body>