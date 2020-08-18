<?php 
function bil_prima($bil){
	for($i = 1; $i <= $bil; $i++){
		$faktorPembagi = 0;
		for($j = 1; $j <= $i; $j++){
			if($i % $j == 0){
				$faktorPembagi++;
			}
		}
		if($faktorPembagi == 2){
			echo $i;
		}
	}
}

echo bil_prima(15);

 ?>