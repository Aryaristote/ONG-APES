<?php
	require "./template/stage.views.php";
?>

<!DOCTYPE html>
<html lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="header-1.css" />
	<link rel="stylesheet" href="stageForm.css" />
	<link rel="stylesheet" href="nicepagef5e5.css" media="screen">
	<title>Offre d'emploi</title>

	<link rel='stylesheet' id='google-font-robotoslab-css' href='http://fonts.googleapis.com/css?family=Roboto+Slab%3A100%2C300%2C400%2C700&amp;ver=2.1.7' type='text/css' media='all' />
	<link rel='stylesheet' id='bootstrap-css' href='wp-content/themes/incharity/css/bootstrap.mine7f3.css?ver=2.1.7' type='text/css' media='all' />
	<link rel='stylesheet' id='incharity-style-css' href='wp-content/themes/incharity/stylea4a0.css?ver=5.7.5' type='text/css' media='all' />
	<style id='incharity-style-inline-css' type='text/css'>
		html body {
			font-family: Roboto Slab
		}
		select {
			-webkit-appearance: none;
			-moz-appearance: none;
			appearance: none;
			background-color: transparent;
			border: 3px solid #76a120;
			padding: 10px 1em;
			margin: 0;
			width: 100%;
			font-family: inherit;
			font-size: inherit;
			cursor: inherit;
			line-height: inherit;
			z-index: 1;
			outline: none;
			font-size: 14px;
		}
		select:hover{
			cursor: pointer;
		}

		select::-ms-expand {
			display: none;
		}

		select option{
			font-size: 14px;
			padding: 20px 5px;
		}
		.select {
			
		}

		.select select,
		.select::after {
			grid-area: select;
		}

		.select:not(.select--multiple)::after {
			content: "";
			justify-self: end;
			width: 0.8em;
			height: 0.5em;
			background-color: var(--select-arrow);
			-webkit-clip-path: polygon(100% 0%, 0 0%, 50% 100%);
			clip-path: polygon(100% 0%, 0 0%, 50% 100%);
		}

		select:focus+.focus {
			position: absolute;
			top: -1px;
			left: -1px;
			right: -1px;
			bottom: -1px;
			border: 2px solid var(--select-focus);
			border-radius: inherit;
		}

		select[multiple] {
			padding-right: 0;
			height: 6rem;
		}

		select[multiple] option {
			white-space: normal;
			outline-color: var(--select-focus);
		}

		.select--disabled {
			cursor: not-allowed;
			background-color: #eee;
			background-image: linear-gradient(to top, #ddd, #eee 33%);
		}

		label {
			font-size: 1.125rem;
			font-weight: 500;
		}

		.select+label {
			margin-top: 2rem;
		}
		form .sumit-btn{
			color: white;
			border: 4px solid #76a120;
			background-color:#76a120;
			outline: none;
			font-size: 16px;
			font-weight: bold;
			padding: 8px 2em;
		}
		.sumit-btn:hover{
			background-color:#76a120;
			padding: 8px 2em;
			opacity: .7;
		}
	</style>
</head>

<body id="page-top" class="">
	<div class="wrapper" style="background-color: #f2f2f2;">
		<?php
			$nav = 'apply';
			require "import/menu/menu.php";
		?>

		<section class="u-align-left u-clearfix u-grey-5 u-section-2">
			<div class="container" style="color: #838383;">
				<?php if (isset($error)) : ?>
					<div class="alert alert-danger">
						<?= $error ?>
					</div>
				<?php endif ?>
				<?php if (isset($success)) : ?>
					<div class="alert alert-success">
						<?= 
							$_SESSION['apply_success'] = $success;
						?>
					</div>
				<?php endif ?>
				<div class="header-block">
					<div class="title-item">
						<h1>POSTE: <?= $one_offre->post_name ?></h1>
					</div>
				</div>
				<div class="col-md-12">
					<div class="description">	
						<div class="block_one">
							<h3 class="well">Job Description: </h3>
							<p>
								<?= nl2br($one_offre->post_description) ?>
							</p>
						</div>
						<div class="block_one">
							<h3 class="well">Exigence: </h3>
							<ul>
								<li><?= nl2br($one_offre->post_exigence) ?></li>
							</ul>
						</div>
					</div><hr>
			</div><br>	

			<div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
				<h2 class="u-text u-text-1" style="color: #838383;">SOUMETTRE VOTRE CANDIDATURE</h2>

				<div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
					<div class="u-layout">
						<div class="u-layout-col">
							<div class="u-size-30">
								<div class="u-layout-row">
									<!-- <div class="u-size-1"></div> -->
									<div class="u-size-60">
										<div class="u-layout-col">
											<div class="u-container-style u-layout-cell u-left-cell  u-layout-cell-5">
												<div class="u-container-layout u-container-layout-5">
													<div class="alert alert-warning" role="alert">
														<h4 class="alert-heading">ALERTE ! ALERTE ! ALERTE !</h4>
														<p>Compte tenu du nombre de candidatures que nous recevons chaque jour, avoir une réponse de notre part n'est pas forcément garanti si votre profil ne correspond pas.</p>
														<!-- <hr> -->
														<p class="mb-0">Notez que vos données sont protégées et sécurisées par l'Organisation APES Congo.</p>
													</div>
													
													<div class="u-form u-form-1">
														<form method="post" enctype="multipart/form-data" class="col-md-12 u-clearfix u-form-spacing-10 u-form-vertical u-inner-form">
															<div class="col-md-6">
																<div class="u-form-group u-form-name">
																	<h5>Nom complet * </h5>
																	<input name="name" type="text" required="required" placeholder="Ex: Kalume Ernest Aristote" class="u-input u-input-rectangle u-white">
																</div>
																<div class="u-form-group u-form-name">
																	<h5>Nationalité * </h5>
																	<input name="country" type="text" required="required" placeholder="Ex: Congolaise" class="u-input u-input-rectangle u-white">
																</div>
																<div class="u-form-group u-form-name">
																	<h5>Residence actuelle * </h5>
																	<input name="location" type="text" required="required" placeholder="Ex: Bukavu" class="u-input u-input-rectangle u-white">
																</div>
																<div class="u-form-group u-form-name">
																	<h5>Votre numéro de téléphone:</h5>
																	<input type="tel" placeholder="0990-413-132" name="phone" class="u-input u-input-rectangle u-white" pattern="[0-9]{4} [0-9]{3} [0-9]{3}">
																</div>
																<div class="u-form-group u-form-name">
																	<h5>Niveau d'étude:</h5>
																	<div class="select">
																		<select required="required" name="niveau" id="standard-select">
																		<option value="">Niveau d'etude</option>
																			<option value="Diplome">Diplome</option>
																			<option value="Grade">Grade</option>
																			<option value="Licence">Licence</option>
																			<option value="Master">Master</option>
																			<option value="Autre">Autre</option>
																		</select>
																		<span class="focus"></span>
																	</div>
																</div>
																<div class="col-md-12 u-form-group u-form-name" style="padding: 0 10px;margin: 0;">
																	<div class="col-md-8" style="padding: 0;margin: 0 25px 0 0;">
																		<h5>Domaine d'intervation * </h5>
																		<input type="text" required="required" placeholder="Ex: Géologie" name="domain" class="u-input u-input-rectangle u-white">
																	</div>
																	<div class="col-md-3" style="padding: 0;margin: 0;">
																		<h5>Experience * </h5>
																		<input type="number" min="1" required="required" placeholder="Ex: 5" name="experience" class="u-input u-input-rectangle u-white">
																	</div>
																</div>
															</div>
															<div class="col-md-6">
																
																<div class="u-form-group u-form-name">
																	<h5>Soumettre un CV * </h5>
																	<input name="file" type="file" required="required" class="u-input u-input-rectangle u-white">
																</div>

																<div class="u-form-group u-form-name">
																	<h5>Soumettre une lettre de motivation * </h5>
																	<input name="file2" type="file" required="required" class="u-input u-input-rectangle u-white">
																</div>

																<div class="u-form-group u-form-name">
																	<h5>Soumettre une pièce d'identité * </h5>
																	<input name="file3" type="file" required="required" class="u-input u-input-rectangle u-white">
																</div>
																
																<div class="u-form-group accept-check">
																	<input required="required" type="checkbox">
																	<b>Je jure avec franchise que les renseignements fournis ci-haut sont justes et sincères.</b>
																</div>
																<div class="u-align-left u-form-group u-form-submit">
																	<input value="Envoyer" type="submit" name="submit" class="sumit-btn">
																</div>
															</div>
														</form>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div><br><br>
						</div>
					</div>
				</div>
			</div>
		</section>

		<footer class="page-footer" style="background-color: black">
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
									<li id="menu-item-475" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-475"><a href="index.php">Accueil</a></li>
									<li id="menu-item-476" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-476"><a href="projects.php">Nos projets</a></li>
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

<!-- Mirrored from charity.sdemo.site/contact/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Jan 2022 11:30:22 GMT -->

</html>