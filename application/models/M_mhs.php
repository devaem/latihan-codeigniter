<?php 

class M_mhs extends CI_Model{

	public function get_data()

	{
		return $this->db->get('customer')->result_array();
		return $this->db->get('mahasiswa')->result_array();
		return $this->db->get('matakuliah')->result_array();
		return $this->db->get('nilai')->result_array();

	}
}

 ?>