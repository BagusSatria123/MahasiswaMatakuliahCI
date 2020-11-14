<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class user_model extends CI_Model {

    public function getMahasiswaByName($name)
    {
        # code...
        return $this->db->get_where('mahasiswa', ['nama' => $name])->row_array();
    }

}

/* End of file user.php */

?>