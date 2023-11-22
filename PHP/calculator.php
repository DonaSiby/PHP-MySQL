<?php
$a = 1;
$b = 2;

function Calculate(){
  global $a,$b,$c,$d,$e,$f;
  $c = $a + $b;
  $d = $a - $b;
  $e = $a * $b;
  $f = $a / $b;
  
  
}
Calculate();
echo $c;
echo $d;
echo $e;  
echo $f;

echo (floor(0.60))
?>