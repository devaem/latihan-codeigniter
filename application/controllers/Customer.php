<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Customer extends CI_Controller
{
	function __construct($config = 'rest')
	{
		parent::__construct($config);
		$this->load->model('m_customer');
	}


	public function index()
	{
		$data['customer'] = $this->m_customer->tampil_data();
		$data['json'] = json_encode($data['customer']);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('customer', $data);
		$this->load->view('templates/footer');
	}


	public function tambah_aksi()
	{
		$username	= $this->input->post('username');
		$password	= $this->input->post('password');
		$nama		= $this->input->post('nama');
		$umur		= $this->input->post('umur');
		$alamat		= $this->input->post('alamat');
		$telp		= $this->input->post('telp');
		$email		= $this->input->post('email');
		$tgl_lahir	= $this->input->post('tgl_lahir');
		$kode_pos	= $this->input->post('kode_pos');
		$nama_ibu_k	= $this->input->post('nama_ibu_k');
		$gender		= $this->input->post('gender');


		$data	= array(
			'username'		=> $username,
			'password'		=> $password,
			'nama'			=> $nama,
			'umur'			=> $umur,
			'alamat'		=> $alamat,
			'telp'			=> $telp,
			'email'			=> $email,
			'tgl_lahir'		=> $tgl_lahir,
			'kode_pos'		=> $kode_pos,
			'nama_ibu_k'	=> $nama_ibu_k,
			'gender'		=> $gender,
		);

		$this->m_customer->input_data($data);
		redirect('customer/index');
	}
	public function hapus($id)
	{
		$data = array('id' => $id);
		$this->db->hapus_data($data, 'tb_customer');
		redirect('customer/index');
	}
}
