<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mahasiswa_model');
        $this->load->model('prodi_model');
    }

    public function index()
    {
        $data['judul'] = "Halaman Mahasiswa";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['mahasiswa'] = $this->mahasiswa_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("mahasiswa/vw_mahasiswa", $data);
        $this->load->view("layout/footer", $data);

    }

    public function tambah()
    {
        $data['judul'] = "Halaman Tambah Mahasiswa";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['prodi'] = $this->prodi_model->get();

        $this->form_validation->set_rules('nim', 'nim', 'required', [
            'required' => 'nim harus di isi'
        ]);
        $this->form_validation->set_rules('nama', 'nama', 'required', [
            'required' => 'nama harus di isi'
        ]);
        $this->form_validation->set_rules('email', 'email', 'required', [
            'required' => 'email harus di isi'
        ]);
        $this->form_validation->set_rules('prodi', 'prodi', 'required', [
            'required' => 'prodi harus di isi'
        ]);
        $this->form_validation->set_rules('alamat', 'alamat', 'required', [
            'required' => 'alamat harus di isi'
        ]);
        $this->form_validation->set_rules('asal_sekolah', 'asal_sekolah', 'required', [
            'required' => 'asal sekolah harus di isi'
        ]);
        $this->form_validation->set_rules('no_hp', 'no_hp', 'required', [
            'required' => 'no hp harus di isi'
        ]);
        $this->form_validation->set_rules('jenis_kelamin', 'jenis_kelamin', 'required', [
            'required' => 'jenis kelamin harus di isi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("mahasiswa/vw_tambahMahasiswa", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'nim' => $this->input->post('nim'),
                'email' => $this->input->post('email'),
                'prodi' => $this->input->post('prodi'),
                'alamat' => $this->input->post('alamat'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'no_hp' => $this->input->post('no_hp'),
                'asal_sekolah' => $this->input->post('asal_sekolah'),
            ];
            $this->mahasiswa_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil di tambah</div>');
            redirect('Mahasiswa');
        }
    }

    public function detail($id)
    {
        $data['judul'] = "Halaman Detail Mahasiswa";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['mahasiswa'] = $this->mahasiswa_model->getById($id);
        $this->load->view("layout/header", $data);
        $this->load->view("mahasiswa/vw_detailMahasiswa", $data);
        $this->load->view("layout/footer", $data);

    }
    public function hapus($id)
    {
        $this->mahasiswa_model->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil di hapus</div>');
        redirect('mahasiswa');
    }

    public function upload()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'nim' => $this->input->post('nim'),
            'email' => $this->input->post('email'),
            'prodi' => $this->input->post('prodi'),
            'alamat' => $this->input->post('alamat'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'asal_sekolah' => $this->input->post('asal_sekolah'),
            'no_hp' => $this->input->post('no_hp')
        ];
        $this->mahasiswa_model->insert($data);
        redirect('mahasiswa');
    }

    public function edit($id)
    {
        $data['judul'] = "Halaman Edit Mahasiswa";
        $data['mahasiswa'] = $this->mahasiswa_model->getById($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['prodi'] = $this->prodi_model->get();

        $this->form_validation->set_rules('nim', 'nama', 'required', [
            'required' => 'nama harus di isi'
        ]);
        $this->form_validation->set_rules('nama', 'nama', 'required', [
            'required' => 'nama harus di isi'
        ]);
        $this->form_validation->set_rules('email', 'email', 'required', [
            'required' => 'email harus di isi'
        ]);
        $this->form_validation->set_rules('prodi', 'prodi', 'required', [
            'required' => 'prodi harus di isi'
        ]);
        $this->form_validation->set_rules('alamat', 'alamat', 'required', [
            'required' => 'alamat harus di isi'
        ]);
        $this->form_validation->set_rules('asal_sekolah', 'asal_sekolah', 'required', [
            'required' => 'asal sekolah harus di isi'
        ]);
        $this->form_validation->set_rules('no_hp', 'no_hp', 'required', [
            'required' => 'no hp harus di isi'
        ]);
        $this->form_validation->set_rules('jenis_kelamin', 'jenis_kelamin', 'required', [
            'required' => 'jenis kelamin harus di isi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("mahasiswa/vw_ubahMahasiswa", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'nim' => $this->input->post('nim'),
                'email' => $this->input->post('email'),
                'prodi' => $this->input->post('prodi'),
                'alamat' => $this->input->post('alamat'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'no_hp' => $this->input->post('no_hp'),
                'asal_sekolah' => $this->input->post('asal_sekolah'),
            ];
            $id = $this->input->post('id');
            $this->mahasiswa_model->update(['id' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil di ubah</div>');
            redirect('Mahasiswa');
        }
    }

    public function update()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'nim' => $this->input->post('nim'),
            'email' => $this->input->post('email'),
            'prodi' => $this->input->post('prodi'),
            'alamat' => $this->input->post('alamat'),
            'no_hp' => $this->input->post('no_hp'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'asal_sekolah' => $this->input->post('asal_sekolah')
        ];
        $id = $this->input->post('id');
        $this->mahasiswa_model->update(['id' => $id], $data);
        redirect('mahasiswa');
    }
}
?>