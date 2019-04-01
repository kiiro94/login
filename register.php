<?php
  include "dbconn.php";
  include "checkLogin.php";

  //get post user and pass
  $user = htmlspecialchars($_POST["user"]);
  $pass = htmlspecialchars($_POST["pass"]);

  //hash password with username and a random string
  $pass = hash("sha256", $pass . "pizza" . $user);

  //insert username and hashed password into the db
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
