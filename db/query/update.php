<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mytestdb";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn) {
  echo "Connected to " . $dbname . " established succesfully.";

} else {
  die("Connection failed" . mysqli_connect_error());
}
$sql = "UPDATE users SET stdname = 'Dawn' WHERE stdid=2 ";
$res = mysqli_query($conn, $sql);
if ($res == TRUE) {
  echo '<br/>Data updated succesfully';

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

?>