<?php 

$v1 = $_POST['var1'];
$v2 = $_POST['var2'];
$aux = $v1;
$v1 = $v2;
$v2 = $aux;
echo "Valores Intercambiados con exito. <p></p> El valor de la variable 1 es: ".$v1."<p></p> y el valor de la variable 2 es: ".$v2."<p></p> ";


 ?>