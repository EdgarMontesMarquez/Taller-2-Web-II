<?php

$numeroUno =$_GET['numeroUno'];
$numeroDos = $_GET['numeroDos'];

 echo esPrimoRelativo($numeroUno, $numeroDos) ? "Son primos relativos" : "No son primos relativos";

function esPrimoRelativo($numeroUno, $numeroDos){
   
    $esPrimoRelativo = true;

    if ($numeroUno % $numeroDos == 0|| 
        $numeroDos % $numeroUno == 0)

        $esPrimoRelativo = false;

        else {


            //Se obtiene los divisores del primer comentario y se verifica si alguno de ellos divide al segundo

            $limite = $numeroUno/2;

            for ($i=2; $i <= $limite && $esPrimoRelativo && $i <= $numeroDos; $i++) { 
                if ($numeroUno % $i == 0 && $numeroDos %  $i == 0)

                $esPrimoRelativo = false;
            }

        } 
    
    

    return $esPrimoRelativo;


}

?>
