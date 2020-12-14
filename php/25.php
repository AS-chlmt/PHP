<?php
	/*
	$file = fopen ("a.txt", "a+t");
	
	fwrite($file, "Example\nText\nNext");
	
	fclose ($file)
	*/
	
	$file = fopen ("a.txt", "r+");
	
	while (!feof($file)) {
		echo fread ($file, 1)."<br />";
	}
		
	fseek ($file, 0);
	echo fread ($file, 1)
	
	fclose ($file);
	
	echo "----------------------- <br />";
	file_put_contents("c.txt", "TEST test Test");
	
	echo file_get_contents("c.txt")."<br />";
	
	echo file_exists("b.txt")."<br />";
	echo file_exists("a.txt")."<br />";
	
	echo filesize("c.txt")."<br />";
	
	rename ("c.txt", "b.txt");
	
	unlink ("b.txt");
?>