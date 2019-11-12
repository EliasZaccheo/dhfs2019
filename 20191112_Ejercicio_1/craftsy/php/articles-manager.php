<?php
  $articulos=[
    "image_1" => "img/img-phone-01.jpg",
    "tittle_1" => "Nombre del Producto",
    "body_1" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.",
    "footer_1" => "ver más",
    "precio_1" => 100,
    "estaEnOferta_1" => true,

    "image_2" => "img/img-phone-02.jpg",
    "tittle_2" => "Nombre del Producto",
    "body_2" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.",
    "footer_2" => "ver más",
    "precio_2" => 200,
    "estaEnOferta_2" => false,

    "image_3" => "img/img-phone-03.jpg",
    "tittle_3" => "Nombre del Producto",
    "body_3" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.",
    "footer_3" => "ver más",
    "precio_3" => 300,
    "estaEnOferta_3" => true,

    "image_4" => "img/img-phone-01.jpg",
    "tittle_4" => "Nombre del Producto",
    "body_4" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.",
    "footer_4" => "ver más",
    "precio_4" => 400,
    "estaEnOferta_4" => false,

    "image_5" => "img/img-phone-02.jpg",
    "tittle_5" => "Nombre del Producto",
    "body_5" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.",
    "footer_5" => "ver más",
    "precio_5" => 500,
    "estaEnOferta_5" => true,

    "image_6" => "img/img-phone-03.jpg",
    "tittle_6" => "Nombre del Producto",
    "body_6" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.",
    "footer_6" => "ver más",
    "precio_6" => 600,
    "estaEnOferta_6" => false,
  ];

  function article($image,$tittle,$body,$footer){
    echo '
      <article class="producto">
        <img class="main-photo" src="';
        echo "$image";
        echo '" alt="">
        <h2 class="name">';
        echo "$tittle</h2>
        <p>$body</p>";
        echo '<a class="more" href="#">';
        echo "$footer</a>
      </article>";
  }

  function article_num($articulo){
    global $articulos;
    article($articulos["image_" . $articulo],$articulos["tittle_" . $articulo],$articulos["body_" . $articulo],$articulos["footer_" . $articulo]);
  }

  function descripcionLarga($articulo){
    global $articulos;
    return $articulos["body_" . $articulo] . " precio: " . $articulos["precio_" . $articulo];
  }

  function article_num_large($articulo){
    global $articulos;
    article($articulos["image_" . $articulo],$articulos["tittle_" . $articulo],descripcionLarga($articulo),$articulos["footer_" . $articulo]);
  }

  function get_precio($articulo){
    global $articulos;
    if ($articulos["estaEnOferta_" . $articulo]){
      return $articulos["precio_" . $articulo]* 0.8;
    }else{
      return $articulos["precio_" . $articulo];
    }
  }

  function article_num_large_offer($articulo){
    global $articulos;
    article($articulos["image_" . $articulo],$articulos["tittle_" . $articulo],descripcionLarga_offer($articulo),$articulos["footer_" . $articulo]);
  }

  function descripcionLarga_offer($articulo){
    global $articulos;
    return $articulos["body_" . $articulo] . " precio: " . get_precio($articulo);
  }
 ?>
