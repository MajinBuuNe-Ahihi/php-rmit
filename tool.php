<?php

 class ValidateForm {
  private $err = '';
  private $value;
  private $field;
  function __construct()
  {
    
  }

  function init($field)
  {
    $this->value = $_POST[$field];
    $this->field = $field;
    return $this;
  }

  function required(){
    if( empty($this->value))
    {
      $this->err = ' is required';
    }
    return $this;
  }

  function minlenght($min)
  {
    echo strlen(trim($this->value));
    if ( strlen(trim($this->value)) < (int)$min) {
      $this->err =  ' length greater than ' . $min;
    }
    return $this;
  }

  function maxlenght($max)
  {
    if ( strlen(trim($this->value)) > $max) {
    $this->err =  ' length less than ' . $max;
    }
    return $this;
  }

  function datevalid ()
  {
    $today = date("Y-m-d");
    $date = $this->value;
    if ($date < $today) {
      $this->err= ' date invalid';
    }
    return  $this;
  }

  function timevalid()
  {
    $mydate = getdate();
    $hour = (int)$mydate['hours'];
    $end = 0;

    switch($this->value)
    {
      case '1':
        $end = 12;
        break;
      case '2':
        $end = 15;
        break;
      case '3':
        $end = 16;
        break;
    }
    $dateregister = $_POST['date'];
    $today = date("Y-m-d");
    if ($hour > $end && $dateregister <= $today) {
      $this->err = ' this time invalid';
    }
    return  $this;
  }

  function reasonValid() {
    if(empty($this->value) || strcmp($this->value,"0"))
    {
      $this->err = ' you should choose a reason';
    }
    return $this;
  }

  function echoError(){
    return strlen($this->err)?$this->err:'';
  }
}

class Handlefile{

  private $file;
  private $data = array();
  private $path;
  function __construct($path)
  {
    $this->path = $path;
  }
  function writeFile($data){
    $this->file= fopen($this->path, 'a+');
    try{
      foreach ($data as $line) {
        fputcsv($this->file, $line);
      }
    }catch (Exception $e) {
      $this->error = $e->getLine();
    }
    fclose($this->file);
    return;
  }
  
  function readFile(){
    $this->file = fopen($this->path, 'a+');
    try{
      while (!feof($this->file)) {
      array_push($this->data,(fgetcsv($this->file)));
      }
      
    }catch (Exception $e) {
      $this->error = $e->getLine();
    }
    fclose($this->file);
    return $this->data;
  }
}