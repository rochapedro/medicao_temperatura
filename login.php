<?php

if (!isset($_SESSION['FERRAM_URL_APP'])){
  session_start();
}
  require_once('app/scripts.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="css/login.css">
  <?php 
    getMeta();
    getCSSCommonFiles();
  ?>
  

</head>
<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Login Form -->
    <form action="app/models/Login.php" method="post">
      <input type="text" id="usuario" class="fadeIn second" name="usuario" placeholder="Usuário">
      <input type="password" id="senha" class="fadeIn third" name="senha" placeholder="Senha">
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>

    <!-- Remind Passowrd 
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>-->

  </div>
</div>
</body>
</html>


