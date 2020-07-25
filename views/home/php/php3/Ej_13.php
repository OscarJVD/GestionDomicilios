<form method="post">

	<center>

		<?php for($i = 1;$i<11;$i++ ):?>

			<input type="number" name="num<?php echo $i;?>" 
			placeholder="Ingrese el numero <?php echo $i;?>" 
			required ><br/>

		<?php endfor;?>

		<br>
		<br>
		<br>
		<input type="submit" name="envio" value="Calcular">
		<br><br>
		<input type="reset" name="Borrar" value="Restablecer">



	</center>
</form>


<?php 

if(!empty($_POST["envio"])){

	unset($_POST["envio"]);

	$contador = ["cero" => 0,"positivo" => 0,"negativo" =>0];


	foreach ($_POST as $indice => $valor) {

		if($_POST[$indice] == 0){
			$contador["cero"]++  ;
			echo "El " .$indice ." => ".$valor." es neutro <br/>";
		}

		elseif ($valor > 0) 
		{
			$contador["positivo"]++   ;
			echo "El " .$indice ." => ".$valor." es positivo <br/>";
		}

		elseif ($valor < 0) 

		{
			$contador["negativo"]++   ;
			echo "El " .$indice ." => ".$valor." es negativo <br/>";
		}  	  	
	}
	echo "</br>";
	echo "Numeros igual a cero : " .$contador["cero"]."<br/>";
	echo "Numeros postitivos : " .$contador["positivo"]."<br/>";
	echo "Numeros negativos : " .$contador["negativo"]."<br/>";

}
?>