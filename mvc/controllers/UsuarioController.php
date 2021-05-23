<?php
   class UsuarioController{
     public function crear(){
       require_once 'views/usuarios/crear.php';
     }

     public function guardar(){
       require_once 'models/Usuario.php';
       $user = new Usuario();
       $user->setNombre($_POST['txNombre']);
       $user->setApellido($_POST['txApellido']);
       $user->setEmail($_POST['txEmail']);
       $guardar = $user->Create();
     }

     public function mostrarTodos(){
       require_once 'models/Usuario.php';
       $user = new Usuario();
       $resultUser = $user->MostrarTodos('usuarios');
       require_once 'views/usuarios/mostrar.php';
     }

     public function delete(){
       $id 		= 	$_REQUEST['id'];   
       require_once 'models/Usuario.php';
       $user = new Usuario();
       $resultUser = $user->Delete('usuarios',$id);  
     }

     public function viewUpdate(){
       require_once 'views/usuarios/modificar.php';
     }

     public function update(){
       $id 		= 	$_REQUEST['id'];
       require_once 'models/Usuario.php';
       $user = new Usuario();
       $user->setNombre($_POST['txNombre']);
       $user->setApellido($_POST['txApellido']);
       $user->setEmail($_POST['txEmail']);
       $actualizar = $user->Update($id);
     }
   }
?>