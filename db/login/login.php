<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login page</title>
</head>

<body>
  <?php
  session_start();
  if (isset($_POST['submit'])) {
    if (($_POST['username'] != "") || ($_POST['pass'] != "")) {
      $inputUsername = $_POST['username'];
      $inputpass = $_POST['pass'];
      if ($inputUsername == 'admin' && $inputpass == 'admin123') {
        $_SESSION['username'] = $inputUsername;
        header("Location : welcome.php"); //redirect
        exit();
      } else {
        $errormsg = "Incorect username and password";
      }

    } else {
      $errormsg = "Enter username and password";
    }
  }
  ?>
  <?php
  if(isset($errormsg))
  {
    echo "<p style = 'color:red;'>$errormsg</p>";
  }
  
  ?>

</body>

</html>