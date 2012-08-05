<?php
  function eventList() { 
    $mysqli = new mysqli("localhost","","","tsp");
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
    $location = $row['3'];
    $description = $row['4'];
    $view = "<a href='viewevent.php?title=$title&date=$date&location=$location&description=$description'>$title</a>";
    $edit = "<a href='editevent.php?title=$title&date=$date&location=$location&description=$description'>Edit</a>";
    $delete = "<a href='deleteevent.php?title=$title&date=$date&location=$location&description=$description' onclick='confirmDel();'>Delete</a>";
    echo "<li>$view <small>$edit $delete</small></li>";
    } 
  }
?>