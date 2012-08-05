<!DOCTYPE HTML>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <title>You Have Been Logged Out - Nathan DeVuono @ HTP Web Design</title>
  <link rel="stylesheet" href="styles.css">
  <?php session_start();
  $_SESSION = array();
  session_destroy();
  ?>
</head>
<body>
  <div id="wrapper">
  <h1>Logout</h1>
  <p>You have been logged out.</p>
  <p>Click <a href="login.php">here</a> to log in again.</p>
  </div>
</body>
</html>