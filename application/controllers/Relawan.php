<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Relawan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('relawan_model');
    }

    public function index()
    {
        $data['judul'] = "Halaman relawan";
        $data['relawan'] = $this->relawan_model->get();
        $this->load->view("layout/relawan_header");
        $this->load->view("relawan/vw_relawan", $data);
        $this->load->view("layout/relawan_footer" );
    }

    public function tambah()
    {
        $data['judul'] = "Halaman Tambah Relawan";

        $this->form_validation->set_rules('nik', 'nik', 'required', [
            'required' => 'nik harus di isi'
        ]);
        $this->form_validation->set_rules('nama', 'nama', 'required', [
            'required' => 'nama harus di isi'
        ]);
        $this->form_validation->set_rules('email', 'email', 'required', [
            'required' => 'email harus di isi'
        ]);
        $this->form_validation->set_rules('umur', 'umur', 'required', [
            'required' => 'umur harus di isi'
        ]);
        $this->form_validation->set_rules('no_hp', 'no_hp', 'required', [
            'required' => 'no hp harus di isi'
        ]);
        $this->form_validation->set_rules('jenis_kelamin', 'jenis_kelamin', 'required', [
            'required' => 'jenis kelamin harus di isi'
        ]);
        $this->form_validation->set_rules('alamat', 'alamat', 'required', [
            'required' => 'alamat harus di isi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/relawan_header");
            $this->load->view("relawan/vw_tambah_relawan", $data);
            $this->load->view("layout/relawan_footer");
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'nik' => $this->input->post('nik'),
                'email' => $this->input->post('email'),
                'umur' => $this->input->post('umur'),
                'alamat' => $this->input->post('alamat'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'no_hp' => $this->input->post('no_hp'),
            ];
            $this->relawan_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil di tambah</div>');
            redirect('Relawan');
        }   
    }

    public function hapus($id)
    {
        $this->relawan_model->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil di hapus</div>');
        redirect('Relawan');
    }

    public function edit($id)
    {
        $data['judul'] = "Halaman Edit Relawan";
        $data['relawan'] = $this->relawan_model->getById($id);

        $this->form_validation->set_rules('nama', 'nama', 'required', [
            'required' => 'nama harus di isi'
        ]);
        $this->form_validation->set_rules('nik', 'nik', 'required', [
            'required' => 'nik harus di isi'
        ]);
        $this->form_validation->set_rules('email', 'email', 'required', [
            'required' => 'email harus di isi'
        ]);
        $this->form_validation->set_rules('umur', 'umur', 'required', [
            'required' => 'umur harus di isi'
        ]);
        $this->form_validation->set_rules('alamat', 'alamat', 'required', [
            'required' => 'alamat harus di isi'
        ]);
        $this->form_validation->set_rules('jenis_kelamin', 'jenis_kelamin', 'required', [
            'required' => 'jenis kelamin sekolah harus di isi'
        ]);
        $this->form_validation->set_rules('no_hp', 'no_hp', 'required', [
            'required' => 'no hp harus di isi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/relawan_header");
            $this->load->view("relawan/vw_edit_relawan", $data);
            $this->load->view("layout/relawan_footer");
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'nik' => $this->input->post('nik'),
                'email' => $this->input->post('email'),
                'umur' => $this->input->post('umur'),
                'alamat' => $this->input->post('alamat'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'no_hp' => $this->input->post('no_hp'),
            ];

            $id = $this->input->post('id');
            $this->relawan_model->update(['id' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil di edit</div>');
            redirect('Relawan');
        }
    }
}
?>