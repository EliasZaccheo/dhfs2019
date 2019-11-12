<?php
  function mayor($n1,$n2,$n3){
    global $funcionesEjecutadas;
    $funcionesEjecutadas++;
    if ($n1>$n2 && $n1>$n3){
      return $n1;
    }else{
      if ($n2>$n1 && $n2>$n3){
        return $n2;
      }else{
        return $n3;
      }
    }
  }


  function tabla($menor,$mayor){
    global $funcionesEjecutadas;
    $funcionesEjecutadas++;
    $array=[];
    while ($menor<=$mayor){
      $array[]=$menor;
      $menor++;
    }
    return $array;
  }


  function mayor2($n1,$n2,$n3=100){
    global $funcionesEjecutadas;
    $funcionesEjecutadas++;
    if ($n1>$n2 && $n1>$n3){
      return $n1;
    }else{
      if ($n2>$n1 && $n2>$n3){
        return $n2;
      }else{
        return $n3;
      }
    }
  }


  function tabla2($menor,$mayor=100){
    global $funcionesEjecutadas;
    $funcionesEjecutadas++;
    $array=[];
    while ($menor<=$mayor){
      $array[]=$menor;
      $menor++;
    }
    return $array;
  }

 ?>
