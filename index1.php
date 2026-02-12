<?php
	$max_input_data = (int)readline('Mau berapa kali data di input? : ');
	
	for($data = 0; $data <= $max_input_data; $data++){
		$namaBarang = readline('Masukkan nama barang : ');
		$stok = (int)readline('Masukkan stok : ');

		echo "$namaBarang dengan jumlah stok = $stok " . PHP_EOL;
	}
?>
