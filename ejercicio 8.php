<?php


    $numeroUno = $_GET['numeroUno'];
    //$numerosUno = implode($numeroUno);
    $listaUno = str_split($numeroUno);
    $numeroDos = $_GET['numeroDos'];
    //$numerosDos = implode($numeroDos);
    $listaDos = str_split($numeroDos);;

    function intersectar($listUno,$listDos)
    {
        if (array_intersect($listUno,$listDos)) {
            echo "<h2>True</h2>";
        }
        else {
            echo "<h2>False</h2>";
        }
    }

    intersectar($listaUno,$listaDos);

?>