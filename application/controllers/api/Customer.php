<?php

defined('BASEPATH') or exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
/** @noinspection PhpIncludeInspection */
require APPPATH . 'libraries/REST_Controller.php';
class Customer extends REST_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_customer');
    }


    public function index_get()
    {
        $id = $this->get('id_customer');
        if ($id === null) {
            $data = $this->m_customer->tampil_data();
        } else {
            $data = $this->m_customer->tampil_data($id);
        }

        if ($data) {
            $this->set_response([
                'status' => true,
                'data' => $data
            ], REST_Controller::HTTP_OK); // NOT_FOUND (404) being the HTTP response code

        } else {
            $this->set_response([
                'status' => false,
                'message' => 'data not found'
            ], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code

        }
    }

    public function index_delete()
    {
        $id = $this->delete('id_customer');
        if ($id === null) {
            $this->set_response([
                'status' => false,
                'message' => 'provide an id!'
            ], REST_Controller::HTTP_BAD_REQUEST); // NOT_FOUND (404) being the HTTP response code

        } else {
            if ($this->m_customer->hapus($id) > 0) {
                $this->set_response([
                    'status' => true,
                    'id' => $id,
                    'message' => 'data has been deleted'
                ], REST_Controller::HTTP_NO_CONTENT); // NOT_FOUND (404) being the HTTP response code

            } else {
                //id not found
                $this->set_response([
                    'status' => false,
                    'message' => 'id not found'
                ], REST_Controller::HTTP_BAD_REQUEST); // NOT_FOUND (404) being the HTTP response code

            }
        }
    }

    public function index_post()
    {
        $username    = $this->input->post('username');
        $password    = $this->input->post('password');
        $nama        = $this->input->post('nama');
        $umur        = $this->input->post('umur');
        $alamat        = $this->input->post('alamat');
        $telp        = $this->input->post('telp');
        $email        = $this->input->post('email');
        $tgl_lahir    = $this->input->post('tgl_lahir');
        $kode_pos    = $this->input->post('kode_pos');
        $nama_ibu_k    = $this->input->post('nama_ibu_k');
        $gender        = $this->input->post('gender');


        $data    = array(
            'username'        => $username,
            'password'        => $password,
            'nama'            => $nama,
            'umur'            => $umur,
            'alamat'        => $alamat,
            'telp'            => $telp,
            'email'            => $email,
            'tgl_lahir'        => $tgl_lahir,
            'kode_pos'        => $kode_pos,
            'nama_ibu_k'    => $nama_ibu_k,
            'gender'        => $gender,
        );

        if ($this->m_customer->input($data) > 0) {
            $this->set_response([
                'status' => true,
                'message' => 'new data has been created'
            ], REST_Controller::HTTP_CREATED); // NOT_FOUND (404) being the HTTP response code

        } else {
            $this->set_response([
                'status' => false,
                'message' => 'faild to create new data'
            ], REST_Controller::HTTP_BAD_REQUEST); // NOT_FOUND (404) being the HTTP response code

        }
    }
    public function index_put()
    {
        $id    = $this->put('id_customer');
        $data    = array(
            'username'        => $this->put('username'),
            'password'        => $this->put('password'),
            'nama'            => $this->put('nama'),
            'umur'            => $this->put('umur'),
            'alamat'        => $this->put('alamat'),
            'telp'            => $this->put('telp'),
            'email'            => $this->put('email'),
            'tgl_lahir'        => $this->put('tgl_lahir'),
            'kode_pos'        => $this->put('kode_pos'),
            'nama_ibu_k'    => $this->put('nama_ibu_k'),
            'gender'        => $this->put('gender')

        );

        if ($this->m_customer->update($id, $data) > 0) {
            $this->set_response([
                'status' => true,
                'id' => $id,
                'message' => 'new data has been updated'
            ], REST_Controller::HTTP_NO_CONTENT); // NOT_FOUND (404) being the HTTP response code

        } else {
            $this->set_response([
                'status' => false,
                'message' => 'faild to update data'
            ], REST_Controller::HTTP_BAD_REQUEST); // NOT_FOUND (404) being the HTTP response code

        }
    }
}
