<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php 
$aktif = $this->uri->segment(2);
 ?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<title>Ranking Sekolah | rankingsekolah.com</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- css files -->
<link href="<?php echo base_url(); ?>frontend/web/css/bootstrap.css" rel="stylesheet"  media="all" />
<link href="<?php echo base_url(); ?>frontend/web/css/font-awesome.css" rel="stylesheet"  media="all" />
<link rel="stylesheet"  href="<?php echo base_url() ?>frontend/web/css/set2.css" />
<link href="<?php echo base_url(); ?>frontend/web/css/imagelightbox.css" rel="stylesheet" >
<link href="<?php echo base_url(); ?>frontend/web/css/style.css" rel="stylesheet"  media="all" />
<!-- /css files -->

<script src="<?php echo base_url() ?>frontend/web/js/jquery-1.11.1.min.js"></script>
<script src="<?php echo base_url() ?>frontend/web/js/bootstrap.js"></script>
</head>
<body>

<!-- navigation -->
<div class="navbar-wrapper">
    <div class="container-fluid">
		<nav class="navbar navbar-inverse navbar-static-top cl-effect-5">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- <a class="navbar-brand" href="<?php echo base_url() ?>"><h1>Ranking Sekolah</h1></a> -->
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li <?php if($aktif=="" ) echo 'class="active"';?> ><a href="<?php echo base_url() ?>"><span data-hover="Beranda">Beranda</span></a></li>
						<li <?php if($aktif=="tentang" ) echo 'class="active"';?> ><a href="about.html"><span data-hover="Tentang">Tentang</span></a><span class="line1">|</span></li>
						<li <?php if($aktif=="ranking" || $aktif=="detail" ) echo 'class="active"';?> ><a href="<?php echo base_url() ?>Frontend/ranking"><span data-hover="Ranking">Ranking</span></a><span class="line1">|</span></li>
						<li <?php if($aktif=="galeri" ) echo 'class="active"';?> ><a href="<?php echo base_url() ?>Frontend/galeri"><span data-hover="Galeri">Galeri</span></a><span class="line1">|</span></li>
						<li <?php if($aktif=="kontak" ) echo 'class="active"';?> ><a href="contact.html"><span data-hover="Kontak">Kontak</span></a><span class="line1">|</span></li>
					</ul>
				</div>
			</div>
        </nav>
	</div>
</div>	
<!-- //navigation -->
<!--//banner section starts here-->
    <!-- Slider  -->
    <div class="jarallax callbacks_container w3-layouts">
      <ul class="rslides callbacks callbacks1 agileits" id="slider4">
        <li id="callbacks1_s1" class="" style="float: none; position: absolute; opacity: 0; z-index: 1; display: list-item; transition: opacity 500ms ease-in-out;">
          <img src="<?php echo base_url() ?>frontend/web/images/header/header1.jpg" alt="home" />
          <div class="caption text-center"><h3>Mari Bersama Membangun Mutu Pendidikan</h3><p>Pendidikan bukan persiapan untuk hidup. Pendidikan adalah hidup itu sendiri (John Dewey)</p></div>
        </li>
		 <li id="callbacks1_s2" class="" style="float: none; position: absolute; opacity: 0; z-index: 1; display: list-item; transition: opacity 500ms ease-in-out;">
          <img src="<?php echo base_url() ?>frontend/web/images/header/header2.jpg" alt="home" />
          <div class="caption text-center"><h3>Mari Bersama Membangun Mutu Pendidikan</h3><p>Arah yang diberikan pendidikan untuk mengawali hidup seseorang akan menentukan masa depannya (Plato)</p></div>
        </li>
        <li id="callbacks1_s3" class="callbacks1_on" style="float: left; position: relative; opacity: 1; z-index: 2; display: list-item; transition: opacity 500ms ease-in-out;">
          <img src="<?php echo base_url() ?>frontend/web/images/header/header3.jpg" alt="home" />
          <div class="caption text-center"><h3>Mari Bersama Membangun Mutu Pendidikan</h3> <p>Seorang Guru menggandeng tangan, membuka pikiran, menyentuh hati, dan membentuk masa depan. Seorang Guru berpengaruh selamanya. Dia tidak pernah tahu kapan pengaruhnya berakhir (Henry Adam)</p></div>
        </li>
		<li id="callbacks1_s6" class="callbacks1_on" style="float: left; position: relative; opacity: 1; z-index: 2; display: list-item; transition: opacity 500ms ease-in-out;">
          <img src="<?php echo base_url() ?>frontend/web/images/header/header4.jpg" alt="home" />
          <div class="caption text-center"><h3>Mari Bersama Membangun Mutu Pendidikan</h3> <p> Salah satu tanda seorang pendidik yang hebat yakni mampu memimpin murid-murid menjelajahi tempat-tempat baru yang bahkan belum pernah didatangi sang pendidik itu sendiri (Thomas Groome)</p></div>
        </li>
      </ul>
	  		<a href="#" class="callbacks_nav callbacks1_nav prev">Previous</a><a href="#" class="callbacks_nav callbacks1_nav next">Next</a>
    </div>
     <!-- /Slider  -->
<!--//banner-->