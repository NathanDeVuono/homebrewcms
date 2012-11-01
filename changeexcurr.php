<?php
session_start();
require 'db_user_vars.php';

  $title = $_POST['title'];
  $date = $_POST['date'];
  $location = $_POST['location'];
  $oldVals = explode("/. ", $_SESSION['oldVals']);
  $oldTest = $oldVals['0'];
  $oldDate = $oldVals['1'];
  $oldDescription = $oldVals['2'];

  $mysqli = new mysqli($dbHost,$dbUser,$dbPass,$dbDatabase);
  if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
    }

// UPDATE tablename SET firstname='value', lastname='value' WHERE field01='value01';


  $newTest = "UPDATE exCurrEvents SET title='".$title."', date='".$date."', location='".$location."' WHERE title='".$oldTest."' AND date='".$oldDate."' AND location='".$oldDescription."'";
  // echo $newTest;
  // die();
  $result = $mysqli->query($newTest);
  if ($result) {
    $_SESSION['message'] = "<p>Thank you for editing this event.<br>
    Title: $title <br>
    Date: $date <br>
    Location: $location <br>
    Description: $location
    </p>";
    header('location:welcome.php');
    // echo $_SESSION['message'];
  }
  else {
    $_SESSION['message'] = "There was an error editing the event.  Please try again.";
    header('location:welcome.php');
    // echo $_SESSION['message'];
  }

?>