<?php

  
  function exCurrList() { 
    require 'db_user_vars.php';
    $mysqli = new mysqli($dbHost,$dbUser,$dbPass,$dbDatabase);
    if ($mysqli->connect_error) {
      die('Connect Error (' . $mysqli->connect_errno . ') '
              . $mysqli->connect_error);
      }
    $result = $mysqli->query("SELECT * FROM exCurrEvents");
    if (!$result) {
      die('Error selecting data in table: exCurrEvents');
    }
    while ($row = $result->fetch_row()){
    $title = $row['1'];
    $date = $row['2'];
    $location = $row['3'];
    $view = "<a href='viewexcurr.php?title=$title&date=$date&location=$location'>$date: $title</a>";
    $edit = "<a href='editexcurr.php?title=$title&date=$date&location=$location'>Edit</a>";
    $delete = "<a href='deleteexcurr.php?title=$title&date=$date&location=$location'>Delete</a>";
    echo "<li>$view <small class=\"redColor\">$edit $delete</small></li>";
    }
    $mysqli->close(); 
  }
?>