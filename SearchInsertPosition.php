<?php 


echo 111;

$nums = [2,3,5,6];
$target = 4;


$res = array_search($target, $nums);
if($res === false) {
	$count = count($nums);
	foreach ($nums as $k => $v) {
		if($v > $target) {
			$a = $k;
			break;
		} else {
			if($k == $count-1) {
				$a = $count;
				break;
			}
		}
	}

	$res = $a;
}

var_dump($res);

 ?>