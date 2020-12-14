<?php
	echo M_PI."<br />".M_E."<br />";
	
	$x = -15;
	echo abs ($x)."<br />";
	
	$y = 49.234877823;
	echo round ($y)."<br />";
	
	$y = 49.94877823;
	echo round ($y)."<br />";
	
	$y = 49.234877823;
	echo round ($y, 3)."<br />";
	
	$y = 49.000000001;
	echo ceil ($y)."<br />";
	
	$y = 49.999999999;
	echo floor ($y)."<br />";
	
	echo mt_rand (1, 20)."<br />";
	
	echo min (12, 23, -2, -5, 19, -4, 0)."<br />";

	echo max (12, 23, -2, -5, 19, -4, 0)."<br />";
	
	$z = 1; 
	echo sin($z)."<br />";
	echo cos($z)."<br />";
	echo tan($z)."<br />";
	echo asin($z)."<br />";
	echo acos($z)."<br />";
	echo atan($z)."<br />";
?>