<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MODIFICAR CLASE</title>
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
<FORM ACTION="consultaeditaclase.php" method="POST">
    <p><label >EDITA UNA CLASE</label></p>
<p> <label >ID clase: </label>
    <input type="int" name="id_clase" class="field"/>
</p>
<p> <label >ID instructor:  </label>
    <input type="int" name="id_empleado" class="field"/>
</p>
<p> <label >ID area  </label>
    <input type="int" name="id_area" class="field"/>
</p>
<p> <label >deporte: </label>
    <input type="text" name="deporte" class="field"/>
</p>
<p> <label >hora_inicio: </label>
    <input type="text" name="hora_inicio" class="field"/>
</p>
<p> <label >hora_fin: </label>
    <input type="text" name="hora_fin" class="field"/>
</p>
<p> <label >dia_1:  </label>
    <input type="text" name="dia_1" class="field"/>
</p>
<p> <label >dia_2: </label>
    <input type="text" name="dia_2" class="field" />
</p>
<p class="center-content"><input type="submit" name="enviar" value="enviar" class="boton"></p>
</FORM>
</body>
</html>