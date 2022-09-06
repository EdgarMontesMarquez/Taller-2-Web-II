<?php
$numero=array("10","9","80");
rsort($numero);

$clength=count($numero);
for($x=0; $x < $clength; $x++)
  {
  echo $numero[$x];
  echo "<br>";
  }
?>