<?php

require 'db_user_vars.php';
require '_existandvalue.php';
if (
   ifExistAndValue('title')      &&
   ifExistAndValue('description')
   ) {
  $title = $_POST['title'];
  $date = isset($_REQUEST["date1"]) ? $_REQUEST["date1"] : "";
  $location = $_POST['location'];
  $mysqli = new mysqli($dbHost,$dbUser,$dbPass,$dbDatabase);
  if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
    }
    // echo "blah blah blah";
  $newTest = "INSERT INTO exCurrEvents (title, date, location) VALUES ('".$title."', '".$date."', '".$location."')";
  $result = $mysqli->query($newTest);
  print_r($result);
  echo $mysqli->error;
  if ($result) {
    $_SESSION['message'] = "<p>Thank you for submitting this new event.<br>
    Title: $title <br>
    Date: $date <br>
    Location: $location <br>
    </p>";
    header('location:welcome.php');
    // echo $_SESSION['message'];
  }
  else {
    $_SESSION['message'] = "There was an error submitting the event.  Please try again.";
    // header('location:addtest.php');
    echo $_SESSION['message'];
  }
  $mysqli->close();
}
else {
  $_SESSION['message'] = "Please fill out the whole form.";
  // header('location:addtest.php');
  echo $_SESSION['message'];
}
?>
