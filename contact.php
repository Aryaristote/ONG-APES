<?php 
	session_start();
	include "./config/database.php";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="header-1.css" />
	<link rel="stylesheet" href="stageForm.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="nicepagef5e5.css" media="screen">
	<title>Contact</title>

	<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto+Slab%3A100%2C300%2C400%2C700&amp;ver=2.1.7' type='text/css' media='all' />
	<link rel='stylesheet' href='wp-content/themes/incharity/css/bootstrap.mine7f3.css?ver=2.1.7' type='text/css' media='all' />
	<link rel='stylesheet' href='wp-content/themes/incharity/stylea4a0.css?ver=5.7.5' type='text/css'/>

	<script type='text/javascript' src='wp-includes/js/jquery/jquery.min9d52.js?ver=3.5.1'></script>
	<link rel="shortcut icon" type="image/png" href="wp-content/favIcons/android-icon-36x361.png">
	
	<style type='text/css'>
		.u-section-2 .u-container-layout-1 {
			padding: 30px;
		}

		.u-section-2 .u-icon-1 {
			height: 48px;
			width: 48px;
			margin: 0 auto;
		}

		.u-section-2 .u-text-2 {
			font-weight: 700;
			margin: 20px 0 0;
		}

		.u-section-2 .u-text-3 {
			margin: 19px 0 0;
		}

		.u-section-2 .u-layout-cell-2 {
			min-height: 240px;
		}

		.u-section-2 .u-container-layout-2 {
			padding: 30px;
		}

		.u-section-2 .u-icon-2 {
			height: 48px;
			width: 48px;
			margin: 0 auto;
		}

		.u-section-2 .u-text-4 {
			font-weight: 700;
			text-transform: uppercase;
			margin: 22px 0 0;
		}

		.u-section-2 .u-text-5 {
			margin: 19px 0 0;
		}

		.u-section-2 .u-layout-cell-3 {
			min-height: 240px;
		}

		.u-section-2 .u-container-layout-3 {
			padding: 30px;
		}

		.u-section-2 .u-icon-3 {
			height: 48px;
			width: 48px;
			margin: 0 auto;
		}

		.u-section-2 .u-text-6 {
			font-weight: 700;
			text-transform: uppercase;
			margin: 20px 0 0;
		}

		.u-section-2 .u-text-7 {
			margin: 19px 0 0;
		}

		.u-section-2 .u-layout-cell-4 {
			min-height: 240px;
		}

		.u-section-2 .u-container-layout-4 {
			padding: 30px;
		}

		.u-section-2 .u-icon-4 {
			height: 48px;
			width: 48px;
			margin: 0 auto;
		}

		.u-section-2 .u-text-8 {
			font-weight: 700;
			text-transform: uppercase;
			margin: 19px 0 0;
		}

		.u-section-2 .u-text-9 {
			margin: 20px 0 0;
		}

		.u-section-2 .u-layout-cell-5 {
			min-height: 322px;
		}

		.u-section-2 .u-container-layout-5 {
			padding: 30px;
		}

		.u-section-2 .u-text-10 {
			margin-top: 0;
			text-transform: uppercase;
			font-weight: 700;
			font-size: 1.5rem;
			margin-bottom: 0;
		}

		.u-section-2 .u-text-11 {
			font-weight: 300;
			margin: 20px 259px 0 0;
		}

		.u-section-2 .u-form-1 {
			margin: 30px auto 0 0;
		}

		.u-section-2 .u-btn-1 {
			background-image: none;
			border-style: solid;
		}

		.u-section-2 .u-layout-cell-6 {
			min-height: 322px;
		}

		.u-section-2 .u-container-layout-6 {
			padding: 30px;
		}

		.u-section-2 .u-text-12 {
			margin-top: 0;
			text-transform: uppercase;
			font-weight: 700;
			font-size: 1.5rem;
			margin-bottom: 0;
		}

		.u-section-2 .u-text-13 {
			font-weight: 300;
			text-transform: uppercase;
			margin: 20px 89px 0 0;
		}

		.u-section-2 .u-map-1 {
			width: 510px;
			height: 296px;
			margin: 30px 0 0;
		}

		@media (max-width: 1199px) {
			.u-section-2 .u-sheet-1 {
				min-height: 730px;
			}

			.u-section-2 .u-layout-wrap-1 {
				margin-right: initial;
				margin-left: initial;
			}

			.u-section-2 .u-layout-cell-1 {
				min-height: 198px;
			}

			.u-section-2 .u-layout-cell-2 {
				min-height: 198px;
			}

			.u-section-2 .u-layout-cell-3 {
				min-height: 198px;
			}

			.u-section-2 .u-layout-cell-4 {
				min-height: 198px;
			}

			.u-section-2 .u-layout-cell-5 {
				min-height: 266px;
			}

			.u-section-2 .u-text-11 {
				margin-right: 159px;
			}

			.u-section-2 .u-layout-cell-6 {
				min-height: 266px;
			}

			.u-section-2 .u-text-13 {
				margin-right: 0;
			}

			.u-section-2 .u-map-1 {
				width: 410px;
			}
		}

		@media (max-width: 991px) {
			.u-section-2 .u-sheet-1 {
				min-height: 566px;
			}

			.u-section-2 .u-layout-cell-1 {
				min-height: 100px;
			}

			.u-section-2 .u-layout-cell-2 {
				min-height: 100px;
			}

			.u-section-2 .u-layout-cell-3 {
				min-height: 100px;
			}

			.u-section-2 .u-layout-cell-4 {
				min-height: 100px;
			}

			.u-section-2 .u-layout-cell-5 {
				min-height: 100px;
			}

			.u-section-2 .u-text-11 {
				margin-right: 49px;
			}

			.u-section-2 .u-layout-cell-6 {
				min-height: 100px;
			}

			.u-section-2 .u-map-1 {
				width: 300px;
			}
		}

		@media (max-width: 767px) {
			.u-section-2 .u-sheet-1 {
				min-height: 766px;
			}

			.u-section-2 .u-container-layout-1 {
				padding-left: 10px;
				padding-right: 10px;
			}

			.u-section-2 .u-container-layout-2 {
				padding-left: 10px;
				padding-right: 10px;
			}

			.u-section-2 .u-container-layout-3 {
				padding-left: 10px;
				padding-right: 10px;
			}

			.u-section-2 .u-container-layout-4 {
				padding-left: 10px;
				padding-right: 10px;
			}

			.u-section-2 .u-container-layout-5 {
				padding-left: 10px;
				padding-right: 10px;
			}

			.u-section-2 .u-container-layout-6 {
				padding-left: 10px;
				padding-right: 10px;
			}
		}

		@media (max-width: 575px) {
			.u-section-2 .u-text-1 {
				font-size: 1.5rem;
				width: 340px;
			}

			.u-section-2 .u-text-11 {
				margin-right: 0;
			}
		}

		@keyframes infbg {
			50% {
				background: #53761f;
			}
		}


		@media screen and (max-width: 767px) {

			.iw-tabs.layout3 .iw-tab-items {
				background: #53761f;
			}

		}

		html body {
			font-family: Roboto Slab
		}

		.nav-menu {
			font-family: ABeeZee
		}

		html body {
			font-size: 12px
		}

		html body {
			line-height: 24px
		}

		.page-footer>*,
		.footer-right,
		.page-footer .container {
			background: #000000 !important
		}

		html body {
			color: #838383
		}
	</style>
</head>

<body id="page-top" class="page-template page-template-page-templates page-template-home-page page-template-page-templateshome-page-php page page-id-139 theme-incharity woocommerce-no-js wpb-js-composer js-comp-ver-6.3.0 vc_responsive">
	<div class="wrapper " style="background: #f9f9f9;">
		<?php
			$nav = 'contact';
			require "import/menu/menu.php"
		?>

		<section class="u-align-center u-clearfix u-grey-5 u-section-2" id="sec-c628">
			<div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
				<h2 class="u-text u-text-1" style="color: #838383;">RESTONS EN CONTACT</h2>
				<div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
					<div class="u-layout">
						<div class="u-layout-col">
							<div class="u-size-30">
								<div class="u-layout-row">
									<div class="u-size-30">
										<div class="u-layout-col">
											<div class="u-container-style u-layout-cell u-left-cell u-size-60 u-layout-cell-5">
												<div class="u-container-layout u-container-layout-5">
													<h2 class="u-text u-text-default u-text-10" style="color: #838383;">
														Fait entendre votre voix</h2>
													<h6 class="u-text u-text-11" style="color: #838383;font-weight: bold;">DISPONIBLE 24h / 24h</h6><br>
													<?php if(isset($_SESSION["success"])): ?>
														<div class="alert alert-success alert-dismissible">
															<button type="button" class="close" data-dismiss="alert">&times;</button>
															<?= $_SESSION["success"] ?>
														</div>
													<?php endif ?>
													<div class="u-form u-form-1">
														<form action="views/contactProcess.php" method="POST" id="contactForm" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" style="padding: 0;" source="email" name="form">
															<div class="u-form-group u-form-name">
																<label for="name-3d90" class="u-form-control-hidden u-label">Name</label>
																<input required="" type="text" required="" placeholder="Entrez votre nom" id="name-3d90" name="name" class="u-input u-input-rectangle u-white">
															</div>
															<div class="u-form-email u-form-group">
																<label for="email-3d90" class="u-form-control-hidden u-label">Email</label>
																<input type="email" placeholder="Entrez votre addresse mail" id="email-3d90" name="email" class="u-input u-input-rectangle u-white" required="">
															</div>
															<div class="u-form-group u-form-message">
																<label for="message-3d90" class="u-form-control-hidden u-label">Message</label>
																<textarea placeholder="Entrez votre message" rows="4" cols="50" id="message-3d90" name="message" class="u-input u-input-rectangle u-white" required=""></textarea>
															</div>
															<div class="u-align-left u-form-group u-form-submit">
																<button name="submit" type="submit" value="submit" class="stage-btn-submit stage-btn">Envoyez</button>
															</div>
															<div class="u-form-send-message u-form-send-success">
																Thank you! Your message has been sent.
															</div>
															<div class="u-form-send-error u-form-send-message">
																Unable to send your message. Please fix errors then try again.
															</div>
															<input type="hidden" value="" name="recaptchaResponse">
														</form>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="u-size-30">
										<div class="u-layout-col">
											<div class="u-container-style u-layout-cell u-right-cell u-size-60 u-layout-cell-6">
												<div class="u-container-layout u-container-layout-6">
													<h3 class="u-text u-text-default u-text-12" style="color: #838383;">
														Nous sommes ouvert de: </h3>
													<h6 class="u-text u-text-13" style="color: #838383;font-weight: bold;">Lundi-Samedi 8:30AM-
														17:00PM / Le telephone est ouvert 24/7</h6>
													<div class="u-grey-light-2 u-map u-map-1">
														<div class="embed-responsive">
															<iframe class="" src="https://maps.google.com/maps?q=Bukavu&t=&z=13&ie=UTF8&iwloc=&output=embed" data-map="JTdCJTIyYWRkcmVzcyUyMiUzQSUyMk1hbmhhdHRhbiUyQyUyME5ldyUyMFlvcmslMjIlMkMlMjJ6b29tJTIyJTNBMTAlMkMlMjJ0eXBlSWQlMjIlM0ElMjJyb2FkJTIyJTJDJTIybGFuZyUyMiUzQSUyMiUyMiU3RA=="></iframe>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="u-size-30">
								<div class="u-layout-row">
									<div class="u-align-center u-container-style u-layout-cell u-left-cell u-size-15 u-size-30-md u-layout-cell-1">
										<div class="u-container-layout u-valign-top u-container-layout-1">
											<span class="u-icon u-icon-circle u-text-grey-40 u-icon-1"></span>
											<h2 class="u-text u-text-2" style="color: #838383;">NOTRE BUREAU</h2>
											<p class="u-text u-text-3" style="color: #838383;">
												APES: 52, Avenue Saïo Ibanda Bukavu / Sud-Kivu
											</p>
										</div>
									</div>
									<div class="u-align-center u-container-style u-layout-cell u-size-15 u-size-30-md u-layout-cell-2">
										<div class="u-container-layout u-valign-top u-container-layout-2"><span class="u-icon u-icon-circle u-text-grey-40 u-icon-2"></span>
											<h2 class="u-text u-text-4" style="color: #838383;">PHONE & EMAIL</h2>
											<p class="u-text u-text-5" style="color: #838383;">
												+243 997 738 579<br>+243 853 210 640 <br>apesrdc@gmail.com
											</p>
										</div>
									</div>
									<div class="u-container-style u-layout-cell u-right-cell u-size-15 u-size-30-md u-layout-cell-4">
										<div class="u-container-layout u-valign-top u-container-layout-4">
											<span class="u-icon u-icon-circle u-text-grey-40 u-icon-4"></span>
											<h2 class="u-align-center u-text u-text-8" style="color: #838383;">N°Compte
												APES-Protection à Ecobank </h2>
											<p class="u-align-center u-text u-text-9" style="color: #838383;">
												0160403117602901, 0160403117602902</p>
										</div>
									</div>
									<div class="u-container-style u-layout-cell u-right-cell u-size-15 u-size-30-md u-layout-cell-4">
										<div class="u-container-layout u-valign-top u-container-layout-4">
											<span class="u-icon u-icon-circle u-text-grey-40 u-icon-4"></span>
											<h2 class="u-align-center u-text u-text-8" style="color: #838383;">Nos Offres d'emplois</h2><br>
											<div class="u-align-center u-form-group u-form-submit" style="font-size: 18px">
												<a href="jobs.php" type="submit" value="submit" class="stage-btn-submit">Trouvez un job</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<footer class="page-footer">
			<div class="iw-footer-v2-widget">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-3 footer-left">
							<div class="iw-footer-logo">
								<a href="index.html">
									<img alt="logo-widget" src="wp-content/uploads/revslider/slider-2/apeslogowhite.png" style="width: 200px;" />
								</a>
							</div>
							<div class="footer-text">
								Contribuer à la promotion de mécanismes d’autonomisation de la femme pour un
								développement communautaire durable des
								zones de déplacement et de retour .
							</div>
							<div class="footer_extra_links">
								<a href="about-us/index.html">Plus sur nous</a>
							</div>
						</div>
						<div class="col-md-9 col-sm-9 footer-right">
							<div class="iw-footer-widget">
								<div id="iw-sidebar-four" class="widget-area" role="complementary">
									<div id="latest_post_campaign-2" class="widget_latest_post_campaign widget-count-2 col-md-6 col-sm-6 col-xs-12">
										<div class="footer-post-campaign">
											<div class="footer-title">
												<h4>Suivez nous sur: </h4>
											</div>
											<ol>
												<li><i class="fa fa-youtube" style="font-size: 20px;color: white;padding-right: 10px;"></i>
													<a href="https://www.youtube.com"> YOUTUBE</a>
												</li>
												<li><i class="fa fa-facebook" style="font-size: 20px;color: white;padding-right: 10px;"></i>
													<a href="https://www.facebook.com"> FACEBOOK</a>
												</li>
												<li><i class="fa fa-instagram" style="font-size: 20px;color: white;padding-right: 10px;"></i>
													<a href="https://www.instagram.com"> INSTAGRAM</a>
												</li>
												<li><i class="fa fa-google-plus" style="font-size: 20px;color: white;padding-right: 10px;"></i>
													<a href="https://www.google.com"> GOOGLE +</a>
												</li>
												<li><i class="fa fa-wikipedia-w" style="font-size: 20px;color: white;padding-right: 10px;"></i>
													<a href="https://www.wikipedia.com"> WIKIPEDIA</a>
												</li>
											</ol>
										</div>
									</div>
									<div id="shortcode-widget-6" class="shortcode_widget widget-count-2 col-md-6 col-sm-6 col-xs-12">
										<div class="footer-title">
											<h4>Nous contacter</h4>
										</div>
										<div class="textwidget">
											<ul style="color: rgb(209, 204, 204)">
												<li>
													<h5>APES: 52, Avenue Saïo Ibanda Bukavu <br>/ Sud-Kivu</h5>
												</li><br>
												<li>
													<h5>+243 997 738 579</h5>
												</li>
												<li>
													<h5>+243 853 210 640</h5>
												</li>
												<li>
													<h5><b>Email: </b>apesrdc@gmail.com</h5>
												</li>
											</ul>
											<div class="iw-contact iw-contact-widget">
												<div class="ajax-overlay">
													<span class="ajax-loading">
														<i class="fa fa-spinner fa-spin fa-2x"></i>
													</span>
												</div>
												<div class="headding-bottom"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="iw-footer-v2-copyright">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<p>Copyright APES/RD Congo 2022 ©</a>. All rights reserved.
							</p>
						</div>
						<div class="col-md-6 col-sm-6 back-to-top-container">
							<nav class="iw-main-nav">
								<ul id="menu-footer-menu" class="menu">
									<li id="menu-item-476" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-476"><a href="index.php">Acceuil</a></li>
									<li id="menu-item-475" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-475"><a href="projects.php">Nos Projets</a></li>
									<li id="menu-item-476" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-476"><a href="jobs.php">Offres d'emplois</a></li>
									<li id="menu-item-477" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-477"><a href="article.php">Actualités</a></li>
									<li id="menu-item-479" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-479"><a href="team.php">Equipe</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
				<div class="back-to-top">
					<a href="#page-top" title="Back to top" class="button-effect3">
						<i class="fa fa-arrow-up" style="font-size: 20px;"></i>
					</a>
				</div>
			</div>
		</footer>
	</div>

	<?php
		$pageWasRefreshed = isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0';
		if($pageWasRefreshed && isset($_SESSION['success'])) {
			unset ($_SESSION['success']);
		} else {
		//do nothing;
		}
	?>

</body>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.min.js"></script>																								
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.bundle.min.js"></script>																								
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.esm.min.js"></script>		
	

	<!-- Developed by: Ary aristote -->
	<!-- Email: aryaristote@gmail.com -->
	<!-- Phone: (+243) 990 413 132 -->
	<!-- 2022 / Avril -->
	
	<script type='text/javascript' src='wp-content/themes/incharity/js/bootstrap.mine7f3.js?ver=2.1.7' id='bootstrap-js'></script>
</html>