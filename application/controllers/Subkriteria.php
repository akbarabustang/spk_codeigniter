<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Subkriteria extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Kriteria_model', 'km');
        $this->load->model('Subkriteria_model');
        $this->load->model('Nilai_model' , 'nm');
        $this->load->library('Form_validation');
        $this->load->library('Ion_auth');
        $this->load->library('m_db');
        ceklogin();
    }

    public function index()
    {
        $id_kriteria =  $this->uri->segment(3);
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'subkriteria/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'subkriteria/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'subkriteria/index.html';
            $config['first_url'] = base_url() . 'subkriteria/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Subkriteria_model->total_rows($q);
        $subkriteria = $this->Subkriteria_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'record' => $this->Subkriteria_model->index()->result(),
            'subkriteria_data' => $subkriteria,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->template->load('template/backend/dashboard', 'subkriteria/subkriteria_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Subkriteria_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_subkriteria' => $row->id_subkriteria,
		'nama_subkriteria' => $row->nama_subkriteria,
		'id_kriteria' => $row->id_kriteria,
		'tipe' => $row->tipe,
		'nilai_minimum' => $row->nilai_minimum,
		'nilai_maksimum' => $row->nilai_maksimum,
		'op_min' => $row->op_min,
		'op_max' => $row->op_max,
		'id_nilai' => $row->id_nilai,
	    );
            $this->load->view('subkriteria/subkriteria_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('subkriteria'));
        }
    }

    public function parameter()
    {
        $id_kriteria =  $this->input->get('kriteria');
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'subkriteria/parameter.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'subkriteria/parameter.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'subkriteria/parameter.html';
            $config['first_url'] = base_url() . 'subkriteria/parameter.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Subkriteria_model->total_rows($q);
        $subkriteria = $this->Subkriteria_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'record' => $this->Subkriteria_model->get_by_kriteria_id($id_kriteria)->result(),
            'subkriteria_data' => $subkriteria,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $data['kriteriaa']=$id_kriteria?"?kriteria=".$id_kriteria:"";
        $data['kriteria'] = $this->input->get('kriteria');
        $this->template->load('template/backend/dashboard', 'subkriteria/subkriteria_paramater', $data);
    }


    public function create() 
    {
        $ref=$this->input->get('kriteria');
        $data = array(
            'button' => 'Create',
            'action' => site_url('subkriteria/create_action'),
    	    'nama_subkriteria' => set_value('nama_subkriteria'),
    	    'tipe' => set_value('tipe'),
    	    'nilai_minimum' => set_value('nilai_minimum'),
    	    'nilai_maksimum' => set_value('nilai_maksimum'),
    	    'op_min' => set_value('op_min'),
    	    'op_max' => set_value('op_max'),
            'id_nilai' => set_value('id_nilai'),
    	    'link' => 'parameter/'.$ref?"?kriteria=".$ref:"",
	       ); 
        $data['kriteria'] = $this->input->get('kriteria');
        $data['nilai'] = $this->nm->get_all('nilai_kategori');
        $this->template->load('template/backend/dashboard', 'subkriteria/subkriteria_tambah', $data);

    }
    
    public function create_action() 
    {
        // $this->_rules();
        // if ($this->form_validation->run() == FALSE) {
        //     $this->create();
        // } else {
            $ref=$this->input->get('kriteria');
            $link=$ref?"?kriteria=".$ref:"";
    		$nama_subkriteria = $this->input->post('nama_subkriteria');
    		$id_kriteria = $this->input->post('id_kriteria');
    		$tipe = $this->input->post('tipe');
    		$nilai_minimum = $this->input->post('nilai_minimum');
    		$nilai_maksimum = $this->input->post('nilai_maksimum');
    		$op_min = $this->input->post('op_min');
    		$op_max = $this->input->post('op_max');
    		$id_nilai = $this->input->post('id_nilai');
            $ket=$this->input->post('ket');
            $isi='';
            if($tipe=="teks")
            {
                $isi=$ket;
            }elseif($tipe=="nilai"){
                $isi=$nilai_maksimum;
            }
            $this->Subkriteria_model->subkriteria_add($tipe,$id_kriteria,$op_max,$isi,$op_min,$nilai_minimum,$id_nilai);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('subkriteria/parameter').$link);
        // }
    }
    
    // public function update($id) 
    // {
    //     $ref=$this->input->get('kriteria');
    //     $link=$ref?"?kriteria=".$ref:"";
    //     $data = array(
    //         'button' => 'Create',
    //         'action' => site_url('subkriteria/update_action'),
    //         'nama_subkriteria' => set_value('nama_subkriteria'),
    //         'tipe' => set_value('tipe'),
    //         'nilai_minimum' => set_value('nilai_minimum'),
    //         'nilai_maksimum' => set_value('nilai_maksimum'),
    //         'op_min' => set_value('op_min'),
    //         'op_max' => set_value('op_max'),
    //         'id_nilai' => set_value('id_nilai'),
    //         'link' => $link,
    //        ); 
    //     $data['kriteria'] = $this->input->get('kriteria');
    //     $data['nilai'] = $this->nm->get_all('nilai_kategori');
    //     $this->template->load('template/backend/dashboard', 'subkriteria/subkriteria_form', $data);
    // }
    
    public function update_action() 
    {
        $this->form_validation->set_rules('subkriteria','Parameter Id','required');
        $this->form_validation->set_rules('id_kriteria','Kriteria Utama','required');
        $this->form_validation->set_rules('id_nilai','Tipe','required');
        if($this->form_validation->run()==TRUE)
        {           
            $ref=$this->input->get('kriteria');
            $link=$ref?"?kriteria=".$ref:"";
            $subID=$this->input->post('subkriteria');
            $id_kriteria=$this->input->post('id_kriteria');
            $id_nilai=$this->input->post('id_nilai');
            $tipe=$this->input->post('tipe');           
            $nilai_maksimum=$this->input->post('nilai_maksimum');
            $op_max=$this->input->post('op_max');
            $nilai_minimum=$this->input->post('nilai_minimum');
            $op_min=$this->input->post('op_min');
            $ket=$this->input->post('ket');
            
            $isi='';
            if($tipe=="teks")
            {
                $isi=$ket;
            }elseif($tipe=="nilai"){
                $isi=$nilai_maksimum;
            }
            if($this->Subkriteria_model->subkriteria_edit($subID,$tipe,$id_kriteria,$op_max,$isi,$op_min,$nilai_minimum,$id_nilai)==TRUE)
            {
                redirect('subkriteria/parameter'.$link);
            }else{
                redirect('subkriteria/update_action'.$link);
            }
        }else{
            $id=$this->input->get('id');
            $kriteria=$this->input->get('kriteria');
            $d['utama']=$this->km->kriteria_data();
            $d['nilai']=$this->m_db->get_data('nilai_kategori');
            $d['kriteria']=$kriteria?"?kriteria=".$kriteria:"";
            $d['data']=$this->km->subkriteria_data(array('id_subkriteria'=>$id));
            $this->template->load('template/backend/dashboard','subkriteria/subkriteria_form',$d);
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Subkriteria_model->get_by_id($id);

        if ($row) {
            $this->Subkriteria_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('subkriteria'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('subkriteria'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama_subkriteria', 'nama subkriteria', 'trim|required');
	$this->form_validation->set_rules('id_kriteria', 'id kriteria', 'trim|required');
	$this->form_validation->set_rules('tipe', 'tipe', 'trim|required');
	$this->form_validation->set_rules('nilai_minimum', 'nilai minimum', 'trim|required|numeric');
	$this->form_validation->set_rules('nilai_maksimum', 'nilai maksimum', 'trim|required|numeric');
	$this->form_validation->set_rules('op_min', 'op min', 'trim|required');
	$this->form_validation->set_rules('op_max', 'op max', 'trim|required');
	$this->form_validation->set_rules('id_nilai', 'id nilai', 'trim|required');

	$this->form_validation->set_rules('id_subkriteria', 'id_subkriteria', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Subkriteria.php */
/* Location: ./application/controllers/Subkriteria.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-06-29 15:35:40 */
/* http://harviacode.com */