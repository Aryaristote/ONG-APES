<?php
	session_start();
	include "./config/database.php";

	$q = $db->prepare("SELECT * FROM project WHERE project_id = :project_id");
    
    if($q){
		// var_dump($_GET['id']);
		$q->execute([
			'project_id' => $_GET['id'],
		]);
		$one_projects = $q->fetch(PDO::FETCH_OBJ);
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
	<link rel="stylesheet" href="nicepage0648.css" media="screen">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Nos Projets</title>
	<style type="text/css">
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

<script type='text/javascript' src='wp-includes/js/jquery/jquery.min9d52.js?ver=3.5.1'></script>
	<link rel='stylesheet' id='wp-block-library-css' href='wp-includes/css/dist/block-library/style.mina4a0.css?ver=5.7.5' type='text/css' media='all' />
	<link rel='stylesheet' id='wc-block-vendors-style-css' href='wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/vendors-stylecb20.css?ver=4.4.3' type='text/css' media='all' />
	<link rel='stylesheet' id='wc-block-style-css' href='wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/stylecb20.css?ver=4.4.3' type='text/css' media='all' />
	<link rel='stylesheet' id='jquery-selectBox-css' href='wp-content/plugins/yith-woocommerce-wishlist/assets/css/jquery.selectBox7359.css?ver=1.2.0' type='text/css' media='all' />
	<link rel='stylesheet' id='yith-wcwl-font-awesome-css' href='wp-content/plugins/yith-woocommerce-wishlist/assets/css/font-awesome1849.css?ver=4.7.0' type='text/css' media='all' />
	<link rel='stylesheet' id='yith-wcwl-main-css' href='wp-content/plugins/yith-woocommerce-wishlist/assets/css/stylef214.css?ver=3.0.20' type='text/css' media='all' />
	<link rel='stylesheet' id='font-awesome-css' href='wp-content/plugins/iw_composer_addons/assets/css/font-awesome/css/font-awesome.mine7f3.css?ver=2.1.7' type='text/css' media='all' />
	<style id='font-awesome-inline-css' type='text/css'>
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
	<link rel='stylesheet' id='iw-shortcodes-css' href='wp-content/plugins/iw_composer_addons/assets/css/iw-shortcodese7f3.css?ver=2.1.7' type='text/css' media='all' />
	
	<link rel='stylesheet' id='google-font-robotoslab-css' href='http://fonts.googleapis.com/css?family=Roboto+Slab%3A100%2C300%2C400%2C700&amp;ver=2.1.7' type='text/css' media='all' />
	<link rel='stylesheet' id='bootstrap-css' href='wp-content/themes/incharity/css/bootstrap.mine7f3.css?ver=2.1.7' type='text/css' media='all' />
	<link rel='stylesheet' id='incharity-style-css' href='wp-content/themes/incharity/stylea4a0.css?ver=5.7.5' type='text/css' media='all' />
	<style id='incharity-style-inline-css' type='text/css'>
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
			$nav = 'project_details';
			require "import/menu/menu.php"
		?>

		<div class="contents-main" id="contents-main">
			
		</div>

		<section class="u-clearfix u-section-2" id="carousel_a990">
			<div class="u-clearfix u-sheet u-sheet-1">
				<div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
					<div class="u-gutter-0 u-layout">
						<div class="u-layout-row">
							<div class="u-size-19">
								<div class="u-layout-col">
									<div class="u-layout-cell-1">
										<div class="u-container-layout u-valign-middle u-container-layout-1">
											<h3 class="u-text u-text-2"><?= $one_projects->project_name ?></h3>
											<p class="u-text u-text-3" style="font-size: 15px;"><b>Etat: </b><?= $one_projects->project_status ?></p>
										</div>
									</div>
									<div class="u-align-center u-container-style u-layout-cell u-shape-rectangle u-size-30 u-layout-cell-2">
										<div class="u-container-layout u-container-layout-2">
											<div class="u-container-style u-group u-palette-1-base u-group-1">
												<div class="u-container-layout u-valign-middle u-container-layout-3"><br>
													<h2 class="u-text"><?= $one_projects->project_sponsor ?></h2>
													<p class="u-text" style="font-size: 15px;"><?= $one_projects->project_zone ?></p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="u-size-41">
								<div class="u-layout-col">
									<div class="u-align-justify u-container-style u-layout-cell u-size-60 u-layout-cell-3">
										<div class="u-container-layout u-container-layout-4">
											<img class="u-expanded-width u-image u-image-1" src="wp-content/uploads/revslider/slider-2/fhrdc.jpeg" data-image-width="720" data-image-height="1080">
											<p class="u-text u-text-7" style="font-size: 13px;">
												<?= $one_projects->project_content ?><br><br><br>
												DRC-19/HCG10/UR3/PROT/NGO/13845 : Projet de soutien aux mécanismes de
												protection et d’appui holistique aux survivantes de VBG dans les zones
												de santé de Fizi et Nundu dans la province du Sud-Kivu.

												Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id elementum enim, et fermentum orci. Sed viverra dolor eu sollicitudin egestas. Aliquam sed erat a sapien ultricies malesuada quis ac mi. Donec rhoncus massa massa, eleifend pellentesque purus suscipit ut. Mauris convallis fermentum convallis. Praesent nunc sapien, elementum et vestibulum sit amet, feugiat in ipsum. Cras in lacus orci. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In hac habitasse platea dictumst. Nulla sodales odio eget tincidunt pellentesque. Ut porta ac nisi sit amet rutrum. Integer tincidunt diam sem, quis consequat mi egestas quis. Praesent placerat nunc sed dolor finibus condimentum. Sed sit amet fringilla mauris. Nunc cursus ullamcorper congue.
												Ut facilisis ipsum vel turpis feugiat aliquam. Pellentesque bibendum velit eget ex dictum dapibus. Sed interdum quam sed quam porta condimentum. Duis faucibus justo vulputate, bibendum diam dignissim, vulputate nulla. Vestibulum a augue non metus bibendum sodales quis a tortor. Suspendisse mollis, felis vitae faucibus bibendum, mauris dolor consectetur mauris, eu rhoncus odio augue faucibus sem. Nulla facilisi. Etiam eu nibh et arcu placerat imperdiet id quis purus.
												Ut sit amet risus tellus. Maecenas ullamcorper quam et sapien tempus, ut lobortis tellus ullamcorper. Sed commodo volutpat metus. In sit amet turpis posuere, volutpat massa ac, rutrum augue. Vestibulum aliquet nibh a lorem pellentesque, a gravida eros mattis. Maecenas gravida ligula ipsum, in sodales nunc lobortis non. Duis finibus nunc tempor velit mollis congue.
												Mauris placerat tortor eu quam vestibulum cursus. Ut mollis in nibh eget pulvinar. Fusce dictum dui eu erat accumsan varius. Phasellus tincidunt placerat malesuada. Donec vehicula, erat fringilla elementum tempor, ipsum tellus condimentum purus, id porta sem felis eget arcu. Fusce congue tellus dolor, nec finibus leo efficitur vitae. Donec euismod est dui, non venenatis ante tempor eget. Morbi congue semper elit eget venenatis. Morbi quam urna, ultrices sit amet mi eu, fringilla molestie purus.
												Ut porta viverra tortor, vitae molestie velit suscipit sit amet. Cras mauris tellus, suscipit ut ornare sed, pellentesque sit amet augue. Mauris vel porttitor libero, eget viverra massa. Ut eu est id felis euismod vehicula nec vel dolor. Phasellus ornare enim condimentum, rutrum mauris vel, mollis dolor. Phasellus lacus lacus, pharetra at arcu et, porttitor rhoncus elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed efficitur dolor enim, ac ornare elit auctor in. Donec nec vehicula nisi. Donec vestibulum lacus non augue varius, et dictum orci sagittis. Curabitur laoreet sed enim ac pretium. Mauris in tortor nec lectus auctor tincidunt. Nam et pulvinar velit. Donec placerat, metus non consectetur tristique, ex velit venenatis ligula, vitae scelerisque purus magna nec erat. Etiam orci leo, ultricies sed porttitor a, suscipit tristique velit. Curabitur vitae varius tortor.
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
</body>

</html>