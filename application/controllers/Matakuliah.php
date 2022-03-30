<?php
    class Matakuliah extends CI_Controller {
        public function index () {
            // $this->load->helper('url');
            $this->load->view('pages/matkul/matakuliah-form-view');
            
        }

        public function cetak() {
            $data = [
                'kode' => $this->input->post('kode'),
                'nama' => $this->input->post('nama'),
                'sks' => $this->input->post('sks'),
            ];

            $this->load->view('pages/matkul/matakuliah-data-view', $data);
        }
    }
?>