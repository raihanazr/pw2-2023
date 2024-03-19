<?php 
		/**
		 * Task 2
		 * Panggil class_balok dan Buatlah minimal 4 object yang menampilkan:
		 * Luas, Keliling dan Volume
		 * p = 29, l = 16, t = 7
		 */

		require_once "class_balok.php";

        $Balok1 = new Balok(9,6,8);

        echo "<br>Luas Balok 1 = " . $Balok1->getLuas() . "cm";
        echo "<br>Keliling Balok  1 = " . $Balok1->getKeliling() . "cm";
?>