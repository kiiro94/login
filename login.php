<html>
  <head>
    <title> Login </title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="loginStyle.css">
    <script> </script> 
  </head>

  <body>
    <form class="login" action="logging.php" method="post" autocomplete="off">
      <input type="text" name="user" placeholder="username">
      <input type="password" name="pass" placeholder="password">
      <br>
      <button type="submit">login</button>
    </form>

    <?php
      if (isset($_GET["reg"]) && $_GET["reg"] === "1") {
        echo "Registered succesfully.";
      }
    ?>
  </body>
</html>
