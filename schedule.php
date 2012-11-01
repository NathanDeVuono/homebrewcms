<!doctype html>
<html><!-- InstanceBegin template="/Templates/index.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="UTF-8">
<!-- InstanceBeginEditable name="doctitle" -->
<title>Schedule | TSP</title>
<!-- InstanceEndEditable -->
<script src="js/jquery-1.8.0.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/stickysidebar.jquery.js"></script>
<script src="js/slides.min.jquery.js"></script>
<script>
	$(function(){
      $("#slides").slides({
        preload: true,
        preloadImage: '/images/loading.gif',
		pagination: false,
		crossfade: true,
		play: 5000,
		effect: 'fade',
		hoverPause: 'true'
      });
    });
</script>
<script>
      $(function () {
        $("#sidebar").stickySidebar({
            timer: 0
          , easing: "easeInOutQuad"
        });
      });
    </script>
<link href="home.css" rel="stylesheet" type="text/css">
<!--[if lt IE 9]>
<script src="dist/html5shiv.js"></script>
<![endif]-->
<!--[if gte IE 9]>
  <style type="text/css">
    .gradient {
       filter: none;
    }
  </style>
<![endif]-->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
<!-- InstanceParam name="sidebarNav" type="boolean" value="false" -->
</head>


<!-- InstanceBeginEditable name="body class" -->
<body class="sectiontwo">
<!-- InstanceEndEditable -->
<div class="siteWrapper">
  <header class="gradient">
    <div class="headerContents">
      <div class="bcitHeaderLogo"> <a href="http://www.bcit.ca" title="BCIT Home" target="_blank"><img src="images/eric_mockup_06.png" class="bcitHeaderLogo" width="137" height="58" alt="BCIT Logo"></a> </div>
      <!--End bcitHeaderLogo-->
      <div class="bcitHeaderLink"><a href="login.php" class="headerLinkText" title="Admin Login">Admin Login</a>|<a href="http://my.bcit.ca" class="headerLinkText" target="_blank" title="myBCIT Home">myBCIT.ca</a></div>
      <!--End of bcitHeaderLink-->
      <div class="logo"> <a href="index.php" title="home"><img src="images/eric_mockup_03.png" width="275" height="135" alt="TSP Logo"></a></div>
      <!--End of logo--> 
    </div>
    <!--End of headerContents--> 
  </header>
  <div class="clearFix"></div>
  <nav>
    <div class="navContent">
      <ul>
        <li class="nav-one"><a href="index.php" title="Home">Home</a> |</li>
        <li class="nav-two"><a href="schedule.php" title="Schedule">Schedule</a> |</li>
        <li class="nav-three"><a href="about.php" title="About Program">About Program</a> |</li>
        <li class="nav-four"><a href="certifications.php" title="Certifications">Certifications</a> |</li>
        <li class="nav-five"><a href="work-term.php" title="Work Term">Work Term</a></li>
      </ul>
    </div>
    <!--End of navContent--> 
  </nav>
  <div class="contentWrapper">
    <section class="mainContent">
	<!-- InstanceBeginEditable name="mainContent" -->
    <article class="schedule">
   	 <h1>Course Schedule</h1>
   	 <?php require 'calendarapi.php';?>
    </article>
	<!-- InstanceEndEditable -->
    </section>
    <!--End of mainContent-->
    <aside class="sidebarWrapper">
      <aside id="sidebar">
    	<div class="sidebarWidget tests">
       	  <h2><div class="circle"></div>Upcoming Tests</h2>
          <?php require 'testsapi.php'; ?>  
          </div>
        <div class="sidebarWidget workTerm">
        	<h2><div class="circle"></div>Work Term</h2>
            <p class="subhead">Employers</p>
            <p>Hire an intern by clicking the button below</p>
            <a href="work-term.php" class="internButton">Hire An Intern</a>
        </div>
		<div class="sidebarWidget reminders">
        	<h2><div class="circle"></div>Upcoming Events</h2>
                <?php
     				 require 'upcomingapi.php';
    			?>
        </div>
        <div class="sidebarBlock">
        </div>
       </aside><!--End of Sidebar--> 
    </aside><!--End of sidebarWrapper-->
  </div>
  <!--End of contentWrapper-->
  <footer>
    <div class="footerContents">
      <div class="location">
        <h1>Campus Location</h1>
        <p>555 Seymour St.<br>
          Vancouver, British Columbia<br>
          V6B 3H6 &nbsp;Canada</p>
      </div>
      <!--End of Location-->
      <div class="sitemap">
        <ul>
          <li><a href="index.php" title="Home">Home</a> |</li>
          <li><a href="schedule.php" title="Schedule">Schedule</a> |</li>
          <li><a href="about.php" title="About Program">About Program</a> |</li>
          <li><a href="certifications.php" title="Certifications">Certifications</a> |</li>
          <li><a href="work-term.php" title="Work Term">Work Term</a> |</li>
          <li>
        <a href="bcit_policies.html" target="_blank" title="BCIT Policies">BCIT Policies</a></li>
        </ul>
        <div class="clearFix"></div>
        <a href="http://my.bcit.ca" title="myBCIT Home" class="bcitFooterLink">myBCIT.ca</a>
        <div class="clearFix"></div>
        <div class="bcitFooterLogo"><a href="http://www.bcit.ca" target="_blank" title="BCIT Home"><img src="images/eric_mockup_06.png" class="bcitFooterLogo" width="137" height="58" alt="BCIT Logo"></a></div>
        <div class="copyright"><p>&copy; 2012 | Bright Designs</p></div>
      </div>
      <!--End of Sitemap--> 
    </div>
    <!--End of footerContents--> 
  </footer>
</div>
<!--End of siteWrapper-->
</body>
<!-- InstanceEnd --></html>
