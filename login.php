<!DOCTYPE HTML>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <title>Login - Tech Support Professional - BCIT</title>
  <link rel="stylesheet" href="styles.css">
  <?php
    session_start();
    if(isset($_COOKIE['creds'])){
      $creds = explode(", ", $_COOKIE['creds']);
    }
  ?>
</head>
<body>
  <div id="wrapper">
  <form action="auth.php" method="post" class="login">
    <ul>
      
      <li><legend>Please Log In</legend></li>
      <div id="error"> <?php
        if (isset($_SESSION['error'])) {
          echo $_SESSION['error'];
        }
      ?></div>
      <li><label for="username">Username:</label></li>
      <li><input type="text" name="username" id="username" placeholder="Username"
      <?php
        if(isset($creds)){
          echo "value='".$creds['0']."'";
        }
      ?>></li>
      <li><label for="password">Password:</label></li>
      <li><input type="password" name="password" id="password" placeholder="Password" 
      <?php
        if(isset($creds)){
          echo "value='".$creds['1']."'";
        }
      ?>></li>
      <li><input type="checkbox" name="remember" id="remember" 
        <?php
        if(isset($creds['2'])){
          echo "value='checked'";
        }
        ?>
        >
        <label for="checkbox">Remember Me</label></li>
      <li><input type="submit" value="Submit"><input type="reset" value="Reset"></li>
    </ul>
  </form>
  </div>
</body>
</html>