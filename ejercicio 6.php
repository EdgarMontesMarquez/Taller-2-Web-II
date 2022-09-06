<?php
/**
 CONTAR VOCALES
 */
$frase = $_GET['cadena'];
$numVocales = contarVocales($frase);
echo "<h2>Cantidad de vocales: $numVocales</h2> ";

function contarVocales($frase){
	$vocalesEncontradas = 0;
	
	$frase = strtolower($frase);
	
	$longitud = strlen($frase);

	for ($i= 0; $i < $longitud; $i++) { 
		
		if (in_array($frase[$i], ["a", "e", "i", "o", "u"])) {
			$vocalesEncontradas++;
		}
	}
	return $vocalesEncontradas;
}
/**
 CONTAR MAYÚSNUSCULAS
 */
$frase= $_GET['cadena'];
$numMayus = ContarMayus ($frase);
echo "<h2>Cantidad de mayúsculas: $numMayus</h2> ";

function ContarMayus($cadena){
    $contador=0;
    $cantidad = strlen($cadena);

for($j=0;$j<$cantidad;$j++){

    for($i=1;$i<=90;$i++){
        if($cadena[$j]==chr($i)){
            $contador++;
        }
    }
}
return $contador;
}
/**
 CONTAR MINUSCULAS
 */
$frase=$_GET['cadena'];
$numMinus = ContarMinus ($frase);
echo "<h2>Cantidad de minusculas: $numMinus</h2> ";

function ContarMinus($cadena){
    $contador=0;

}
/**
 CONTAR CONSONATES
 */
$cadena =$_GET['cadena'];
$vocales = 0;
$consonantes = 0;
foreach (count_chars($cadena, 1) as $i => $val) 
	{
	if (preg_match('/[aeiouáéíóúü]/i',chr($i)))
            {
	        $vocales = $vocales + $val;
	        } else if (preg_match('/[a-z]/i',chr($i)))
		        {
	             $consonantes= $consonantes + $val;
		        }					
	}
echo "<h2>Cantidad de consonantes: $consonantes</h2>";
?>
