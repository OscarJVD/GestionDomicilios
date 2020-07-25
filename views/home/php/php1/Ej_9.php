<?php 


$num = $_POST['num'];



$c_pul = $num /2.54;
$c_pies = $num / 30.48;


echo  $num . " centimetros convertidos a pulgadas es: " . "<b>"  . $c_pul . "</b>"  .
"<br><br>";	
echo  $num . " centimetros convertidos a pies es: ". "<b>" . $c_pies . "</b>" ;





 ?>