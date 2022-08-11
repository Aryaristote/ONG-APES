<?php
	session_start();
	include "./config/database.php";

	$q = $db->query("SELECT * FROM project LIMIT 9");
    
    if($q){
		$projects = $q->fetchAll(PDO::FETCH_OBJ);
    }else{
        var_dump("Fails, Did not get date from DB!");
        die();
    }
?>
<!DOCTYPE html>
<html lang="en-US">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="header-1.css" />
	<link rel="stylesheet" href="index_card.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="scss/general.css" />

	<link rel="stylesheet" href="animate.compat.css">
	<link rel="stylesheet" href="reset.min.css" />
	<!-- <link rel="stylesheet" href="style.css" /> -->
	<link rel="stylesheet" href="header-1.css" />
	<link rel="stylesheet" href="/apesCongo/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" href="nicepage0648.css" media="screen">
	<title>APES RDCongo</title>

	<link rel="shortcut icon" type="image/png" href="wp-content/favIcons/android-icon-36x361.png">
	<link rel='stylesheet' id='font-awesome-css' href='wp-content/plugins/iw_composer_addons/assets/css/font-awesome/css/font-awesome.mine7f3.css?ver=2.1.7' type='text/css' />
	
	<style type="text/css">
		.cards-1 .wpb_wrapper .iwh-title{
			border-left: 4px solid #838383;
			padding-left: 10px;
		}
		.more-project{
			color: white;
			border: 4px solid #76a120;
			background-color:#76a120;
			outline: none;
			font-size: 16px;
			font-weight: bold;
			padding: 7px 2em;
			margin: 10px 20px;
		}
		.more-project a{
			color: white;
			padding: 20px 1em;
		}
		.more-project a:hover{
			color: white;
		}
		.stage-btn-submit{
			color: #76a120;
			border: 4px solid #76a120;
			background-color:#fff;
			outline: none;
			font-size: 16px;
			font-weight: bold;
			padding: 7px 0;
		}
		.stage-btn-submit a{
			color: #76a120;
			padding: 20px 2em;
		}
		.stage-btn-submit a:hover{
			color: #76a120;
		}
		.stage-btn-submit, .stage-btn-submit2:hover{
			opacity: .9;
			color: #76a120;
			border: 4px solid #76a120;
			background-color:#fff;
		}
	</style>
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
	<link rel='stylesheet' href='wp-content/plugins/revslider/public/assets/css/rs6b724.css?ver=6.2.15' type='text/css'/>
	
	<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto+Slab%3A100%2C300%2C400%2C700&amp;ver=2.1.7' type='text/css'/>
	<link rel='stylesheet' href='wp-content/themes/incharity/css/bootstrap.mine7f3.css?ver=2.1.7' type='text/css'/>
	<link rel='stylesheet' href='wp-content/themes/incharity/stylea4a0.css?ver=5.7.5' type='text/css'/>
	
	<script type='text/javascript' src='wp-includes/js/jquery/jquery.min9d52.js?ver=3.5.1'></script>
	<script type='text/javascript' src='wp-includes/js/jquery/jquery-migrate.mind617.js?ver=3.3.2'></script>
	<script type='text/javascript' src='wp-content/plugins/infunding/assets/js/masonry.pkgd.mina4a0.js?ver=5.7.5'></script>
	<script type='text/javascript' src='wp-content/plugins/iw_composer_addons/assets/js/iw-testimonialse7f3.js?ver=2.1.7'></script>
	<script type='text/javascript' src='wp-content/plugins/revslider/public/assets/js/rbtools.minb724.js?ver=6.2.15'></script>
	<script type='text/javascript' src='wp-content/plugins/revslider/public/assets/js/rs6.minb724.js?ver=6.2.15'></script>
	<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min44fd.js?ver=2.70'></script>
	<script type="text/javascript">
		function setREVStartSize(e) {
			//window.requestAnimationFrame(function() {				 
			window.RSIW = window.RSIW === undefined ? window.innerWidth : window.RSIW;
			window.RSIH = window.RSIH === undefined ? window.innerHeight : window.RSIH;
			try {
				var pw = document.getElementById(e.c).parentNode.offsetWidth,
					newh;
				pw = pw === 0 || isNaN(pw) ? window.RSIW : pw;
				e.tabw = e.tabw === undefined ? 0 : parseInt(e.tabw);
				e.thumbw = e.thumbw === undefined ? 0 : parseInt(e.thumbw);
				e.tabh = e.tabh === undefined ? 0 : parseInt(e.tabh);
				e.thumbh = e.thumbh === undefined ? 0 : parseInt(e.thumbh);
				e.tabhide = e.tabhide === undefined ? 0 : parseInt(e.tabhide);
				e.thumbhide = e.thumbhide === undefined ? 0 : parseInt(e.thumbhide);
				e.mh = e.mh === undefined || e.mh == "" || e.mh === "auto" ? 0 : parseInt(e.mh, 0);
				if (e.layout === "fullscreen" || e.l === "fullscreen")
					newh = Math.max(e.mh, window.RSIH);
				else {
					e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
					for (var i in e.rl)
						if (e.gw[i] === undefined || e.gw[i] === 0) e.gw[i] = e.gw[i - 1];
					e.gh = e.el === undefined || e.el === "" || (Array.isArray(e.el) && e.el.length == 0) ? e.gh : e.el;
					e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
					for (var i in e.rl)
						if (e.gh[i] === undefined || e.gh[i] === 0) e.gh[i] = e.gh[i - 1];

					var nl = new Array(e.rl.length),
						ix = 0,
						sl;
					e.tabw = e.tabhide >= pw ? 0 : e.tabw;
					e.thumbw = e.thumbhide >= pw ? 0 : e.thumbw;
					e.tabh = e.tabhide >= pw ? 0 : e.tabh;
					e.thumbh = e.thumbhide >= pw ? 0 : e.thumbh;
					for (var i in e.rl) nl[i] = e.rl[i] < window.RSIW ? 0 : e.rl[i];
					sl = nl[0];
					for (var i in nl)
						if (sl > nl[i] && nl[i] > 0) {
							sl = nl[i];
							ix = i;
						}
					var m = pw > (e.gw[ix] + e.tabw + e.thumbw) ? 1 : (pw - (e.tabw + e.thumbw)) / (e.gw[ix]);
					newh = (e.gh[ix] * m) + (e.tabh + e.thumbh);
				}
				if (window.rs_init_css === undefined) window.rs_init_css = document.head.appendChild(document.createElement("style"));
				document.getElementById(e.c).height = newh + "px";
				window.rs_init_css.innerHTML += "#" + e.c + "_wrapper { height: " + newh + "px }";
			} catch (e) {
				console.log("Failure at Presize of Slider:" + e)
			}
			//});
		};
	</script>
</head>

<body id="page-top" class="page-template page-template-page-templates page-template-home-page page-template-page-templateshome-page-php page page-id-404 page-child parent-pageid-725 theme-incharity woocommerce-no-js wpb-js-composer js-comp-ver-6.3.0 vc_responsive">
	<div class="">
		<?php
			$nav = 'index';
			require "import/menu/menu.php"
		?>

		<div class="slide-container slider-4" style="margin-top: -90px;">
			<p class="rs-p-wp-fix"></p>
			<rs-module-wrap id="rev_slider_9_1_wrapper" data-source="gallery" style="background:transparent;padding:0;">
				<rs-module id="rev_slider_9_1" data-version="6.2.15">
					<rs-slides>
						<rs-slide data-key="rs-55" data-title="Slide" data-thumb="//charity.sdemo.site/wp-content/uploads/revslider/slider-3/education_above_all_children-100x50.jpg" data-anim="ei:d;eo:d;s:600;r:0;t:fade;sl:d;">
							<img src="wp-content/uploads/revslider/slider-3/education_above_all_children.jpg" title="Home Version 2" class="rev-slidebg" data-no-retina>
							<rs-layer id="slider-9-slide-55-layer-3" class="slider-3-bg-image tp-shape tp-shapewrapper" data-type="shape" data-rsp_ch="on" data-xy="x:r;xo:0,0,5px,5px;y:m;yo:0,0,-2px,-2px;" data-dim="w:245px,245px,150px,150px;h:245px,245px,150px,150px;" data-frame_0="x:left;o:1;tp:600;" data-frame_1="tp:600;e:power2.out;st:400;sp:600;" data-frame_999="sX:0.7;sY:0.7;o:0;rZ:0deg;tp:600;e:back.in;st:6500;sp:500;" data-frame_999_mask="u:t;" style="z-index:5;background-color:rgba(255,255,255,0.05);">
							</rs-layer>
							<rs-layer id="slider-9-slide-55-layer-1" class="slider-3-image-volunteer" data-type="image" data-rsp_ch="on" data-xy="x:r;xo:86px,86px,53px,53px;y:m;yo:-28px,-28px,-23px,-23px;" data-text="l:22;" data-dim="w:74px,74px,54px,54px;h:74px,74px,54px,54px;" data-frame_0="sX:0.9;sY:0.9;tp:600;" data-frame_1="tp:600;st:400;sp:2500;" data-frame_999="sX:0.7;sY:0.7;o:0;rZ:0deg;tp:600;e:back.in;st:5500;sp:1500;" data-frame_999_mask="u:t;" style="z-index:6;"><img src="wp-content/uploads/revslider/slider-3/icon1.png" width="74" height="74" data-no-retina></rs-layer>
							<rs-layer id="slider-9-slide-55-layer-2" class="slider-3-volunteer" data-type="text" data-color="rgba(131,131,131,1)" data-rsp_ch="on" data-xy="x:r;xo:28px,28px,9px,9px;y:m;yo:61px,61px,34px,34px;" data-text="s:16,16,12,12;l:40,40,30,30;fw:700;" data-frame_0="x:-50px;tp:600;" data-frame_1="tp:600;e:power2.out;st:420;sp:2100;" data-frame_999="sX:0.7;sY:0.7;o:0;rZ:0deg;tp:600;e:back.in;st:6500;sp:500;" data-frame_999_mask="u:t;" style="z-index:7;"> VILLAGES <br>THERAPEUTIQUE</rs-layer>
							<rs-layer id="slider-9-slide-55-layer-4" class="slider-3-bg-image-2 tp-shape tp-shapewrapper" data-type="shape" data-rsp_ch="on" data-xy="x:r;xo:0,0,3px,3px;y:m;yo:250px,250px,156px,156px;" data-text="fw:700;" data-dim="w:245px,245px,150px,150px;h:245px,245px,150px,150px;" data-frame_0="x:left;o:1;tp:600;" data-frame_1="tp:600;e:power2.out;st:720;sp:1960;" data-frame_999="sX:0.7;sY:0.7;o:0;rZ:0deg;tp:600;e:back.in;st:6500;sp:500;" data-frame_999_mask="u:t;" style="z-index:8;background-color:rgba(255,255,255,0.05);">
							</rs-layer>
							<rs-layer id="slider-9-slide-55-layer-5" class="slider-3-image-volunteer-2" data-type="image" data-rsp_ch="on" data-xy="x:r;xo:89px,89px,39px,39px;y:m;yo:235px,235px,135px,135px;" data-text="l:22;" data-dim="w:60px,60px,73,73;h:72px,72px,72,72;" data-frame_0="sX:0.9;sY:0.9;tp:600;" data-frame_1="tp:600;st:1010;sp:2500;" data-frame_999="sX:0.7;sY:0.7;o:0;rZ:0deg;tp:600;e:back.in;st:5500;sp:1500;" data-frame_999_mask="u:t;" style="z-index:9;"><img src="wp-content/uploads/revslider/slider-3/icon.png" width="60" height="72" data-no-retina></rs-layer>
							<rs-layer id="slider-9-slide-55-layer-6" class="slider-3-volunteer-2" data-type="text" data-color="rgba(131,131,131,1)" data-rsp_ch="on" data-xy="x:r;xo:52px,52px,-11px,-11px;y:m;yo:306px,306px,214px,214px;" data-text="w:nowrap,nowrap,normal,normal;s:18,18,12,12;l:24,24,30,30;fw:700;" data-dim="w:auto,auto,120px,120px;h:auto,auto,49px,49px;" data-frame_0="x:-50px;tp:600;" data-frame_1="tp:600;e:power2.out;st:1190;sp:1480;" data-frame_999="sX:0.7;sY:0.7;o:0;rZ:0deg;tp:600;e:back.in;st:6500;sp:500;" data-frame_999_mask="u:t;" style="z-index:10;color: white;">DONNER DES KITS <br> DE
								REINSERTION</rs-layer>
							<rs-layer id="slider-9-slide-55-layer-7" class="slider-3-bg-image-3 tp-shape tp-shapewrapper" data-type="shape" data-rsp_ch="on" data-xy="x:r;xo:250px,250px,159px,159px;y:m;yo:250px,250px,155px,155px;" data-text="fw:100;" data-dim="w:245px,245px,150px,150px;h:245px,245px,150px,150px;" data-frame_0="x:left;o:1;tp:600;" data-frame_1="tp:600;e:power2.out;st:1410;sp:600;" data-frame_999="sX:0.7;sY:0.7;o:0;rZ:0deg;tp:600;e:back.in;st:6500;sp:500;" data-frame_999_mask="u:t;" style="z-index:11;background-color:rgba(255,255,255,0.05);">
							</rs-layer>
							<rs-layer id="slider-9-slide-55-layer-8" class="slider-3-image-volunteer-3" data-type="image" data-rsp_ch="on" data-xy="x:r;xo:335px,335px,199px,199px;y:m;yo:235px,235px,138px,138px;" data-text="l:22;" data-dim="w:79px,79px,73,73;h:69px,69px,60,60;" data-frame_0="sX:0.9;sY:0.9;tp:600;" data-frame_1="tp:600;st:1690;sp:2500;" data-frame_999="sX:0.7;sY:0.7;o:0;rZ:0deg;tp:600;e:back.in;st:5500;sp:1500;" data-frame_999_mask="u:t;" style="z-index:12;"><img src="wp-content/uploads/revslider/slider-3/icon3.png" width="79" height="69" data-no-retina></rs-layer>
							<rs-layer id="slider-9-slide-55-layer-9" class="slider-3-volunteer-3" data-type="text" data-color="rgba(131,131,131,1)" data-rsp_ch="on" data-xy="x:r;xo:277px,277px,156px,156px;y:m;yo:309px,309px,193px,193px;" data-text="w:nowrap,nowrap,normal,normal;s:16,16,12,12;l:40,40,30,30;fw:700;" data-dim="w:auto,auto,139px,139px;" data-frame_0="x:-50px;tp:600;" data-frame_1="tp:600;e:power2.out;st:2020;sp:1020;" data-frame_999="sX:0.7;sY:0.7;o:0;rZ:0deg;tp:600;e:back.in;st:6540;sp:500;" data-frame_999_mask="u:t;" style="z-index:13;">ACCAMPAGNER LES <br> VICTIMES</rs-layer>
							<rs-layer id="slider-9-slide-55-layer-10" data-type="text" data-color="rgba(255,255,255,1)" data-rsp_ch="on" data-xy="x:r;xo:274px,274px,170px,167px;y:m;yo:-63px,-63px,-62px,-53px;" data-text="s:30,30,20,20;l:60,60,40,40;fw:300;" data-frame_0="y:-100%;o:1;tp:600;" data-frame_0_mask="u:t;" data-frame_1="tp:600;st:2290;sp:1380;" data-frame_1_mask="u:t;" data-frame_999="x:left;tp:600;st:6320;sp:680;" style="z-index:14;">L'APES RD Congo
							</rs-layer>
							<rs-layer id="slider-9-slide-55-layer-11" class="slider-3-text" data-type="text" data-color="rgba(255,255,255,1)" data-rsp_ch="on" data-xy="x:r;xo:272px,225px,158px,168px;y:m;yo:-3px,-22px,-23px,-27px;" data-text="s:48,40,36,20;l:72,72,52,32;fw:700;" data-frame_0="x:left;o:1;tp:600;" data-frame_1="tp:600;e:power2.inOut;st:2640;sp:1340;" data-frame_999="x:left;skX:45px;tp:600;st:6560;sp:440;" style="z-index:15;">Action pour
								la Promotion</rs-layer>
							<rs-layer id="slider-9-slide-55-layer-12" class="slider-3-text" data-type="text" data-color="rgba(255,255,255,1)" data-rsp_ch="on" data-xy="x:r;xo:264px,226px,161px,163px;y:m;yo:69px,36px,30px,8px;" data-text="s:48,40,36,20;l:72,72,52,32;fw:700;" data-frame_0="sX:0.9;sY:0.9;tp:600;" data-frame_1="tp:600;st:2840;sp:1390;" data-frame_999="x:left;tp:600;e:back.in;st:6770;sp:230;" style="z-index:16;">de
								l'Environnement Social.</rs-layer>
						</rs-slide>

						<rs-slide data-key="rs-56" data-title="Slide" data-thumb="//charity.sdemo.site/wp-content/uploads/revslider/slider-3/programme_education_above_all-100x50.jpg" data-anim="ei:d;eo:d;s:600;r:0;t:fade;sl:d;">
							<img src="wp-content/uploads/revslider/slider-3/programme_education_above_all.jpg" title="Home Version 2" class="rev-slidebg" data-no-retina>
							<rs-layer id="slider-9-slide-56-layer-3" class="slider-3-bg-image tp-shape tp-shapewrapper" data-type="shape" data-rsp_ch="on" data-xy="x:r;xo:0,0,5px,5px;y:m;yo:0,0,-2px,-2px;" data-dim="w:245px,245px,150px,150px;h:245px,245px,150px,150px;" data-frame_0="x:left;o:1;tp:600;" data-frame_1="tp:600;e:power2.out;st:400;sp:600;" data-frame_999="sX:0.7;sY:0.7;o:0;rZ:0deg;tp:600;e:back.in;st:6500;sp:500;" data-frame_999_mask="u:t;" style="z-index:5;background-color:rgba(255,255,255,0.05);">
							</rs-layer>
							<rs-layer id="slider-9-slide-56-layer-1" class="slider-3-image-volunteer" data-type="image" data-rsp_ch="on" data-xy="x:r;xo:80px,80px,53px,53px;y:m;yo:-25px,-25px,-23px,-23px;" data-text="l:22;" data-dim="w:74px,74px,54px,54px;h:74px,74px,54px,54px;" data-frame_0="sX:2;sY:2;tp:600;" data-frame_0_mask="u:t;" data-frame_1="tp:600;e:power2.out;st:400;sp:2500;" data-frame_1_mask="u:t;" data-frame_999="x:-100%;tp:600;st:5500;sp:1500;" data-frame_999_mask="u:t;" style="z-index:6;"><img src="wp-content/uploads/revslider/slider-3/icon1.png" width="74" height="74" data-no-retina>
							</rs-layer>
							<rs-layer id="slider-9-slide-56-layer-2" class="slider-3-volunteer" data-type="text" data-color="rgba(131,131,131,1)" data-rsp_ch="on" data-xy="x:r;xo:28px,28px,9px,9px;y:m;yo:50px,50px,34px,34px;" data-text="s:16,16,12,12;l:40,40,30,30;fw:700;" data-frame_0="sX:2;sY:2;tp:600;" data-frame_0_mask="u:t;" data-frame_1="tp:600;e:power2.out;st:420;sp:2100;" data-frame_1_mask="u:t;" data-frame_999="x:-100%;tp:600;st:5400;sp:1600;" data-frame_999_mask="u:t;" style="z-index:7;">VILLAGES <br>THERAPEUTIQUES
							</rs-layer>
							<rs-layer id="slider-9-slide-56-layer-4" class="slider-3-bg-image-2 tp-shape tp-shapewrapper" data-type="shape" data-rsp_ch="on" data-xy="x:r;xo:0,0,3px,3px;y:m;yo:250px,250px,156px,156px;" data-text="fw:700;" data-dim="w:245px,245px,150px,150px;h:245px,245px,150px,150px;" data-frame_0="x:left;o:1;tp:600;" data-frame_1="tp:600;e:power2.out;st:720;sp:1960;" data-frame_999="sX:0.7;sY:0.7;o:0;rZ:0deg;tp:600;e:back.in;st:6500;sp:500;" data-frame_999_mask="u:t;" style="z-index:8;background-color:rgba(255,255,255,0.05);">
							</rs-layer>
							<rs-layer id="slider-9-slide-56-layer-5" class="slider-3-image-volunteer-2" data-type="image" data-rsp_ch="on" data-xy="x:r;xo:71px,71px,39px,39px;y:m;yo:226px,226px,135px,135px;" data-text="l:22;" data-dim="w:93px,93px,73,73;h:112px,112px,72,72;" data-frame_0="sX:2;sY:2;tp:600;" data-frame_0_mask="u:t;" data-frame_1="tp:600;e:power2.out;st:1010;sp:2500;" data-frame_1_mask="u:t;" data-frame_999="x:-100%;tp:600;st:5500;sp:1500;" data-frame_999_mask="u:t;" style="z-index:9;"><img src="wp-content/uploads/revslider/slider-3/icon.png" width="60" height="72" data-no-retina>
							</rs-layer>
							<rs-layer id="slider-9-slide-56-layer-6" class="slider-3-volunteer-2" data-type="text" data-color="rgba(131,131,131,1)" data-rsp_ch="on" data-xy="x:r;xo:54px,54px,-11px,-11px;y:m;yo:305px,305px,214px,214px;" data-text="w:nowrap,nowrap,normal,normal;s:18,18,12,12;l:24,24,30,30;fw:700;" data-dim="w:auto,auto,120px,120px;h:auto,auto,49px,49px;" data-frame_0="sX:2;sY:2;tp:600;" data-frame_0_mask="u:t;" data-frame_1="tp:600;e:power2.out;st:1190;sp:1480;" data-frame_1_mask="u:t;" data-frame_999="x:-100%;tp:600;st:5460;sp:1540;" data-frame_999_mask="u:t;" style="z-index:10;">DONNER DES KITS <br> DE REINSERTION
							</rs-layer>
							<rs-layer id="slider-9-slide-56-layer-7" class="slider-3-bg-image-3 tp-shape tp-shapewrapper" data-type="shape" data-rsp_ch="on" data-xy="x:r;xo:250px,250px,159px,159px;y:m;yo:250px,250px,155px,155px;" data-text="fw:100;" data-dim="w:245px,245px,150px,150px;h:245px,245px,150px,150px;" data-frame_0="x:left;o:1;tp:600;" data-frame_1="tp:600;e:power2.out;st:1410;sp:600;" data-frame_999="sX:0.7;sY:0.7;o:0;rZ:0deg;tp:600;e:back.in;st:6500;sp:500;" data-frame_999_mask="u:t;" style="z-index:11;background-color:rgba(255,255,255,0.05);">
							</rs-layer>
							<rs-layer id="slider-9-slide-56-layer-8" class="slider-3-image-volunteer-3" data-type="image" data-rsp_ch="on" data-xy="x:r;xo:334px,334px,199px,199px;y:m;yo:237px,237px,138px,138px;" data-text="l:22;" data-dim="w:79px,79px,73,73;h:69px,69px,60,60;" data-frame_0="sX:2;sY:2;tp:600;" data-frame_0_mask="u:t;" data-frame_1="tp:600;e:power2.out;st:1690;sp:2500;" data-frame_1_mask="u:t;" data-frame_999="x:-100%;tp:600;st:5500;sp:1500;" data-frame_999_mask="u:t;" style="z-index:12;"><img src="wp-content/uploads/revslider/slider-3/icon3.png" width="79" height="69" data-no-retina>
							</rs-layer>
							<rs-layer id="slider-9-slide-56-layer-9" class="slider-3-volunteer-3" data-type="text" data-color="rgba(131,131,131,1)" data-rsp_ch="on" data-xy="x:r;xo:285px,285px,156px,156px;y:m;yo:306px,306px,193px,193px;" data-text="w:nowrap,nowrap,normal,normal;s:16,16,12,12;l:40,40,30,30;fw:700;" data-dim="w:auto,auto,139px,139px;" data-frame_0="sX:2;sY:2;tp:600;" data-frame_0_mask="u:t;" data-frame_1="tp:600;e:power2.out;st:2020;sp:1020;" data-frame_1_mask="u:t;" data-frame_999="x:-100%;tp:600;st:5490;sp:1550;" data-frame_999_mask="u:t;" style="z-index:13;">ACCAMPAGNER LES <br> VICTIMES
							</rs-layer>
							<rs-layer id="slider-9-slide-56-layer-10" data-type="text" data-color="rgba(255,255,255,1)" data-rsp_ch="on" data-xy="x:r;xo:275px,275px,170px,167px;y:m;yo:-60px,-60px,-62px,-53px;" data-text="s:30,30,20,20;l:60,60,40,40;fw:300;" data-frame_0="y:-100%;o:1;tp:600;" data-frame_0_mask="u:t;" data-frame_1="tp:600;st:2290;sp:1380;" data-frame_1_mask="u:t;" data-frame_999="x:left;tp:600;st:6320;sp:680;" style="z-index:14;">Au Sud-Kivu,
							</rs-layer>
							<rs-layer id="slider-9-slide-56-layer-11" class="slider-3-text" data-type="text" data-color="rgba(255,255,255,1)" data-rsp_ch="on" data-xy="x:r;xo:269px,225px,158px,168px;y:m;yo:-7px,-22px,-23px,-27px;" data-text="s:48,40,36,20;l:72,72,52,32;fw:700;" data-frame_0="x:left;o:1;tp:600;" data-frame_1="tp:600;e:power2.inOut;st:2640;sp:1340;" data-frame_999="x:left;skX:45px;tp:600;st:6560;sp:440;" style="z-index:15;">
								Autonomisation de la femme
							</rs-layer>
							<rs-layer id="slider-9-slide-56-layer-12" class="slider-3-text" data-type="text" data-color="rgba(255,255,255,1)" data-rsp_ch="on" data-xy="x:r;xo:266px,226px,161px,163px;y:m;yo:65px,36px,30px,8px;" data-text="s:48,40,36,20;l:72,72,52,32;fw:700;" data-frame_0="sX:0.9;sY:0.9;tp:600;" data-frame_1="tp:600;st:2840;sp:1390;" data-frame_999="x:left;tp:600;e:back.in;st:6770;sp:230;" style="z-index:16;">pour un
								developpement durable.
							</rs-layer>
						</rs-slide>

						<rs-slide data-key="rs-57" data-title="Slide" data-thumb="//charity.sdemo.site/wp-content/uploads/revslider/slider-3/dustribution-livre.png" data-anim="ei:d;eo:d;s:600;r:0;t:fade;sl:d;">
							<img src="wp-content/uploads/revslider/slider-3/dustribution-livre.PNG" title="Home Version 2" class="rev-slidebg" data-no-retina>
							<rs-layer id="slider-9-slide-57-layer-3" class="slider-3-bg-image tp-shape tp-shapewrapper" data-type="shape" data-rsp_ch="on" data-xy="x:r;xo:0,0,5px,5px;y:m;yo:0,0,-2px,-2px;" data-dim="w:245px,245px,150px,150px;h:245px,245px,150px,150px;" data-frame_0="x:left;o:1;tp:600;" data-frame_1="tp:600;e:power2.out;st:400;sp:600;" data-frame_999="sX:0.7;sY:0.7;o:0;rZ:0deg;tp:600;e:back.in;st:6500;sp:500;" data-frame_999_mask="u:t;" style="z-index:5;background-color:rgba(255,255,255,0.05);">
							</rs-layer>
							<rs-layer id="slider-9-slide-57-layer-1" class="slider-3-image-volunteer" data-type="image" data-rsp_ch="on" data-xy="x:r;xo:80px,80px,53px,53px;y:m;yo:-25px,-25px,-23px,-23px;" data-text="l:22;" data-dim="w:74px,74px,54px,54px;h:74px,74px,54px,54px;" data-frame_0="sX:2;sY:2;tp:600;" data-frame_0_mask="u:t;" data-frame_1="tp:600;e:power2.out;st:400;sp:2500;" data-frame_1_mask="u:t;" data-frame_999="x:-100%;tp:600;st:5410;sp:1590;" data-frame_999_mask="u:t;" style="z-index:6;"><img src="wp-content/uploads/revslider/slider-3/icon1.png" width="74" height="74" data-no-retina>
							</rs-layer>
							<rs-layer id="slider-9-slide-57-layer-2" class="slider-3-volunteer" data-type="text" data-color="rgba(131,131,131,1)" data-rsp_ch="on" data-xy="x:r;xo:28px,28px,9px,9px;y:m;yo:50px,50px,34px,34px;" data-text="s:16,16,12,12;l:40,40,30,30;fw:700;" data-frame_0="sX:2;sY:2;tp:600;" data-frame_0_mask="u:t;" data-frame_1="tp:600;e:power2.out;st:420;sp:2100;" data-frame_1_mask="u:t;" data-frame_999="x:-100%;tp:600;st:5400;sp:1600;" data-frame_999_mask="u:t;" style="z-index:7;">VILLAGES <br>THERAPEUTIQUES
							</rs-layer>
							<rs-layer id="slider-9-slide-57-layer-4" class="slider-3-bg-image-2 tp-shape tp-shapewrapper" data-type="shape" data-rsp_ch="on" data-xy="x:r;xo:0,0,3px,3px;y:m;yo:250px,250px,156px,156px;" data-text="fw:700;" data-dim="w:245px,245px,150px,150px;h:245px,245px,150px,150px;" data-frame_0="x:left;o:1;tp:600;" data-frame_1="tp:600;e:power2.out;st:720;sp:1960;" data-frame_999="sX:0.7;sY:0.7;o:0;rZ:0deg;tp:600;e:back.in;st:6500;sp:500;" data-frame_999_mask="u:t;" style="z-index:8;background-color:rgba(255,255,255,0.05);">
							</rs-layer>
							<rs-layer id="slider-9-slide-57-layer-5" class="slider-3-image-volunteer-2" data-type="image" data-rsp_ch="on" data-xy="x:r;xo:77px,77px,39px,39px;y:m;yo:233px,233px,135px,135px;" data-text="l:22;" data-dim="w:93px,93px,73,73;h:112px,112px,72,72;" data-frame_0="sX:2;sY:2;tp:600;" data-frame_0_mask="u:t;" data-frame_1="tp:600;e:power2.out;st:1010;sp:2500;" data-frame_1_mask="u:t;" data-frame_999="x:-100%;tp:600;st:5500;sp:1500;" data-frame_999_mask="u:t;" style="z-index:9;"><img src="wp-content/uploads/revslider/slider-3/icon.png" width="60" height="72" data-no-retina>
							</rs-layer>
							<rs-layer id="slider-9-slide-57-layer-6" class="slider-3-volunteer-2" data-type="text" data-color="rgba(131,131,131,1)" data-rsp_ch="on" data-xy="x:r;xo:69px,69px,-11px,-11px;y:m;yo:315px,315px,214px,214px;" data-text="w:nowrap,nowrap,normal,normal;s:18,18,12,12;l:24,24,30,30;fw:700;" data-dim="w:auto,auto,120px,120px;h:auto,auto,49px,49px;" data-frame_0="sX:2;sY:2;tp:600;" data-frame_0_mask="u:t;" data-frame_1="tp:600;e:power2.out;st:1190;sp:1480;" data-frame_1_mask="u:t;" data-frame_999="x:-100%;tp:600;st:5460;sp:1540;" data-frame_999_mask="u:t;" style="z-index:10;">DONNER DES KITS <br> DE REINSERTION
							</rs-layer>
							<rs-layer id="slider-9-slide-57-layer-7" class="slider-3-bg-image-3 tp-shape tp-shapewrapper" data-type="shape" data-rsp_ch="on" data-xy="x:r;xo:250px,250px,159px,159px;y:m;yo:250px,250px,155px,155px;" data-text="fw:100;" data-dim="w:245px,245px,150px,150px;h:245px,245px,150px,150px;" data-frame_0="x:left;o:1;tp:600;" data-frame_1="tp:600;e:power2.out;st:1410;sp:600;" data-frame_999="sX:0.7;sY:0.7;o:0;rZ:0deg;tp:600;e:back.in;st:6500;sp:500;" data-frame_999_mask="u:t;" style="z-index:11;background-color:rgba(255,255,255,0.05);">
							</rs-layer>
							<rs-layer id="slider-9-slide-57-layer-8" class="slider-3-image-volunteer-3" data-type="image" data-rsp_ch="on" data-xy="x:r;xo:337px,337px,199px,199px;y:m;yo:228px,228px,138px,138px;" data-text="l:22;" data-dim="w:79px,79px,73,73;h:69px,69px,60,60;" data-frame_0="sX:2;sY:2;tp:600;" data-frame_0_mask="u:t;" data-frame_1="tp:600;e:power2.out;st:1690;sp:2500;" data-frame_1_mask="u:t;" data-frame_999="x:-100%;tp:600;st:5500;sp:1500;" data-frame_999_mask="u:t;" style="z-index:12;"><img src="wp-content/uploads/revslider/slider-3/icon3.png" width="79" height="69" data-no-retina>
							</rs-layer>
							<rs-layer id="slider-9-slide-57-layer-9" class="slider-3-volunteer-3" data-type="text" data-color="rgba(131,131,131,1)" data-rsp_ch="on" data-xy="x:r;xo:289px,289px,156px,156px;y:m;yo:317px,317px,193px,193px;" data-text="w:nowrap,nowrap,normal,normal;s:16,16,12,12;l:40,40,30,30;fw:700;" data-dim="w:auto,auto,139px,139px;" data-frame_0="sX:2;sY:2;tp:600;" data-frame_0_mask="u:t;" data-frame_1="tp:600;e:power2.out;st:2020;sp:1020;" data-frame_1_mask="u:t;" data-frame_999="x:-100%;tp:600;st:5490;sp:1550;" data-frame_999_mask="u:t;" style="z-index:13;">ACCAMPAGNER LES <br> VICTIMES
							</rs-layer>
							<rs-layer id="slider-9-slide-57-layer-10" data-type="text" data-color="rgba(255,255,255,1)" data-rsp_ch="on" data-xy="x:r;xo:270px,270px,170px,167px;y:m;yo:-50px,-50px,-62px,-53px;" data-text="s:30,30,20,20;l:60,60,40,40;fw:300;" data-frame_0="y:-100%;o:1;tp:600;" data-frame_0_mask="u:t;" data-frame_1="tp:600;st:2290;sp:1380;" data-frame_1_mask="u:t;" data-frame_999="x:left;tp:600;st:6320;sp:680;" style="z-index:14;">Au centre du problem,
							</rs-layer>
							<rs-layer id="slider-9-slide-57-layer-11" class="slider-3-text" data-type="text" data-color="rgba(255,255,255,1)" data-rsp_ch="on" data-xy="x:r;xo:270px,225px,158px,168px;y:m;yo:0,-22px,-23px,-27px;" data-text="s:48,40,36,20;l:72,72,52,32;fw:700;" data-frame_0="x:left;o:1;tp:600;" data-frame_1="tp:600;e:power2.inOut;st:2640;sp:1340;" data-frame_999="x:left;skX:45px;tp:600;st:6560;sp:440;" style="z-index:15;">Améliorer
								les mécanismes de
							</rs-layer>
							<rs-layer id="slider-9-slide-57-layer-12" class="slider-3-text" data-type="text" data-color="rgba(255,255,255,1)" data-rsp_ch="on" data-xy="x:r;xo:270px,226px,161px,163px;y:m;yo:56px,36px,30px,8px;" data-text="s:48,40,36,20;l:72,72,52,32;fw:700;" data-frame_0="sX:0.9;sY:0.9;tp:600;" data-frame_1="tp:600;st:2840;sp:1390;" data-frame_999="x:left;tp:600;e:back.in;st:6770;sp:230;" style="z-index:16;">prise en
								charge psychosociale.
							</rs-layer>
						</rs-slide>
					</rs-slides>
				</rs-module>

				<script type="text/javascript">
					setREVStartSize({
						c: 'rev_slider_9_1',
						rl: [1240, 1024, 778, 480],
						el: [],
						gw: [1170, 1024, 767, 479],
						gh: [868, 768, 960, 720],
						type: 'standard',
						justify: '',
						layout: 'fullscreen',
						offsetContainer: '',
						offset: '',
						mh: "0"
					});
					var revapi9,
						tpj;
					jQuery(function() {
						tpj = jQuery;
						revapi9 = tpj("#rev_slider_9_1")
						if (revapi9 == undefined || revapi9.revolution == undefined) {
							revslider_showDoubleJqueryError("rev_slider_9_1");
						} else {
							revapi9.revolution({
								sliderLayout: "fullscreen",
								duration: 7000,
								visibilityLevels: "1240,1024,778,480",
								gridwidth: "1170,1024,767,479",
								gridheight: "868,768,960,720",
								spinner: "spinner0",
								perspectiveType: "local",
								responsiveLevels: "1240,1024,778,480",
								progressBar: {
									disableProgressBar: true
								},
								navigation: {
									mouseScrollNavigation: false,
									onHoverStop: false,
									bullets: {
										enable: true,
										tmp: "",
										style: "hesperiden",
										h_align: "left",
										v_align: "center",
										h_offset: 30,
										v_offset: 0,
										direction: "vertical"
									}
								},
								fallbacks: {
									allowHTML5AutoPlayOnAndroid: true
								},
							});
						}

					});
				</script>
				<script>
					var htmlDivCss = unescape("");
					var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
					if (htmlDiv) {
						htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
					} else {
						var htmlDiv = document.createElement('div');
						htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
						document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
					}
				</script>
				<script>
					var htmlDivCss = unescape("%0A%0A%0A");
					var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
					if (htmlDiv) {
						htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
					} else {
						var htmlDiv = document.createElement('div');
						htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
						document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
					}
				</script>
			</rs-module-wrap>
		</div>
		<!-- Next block  -->
		<section class="u-clearfix u-white u-section-2" id="sec-b65f">
			<div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
				<div class="u-clearfix u-gutter-30 u-layout-wrap u-layout-wrap-1">
					<div class="u-gutter-0 u-layout">
						<div class="u-layout-row">
							<div class="u-size-29">
								<div class="u-layout-col">
									<div class="u-size-30">
										<div class="u-layout-row">
											<div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-1">
												<div class="u-container-layout u-valign-bottom-lg u-valign-bottom-md u-valign-bottom-xl" src="#">
													<img class="u-expanded-width u-image u-image-1" src="wp-content/uploads/revslider/slider-3/image-distribution-vivre.jpeg" data-image-width="1621" data-image-height="1080">
												</div>
											</div>
											<div class="u-align-left u-container-style u-layout-cell u-palette-1-light-1 u-size-30 u-layout-cell-2">
												<div class="u-container-layout"></div>
											</div>
										</div>
									</div>
									<div class="u-size-30">
										<div class="u-layout-col">
											<div class="u-align-left u-container-style u-image u-layout-cell u-left-cell u-size-60 u-image-2" data-image-width="1118" data-image-height="1080">
												<div class="u-container-layout u-valign-top"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="u-size-31">
								<div class="u-layout-col">
									<div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-60 u-layout-cell-4">
										<div class="u-container-layout u-valign-top u-container-layout-4">
											<img class="u-expanded-width u-image u-image-3" style="border:8px solid #51741e;" src="wp-content/uploads/revslider/slider-3/photo-les-enfants.jpeg" data-image-width="1118" data-image-height="1080">
											<h2 class="u-text u-text-1">Objectif Global</h2>
											<ul style="font-size: 15px;">
												<li><i class="fa fa-circle" style="margin-right: 10px;color: #53761f;"></i>
													Améliorer les mécanismes de prise en charge psychosociale des
													personnes traumatisées en vue de l’introduction des approches
													psychosociales au sein des communautés du sud Kivu
												</li><br>
												<li><i class="fa fa-circle" style="margin-right: 10px;color: #53761f;"></i>
													Faciliter l’accès aux soins de santé de qualités aux victimes des
													violences sexuelles et celles traumatisées plus vulnérables de
													milieux reculés.
												</li><br>
												<li><i class="fa fa-circle" style="margin-right: 10px;color: #53761f;"></i>
													Renforcer les capacités des bénéficiaires pour un développement
													harmonieux des activités génératrices de revenus et d’autonomisation
													des femmes dans la communauté.
												</li>
											</ul>
											<a href="about-us/index.html" class="u-active-black u-border-none u-button-style u-hover-black u-palette-1-light-1 u-text-active-white u-text-hover-white u-text-white u-btn-2" data-animation-name="zoomIn" data-animation-duration="1500" data-animation-direction="" data-animation-delay="0">
												<b style="font-size: 14px;">Notre Histoire</b>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section>
			<div class="cards-1 section-gray">
				<div class="container">
					<div class="wpb_wrapper">
						<div class="iw-heading  font-normal style1 col-md-12 mb-5">
							<div class="row">
								<h3 class="col-md-10 iwh-title text-left" style="font-size:30px">Notre facons de rentre le monde  <br> meilleur</h3>
								<div class="col-md-2">
									<button class="stage-btn-submit">
										<a href="projects.php">Voir plus</a>
									</button>
								</div>
							</div>
						</div><br><br><br><br>
						<div style="margin-top: 5em" class="row">
							<?php if(count($projects) > 0): ?>
								<?php foreach($projects as $project): ?>
									<div class="col-md-4">
										<div class="card card-blog">
											<a href="project_details.php?id=<?= $project->project_id; ?>">
												<div class="card-image">
													<div> 
														<img class="img" src="admin/<?= $project->files_url ?>">
														<div class="card-caption"><?= substr($project->project_name, 0, 80)."..." ?></div>
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
							<?php else: ?>
								<h1 class="h1 text-center" id="pageHeaderTitle">Aucune actualité disponible pour l'instant</h1>
							<?php endif ?>
						</div>
					</div>
					<div class="container">
						<button class="stage-btn-submit">
							<a href="projects.php">Voir plus</a>
						</button>
					</div>
				</div>
			</div>
		</section>

		<!-- Nos projets par regions  -->
		<div class="">
			<div class="vc_row wpb_row vc_row-fluid vc_custom_1452055433606 vc_row-has-fill" style="margin-left:0;margin-right:0;background-size:100% auto">
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
											<div class="vc_column-inner vc_custom_1452055734809">
												<div class="wpb_wrapper">
													<div class="iw-heading style9  center-text">
														<h3 class="iwh-title" style="font-size:40px">Nos projets par
															regions.</h3>
														<div class="iwh-sub-title">Actuellement nous sommes plus basés
															dans l'EST de la RDC</div>
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
									<div class="server-location-block ">
										<div class="block-title"></div>
										<div class="iw-server-location-wrap site-view">
											<div class="image-map-preview col-sm-6">
												<div class="image">
													<img style="height: 100%;" src="wp-content/plugins/iw_composer_addons/assets/images/Provinces_et_Territoires_du_Republique_Democratique_du_Congo.png" alt="map" />
												</div>
												<div class="iw-map-pickers">
													<div data-post="995" data-position="0.7682512733446519x0.2773234427639986" class="map-picker theme-bg" style="left:72.825127334465%; top:30.7323442764%;"><span class="numerical-order">01</span></div>
													<div data-post="1015" data-position="0.567062818336163x0.5700743721320284" class="map-picker theme-bg" style="left:70.706281833616%; top:38.007437213203%;"><span class="numerical-order">02</span></div>
													<div data-post="1015" data-position="0.567062818336163x0.5700743721320284" class="map-picker theme-bg" style="left:64.706281833616%; top:33.007437213203%;"><span class="numerical-order">03</span></div>
												</div>
											</div>
											<div class="marker-info col-sm-6 col-sm">
												<div class="marker-info-995 col-sm">
													<span class="numerical-order theme-bg">01</span>
													<div class="marker-info-right">
														<div class="title iw-capital">AUTONOMISATION DES FEMMES ET
															FILLES / 2016 - 2017</div>
														<div class="description">
															<b class="project-desc">Projet d'autonomisation des femmes
																et filles à travers l'agriculture dans l'approche
																Framing for life.</b>
															<div class="simple-list  check-circle ">
																<ul>
																	<li> <i class="fa fa-check-circle"></i><span class="list-content"> Uvira</span></li>
																	<li> <i class="fa fa-check-circle"></i><span class="list-content"> Kalehe</span></li>
																	<li> <i class="fa fa-check-circle"></i><span class="list-content"> Kabare</span></li>
																</ul>
															</div>
															&nbsp;
														</div>
													</div>
												</div>
												<div class="marker-info-1015 col-sm">
													<span class="numerical-order theme-bg">02</span>
													<div class="marker-info-right">
														<div class="title iw-capital">REINSERTION ECONOMIQUE / 2015 -
															2018</div>
														<div class="description">
															<b class="project-desc">Projet de réalisation des activités
																de réinsertion économique pour le programme conjoint de
																lutte contre l'impunité, d'appui aux victimes des
																violences basées sur le genre et l'autonomisation des
																femmes et filles.</b>
															<div class="simple-list  check-circle ">
																<ul>
																	<li> <i class="fa fa-check-circle"></i><span class="list-content"> Bukavu</span></li>
																	<li> <i class="fa fa-check-circle"></i><span class="list-content"> Kalehe</span></li>
																	<li> <i class="fa fa-check-circle"></i><span class="list-content"> Kamituga</span></li>
																	<li> <i class="fa fa-check-circle"></i><span class="list-content"> Minova</span></li>
																</ul>
															</div>
															&nbsp;
														</div>
													</div>
												</div>
												<div class="marker-info-1015 col-sm">
													<span class="numerical-order theme-bg">03</span>
													<div class="marker-info-right">
														<div class="title iw-capital">RENFORCEMENT DE LA COHESION SOCIAL
															/ 2017 - 2018</div>
														<div class="description">
															<b class="project-desc">Projet d'appui au renforcement de la
																cohésion sociale par l'installation/équipement de deux
																radios communautaires et le renforcement /création des
																structures locales de gestion des conflits, dans les
																groupements de: </b>
															<div class="simple-list  check-circle ">
																<ul>
																	<li> <i class="fa fa-check-circle"></i><span class="list-content"> Kashenyi / Kamanyola
																		</span></li>
																	<li> <i class="fa fa-check-circle"></i><span class="list-content"> Itara Luvungi </span>
																	</li>
																</ul>
															</div>
															&nbsp;
														</div>
													</div>
												</div>
											</div>
											<div class="">
												<div class="">
													<button class="more-project">
														<a href="Nosprojets/index.html">Plus de Projet</a>
													</button>
													<button class="stage-btn-submit">
														<a href="article.php">Nos articles</a>
													</button>
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
		</div>
		<!-- Nos projets par regions  -->
		
		<!-- Nos sponsor et leur about  -->
		<section>
			<main class="grid container">
				<div class="content">
					<h2 class="text-left">Nos dévoués sponsors
					</h2>
					<h6 class="text-3-5 appear-animation" style="font-size: 14px;">
						Grâce à vous et à votre soutien, les actions<br> menées en faveur des centaines de<br> population ne
						pourraient<br> être aussi efficaces.
					</h6>
				</div>
				<div class="whole-card">
					<div class="wrapper-sponsor">
						<a href="#">
							<img class="d-inline-block img-fluid py-5 my-5" src="wp-content/uploads/revslider/slider-3/dmcdd.jpg" alt="" />
						</a>
						<a href="#">
							<img class="d-inline-block img-fluid py-5 my-5" src="wp-content/uploads/revslider/slider-3/pnud.jpg" alt="" />
						</a>
						<a href="#">
							<img class="d-inline-block img-fluid py-5 my-5" src="wp-content/uploads/revslider/slider-3/fhrdc.jpg" alt="" />
						</a>
						<a href="#">
							<img class="d-inline-block img-fluid py-5 my-5" src="wp-content/uploads/revslider/slider-3/warchild.jpg" alt="" />
						</a>
						<a href="#">
							<img class="d-inline-block img-fluid py-5 my-5" src="wp-content/uploads/revslider/slider-3/unfpa.jpg" alt="" />
						</a>
						<a href="#">
							<img class="d-inline-block img-fluid py-5 my-5" src="wp-content/uploads/revslider/slider-3/fhi360.jpg" alt="" />
						</a>	
						</div>
				</div>
			</main>
		</section>
		<!-- Nos sponsor et leur about  -->

		<!-- Footer  -->
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
									<li id="menu-item-476" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-476"><a href="projects.php">Nos projets</a></li>
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
		<!-- Footer  -->
	</div>
	</div>
	</div>
</body>
	<!-- Developed by: Ary aristote -->
	<!-- Email: aryaristote@gmail.com -->
	<!-- Phone: (+243) 990 413 132 -->
	<!-- 2022 / Avril -->
</html>