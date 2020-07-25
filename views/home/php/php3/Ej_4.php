<?php 

$arr1= [];


//LLENAR ARRAY
for ($i=0; $i < 100 ; $i++) { 

array_push($arr1, mt_rand(0,100)); 

echo "<span>". $arr1[$i]."</span>". ", " ;

if (count($arr1)==15) {
	echo "\n";
}else if(count($arr1)==30){
echo "\n";	
}else if(count($arr1)==45){
echo "\n";	
}else if(count($arr1)==60){
echo "\n";	
}else if(count($arr1)==75){
echo "\n";	
}else if(count($arr1)==90){
echo "\n";	
}else if(count($arr1)==100){
	echo "<b>FIN</b>";
echo "\n";	
}
}




?>