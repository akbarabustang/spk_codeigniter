<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller
{

	function __construct()
    {
        parent::__construct();
        $this->load->model('Frontend_model','fm');
        $this->load->model('Kriteria_model','mod_kriteria');
		$this->load->library('M_db');

    }

    public function index(){
    	//$this->load->view('welcome_message');
    	$this->template->load('template/frontend/home', 'frontend/home');
    }

    public function ranking(){
    	$data['data'] = $this->fm->tampilkan_data()->result();
    	$this->template->load('template/frontend/home', 'frontend/ranking', $data);

    }

    public function detail(){
    	$id_sekolah = $this->input->get('sekolah');
        $data['sekolah'] = $this->fm->tampilkan_detail($id_sekolah)->row_array();
    	$data['kriteria'] = $this->fm->detail_kriteria($id_sekolah)->result();
    	$this->template->load('template/frontend/home', 'frontend/detail', $data);
    }

    public function galeri(){
    	//$this->load->view('welcome_message');
    	$this->template->load('template/frontend/home', 'frontend/galeri');
    }

}
