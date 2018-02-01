<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library(array('Ion_auth','Form_validation'));
		$this->load->helper(array('url','language'));
		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
		$this->lang->load('auth');
		$this->load->model('Ion_auth_model', 'm');
		$this->load->model('Kriteria_model', 'km');
		$this->load->model('Sekolah_model', 'sm');
	}

	public function index()
	{
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('Auth/login', 'refresh');
		}
		elseif (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
		{
			// redirect them to the home page because they must be an administrator to view this
			return show_error('You must be an administrator to view this page.');
		}
		else
		{
			$data['jumlah_users'] = $this->m->jumlah()->result();
			$data['jumlah_sekolah'] = $this->sm->get_all();
			$data['jumlah_kriteria'] = $this->km->jumlah()->result();
			$this->template->load('template/backend/dashboard', 'backend/dashboard', $data);
		}

	}
}
