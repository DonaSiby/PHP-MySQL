<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  function writeMsg(){
    echo "Hello World";
    echo "<br>";
  }
  writeMsg();

  function family($fname,$year){
    echo "$fname. Born in $year <br>";
  }
  family("Dona", "2002");
  family("Dawn", "2008");

  ?>
</body>

</html>