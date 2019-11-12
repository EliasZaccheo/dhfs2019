<?php
  function unoAlDiez(){
    $array=[];
    for ($i=1; $i < 11; $i++) {
      // code...
      $array[]=$i;
    }
    return $array;
  }
 ?>

<?php
  function dobles(){
    $array=unoAlDiez();
    for ($i=0; $i < 10; $i++) {
      // code...
      $array[$i]=$array[$i]*2;
    }
    return $array;
  }
 ?>

<?php
  function dobles($array){
    foreach ($array as $element => $value) {
      $array[$element]=$value*2;
    }
    return $array;
  }
?>

<?php
  function nombreCompleto ($nombre, $apellido){
    return "$nombre $apellido";
  }
 ?>

<?php
  function entre0Y100($numero){
    return $numero>=0 && $numero<=100;
  }
 ?>

 <?php
 function entreDosNumeros($elemento, $cotaMenor, $cotaMayor){
   return $elemento>=$cotaMenor && $elemento<=$cotaMayor;
 }
  ?>

<?php
  function entreDosNumeros($elemento, $cotaMenor=0, $cotaMayor=100){
    return $elemento>=$cotaMenor && $elemento<=$cotaMayor;
  }
 ?>

<?php
  function aumentarContador(){
    global $contadorGlobal;
    $contadorGlobal++;
  }
 ?>
