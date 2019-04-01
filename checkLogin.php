<?php
  ///checks login and updates timeout if it's not expired
  ///THIS NEEDS TO BE INCLUDED IN EVERY PAGE THAT CHECKS LOGIN STATUS

  session_start();

  
  if (
    !isset($_SESSION["loggedIn"]) || 
    (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] === false)
  ) { 
    //if the user is not logged in, redirect to the login page
    header("Location: login.php"); 
  }
  else {
    //destroy session if timeout expires
    //timeout is set to 10 seconds for testing purposes
    if ($_SESSION["last_action"] < time() - 10) {
      session_destroy();
      header("Location: login.php");
      die();
    }
    else {
      //update timeout if the user is logged and previous timeout is not expired yet
      $_SESSION["last_action"] = time();
    }
  }
?>
