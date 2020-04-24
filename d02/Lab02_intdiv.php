<?php

/* 
thu ham intdiv()
 */
$x = 10;
$y = 3;
$z = $x/$y;

/* muon tren man hinh : 10 / 3 = 3.33333 */
echo "<h3> $x / $y = $z </h3>" ;

$w = (int)($x/$y);
echo "<h3> (int)($x / $y) = $w </h3>" ;

$v = intdiv($x, $y);
echo "<h3> intdiv($x,$y) = $v </h3>" ;
?>

