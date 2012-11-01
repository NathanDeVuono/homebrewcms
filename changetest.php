<?php
session_start();
require 'db_user_vars.php';

  $test = $_POST['test'];
  $date = $_POST['date'];
  $description = $_POST['description'];
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


  $newTest = "UPDATE tests SET test='".$test."', date='".$date."', description='".$description."' WHERE title='".$oldTest."' AND date='".$oldDate."' AND description='".$oldDescription."'";
  // echo $newTest;
  // die();
  $result = $mysqli->query($newTest);
  if ($result) {
    $_SESSION['message'] = "<p>Thank you for editing this test.<br>
    Title: $title <br>
    Date: $date <br>
    Location: $location <br>
    Description: $description
    </p>";
    header('location:welcome.php');
    // echo $_SESSION['message'];
  }
  else {
    $_SESSION['message'] = "There was an error editing the test.  Please try again.";
    header('location:welcome.php');
    // echo $_SESSION['message'];
  }

?>