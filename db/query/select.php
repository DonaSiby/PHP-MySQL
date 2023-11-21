<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mytestdb";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn) {
  $sql = "SELECT * FROM users";
  $res = mysqli_query($conn,$sql);
  if (mysqli_num_rows($res)>0){
    echo "<table border= 'border' width = '300'>
    <tr>
    <td>Stdid</td>
    <td>Stdname</td>
    <td>Phone</td>
    </tr>";
    while ($row = mysqli_fetch_assoc($res)){
      echo "<tr><td>".$row["stdid"]."</td><td>".$row["stdname"]."</td><td>".$row["phone"]."</td><tr>";
    }
    echo "</table>"; 
  }
  else{
    echo "0 results";
  }
}
else{
  die("Connection failed: " . mysqli_connect_error());
}
mysqli_close($conn);
?>