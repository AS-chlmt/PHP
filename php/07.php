<?php
	$x = 32;
	$y = 22.13;
	$summ = $x + $y;
	$diff = $x - $y;
	$mult = $x * $y;
	$dil = $x / $y;
	
	echo "Сумма из $x и $y =$summ<br />";
	echo "Разница из $x и $y = $diff<br />";
	echo "Умножение из $x и $y = $mult<br />";
	echo "Деление из $x и $y = $dil<br />";
	
	$z = 12;
	
	$ostatok = $x % $z;
	
	echo "Остаток при делении из $x и $z = $ostatok<br />";
	
	$q = 400;
	
	$q += 10;
	echo $q<br />;
	$q -= 10;
	echo $q<br />;
	$q *= 10;
	echo $q<br />;
	$q /= 10;
	echo $q<br />;
	
	$q = $q + 1;
	$q += 1;
	$q++;
	$q--;
	echo $q<br />;
?>