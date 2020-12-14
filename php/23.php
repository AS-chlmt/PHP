<?php
	$array = array (12, 17, 5, 23, 56);
	echo count($array)."<br />";
	sort ($array);
	print_r ($array);
	echo "<br />";
	rsort ($array);
	print_r ($array);
	echo "<br />";
	asort ($array);
	print_r ($array);
	echo "<br />";
	arsort ($array);
	print_r ($array);
	echo "<br />";
	
	$alist = array ("123" => 123, "12" = 12);
	asort ($alist);
	print_r ($alist);
	echo "<br />";
	arsort ($alist);
	print_r ($alist);
	echo "<br />";
	
	$alist = array ("a" => 23, "b" = 45, "c" = 32);
	ksort ($alist);
	print_r ($alist);
	echo "<br />";
	krsort ($alist);
	print_r ($alist);
	echo "<br />";
	
	shuffle ($array);
	print_r ($array);
	echo "<br />";
	
	echo in_array(10, $array);
	echo "<br />";
	echo in_array(12, $array);
	echo "<br />";
		
	$arr_1 = array (10, 2);
	$arr_2 = array (4, 5, 7);
	$arr_3 = array_merge($arr_1, $arr_2);
	print_r ($arr_3);
	echo "<br />";
	
	$arrDone = array (1, 2, 3, 4, 5, 6, 7);
	print_r ($arrDone);
	echo "<br />";
	$arrDone = array_slice ($arrDone, 1, -2);
	print_r ($arrDone);
	echo "<br />";
?>