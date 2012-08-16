<?php

require '_existandvalue.php';
if (
   ifExistAndValue('title')      &&
   ifExistAndValue('location')    &&
   ifExistAndValue('description')
   ) {
  $title = $_POST['title'];
  $date = isset($_REQUEST["date1"]) ? $_REQUEST["date1"] : "";
  $location = $_POST['location'];
  $description = $_POST['description'];
  $mysqli = new mysqli("localhost","root","1purplemonkey","tsp");
  if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
    }
  $newEvent = "INSERT INTO events (title, date, location, description) VALUES ('$title', '$date', '$location', '$description')";
  $result = $mysqli->query($newEvent);
  if ($result) {
    $_SESSION['message'] = "<p>Thank you for submitting this new event.<br>
    Title: $title <br>
    Date: $date <br>
    Location: $location <br>
    Description: $description
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
}
else {
  $_SESSION['message'] = "Please fill out the whole form.";
  header('location:addevent.php');
  // echo $_SESSION['message'];
}
?>
