<?php 
session_start();
require '_existandvalue.php';


if(
    ( 
    ifExistAndValue('username')   &&
    ifExistAndValue('password')
    )
    &&
    (
    strlen($_POST['username'])>=2 &&
    strlen($_POST['password'])>=2
    )
)
{
  $user = trim($_POST['username']);
  $pass = trim($_POST['password']);

  $mysqli = new mysqli('localhost', 'root','1purplemonkey', 'tsp');
    if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
    }
  $result = $mysqli->query("SELECT * FROM users WHERE username='".strtolower($user)."'");
  $known = $result->fetch_array();
  if (ifExistAndValue('remember')) {
  $rem = $_POST['remember'];
  setcookie('creds',$rem, time()+3600);
  }
  else {
    $rem=null;
    setcookie('creds',"", time()-3600);
  }
  if ($result->num_rows==1) {
    $test = 0;
    if (strcmp($pass, $known['password'])==0){
      $test=1;
    }
    if ($test==1) {
      $creds = array($user, $pass, $rem);
      $_SESSION['creds'] = implode(", ", $creds);
      $_COOKIE['creds'] = implode(", ", $creds);
      header('location:welcome.php');
     }
    else{
        $_SESSION['error']="Sorry, your password was not correct.";
        header('location:login.php');
    }
  }
  else {
    $_SESSION['error']="Sorry, your username was not correct.";
    header('location:login.php');
  } 
}
else {
  $_SESSION['error'] = 'Please fill in the whole login form.';
  header('location:login.php');
}
?>