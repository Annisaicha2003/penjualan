<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->database();
        $this->load->library('session');
    }

    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('login/index');
        } else {
            $this->dologin();
        }
    }

    public function dologin()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('users', ['email' => $email])->row_array();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'id'       => $user['id'],
                    'email'    => $user['email'],
                    'username' => $user['username'],
                    'role'     => $user['role']
                ];
                $this->session->set_userdata($data);

                $this->_updateLastLogin($user['id']);

                switch ($user['role']) {
                    case 'PEMILIK':
                        redirect('menu');
                        break;
                    case 'ADMIN':
                        redirect('user');
                        break;
                    case 'KASIR':
                        redirect('kasir');
                        break;
                    default:
                        redirect('login');
                        break;
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><b>Error:</b> Password salah.</div>');
                redirect('/');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><b>Error:</b> User tidak ditemukan.</div>');
            redirect('/');
        }
    }

    private function _updateLastLogin($userid)
    {
        $this->db->set('last_login', 'NOW()', FALSE);
        $this->db->where('id', $userid);
        $this->db->update('users');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(site_url('login'));
    }

    public function block()
    {
        $data = array(
            'user'  => $this->infoLogin(), // Pastikan fungsi infoLogin() ada dan bekerja dengan benar
            'title' => 'Access Denied!'
        );
        $this->load->view('login/error404', $data);
    }

    // Fungsi ini harus didefinisikan di mana saja di dalam aplikasi Anda.
    // Sebagai contoh, ini dapat diletakkan di dalam helper atau model.
    private function infoLogin()
    {
        // Ini hanya contoh, pastikan menyesuaikan dengan aplikasi Anda
        return $this->session->userdata();
    }
}
