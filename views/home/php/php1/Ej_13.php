<?php 



$n1=0;

$n2=1;

$num = $_POST['num'];

for ($i=0; $i<$num;$i++){

	$suma=$n1+$n2;

	$n1=$n2;

	$n2=$suma;

	echo $suma."</br>";

	$aux[$i] = $suma;
}




?>