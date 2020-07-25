<?php 

$num = $_POST['num'];

if ($num > 0) {
	
   echo "El numero ingresado es <b>positivo</b>";

}else if($num < 0){

    echo "El numero ingresado es <b>negativo</b>";


}else{


   echo "El numero ingresado es <b>neutro</b>";


}


 ?>