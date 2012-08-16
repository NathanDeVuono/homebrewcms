<!DOCTYPE HTML>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <title>Add Event - Tech Support Professional - BCIT</title>
  <link rel="stylesheet" href="styles.css">
  <script language="javascript" src="calendar.js"></script>
  <?php
    require 'check.php';
  ?>
</head>
<body>
  <div id="wrapper">
    <form action="newevent.php" method="post" id="newevent">
      <ul>
        <li><legend>Add a new event to the calendar</legend></li>
        <li><label for="title">Event Title:</label></li>
        <li><input type="text" name="title" id="title" required placeholder="Event Title"></li>
        <li><label for="Date">Date:</label></li>
        <li><?php
          require_once('tc_calendar.php');
          $myCalendar = new tc_calendar("date1", true);
          $myCalendar->setIcon("images/iconCalendar.gif");
          $myCalendar->setDate(1, 1, 2000);
          $myCalendar->writeScript();   
          ?></li>
        <li><label for="location">Location for the event:</label></li>
        <li><input type="text" name="location" id="location" required placeholder="Room 471/Street Address"></li>
        <li><label for="description">Event Description:</label></li>
        <li><textarea name="description" id="description" cols="30" rows="10" placeholder="A description of the event." required></textarea></li>
        <li><input type="submit" value="Submit"><input type="reset" value="Reset"></li>
      </ul>
    </form>
    <div id="error"><?php
    require '_existandvalue.php';
      if(isset($_SESSION['message'])){
        echo $_SESSION['message'];
        $_SESSION['message']=null;
      }
    ?></div>
  </div>
</body>
</html>