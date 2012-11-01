<?php

  require 'db_user_vars.php';
  require 'check.php';

  $title = $_GET['title'];
  $date = $_GET['date'];
  $location = $_GET['location'];
  

  $mysqli = new mysqli($dbHost,$dbUser,$dbPass,$dbDatabase);
  if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
    }

// DELETE FROM tablename WHERE id='value' AND firstname='value'


  $newEvent = "DELETE FROM exCurrEvents WHERE title='".$title."' AND date='".$date."' AND location='".$location."'";
  // echo $newEvent;
  // die();
  $result = $mysqli->query($newEvent);
  if ($result) {
    $_SESSION['message'] = "<p>You have deleted this Event.<br>
    Title: $title <br>
    Date: $date <br>
    Location: $location
    </p>";
    header('location:welcome.php');
    // echo $_SESSION['message'];
  }
  else {
    $_SESSION['message'] = "There was an error deleting the title.  Please try again.";
    header('location:welcome.php');
    // echo $_SESSION['message'];
  }

?>