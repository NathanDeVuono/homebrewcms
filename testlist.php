<?php

  
  function testList() { 
    require 'db_user_vars.php';
    $mysqli = new mysqli($dbHost,$dbUser,$dbPass,$dbDatabase);
    if ($mysqli->connect_error) {
      die('Connect Error (' . $mysqli->connect_errno . ') '
              . $mysqli->connect_error);
      }
    $result = $mysqli->query("SELECT * FROM tests");
    if (!$result) {
      die('Error selecting data in table: tests');
    }
    while ($row = $result->fetch_row()){
    $test = $row['1'];
    $date = $row['2'];
    $description = $row['3'];
    $view = "<a href='viewtest.php?test=$test&date=$date&description=$description'>$date: $test</a>";
    $edit = "<a href='edittest.php?test=$test&date=$date&description=$description'>Edit</a>";
    $delete = "<a href='deletetest.php?test=$test&date=$date&description=$description'>Delete</a>";
    echo "<li>$view <small class=\"redColor\">$edit $delete</small></li>";
    }
    $mysqli->close(); 
  }
?>