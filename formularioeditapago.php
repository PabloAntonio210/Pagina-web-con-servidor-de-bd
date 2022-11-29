<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITAR PAGO</title>
    <link rel="stylesheet" href="formulario.css">
    <link rel="stylesheet" href="index.css">
</head>
<body>
<header>
        <div class="container">
            <p class="logo"><img src="media/descarga.jpg" alt="logo" width="100px"></p>
            <nav>
            <a href="formularioregistrapago.php">registrar</a>
                <a href="formularioeditapago.php">Editar</a>
                <a href="formularioborrarpago.php">Borrar</a>
                <a href="formularioconsultapago.php">Consulta</a>
                <a href="https://wa.me/+524428497005">Contactanos</a>
            </nav>
        </div>
    </header>
    <br><br><br><br><br><br>
<FORM ACTION="consultaeditapago.php" method="POST">
    <p><label >EDITA LOS DATOS DE PAGO</label></p>
    <p> <label >id plan: </label>
        <input type="int" name="id_plan" class="field"/>
    </p>
    <p> <label >precio: </label>
        <input type="int" name="precio" class="field"/>
    </p>
    <p> <label >metodo_pago: </label>
        <input type="text" name="metodo_pago" class="field">
    </p>
    <p class="center-content"><input class="boton" type="submit" name="enviar" value="enviar"></p>
    </FORM>
    </body>
    </html>