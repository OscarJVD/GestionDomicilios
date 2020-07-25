

	<header>
		<nav>

			<ul>
				<li>
					<a href="ejercicio_1.php">Punto 1</a>
				</li>
			</ul>

			<ul>
				<li>
					<a href="../ejercicio_2/ejercicio_2.php">Punto 2</a>
				</li>
			</ul>

		</nav>
	</header>
	<section>


		<?php 

		if (isset($_POST['size'])) {
			$size = $_POST['size'];
			$arrayNumbers = [];

    		// LLENAR ARRAY PASO 1
			for ($i=0; $i < $size; $i++) { 

				array_push($arrayNumbers, $_POST['number' . $i]);
			}

					//Mostrar Array

			for ($i=0; $i < $size ; $i++) { 

				echo "<span>" . $arrayNumbers[$i] . "</span>" . "   ,   ";

			}
			echo "<div>";
			echo "<h3>Numeros pares del array</h3>"	;


					//Mostrar solo los pares

			for ($i=0; $i < $size; $i++) { 

				if ($arrayNumbers[$i] %2==0) {

					echo "<span>". $arrayNumbers[$i] ."</span>". "   ,   ";
				}
			}

			echo "</div>";


			echo "<div>";
			echo "<h3>Numeros impares del array</h3>"	;
					//Mostrar solo los impares

			for ($i=0; $i < $size; $i++) { 

				if ($arrayNumbers[$i] %2!=0) {

					echo "<span>". $arrayNumbers[$i] ."</span>". "   ,   ";
				}
			}

			echo "</div>";

		}



		?>


	</section>

</body>
</html>