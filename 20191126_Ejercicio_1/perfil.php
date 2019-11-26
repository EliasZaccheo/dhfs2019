<?php
  $thisUser=null;
  if ($_GET){
    $usuarios=json_decode(file_get_contents("usuarios.json"),true);
    foreach ($usuarios as $user) {
      if ($user["email"]==$_GET["email"]){
        $thisUser = $user;
        break;
      }
    }

  }

 ?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Perfil de <?= $thisUser ? $thisUser["name"] : null ?></title>
  </head>
  <body>
    <p>Nombre :<?= $thisUser ? $thisUser["name"] : null?></p>
    <p>Email :<?= $thisUser ? $thisUser["email"] : null?></p>
    <p>Nombre de usuario :<?= $thisUser ? $thisUser["username"] : null?></p>

  </body>
</html>
