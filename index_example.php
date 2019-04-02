<!-- example main page -->
<html>
  <head>
    <title> Login </title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="loginStyle.css">
    <script> </script>

    <!-- This is the code you have to copy in your web pages -->
    <?php 
      //check login status
      //THIS NEEDS TO BE INCLUDED IN EVERY PAGE THAT CHECKS LOGIN STATUS
      include "checkLogin.php";
    ?>
    <!-- End code to copy -->
  </head>

  <body style="background-color: #fafafa">
    <div>
      Logged in! <br>
      Register new user: <br>
    </div>

    <!-- register form -->
    <form class="register" action="register.php" method="post" autocomplete="off">
      <input type="text" name="user" placeholder="username">
      <input type="password" name="pass" placeholder="password">
      <br>
      <button type="submit">register</button>
    </form>

    <?php
      if (isset($_GET["reg"]) && $_GET["reg"] === "1") {
        echo "Registered succesfully.";
      }
    ?>
  </body>

</html>
