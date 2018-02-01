<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Frontend_model extends CI_Model
{	
    function __construct()
    {
    	parent::__construct(); 
    	
    }
    
    function tampilkan_data(){
    	// $sql = " SELECT
					// alternatif.status,
					// alternatif.total,
					// sekolah.nama_sekolah,
					// sekolah.alamat_sekolah,
					// sekolah.id_sekolah,
					// alternatif.id_sekolah,
					// alternatif.id_alternatif
					// FROM
					// alternatif
					// INNER JOIN sekolah ON sekolah.id_sekolah = alternatif.id_sekolah ORDER BY total DESC ";
    	$sql = " SELECT
					alternatif.status,
					alternatif.total,
					sekolah.nama_sekolah,
					sekolah.alamat_sekolah,
					sekolah.id_sekolah,
					alternatif.id_sekolah,
					alternatif.id_alternatif
					FROM
					alternatif
					INNER JOIN sekolah ON sekolah.id_sekolah = alternatif.id_sekolah ORDER BY total DESC ";
    	return $this->db->query($sql);
    }

    function tampilkan_detail($id_sekolah){
  		// $param = array('id_sekolah' =>$id_sekolah);
		// return $this->db->get_where('sekolah', $param);
		$sql = " SELECT
					alternatif_nilai.id_alternatif_nilai,
					alternatif_nilai.id_alternatif,
					alternatif_nilai.id_kriteria,
					alternatif_nilai.id_subkriteria,
					alternatif.id_alternatif,
					alternatif.id_sekolah,
					alternatif.status,
					alternatif.total,
					kriteria.id_kriteria,
					kriteria.nama_kriteria,
					subkriteria.id_subkriteria,
					subkriteria.nama_subkriteria,
					subkriteria.id_kriteria,
					sekolah.id_sekolah,
					sekolah.nama_sekolah,
					sekolah.nama_kepsek,
					sekolah.alamat_sekolah,
					sekolah.visi,
					sekolah.misi,
					sekolah.no_telpon
					FROM
					alternatif_nilai
					INNER JOIN alternatif ON alternatif_nilai.id_alternatif = alternatif.id_alternatif
					INNER JOIN kriteria ON alternatif_nilai.id_kriteria = kriteria.id_kriteria
					INNER JOIN subkriteria ON kriteria.id_kriteria = subkriteria.id_kriteria AND alternatif_nilai.id_subkriteria = subkriteria.id_subkriteria
					INNER JOIN sekolah ON alternatif.id_sekolah = sekolah.id_sekolah
					WHERE sekolah.id_sekolah = '$id_sekolah'
				 ";
				 return $this->db->query($sql);

    }

    function detail_kriteria($id_sekolah)
    {
    	$sql = " SELECT
					alternatif_nilai.id_alternatif_nilai,
					alternatif_nilai.id_alternatif,
					alternatif_nilai.id_kriteria,
					alternatif_nilai.id_subkriteria,
					alternatif.id_alternatif,
					alternatif.id_sekolah,
					alternatif.status,
					alternatif.total,
					kriteria.id_kriteria,
					kriteria.nama_kriteria,
					subkriteria.id_subkriteria,
					subkriteria.nama_subkriteria,
					subkriteria.id_kriteria,
					sekolah.id_sekolah,
					sekolah.nama_sekolah,
					sekolah.nama_kepsek,
					sekolah.alamat_sekolah,
					sekolah.visi,
					sekolah.misi,
					sekolah.no_telpon
					FROM
					alternatif_nilai
					INNER JOIN alternatif ON alternatif_nilai.id_alternatif = alternatif.id_alternatif
					INNER JOIN kriteria ON alternatif_nilai.id_kriteria = kriteria.id_kriteria
					INNER JOIN subkriteria ON kriteria.id_kriteria = subkriteria.id_kriteria AND alternatif_nilai.id_subkriteria = subkriteria.id_subkriteria
					INNER JOIN sekolah ON alternatif.id_sekolah = sekolah.id_sekolah
					WHERE sekolah.id_sekolah = '$id_sekolah'
				 ";
				 return $this->db->query($sql);
    }
	
}