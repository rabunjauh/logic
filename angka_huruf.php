<?php

$max = 5;
for($i = 1; $i <= $max; $i++) {
	for ($j = 0; $j < $i; $j++) {
		echo $i;
	}
	echo ' ';
}

for($i = $max; $i >= 1; $i--) {
	for ($j = 0; $j < $i; $j++) {
		echo $i;
	}
	echo ' ';
}


?>