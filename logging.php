<?php
  //login action

  //db connection, nothing to explain here
  include "dbconn.php";

  session_start();
 
  if (isset($_POST["user"]) && isset($_POST["pass"])) {
    //get post user and pass
    $user = htmlspecialchars($_POST["user"]);
    $pass = htmlspecialchars($_POST["pass"]);

    //hash password and salt with username and a random string
    $pass = hash("sha256", $pass . "pizza" . $user);

    //take the password from db
    $res = $conn->query("SELECT password from Users WHERE username='".$user."'");
    while ($row = $res->fetch_assoc()) {
      if ($row["password"] === $pass) {
        //if the password is ok, log in
        $_SESSION["loggedIn"] = true;
      }
      else {
        $_SESSION["loggedIn"] = false;
      }
    }
  }
  else {
    $_SESSION["loggedIn"] = false;
  }

  //go back to the index, reset last action timeout
  header("Location: index.php");
  $_SESSION["last_action"] = time();
?>
