<?php
  //Get db connection settings from json
  $string = file_get_contents("db_conn_settings.json");
  $conn = json_decode($string, true);

  $servername = $conn['servername'];
  $username = $conn['username'];
  $password = $conn['password'];
  $dbname = $conn['db_name'];
  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
?>
