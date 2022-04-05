<?php
 require 'config.php';
 require_once "Database.php";


  $db = Database::getInstance();
  $sql ="SELECT * FROM `comercios` WHERE `id` LIKE '$_POST[id]'";
  $stm = $db->query($sql);




    $id =  $_POST["id"];
    $cuit = $_POST["cuit"];
    $razon = $_POST["razonSocial"];
    $usuario = $_POST["usuario"];

    
    $sql2 ="UPDATE `comercios` SET `cuit` = '$cuit', `razon_social` = '$razon', `user_id` = '$usuario' WHERE `comercios`.`id` = '$_POST[id]'";
    $stm2 = $db->query($sql2);


    if($stm2){

        echo "<script> alert('comercio modificado');
        location.href = 'tabla.php';
        </script>";
     
     }else{
         echo "<script> alert('no se modifico comercio');
         location.href = 'tabla.php';
         </script>";
     }

