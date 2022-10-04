<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link href="./css/login.css" rel="stylesheet">
  <link href="./css/main.css" rel="stylesheet">
</head>

<body>
  <div class="wrapper fadeInDown">
    <div id="formContent">
      <!-- Tabs Titles -->

      <!-- Icon -->
      <div class="fadeIn first">
        <div class="header-logo">
          Medical <span>clinic</span>
        </div>
      </div>

      <!-- Login Form -->
      <form method="post" action="./usercontrol.php">
        <input type="text" id="login" class="fadeIn second" name="account" placeholder="login" 
        style="border:<?php echo !empty($_GET['validaccount']) ? '1px solid red' : 'none' ?> ">
        <?php if (!empty($_GET['validaccount'])) {
          echo ("<br/> <span style='color: red'> Account" . $_GET['validaccount'] . '<span> <br/>');
        } ?>
        <input type="text" id="password" class="fadeIn third" name="password" placeholder="password" 
        style="border:<?php echo !empty($_GET['validpass']) ? '1px solid red' : 'none' ?> ">
        <?php if (!empty($_GET['validpass'])) {
          echo ("<br/> <span style='color: red'> Password" . $_GET['validpass'] . '<span> <br/>');
        } ?>
        <input type="submit" class="fadeIn fourth" value="Log In">
      </form>

      <!-- Remind Passowrd -->
      <div id="formFooter">
        <a class="underlineHover" href="./index.php">Back to homepage</a>
      </div>
    </div>
  </div>
</body>

</html>