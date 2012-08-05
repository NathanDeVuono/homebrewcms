<!DOCTYPE HTML>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <title>Add Event - Tech Support Professional - BCIT</title>
  <link rel="stylesheet" href="styles.css">
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
        <li><input type="date" name="date" id="date" required placeholder="January 1st"></li>
        <li><label for="location">Location for the event:</label></li>
        <li><input type="text" name="location" id="location" required placeholder="Room 471/Street Address"></li>
        <li><label for="description">Event Description:</label></li>
        <li><textarea name="description" id="description" cols="30" rows="10" placeholder="A description of the event." required></textarea></li>
        <li><input type="submit" value="Submit"><input type="reset" value="Reset"></li>
      </ul>
    </form>
    <div id="error"><?php
    require '_existandvalue.php';
      if(ifExistAndValue($_SESSION['message'])){
        echo $_SESSION['message'];
        $_SESSION['message']=null;
      }
    ?></div>
  </div>
</body>
</html>