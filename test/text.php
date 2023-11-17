<!DOCTYPE html>
<?php
  if(isset($_POST['submit']))
  {
    $myText = $_POST['myName'];
    echo "<br/>Hello".$myText."Welcome to PHP World";
  } else {
}
  ?>