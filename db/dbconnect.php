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
$sql = "INSERT INTO users(stdid,stdname,phone) VALUES ('$_POST[stdid]','$_POST[user]','$_POST[ph]')";
$res = mysqli_query($conn, $sql);
if ($res == TRUE) {
  echo '<br/>Data inserted succesfully';

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

?>