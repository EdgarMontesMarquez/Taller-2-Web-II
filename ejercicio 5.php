<?php 
    $lista = $_GET['4,9,7'];
    foreach ($lista as $numero) {

        echo str_repeat("*","$numero");
        echo "<br>";
    }

?>  