<?php

require 'db_user_vars.php';
require '_existandvalue.php';

  $title = $_POST['title'];
  $date = isset($_REQUEST["date1"]) ? $_REQUEST["date1"] : "";
  $days = $_POST['days'];
  if (isset($_POST['location'])) {
    $location = $_POST['location'];
  }
  else {
    $location = null;
  }
  if (isset($_POST['instructor'])) {
    $instructor = $_POST['instructor'];
  }
  else{
    $instructor = null;
  }

  $description = $_POST['description'];
  $mysqli = new mysqli($dbHost,$dbUser,$dbPass,$dbDatabase);
  if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
    }
  $newEvent = "INSERT INTO events (title, date, days, location, instructor) VALUES ('".$title."', '".$date."', '".$days."', '".$location."', '".$instructor."')";
  $result = $mysqli->query($newEvent);
  if ($result) {
    $_SESSION['message'] = "<p>Thank you for submitting this new event.<br>
    Title: $title <br>
    Date: $date <br>
    Location: $location <br>
    Instructor: $instructor
    </p>";
    header('location:welcome.php');
    // echo $_SESSION['message'];
  }
  else {
    $_SESSION['message'] = "There was an error submitting the event.  Please try again.";
    header('location:addevent.php');
    // echo $_SESSION['message'];
  }
  $mysqli->close();

?>
