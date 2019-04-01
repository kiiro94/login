<?php
  include "dbconn.php";
  $user = htmlspecialchars($_POST["user"]);
  $pass = htmlspecialchars($_POST["pass"]);

  $pass = hash("sha256", $pass . "pizza" . $user);

  $sql = "INSERT INTO Users (username, password) VALUES ('".$user."','".$pass."')";
  if ($conn->query($sql) === TRUE) {
    header("Location: index.php?reg=1");
    $conn -> close();
    die();
  }
  else {
    echo "ERROR: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
  die();
?>
