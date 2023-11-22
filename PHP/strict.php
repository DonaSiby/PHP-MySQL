<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php 
  function addNum(int $a,int $b)
  {
    return $a + $b;
  }
  echo addNum(5,4);
  echo "<br>";

  //return type
  function add(float $a, float $b ) : float{
    return $a + $b;
  }
  echo "sum of 1.2 + 5.2 is " . add(1.2, 5.2);
  echo "<br>";

  //pass by reference
  function add_five(&$value){
    $value += 98;
  }
  $num = 2;
  add_five($num);
  echo "Num = $num";
  ?>
</body>

</html>