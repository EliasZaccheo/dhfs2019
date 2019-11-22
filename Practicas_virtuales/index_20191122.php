<?php
function describirProducto() {
    if (array_key_exists ('id',$_GET)){
      $string = "producto " . $_GET["id"];
      return $string;
    }
}

function saludar() {
  if (array_key_exists ('nombre',$_GET) && array_key_exists ('apellido',$_GET)){
    $string = "Hola " . $_GET["nombre"] . " " . $_GET["apellido"];
    return $string;
  }
}


function busqueda() {
  if (isset($_GET["busqueda"])){
    $array = "El termino buscado es " . $_GET["busqueda"];
    if (isset($_GET["ordenar"])){
      $array = $array . " ordenado por " . $_GET["ordenar"];
    }
    return $array;
  }
}


function bienvenida1() {
  if (isset($_POST["email"]) && isset($_POST["usuario"])){
    $array = "Bienvenido " . $_POST["usuario"] . ". Ha sido registrado con el email " . $_POST["email"];
    return $array;
  }
}


function bienvenida() {
  if ( isset($_POST["usuario"]) and isset($_POST["email"]) ){
    $array = "Bienvenido " . $_POST["usuario"] . ". Ha sido registrado con el email " . $_POST["email"];
    return $array;
  }else{
    if (isset($_POST["email"])) {
      $array = "Bienvenido " . $_POST["email"];
      return $array;
    }
  }
}


function validarNombre() {
  if (isset($_POST["nombre"])){
    if (strlen($_POST["nombre"])>0){
      return true;
    }
  }
  return false;
}


function validarUsername() {
  if (isset($_POST["username"])){
    if (strlen($_POST["username"])>4){
      return true;
    }
  }
  return false;
}


function validarEdad() {
  if (isset($_POST["edad"])){
    if (is_int($_POST["edad"])){
      if ($_POST["edad"]>17){
        return true;
      }
    }
  }
  return false;
}


function validarEmail() {
  if (isset($_POST["email"])){
    $ret;
    if (strlen($_POST["email"])>0){
      $ret = "El campo esta vacio";
    }else{
      if (strpos($_POST["email"],'@')>1){
        $ret="Correcto";
      }else{
        $ret="El campo no es un email";
      }
    }
    return $ret;
  }
}

function validarPass() {

}

 ?>
