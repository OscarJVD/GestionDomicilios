<?php 
$arr = array(1,2,3,4,5,6);
echo "<table border='6' class='tablamrd'>
	    <tr>
	    <th>Vector  =  </th>";

for ($i=0; $i <count($arr) ; $i++) { 	
   echo "<td colspan='2'>" . "<span>". $arr[$i] ."</span>". "</td>" . "   ";
} 

echo "</tr><tr><th>El promedio es:   =  </th>
		<td colspan='2'>" . "<span>". 
		array_sum($arr)/count($arr)."</span>". 
		'</td></tr><tr>';

echo "<th>El factorial es:   =  </th>";
   echo "<td colspan='2'>" . "<span>". array_product($arr)."</span>". "</td>" . "   ";
echo "</tr></table>";

 ?>