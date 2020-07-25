


<section class="fondo_PHP section p-4">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xs-12 text-center">
        <p class="titulo-servicio">Aprende PHP con ejercicios</p>

      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-xs-12 col-sm-5">
        <div class="logo-fondo">
          <p style="font-size: 90px; text-align: center;"><i
            ><img src="assets/img/1.ico"></i></p>
            <h3 class="text-center">PHP | Parte 1</h3>
            <p class="text-justify">
            </p>
          </div>
        </div>

        <div class="col-12">
          <h4>1. Ingresar 5 números y calcular su media.</h4>

          <?php 

          require_once 'Ej_1.php';

          ?>

        </div>

        <h4>2. Escribir el algoritmo necesario para calcular y mostrar el cuadrado de un número. El número debe
         ser mayor que cero, en caso de error que aparezca el mensaje "ERROR, el número debe ser mayor
       que cero".</h4>

       <?php 

       require_once 'Ej_2.php';

       ?>
       
       
       <h4>3. De 10 números ingresados indicar cuantos son mayores a cero y cuantos son menores a cero. </h4>


       <?php 

       require_once 'Ej_3.php';

       ?>
       

       <h4>4. Diseñar un algoritmo que calcule la longitud de la circunferencia y el área del círculo de radio
       dado.  </h4>

       <p></p>
       <form action="Ej_4.php" method="POST">
         <label>Ingrese el valor del radio : </label>
         <input type="text" name="radio" id="radio" />
         <label for="opcion"><br />
          <br />
        opciones :  </label>
        <select name="opcion" id="opcion">
          <option value="1">circulo</option>
          <option value="2">circunferencia</option>
        </select>
      </p>


      <input type="submit" name="enviar" id="enviar" value="Enviar" />
    </br>
    <p>

     <label for="resultado">
     </p>   
   </form>  

   <h4>5. Diseñar un algoritmo que calcule la superficie de un triángulo a partir del ingreso de su base y
   altura y muestre el resultado.</h4>

   <p></p>

   <form method="POST">
     <label>valor de la base</label>
     <input type="text" name="base" id="base" />
     <label>valor de la altura</label>

     <input type="text" name="altura" id="altura" />

   </p>

   <input type="submit" name="enviar" id="enviar" value="Enviar" />
 </br>
 <p>

   <label for="resultado">
   </p>   
 </form> 

 <h4>  
   6. Hacer el algoritmo que nos permita introducir un número por teclado y nos informe si es positivo
 o negativo. </h4>

 <form action="Ej_6.php" method="POST">


  Ingrese el numero: <input type="text" name="num" placeholder="numero">
  <input type="submit" value="Enviar">


</form>

<h4>7. Hacer el algoritmo que nos permita introducir un número por teclado y nos informe si es par o
impar.</h4>


<form action="Ej_7.php" method="POST">

  Ingrese el numero: <input type="text" name="num" placeholder="numero">
  <input type="submit" value="Enviar">

</form>

<h4>8. Escribir el algoritmo que me permita leer un número decimal que representa una cantidad de
 grados Celsius y convierta dicho valor a la cantidad equivalente en grados Fahrenheit. La salida del
programa puede ser de la siguiente forma: 100 grados celsius son 212 grados Fahrenheit </h4>

<form action="Ej_8.php" method="POST">


  Ingrese el numero: <input type="text" name="num" placeholder="numero">
  <input type="submit" value="Enviar">


</form>


<h4>9. Dados ciertos centímetros como entrada de tipo decimal, escribir su equivalente a pies    y
 pulgadas. Considerar 2.54 cm por pulgada y 12 pulgadas por pie. La salida podrá ser: 333.3 cm son
10 pies y 11.2 pulgadas. </h4>


<form action="Ej_9.php" method="POST">


 Ingrese el numero: <input type="text" name="num" placeholder="numero">

 <input type="submit" value="Enviar">

</form>

<h4>10. Escribir un programa que muestre los números impares entre 0 y 100 y que imprima cuantos
impares hay.</h4>

<?php 

require_once 'Ej_10.php';

?>

<h4> 11. Hacer el algoritmo que imprima los números pares entre el 1 y el 100.
</h4>

<?php 

require_once 'Ej_11.php';

?>

<h4>  12. Hacer el algoritmo que imprima los números del 1 al 100.
</h4>

<?php 

require_once 'Ej_12.php';

?>

<div class="col-12">
  <h4> 13. Realizar la serie Fibonacci.</h4><p></p>

  <form action="Ej_13.php" method="POST">

  Ingrese el numero: <input type="text" name="num" placeholder="numero">

  <input type="submit" value="Enviar">

  </form>
</div>


</p>
</div>
</section>
</body>
</html>