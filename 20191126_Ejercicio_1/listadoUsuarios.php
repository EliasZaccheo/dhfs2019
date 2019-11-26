<?php
  $usuarios=null;
  if ($_GET){
    $usuarios=json_decode(file_get_contents("usuarios.json"),true);
    foreach ($usuarios as $user) {
      $thisUser[] = [
        "name" => $user["name"],
        "email" => $user["email"]
      ];
    }
  }
  $usuarios=json_decode(file_get_contents("usuarios.json"),true);
 ?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Listado de usuarios</title>
  </head>
  <body>
    <?php
      if (is_null($usuarios){
        echo '<p>Vacio</p>';

      }else{
        foreach ($usuarios as $user) { ?>
          <a href="perfil.php?email=<?= $user["email"]?>"></a>
        <?php }} ?>


  </body>
</html>
