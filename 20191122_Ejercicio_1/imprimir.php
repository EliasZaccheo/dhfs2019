<?php

if ($_GET){
  var_dump($_GET);
}
echo "<br> <br>";
echo '2 b <br>';

if ($_GET){
  echo "Su nombre es " . $_GET['nombre'];
}

echo "<br> <br>";
echo '2 c <br>';

if ($_GET){
  foreach ($_GET as $key => $value) {
    echo " Su $key es $value. <br>";
  }
}

echo "<br> <br>";
echo '3 <br>';
echo 'Es necesario acceder a $_POST en lugar de $_GET <br>';

if ($_POST){
  foreach ($_POST as $key => $value) {
    echo " Su $key es $value. <br>";
  }
}


echo "<br> <br>";
echo '4 <br>';

 foreach (getAllHeaders() as $key => $value) {
   echo "$key => $value <br>";
 }
 ?>
