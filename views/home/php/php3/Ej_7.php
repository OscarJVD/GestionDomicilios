<?php 


$suma = 0;
$num = 3;

while ($num <= 99) {
	
	echo $num . ", ";
	$suma+=$num;
	$num+=3;
	
	if ($num == 42 || $num == 84) {

		echo "\n";

	}

}


 ?>