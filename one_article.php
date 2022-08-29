<?php
	session_start();
	include "./config/database.php";

	$q = $db->prepare("SELECT * FROM news WHERE id = :id");
    
    if($q){
		$q->execute([
			'id' => $_GET['id'],
		]);
		$articles = $q->fetch(PDO::FETCH_OBJ);
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
  	<link rel="stylesheet" href="timeline.css" />

	<link rel="stylesheet" href="external_card.css" />

	<title>Article details</title>
  
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
	
  <script type='text/javascript' src='wp-includes/js/jquery/jquery.min9d52.js?ver=3.5.1'></script>
	<link rel='stylesheet' id='google-font-robotoslab-css' href='http://fonts.googleapis.com/css?family=Roboto+Slab%3A100%2C300%2C400%2C700&amp;ver=2.1.7' type='text/css' media='all' />
	<link rel='stylesheet' id='bootstrap-css' href='wp-content/themes/incharity/css/bootstrap.mine7f3.css?ver=2.1.7' type='text/css' media='all' />
	<link rel='stylesheet' id='incharity-style-css' href='wp-content/themes/incharity/stylea4a0.css?ver=5.7.5' type='text/css' media='all' />
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
          <h2>Actualité</h2>
        </div>
        <div class="btn-item">
          <div class="">
            <a href="stage.php" class="stage-btn">Trouvez un job</a>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="col-md-1"></div>
        <div class="col-md-3">
          <article>
            <h6>DATE DE REDACTION</h6>
            <small><?= $articles->create_at ?></small>
          </article>
        </div>
        <div class="col-md-7">
          <article class="main-article">
            <h4><?= $articles->title ?></h4>
            <p style="font-size: 15px"><?= $articles->description ?></p>
            <div class="article-img">
              <img src="./admin/<?= $articles->files_url ?>" alt="">
            </div>
          </article>
          <div class="post-react">
            <ul>
              <li class="like-btn">
                <a class="view_link" href="<?= $articles->sponsors ?>"><small>Voir la Video </small></a> |
                <a href="#"><small>Partager</small></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-1"></div>
      </div><br>
    </main><br><br><br>

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

</html>