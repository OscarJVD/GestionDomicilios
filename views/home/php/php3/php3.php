
<section class="fondo_PHP section">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<p class="titulo-servicio">Aprende PHP con ejercicios</p>

			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="logo-fondo">
					<p style="font-size: 90px; text-align: center;"><i
						><img src="assets/img/1.ico"></i></p>
						<h3 class="text-center">PHP | Parte 1</h3>
						<p class="text-justify">
						</p>
					</div>
				</div>




				<div class="container mb-4" id="cont">

					<div class="row fila">

						<div class="columna"><h4><mark>Ejercicio 1: </mark> Realizar las tablas de multiplicar</h4>

							<a href="?controller=home&method=tablas" target="_blank" onClick="window.open(this.href, this.target); return false;">
								<input type="button" value="Tablas de multiplicar">
							</a>
						</div>





						<div class="columna"><h4>Ejercicio 2: Realizar la suma y resta de dos 
							vectores de tamaño N, almacenando 
							su resultado en un
							nuevo vector. Se debe imprimir los 
							dos vectores junto 
							con las operaciones planteadas.
						ejemplo:</h4>



						<img src="assets/img/ejm.png" alt="No se pudo mostrar la imagen" >

						<?php 
						require_once 'Ej_2.php';
						?>

					</div>
				</div>



				<div class="row fila_Final">
					<div class="columna">

						<h4>Ejercicio 3: De un vector de tamaño N,
							sacar en un vector aparte los numeros 
							pares y en otro vector
						almacenar los impares. Ejemplo:</h4>

						<img src="assets/img/ejm2.png" alt="No se pudo mostrar la imagen" >
						<?php 
						require_once 'Ej_3.php';
						?>
					</div>



					<div class="columna">
						<h4>Ejercicio 4: Llenar un vector de 
							tamaño N con números aleatorios de 0 
							a 100 utilizando el método mt_rand().
							E imprimir el vector con los números 
						asignados</h4>
						<?php 
						require_once 'Ej_4.php';
						?> 

					</div>

					<h4>Ejercicio 5: Crear un vector de 
							tamaño 6 realizar el factorial de este
							y su promedio imprimiendo los resultados 
							en pantalla. La forma de impresión es 
						la siguiente:
					</h4>

						<?php
						echo "<img src='assets/img/ejm3.png' alt='No se pudo mostrar la imagen' >";
            			require_once 'Ej_5.php';
						?>

					</div>
					</div>


					<div class="columna">
						<h4>Ejercicio 6: Hacer el algoritmo que 
							imprima los números del 100 al 0 en orden
						decreciente.  </h4>
						<?php 
						require_once 'Ej_6.php';
						?> 

					</div>

					<div class="columna">

						<h4>Ejercicio 7: Diseñar un algoritmo que 
							imprima y sume la serie de números 3,6,9,
						12,...,99. </h4>



						<?php 
						require_once 'Ej_7.php';
						?>    

					</div>

					<div class="columna">

						<h4>Ejercicio 8: Escribir en Pseudocódigo 
							y codificar en C un programa que muestre 
							los múltiplos de 2 y de 3 y de ambos 
						comprendidos entre 0 y 100 .</h4>

						<?php 
						require_once 'Ej_8.php'; 
						?> 

					</div>

					<div class="columna">

						<h4>Ejercicio 9: Ingresar un número, entero
							y efectuar la suma de todos los números que
							le anteceden, comenzando desde 0 y mostrar 
						el resultado por pantalla.</h4>


						<form action="?controller=home&method=ej_9p3" method="post">
							<label>Ingrese el numero limite</label>
							<input type="text" name="lim">
							<div>
								<button type="submit"> Calcular </button>
							</div>
						</form>

					</div>

					<div class="columna">


						<h4>Ejercicio 10: Hacer el algoritmo que 
							imprima todos los números naturales que hay
							desde la unidad hasta un número que introducimos
						por teclado.</h4>

						<form action="?controller=home&method=ej_10p3" method="post">
							<label for="">Ingrese el numero limite</label>
							<input type="text" name="lim">

							<button type="submit">Mostrar</button>
						</form> 

					</div>

					<div class="columna">

						<h4>Ejercicio 11: Hacer el algoritmo que nos 
							permita contar los múltiplos de 3 desde la 
							unidad hasta un número que introducimos por 
						teclado</h4>

						<form action="?controller=home&method=ej_11p3" method="post">
							<label for="">Ingrese el numero limite</label>
							<input type="text" name="lim">

							<button type="submit">Mostrar</button>
						</form> 

					</div>

					<div class="columna">

						<h4>Ejercicio 12: Escribir un programa que 
							muestre los números primos comprendidos entre 
						0 y 100  </h4>



						<?php 
						require_once 'Ej_12.php'; 
						?> 

					</div>

					<div class="columna">

						<h4>Ejercicio 13: Diseñar un algoritmo que 
							permita ingresar 10 números, ninguno de ellos 
							igual a cero. Se pide sumar los positivos, 
							obtener el producto de los negativos y luego 
						mostrar ambos resultados.</h4>


						<?php 
						require_once 'Ej_13.php'; 
						?> 

					</div>

					<div class="columna">

						<h4>Ejercicio 14: Diseñar el algoritmo necesario
							para que habiéndose leído el valor de 2 variables 
							NUM1 y NUM2 se intercambien los valores de las 
							variables, es decir que el valor que tenía NUM1
						ahora lo contenga NUM2 y viceversa</h4>

						<form action="?controller=home&method=ej_14p3" method="post">

							<input type="text" name="var1" placeholder="valor de var1">

							<input type="text" name="var2" placeholder="valor de var2">

							<button type="submit">Intercambiar valores</button>
						</form>
					</div>

					<div class="columna">

						<h4>Ejercicio 15: Diseñar en Pseudocódigo y 
						codificar en PHP un algoritmo que permita registrar
						de los empleados de una fábrica (no se sabe cuantos)
						su peso y saber cuantos pesan hasta 80 kg.
						Inclusive y cuantos pesan más de 80 kg. </h4>

					</div>

					<div class="columna">

						<h4>Ejercicio 16: En una tienda de artículos 
							para caballeros al final del día se carga en la 
							computadora las boletas que confeccionaron los 
							distintos vendedores para saber cuanto fue la 
							comisión del día de cada uno de ellos. Los datos
							que se ingresan (por boleta)son: el número de 
							vendedor y el importe. Cuando no hay más boletas 
							para cargar se ingresa 0. Teniendo en cuenta que
							el negocio tiene 3 vendedores y que el porcentaje
							sobre las ventas es del 5%, indicar cuánto ganó 
						cada vendedor en el día.</h4>

					</div>

					<div class="columna">

						<h4>Ejercicio 17: Ingresar por teclado 3 números
							correspondientes a los lados de un triángulo. 
							Teniendo en cuenta que la suma de los dos lados
							menores tiene que ser superior al lado mayor para 
							que formen un triángulo, indicarsi los números
							indicados forman un triángulo y si lo forman 
						que tipo de triángulo es (según sus lados).</h4>

					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>