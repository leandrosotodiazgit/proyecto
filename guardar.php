<?php


require 'config.php';
require_once "Database.php";

    $cuit = $_POST["cuit"];
    $razon = $_POST["razonSocial"];
    $usuario = $_POST["usuario"];
						$db = Database::getInstance();
						$sql = "INSERT INTO `comercios` (`id`, `cuit`, `razon_social`, `user_id`) VALUES (NULL, '$cuit', '$razon', '$usuario') ";
						$stm = $db->query($sql);
      
                        if($stm){

                            echo "<script> alert('correcto');
                             location.href = '../index.html';
                            </script>";
                         
                         }else{
                             echo "<script> alert('incorrecto');
                             location.href = '../index.html';
                             </script>";
                         }
                         



            





?>