<?php 
function cek_ganjil_genap($bil){
	if($bil == 0){
		return $bil . ' Tidak termasuk bilangan ganjil atau genap';
	}

	else if($bil != 0){
		if ($bil % 2 == 0){
			return $bil . ' adalah bilangan genap';		
		}else{
			return $bil . ' adalah bilangan ganjil';
		}
	} 
}

echo cek_ganjil_genap(1);
 ?>