<?php 



$conteo=0;


for ($i=1; $i < 101; $i++) { 
	
	if ($i % 2 !=0) {

		echo $i . ", "; 

        $conteo++;


          
	}



}
echo "<br><br><br>";

echo "Hay  " . "<b> " . $conteo . " </b>" . " numeros impares"; 




?>