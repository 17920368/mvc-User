<?php
   require_once 'config/database.php';
   
   class ModeloBase{
     public $db;

     public function __construct(){
       $this->db = database::conectar();
     }

     public function MostrarTodos($tabla){
       $query = $this->db->query("SELECT * FROM $tabla");
       return $query;
     }

     public function Delete($table, $id){
       $query=$this->db->query("DELETE FROM " . $table . " WHERE id=$id");
       return $query;
     }

     public function DeleteAll($table){
      $query=$this->db->query("TRUNCATE TABLE $table");
      return $query;
     }
   }
?>