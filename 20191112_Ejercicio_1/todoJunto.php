<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $funcionesEjecutadas=0;
      include_once("funciones.php");
      include_once("superficie.php");

      echo "<br> Ejercicio 4 <br>";
      echo mayor(circulo(2),circulo(3),circulo(4));
      echo "<br>" . 4*4*pi() . "<br>";

      echo "<br> Ejercicio 5 y 6 <br>";
      if ($funcionesEjecutadas==0){
        echo "Problemas con variable global <br>";
      }else{
        echo $funcionesEjecutadas . "<br>";
      }

      echo "<br> Ejercicio 7 <br>";
      $string="Me encanta php, a mi también me encanta php!";
      echo strpos($string,"php");


      echo "<br> Ejercicio 8 <br>";
      
     ?>
  </body>
</html>
