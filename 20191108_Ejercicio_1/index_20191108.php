<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Práctica 08/11/2019</title>
  </head>
  <body>
    <?php
      echo "<br> Ejercicio 1 <br>";
      for( $i=0 ; $i<11 ; $i++){
        $aux=$i*2;
        echo "$i * 2 = $aux";
        echo "<br>";
      }
    ?>

    <?php
    echo "<br> Ejercicio 2 <br>";
      $i=100;
      while ($i>=85){
        echo "$i";
        echo "<br>";
        $i--;
      }
     ?>

    <?php
      $contador=1;
      echo "<br> Ejercicio 3 <br>";
      while ($contador<6){
        $aux=$contador*2;
        echo "$aux <br>";
        $contador++;
      }
     ?>

    <?php
      echo "<br> Ejercicio 5 <br>";
      $array=[
        "Damian",
        "Esteban",
        "Julia",
        "Tamara",
        "Daniel"
      ];
      echo "Con for <br>";
      for ($i=0;$i<count($array);$i++){
        echo "Posición nº $i = $array[$i]  <br> ";
      }

      echo "<br> Con while <br>";
      $i=0;
      while ($i<count($array)){
        echo "Posición nº $i = $array[$i]  <br> ";
        $i++;
      }

      echo "<br> Con do/while <br>";
      $i=0;
      do{
        echo "Posición nº $i = $array[$i]  <br> ";
        $i++;
      }while ($i<count($array));

      echo "<br> Con foreach <br>";
      $i=0;
      foreach ($array as $nombre) {
        echo "Posición nº $i = $nombre  <br> ";
        $i++;
      }
     ?>

    <?php
      echo "<br> Ejercicio 6 <br>";
      $array=[];
      for($i=0;$i<10;$i++){   //Carga del arreglo
        $array[]=rand(0,10);
      }

      $i=0;
      while ($i<10){
        if ($array[$i]==5){
          echo "Se encontró un 5! <br>";
          $i=100;
        }else{
          echo "Posición $i = $array[$i] <br>";
        }
        $i++;
      }
    ?>

    <?php
      echo "<br> Ejercicio 7 <br>";
      $array=[];
      for($i=0;$i<10;$i++){   //Carga del arreglo
        $array[]=rand(0,100);
      }
      $count=0;
      foreach ($array as $number) {
        if ($number%2==0){
          $count++;
        }
      }
      echo "Se encontraron $count números pares <br>";
     ?>

     <?php
       echo "<br> Ejercicio 8 <br>";
       $mascota=[
         "animal" => "paloma",
         "edad" => 3,
         "altura" => 0.09,
         "nombre" => "lola"
       ];

       foreach ($mascota as $key => $value) {
         echo "$key: $value <br>";
       }
      ?>

      <?php
        echo "<br> Ejercicio 9 <br>";
        $ceu = array( "Italia"=>"Roma", "Luxembourg"=>"Luxembourg", "Bélgica"=> "Bruselas", "Dinamarca"=>"Copenhagen", "Finlandia"=>"Helsinki", "Francia" => "Paris", "Slovakia"=>"Bratislava", "Eslovenia"=>"Ljubljana", "Alemania" => "Berlin",
        "Grecia" => "Athenas", "Irlanda"=>"Dublin", "Holanda"=>"Amsterdam", "Portugal"=>"Lisbon", "España"=>"Madrid", "Suecia"=>"Stockholm", "Reino Unido"=>"London", "Chipre"=>"Nicosia", "Lithuania"=>"Vilnius", "Republica Checa"=>"Prague",
        "Estonia"=>"Tallin", "Hungría"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valletta", "Austria" => "Vienna", "Polonia"=>"Warsaw") ;

        foreach ($ceu as $key => $value) {
          echo "$value es la capital de $key <br>";
        }
       ?>

       <?php
        echo "<br> Ejercicio 10 <br>";
        $ceu = [
          "Argentina"        => ["Buenos Aires", "Córdoba", "Santa Fé"],
          "Brasil" => ["Brasilia", "Rio de Janeiro", "Sao Pablo"],
          "Colombia" => ["Cartagena", "Bogota", "Barranquilla"],
          "Francia" => ["Paris", "Nantes", "Lyon"],
          "Italia" => ["Roma", "Milan", "Venecia"],
          "Alemania" => ["Munich", "Berlin", "Frankfurt"]
        ];
        foreach ($ceu as $country => $cities) {
          echo "Las ciudades de $country son: ";
          echo "<ul>";
          foreach ($cities as $city) {
            echo "<li>$city</li>";
          }
          echo "</ul> <br>";
        }
        ?>

        <?php
         echo "<br> Ejercicio 11 o 15 <br>";
         $ceu = [
           "Argentina" => ["Buenos Aires", "Córdoba", "Santa Fé", "esAmericano" => true],
           "Brasil" => ["Brasilia", "Rio de Janeiro", "Sao Pablo", "esAmericano" => true],
           "Colombia" => ["Cartagena", "Bogota", "Barranquilla", "esAmericano" => false],
           "Francia" => ["Paris", "Nantes", "Lyon", "esAmericano" => false],
           "Italia" => ["Roma", "Milan", "Venecia", "esAmericano" => false],
           "Alemania" => ["Munich", "Berlin", "Frankfurt", "esAmericano" => false]
         ];
         foreach ($ceu as $country => $cities) {
          if ($cities['esAmericano']){
           echo "Las ciudades de $country son: ";
           echo "<ul>";
           for ($i=0;$i<count($cities)-1;$i++) {
             echo "<li>$cities[$i]</li>";
           }
           echo "</ul> <br>";
          }
         }
         ?>

  </body>
</html>
