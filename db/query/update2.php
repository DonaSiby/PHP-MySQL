<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Query</title>
</head>

<body>
  <form action="update2.php" method="post">
    <p><label>
        <h1>ENTER ID TO UPDATE</h1>
      </label></p>
    <br>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mytestdb";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if ($conn) {
      $sql = "SELECT * FROM users";
      $res = mysqli_query($conn, $sql);
      if (mysqli_num_rows($res) > 0) {
        echo '<select name = "selectedId">';
        while ($row = mysqli_fetch_assoc($res)) {
          $id = $row['stdid'];
          echo '<option value ="' . $id . '">' . $id . '</option>';
        }
        echo '</select>';
      }
    } else {
      die("Connection failed: " . mysqli_connect_error());
    }
    ?>
    <br><br>
    <label>Enter the text to update :</label>
    <br>
    <input type="text" name="testfield" size="30"></input>
    <br><br>
    <input type="submit" name="submit" value="Update Record"></input>
  </form>
  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "mytestdb";
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  if ($conn) {
    $myText = $_POST["testfield"];
    $myid = $_POST["selectedId"];
    $sql = "UPDATE users SET stdname ='$myText' WHERE stdid=$myid ";
    if(mysqli_query($conn,$sql))
    {
      echo "Record updated succesfully";
    }
    else{
      echo "Error updating record :" .mysqli_error($conn);
    }
    
  } else 
  {
    die("Connection failed: " . mysqli_connect_error());

  }


  ?>
</body>

</html>