<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITAR ALUMNO</title>
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
    <br><br><br><br><br><br><br><b></b>
<FORM ACTION="consultaeditaalumno.php" method="POST">
<p> <label >MODIFICAR ALUMNO</label>
<p> <label >ID: </label>
    <input type="int" name="id_alumno" class="field"/>
</p>
<p> <label >Proporciona el id del plan:  </label>
    <input type="text" name="id_plan" class="field"/>
</p>
<p> <label >nombre:  </label>
    <input type="text" name="nombre" class="field"/>
</p>
<p> <label >apellido: </label>
    <input type="text" name="apellido" class="field"/>
</p>
<p> <label >genero </label>
    <input type="text" name="genero" class="field"/>
</p>
<p> <label >direccion </label>
    <input type="text" name="direccion" class="field"/>
</p>
<p> <label >telefono: </label>
    <input type="text" name="telefono" class="field"/>
</p>
<p> <label >correo : </label>
    <input type="email" name="gmail" class="field"/>
</p>
<p> <label >fecha de nacimiento </label>
    <input type="date" name="fecha_nacimiento" class="field"/>
</p>
<p> <label >Condicion Fisica: </label>
    <input type="text" name="condicion_fisica" class="field"/>
</p>
<p class="center-content"><input class="boton" type="submit" name="enviar" value="enviar"></p>
</FORM>
</body>
</html>