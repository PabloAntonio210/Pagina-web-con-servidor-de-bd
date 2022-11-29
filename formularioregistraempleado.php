<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRAR EMPLEADO</title>
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
<FORM ACTION="consultaregistraempleado.php" method="POST">
<p><label> REGISTRO DE EMPLEADOS</label></p>
<p> <label >ID empleado: </label>
    <input type="int" name="id_empleado" class="field" />
</p>
<p> <label >ID area:  </label>
    <input type="int" name="id_area" class="field"/>
</p>
<p> <label >nombre:  </label>
    <input type="text" name="nombre" class="field" />
</p>
<p> <label >apellido: </label>
    <input type="text" name="apellido" class="field" />
</p>
<p> <label >genero: </label>
    <input type="text" name="genero" class="field" />
</p>
<p> <label >direccion: </label>
    <input type="text" name="direccion" class="field"/>
</p>
<p> <label >puesto:  </label>
    <input type="text" name="puesto" class="field"/>
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
<p> <label >Curriculum: </label>
    <input type="text" name="curriculum" class="field"/>
</p>
<p> <label >comentario:  </label>
    <input type="text" name="comentario" class="field"/>
</p>
<p class="center-content"><input  type="submit" name="enviar" value="enviar" class="boton"></p>
</FORM>
</body>
</html>