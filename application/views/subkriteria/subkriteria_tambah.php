<script type="text/javascript">
$(document).ready(function () {
	$(".opsi input").removeAttr('required');
	$(".opsi select").removeAttr('required');
	$(".tipe").each(function(){
		$(this).change(function(){
			var did=$(this).attr('data-id');
			$(".opsi").attr('style','display:none');
			$(".opsi input").removeAttr('required');
			$(".opsi select").removeAttr('required');
			$("#div_"+did).show();
			$("#div_"+did+" input").attr('required','required');
		});
	});
	
});
</script>
</script>
<div class="row">
	<div class="col-md-6">
		<?= form_open($action.$link, array('class'=>'form-horizontal form-groups-bordered')); ?>
		<div class="form-group required">
			<label class="col-sm-2 control-label" for="">Tipe</label>
			<div class="col-md-6">
				<?php
				$tipe=array('teks','nilai');
				echo com_choice('radio','tipe',$tipe,'teks',array('class'=>'tipe'),TRUE,TRUE);
				?>
			</div>
		</div>
		<br>
		<input type="hidden" name="id_kriteria" value="<?=$kriteria;?>"/>
		<div id="div_teks" class="opsi">
			<div class="form-group required">
				<label for="field-1" class="col-sm-3 control-label">Keterangan</label>
				<div class="col-md-7">
					<input type="text" name="ket" class="form-control " autocomplete="" placeholder="keterangan" required="" "/>
				</div>
			</div>	
		</div>
		<div id="div_nilai" class="opsi" style="display: none;">
			<div class="form-group required">
				<label class="col-sm-3" for="">Minimum</label>
				<div class="col-md-10">
					<div class="row">
						<div class="col-sm-3" style="margin: 0;padding=0">
							<select name="op_min" class="form-control" required="">
								<option value="<"> < </option>
								<option value="<="> <= </option>
								<option value=">"> > </option>
								<option value="=>"> => </option>
								<option value="="> = </option>
							</select>
						</div>
					<div class="col-sm-8" style="margin: 0;padding=0">
						<input type="number" name="nilai_minimum" id="" class="form-control " autocomplete="" placeholder="Nilai Minimum" required="" value="<?php echo set_value('min'); ?>"/>
					</div>
					</div>
				</div>
			</div>
			<div class="form-group required">
				<label class="col-sm-3 " for="">Maksimum</label>
				<div class="col-md-10">
					<div class="row">
						<div class="col-sm-3" style="margin: 0;padding=0">
							<select name="op_max" class="form-control" required="">
								<option value="<"> < </option>
								<option value="<="> <= </option>
								<option value=">"> > </option>
								<option value="=>"> => </option>
								<option value="="> = </option>
							</select>
						</div>
					<div class="col-sm-8" style="margin: 0;padding=0">
						<input type="number" name="nilai_maksimum" id="" class="form-control " autocomplete="" placeholder="Nilai Minimum" required="" value="<?php echo set_value('max'); ?>"/>
					</div>
					</div>
				</div>
			</div>
		</div>
		<div id="nilaikategori">
			<div class="form-group required">
				<label class="col-sm-3 control-label">Nilai</label>
				<div class="col-md-6">
					<?php
					if(!empty($nilai))
					{
						foreach($nilai as $rnilai)
						{
						?>
						<div class="radio radio-replace">
							<label>
								<input type="radio" name="id_nilai" value="<?=$rnilai->id_nilai;?>"/> <?=$rnilai->nama_nilai;?>
							</label>
						</div>
						<?php
						}
					}
					?>
				</div>
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-2 ">&nbsp;</label>
			<div class="col-md-6">
				<button type="submit" name="submit" class="btn btn-primary btn-flat">Tambah</button>
				<a href="javascript:history.back(-1);" class="btn btn-default btn-flat">Batal</a>
			</div>
		</div>
		<?= form_close(); ?>
	</div>
</div>
