<?php
session_start();
if(isset($_SESSION["username"]))
{
  $welcomemsg = "Welcome, " . $_SESSION['username'] . "!";
  echo "<h1> $welcomemsg </h1>";
}
else
{
  echo "<h1?>session doesn't set</h1>";
exit();
}
?>