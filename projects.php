<?php
	include "./config/database.php";

	$q = $db->query("SELECT * FROM project");
    
    if($q){
        $projects = $q->fetchAll(PDO::FETCH_OBJ);
    }else{
        var_dump("Fails, Did not get date from DB!");
        die();
    }
?>

<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="header-1.css" />
	<link rel="stylesheet" href="index_card.css" />
	<link rel="stylesheet" href="nicepage0648.css" media="screen">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Nos Projets</title>
	<style type="text/css">
		.cards-1 .wpb_wrapper .iwh-title{
			border-left: 4px solid #838383;
			padding-left: 10px;
		}

		img.wp-smiley,
		img.emoji {
			display: inline !important;
			border: none !important;
			box-shadow: none !important;
			height: 1em !important;
			width: 1em !important;
			margin: 0 .07em !important;
			vertical-align: -0.1em !important;
			background: none !important;
			padding: 0 !important;
		}

		.u-section-2 .u-sheet-1 {
			min-height: 777px;
		}

		.u-section-2 .u-layout-wrap-1 {
			margin-top: 60px;
			margin-bottom: -1px;
		}

		.u-section-2 .u-layout-cell-1 {
			min-height: 319px;
		}

		.u-section-2 .u-container-layout-1 {
			padding: 30px;
		}

		.u-section-2 .u-text-1 {
			font-size: 3.75rem;
			font-weight: 700;
			margin: 0 180px 0 0;
		}

		.u-section-2 .u-text-2 {
			text-transform: uppercase;
			letter-spacing: 2px;
			margin: 20px 65px 0 0;
		}

		.u-section-2 .u-text-3 {
			margin: 20px 0 0;
		}

		.u-section-2 .u-layout-cell-2 {
			min-height: 338px;
		}

		.u-section-2 .u-container-layout-2 {
			padding: 0;
		}

		.u-section-2 .u-group-1 {
			min-height: 322px;
			background-image: none;
			width: 396px;
			height: auto;
			margin: -15px -65px 0 auto;
		}

		.u-section-2 .u-container-layout-3 {
			padding: 20px;
		}

		.u-section-2 .u-text-4 {
			font-size: 3.75rem;
			font-weight: 700;
			width: 121px;
			text-align: center;
			margin: 0 auto;
		}

		.u-section-2 .u-text-5 {
			text-transform: uppercase;
			letter-spacing: 2px;
			width: 236px;
			text-align: center;
			margin: 20px auto 0;
		}

		.u-section-2 .u-text-6 {
			text-align: center;
			margin: 20px 0 0;
		}

		.u-section-2 .u-layout-cell-3 {
			min-height: 657px;
		}

		.u-section-2 .u-container-layout-4 {
			padding: 0;
		}

		.u-section-2 .u-image-1 {
			height: 400px;
			object-position: 50% 25.03%;
			margin-top: 0;
			margin-bottom: 0;
		}

		.u-section-2 .u-text-7 {
			font-weight: 700;
			width: 457px;
			margin: 48px auto 0;
		}

		@media (max-width: 1199px) {
			.u-section-2 .u-sheet-1 {
				min-height: 692px;
			}

			.u-section-2 .u-layout-wrap-1 {
				margin-bottom: 29px;
			}

			.u-section-2 .u-layout-cell-1 {
				min-height: 263px;
			}

			.u-section-2 .u-text-1 {
				margin-right: 117px;
			}

			.u-section-2 .u-text-2 {
				margin-right: 2px;
			}

			.u-section-2 .u-layout-cell-2 {
				min-height: 308px;
			}

			.u-section-2 .u-group-1 {
				min-height: 289px;
				width: 315px;
				margin-right: -47px;
				height: auto;
			}

			.u-section-2 .u-layout-cell-3 {
				min-height: 542px;
			}

			.u-section-2 .u-image-1 {
				height: 330px;
			}
		}

		@media (max-width: 991px) {
			.u-section-2 .u-sheet-1 {
				min-height: 381px;
			}

			.u-section-2 .u-layout-wrap-1 {
				margin-bottom: 60px;
			}

			.u-section-2 .u-layout-cell-1 {
				min-height: 100px;
			}

			.u-section-2 .u-text-1 {
				margin-right: 47px;
			}

			.u-section-2 .u-text-2 {
				margin-right: 0;
			}

			.u-section-2 .u-layout-cell-2 {
				min-height: 100px;
			}

			.u-section-2 .u-group-1 {
				width: 228px;
				margin-right: 0;
			}

			.u-section-2 .u-text-5 {
				width: 188px;
			}

			.u-section-2 .u-layout-cell-3 {
				min-height: 100px;
			}

			.u-section-2 .u-image-1 {
				height: 253px;
			}
		}

		@media (max-width: 767px) {
			.u-section-2 .u-sheet-1 {
				min-height: 481px;
			}

			.u-section-2 .u-container-layout-1 {
				padding-top: 0;
				padding-left: 10px;
				padding-right: 10px;
			}

			.u-section-2 .u-layout-cell-2 {
				min-height: 277px;
			}

			.u-section-2 .u-group-1 {
				min-height: 254px;
				width: 338px;
			}

			.u-section-2 .u-container-layout-3 {
				padding-left: 10px;
				padding-right: 10px;
			}

			.u-section-2 .u-text-5 {
				width: auto;
				margin-left: 0;
				margin-right: 0;
			}

			.u-section-2 .u-image-1 {
				height: 278px;
			}
		}

		@media (max-width: 575px) {
			.u-section-2 .u-text-1 {
				font-size: 1.5rem;
				margin-right: 0;
			}

			.u-section-2 .u-layout-cell-2 {
				min-height: 100px;
			}

			.u-section-2 .u-text-4 {
				font-size: 1.5rem;
			}

			.u-section-2 .u-image-1 {
				height: 175px;
			}

			.u-section-2 .u-text-7 {
				width: 340px;
			}
		}

		/** panel settings */
		.panel-tools .button-command.active,
		.reset-button button {
			border-color: #53761f;
			background-color: #53761f;
		}

		.page-numbers li span.page-numbers.current,
		.slide-container.slider-2 .tp- .tp-bullet.selected:after,
		.slide-container.slider-3 .tp-bullet.selected,
		.iw-footer-v2-widget .footer_extra_links>a:hover {
			border-color: #53761f;
		}
	</style>

	<link rel='stylesheet' href='wp-includes/css/dist/block-library/style.mina4a0.css?ver=5.7.5' type='text/css'/>
	<link rel='stylesheet' href='wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/vendors-stylecb20.css?ver=4.4.3' type='text/css'/>
	<link rel='stylesheet' href='wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/stylecb20.css?ver=4.4.3' type='text/css'/>
	<link rel='stylesheet' href='wp-content/plugins/yith-woocommerce-wishlist/assets/css/jquery.selectBox7359.css?ver=1.2.0' type='text/css'/>
	<link rel='stylesheet' href='wp-content/plugins/yith-woocommerce-wishlist/assets/css/font-awesome1849.css?ver=4.7.0' type='text/css'/>
	<link rel='stylesheet' href='wp-content/plugins/yith-woocommerce-wishlist/assets/css/stylef214.css?ver=3.0.20' type='text/css'/>
	<link rel='stylesheet' href='wp-content/plugins/iw_composer_addons/assets/css/font-awesome/css/font-awesome.mine7f3.css?ver=2.1.7' type='text/css' />
	<style type='text/css'>
		[data-font="FontAwesome"]:before {
			font-family: 'FontAwesome' !important;
			content: attr(data-icon) !important;
			speak: none !important;
			font-weight: normal !important;
			font-variant: normal !important;
			text-transform: none !important;
			line-height: 1 !important;
			font-style: normal !important;
			-webkit-font-smoothing: antialiased !important;
			-moz-osx-font-smoothing: grayscale !important;
		}
	</style>
	<link rel='stylesheet' href='wp-content/plugins/iw_composer_addons/assets/css/iw-shortcodese7f3.css?ver=2.1.7' type='text/css'/>
	
	<script type='text/javascript' src='wp-includes/js/jquery/jquery.min9d52.js?ver=3.5.1'></script>
	<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto+Slab%3A100%2C300%2C400%2C700&amp;ver=2.1.7' type='text/css'/>
	<link rel='stylesheet' href='wp-content/themes/incharity/css/bootstrap.mine7f3.css?ver=2.1.7' type='text/css'/>
	<link rel='stylesheet' href='wp-content/themes/incharity/stylea4a0.css?ver=5.7.5' type='text/css'/>
	<style type='text/css'>
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

		.page-heading {
			height: 420px;
		}

		.page-heading .iw-heading-title {
			padding-top: 210px;
		}

		.page-heading {
			background-image: url(wp-content/uploads/2016/07/page-heading-bg.jpg) !important;
			background-repeat: no-repeat;
		}
	</style>
</head>

<body id="page-top" class="page-template page-template-page-templates page-template-home-page page-template-page-templateshome-page-php page page-id-139 theme-incharity woocommerce-no-js wpb-js-composer js-comp-ver-6.3.0 vc_responsive">
	<div class="wrapper " style="background: #f9f9f9;">
		<?php
			$nav = 'project';
			require "import/menu/menu.php"
		?>
		
		<section>
			<div class="cards-1 section-gray">
				<div class="container">
				<div class="wpb_wrapper">
					<div class="iw-heading  font-normal style1 col-md-12">
						<div class="row">
							<h3 class="col-md-10 iwh-title text-left" style="font-size:30px">Notre facons de rentre le monde  <br> meilleur</h3>
						</div>
					</div><br><br><br><br>
					
					<div style="margin-top: 5em" class="row">
						<?php foreach($projects as $project): ?>
							<div class="col-md-4">
								<div class="card card-blog">
									<a href="project_details.php?id=<?= $project->project_id; ?>">
										<?php
											$_SESSION["project_id"] = $project->project_id;
										?>
										<div class="card-image">
											<div> 
												<img class="img" src="admin/<?= $project->files_url ?>">
												<div class="card-caption"><?= substr($project->project_name, 0, 90)."..." ?></div>
											</div>
											<div class="ripple-cont"></div>
										</div>
										<div class="table">
											<h6 class="category text-success"><i class="fa fa-home"></i> <?= substr($project->project_zone, 0, 90)."..." ?></h6>
											<h4 class="card-caption">
												<a href="project_details.php?id=<?= $project->project_id; ?>"><?= substr($project->project_content, 0, 100)."..." ?></a>
											</h4>
											<div class="ftr">
												<div class="author">
													<p><i class="fa fa-money"></i> <?= $project->project_sponsor ?></p>
												</div>
											</div>
										</div>
									</a>
								</div>
							</div>
						<?php endforeach ?>
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
													<h5>APES: 52, Avenue Saïo Ibanda Bukavu <br> / Sud-Kivu</h5>
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
									<li id="menu-item-475" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-475"><a href="article.php">Actualités</a></li>
									<li id="menu-item-476" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-476"><a href="jobs.php">Offres d'emplois</a></li>
									<li id="menu-item-477" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-477"><a href="about_us.php">A propos</a></li>
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
	<!-- Developed by: Ary aristote -->
	<!-- Email: aryaristote@gmail.com -->
	<!-- Phone: (+243) 990 413 132 -->
	<!-- 2022 / Avril -->

	
	<script src="header-1.js"></script>

	<script type='text/javascript' src='wp-content/themes/incharity/js/bootstrap.mine7f3.js?ver=2.1.7' id='bootstrap-js'></script>
</html>