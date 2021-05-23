<?php
   class database{
     public static function conectar(){
       $conexion = new mysqli("localhost", "root", "", "bdNombre");
       $conexion->query("SET NAME 'utf8");
       return $conexion;
     }
   }
?>