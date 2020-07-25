<?php 



$arr1 = array(1,2,3,4,5);
$arr2 = array(5,7,6,8,9);
$suma = [];
$resta = [];

echo "<table border='6'>";
echo "<tr>";
echo "<th> Vector1  =  </th>";

for ($i=0; $i <count($arr1) ; $i++) { 
	
   echo "<td colspan='2'>" . "<span>". $arr1[$i] ."</span>". "</td>" . "   "	;

} 

echo "</tr>";

echo "\n";

echo "<tr>";

echo "<th> Vector2  =  </th>";

for ($i=0; $i <count($arr2) ; $i++) { 
	
   echo "<td colspan='2'>" . "<span>". $arr2[$i] ."</span>". "</td>" . "   "	;

}

echo "</tr>";

echo "\n";

echo "<tr>";

echo "<th> Suma     =  </th>";
//LLENAR ARRAY
for ($i=0; $i <5 ; $i++) { 
	
	array_push($suma, $arr1[$i] + $arr2[$i] ); 

   echo "<td colspan='2'>" . "<span>". $suma[$i]."</span>" . "</td>" . "  "	;

}

echo "</tr>";

echo "\n";

echo "<tr>";

echo "<th> Resta    = </th>";

for ($i=0; $i <5 ; $i++) { 
	
	array_push($resta, $arr1[$i] - $arr2[$i] ); 

   echo "<td colspan='1'>" . "<span>". $resta[$i]."</span>" . "<td>" . "  "	;

}

echo "</tr>";

echo "</table>";


 ?>