<?php
		/**
		 * Task 1
		 * Buatlah class balok yang memiliki:
		 * 1. Private property panjang, lebar dan tinggi
		 * 2. Method __construct, getLuas, getKeliling dan getVolume
		 */ 

    class Calculator {
        private $number1;
        private $number2;
        
        public function __construct($number1, $number2) {
		$this->R=$number1;
        $this->A=$number2; 
        }
    
        public function getTambah(){
        return $this->R + $this->A;
        }
    
        public function getKurang() {
        return $this->R - $this->A;    
        }
    
        public function getPerkalian() {
        return $this->R * $this->A;
        }

        public function getPembagian() {
        return $this->R / $this->A;
        }  
    }
    
       $Calculator = new Calculator(6,3);

       echo "<br>Hasil Tambah = " . $Calculator->getTambah();
       echo "<br>Hasil Kurang = " . $Calculator->getKurang();
       echo "<br>Hasil Perkalian = " . $Calculator->getPerkalian();
       echo "<br>Hasil Pembagian = " . $Calculator->getPembagian();

?>