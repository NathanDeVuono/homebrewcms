<?php

  require 'db_user_vars.php';
  require 'check.php';
  require '_existandvalue.php';

  $test = $_GET['test'];
  $date = $_GET['date'];
  $location = $_GET['location'];
  $description = $_GET['description'];
  

  $mysqli = new mysqli($dbHost,$dbUser,$dbPass,$dbDatabase);
  if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
    }

// DELETE FROM tablename WHERE id='value' AND firstname='value'


  $newEvent = "DELETE FROM tests WHERE test='".$test."' AND date='".$date."' AND description='".$description."'";
  // echo $newEvent;
  // die();
  $result = $mysqli->query($newEvent);
  if ($result) {
    $_SESSION['message'] = "<p>You have deleted this test.<br>
    Title: $title <br>
    Date: $date <br>
    Location: $location <br>
    Description: $description
    </p>";
    header('location:welcome.php');
    // echo $_SESSION['message'];
  }
  else {
    $_SESSION['message'] = "There was an error deleting the test.  Please try again.";
    header('location:welcome.php');
    // echo $_SESSION['message'];
  }

?>