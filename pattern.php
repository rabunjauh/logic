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

// for($i=1;$i <= 10; $i++){
// 	for($j = 10; $j > $i; $j--){
// 		echo "&nbsp;&nbsp;";
// 	}

// 	for($k = 1; $k <= (2 * $i - 1); $k++){
// 		echo "*";
// 	}

// 	echo "<br>";
// }

// for($i=2;$i <= 10; $i++){
// 	for($j = 1; $j < $i; $j++){
// 		echo "&nbsp;&nbsp;";
// 	}

// 	for($k = 10; $k >= (2 * $i - 10); $k--){
// 		echo "*";
// 	}

// 	// for($k = 1; $k < $i; $k++){
// 	// 	echo "0";
// 	// }

// 	echo "<br>";
// }

// formula piramid 
// n = rows
// column = 2n - 1

$n = 50;
for($i = 1;$i <= $n; $i++){
	for($j = 1; $j <= (2 * $n)-1; $j++){
		if($j >= $n-($i-1) && $j <= $n+($i-1)){
			echo "*";
		}else{
			echo "&nbsp;&nbsp;";
		}
	}
	echo "<br>";
}

 ?>