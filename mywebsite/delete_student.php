<?php include 'config.php';
if (isset($_POST["delete"])) {
  $stdid = $_POST['stdid'];

  $sql = "DELETE FROM student WHERE stdid = $stdid";
  $res = mysqli_query($conn, $sql);

  if ($res) {
    echo "Record deleted successfully";
  } else {
    echo "Error deleting record: " . mysqli_error($conn);
  }

  mysqli_close($conn);
}?>
<!DOCTYPE html>
<html>

<head>
  <title>Delete Student</title>
</head>

<body>
  <h2>Delete Student Record</h2>
  <form method="post" action="delete_student.php">
    <label>Enter Student ID to delete:</label>
    <input type="text" name="stdid" required>
    <input type="submit" name="delete" value="Delete">
  </form>
</body>

</html>