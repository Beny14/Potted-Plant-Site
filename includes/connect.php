<?php

  $serverName = 'localhost';
  $userName = '';
  $password = '';
  $dbName = '';

  $connect = mysqli_connect($serverName, $userName, $password, $dbName);

  if(!$connect){
    echo 'Conectare nereusita la baza de date: ' . mysqli_connect_error();
  }

?>
