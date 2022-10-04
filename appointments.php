<?php
  require_once('./tool.php');
  session_start();
  $timezone = $_SESSION['time'];
  date_default_timezone_set($timezone);
  $file = new Handlefile("appointments.txt");
  $validaeform = new ValidateForm();
  $time2 = array("","9am - 12am","12am - 3pm","3pm - 4pm");
  $reason2  = array('','Childhood Vaccination Shots','Influenza Shot','Covid BoosterShot','Blood test' );
  $pid = $validaeform->init('pid')->required()->echoError();
  $date = $validaeform->init('date')->required()->datevalid()->echoError();
  $time = $validaeform->init('time')->required()->timevalid()->echoError();
  $reason = $validaeform->init('reason')->required()->timevalid()->echoError();
 if(!empty($pid))
 {
    header("location:booking.php?pid=".$pid);
    exit;
 }
 else {
  if (!empty($date)) {
    header("location:booking.php?date=". $date);
    exit;
  } else {
    if (!empty($time)) {
      header("location:booking.php?time=" . $time);
      exit;
    } else {
      if (!empty($reason)) {
        header("location:booking.php?reason=" . $reason);
        exit;
      } else {
        $data = array( array(
          $_POST['pid'],
          $_POST['date'],
          $time2[$_POST['time'].""],
          $reason2[$_POST['reason']]
        ));
        $file->writeFile($data);
        header("location:sucessbooking.php");
        exit;
      }
    }
  }
}
