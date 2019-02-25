<?php
include_once ('MyLinkedList.php');

$linkedList = new LinkList();

$linkedList->insertFirst(31);
$linkedList->insertFirst(2422);
$linkedList->insertLast(213213);
$linkedList->insertLast(521512511312);
$totalNodes = $linkedList->totalNodes();
$linkData = $linkedList->readList();

echo $totalNodes."<br>";
echo implode ('-' , $linkData); 
?>