<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct()
    {
        parent:: __construct();
        $this->load->model('user/ModelHome', 'home_user');
    }

	public function index()
	{
        if($this->session->userdata('login_user') == TRUE) {
            $this->daftar();
        } else {
            $data['title'] = 'SIPS - USER';
            $this->load->view('header', $data);
            $this->load->view('user/index');
            $this->load->view('footer');
        }
	}

    public function daftar()
    {
        if($this->session->userdata('login_user') == TRUE) {
            $data['title'] = 'SIPS - USER DAFTAR';
            $data['file'] = 'user/form_daftar';
            $data['seminar'] = $this->home_user->getDataSeminar();
            $this->load->view('header', $data);
            $this->load->view('user/index');
            $this->load->view('footer');
        } else {
            redirect('user/auth/login');
        }
    }

    public function proses_daftar()
    {
        $check_seminar = $this->home_user->check_seminar($this->input->post('email'), $this->input->post('seminar'));
        if(is_array($check_seminar)) {
            echo '<script>
                if(window.confirm("Pendaftaran berhasil !")) {
                    window.location = "'.site_url('user/home/bukti_bayar/'.$this->input->post('seminar')).'"
                } else {
                    window.location = "'.site_url('user').'"
                }
            </script>';
        } else {
            $data = array(
                'nama'          => $this->input->post('nama'),
                'email'         => $this->input->post('email'),
                'no_hp'         => $this->input->post('no_hp'),
                'tempat_lahir'  => $this->input->post('tempat_lahir'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                'alamat'        => $this->input->post('alamat'),
                'id_seminar'    => $this->input->post('seminar'),
            );
            $save = $this->home_user->daftar($data);
            if($save > 0)
            echo '<script>
                if(window.confirm("Pendaftaran berhasil !")) {
                    window.location = "'.site_url('user/home/bukti_bayar/'.$this->input->post('seminar')).'"
                } else {
                    window.location = "'.site_url('user/home').'"
                }
            </script>';
            else
                redirect('user');
        }
    }

    public function bukti_bayar($seminar)
    {
        if($this->session->userdata('login_user') == TRUE) {
            $data['title']   = 'SIPS - BUKTI BAYAR';
            $data['file']    = 'user/form_bukti_bayar';
            $data['detail']= $this->home_user->check_seminar($this->session->userdata('email'), $seminar);
            $data['seminar'] = $this->home_user->getDataSeminar();
            $this->load->view('header', $data);
            $this->load->view('user/index', $data);
            $this->load->view('footer');
        } else {
            redirect('user/auth/login');
        }
    }
}
