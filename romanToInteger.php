<?php 

/**
 * 罗马数字转整数
 */

// $s = "IIIIXIVIVXIXIIXXLXL";
$s = "MCMXCIV";


$sstr = array('4'=>'IV', '9'=>'IX', '40'=>'XL', '90'=>'XC', '400'=>'CD', '900'=>'CM');
// var_dump($sstr);
$num = 0;
$str = $s;
foreach ($sstr as $k => $v) {
	$count = substr_count($s, $v);
	// var_dump($v);
	// var_dump($str);
	$str = str_replace($v, '', $str);
	// var_dump($str);
	$num += $k*$count; 
}

// var_dump($num);
$str = str_split($str);
foreach ($str as $v) {
	switch ($v) {
		case 'I':
			$num += 1;
			break;
		case 'V':
			$num += 5;
			break;
		case 'X':
			$num += 10;
			break;
		case 'L':
			$num += 50;
			break;
		case 'C':
			$num += 100;
			break;
		case 'D':
			$num += 500;
			break;
		case 'M':
			$num += 1000;
			break;
		default:
			break;
	}
}


var_dump($num);


 ?>