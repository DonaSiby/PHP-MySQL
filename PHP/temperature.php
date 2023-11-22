<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  $lows = array("Mon"=> 23, "Tue"=>18, "Wed"=>27);
  foreach ($lows as $day => $temp) {
    echo "Key = " . $day, " Value = " . $temp;
    echo "<br/>";
    print("The low temperature on $day was $temp");
    echo "<br/>";
  }
  echo "<br/>";
  
  sort($lows);
  foreach ($lows as $day => $temp) {
    echo "Key = " . $day, " Value = " . $temp;
    echo "<br/>";
    print("The low temperature on $day was $temp");
    echo "<br/>";
  }
  echo "<br/>";

  rsort($lows);
  foreach ($lows as $day => $temp) {
    echo "Key = " . $day, " Value = " . $temp;
    echo "<br/>";
    print("The low temperature on $day was $temp");
    echo "<br/>";
  }
  echo "<br/>";

  asort($lows);
  foreach ($lows as $day => $temp) {
    echo "Key = " . $day, " Value = " . $temp;
    echo "<br/>";
    print("The low temperature on $day was $temp");
    echo "<br/>";
  }
  echo "<br/>";

  ksort($lows);
  foreach ($lows as $day => $temp) {
    echo "Key = " . $day, " Value = " . $temp;
    echo "<br/>";
    print("The low temperature on $day was $temp");
    echo "<br/>";
  }
  ?>
</body>

</html>