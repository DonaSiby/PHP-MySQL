<?php
if(isset($_POST["operator"]))
{
  $first_num = $_POST['num1'];
  $second_num = $_POST['num2'];
  $operator = $_POST["operator"];
  $result = '';
}
else
{
  $first_num = "";
  $second_num = "";
  $operator = "";
  $result = ""; 
}
if(is_numeric($first_num)&&is_numeric($second_num))
{
  switch ($operator)
  {
    case "Add":
      $result = $first_num + $second_num;
  }
}

?>