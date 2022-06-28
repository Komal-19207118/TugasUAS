<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct()
    {
        parent:: __construct();
        $this->load->model('user/ModelAuth', 'auth_user');
    }

	public function index()
	{
		$data['title'] = 'SIPS - Sign In User';
		$this->load->view('header', $data);
		$this->load->view('user/signin');
		$this->load->view('footer');
	}

    public function signin()
    {
        $check = $this->auth_user->check_user($this->input->post('email'));
        if(is_array($check)) {
            if(md5($this->input->post('password')) == $check['password']) {
                $this->session->set_userdata('nama', $check['nama']);
                $this->session->set_userdata('email', $check['email']);
                $this->session->set_userdata('no_hp', $check['no_hp']);
                $this->session->set_userdata('login_user', TRUE);
                redirect('user/home');
            }
        } else {
            $this->session->set_flashdata('msg_login', 'Username tidak terdaftar');
            redirect('user/auth');
        }
    }

    public function signup()
    {
        $data['title'] = 'SIPS - Sign Up User';
		$this->load->view('header', $data);
		$this->load->view('user/signup');
		$this->load->view('footer');
    }

    public function process_signup()
    {
        $data = array(
            'nama'      => $this->input->post('nama'),
            'email'     => $this->input->post('email'),
            'no_hp'     => $this->input->post('no_hp'),
            'password'  => md5($this->input->post('password')),
        );
        $this->auth_user->signup($data);
        $this->session->set_flashdata('msg_login', 'Sign Up Success !');
        redirect('user/auth');
    }

    public function logout() 
    {
        session_start();
        session_destroy();
        redirect('user/auth');
    }

    public function profile()
    {
        $data['profile'] = $this->auth_user->get_profile($this->session->userdata('email'));
        $data['title'] = 'SIPS - Profile User';
        $data['file'] = 'user/profile';
		$this->load->view('header', $data);
		$this->load->view('user/index');
		$this->load->view('footer');
    }
}
