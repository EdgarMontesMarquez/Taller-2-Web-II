<?php  

echo "<h2> La validacion de su Contraseña es: </h2>";

$contraseña = $_GET ['contraseña'];

function validar_contraseña($contraseña,&$ErrorContraseña){
   if(strlen($contraseña) < 6){
      $ErrorContraseña = "La contraseña debe contener al menos 6 caracteres";
      return false;
   }

   if(strlen($contraseña) > 12){
      $ErrorContraseña = "La contraseña no puede contener más de 12 caracteres";
      return false;
   }


   if (preg_match ('`[^a-zA-Z\d]`', $contraseña)) {
       $ErrorContraseña = "La contraseña solo debe contener letras y números";
       return false;
   }

   if (!preg_match('`[0-9]`',$contraseña)){
      $ErrorContraseña = "La contraseña debe contener al menos un caracter numérico";
      return false;
   }

   $ErrorContraseña = "";
   return true;
}

if ($contraseña){

   $ErrorEncontrado="";
   if (validar_contraseña($contraseña, $ErrorEncontrado)){
      echo "True";

   }else{
      
      echo "False: ".$ErrorEncontrado;
   }
}

?>