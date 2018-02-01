
        <h2 style="margin-top:0px">Sekolah <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
    	    <div class="form-group">
                <label for="varchar">Nama Sekolah <?php echo form_error('nama_sekolah') ?></label>
                <input type="text" class="form-control" name="nama_sekolah" id="nama_sekolah" placeholder="Nama Sekolah" value="<?php echo $nama_sekolah; ?>" />
            </div>
    	    <div class="form-group">
                <label for="varchar">Nama Kepsek <?php echo form_error('nama_kepsek') ?></label>
                <input type="text" class="form-control" name="nama_kepsek" id="nama_kepsek" placeholder="Nama Kepsek" value="<?php echo $nama_kepsek; ?>" />
            </div>
    	    <div class="form-group">
                <label for="alamat_sekolah">Alamat Sekolah <?php echo form_error('alamat_sekolah') ?></label>
                <textarea class="form-control" rows="3" name="alamat_sekolah" id="alamat_sekolah" placeholder="Alamat Sekolah"><?php echo $alamat_sekolah; ?></textarea>
            </div>
    	    <div class="form-group">
                <label for="visi">Visi <?php echo form_error('visi') ?></label>
                <textarea class="form-control" rows="3" name="visi" id="visi" placeholder="Visi"><?php echo $visi; ?></textarea>
            </div>
    	    <div class="form-group">
                <label for="misi">Misi <?php echo form_error('misi') ?></label>
                <textarea class="form-control" rows="3" name="misi" id="misi" placeholder="Misi"><?php echo $misi; ?></textarea>
            </div>
    	    <div class="form-group">
                <label for="varchar">No Telpon <?php echo form_error('no_telpon') ?></label>
                <input type="text" class="form-control" name="no_telpon" id="no_telpon" placeholder="No Telpon" value="<?php echo $no_telpon; ?>" />
            </div>
    	    <input type="hidden" name="id_sekolah" value="<?php echo $id_sekolah; ?>" /> 
    	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
    	    <a href="<?php echo site_url('sekolah') ?>" class="btn btn-default">Cancel</a>
	   </form>
