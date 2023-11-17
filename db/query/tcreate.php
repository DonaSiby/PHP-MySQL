<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mytestdb";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn) {
  $sql = "CREATE TABLE test2 (id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(75), mark INT)";
  $res = mysqli_query($conn, $sql);
  if ($res == TRUE) {
    echo 'Table succesfully created';

  } else {
    printf("Couldnot create table :\n",mysqli_error($conn));
  }
} else {
  printf("Connection failed :\n" . mysqli_connect_error());
  exit();
}
$conn->close();

?>