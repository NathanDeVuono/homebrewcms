<!DOCTYPE HTML>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <title>Edit Event - Tech Support Professional - BCIT</title>
  <link rel="stylesheet" href="styles.css">
  <?php
    require 'check.php';
  ?>
</head>
<body>
  <div id="wrapper">
    <form action="changeevent.php" method="post" id="newevent">
      <?php
        $title = $_GET['title'];
        $date = $_GET['date'];
        $location = $_GET['location'];
        $description = $_GET['description'];
        $oldVals = array($title, $date, $location, $description);
        $_SESSION['oldVals'] = implode(", ", $oldVals);
      ?>
      <ul>
        <li><legend>Add a new event to the calendar</legend></li>
        <li><label for="title">Event Title:</label></li>
        <li><input type="text" name="title" id="title" placeholder="Event Title" value="<?php
          echo $title;
          ?>"></li>
        <li><label for="Date">Date:</label></li>
        <li><input type="date" name="date" id="date" placeholder="January 1st" value="<?php
          echo $date;
          ?>"></li>
        <li><label for="location">Location for the event:</label></li>
        <li><input type="text" name="location" id="location" placeholder="Room 471/Street Address" value="<?php
          echo $location;
          ?>"></li>
        <li><label for="description">Event Description:</label></li>
        <li><textarea name="description" id="description" cols="30" rows="10" placeholder="A description of the event."><?php
          echo $description;
          ?></textarea></li>
        <li><input type="submit" value="Submit"><input type="reset" value="Reset"></li>
      </ul>
    </form>
    <div id="error"><?php
    require '_existandvalue.php';
      if(ifExistAndValue($_SESSION['message'])){
        echo $_SESSION['message'];
        $_SESSION['message']=null;
      }
    ?>
    </div>
  </div>
</body>
</html>