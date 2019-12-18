<?php

class Pelicula{
}

$mipeli = new Pelicula();


class Pelicula{
  public $id;
  public $titulo;
  public $rating;
  public $fechaDeEstreno;
}


$toyStory = new Pelicula();
$toyStory->id=1;
$toyStory->titulo="Toy Story";
$toyStory->rating=9.5;

$buscandoANemo = new Pelicula();
$buscandoANemo->id=2;
$buscandoANemo->titulo="Buscando a Nemo";
$buscandoANemo->rating=8.7;


class Pelicula {
  public $id;
  public $titulo;
  public $rating;
  public $fechaDeEstreno;

  public function reproducir(){
    return "Reproduciendo";
  }
}


$toyStory = new Pelicula();
$buscandoANemo = new Pelicula();
$toyStory->titulo="Toy Story";
$buscandoANemo->titulo="Buscando a Nemo";
$toyStory->reproducir();



class Pelicula {
  public $id;
  public $titulo;
  public $rating;
  public $fechaDeEstreno;

  public function reproducir() {
    return "Reproduciendo";
  }

  public function describirse(){
    return $this->titulo . ": " . $this->rating;
  }
}


class Pelicula {
  public $id;
  public $titulo;
  public $rating;
  public $fechaDeEstreno;

  public function reproducir() {
    return "Reproduciendo";
  }

  public function describirse() {
    return $this->titulo . ": " . $this->rating;
  }

  public function ratingMayorA($param){
    return $this->rating>$param;
  }
}



class Pelicula {
  public $id;
  public $titulo;
  public $rating;
  public $fechaDeEstreno;

  public function reproducir() {
    return "Reproduciendo";
  }

  public function describirse() {
    return $this->titulo . ": " . $this->rating;
  }

  public function ratingMayorA($num) {
    return $this->rating >= $num;
  }
}
class Pelicula {
  public $id;
  public $titulo;
  public $rating;
  public $fechaDeEstreno;

  public function setRating($rating) {
    if ($rating<0) {
      $this->rating = 0;
    }else{
      if ($rating>10) {
        $this->rating = 10;
      }else{
        $this->rating = $rating;
      }
    }
  }
}

 ?>
