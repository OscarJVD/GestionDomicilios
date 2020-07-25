<?php

$limite= $_POST['lim'];

 ?>

<div>    <p> </p>    </div>

<p class="h1"><strong>Multiplos del 3 hasta el <?php echo $limite; ?></strong></p>
<?php



$numero=3;

for($i=0;$i<$limite;$i++){

	if($i%$numero!=0){

		echo "<div>" . $i ." es múltiplo de ". $numero . "</div>";
	}
}

?>