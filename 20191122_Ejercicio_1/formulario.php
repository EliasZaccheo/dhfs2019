<!DOCTYPE HTML>
<?php
  $action = "formulario.php";


  $nombre = null;
  $email = null;
  if ($_POST) {
    if ((strlen($_POST["nombre"])>0) && (filter_var($_POST["email"],FILTER_VALIDATE_EMAIL))){
      header('Location: imprimir.php');
      exit;
    }else{
      $nombre = strlen($_POST['nombre'])>0 ? $_POST['nombre'] : null;
      $email= filter_var($_POST["email"],FILTER_VALIDATE_EMAIL) ? $_POST["email"] : null;
    }
  }
 ?>
<html>
  <head>
    <title>TEST</title>
  </head>
  <body>
    <form method="post" action="formulario.php">
      <label for="nombre">Nombre:</label>
      <input type="text" name="nombre" value="<?= $nombre ?>">
      <br>
      <label for="email">E-mail:</label>
      <input type="text" name="email" value="<?= $email ?>" placeholder="algo@servidor.com">
      <br>
      <input type="submit">
    </form>
  </body>
</html>
