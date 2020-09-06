<?php 

// $angka = "54321";

// echo strlen($angka);
// for($i = 5; $i > 0; $i--){
// 	echo $i;
// 	for($j = 1; $j < $i; $j++){
// 		echo 0; 
// 	}
// 	echo "<br>";
// }

// Soal : Menampilkan 1 3 7 13 21 31 43 57 73

// cara orang
// $start = 1;
// $end = 10;
// for($i=$start; $i<$end; $i++) {
// 	$pengali = $i - 1;
// 	echo $i + ($pengali * $pengali) . ' ';
// }

// hasil 1 3 7 13 21 31 43 57 73
// ------------------------------------------


// cara aku

// Reff
// 1	2	3	4	5	6	7	8
// 3	7	13	21	31	43	57	73
// 2	4	6	8	10	12	14	16

// $a = 1;
// echo $a . " ";
// for($i=1;$i<9;$i++){
// 	$penambah = $i * 2;
// 	echo $hasil = $a + $penambah;
// 	echo " ";
// 	$a = $hasil;
// }

// $a = 1;
// echo $a . " ";
// for($i=1;$i<9;$i++){
// 	$penambah = $i * 2;
// 	echo $hasil = $a + $penambah;
// 	echo " ";
// 	$a = $hasil;
// }

// hasil 3 7 13 21 31 43 57 73

// ------------------------------------------

// Soal : Menampilkan 1+2+3+4+5 = 15, inputan = 15

// for($i = 1; $i <=15;$i++){
// 	if($i < 15){
// 		echo $i."+";
// 	}else{
// 		echo $i ."=";
// 	}
	
// }

for($i = 0; $i < 10; $i++){
	for($j = 1; $j < 10; $j++){
		if ($j == 5){
			echo "*";
		}else{
			echo "#";
		}
	}
	echo "<br>";
}




 ?>