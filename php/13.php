<html>
<head>
	<title>PHP Урок 13</title>
</head>
<body>
	<?php
		for ($i = 1; $i <= 10; $i += 2) {
			echo "Цикл под номером № $i<br />";
		}
		
		echo "<hr />";
		
		for ($i = 100; $i >= 80; $i -= 2) {
			if ($i % 5 == 0) continue;
			if ($i <= 87) break;
			echo "Цикл под номером № $i<br />";
		}
		
		echo "<hr />";
		
		$x = 1;
		
		while ($x < 10) {
			echo "Итерация под номером № $x<br />";
			if ($x == 7) {
				for ($y = 0; $y < 5; $y += 3) {
					echo "Ещё одна итерация - $y<br />";
				}
			}
			$x++;
		}
		
		echo "<hr />";
		
		$z = 10;
		
		do {
			echo "Операция выполнилась только один раз";
			$z++;
		} while ($z < 5);
	?>
</body>
</html>