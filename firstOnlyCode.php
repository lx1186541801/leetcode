<?php 
// 字符串中的第一个唯一字符
// 给定一个字符串，找到它的第一个不重复的字符，并返回它的索引。如果不存在，则返回 -1。
// 


$str = 'skluhsdkfgvnd';

$strArray = str_split($str);

var_dump($strArray);

$strCount = array_count_values($strArray);

var_dump($strCount);
$string = array_search('1', $strCount);

if($string == false){
	$string = -1;
}
var_dump($string);




 ?>