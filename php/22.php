<?php
	$string = "This is example!";
	echo strlen ($string)."<br />";
	echo strpos ($string, "is", 4)."<br />";
	
	if (strpos ($string, "T") === false) {
		echo "Т не найдено";
	}
	else {
		echo "Т найдено";
	}
	
	echo "<br />";
	
	echo substr ($string, 3, 7)."<br />";
	echo substr ($string, 3, -2)."<br />";
	
	echo str_replace("is", "adc", $string)."<br />";
	echo str_replace(array("is", "ple"), array("abc", "123"), $string)."<br />";

	$str = "<b>ХАХА, жирный шрифт</b>";
	echo htmlspecialchars ($str)."<br />";
	
	echo strtolower ($string)."<br />".strtoupper($string);
	
	echo "<br />".md5("123");
	
	echo "<br />".trim("    string              ");
?>