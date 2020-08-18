<?php
// Loop untuk bilangan yang akan di tentukan
for ($i=1;$i<=100;$i++){
	// mendeklarasikan variable faktor pembagi
	$faktor_pembagi = 0;
	// loop untuk mencari faktor pembagi 
	for ($j=1;$j<=$i;$j++){
		// jika bilangan di habis di bagi dengan $j increment faktor pembagi
		if ($i % $j == 0){
			$faktor_pembagi++;
		}
	}
	// jika ditemukan 2 faktor pembagi
	if($faktor_pembagi == 2){
		echo $i. ' bilangan prima<br>';
	}else{
		echo $i. ' bukan bilangan prima <br>';
	}
}

?>