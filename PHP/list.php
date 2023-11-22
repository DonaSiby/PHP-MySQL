<?php
$mylist[0] = 1;
$mylist[1] = 2;
$mylist[2] = "hello";
$mylist[] = "4";

foreach( $mylist as $myelement)
echo $myelement."<br/>";
echo ("My Array<br/>");
$list = array(10,20,30,40,50);

foreach( $list as $myval)
echo ($myval+2)."<br/>";

$name = array("Emy","Georlit","Divya","Liss","Dona") ;
foreach( $name as $myval){
  echo $myval."<br/>";
}
?>