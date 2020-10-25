<?php

// Definim variabilele pentru baza de date
  $dbServerName = "localhost";
  $dbUsername = "";
  $dbPassword = "";
  $dbName = "";

// Ne conectam la baza de date
  $connect = mysqli_connect($dbServerName, $dbUsername, $dbPassword, $dbName);

  if (!$connect) {
    echo "Not connecting to the database!";
  }
?>
