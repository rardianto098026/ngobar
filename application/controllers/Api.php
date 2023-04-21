<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('api_model');
    }

    public function get_data()
    {
        $data = $this->api_model->get_data();
        echo json_encode($data);
    }

    public function login()
    {
        $data = $this->api_model->get_data_login();
        echo json_encode($data);
    }

    public function insert_mahasiswa()
    {
        $data = $this->api_model->tambahDataMahasiswa();
        echo json_encode($data);
    }

    public function update_mahasiswa()
    {
        $data = $this->api_model->ubahDataMahasiswa();
        echo json_encode($data);
    }

    public function delete_mahasiswa()
    {
        $id = $this->input->post('id');
        $data = $this->api_model->hapusDataMahasiswa($id);
        echo json_encode($data);
    }
}
?>

