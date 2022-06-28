<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    function __construct()
    {
        parent:: __construct();
        $this->load->model('ModelUser', 'user');
    }

	public function index()
	{
        $data['title'] = 'SIPS - DAFTAR';
        $data['seminar'] = $this->user->getDataSeminar();
        $this->load->view('header', $data);
        $this->load->view('user/form_daftar', $data);
        $this->load->view('footer');
	}

    public function daftar()
    {
        $check_seminar = $this->user->check_seminar($this->input->post('email'), $this->input->post('seminar'));
        if(is_array($check_seminar)) {
            echo '<script>
                if(window.confirm("Berikut No Rek Untuk Pembayaran Seminar 12543213")) {
                    window.location = "'.site_url('user/bukti_bayar').'"
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
            $save = $this->user->daftar($data);
            if($save > 0)
            echo '<script>
                if(window.confirm("Berikut No Rek Untuk Pembayaran Seminar 12543213")) {
                    window.location = "'.site_url('user/bukti_bayar').'"
                } else {
                    window.location = "'.site_url('user').'"
                }
            </script>';
            else
                redirect('user');
        }
    }

    public function bukti_bayar()
    {
        $data['title'] = 'SIPS - BUKTI BAYAR';
        $this->load->view('header', $data);
        $this->load->view('user/form_bukti_bayar', $data);
        $this->load->view('footer');
    }
}
