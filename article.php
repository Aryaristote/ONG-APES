<?php 
	include "./config/database.php";

    $q = $db->query("SELECT * FROM news");
    
    if($q){
        $news = $q->fetchAll(PDO::FETCH_OBJ);
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
	<link rel="stylesheet" href="timeline.css" />
	<link rel="stylesheet" href="external_card.css" />

	<title>Article</title>
	
	<style type="text/css">
		
	</style>
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
	
	<script type='text/javascript' src='wp-includes/js/jquery/jquery.min9d52.js?ver=3.5.1'></script>
	
	<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto+Slab%3A100%2C300%2C400%2C700&amp;ver=2.1.7' type='text/css' />
	<link rel='stylesheet' href='wp-content/themes/incharity/css/bootstrap.mine7f3.css?ver=2.1.7' type='text/css' />
	<link rel='stylesheet' href='wp-content/themes/incharity/stylea4a0.css?ver=5.7.5' type='text/css' />
	
	<style id='incharity-style-inline-css' type='text/css'>
		
	</style>

</head>

<body id="page-top" class="">
	<div class="wrapper " style="background: #f9f9f9;">
		<?php
			$nav = 'info';
			require "import/menu/menu.php"
		?>

		<main class="container">
			<div class="header-block">
				<div class="title-item">
					<h2>News</h2>
				</div>
				<div class="btn-item">
					<?php if(count($offres) >= 1 ): ?>
						<div class="">
							<a href="jobs.php" class="stage-btn">Offre d'emploi</a>
						</div>
					<?php endif ?>
				</div>
			</div>
			<div class="col-md-12">
				<section class="dark">
					<div class="container py-4">
						<h1 class="h1 text-center" id="pageHeaderTitle"></h1>
						<?php if(count($news) > 0): ?> 
						<?php foreach($news as $key => $new): ?>
							<?php if($key % 2 == 0): ?>
								<article class="postcard dark green">
									<a class="postcard__img_link" href="one_article.php?id=<?= $new->id ?>">
										<img class="postcard__img" src="./admin/<?= $new->files_url ?>" alt="Image Title" />
									</a>
									<div class="postcard__text">
										<h1 class="postcard__title green"><a href="one_article.php?id=<?= $new->id ?>"><?= $new->title ?></a></h1>
										<div class="postcard__subtitle small">
											<time datetime="2020-05-25 12:00:00">
												<i class="fas fa-calendar-alt mr-2"></i><?= $new->create_at ?>
											</time>
										</div>
										<div class="postcard__bar"></div>
										<div class="postcard__preview-txt"><?= substr($new->description, 0, 600)."..." ?></div>
										<ul class="postcard__tagbox">
											<a href="one_article.php?id=<?= $new->id ?>">
												<li class="btn btn-primary tag__item"><i class="fas fa-tag mr-2"></i>Lire l'article</li>
											</a>
											<a href="<?= $new->sponsors ?>">
												<li class="tag__item"><i class="fas fa-tag mr-2"></i>Voir la video</li>
											</a>
											<a href=""><li class="tag__item"><i class="fas fa-clock mr-2"></i>Partager</li></a>
										</ul>
									</div>
								</article>
							<?php else: ?>
								<article class="postcard dark yellow">
									<a class="postcard__img_link" href="one_article.php?id=<?= $new->id ?>">
										<img class="postcard__img" src="./admin/<?= $new->files_url ?>" alt="Image Title" />
									</a>
									<div class="postcard__text">
										<div style="margin-left: 15px;">
											<h1 class="postcard__title green"><a href="one_article.php?id=<?= $new->id ?>"><?= $new->title ?></a></h1>
											<div class="postcard__subtitle small">
												<time datetime="2020-05-25 12:00:00">
													<i class="fas fa-calendar-alt mr-2"></i><?= $new->create_at ?>
												</time>
											</div>
											<div class="postcard__bar"></div>
											<div class="postcard__preview-txt"><?= $new->description ?></div>
										</div>
										<ul class="postcard__tagbox">
											<a href="one_article.php?id=<?= $new->id ?>">
												<li class="btn btn-primary tag__item"><i class="fas fa-tag mr-2"></i>Lire l'article</li>
											</a>
											<a href="<?= $new->sponsors ?>">
												<li class="tag__item"><i class="fas fa-tag mr-2"></i>Voir la video</li>
											</a>
											<a href=""><li class="tag__item"><i class="fas fa-clock mr-2"></i>Partager</li></a>
										</ul>
									</div>
								</article>
							<?php endif ?>
						<?php endforeach ?>
						<?php else: ?>
							<h1 class="h1 text-center" id="pageHeaderTitle">Aucune actualité disponible pour l'instant</h1>
						<?php endif ?>
					</div>
				</section>
			</div><br>
		</main>

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
								<a href="index.html">Plus sur nous</a>
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
									<li id="menu-item-475" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-475"><a href="projects.php">Nos Projets</a></li>
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

<!-- Mirrored from charity.sdemo.site/about-us/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Jan 2022 11:26:26 GMT -->

</html>