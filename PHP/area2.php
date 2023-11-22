<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  $height = 100;
  $width = 50;
  if($width == 0){
    echo "The area of the rectangle is".$height*$width;
  
  }
  else{
    echo "The width cannot be zero";
  }
  if(is_numeric($height)){
    echo"The height is a number";
  }
  echo is_numeric($width);
  ?>
</body>

</html>