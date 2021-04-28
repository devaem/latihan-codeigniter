<?php 

class Hello extends CI_Controller{
	public function index(){

		$this->load->model('m_mhs');
		$data['akademik']= $this->m_mhs->get_data();

		$this->load->view('v_mhs',$data);
	}

}
 ?>