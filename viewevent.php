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
    <ul>
      <li>Event Title:</li>
      <li><?php echo $_GET['title'];?></li>
      <li>Event Date:</li>
      <li><?php echo $_GET['date'];?></li>
      <li>Event Location:</li>
      <li><?php echo $_GET['location'];?></li>
      <li>Event Description:</li>
      <li><?php echo $_GET['description'];?></li>
    </ul>
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