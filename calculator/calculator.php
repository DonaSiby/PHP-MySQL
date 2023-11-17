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

      case "Substract":
        $result = $first_num - $second_num;
        break;

      case "Multiply":
        $result = $first_num * $second_num;
        break;

      case "Divide":
        $result = $first_num / $second_num;
        break;
    }
  }
  ?>
  <h1 align="center"> CALCULATOR </h1>
  <form method="post">
    <table align="center">
      <tr>
        <td align="left">First Number : </td>
        <td align="right"><input type="text" name="num1" required="required" value="<?php echo $first_num ?>"></td>
      </tr>
      <tr>
        <td align="left">Second Number : </td>
        <td align="right"><input type="text" name="num2" required="required" value="<?php echo $second_num ?>"></td>
      </tr>
      <tr>
        <td align="left">Result : </td>
        <td align="right"><input readonly="readonly" name="result" value="<?php echo $result; ?>"></td>
      </tr>
      <tr>
        <td>
          <input type="submit" name="operator" value="Add">
          <input type="submit" name="operator" value="Substract">
          <input type="submit" name="operator" value="Multiply">
          <input type="submit" name="operator" value="Divide">

        </td>
      </tr>


    </table>
  </form>

</body>

</html>