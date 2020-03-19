<?php
	// Contoh prosedur
	function do_print() {
		// Mencetak informasi timestamp
		echo time();
	}
	// Memanggil prosedur
	do_print();
	
	echo '<br />';

	// Contoh fungsi penjumlahan
	function jumlah($a, $b) {
		return ($a + $b);
	}
	echo jumlah(2, 3);
	// Output: 5
?>


<!-- argumen dalam fungsi -->
<?php
	/**
	* Mencetak string
	* $teks nilai string
	* $bold adalah argumen opsional
	*/
	function print_teks($teks, $bold = true) {
		echo $bold ? '<b>' .$teks. '</b>' : $teks;
	}
	
	print_teks('<br> Indonesiaku <br>');
	// Mencetak dengan huruf tebal
	
	print_teks('Indonesiaku', false);
	// Mencetak dengan huruf reguler
?>