<?php 
/**
 *
 * 整数反转
 */


$x = '2147483412';
if(is_numeric($x)) {
	$lenstr = strlen($x);

	$lenstr = strlen(base_convert($x, 10, 2));
	var_dump($lenstr);
	var_dump(base_convert($x, 10, 2));
	if($lenstr < 32 ) {
		if($x = '0') {
			return '0';
		} elseif($x = '-0') {
			return '-0';
		}
		$firststr = strstr($x, '-');
		//var_dump($firststr);
		if($firststr != false) {
			$str = ltrim(strrev(ltrim($x, '-')), '0');
			$str = '-'.$str;
		} else {
			$str = ltrim(strrev($x), '0');
		}
		echo $str;
	}
}




 ?>