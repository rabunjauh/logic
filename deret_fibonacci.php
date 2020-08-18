<?php 
$n = 20;
$f1 = 0;
$f2 = 1;
// $fn = $f1 + $f2;
echo $f1 . $f2 	;

for ($i = $f1; $i < $n - 2;$i++){
	$fn = $f1 + $f2;

	$f1 = $f2;
	$f2 = $fn;

	echo $fn;
}

 ?>