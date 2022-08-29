<?php 
	include "./config/database.php";
?>


<!DOCTYPE html>
<html lang="fr">
	
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="header-1.css" />
<link rel='stylesheet' href='wp-content/plugins/js_composer/assets/css/js_composer.mina086.css?ver=6.3.0' type='text/css'/>
<title>Equipe</title>

<link rel='stylesheet' href='wp-content/plugins/iw_composer_addons/assets/css/iw-shortcodese7f3.css?ver=2.1.7' type='text/css'/>

<script type='text/javascript' src='wp-includes/js/jquery/jquery.min9d52.js?ver=3.5.1'></script>
<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto+Slab%3A100%2C300%2C400%2C700&amp;ver=2.1.7' type='text/css'/>
<link rel='stylesheet' href='wp-content/themes/incharity/css/bootstrap.mine7f3.css?ver=2.1.7' type='text/css'/>
<link rel='stylesheet' href='wp-content/themes/incharity/stylea4a0.css?ver=5.7.5' type='text/css'/>
<style type='text/css'>
	``a{
		color: #53761f;
	}
	.theme-color{
		color: #53761f!important;
	}
	.theme-color-force{
		color: #53761f!important;
	}
	.theme-color-hover:hover{
		color: #53761f!important;
	}
	.theme-bg-color{
		background-color:#53761f!important;
	}
	.theme-bg{
		background: none repeat scroll 0 0 #53761f!important;
	}
	.theme-bg-hover:hover{
		background: none repeat scroll 0 0 #53761f !important;
	}
	.theme-border-color{
		border-color: #53761f!important;
	}

	/** panel settings */
	.panel-tools .button-command.active,.reset-button button{
		border-color: #53761f;
		background-color:#53761f;
	}

	/*Theme color for campaign detail - duongca*/
	.sidebar-right .campaign-progress .circle {
		background-image: linear-gradient(to right, transparent 50%, #53761f 0px);
	}

	@keyframes infbg {
		50% { background: #53761f; }
	}


	@media screen and (max-width: 767px) {

	.iw-tabs.layout3 .iw-tab-items{
		background:#53761f;
	}

	}
	html body{
		font-family:Roboto Slab;
	}html body{}html body{line-height:24px}.page-footer > *,.footer-right, .page-footer .container{background:#000000!important}html body{color:#838383}.page-heading{height:420px;}.page-heading .iw-heading-title{padding-top:210px;}.page-heading{background-image:url(wp-content/uploads/2016/07/page-heading-bg.jpg)!important;background-repeat:no-repeat;}
</style>
<body id="page-top" class="archive post-type-archive post-type-archive-product theme-incharity woocommerce woocommerce-page woocommerce-no-js wpb-js-composer js-comp-ver-6.3.0 vc_responsive">
	<div class="wrapper " style="background: #f9f9f9;">
		<?php 
			$nav = 'team';
			require "import/menu/menu.php" 
		?>

		<div class="vc_row wpb_row vc_row-fluid theme-bg vc_custom_1451450048827" style="margin-top: -20px;margin-left:0;margin-right:0;background-size:100% auto">
			<div class="container">
				<div class="row">
					<div class="wpb_column vc_column_container vc_col-sm-12">
						<div class="vc_column-inner">
							<div class="wpb_wrapper">
								<div class="vc_row wpb_row vc_inner vc_row-fluid">
									<div class="wpb_column vc_column_container vc_col-sm-2">
										<div class="vc_column-inner">
											<div class="wpb_wrapper"></div>
										</div>
									</div>
									<div class="wpb_column vc_column_container vc_col-sm-8">
										<div class="vc_column-inner">
											<div class="wpb_wrapper">
												<div class="info-item  style5  center-text">
													<div class="icon">
														<i style="font-size:48px" class="fa fa-microphone"></i>
													</div>
													<div class="info-item-content">
														<h4 class="info-item-title">Notre chere equipe</h4>
														<div class="info-item-desc">Malheureusement nous pouvons pas afficher toute l’equipe derriere cette grande realisation.</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="wpb_column vc_column_container vc_col-sm-2">
										<div class="vc_column-inner">
											<div class="wpb_wrapper"></div>
										</div>
									</div>
								</div>
								<div class="vc_row wpb_row vc_inner vc_row-fluid">
									<div class="wpb_column vc_column_container vc_col-sm-3"></div>
									<div class="wpb_column vc_column_container vc_col-sm-3">
										<div class="vc_column-inner">
											<div class="wpb_wrapper">
												<div class="profile-box item item0  style4  center-text">
													<div class="profile-image">
														<img src="wp-content/uploads/revslider/slider-4/directeur-general.jpg" alt="sarah stone">
													</div>
													<div class="item-info-wrap profile-info-wrap">
														<div class="profile-info">
															<h3 class="name">Prof Dr. Deogratias MUNGUAKONKWA M.</h3>
															<h4 class="">Directeur Général de APES</h4>
															<div class="position"></div>
														</div>
														<div class="social-links">
															<a href="https://facebook.com/"><i class="fa fa-facebook"></i></a><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a><a href="https://plus.google.com/"><i class="fa fa-google-plus"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="wpb_column vc_column_container vc_col-sm-3">
										<div class="vc_column-inner">
											<div class="wpb_wrapper">
												<div class="profile-box item item1  style4  center-text">
													<div class="profile-image">
														<img src="wp-content/uploads/revslider/slider-4/coordonatrice.jpg" alt="Michale Tik">
													</div>
													<div class="item-info-wrap profile-info-wrap">
														<div class="profile-info">
															<h3 class="name">Esther BORA</h3>
															<h4 class="">Coordonnatrice des Programmes</h4>
															<div class="position"></div>
														</div>
														<div class="social-links">
															<a href="https://www.facebook.com/ester.bora.376"><i class="fa fa-facebook"></i></a><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a><a href="https://plus.google.com/"><i class="fa fa-google-plus"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="wpb_column vc_column_container vc_col-sm-3"></div>
								</div><br><br>
								<div class="vc_row wpb_row vc_inner vc_row-fluid">
									<div class="wpb_column vc_column_container vc_col-sm-4">
										<div class="vc_column-inner">
											<div class="wpb_wrapper">
												<div class="profile-box item item0  style4  center-text">
													<div class="profile-image">
														<img src="wp-content/uploads/revslider/slider-4/Assistante financière.jpg" alt="sarah stone">
													</div>
													<div class="item-info-wrap profile-info-wrap">
														<div class="profile-info">
															<h3 class="name">MIRIAM TOTO Gisèle</h3>
															<div class="position"></div>
															<div class="description">Assistante financière</div>
														</div>
														<div class="social-links">
															<a href="https://www.facebook.com/miriam.toto.1"><i class="fa fa-facebook"></i></a><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a><a href="https://plus.google.com/"><i class="fa fa-google-plus"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="wpb_column vc_column_container vc_col-sm-4">
										<div class="vc_column-inner">
											<div class="wpb_wrapper">
												<div class="profile-box item item2  style4  center-text">
													<div class="profile-image">
														<img src="wp-content/uploads/revslider/slider-4/member4.jpg" alt="Rodrigue Bwira">
													</div>
													<div class="item-info-wrap profile-info-wrap">
														<div class="profile-info">
															<h3 class="name">Rodrigue BWIRA</h3>
															<div class="position"></div>
															<div class="description">Assistant Financier</div>
														</div>
														<div class="social-links">
															<a href="https://www.facebook.com/rodrigue.bwira.3">
															<i class="fa fa-facebook"></i></a><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a><a href="https://plus.google.com/"><i class="fa fa-google-plus"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="wpb_column vc_column_container vc_col-sm-4">
										<div class="vc_column-inner">
											<div class="wpb_wrapper">
												<div class="profile-box item item3  style4  center-text">
													<div class="profile-image">
														<img src="wp-content/uploads/revslider/slider-4/caissiere-apes.jpg" alt="john doe">
													</div>
													<div class="item-info-wrap profile-info-wrap">
														<div class="profile-info">
															<h3 class="name">TUMUSIFU NGABO Justine</h3>
															<div class="position"></div>
															<div class="description">Caissières</div>
														</div>
														<div class="social-links"><a href="https://www.facebook.com/justine.tumusifung">
															<i class="fa fa-facebook"></i></a><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a><a href="https://plus.google.com/"><i class="fa fa-google-plus"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><br><br>
			</div>
		</div>

		<footer class="page-footer">
			<div class="iw-footer-v2-widget">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-3 footer-left">
							<div class="iw-footer-logo">
								<a href="index.html">
									<img alt="logo-widget" src="wp-content/uploads/revslider/slider-2/apeslogowhite.png" style="width: 200px;"/>
								</a>
							</div>
							<div class="footer-text">
								Contribuer  à  la promotion de mécanismes d’autonomisation de la femme pour un développement communautaire durable des 
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
												<li><h5>APES: 52, Avenue Saïo Ibanda Bukavu <br> / Sud-Kivu</h5></li><br>
												<li><h5>+243 997 738 579</h5></li>
												<li><h5>+243 853 210 640</h5></li>
												<li><h5><b>Email: </b>apesrdc@gmail.com</h5></li>
											</ul>
											<div class="iw-contact iw-contact-widget">
												<div class="ajax-overlay">
													<span class="ajax-loading"><i class="fa fa-spinner fa-spin fa-2x"></i></span>
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
									<li id="menu-item-479" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-479"><a href="contact.php">Contact</a></li>
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
</body>
</html>
