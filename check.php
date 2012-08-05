<?php
  session_start();
  if (isset($_SESSION['creds'])==false) {
    $_SESSION['error'] = "Please log in before viewing this page.";
    header('location:login.php');
    die();
  }
?>