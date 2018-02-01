<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Sekolah extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Sekolah_model');
        $this->load->library('Form_validation');
        $this->load->library('Ion_auth');
        ceklogin();
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'sekolah/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'sekolah/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'sekolah/index.html';
            $config['first_url'] = base_url() . 'sekolah/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Sekolah_model->total_rows($q);
        $sekolah = $this->Sekolah_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'sekolah_data' => $sekolah,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->template->load('template/backend/dashboard', 'sekolah/sekolah_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Sekolah_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_sekolah' => $row->id_sekolah,
		'nama_sekolah' => $row->nama_sekolah,
		'nama_kepsek' => $row->nama_kepsek,
		'alamat_sekolah' => $row->alamat_sekolah,
		'visi' => $row->visi,
		'misi' => $row->misi,
		'no_telpon' => $row->no_telpon,
	    );
            $this->template->load('template/backend/dashboard', 'sekolah/sekolah_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('sekolah'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('sekolah/create_action'),
	    'id_sekolah' => set_value('id_sekolah'),
	    'nama_sekolah' => set_value('nama_sekolah'),
	    'nama_kepsek' => set_value('nama_kepsek'),
	    'alamat_sekolah' => set_value('alamat_sekolah'),
	    'visi' => set_value('visi'),
	    'misi' => set_value('misi'),
	    'no_telpon' => set_value('no_telpon'),
	);
        $this->template->load('template/backend/dashboard', 'sekolah/sekolah_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nama_sekolah' => $this->input->post('nama_sekolah',TRUE),
		'nama_kepsek' => $this->input->post('nama_kepsek',TRUE),
		'alamat_sekolah' => $this->input->post('alamat_sekolah',TRUE),
		'visi' => $this->input->post('visi',TRUE),
		'misi' => $this->input->post('misi',TRUE),
		'no_telpon' => $this->input->post('no_telpon',TRUE),
	    );

            $this->Sekolah_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('sekolah'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Sekolah_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('sekolah/update_action'),
		'id_sekolah' => set_value('id_sekolah', $row->id_sekolah),
		'nama_sekolah' => set_value('nama_sekolah', $row->nama_sekolah),
		'nama_kepsek' => set_value('nama_kepsek', $row->nama_kepsek),
		'alamat_sekolah' => set_value('alamat_sekolah', $row->alamat_sekolah),
		'visi' => set_value('visi', $row->visi),
		'misi' => set_value('misi', $row->misi),
		'no_telpon' => set_value('no_telpon', $row->no_telpon),
	    );
            $this->template->load('template/backend/dashboard', 'sekolah/sekolah_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('sekolah'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_sekolah', TRUE));
        } else {
            $data = array(
		'nama_sekolah' => $this->input->post('nama_sekolah',TRUE),
		'nama_kepsek' => $this->input->post('nama_kepsek',TRUE),
		'alamat_sekolah' => $this->input->post('alamat_sekolah',TRUE),
		'visi' => $this->input->post('visi',TRUE),
		'misi' => $this->input->post('misi',TRUE),
		'no_telpon' => $this->input->post('no_telpon',TRUE),
	    );

            $this->Sekolah_model->update($this->input->post('id_sekolah', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('sekolah'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Sekolah_model->get_by_id($id);

        if ($row) {
            $this->Sekolah_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('sekolah'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('sekolah'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama_sekolah', 'nama sekolah', 'trim|required');
	$this->form_validation->set_rules('nama_kepsek', 'nama kepsek', 'trim|required');
	$this->form_validation->set_rules('alamat_sekolah', 'alamat sekolah', 'trim|required');
	$this->form_validation->set_rules('visi', 'visi', 'trim|required');
	$this->form_validation->set_rules('misi', 'misi', 'trim|required');
	$this->form_validation->set_rules('no_telpon', 'no telpon', 'trim|required');

	$this->form_validation->set_rules('id_sekolah', 'id_sekolah', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "sekolah.xls";
        $judul = "sekolah";
        $tablehead = 0;
        $tablebody = 1;
        $nourut = 1;
        //penulisan header
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Disposition: attachment;filename=" . $namaFile . "");
        header("Content-Transfer-Encoding: binary ");

        xlsBOF();

        $kolomhead = 0;
        xlsWriteLabel($tablehead, $kolomhead++, "No");
	xlsWriteLabel($tablehead, $kolomhead++, "Nama Sekolah");
	xlsWriteLabel($tablehead, $kolomhead++, "Nama Kepsek");
	xlsWriteLabel($tablehead, $kolomhead++, "Alamat Sekolah");
	xlsWriteLabel($tablehead, $kolomhead++, "Visi");
	xlsWriteLabel($tablehead, $kolomhead++, "Misi");
	xlsWriteLabel($tablehead, $kolomhead++, "No Telpon");

	foreach ($this->Sekolah_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_sekolah);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_kepsek);
	    xlsWriteLabel($tablebody, $kolombody++, $data->alamat_sekolah);
	    xlsWriteLabel($tablebody, $kolombody++, $data->visi);
	    xlsWriteLabel($tablebody, $kolombody++, $data->misi);
	    xlsWriteLabel($tablebody, $kolombody++, $data->no_telpon);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

}

/* End of file Sekolah.php */
/* Location: ./application/controllers/Sekolah.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-07-23 05:12:40 */
/* http://harviacode.com */