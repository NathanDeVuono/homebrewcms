<?php
  require 'check.php';
  require '_existandvalue.php';
if (
   ifExistAndValue('title')      &&
   ifExistAndValue('date')        &&
   ifExistAndValue('location')    &&
   ifExistAndValue('description')
   ) {
  $title = $_GET['title'];
  $date = $_GET['date'];
  $location = $_GET['location'];
  $description = $_GET['description'];
  

  $mysqli = new mysqli("localhost","root","1purplemonkey","tsp");
  if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
    }

// DELETE FROM tablename WHERE id='value' AND firstname='value'


  $newEvent = "DELETE FROM events WHERE title='".$title."' AND date='".$date."' AND location='".$location."' AND description='".$description."'";
  // echo $newEvent;
  // die();
  $result = $mysqli->query($newEvent);
  if ($result) {
    $_SESSION['message'] = "<p>You have deleted this event.<br>
    Title: $title <br>
    Date: $date <br>
    Location: $location <br>
    Description: $description
    </p>";
    header('location:welcome.php');
    // echo $_SESSION['message'];
  }
  else {
    $_SESSION['message'] = "There was an error deleting the event.  Please try again.";
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