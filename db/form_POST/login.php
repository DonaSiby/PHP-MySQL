<?php
$conn = mysqli_connect("localhost", "root", "", "mytestdb");
if($conn)
{
  echo "Connection established succesfully.";
  {
    $sql = "INSERT INTO login(id,name,email,password) VALUES ('$_POST[id]','$_POST[name]','$_POST[email]','$_POST[password]')";
    $res = mysqli_query($conn, $sql);
    if($res)
    {
      echo '<br/>You are succesfully signed in!';
    }
    else
    {
      die("Error : " . mysqli_error($conn));
    }
  }
}
else
{
  die("Connection failed: " . mysqli_connect_error());
}
?>