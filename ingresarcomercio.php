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
    <div aling="center" class="">
        <h2 id="texth1" >Ingrese un comercio</h2>
        <form class="formularioContacto contenedor" action= "guardar.php" method="post" >
            <div class="campo">
                <label class="campo__label">Cuit</label>
                <input 
                    class="campo__field"
                    type="text" 
                    placeholder="Ingrese cuit" 
                    name="cuit"
                >
            </div>
            <div class="campo">
                <label class="campo__label">Razon social</label>
                <input 
                    class="campo__field" 
                    type="text" 
                    placeholder="Ingrese razon social" 
                    name="razonSocial"
                >
            </div>
            <div class="campo">
                <label class="campo__label">Usuario</label>
                <input 
                    class="campo__field" 
                    type="text" 
                    placeholder="Ingrese Usuario" 
                    name="usuario"
                >
            </div>
           

            <div class="campo">
                <button type="submit" class="boton boton--primario">MANDALE</button>
                <a href="tabla.php">Cancelar</a>
            </div>

