<?php
  include_once('movies_db.php');

  $query = $movies_db->prepare('SELECT * FROM series');
  $query->execute();
  $series = $query->fetchAll();

?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <ul>

      <?php foreach ($series as $value) { ?>
        <li>
        <a href="serie.php?serie_id=<?php echo $value['id']; ?>"><?php echo $value['title']; ?></a>  
        </li>
      <?php } ?>
    </ul>

  </body>
</html>
