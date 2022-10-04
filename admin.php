<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <?php
  require_once('./head.php');
  ?>
</head>
<?php
session_start();
require_once('./tool.php');
?>
<style>
  .notification {
    position: absolute;
    top: 10px;
    left: 50%;
    transform: translate(-50%, calc(-100% - 12px));
    width: 300px;
    height: 80px;
    background: linear-gradient(to right, #00AAFF 10%, #FFD400 10%);
    box-shadow: 0px 0px 10px #0d0d0d28;
    text-align: center;
    color: black;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 20px;
    border-radius: 10px;
    transition: all 0.5s linear;
  }

  .notification.active {
    transform: translate(-50%, 0%);
  }

  table {
    width: 100%;
    max-width: 1200px;
    position: relative;
    top: 100px;
    left: 0;
    margin: auto;
  }

  th {
    padding: 10px 5px;
    background-color: transparent;
    color: var(--yellow-color);
    text-align: left;
  }
</style>

<body>
  <?php
  echo '<span class="notification" style="font-size:30px";">Xin Chao: ' . $_SESSION["user"] . '</span>';
  ?>
  <header>
    <div class="header-wrapper">
      <a a href="./index.php" class="header-logo">
        Medical <span>clinic</span> admin
      </a>
      <ul class="header-navigation" style="justify-content: flex-end">
        <li class="header-navigation__element"><a href="./register.php" class="header-navigation__element__link">Register User</a></li>
        <li class="header-navigation__element"><a href="./usercontrol.php?logout=true" class="header-navigation__element__link">Logout</a></li>
      </ul>
    </div>
  </header>
  <?php
  if (!empty($_SESSION["user"]) && empty($_GET['regist'])) {
    echo "<script>let notify = document.querySelector('.notification');setTimeout(() => notify.classList.add('active'), 1000);setTimeout(() => notify.classList.remove('active'), 3000);</script>";
  }
  if (empty($_SESSION["user"])){
    echo '<script>  
    location.href = "http://localhost/testphp/login.php" 
    </script>';
  }
  ?>
  <div class="container mt-3">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>UserID</th>
          <th>Date</th>
          <th>Time</th>
          <th>Reason</th>
        </tr>
      </thead>
      <tbody>
        <?php if (!empty($_SESSION["user"])) {
          $appoiment = new Handlefile("appointments.txt");
          $data = $appoiment->readFile();
          foreach ($data as $line) {
            echo '<tr><td>' . $line[0] . '</td><td>' . date_format(date_create($line[1] . ""), "D,d M Y") . '</td><td>' . $line[2] . '</td><td>' . $line[3] . '</td></tr>';
          }
        }
        
        ?>
      </tbody>
    </table>
    <table class="table table-striped" style="width: 50%;">
      <thead>
        <tr>
          <th>UserName</th>
        </tr>
      </thead>
      <tbody>
        <?php if (!empty($_SESSION["user"])) {
          $user = new Handlefile("users.txt");
          $datauser = $user->readFile();
          foreach ($datauser as $line) {
            echo '<tr><td>' . $line[0] .'</td></tr>';
          }
        }
      
        ?>
      </tbody>
    </table>
  </div>
</body>


</html>