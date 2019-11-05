<?php
  echo "Ejercicio 1 Arrays \n";
  $persona=[
    "Nombre"=>"Jon",
    "Apellido"=>"Snow",
    "Edad"=>27,
    "Hobbies"=>["Netflix","Fútbol","Programar"],
  ];
  $persona["Edad"]=25;
  $persona["Direccion"]="Winterfell";
  $persona["Hobbies"][]="Cetrería";
  var_dump($persona);

  echo "\n";
  echo "Ejercicio 1 Condicionales \n";
  $numero1=15;
  $numero2=16;
  if ($numero1>$numero2){
    echo "El numero mayor es $numero1";
  }else{
    echo "$numero2 es igual o mayor a $numero1";
  }

  echo "\n";
  echo "Ejercicio 2 Condicionales \n";
  $numero3=rand(1,5);
  if($numero3==3 || $numero3==5){
    echo $numero3;
  }

  echo "\n";
  echo "Ejercicio 3 Condicionales \n";
  if($numero3<>3){
    echo "El numero no es 3";
  }else{
    echo $numero3;
  }

  echo "\n";
  echo "Ejercicio 4 Condicionales \n";
  $numero4=rand(1,100);
  if($numero4<50){
    echo '$numero4 es menor a cincuenta';
  }else{
    echo '$numero4 es mayor a cincuenta';
  }

  echo "\n";
  echo "Ejercicio 5 Condicionales \n";
  $nombreDeUsuario=null;
  $ContraseniaDeUsuario=null;
  if ($nombreDeUsuario=="Admin" && $ContraseniaDeUsuario=="1234"){
    echo "Bienvenido";
  }else{
    echo "Hay un error en el login";
  }
  echo "\n";
  echo "Ejercicio 5 Condicionales parte a\n";
  if ($nombreDeUsuario=="Admin" && $ContraseniaDeUsuario=="1234"){
    echo "Bienvenido";
  }else{
    if ($nombreDeUsuario=="Admin" && $ContraseniaDeUsuario==null){
      echo "Contraseña erronea";
    }else{
      if ($nombreDeUsuario=="Admin" && $ContraseniaDeUsuario<>"1234"){
        echo "Contraseña vacía";
      }else{
        if ($nombreDeUsuario==null && $ContraseniaDeUsuario=="1234"){
          echo "Usuario erroneo";
        }else{
          if ($nombreDeUsuario<>"Admin" && $ContraseniaDeUsuario=="1234"){
            echo "Usuario vacío";
          }else{
            if ($nombreDeUsuario==null && $ContraseniaDeUsuario==null){
              echo "Usuario y contraseña vacíos";
            }else{
              echo "Usuario y contraseña mal escritos";
            }
          }
        }
      }
    }
  }




  echo "\n";
  echo "Ejercicio 6 Condicionales \n";
  $edad=15;
  $casado=false;
  $sexo="Otro";
  if ($edad>18 && !casado) {
    // code...
    echo "Bienvenido";
  }
  echo "\n";
  echo "Ejercicio 6 Condicionales \n";
  $edad=15;
  $casado=false;
  $sexo="Otro";
  if (($edad>18 && !casado) || $sexo=="Otro") {
    // code...
    echo "Bienvenido";
  }

  echo "\n";
  echo "Ejercicio 7 Condicionales \n";
  $cantidadDeAlumnos=0;
  if ($cantidadDeAlumnos) {
    echo "true";
  }
  else {
    echo "false";
  }
  // Imprime 'True' o 'False' según el valor numerico de la variable. 0 es tomado como false, lo demás como true.


  echo "\n";
  echo "Ejercicio 8 Condicionales \n";
  $numero=5;
  echo ($numero%2) ?  "El numero es impar":"El numero es par";


  echo "\n";
  echo "Ejercicio 9 Condicionales \n";
  $nota=rand(0,10);
  switch ($nota){
    case 0:
    case 1:
    case 2:
    case 3:
      echo "Desaprobado";
    break;
    case 4:
    case 5:
      echo "Zafamos";
    break;
    case 6:
    case 7:
    case 8:
      echo "Bien!!!";
    break;
    case 9:
      echo "MUY bien!!";
    break;
    case 10:
      echo "Excelente!!!";
    break;
  }
?>
