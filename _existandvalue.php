<?php
function ifExistAndValue($fieldName){
  if($_SERVER['REQUEST_METHOD']=='POST'){
    if(
        isset($_POST[$fieldName])
      &&
        $_POST[$fieldName]!=null
    )
    {
      return true;
    }
    else{
      return false;
    }
  }
  else{
    if(
        isset($_GET[$fieldName])
      &&
        $_GET[$fieldName]!=null
    )
    {
      return true;
    }
    else{
      return false;
    }
  }
}
?>