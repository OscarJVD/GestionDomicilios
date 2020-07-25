
<section class="fondo_PHP section">
<div class="container">
	<div class="row">
		<div class="col-xs-12 text-center">
			<p class="titulo-servicio">Aprende PHP con ejercicios</p>
			<br><br><br>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-5">
			<div class="logo-fondo">
				<p style="font-size: 90px; text-align: center;"><i
					><img src="assets/img/1.ico"></i></p>
					<h3 class="text-center">PHP | Parte 2</h3>
					<p class="text-justify">
					</p>
				</div>
			</div>

			<div class="puntos">

				<main>

					<header>

						<nav id="nave">

							<ul class="lista-puntos">

								<li class="espacio-Listas">
									<a href="?controller=home&method=php2_4" title="Proximamente">Punto 1
									</a>
								</li>

								<li class="espacio-Listas">
									<a href="?controller=home&method=php2">Atras
									</a>
								</li>
							</ul>

						</nav>
					</header>


					<section class="ej_array text-center justify-content-center">

						<h3 class="titulos-Punto1 elementos-Punto1">
							<strong>Bienvenido | Primer ejercicio de arrays</strong>
						</h3>
						<form action="#" method="POST">

							<div class="elementos-Punto1">
								<div>
									<label class="titulos-Punto1">Ingrese el tamaño del Array: </label>
								</div>
								<input type="number" name="tamarray">
							</div>

							<div class="elementos-Punto1 mt-2">
								<button name="generar">Generar</button>
							</div>
						</form>

						<form action="calculo_array.php" method="POST">
							<?php 
							if (isset($_POST['tamarray'])) {
								$size = $_POST['tamarray'];

								for ($i=0; $i < $size ; $i++) { 
									?>
									<div class="elementos-Punto1 elementos-Punto1">
										<label>Ingrese numero <?php echo $i+1; ?>
											
										</label>
										<input type="number" name="number<?php echo $i; ?>">
									</div>
									<?php
								}
								echo "<pre><div><button>Calcular</button></div></pre>";
								echo "<input type='hidden' name='size' value='".$size."'>";}?>

							</form>

						</section>
					</main>
				</div>
			</div>
		</div>
	</div>
</body>
</html>