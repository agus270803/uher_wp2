<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_mahasiswa extends CI_Model {

        // tambah data
        public function add($data)
        {
         $this->db->insert('`12200637`', $data);
        }
}

/* End of file ModelName.php */