<html>
<head>
	<title>PHP Урок 9</title>
</head>
<body>
	<?php
		$x = 12;
		$y = 34;
		$z = 4.25;

		$bool_1 = $x != $z;
		$bool_2 = $x >= $z;
		echo "1: ".$bool_1."<br />2: ".$bool_2."<hr />";
		
		$bool_3 = !($x == $y);
		$bool_4 = $x == $y || $z < $y;
		$bool_5 = $z != $y && $x < $y;
		$bool_6 = $z != $x ^ $y < $z;
		echo "<br />3: ".$bool_3."<br />4: ".$bool_4."<br />5: ".$bool_5."<br />6: ".$bool_6;
		
		$bool = !($x != $y && $z < $x) || $x == $y;
		
		echo "<br />7: $bool = !($x != $y && $z < $x) || $x == $y";
	?>
</body>
</html>