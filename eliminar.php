<?php
 require 'config.php';
 require_once "Database.php";
  $db = Database::getInstance();
  $sql ="SELECT * FROM `comercios` WHERE `id` LIKE '$_POST[datoEliminar]'";
  $stm = $db->query($sql);



  if ($stm) {
    $sql2 ="DELETE FROM `comercios` WHERE `comercios`.`id` = '$_POST[datoEliminar]'";
    $stm2 = $db->query($sql2);

     echo "Se efectuó el borrado del comercio";
  } else {
    echo "No existe ese comercio.";
  }
  ?>
  <a href="tabla.php">Cancelar</a>