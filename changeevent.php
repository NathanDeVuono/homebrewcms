<?php
session_start();
require '_existandvalue.php';
if (
   ifExistAndValue('title')      &&
   ifExistAndValue('date')        &&
   ifExistAndValue('location')    &&
   ifExistAndValue('description')
   ) {
  $title = $_POST['title'];
  $date = $_POST['date'];
  $location = $_POST['location'];
  $description = $_POST['description'];
  $oldVals = explode("/. ", $_SESSION['oldVals']);
  $oldTitle = $oldVals['0'];
  $oldDate = $oldVals['1'];
  $oldLocation = $oldVals['2'];
  $oldDescription = $oldVals['3'];

  $mysqli = new mysqli("localhost","root","1purplemonkey","tsp");
  if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
    }

// UPDATE tablename SET firstname='value', lastname='value' WHERE field01='value01';


  $newEvent = "UPDATE events SET title='".$title."', date='".$date."', location='".$location."', description='".$description."' WHERE title='".$oldTitle."' AND date='".$oldDate."' AND location='".$oldLocation."' AND description='".$oldDescription."'";
  // echo $newEvent;
  // die();
  $result = $mysqli->query($newEvent);
  if ($result) {
    $_SESSION['message'] = "<p>Thank you for editing this event.<br>
    Title: $title <br>
    Date: $date <br>
    Location: $location <br>
    Description: $description
    </p>";
    header('location:welcome.php');
    // echo $_SESSION['message'];
  }
  else {
    $_SESSION['message'] = "There was an error editing the event.  Please try again.";
    header('location:addevent.php');
    // echo $_SESSION['message'];
  }
}
else {
  $_SESSION['message'] = "Please fill out the whole form.";
  header('location:addevent.php');
  // echo $_SESSION['message'];
}
?>