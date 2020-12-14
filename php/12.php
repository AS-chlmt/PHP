<html>
<head>
	<title>PHP Урок 12</title>
</head>
<body>
	<?php
		$x = 7;
		
		switch ($x) {
			case "Hello" : echo "Это строковая переменная"; break;
			case 5 : echo "Эта переменная равна 5"; break;
			case 7 : echo "Эта переменная равна 7"; break;
			case 12 : echo "Эта переменная равна 12"; break;
			default : echo "Эта переменная нам не известна";
		}
	?>
</body>
</html>