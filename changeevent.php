<?php
session_start();
require 'db_user_vars.php';
require '_existandvalue.php';

  $title = $_POST['title'];
  $date = isset($_REQUEST["date1"]) ? $_REQUEST["date1"] : "";
  $days = $_POST['days'];
  $location = $_POST['location'];
  $instructor = $_POST['instructor'];
  $oldVals = explode("/. ", $_SESSION['oldVals']);
  $oldTitle = $oldVals['0'];
  $oldDate = $oldVals['1'];
  $oldDays = $oldVals['2'];
  $oldLocation = $oldVals['3'];
  $oldInstructor = $oldVals['4'];

  $mysqli = new mysqli($dbHost,$dbUser,$dbPass,$dbDatabase);
  if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
    }

// UPDATE tablename SET firstname='value', lastname='value' WHERE field01='value01';


  $newEvent = "UPDATE events SET title='".$title."', date='".$date."', days='".$days."', location='".$location."', instructor='".$instructor."' WHERE title='".$oldTitle."' AND date='".$oldDate."' AND days='".$oldDays."' AND location='".$oldLocation."' AND instructor='".$oldInstructor."'";
  echo $newEvent;
  $result = $mysqli->query($newEvent);
  if ($result) {
    $_SESSION['message'] = "<p>Thank you for editing this event.<br>
    Title: $title <br>
    Date: $date <br>
    Days: $days <br>
    Location: $location <br>
    Instructor: $instructor
    </p>";
    header('location:welcome.php');
// 
  }
  else {
    $_SESSION['message'] = "There was an error editing the event.  Please try again.";
    header('location:editevent.php');
    echo $mysqli->error;
    die('Aw ShitS');
    // echo $_SESSION['message'];
  }

?>