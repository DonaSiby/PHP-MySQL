<?php
class Book {
  public $title="";
  public $author="";
  public $yearofpublication = "";
  
}
$book = new Book();
$book->title = "World Wide Wibe";
$book->author = "James Gostling";
$book->yearofpublication = "2005";

$result = json_encode($book);
echo "The JSON representation is :  " . $result . "\n";

?>