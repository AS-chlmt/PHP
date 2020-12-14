<?php
	$x = 10;
	$y = 11;

	if ($x != $y && $x != 12 && $y == 5 && ($x + 5) == 15)
		echo 'Ура!';
	else if ($x == 15 || $y != 7) {
		$num = 5;
		echo "Число № ".$num;
	}
	else if ($x == 15 || $y != 7) {
		$num = 5;
		echo "Число № ".$num;
	}
	else {
		echo "<br />";
		echo 'Всё сработало!';
	}

	if ($x != $y && $x != 12 && $y == 5 && ($x + 5) == 15)
		echo 'Ура!';

	$x == $y ? $string = "Да" : $string = "Нет";
	echo "<br />".$string;
?>