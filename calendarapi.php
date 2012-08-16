<?php
  require 'check.php';
  $mysqli = new mysqli("localhost","root","1purplemonkey","tsp");
  if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
    }

  $result = $mysqli->query("SELECT * FROM events");
  if (!$result) {
    die("Error selecting data in table: events");
  }
  echo "<table>";
  echo '<tr><th>Event:</th><th>When:</th><th>Where:</th><th>Description:</th></tr>';
  while ($row = $result->fetch_row()){
    
    echo "<tr>";
    foreach($row as $field){
      if(!is_numeric($field))
      echo "<td>".$field."</td>";
    }
    echo "</tr>";
    
  }
echo "</table>";
?>