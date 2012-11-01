<!DOCTYPE HTML>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <title>Add Event - Tech Support Professional - BCIT</title>
  <link rel="stylesheet" href="home.css">
  <script language="javascript" src="calendar.js"></script>
  <?php
    require 'check.php';
  ?>
</head>
<body>
  <header class="gradient">
    <div class="headerContents">
      <div class="bcitHeaderLogo"> <a href="http://www.bcit.ca" title="BCIT Home" target="_blank"><img src="../images/eric_mockup_06.png" class="bcitHeaderLogo" width="137" height="58" alt="BCIT Logo"></a> </div>
      <!--End bcitHeaderLogo-->
      <div class="bcitHeaderLink"> <a href="http://my.bcit.ca" class="headerLinkText" target="_blank" title="myBCIT Home">myBCIT.ca</a></div>
      <!--End of bcitHeaderLink-->
      <div class="logo"> <a href="index.php" title="home"><img src="../images/eric_mockup_03.png" width="275" height="135" alt="TSP Logo"></a></div>
      <!--End of logo--> 
    </div>
    <!--End of headerContents--> 
  </header>
  <div class="clearFix"></div>
  <nav>
    <div class="navContent">
      <ul>
        <li class="nav-one"><a href="../index.php" title="Home">Home</a> |</li>
        <li class="nav-two"><a href="../schedule.php" title="Schedule">Schedule</a> |</li>
        <li class="nav-three"><a href="../about.php" title="About Program">About Program</a> |</li>
        <li class="nav-four"><a href="../certifications.php" title="Certifications">Certifications</a> |</li>
        <li class="nav-five"><a href="../work-term.php" title="Work Term">Work Term</a></li>
      </ul>
    </div>
    <!--End of navContent--> 
  </nav>
  <div id="wrapper">
  <article class="loginForm">
    <form action="newexcurr.php" method="post" id="newevent">
      <ul>
        <li><legend class="adminMessage">Add a new test to the calendar</legend></li>
        <li><label for="title">Event Title:</label></li>
        <li><input type="text" name="title" id="title" required placeholder="Test Title"></li>
        <li><label for="Date">Date:</label></li>
        <li><?php
          require_once('tc_calendar.php');
          $myCalendar = new tc_calendar("date1", true);
          $myCalendar->setIcon("images/iconCalendar.gif");
          $myCalendar->setDate(1, 1, 2012);
          $myCalendar->writeScript();   
          ?></li>
        <li><label for="location">Event Description:</label></li>
        <li><textarea name="location" id="location" cols="18" rows="10" placeholder="Location of event." required></textarea></li>
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
    </article>
  </div>
</body>
</html>