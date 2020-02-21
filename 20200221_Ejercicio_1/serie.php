<?php
  include_once('movies_db.php');

  $query = $movies_db->prepare("SELECT s.*,e.title as episodio FROM series s LEFT JOIN seasons ss ON (ss.serie_id=s.id) LEFT JOIN episodes e ON (e.season_id=ss.id) WHERE s.id=:idSerie");
  $idSerie=$_GET['serie_id'];
  $query->bindValue(':idSerie',$idSerie,PDO::PARAM_INT);
  $query->execute();
  $series = $query->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="">
      <h5><?php
        var_dump($series);
        echo '<br>';
        echo '<br>';
        echo $series['title'];
        echo ' ';
        echo $query->rowCount();
        echo '<br>';
      ?></h5>
    </div>

  </body>
</html>
