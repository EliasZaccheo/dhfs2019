<?php

function guardarCookie() {
    setcookie("idioma","es");
}

function eliminarCookie() {
    setcookie("idioma",null,-1);
}


function guardarCookie() {
  setcookie("idioma", $_GET["idioma"], time() + 60*60*24*7);
}

function guardarEnSession() {
  session_start();
  $_SESSION["usuarioLogueado"]="jonsnow";
}

function leerSession() {
  session_start();
  return $_SESSION["usuarioLogueado"];
}



?>
