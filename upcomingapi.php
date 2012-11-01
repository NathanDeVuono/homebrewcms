<?php

  require 'db_user_vars.php';
  $mysqli = new mysqli($dbHost,$dbUser,$dbPass,$dbDatabase);
  if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
    }
  $today = date('Y-m-d');
  $fiveDays = date('Y-m-d',strtotime("+5 days"));
  $result = $mysqli->query("SELECT title, date, location FROM exCurrEvents WHERE date BETWEEN '".$today."' AND '".$fiveDays."';");
  if (!$result) {
    die('error selecting data in table: exCurrEvents');
  }
  elseif ($result->num_rows == 0) {
    echo "No upcoming events.";
  }
  else {
    echo "<table>";
    echo '<thead><th>Event:</th><th>When:</th><th>Where:</th></thead>';
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