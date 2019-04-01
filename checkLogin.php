<?php
  include "dbconn.php";
  $connected = FALSE;
 
  if (isset($_POST["user"]) && isset($_POST["pass"])) {
    $user = htmlspecialchars($_POST["user"]);
    $pass = htmlspecialchars($_POST["pass"]);
    $pass = hash("sha256", $pass . "pizza" . $user);

    $res = $conn->query("SELECT password from Users WHERE username='".$user."'");
    while ($row = $res->fetch_assoc()) {
      if ($row["password"] === $pass) {
        $connected = TRUE;
      }
      else {
        $connected = FALSE;
      }
    }
  }
  else {
    $connected = FALSE;
  }
?>
