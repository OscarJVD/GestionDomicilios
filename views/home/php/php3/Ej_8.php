

<div>
	<p class="h1"><strong>Multiplos del 2 hasta el 100</strong></p>
</div>

<?php 

$limite=102;                                           
$numero=2;

for($i=0;$i<$limite;$i++){

	if($i%$numero==0){
          
        

           
		echo "<div>" . $i ." es múltiplo de " . $numero . "</div>"; 
		echo "   ";

		
	}
}

?>
<div>    <p> </p>    </div>

<p class="h1"><strong>Multiplos del 3 hasta el 100</strong></p>
<?php


$limite=101;
$numero=3;

for($i=0;$i<$limite;$i++){

	if($i%$numero!=0){

		echo "<div>" . $i ." es múltiplo de ". $numero . "</div>";

	
		

	}
}

?>