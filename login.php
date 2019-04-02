<html>
  <head>
    <title> Login </title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="loginStyle.css">
    <script> </script> 
    <?php include "dbconn.php" ?>
    <?php
      //Check if table exists and create it if it doesn't
      $res = $conn->query("SHOW TABLES LIKE 'Users'");
      if ($res->num_rows === 0) {
        $sql = 'CREATE TABLE Users (
          id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
          username VARCHAR(20) NOT NULL UNIQUE,
          password VARCHAR(64) NOT NULL,
          registered_datetime DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP)';

        if ($conn->query($sql) === TRUE) {
          //
        }
        else {
          echo "Error creating table: " . $conn->error;
        }
      }

      //Check if the table is empty, if it's not, register new user
      $res = $conn->query("SELECT COUNT(*) AS count from Users");
      $data = $res->fetch_assoc();
      $empty = true;
      if ($data["count"] > 0) { $empty = false; }
    ?>
  </head>

  <body>
  <form class="login" action="<?php if ($empty) { echo "register.php"; } else { echo "logging.php"; } ?>" method="post" autocomplete="off">
      <input type="text" name="user" placeholder="username">
      <input type="password" name="pass" placeholder="password">
      <br>
      <button type="submit"><?php if ($empty) { echo "register first user"; } else { echo "login"; }?></button>
    </form>

    <?php
      if (isset($_GET["reg"]) && $_GET["reg"] === "1") {
        echo "Registered succesfully.";
      }
    ?>
  </body>
</html>
