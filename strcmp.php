<?php
$string1 = "apple";
$string2 = "banana";
$result = strcmp($string1, $string2);
if($result < 0){
  echo "$string1 precedes $string2 alphebetically";
}
else if($result == 0){
  echo "$string1 equals $string2";
}

?>