<?php 

$contraseña = $_GET['contraseña'];


function validar_clave($contraseña,$ErrorClave){
   if(strlen($contraseña) < 6){
      $ErrorClaveUsuario= "El nombre de usuario debe contener al menos 6 caracteres";
      return false;
   }

   if(strlen($contraseña) > 12){
      $ErrorClaveUsuario = "El nombre de usuario no puede contener más de 12 caracteres";
      return false;
   }

   if (preg_match ('`[^a-zA-Z\d]`', $contraseña)) {
      $ErrorClaveUsuario = "El nombre de usuario puede contener solo letras y números";
      return false;
   }
   
   $ErrorClaveUsuario = "";
   return true;
}

if ($contraseña){

   $ErrorClaveUsuarioEncontrado="";
   if (validar_clave($contraseña, $ErrorClaveUsuarioEncontrado)){
      echo "<h1>True</h1>";

   }else{
      
      echo "<h1>False</h1>" .$ErrorClaveUsuarioEncontrado;
   }
}
?>
