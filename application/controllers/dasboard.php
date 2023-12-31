<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dasboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['judul'] = "Halaman dasboard";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view("layout/header", $data);
        $this->load->view("dasboard/vw_dasboard", $data);
        $this->load->view("layout/footer", $data);

    }

}
?>