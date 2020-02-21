<?php
  $dsn= 'mysql:host=127.0.0.1;dbname=movies_db;port=3306';
  $username= 'root';
  $password= '';
  $options= [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

  $movies_db = new PDO($dsn, $username, $password, $options);
  //var_dump($movies_db);
 ?>
