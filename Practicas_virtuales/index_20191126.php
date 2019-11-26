<?php
function validarAvatar() {
  if ($_FILES){
    if ($_FILES["avatar"]["error"] == UPLOAD_ERR_OK){
      return true;
    }
  }
  return false;
}

function validarExtension() {
    if ($_FILES) {
      $ext = pathinfo($_FILES["avatar"]["name"] , PATHINFO_EXTENSION);
      if ($ext=="jpg" || $ext=="jpeg" || $ext=="png"){
        return true;
      }
    }
  return false;
}

function subirAvatar() {
    if ($_FILES) {
      $ext = pathinfo($_FILES["avatar"]["name"] , PATHINFO_EXTENSION);
      move_uploaded_file($_FILES["avatar"]["tmp_name"], "img/avatar." . $ext);
    }
}

function encriptar($textoPlano) {
  return password_hash($textoPlano,PASSWORD_DEFAULT);
}


function verificarPass($hash) {
  return password_verify($_POST["password"],$hash);
}

function aJSON($unArray) {
  return json_encode($unArray);
}

function aArray($unJSON) {
  return json_decode($unJSON,true);
}


function agregarUsuario($jsonUsuarios, $usuarioNuevo) {
  $base = json_decode($jsonUsuarios,true);
  $base[] = $usuarioNuevo;
  return json_encode($base);
}

function escribirArchivo() {
  file_put_contents("prueba.txt","Mi primer archivo!");
}

function leerArchivo($archivo) {
  return file_get_contents($archivo);
}


function crearUsuario() {
  $usuario = [
  "email" => $_POST["email"],
  "username" => $_POST["username"],
  "password" => password_hash($_POST["password"],PASSWORD_DEFAULT)
];
  $content = json_decode(file_get_contents("usuarios.json"));
  $content[] = $usuario;
  file_put_contents("usuarios.json",json_encode($content));
}

function buscarPorEmail($email) {
  $content = json_decode(file_get_contents("usuarios.json"));
  foreach ($content as $user) {
    if ($user["email"]==$email){
      return $user["username"];
    }
  }
  return null;
}

 ?>
