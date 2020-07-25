<?php 


$lim = $_POST['lim'];
$sum = 0;

for ($i=0; $i <= $lim ; $i++) { 
	
	$sum += $i;

}

echo "El resultado es: " . $sum;



 ?>