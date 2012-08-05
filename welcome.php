<!DOCTYPE HTML>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <title>Administration - Tech Support Professional - BCIT</title>
  <link rel="stylesheet" href="styles.css">
  <?php
    require 'check.php';
  ?>
</head>
<body>
  <div id="wrapper">
    
    <h1>Welcome</h1>
    <p>Welcome to the administration backend of the BCIT TSP program's PHP-based content management system.  From here you may post events to the calendar, edit events currently in the calendar or remove events from the calendar.</p>
    <p>Here is a list of events in the calendar:</p>

    <p><a href="addevent.php">Add An Event</a></p>
    <p><?php
    require '_existandvalue.php';
      if(ifExistAndValue($_SESSION['message'])){
        echo $_SESSION['message'];
        // $_SESSION['message']=null;
      }
    ?></p>
    <ul>
      <?php
      require 'eventlist.php';
      echo eventList();
      ?>
    </ul>
  </div>
</body>
</html>