<?php

class M_customer extends CI_Model
{
	public function tampil_data($id = null)
	{
		if ($id === null) {
			return $this->db->get('tb_customer')->result();
		} else {

			return $this->db->get_where('tb_customer', ['id_customer' => $id])->result();
		}
	}
	public function input_data($data)
	{
		return $this->db->insert('tb_customer', $data);
	}
	public function input($data)
	{
		$this->db->insert('tb_customer', $data);
		return $this->db->affected_rows();
	}
	public function update($id, $data)
	{

		$this->db->update('tb_customer', $data, ['id_customer' => $id]);
		return $this->db->affected_rows();
	}
	public function hapus_data($data)
	{
		$this->db->delete('tb_customer', $data);
	}
	public function hapus($id)
	{
		$this->db->delete('tb_customer', ['id_customer' => $id]);
		return $this->db->affected_rows();
	}
}
