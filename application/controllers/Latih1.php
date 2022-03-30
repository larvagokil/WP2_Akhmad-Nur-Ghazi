<?php
    class Latih1 extends CI_Controller {
        public function index() {
            echo "Selamat datang.. Halo dunia";
            echo "<br>";
            // echo "contoh hanya menggunakan controller saja";
            echo "contoh hanya menggunakan controller dan model saja";
            
        }

        public function penjumlahan($n1, $n2) {
            // $n1 = 5;$n2 =6;
            // $n1 = $_GET[n1];
            // $n2 = $_GET[n2];

            $this->load->model('Model_latih1');
            $hasil = $this->Model_latih1->jumlah($n1, $n2);
            echo "hasil penjumlahan dari ". $n1 . " + " . $n2 ." = " . $hasil;
        }
    }
?>
