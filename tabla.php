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
        <h2 id="texth1" >Comercios</h2>
        <a  href="ingresarcomercio.php">Agregar comercio</a>
        <form class="formularioContacto contenedor" action= "modificarcomercio.php" method="post" >
        <div id="tabla" class="contenedor">

<?php
   require 'config.php';
   require_once "Database.php";
    $db = Database::getInstance();
    $sql ="SELECT * FROM comercios";
    $stm = $db->query($sql);
    $comercios = $stm->fetchAll();
    
  
?>

 <div id="tabla" class="contenedor">
    <table>
        <tr>
            <td>ID</td>
            <td>CUIT</td>
            <td>RAZON SOCIAL</td>
            <td>USUARIO</td>
        </tr>
<?php
            foreach ($comercios as &$comercio) { ?>
            <?php $a=0; ?>
            <?php
                $a++;
             $id = $comercio['id']; 
             $cuit = $comercio['cuit']; 
             $razon_social = $comercio['razon_social']; 
             $user_id = $comercio['user_id'];
            ?>
             
        <?php
        echo "<pre>";
        echo "</pre>";
        ?>
            <tr>
        <td><?php echo $id?></td>
        <td><?php echo $cuit?></td>
        <td><?php echo $razon_social?></td>
        <td><?php echo $user_id?></td>
        
        

    </tr> 
    
    <?php
        }
        ?>
        <td><button type="submit" class="boton boton--primario">Modificar comercio</button></td> 
        <td><a href="eliminarcomercio.php">ELIMINAR COMERCIO</a></td>

</div>


</div>
</table>
  
</div>
<br>

</br>
</form>




</body>

</html>

