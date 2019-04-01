<html>
  <head>
    <title> Login </title>
    <script> </script> 
    <?php include "checkLogin.php" ?>
  </head>

  <body>
    <form class="login" action="index.php" method="post" autocomplete="off">
      <input type="text" name="user" placeholder="username">
      <input type="password" name="pass" placeholder="password">
      <button type="submit">login</button>
    </form>
    
    <form class="create" action="register.php" method="post" autocomplete="off">
      <input type="text" name="user" placeholder="username">
      <input type="password" name="pass" placeholder="password">
      <button type="submit">register</button>
    </form>

      <br>

      <?php
        if ($connected) { echo "Logged."; }
        
        if (isset($_GET["reg"]) && $_GET["reg"] === "1") {
          echo "Registered succesfully.";
        }
      ?>
  </body>
</html>
