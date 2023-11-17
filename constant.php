<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  define("MINSIZE", 50);
  echo MINSIZE;
  echo constant("MINSIZE");
  define("PIE",3.14);
  echo PIE * 10 * 10;
  ?>
</body>

</html>