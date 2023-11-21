<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prodi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('prodi_model');
    }

    public function index()
    {
        $data['judul'] = "Halaman Prodi";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['prodi'] = $this->prodi_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("Kaprodi/vw_prodi", $data);
        $this->load->view("layout/footer", $data);

    }

    public function tambah()
    {
        $data['judul'] = "Halaman Tambah Prodi";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama', 'nama', 'required', [
            'required' => 'nama harus di isi'
        ]);
        $this->form_validation->set_rules('ruang', 'ruang', 'required', [
            'required' => 'ruang harus di isi'
        ]);
        $this->form_validation->set_rules('jurusan', 'jurusan', 'required', [
            'required' => 'jurusan harus di isi'
        ]);
        $this->form_validation->set_rules('akreditasi', 'akreditasi', 'required', [
            'required' => 'akreditasi harus di isi'
        ]);
        $this->form_validation->set_rules('nama_kaprodi', 'nama_kaprodi', 'required', [
            'required' => 'nama kaprodi harus di isi'
        ]);
        $this->form_validation->set_rules('tahun_berdiri', 'tahun_berdiri', 'required', [
            'required' => 'tahun beridiri sekolah harus di isi'
        ]);
        $this->form_validation->set_rules('output_lulusan', 'output_lulusan', 'required', [
            'required' => 'output lulusan harus di isi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("Kaprodi/vw_tambahProdi", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'ruang' => $this->input->post('ruang'),
                'jurusan' => $this->input->post('jurusan'),
                'akreditasi' => $this->input->post('akreditasi'),
                'nama_kaprodi' => $this->input->post('nama_kaprodi'),
                'tahun_berdiri' => $this->input->post('tahun_berdiri'),
                'output_lulusan' => $this->input->post('output_lulusan'),
            ];

            $upload_image = $_FILES['gambar']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = '/assets/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->prodi_model->insert($data, $upload_image);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil di tambah</div>');
            redirect('Prodi');
        }
    }

    public function detail($id)
    {
        $data['judul'] = "Halaman Detail Prodi";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['prodi'] = $this->prodi_model->getById($id);
        $this->load->view("layout/header", $data);
        $this->load->view("Kaprodi/vw_detailKaprodi", $data);
        $this->load->view("layout/footer", $data);

    }

    public function hapus($id)
    {
        $this->prodi_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            <i class ="icon fas fa-info-circle"></i> Data prodi tidak dapat di hapus(sudah berelasi)</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            <i class ="icon fas fa-info-circle"></i> Data prodi berhasil di hapus</div>');
        }
        redirect('prodi');
    }

    public function upload()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'ruang' => $this->input->post('ruang'),
            'jurusan' => $this->input->post('jurusan'),
            'akreditasi' => $this->input->post('akreditasi'),
            'nama_kaprodi' => $this->input->post('nama_kaprodi'),
            'tahun_berdiri' => $this->input->post('tahun_berdiri'),
            'output_lulusan' => $this->input->post('output_lulusan')
        ];
        $this->prodi_model->insert($data);
        redirect('prodi');
    }

    public function edit($id)
    {
        $data['judul'] = "Halaman Edit Prodi";
        $data['prodi'] = $this->prodi_model->getById($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama', 'nama', 'required', [
            'required' => 'nama harus di isi'
        ]);
        $this->form_validation->set_rules('ruang', 'ruang', 'required', [
            'required' => 'ruang harus di isi'
        ]);
        $this->form_validation->set_rules('jurusan', 'jurusan', 'required', [
            'required' => 'jurusan harus di isi'
        ]);
        $this->form_validation->set_rules('akreditasi', 'akreditasi', 'required', [
            'required' => 'akreditasi harus di isi'
        ]);
        $this->form_validation->set_rules('nama_kaprodi', 'nama_kaprodi', 'required', [
            'required' => 'nama kaprodi harus di isi'
        ]);
        $this->form_validation->set_rules('tahun_berdiri', 'tahun_berdiri', 'required', [
            'required' => 'tahun beridiri sekolah harus di isi'
        ]);
        $this->form_validation->set_rules('output_lulusan', 'output_lulusan', 'required', [
            'required' => 'output lulusan harus di isi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("Kaprodi/vw_ubahProdi", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'ruang' => $this->input->post('ruang'),
                'jurusan' => $this->input->post('jurusan'),
                'akreditasi' => $this->input->post('akreditasi'),
                'nama_kaprodi' => $this->input->post('nama_kaprodi'),
                'tahun_berdiri' => $this->input->post('tahun_berdiri'),
                'output_lulusan' => $this->input->post('output_lulusan'),
            ];

            $upload_image = $_FILES['gambar']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = '/assets/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $old_image = $data['prodi']['gambar'];
                    if ($old_image != 'prodi.jpg') {
                        unlink(FCPATH . 'assets/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $id = $this->input->post('id');
            $this->prodi_model->update(['id' => $id], $data, $upload_image);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil di edit</div>');
            redirect('Prodi');
        }
    }
    public function update()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'ruang' => $this->input->post('ruang'),
            'jurusan' => $this->input->post('jurusan'),
            'akreditasi' => $this->input->post('akreditasi'),
            'nama_kaprodi' => $this->input->post('nama_kaprodi'),
            'tahun_berdiri' => $this->input->post('tahun_berdiri'),
            'output_lulusan' => $this->input->post('output_lulusan')
        ];
        $id = $this->input->post('id');
        $this->prodi_model->update(['id' => $id], $data);
        redirect('Prodi');
    }
}
?>