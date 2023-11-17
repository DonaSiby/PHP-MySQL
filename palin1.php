<?php
  if (isset($_POST['submit'])) {
    $num = $_POST['myNum'];
    $x = 0;
    $n = $num;
    while (floor($num)) {
      $mod = $num % 10;
      $x = $x * 10 + $mod;
      $num = $num / 10;
    }
    if ($n == $x) {
      echo "$n is a palindrome.";
    } else {
      echo "$n is not a Palindrome number";
    }
  } else {
  ?>
<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
</head>

<body>
  <form action="palin1.php" method="post">
    Enter Number<input type="text" name="myNum" placeholder="Enter the number" />
    <br />
    <input type="submit" name="submit" value="Greet Me" />
  </form>
</body>

</html>
<?php
  }
  ?>