<script type="text/javascript">
function proseshitung()
{
	$.ajax({
		type:'get',
		dataType:'json',
		url:"<?=base_url('Perbandingan/proseshitung');?>",
		error:function(){
			$("#respon").html('Proses hitung seleksi sekolah gagal');
			$("#error").show();
		},
		beforeSend:function(){
			$("#error").hide();
			$("#respon").html("Sedang bekerja, tunggu sebentar");
		},
		success:function(x){
			if(x.status=="ok")
			{
				alert('Proses seleksi berhasil. Halaman akan direfresh');
				window.location=window.location;
			}else{
				$("#respon").html('Proses hitung seleksi Alternatif gagal');
				$("#error").show();
			}
		},
	});
}
</script>

<div id="respon" class="hidden-print"></div>
<?php
$sql="Select COUNT(*) as m FROM alternatif WHERE status IN ('unggulan','belum unggulan')";
$c=$this->m_db->get_query_row($sql,'m');
if($c < 1)
{
	echo '<div class="alert alert-warning hidden-print" id="error">Seleksi belum diproses. Klik <a href="javascript:;" onclick="proseshitung();">di sini</a> untuk proses</div>';
}else{	
?>

<br><br>
<div class="table-responsive">
	
<table class="table table-bordered ">
<thead>
	<th>Nama Sekolah</th>
	<?php
	$dKriteria=$this->mod_kriteria->kriteria_data();
	if(!empty($dKriteria))
	{
		foreach($dKriteria as $rKriteria)
		{
			echo '<th>'.$rKriteria->nama_kriteria.'</th>';
		}
	}
	?>
	<th>Total</th>
	<th>Status</th>
</thead>
<?php


	$dAlternatif=$this->m_db->get_data('alternatif');
	if(!empty($dAlternatif))
	{
		
		foreach($dAlternatif as $rAlternatif)
		{
			$alternatifID=$rAlternatif->id_alternatif;
			$sekolahID=$rAlternatif->id_sekolah;
			$nama_sekolah=field_value('sekolah','id_sekolah',$sekolahID,'nama_sekolah');
			
			?>
			<tr>
				<td><?=$nama_sekolah;?></td>
				<?php
				$total=0;
				if(!empty($dKriteria))
				{
					foreach($dKriteria as $rKriteria)
					{						
						$kriteriaid=$rKriteria->id_kriteria;
						$subkriteria=alternatif_nilai($alternatifID,$kriteriaid);
						$nilaiID=field_value('subkriteria','id_subkriteria',$subkriteria,'id_nilai');
						$nilai=field_value('nilai_kategori','id_nilai',$nilaiID,'nama_nilai');
						$prioritas=ambil_prioritas($subkriteria);
						$total+=$prioritas;
					    echo '<td>'.number_format((float)$prioritas,2).'</td>';
					}
				}
				?>
				<td><?=number_format($total,2);?></td>
				<!-- <td><?=ucwords($rAlternatif->status);?></td> -->
				<td>
					<?php 
					if ($total >= 0.8) {
						echo "Sekolah unggulan";
					}else{
						echo "belum unggulan";
						}
					 ?>
				</td>
			</tr>			
			<?php
			
		}
		
	}else{
		return false;
	}
	
}
?>

</table>
</div>
<a href="javascript:;" onclick="proseshitung();" class="btn btn-primary btn-md"> Hitung</a>