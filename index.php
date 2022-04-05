<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset ="utf-8">
    <title>inicio de sesion</title>
    <link rel="stylesheet" href="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gugi&display=swap" rel="stylesheet">
    <link href="css/normalice.css" rel="stylesheet">
    <link href="css/app.css" rel="stylesheet" >
</head>
<body>
<h1>Iniciar sesion</h1>
    <script src="app.js"></script>
    <form name=form action="inicio secion" class="formularioBase">
        <div class="campo">
            <label class="campo__label" for="nombre">Usuario</label>
            <input type =texto name=login>
        </div>
        <div class="campo">
            <label class="campo__label">Contraseña</label>
            <input type=password name=password>
        </div>

        <div class="campo">
            <input  onclick =ir() type=button value="Iniciar" class="boton boton--primario">
        </div>



    </form>




    </html>