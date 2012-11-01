<!DOCTYPE HTML>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <title>Administration - Tech Support Professional - BCIT</title>
  <link rel="stylesheet" href="home.css">
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
  <div class="contentWrapper">
    <article class="fullwidth">
    <h1>Welcome</h1>
    <p>Welcome to the administration backend of the BCIT TSP program's PHP-based content management system.  From here you may post events to the calendar, edit events currently in the calendar or remove events from the calendar.</p>
    </article>
    <article class="fullwidth">
    <h1>Here is a list of events in the calendar:</h1>

    <p><a href="addevent.php" class="redColor">Add An Event</a></p>
    <p><?php
    require '_existandvalue.php';
      if(isset($_SESSION['message'])){
        echo $_SESSION['message'];
        $_SESSION['message']=null;
      }
    ?></p>
    <ul>
      <?php
      require 'eventlist.php';
      echo eventList();
      ?>
    </ul>
    </article>
    <article class="fullwidth">
    <h1>Here is a list of tests in the calendar:</h1>
    <p><a href="addtest.php" class="redColor">Add A Test</a></p>
    <ul>
      <?php
        require 'testlist.php';
        echo testList();
      ?>
    </ul>
    </article>
    <article class="fullwidth">
    <h1>Here is a list of extra curricular events in the calendar:</h1>
    <p><a href="addexcurr.php" class="redColor">Add An Event</a></p>
    <ul>
      <?php
        require 'excurrlist.php';
        echo exCurrList();
      ?>
    </ul>
    </article>
  </div>
</body>
</html>