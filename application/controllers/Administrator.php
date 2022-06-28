<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Controller {

	function __construct()
    {
        parent:: __construct();
        $this->load->model('ModelAdministartor', 'admin');
    }

	public function index()
	{
        if($this->session->userdata('is_login') !== TRUE) {
            redirect('administrator/login');
        } else {
            $data['title'] = 'SIPS - HOME';
            $data['seminar'] = count($this->admin->getPendaftarSeminar());
            $this->load->view('header', $data);
            $this->load->view('admin/index', $data);
            $this->load->view('footer');
        }
	}

    public function peserta()
    {
        if($this->session->userdata('is_login') !== TRUE) {
            redirect('administrator/login');
        } else {
            $data['title'] = 'SIPS - Peserta';
            $data['file'] = 'admin/peserta';
            $data['peserta'] = $this->admin->getPendaftarSeminar();
            $this->load->view('header', $data);
            $this->load->view('admin/index', $data);
            $this->load->view('footer');
        }
    }

    public function acc($id)
    {
        if($this->session->userdata('is_login') !== TRUE) {
            redirect('administrator/login');
        } else {
            $data = array('status' => 1);
            $this->admin->acc($id, $data);
            redirect('administrator/peserta');
        }
    }

    public function not_acc($id)
    {
        if($this->session->userdata('is_login') !== TRUE) {
            redirect('administrator/login');
        } else {
            $data = array('status' => 0);
            $this->admin->acc($id, $data);
            redirect('administrator/peserta');
        }
    }

    public function jenis_seminar() {
        if($this->session->userdata('is_login') !== TRUE) {
            redirect('administrator/login');
        } else {
            $data['title'] = 'SIPS - JENIS SEMINAR';
            $data['file'] = 'admin/jenis_seminar';
            $data['seminar'] = $this->admin->getJenisSeminar();
            $this->load->view('header', $data);
            $this->load->view('admin/index', $data);
            $this->load->view('footer');
        }
    }

    public function tambah_jenis_seminar()
    {
        if($this->session->userdata('is_login') !== TRUE) {
            redirect('administrator/login');
        } else {
            $data['title'] = 'SIPS - JENIS SEMINAR';
            $data['file'] = 'admin/tambah_jenis_seminar';
            $this->load->view('header', $data);
            $this->load->view('admin/index', $data);
            $this->load->view('footer');
        }
    }

    public function save_jenis_seminar()
    {
        $data = array(
            'jenis_seminar' => $this->input->post('jenis_seminar'),
            'htm' => $this->input->post('htm'),
            'jadwal' => $this->input->post('jadwal'),
        );
        $this->admin->save_jenis_seminar($data);
        redirect('administrator/jenis_seminar');
    }

    public function edit_jenis_seminar($id)
    {
        if($this->session->userdata('is_login') !== TRUE) {
            redirect('administrator/login');
        } else {
            $data['title'] = 'SIPS - JENIS SEMINAR';
            $data['file'] = 'admin/edit_jenis_seminar';
            $data['detail'] = $this->admin->getDetailJenisSeminar($id);
            $this->load->view('header', $data);
            $this->load->view('admin/index', $data);
            $this->load->view('footer');
        }
    }

    public function update_jenis_seminar($id)
    {
        $data = array(
            'jenis_seminar' => $this->input->post('jenis_seminar'),
            'htm' => $this->input->post('htm'),
            'jadwal' => $this->input->post('jadwal'),
        );
        $this->admin->update_jenis_seminar($id, $data);
        redirect('administrator/jenis_seminar');
    }

    public function del_jenis_seminar($id)
    {
        $this->admin->del_jenis_seminar($id);
        redirect('administrator/jenis_seminar');
    }

    public function login()
    {
        $data['title'] = 'SIPS - Login Admin';
		$this->load->view('header', $data);
		$this->load->view('admin/login', $data);
		$this->load->view('footer');
    }

    public function process_login()
    {
        $check = $this->admin->check_login($this->input->post('username'));
        if(is_array($check)) {
            if(md5($this->input->post('password')) == $check['password']) {
                $this->session->set_userdata('username', $check['username']);
                $this->session->set_userdata('is_login', TRUE);
                redirect('administrator');
            }
        } else {
            $this->session->set_flashdata('msg_login', 'Username tidak terdaftar');
            redirect('administrator/login');
        }
    }

    public function logout()
    {
        session_start();
        session_destroy();
        redirect('administrator/login');
    }
}
