

<!-- footer -->
<div class="agileits_w3layouts-footer">
	<div class="container">
		<div class="agileinfo-footer">
			<div class="col-md-6 col-sm-6 social-icons">
				<ul>
					<li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
					<li><a href="#" class="fa fa-twitter  icon-border twitter"> </a></li>
					<li><a href="#" class="fa fa-google-plus  icon-border googleplus"> </a></li>
				</ul>
			</div>
			<div class="col-md-6 col-sm-6 w3_agile-copyright text-center">
				<p>© 2017 Sekolah Unggulan. All rights reserved | Design by <a href="//w3layouts.com/">W3layouts</a></p>
			</div>
		</div>
	</div>
</div>
<!-- //footer -->
<script src="<?php echo base_url() ?>frontend/web/js/imagelightbox.js"></script>
<script>
$('a[data-imagelightbox="g"]').imageLightbox({
        activity: true,
        arrows: true,
        button: true,
        caption: true,
        navigation: true,
        overlay: true,
        quitOnDocClick: false,
        selector: 'a[data-imagelightbox="f"]'
    });
</script>
<!-- Banner-plugin -->
<script src="<?php echo base_url() ?>frontend/web/js/responsiveslides.min.js"></script>
<script>
// You can also use "$(window).load(function() {"
$(function () {
  // Slider
  $("#slider4").responsiveSlides({
	auto:true,
	pager: false,
	nav: true,
	speed: 500,
	namespace: "callbacks",
	before: function () {
	  $('.events').append("<li>before event fired.</li>");
	},
	after: function () {
	  $('.events').append("<li>after event fired.</li>");
	}
  });

});
</script>
<!-- //Banner-plugin -->
<script src="<?php echo base_url() ?>frontend/web/js/jarallax.js"></script>
<script src="<?php echo base_url() ?>frontend/web/js/SmoothScroll.min.js"></script>
<script type="text/javascript">
	/* init Jarallax */
	$('.jarallax').jarallax({
		speed: 0.5,
		imgWidth: 1366,
		imgHeight: 768
	})
</script>
<!-- here starts scrolling icon -->
		<script type="text/javascript">
			$(document).ready(function() {
				/*
					var defaults = {
					containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
					};
				*/
										
				$().UItoTop({ easingType: 'easeOutQuart' });
									
				});
		</script>
		
		<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="<?php echo base_url() ?>frontend/web/js/move-top.js"></script>
		<script type="text/javascript" src="<?php echo base_url() ?>frontend/web/js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
		<!-- /ends-smoth-scrolling -->
	<!-- //here ends scrolling icon -->

</body>
</html>