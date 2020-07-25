<?php
   if (!empty($_POST["opcion"])) {
	 $radio = $_POST["radio"];
        $Pi = 3.1416;
        $a = $Pi * $radio * $radio;
         $l = 2 * $Pi * $radio;
	 
	 $opc = $_POST["opcion"];
	 if ($opc == 1){
		echo"El area del circulo es:<h2> $a</h2><br/>";
     }else {
	 	echo"La longitud de la circunferencia es:<h2> $l</h2><br/>";	 
	 }
  }
  
?> 