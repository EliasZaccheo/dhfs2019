<?php
  $nombre = "Esteban";
  $numero=rand(0,1);

  $array=[
    0 => [
      "id" => 1,
      "titulo" => "Lorem Ipsum",
      "descripcion" => "Lorem Ipsum",
      "precio" => 300,
      "imagen" => "img-pdto-1.jpg",
      "enOferta" => true
      ],
    1 => [
      "id" => 2,
      "titulo" => "Lorem Ipsum",
      "descripcion" => "Lorem Ipsum",
      "precio" => 500,
      "imagen" => "img-pdto-2.jpg",
      "enOferta" => false
      ]
    ];

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>La Internet</h1>
    <marquee>Bienvenidos al mundo de la internet</marquee>
    <h2>Bienvenido <?php echo $nombre?></h2>
    <h3>¿Es usted un ganador?</h3>
    <?php
      if($numero==1){
        echo "Si";
      }else{
        echo "No";
      }
     ?>
    <h3>Algunos sitios interesantes:</h3>
    <ul>
      <li>
        <a href="https://google.com">Google</a>
      </li>
      <li>
        <a href="https://facebook.com">Facebook</a>
      </li>
      <li>
        <a href="https://twitter.com">Twitter</a>
      </li>
    </ul>
  </body>
</html>
