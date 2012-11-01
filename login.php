<!DOCTYPE HTML>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<title>Login - Tech Support Professional - BCIT</title>
<link rel="stylesheet" href="home.css">
<?php
    session_start();
    if(isset($_COOKIE['creds'])){
      $creds = explode(", ", $_COOKIE['creds']);
    }
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
  <form action="auth.php" method="post" class="login">
    <ul>
      <li>
        <legend class="adminMessage">Please Log In</legend>
      </li>
      <div id="error">
        <?php
        if (isset($_SESSION['error'])) {
          echo $_SESSION['error'];
        }
      ?>
      </div>
      <li>
        <label for="username">Username:</label>
      </li>
      <li>
        <input type="text" name="username" id="username" placeholder="Username"
      <?php
        if(isset($creds)){
          echo "value='".$creds['0']."'";
        }
      ?>>
      </li>
      <li>
        <label for="password">Password:</label>
      </li>
      <li>
        <input type="password" name="password" id="password" placeholder="Password" 
      <?php
        if(isset($creds)){
          echo "value='".$creds['1']."'";
        }
      ?>>
      </li>
      <li>
        <input type="checkbox" name="remember" id="remember" 
        <?php
        if(isset($creds['2'])){
          echo "value='checked'";
        }
        ?>
        >
        <label for="checkbox">Remember Me</label>
      </li>
      <li>
        <input type="submit" class="formbutton" value="Submit">
        <input type="reset" class="formbutton" value="Reset">
      </li>
    </ul>
  </form>
  </article>
</div>
</body>
</html>