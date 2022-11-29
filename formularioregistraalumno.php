<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRAR</title>
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
    <br><br><br><br><br><br><br>
<FORM ACTION="consultaregistraalumno.php" method="POST">
    <p><label>REGISTRO DE ALUMNOS</label></p>
<p> <label  >ID: </label>
    <input type="int" name="id_alumno" class="field"  maxlength="10" minlength="1" title="ingresa un id de alumno" required />
</p>
<p> <label >Proporciona el id del plan:  </label>
    <input type="text" name="id_plan" class="field" minlength="1" maxlength="10" required />
</p>
<p> <label >nombre:  </label>
    <input type="text" name="nombre" class="field" maxlength="45" required />
</p>
<p> <label >apellidos: </label>
    <input type="text" name="apellido" class="field" maxlength="50" required />
</p>
<p> <label >genero </label>
    <input type="text" name="genero" class="field" maxlength="45" required />
</p>
<p> <label >direccion </label>
    <input type="text" name="direccion" class="field" maxlength="100" required/>
</p>
<p> <label >telefono: </label>
    <input type="text" name="telefono" class="field" required minlength="10" maxlength="10"/>
</p>
<p> <label >correo : </label>
    <input type="email" name="gmail" class="field" maxlength="60" required/>
</p>
<p> <label >fecha de nacimiento </label>
    <input type="date" name="fecha_nacimiento" class="field"  required/>
</p>
<p> <label >Condicion Fisica: </label>
    <input type="text" name="condicion_fisica" maxlength="110" class="field"/>
</p>
<p class="center-content"><input class="boton" type="submit" name="enviar" value="enviar"></p>
</FORM>
</body>
</html>