<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

   public function __construct()
	{
			  parent::__construct();
			  $this->load->model('Model_mahasiswa');
	}

	public function index()
	{
		$this->load->view('form_mahasiswa');
	}


   public function add(){
      $data = array(
         'nim' => $this->input->post('nim'),
         'nama' => $this->input->post('nama'),
         'kelas' => $this->input->post('kelas'),
         'prodi' => $this->input->post('proi'),
         'email' => $this->input->post('email'),
      );
      $this->Model_mahasiswa->add($data);
      echo "Data berhasil disimpan !";   
      // $this->load->view('form_mahasiswa');
   }
}