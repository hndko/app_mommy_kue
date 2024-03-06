<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AuthController extends CI_Controller
{
    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->session->userdata('logged') != TRUE) {
            if ($this->form_validation->run() == false) {
                $this->load->view('auth/login');
            } else {
                $this->_login();
            }
        } else {
            redirect('app/dashboard');
        }
    }

    private function _login()
    {
        $username = htmlspecialchars($this->input->post('username', true));
        $password = htmlspecialchars($this->input->post('password', true));

        $user = $this->db->get_where('tb_users', ['username' => $username])->row_array();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'user_id' => $user['user_id'],
                    'nama_lengkap' => $user['nama_lengkap'],
                    'logged' => TRUE
                ];

                $this->session->set_userdata($data);
                $this->session->set_flashdata('success', true);
                $this->session->set_flashdata('message', '<strong>Berhasil!</strong> Selamat datang kembali!');
                redirect('app/dashboard');
            } else {
                $this->session->set_flashdata('failed', true);
                $this->session->set_flashdata('message', '<strong>Failed!</strong> Anda salah password!');
                redirect('login');
            }
        } else {
            $this->session->set_flashdata('failed', true);
            $this->session->set_flashdata('message', '<strong>Failed!</strong> Username is not registered!');
            redirect('login');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        $this->session->set_flashdata('success', true);
        $this->session->set_flashdata('message', '<strong>Berhasil!</strong> You have been logged out!');
        redirect('login');
    }
}
