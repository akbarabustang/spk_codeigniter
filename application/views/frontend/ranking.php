<div class="jarallax w3ls-services agile-section" id="services">
	<div class="container">
		<h3 class="hdg agileits-title" style="color: orange; text-align: center;" id="h3.-bootstrap-heading">Status Ranking Sekolah Unggulan</h3>
		<div class="w3-agileits-service-grids">
			<div class="table-responsive">
				<table class="table table-bordered">
					<thead>
						<th width="20">Peringkat</th>
						<th>Nama Sekolah</th>
						<th>Alamat</th>
						<th>Status</th>
					</thead>
					<tbody>
					<?php 
					$no = 1;
					foreach ($data as $d) {
					 ?>
					 <tr>
					 	<td><?php echo $no++ ?></td>
					 	<td><?php echo $d->nama_sekolah ?> <?php echo anchor('Frontend/detail?sekolah='.$d->id_sekolah, '<span>Detail</span>', array('class'=>'label label-success')); ?></td>
					 	<td><?php echo $d->alamat_sekolah ?></td>
					 	<td><?php echo $d->status ?></td>
					 </tr>
					 <?php } ?>
					</tbody>
				</table>
			</div>
				
			<div class="clearfix"> </div>
		</div>
	</div>
</div>	
<!-- contact -->
<div class="jarallax agileits-contact agile-section" id="contact">
	<div class="container">
		<h3 class="agileits-title" style="color: orange;">Kontak Kami</h3>
		<div class="w3agile-contact">
			<div class="col-md-5 col-sm-5 col-xs-6 w3_agileits-contact-left">
				<div class="wthree-address">
					<div class="col-md-2 col-sm-1 col-xs-1 agile-icon">
						<span class="fa fa-map-signs" aria-hidden="true"></span>
					</div>
					<div class="col-md-10 col-sm-11 col-xs-11 w3_agile-contact-text">
						<h5>Alamat</h5>
						<p>Jl.Adiyaksa Baru, Kota Makassar.</p>
					</div>
					<div class="clearfix"></div>
				</div>	
				<div class="wthree-address">
					<div class="col-md-2 col-sm-1 col-xs-1 agile-icon">
						<span class="fa fa-phone" aria-hidden="true"></span>
					</div>	
					<div class="col-md-10 col-sm-11 col-xs-11 w3_agile-contact-text">
						<h5>telepon</h5>
						<p>082394315392</p>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="wthree-address">
					<div class="col-md-2 col-sm-1 col-xs-1 agile-icon">
							<span class="fa fa-envelope" aria-hidden="true"></span>
					</div>	
					<div class="col-md-10 col-sm-11 col-xs-11  w3_agile-contact-text">
						<h5>email</h5>
						<a href="mailto:akbar_abustang@ymail.com">akbar_abustang@ymail.com</a>
					</div>
					<div class="clearfix"></div>
				</div>		
				<div class="clearfix"></div>
			</div>
			<div class="col-md-7 col-sm-7 col-xs-6 contact-right-w3l">
				<form action="#" method="post">
					<input type="text" class="name" name="name" placeholder="Nama Depan" required="">
					<input type="text" class="name" name="name" placeholder="Nama Belakang" required="">
					<input type="email" class="name" name="name" placeholder="Email" required="">
					<input type="text" class="name" name="name" placeholder="Subject" required="">
					<textarea placeholder="Pesan Anda" required=""></textarea>
					<input type="submit" value="Kirim Pesan">
				</form>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>	
</div>
<!-- //contact -->