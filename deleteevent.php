<?php

  require 'db_user_vars.php';
  require 'check.php';
  require '_existandvalue.php';

  $title = $_GET['title'];
  $date = $_GET['date'];
  $location = $_GET['location'];
  $instructor = $_GET['instructor'];
  

  $mysqli = new mysqli($dbHost,$dbUser,$dbPass,$dbDatabase);
  if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
    }

// DELETE FROM tablename WHERE id='value' AND firstname='value'


  $newEvent = "DELETE FROM events WHERE title='".$title."' AND date='".$date."' AND location='".$location."' AND instructor='".$instructor."'";
  // echo $newEvent;
  // die();
  $result = $mysqli->query($newEvent);
  if ($result) {
    $_SESSION['message'] = "<p>You have deleted this event.<br>
    Title: $title <br>
    Date: $date <br>
    Location: $location <br>
    Instructor: $instructor
    </p>";
    header('location:welcome.php');
    // echo $_SESSION['message'];
  }
  else {
    $_SESSION['message'] = "There was an error deleting the event.  Please try again.";
    header('location:addevent.php');
    // echo $_SESSION['message'];
  }


?>