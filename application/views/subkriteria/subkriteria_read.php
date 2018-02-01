<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Subkriteria Read</h2>
        <table class="table">
	    <tr><td>Nama Subkriteria</td><td><?php echo $nama_subkriteria; ?></td></tr>
	    <tr><td>Id Kriteria</td><td><?php echo $id_kriteria; ?></td></tr>
	    <tr><td>Tipe</td><td><?php echo $tipe; ?></td></tr>
	    <tr><td>Nilai Minimum</td><td><?php echo $nilai_minimum; ?></td></tr>
	    <tr><td>Nilai Maksimum</td><td><?php echo $nilai_maksimum; ?></td></tr>
	    <tr><td>Op Min</td><td><?php echo $op_min; ?></td></tr>
	    <tr><td>Op Max</td><td><?php echo $op_max; ?></td></tr>
	    <tr><td>Id Nilai</td><td><?php echo $id_nilai; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('subkriteria') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>