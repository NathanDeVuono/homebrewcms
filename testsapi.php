<?php
  $mysqli = new mysqli("localhost","root","1purplemonkey","tsp");
  if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
    }
  $today = date('Y-m-d');
  $twoWeeks = date('Y-m-d',strtotime("+14 days"));
  $result = $mysqli->query("SELECT test, date, location FROM tests WHERE date BETWEEN '".$today."' AND '".$twoWeeks."';");
  if (!$result) {
    die('error selecting data in table: tests');
  }
   elseif ($result->num_rows == 0) {
    echo "No upcoming tests.";
  }
  else {
    echo "<table>";
    echo '<tr><th>Test:</th><th>When:</th><th>Where:</th></tr>';
    while ($row = $result->fetch_row()){
      echo "<tr>";
      foreach($row as $field){
        echo "<td>".$field."</td>";
      }
      echo "</tr>";
      
    }
    echo "</table>";
  }
  $mysqli->close(); 
?>