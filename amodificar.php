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
        <h2 id="texth1" >Ingrese el nuevo comercio</h2>
        <form class="formularioContacto contenedor" action= "modificar.php" method="post" >
            <div class="campo">
            <label class="campo__label">ID</label>
                <input 
                    class="campo__field"
                    type="text" 
                    placeholder="Ingrese nuevo id" 
                    name="id"
                >
                </div>  
                <div class="campo"> 
                <label class="campo__label">Cuit</label>
                <input 
                    class="campo__field"
                    type="text" 
                    placeholder="Ingrese nuevo cuit" 
                    name="cuit"
                >
            </div>
            <div class="campo">
                <label class="campo__label">Razon social</label>
                <input 
                    class="campo__field" 
                    type="text" 
                    placeholder="Ingrese nuevo razon social" 
                    name="razonSocial"
                >
            </div>
            <div class="campo">
                <label class="campo__label">Usuario</label>
                <input 
                    class="campo__field" 
                    type="text" 
                    placeholder="Ingrese nuevo Usuario" 
                    name="usuario"
                >
            </div>
           

            <div class="campo">
                <button type="submit" class="boton boton--primario">MANDALE</button>
                <a href="tabla.php">Cancelar</a>
            </div>

            </form>
            </div>
</body>
</html>