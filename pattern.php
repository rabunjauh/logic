<?php 

for($i=1; $i<10; $i++){
	for($j=0; $j<$i; $j++){
		echo "*";
	}

	for($k=9; $k>$i;$k--){
		echo "&nbsp;&nbsp;&nbsp;&nbsp;";
	}

	// for($j=4; $j>$i; $j--){
	// 	echo "*";
	// }

	for($k=0; $k<$i;$k++){
		echo "*";
	}
	echo "<br>";
}


 ?>