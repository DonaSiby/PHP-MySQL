<?php
include 'config.php';
if (isset($_POST["submit"])) {
  // Assuming you have already established a database connection
  // $conn = mysqli_connect("your_host", "your_username", "your_password", "your_database");

  $stdid = $_POST['stdid'];
  $stdname = $_POST['stdname'];
  $branch = $_POST['branch'];
  $batch = $_POST['batch'];
  $age = $_POST['age'];

  $sql = "INSERT INTO student (stdid, stdname, branch, batch, age) VALUES ('$stdid', '$stdname', '$branch', '$batch', '$age')";
  //echo $sql;
  $res = mysqli_query($conn, $sql);

  if ($res) {
    echo '<script>alert("Data Inserted successfully!");</script>';
  } else {
    die("Error: " . mysqli_error($conn));
  }

  mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>My Website www.donasiby.com</title>

  <link href="mystyle.css" rel="stylesheet" />

</head>

<body>

  <?php
  // include 'myheader.html';
  ?>
  <div class="content">
    <h2 align="center">Add student to www.donasiby.com</h2>
    <form method="post" action="add_student.php" align="center">
      <table align="center">
        <tr>
          <td>Student ID </td>
          <td><input type="text" name="stdid" required /></td>
        </tr>
        <tr>
          <td>Name </td>
          <td><input type="text" name="stdname" required /></td>
        </tr>
        <tr>
          <td>Branch </td>
          <td><input type="text" name="branch" required /></td>
        </tr>
        <tr>
          <td>Age </td>
          <td><input type="number" name="age" required /></td>
        </tr>
        <tr>
          <td>Batch </td>
          <td><input type="text" name="batch" required /></td>
        </tr>
        <tr>
          <td><input type="submit" name="submit" value="Insert" /></td>
        </tr>
      </table>
    </form>
    <h1>
    </h1>
  </div>



</body>

</html>