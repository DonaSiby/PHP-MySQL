<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculator</title>
</head>

<body>
  <?php
  if (isset($_POST["operator"])) {
    $first_num = $_POST['num1'];
    $second_num = $_POST['num2'];
    $operator = $_POST["operator"];
    $result = '';
  } else {
    $first_num = "";
    $second_num = "";
    $operator = "";
    $result = "";
  }
  if (is_numeric($first_num) && is_numeric($second_num)) {
    switch ($operator) {
      case "Add":
        $result = $first_num + $second_num;
        break;
    }
  }

  ?>
  <form method="POST">
    <h1>PHP - Simple Calculator</h1>
    First Number <input type="text" name="num1" required="required" value="<?php echo $first_num?>">
    <br>
    Second Number <input type="text" name="num2" required="required" value="<?php echo $second_num?>">
    <br>
    Result
    <input readonly=" readonly" name="result" value="<?php echo $result;?>">

    <br>
    <input type="submit" name="operator" value="Add">
    <input type="submit" name="operator" value="Substract">
    <input type="submit" name="operator" value="Multiply">
    <input type="submit" name="operator" value="Divide">
  </form>
</body>

</html>