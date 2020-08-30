<?php 

// for($i=1; $i<6; $i++){
// 	for($j=0; $j<$i; $j++){
// 		echo "*";
// 	}

// 	for($k=5; $k>$i;$k--){
// 		echo "##";
// 	}

// 	for($l=0; $l<$i;$l++){
// 		echo "*";
// 	}
// 	echo "<br>";	


// ----------------------------

for($i=1;$i <= 10; $i++){
	for($j = 10; $j > $i; $j--){
		echo "&nbsp;&nbsp;";
	}

	for($k = 1; $k <= (2 * $i - 1); $k++){
		echo "*";
	}

	echo "<br>";
}

for($i=2;$i <= 10; $i++){
	for($j = 1; $j < $i; $j++){
		echo "&nbsp;&nbsp;";
	}

	for($k = 10; $k >= (2 * $i - 10); $k--){
		echo "*";
	}

	// for($k = 1; $k < $i; $k++){
	// 	echo "0";
	// }

	echo "<br>";
}

 ?>