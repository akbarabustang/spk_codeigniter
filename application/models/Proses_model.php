<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Proses_model extends CI_Model
{	
    function __construct()
    {
    	parent::__construct(); 
        $this->load->library('m_db');
        $this->load->model('Kriteria_model','mod_kriteria');
    }
    
	
	function proseshitung()
	{
		$dKriteria=$this->mod_kriteria->kriteria_data();
			$dAlternatif=$this->m_db->get_data('alternatif');
			if(!empty($dAlternatif))
			{
				
				foreach($dAlternatif as $rAlternatif)
				{
					$alternatifID=$rAlternatif->id_alternatif;
					$sekolahID=$rAlternatif->id_sekolah;
					$nama_sekolah=field_value('sekolah','id_sekolah',$sekolahID,'nama_sekolah');			
					if(!empty($dKriteria))
					{
						$total=0;
						foreach($dKriteria as $rKriteria)
						{						
							$kriteriaid=$rKriteria->id_kriteria;
							$subkriteria=alternatif_nilai($alternatifID,$kriteriaid);
							$nilaiID=field_value('subkriteria','id_subkriteria',$subkriteria,'id_nilai');
							$nilai=field_value('nilai_kategori','id_nilai',$nilaiID,'nama_nilai');
							$prioritas=ambil_prioritas($subkriteria);
							$total+=$prioritas;							
						}						
					}
					
					$shasil=array(
					'id_alternatif'=>$alternatifID,
					);
					$dhasil=array(
					'total'=>$total,
					);
					$this->m_db->edit_row('alternatif',$dhasil,$shasil);
			
					$dPH=$this->m_db->get_data('alternatif');
					$kuota = 100;
					$rank=0;
					foreach($dPH as $rPH)
					{
						$rank+=1;
						$d=array();
						if($rank <= $kuota)
						{
							$d=array(
							'status'=>'Unggulan',
							);
						}else{
							$d=array(
							'status'=>'Belum Unggulan',
							);
						}
						$this->m_db->edit_row('alternatif',$d,array('id_alternatif'=>$rPH->id_alternatif));
					}
					
					return true;
				}								
			}else{
				return false;
			}
			
		}
	
}