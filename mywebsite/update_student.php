<?php include 'config.php'; ?>

<?php
function updateStudentRecord($conn, $stdid, $stdname, $branch, $batch, $age)
{
  $sql = "UPDATE student SET stdname='$stdname', branch='$branch', batch='$batch', age='$age' WHERE stdid=$stdid ";

  return mysqli_query($conn, $sql);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  if (isset($_POST["submit"])) {
    $stdid = $_POST["stdid"];
    $stdname = $_POST["stdname"];
    $branch = $_POST["branch"];
    $batch = $_POST["batch"];
    $age = $_POST["age"];

    if (updateStudentRecord($conn, $stdid, $stdname, $branch, $batch, $age)) {
      echo "Record updated successfully";
    } else {
      echo "Error updating record: " . mysqli_error($conn);
    }
  }
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>Update Student Details</title>
  <link href="mystyle.css" rel="stylesheet" />
</head>

<body>
  <?php /* include 'myheader.html'; */?>
  <div class="content">
    <h2 align="center">Update Student Details</h2>
    <form method="post" action="update_student.php" align="center">
      <label>Select Student ID to Update:</label>
      <select name="stdid">
        <?php
        $sql = "SELECT * FROM student";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['stdid'];
            echo '<option value ="' . $id . '">' . $id . '</option>';
          }
        } else {
          echo '<option value="">No student found</option>';
        }
        ?>
      </select>
      <br><br>
      <table align="center">
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
          <td><input type="submit" name="submit" value="Update" /></td>
        </tr>
      </table>
    </form>
  </div>
</body>

</html>