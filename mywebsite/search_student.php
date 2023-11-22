<!DOCTYPE html>
<html>

<head>
  <title>Search Student by Name</title>
  <link href="mystle.css" rel="stylesheet" />
</head>

<body>
  <div class="content">
    <h2 align="center">Search Student by Name</h2>
    <form method="post" action="search_student.php" align="center">
      <label>Enter Student Name:</label>
      <input type="text" name="searchName" required />
      <br><br>
      <input type="submit" name="submit" value="Search" />
    </form>

    <h2 align="center">Search Results</h2>
    <?php
    include 'config.php';
    if (isset($_POST["submit"])) {
        $searchName = $_POST["searchName"];
        $sql = "SELECT * FROM student WHERE stdname LIKE '%$searchName%'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
          echo "<table align='center'>";
          echo "<tr><th>Student ID</th><th>Name</th><th>Branch</th><th>Batch</th><th>Age</th></tr>";
          while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['stdid'] . "</td>";
            echo "<td>" . $row['stdname'] . "</td>";
            echo "<td>" . $row['branch'] . "</td>";
            echo "<td>" . $row['batch'] . "</td>";
            echo "<td>" . $row['age'] . "</td>";
            echo "</tr>";
          }
          echo "</table>";
        } else {
          echo "No records found";
        }
      }
    ?>
  </div>
</body>

</html>