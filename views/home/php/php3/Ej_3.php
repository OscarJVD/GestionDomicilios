<?php 

$arr1 = array(1,2,3,4,5);


echo "<table border='6'>";
echo "<tr>";
echo "<th>Vector  =  </th>";

for ($i=0; $i <count($arr1) ; $i++) { 
	
	echo "<td colspan='2'>". $arr1[$i] . "</td>";

} 

echo "</tr>";

echo "\n";

echo "<tr>";

echo "<th>Numeros Impares=</th>";

for ($i=0; $i <count($arr1) ; $i++) { 
	
	if (($arr1[$i]%2)!=0) {

		echo "<td colspan='1'>" . "<span>". $arr1[$i]."</span>" . "<td>";

	}


}

echo "</tr>";

echo "\n";

echo "<tr>";

echo "<th>Numeros pares=</th>";

for ($i=0; $i <count($arr1) ; $i++) { 
	
	if (($arr1[$i]%2)==0) {

		echo "<td colspan='1'>" . "<span>". $arr1[$i]."</span>" . "<td>";

	}
}

echo "</tr>";

echo "</table>";





?>