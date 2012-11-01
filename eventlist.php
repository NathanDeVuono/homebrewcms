<?php

  

  function eventList() { 
    require 'db_user_vars.php';
    $mysqli = new mysqli($dbHost,$dbUser,$dbPass,$dbDatabase);
    if ($mysqli->connect_error) {
      die('Connect Error (' . $mysqli->connect_errno . ') '
              . $mysqli->connect_error);
      }
    $result = $mysqli->query("SELECT * FROM events");
    if (!$result) {
      die('Error selecting data in table: events');
    }
    while ($row = $result->fetch_row()){
    $title = $row['1'];
    $date = $row['2'];
    $days = $row['3'];
    $location = $row['4'];
    $instructor = $row['5'];
    $view = "<a href='viewevent.php?title=$title&date=$date&days=$days&location=$location&instructor=$instructor'>$date: $title</a>";
    $edit = "<a href='editevent.php?title=$title&date=$date&days=$days&location=$location&instructor=$instructor'>Edit</a>";
    $delete = "<a href='deleteevent.php?title=$title&date=$date&location=$location&instructor=$instructor'>Delete</a>";
    echo "<li>$view <small class=\"redColor\">$edit $delete</small></li>";
    }
    $mysqli->close(); 
  }
?>