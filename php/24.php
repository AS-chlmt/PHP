<?php
	$start = microtime (true);
	
	echo time ()."<br />";
	echo microtime (true)."<br />";
	
	echo "Время работы скрипта: ".(microtime (true) - $start)." секунд"."<br />";
	
	echo date ("Y-m-d H:i:s");
	
	
	
	echo date ("Y-m-d H:i:s", 354654684);
	
	$time = mktime (12, 35, 23, 12, 07, 2007);
	
	echo date ("Y-m-d H:i:s", $time)."<br />";
	
	$array = getdate($time);
	print_r ($array);
	
	echo "<br />";
	
	echo checkdate (2, 28, 2012);
?>