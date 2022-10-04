<?php
session_start();
require_once('./tool.php');
$account = $_POST['account'];
$password = $_POST['password'];
$_SESSION['user'] = "";

if(!empty($_GET['logout']))
{
  header('location:login.php');
  exit;
}

$file2 = new Handlefile("users.txt");
$validform = new ValidateForm();

$users = $file2->readFile();

$validaccount = $validform->init('account')->required()->minlenght(4)->echoError();
$validpass = $validform->init('password')->required()->minlenght(4)->echoError();

if(!empty($validaccount)) {
  header('location:login.php?validaccount='.$validaccount);
  exit;
}
else {
  if(!empty($validpass)){
    header('location:login.php?validpass=' . $validpass);
    exit;
  }
  else {
    $trueaccount = false;
    $truepass = false;

    foreach($users as $list)
    { 
      if (strcmp($list[0],$account) == 0) {
        $trueaccount = true;
      }
      if (strcmp($list[1], $password) == 0) {
        $truepass = true;
      }
      if($trueaccount && $truepass){
        break;
      }
    }
    
    if($trueaccount && $truepass) {
      $_SESSION['user'] = $account."";
      header('location:admin.php');
      exit;
    }
    else {
      if($trueaccount)
      {
        header('location:login.php?validpass= wrong!');
        exit;
      }
      else {
        header('location:login.php?validaccount= wrong!');
        exit;
      }
    }
  }
}