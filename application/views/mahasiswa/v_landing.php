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
		<style>
			.wabutton{
			position:fixed;
			bottom:0px;
			left:20px;
			z-index:100;
			}
		</style>
	</head>
	<body class="loading-overlay-showing" data-plugin-page-transition data-loading-overlay data-plugin-options="{'hideDelay': 500}">
		<div class="loading-overlay">
			<div class="bounce-loader">
				<div class="bounce1"></div>
				<div class="bounce2"></div>
				<div class="bounce3"></div>
			</div>
		</div>
	<body class="one-page" data-target="#header" data-spy="scroll" data-offset="100">

		<div class="body">

			<header id="header" class="header-transparent header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
				<div class="header-body border-top-0 bg-dark box-shadow-none">
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-row">
									<div class="header-logo">
										<a href="#">
											<img alt="Porto" width="95" height="40" src="<?= base_url()?>assets/image/logo-integra-white.png">
										</a>
									</div>
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row">
									<div class="header-nav header-nav-links header-nav-dropdowns-dark header-nav-light-text order-2 order-lg-1">
										<div class="header-nav-main header-nav-main-mobile-dark header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
											<nav class="collapse">
												<ul class="nav nav-pills" id="mainNav">
													<li class="dropdown">
														<a data-hash class="dropdown-item dropdown-toggle active" href="#home">
															Beranda
														</a>
													</li>
													<li>
														<a class="dropdown-item" data-hash data-hash-offset="68" href="#services">Tentang</a>
													</li>
													<li>
														<a class="dropdown-item" data-hash data-hash-offset="68" href="#daftar">Daftar</a>
													</li>
													<li>
														<a class="dropdown-item" data-hash data-hash-offset="68" href="#clients">Clients</a>
													</li>
													<li>
													<a class="dropdown-item" data-hash data-hash-offset="68" href="#contact">Kontak</a>
													</li>
													<li>
													<a class="dropdown-item" data-hash data-hash-offset="68" href="<?= base_url()?>Faq">Faq</a>
													</li>
												</ul>
											</nav>
									</div>
									<div class="header-nav-features header-nav-features-no-border header-nav-features-lg-show-border order-1 order-lg-2 ">
										<div class="header-nav-feature header-nav-features-user d-inline-flex mx-2 pr-2 signin" id="headerAccount">
											<a href="#" class="header-nav-features-toggle text-color-light">
												<i class="far fa-user text-color-light"></i> Sign In
											</a>
											<div class="header-nav-features-dropdown header-nav-features-dropdown-mobile-fixed header-nav-features-dropdown-force-right" id="headerTopUserDropdown">
												<div class="signin-form">
													<h5 class="text-uppercase mb-4 font-weight-bold text-3">Sign In</h5>
													<form class="login100-form validate-form" method="POST" action="<?= base_url()?>Login/proses_login">
														<div class="form-group validate-input" data-validate = "Valid email is: a@b.c">

															<label class="mb-1 text-2 opacity-8">Masukkan Email Anda*</label>
															<input type="email"  name="email_magang" class="form-control form-control-lg " required="true">

														</div>
														<div class="form-group validate-input" data-validate="Enter password">
															<label class="mb-1 text-2 opacity-8">Masukkan Password Anda*</label>
															<input type="password"  name="password"class="form-control form-control-lg" required="true">
														</div>
														<div class="form-row pb-2">
															<div class="form-group form-check col-lg-6 pl-1">
																<div class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" id="rememberMeCheck">
																	<label class="custom-control-label text-2" for="rememberMeCheck">Remember Me</label>
																</div>
															</div>

														</div>

															<div class="form-row">
																<div class="col d-flex justify-content-end">
																	<button class="btn btn-primary" type="submit" name="masuk">
																	Login
																	</button>
																</div>
															</div>
														</form>
													</div>
														<div class="extra-actions">
															<p>Belum punya akun ?  <a href="<?php echo base_url("daftar") ?>"  class="text-uppercase text-1 font-weight-bold text-color-dark">Daftar Sekarang</a></p>
														</div>
															<?php
                            						    $pesan = $this->session->flashdata('pesan');
                            						    if($pesan != NULL){
                            					        echo ' <div class="alert alert-danger">'.$pesan.'</div>';
                            						    }

                           								 ?>
                          								 <?= $this->session->flashdata('pesan_login');?>
												</div>
											</div>


										</header>



			<div role="main" class="main" id="home">
				<div class="slider-container rev_slider_wrapper" style="height: 100vh;">
					<div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'sliderLayout': 'fullscreen', 'delay': 9000, 'gridwidth': 1140, 'gridheight': 800, 'responsiveLevels': [4096,1200,992,500]}">
						<ul>
							<li class="slide-overlay" data-transition="fade">
								<img src="<?= base_url()?>assets2/img/slides/slide-1.jpg"
									alt=""
									data-bgposition="center center"
									data-bgfit="cover"
									data-bgrepeat="no-repeat"
									class="rev-slidebg">

								<div class="tp-caption"
									data-x="center" data-hoffset="['-190','-60','-1060','1060']"
									data-y="center" data-voffset="['-50','-50','-50','-75']"
									data-start="1000"
									data-transform_in="x:[-300%];opacity:0;s:500;"
									data-transform_idle="opacity:0.2;s:500;"><img src="<?= base_url()?>assets2/img/slides/slide-title-border.png" alt=""></div>

								<div class="tp-caption text-color-light font-weight-normal"
									data-x="center"
									data-y="center" data-voffset="['-50','-50','-50','-75']"
									data-start="700"
									data-fontsize="['16','16','16','40']"
									data-lineheight="['25','25','25','45']"
									data-transform_in="y:[-50%];opacity:0;s:500;">IT CONSULTANT & SOFTWARE DEVELOPER</div>

								<div class="tp-caption"
									data-x="center" data-hoffset="['190','170','170','450']"
									data-y="center" data-voffset="['-50','-50','-50','-75']"
									data-start="1000"
									data-transform_in="x:[300%];opacity:0;s:500;"
									data-transform_idle="opacity:0.2;s:500;"><img src="<?= base_url()?>assets2/img/slides/slide-title-border.png" alt=""></div>

								<div class="tp-caption font-weight-extra-bold text-color-light negative-ls-1"
									data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
									data-x="center"
									data-y="center"
									data-fontsize="['40','50','50','70']"
									data-lineheight="['45','55','55','95']">INTEGRA INOVASI INDONESIA</div>

								<div class="tp-caption font-weight-light ws-normal text-center"
									data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2000,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
									data-x="center"
									data-y="center" data-voffset="['90','65','90','109']"
									data-width="['550','550','550','1100']"
									data-fontsize="['20','20','20','40']"
									data-lineheight="['28','28','28','60']"
									style="color: #b5b5b5;"> <strong class="text-color-light"></strong> Memilih Integra Inovasi Indonesia menjadi partner Anda merupakan sebuah pilihan yang tepat, Karena bersama kami kebutuhan anda akan mudah kita Implementasikan.</div>

							</li>
							<li class="slide-overlay slide-overlay-dark" data-transition="fade">
								<img src="<?= base_url()?>assets2/img/slides/slide-2.jpg"
									alt=""
									data-bgposition="center center"
									data-bgfit="cover"
									data-bgrepeat="no-repeat"
									class="rev-slidebg">

								<div class="tp-caption text-color-light font-weight-normal"
                                    data-x="center"
									data-y="center" data-voffset="['-60','-50','-50','-75']"
									data-start="700"
									data-fontsize="['50','40','40','80']"
									data-lineheight="['30','25','25','45']"
									data-transform_in="y:[-40%];opacity:0;s:500;">INTEGRA INOVASI INDONESIA</div>

								<div class="tp-caption font-weight-light text-color-light"
									data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2300,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
									data-x="center"
									data-y="center" data-voffset="['8','8','8','140']"
									data-fontsize="['18','18','18','40']"
									data-lineheight="['1','1','1','3']">We Never Stop Innovating</div>

							</li>
						</ul>
					</div>
				</div>
				<section id="services" class="section section-height-3 bg-primary border-0 m-0 appear-animation" data-appear-animation="fadeIn">
					<div class="container my-3">
						<div class="row mb-5">
							<div class="col text-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
								<h2 class="font-weight-bold text-color-light mb-2">BIDANG</h2>
								<p class="text-color-light opacity-7"> Bidang - bidang magang yang terdapat pada PT Integra Inovasi Indonesia Yogyakarta.</p>
							</div>
						</div>
						<div class="row mb-lg-4">
							<div class="col-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
								<div class="feature-box feature-box-style-2">
									<div class="feature-box-icon">
                                    </div>
									<div class="feature-box-info text-center">
                                    <img src="<?= base_url()?>assets2/img/icons/programming.png" alt="">
										<h4 class="font-weight-bold text-color-light text-4 mb-2 text-center">WEB DEVELOPMENT</h4>
										<p class="text-color-light opacity-7 text-center">Pengembangan website untuk profil instansi / perusahaan, e-commerce, online shop, dan portal web</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 appear-animation" data-appear-animation="fadeInUpShorter">
								<div class="feature-box feature-box-style-2">
									<div class="feature-box-icon">

									</div>
									<div class="feature-box-info text-center">
                                    <img src="<?= base_url()?>assets2/img/icons/smartphone.png" alt="">
										<h4 class="font-weight-bold text-color-light text-4 mb-2">MOBILE APPLICATION</h4>
										<p class="text-color-light opacity-7">Pengembangan layanan dengan menggunakan teknologi mobile antara lain SMS Broadcast, VASMS 5 Digit (SMS Premium), dan Mobile Application</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 appear-animation" data-appear-animation="fadeInUpShorter">
								<div class="feature-box feature-box-style-2">
									<div class="feature-box-icon">

									</div>
									<div class="feature-box-info text-center">
                                    <img src="<?= base_url()?>assets2/img/icons/video-player.png" alt="">
										<h4 class="font-weight-bold text-color-light text-4 mb-2">MULTIMEDIA</h4>
										<p class="text-color-light opacity-7">Pengolahan media digital, grafis, video, animasi, dan sebagainya</p>
									</div>
								</div>
							</div>

							<div class="col-lg-4 appear-animation" data-appear-animation="fadeInUpShorter">
								<div class="feature-box feature-box-style-2">
									<div class="feature-box-icon">

									</div>
									<div class="feature-box-info text-center">
                                    <img src="<?= base_url()?>assets2/img/icons/e-goverment.png" alt="">
										<h4 class="font-weight-bold text-color-light text-4 mb-2">E-GOVERMENT</h4>
										<p class="text-color-light opacity-7">Produk sistem informasi untuk pemerintahan (e-government solution) dalam rangka meningkatkan kinerja instansi pemerintahan dan pelayanan kepada masyarakat</p>
									</div>
								</div>
							</div>

							<div class="col-lg-4 appear-animation" data-appear-animation="fadeInUpShorter">
								<div class="feature-box feature-box-style-2">
									<div class="feature-box-icon">

									</div>
									<div class="feature-box-info text-center">
                                    <img src="<?= base_url()?>assets2/img/icons/network.png" alt="">
										<h4 class="font-weight-bold text-color-light text-4 mb-2">INFORMATION SYSTEM</h4>
										<p class="text-color-light opacity-7">Pengembangan Sistem Informasi untuk berbagai keperluan pengelolaan data, reporting, dashboard executive, decision support system, mapping / GIS. dll untuk diterapkan dalam dunia pemerintahan, pendidikan, perusahaan</p>
									</div>
								</div>
							</div>

							<div class="col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
								<div class="feature-box feature-box-style-2">
									<div class="feature-box-icon">

									</div>
									<div class="feature-box-info text-center">
                                    <img src="<?= base_url()?>assets2/img/icons/ux.png" alt="">
										<h4 class="font-weight-bold text-color-light text-4 mb-2">UI/UX</h4>
										<p class="text-color-light opacity-7">Pengembangan dibidang Design Graphic pada ui / ux.</p>
									</div>
								</div>
							</div>
						</div>
						</div>
					</div>
				</section>

				<br>
				<div class="col text-center" id="daftar">
								<h2 class="font-weight-bold text-color-dark mb-2">REGISTRASI</h2>
								<p class="text-color-dark opacity-7">PT INTEGRA INOVASI INDONESIA</p>
							</div>

					<div class="row justify-content-center mt-2" >


					<div class="card" style="width: 25rem; margin-right: 5%; margin-left: 5%;" >
	  					<img src="<?= base_url()?>assets2/img/icons/lowongan.jpg" alt="" class="card-img-top" >
		  				<div class="card-body">
		  					  <h5 class="card-title">LOWONGAN PEKERJAAN</h5>
			  				  <p class="card-text">Daftar pekerjaan PT Integra Inovasi Indonesia. Siapkan dokumen data diri , surat lamaran pekerjaan dan CV. Daftar Sekarang.</p>
			  				  <a href="#" class="btn btn-primary">DAFTAR PEKERJAAN</a>
		  				</div>
					</div>
					<div class="card" style="width: 25rem;  margin-left: 5%;margin-right: 5%;">
		  				<img src="<?= base_url()?>assets2/img/icons/magang.png" class="card-img-top" alt="width: 10%;">
		  				<div class="card-body">
		  					  <h5 class="card-title">DAFTAR MAGANG</h5>
			  				  <p class="card-text">Daftar magang Integra Inovasi Indonesia. Siapkan dokumen data diri , surat pengajuan magang dan CV. Daftar Sekarang. </p>
			  				  <a href="<?php echo base_url("daftar") ?>" class="btn btn-primary">DAFTAR MAGANG</a>
		  				</div>
					</div>
				</div>
				</div>

										<div class="modal fade" id="modal_anggota" role="dialog">
											<div class="modal-dialog modal-lg" role="document">
  											  <div class="modal-content">
     											 <div class="modal-header text-center bg-primary">
												  <h4 class="modal-title w-100 font-weight-bold text-color-light">PT INTEGRA INOVASI INDONESIA</h4>
												  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          											<span aria-hidden="true">&times;</span>
       											 </button>
											</div>
										<div class="modal-body">
										<div class="normal-table-list mg-t-30">
                        					<div class="basic-tb-hd text-center" >
                          					  <h4 >Data Anggota magang</h4>
											</div>
											<div class="row">
												<div class="col-md-6">
													<form>
														<div class="form-group">
		    											<label for="exampleFormControlSelect1">Tahun</label>
			    											<select class="form-control" id="tahun" name="tahun" onchange="cari()">
			    												<option value="">Please Select</option>
			      												 <?php
													                $thn_skr = date('Y');
													                for ($x = $thn_skr; $x <= 2024; $x++) {
													                ?>
													                    <option value="<?php echo $x ?>"><?php echo $x ?></option>
													                <?php
													                }
													                ?>
			    											</select>
			  											</div>
													</form>
												</div>
											</div>
             							</div>


                       					 <div class="bsc-tbl-st">
											<div class="row">
												<div class="table-responsive">
													<table class="table table-bordered table-striped">
														<thead>
															<tr>
																<th>Bulan</th>
																<th>Nama Peserta</th>
																<th>Kampus/Sekolah</th>
															</tr>
														</thead>
														<tbody id="tampil_anggota">

														</tbody>
												</table>
												</div>
											</div>
		                          		<br>
                           		 </div>
                   					 </div>
										</div>
										</div>
									</div>

								</div>

							</div>
							<br>
							<div class="text-center">
  							<a href="" class="btn btn-primary btn-rounded mb-4" data-toggle="modal" data-target="#modal_anggota">
   							 DATA PESERTA MAGANG YANG DITERIMA</a>
							</div>
						</div>


				<br>
				<section id="clients" class="section section-background section-height-4 overlay overlay-show overlay-op-9 border-0 m-0" style="background-image: url(<?= base_url()?>assets2/img/slides/	bg-client.jpg); background-size: cover; background-position: center;">
					<div class="container">
						<div class="row">
							<div class="col text-center">
								<h2 class="font-weight-bold text-color-light mb-2">Sekolah dan Perguruan Tinggi yang Pernah Magang</h2>
								<p class="text-color-light opacity-7">PT INTEGRA INOVASI INDONESIA</p>
							</div>
						</div>
						<div class="row text-center py-3 my-4">
							<div class="owl-carousel owl-theme carousel-center-active-item carousel-center-active-item-style-2 mb-0" data-plugin-options="{'responsive': {'0': {'items': 1}, '476': {'items': 1}, '768': {'items': 5}, '992': {'items': 7}, '1200': {'items': 7}}, 'autoplay': true, 'autoplayTimeout': 3000, 'dots': false}">
								<div>
									<img class="img-fluid" src="<?= base_url()?>assets2/img/logos/ugm.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="<?= base_url()?>assets2/img/logos/uny.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="<?= base_url()?>assets2/img/logos/telkom.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="<?= base_url()?>assets2/img/logos/idn.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="<?= base_url()?>assets2/img/logos/amikom1.png" alt="">
								</div>


							</div>
						</div>
						<div class="row">
							<div class="col">

								<div class="owl-carousel owl-theme nav-bottom rounded-nav mb-0" data-plugin-options="{'items': 1, 'loop': true, 'autoHeight': true}">
									<div>
										<div class="testimonial testimonial-style-2 testimonial-light testimonial-with-quotes testimonial-quotes-primary mb-0">
											<blockquote>
												<p class="text-5 line-height-5 mb-0">Mampu memberikan pembelajaran terbaik serta membentuk pola pikir mahasiswa/mahasiswi untuk menjadi pribadi yang kreatif, inovatif dan kerja sama yang baik.</p>
											</blockquote>
											<div class="testimonial-author">
												<p><strong class="font-weight-extra-bold text-2">- INTEGRA</strong></p>
											</div>
										</div>
									</div>
									</div>
								</div>

							</div>

						</div>
					</div>
				</section>





				<section id="contact" class="section bg-color-grey-scale-1 border-0 py-0 m-0">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-6">

								<!-- Google Maps - Settings on footer -->

								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.002196710974!2d110.35187851402735!3d-7.789590394386394!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5818addd2185%3A0x52df8a7945064334!2sPT.+Integra+Inovasi+Indonesia!5e0!3m2!1sen!2sid!4v1565767357907!5m2!1sen!2sid" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>

							</div>
							<div class="col-md-6 p-5 my-5">

								<div class="px-4">
									<h2 class="font-weight-bold line-height-1 mb-2">KONTAK</h2>

									<p class="text-3 mb-4">PT INTEGRA INOVASI INDONESIA memberikan kesempatan magang pada pelajar dan mahasiswa di seluruh Indonesia pada bidang Pengembangan Teknologi Informasi. Informasi lebih lanjut silahkan menghubungi kami melalui : </p>
									 <img src="<?= base_url()?>assets2/img/icons/map.png" alt="">
								<span class="text-3 mb-4">ALAMAT : Cokro Square, Jl. HOS Cokroaminoto No.124, Tegalrejo, Yogyakarta</span>
								<p></p>
								<img src="<?= base_url()?>assets2/img/icons/phone.png" alt="">
								<span class="text-3 mb-4">HUBUNGI: 0274 5304851 , HP/SMS/WA. 085643940881</span>
								<p></p>
								<img src="<?= base_url()?>assets2/img/icons/mail.png" alt="">
								<span class="text-3 mb-4"> Email :info@integraindonesia.co.id</span>
								</div>
							</div>
						</div>
					</div>
				</section>



			<footer id="footer" class="mt-0">
				<div class="footer-copyright">
					<div class="container py-2">
						<div class="row py-4">
							<div class="col d-flex align-items-center justify-content-center">
								<p><strong>PT INTEGRA INOVASI INDONESIA</strong> - © Copyright 2019. All Rights Reserved.</p>
								<br>
								<p>IT Consultant | Software & Web Developer | Mobile Apps Solution | Network & Hardware | IT Training</p>
							</div>
						</div>
					</div>
				</div>
			</footer>

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

		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-12345678-1', 'auto');
			ga('send', 'pageview');
		</script>
		 -->


		<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
		<script type="text/javascript">

			//cari anggota magang
			function cari()
			{
				$.getJSON("<?= base_url()?>Welcome/cari/"+$("#tahun").val(),function(data){
				var datanya='';
				var bulan = ['Januari', 'Februari', 'Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'];
				var xbulan = '';
				var bulan1 = '';
				var count = 0;
				var i = '';
				// print_r(data);
				//console.log(data);
				$.each(data,function(key,dt){
					xbulan = dt['bulan']-1;
					bulan1 = bulan[xbulan];
					count = 0;
					for(var i = 0; i < dt.length; ++i){
						console.log(data[i]);
					    if(data[i]['bulan'] == dt['bulan'])
					        count++;
					}
					if (count == 0)
					{
						count=1;
					}
						datanya+=
						'<tr>'+
							'<td rowspan="'+count+'">'+bulan1+'</td>'+
							'<td>'+dt['nama_magang']+'</td>'+
							'<td>'+dt['kampus_magang']+'</td>'+
						'</tr>'

				});
				$('#tampil_anggota').html(datanya);
			});
			}
		</script>

		<a href="https://api.whatsapp.com/send?phone=6285643940881&text=Assalamualaikum... Saya ingin menanyakan perihal magang di PT. Integra Inovasi Indonesia" class="btn btn-success btn-rounded mb-4 wabutton" target="_blank" style="font-size: 16px;">
			<i class="fab fa-whatsapp"></i> Hubungi Kami !
		</a>



	</body>
</html>
