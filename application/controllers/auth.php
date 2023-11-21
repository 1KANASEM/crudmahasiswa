<?php
defined('BASEPATH') or exit('No direct script access allowed');

class auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model', 'userrole');
    }

    public function index()
    {
        if ($this->session->userdata('email')) {
            redirect('Mahasiswa');
        }
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', [
            'valid_email' => 'Email harus valid',
            'required' => 'Email wajib di isi'
        ]);

        $this->form_validation->set_rules('password', 'Password', 'trim|required', [
            'required' => 'password wajib di isi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/auth_header");
            $this->load->view("auth/login");
            $this->load->view("layout/auth_footer");
        } else {
            $this->cek_login();
        }
    }

    public function regis()
    {
        if ($this->session->userdata('email')) {
            redirect('Mahasiswa');
        }

        $this->form_validation->set_rules('nama', 'nama', 'trim|required', [
            'required' => 'nama harus di isi'
        ]);

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[user.email]', [
            'is_unique' => 'email ini sudah terdaftar',
            'valid_email' => 'Email harus valid',
            'required' => 'Email wajib di isi'
        ]);

        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]|matches[password2]', [
            'matches' => 'password tidak sama',
            'min_length' => 'password terlalu pendek',
            'required' => 'password wajib di isi'
        ]);

        $this->form_validation->set_rules('password2', 'password', 'required|trim|matches[password]');
        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Registration';
            $this->load->view("layout/auth_header", $data);
            $this->load->view("auth/register");
            $this->load->view("layout/auth_footer");
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'gambar' => 'default.jpg',
                'role' => 'user',
                'date_created' => time()
            ];
            $this->userrole->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Selamat Akun Anda Telah Berhasil Dibuat, Silahkan Login Untuk masuk</div>');
            redirect('auth');
        }
    }

    public function cek_regis()
    {
        $data = [
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'email' => htmlspecialchars($this->input->post('email', true)),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'gambar' => 'default.jpg',
            'role' => 'user',
            'date_created' => time()
        ];
        $this->userrole->insert($data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Selamat Akun Anda Telah Berhasil Dibuat, Silahkan Login Untuk masuk</div>');
        redirect('auth');
    }

    public function cek_login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'email' => $user['email'],
                    'role' => $user['role'],
                    'id' => $user['id'],
                ];
                $this->session->set_userdata($data);
                if ($user['role'] == 'admin') {
                    redirect('mahasiswa');
                } else {
                    redirect('Profil');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">password salah</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">email salah</div>');
            redirect('auth');
        }

    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role');
        $this->session->set_flashdata('message', '<dive class="alert alert-succes" role="alert">Berhasil Logout');
        redirect('auth');
    }
}
?>