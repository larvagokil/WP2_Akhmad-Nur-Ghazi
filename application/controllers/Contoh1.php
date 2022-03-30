<?php
    class Contoh1 extends CI_Controller {
        public function index() {
            $this->load->helper('url');
            $this->load->view('pages/contoh1');
        }
    }
?>