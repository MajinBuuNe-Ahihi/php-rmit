<?php 
session_start();
require_once('./tool.php');
$account2 = $_POST['account'];
$password2 = $_POST['password'];
$file3 = new Handlefile("users.txt");
$validform2 = new ValidateForm();
$validaccount2 = $validform2->init('account')->required()->minlenght(4)->echoError();
$validpass2 = $validform2->init('password')->required()->minlenght(4)->echoError();
if(empty($_SESSION['user']))
{
  header('location:login.php');
  exit;
}


$users2 = $file3->readFile();
$trueaccount2 = false;
foreach ($users2 as $list) {
  if (strcmp($list[0], $account2) == 0) {
    $trueaccount2 = true;
  }
}

if(!empty($validaccount2) || !empty($validpass2)){
  if(!empty($validaccount2)){
    header('location:register.php?account='.$validaccount2);
    exit;
  }
  else {
    header('location:register.php?pass='.$validpass2);
    exit;
  }
}
else {
  if($trueaccount2) {
    header('location:register.php?account= exist!');
    exit;
  }
  else {
    $data3 = array(array($account2,$password2));
    $file3->writeFile($data3);
    header('location:admin.php?regist= true');
    exit;
  }
}
