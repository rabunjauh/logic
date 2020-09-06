<?php 
$n = 5;
$f1 = 0;
$f2 = 1;
// $fn = $f1 + $f2;
// echo $f1 . ",". $f2 .",";

for ($i = $f1; $i < $n;$i++){
	if($i < 2){
		$fn = $i;
	}else{

		$fn = $f1 + $f2;

		$f1 = $f2;
		$f2 = $fn;
	}

	echo $fn.",";
}

// use array

// function fibonacci($bil){
// 	$fibonacci = [];

// 	if($bil < 0){
// 		return $fibonacci;
// 	}

// 	for($i = 0; $i < $bil; $i++){
// 		if($i < 2){
// 			$output = $i;
// 		}else{
// 			$output = $fibonacci[$i - 1] + $fibonacci[$i - 2];
// 		}
// 		array_push($fibonacci, $output);
// 	}
// 	return $fibonacci;
// }

// echo implode(fibonacci(2));

 ?>