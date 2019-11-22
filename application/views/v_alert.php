<!DOCTYPE html>
<html>
<head>
	<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>Integra Inovasi Indonesia</title>	

		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="Porto - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Favicon -->
		<link rel="shortcut icon" href="<?= base_url()?>assets2/img/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="<?= base_url()?>assets2/img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light%7CPlayfair+Display:400" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="<?= base_url()?>assets2/vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?= base_url()?>assets2/vendor/fontawesome-free/css/all.min.css">
		<link rel="stylesheet" href="<?= base_url()?>assets2/vendor/animate/animate.min.css">
		<link rel="stylesheet" href="<?= base_url()?>assets2/vendor/simple-line-icons/css/simple-line-icons.min.css">
		<link rel="stylesheet" href="<?= base_url()?>assets2/vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="<?= base_url()?>assets2/vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="<?= base_url()?>assets2/vendor/magnific-popup/magnific-popup.min.css">

		<!-- Theme CSS -->
		
		<link rel="stylesheet" href="<?= base_url()?>assets2/css/theme.css">
		<link rel="stylesheet" href="<?= base_url()?>assets2/css/theme-elements.css">
		<link rel="stylesheet" href="<?= base_url()?>assets2/css/theme-blog.css">
		<link rel="stylesheet" href="<?= base_url()?>assets2/css/theme-shop.css">

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="<?= base_url()?>assets2/vendor/rs-plugin/css/settings.css">
		<link rel="stylesheet" href="<?= base_url()?>assets2/vendor/rs-plugin/css/layers.css">
		<link rel="stylesheet" href="<?= base_url()?>assets2/vendor/rs-plugin/css/navigation.css">
		
	

		<!-- Skin CSS -->
		<link rel="stylesheet" href="<?= base_url()?>assets2/css/skins/default.css"> 

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="<?= base_url()?>assets2/css/custom.css">

		<!-- Head Libs -->
		<script src="<?= base_url()?>assets2/vendor/modernizr/modernizr.min.js"></script>
		<script src="<?= base_url()?>assets2/vendor/jquery/jquery.min.js"></script>
</head>
<body>

	<div class="body">
		<section id="services" class="section section-height-3 bg-light border-0 m-0 appear-animation" data-appear-animation="fadeIn">
					<div class="container my-3">
						<div class="row">
							<div class="col text-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
								<?= $this->session->flashdata('pesan_login');?>
								<a href="<?= base_url()?>Welcome" class="btn btn-info">Beranda</a>
							</div>
						</div>
					</div>	
		</section>
	</div>

	<!-- Vendor -->
		<script src="<?= base_url()?>assets2/vendor/jquery.appear/jquery.appear.min.js"></script>
		<script src="<?= base_url()?>assets2/vendor/jquery.easing/jquery.easing.min.js"></script>
		<script src="<?= base_url()?>assets2/vendor/jquery.cookie/jquery.cookie.min.js"></script>
		<script src="<?= base_url()?>assets2/vendor/popper/umd/popper.min.js"></script>
		<script src="<?= base_url()?>assets2/vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="<?= base_url()?>assets2/vendor/common/common.min.js"></script>
		<script src="<?= base_url()?>assets2/vendor/jquery.validation/jquery.validate.min.js"></script>
		<script src="<?= base_url()?>assets2/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
		<script src="<?= base_url()?>assets2/vendor/jquery.gmap/jquery.gmap.min.js"></script>
		<script src="<?= base_url()?>assets2/vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
		<script src="<?= base_url()?>assets2/vendor/isotope/jquery.isotope.min.js"></script>
		<script src="<?= base_url()?>assets2/vendor/owl.carousel/owl.carousel.min.js"></script>
		<script src="<?= base_url()?>assets2/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script src="<?= base_url()?>assets2/vendor/vide/jquery.vide.min.js"></script>
		<script src="<?= base_url()?>assets2/vendor/vivus/vivus.min.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="<?= base_url()?>assets2/js/theme.js"></script>
		
		<!-- Current Page Vendor and Views -->
		<script src="<?= base_url()?>assets2/vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script src="<?= base_url()?>assets2/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
		<script src="<?= base_url()?>assets2/js/views/view.contact.js"></script>
		
		<!-- Theme Custom -->
		<script src="<?= base_url()?>assets2/js/custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="<?= base_url()?>assets2/js/theme.init.js"></script>

		<!-- Examples -->
		<script src="<?= base_url()?>assets2/js/examples/examples.portfolio.js"></script>
</body>
</html>