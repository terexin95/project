<!DOCTYPE html>
<html lang="ru">

<head>

	<meta charset="utf-8">
	<!-- <base href="/"> -->

	<title><?php bloginfo('name') ?></title>
	<meta name="description" content="">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<!-- Template Basic Images Start -->
	<meta property="og:image" content="path/to/image.jpg">


	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Oswald:300" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Oswald:400,500,600,700" rel="stylesheet">

	
	

	<link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">


	<!-- Template Basic Images End -->
	
	<!-- Custom Browsers Color Start -->
	<meta name="theme-color" content="#000">
	<!-- Custom Browsers Color End -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-122357803-1"></script>

<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'UA-122357803-1');
</script>
<script>
document.addEventListener( 'wpcf7mailsent', function( event ) {
if ( '106' == event.detail.contactFormId ) {
  ga('send', 'event', 'Feedback', 'Submit');
 }
if ( '103' == event.detail.contactFormId ) {
  ga('send', 'event', 'Feedback', 'Submit');
 }
}, false );
</script>

	<!-- Yandex.Metrika counter -->
<script>
		(function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter49603042 = new Ya.Metrika2({
                    id:49603042,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/tag.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks2");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/49603042" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>
	jQuery(document).ready(function ($) {
		$('#button').click(function () {
			yaCounter49603042.reachGoal('btn-click');
      console.log('цель 1');
		});
		$('#open-form-madal').click(function () {
			yaCounter49603042.reachGoal('btn-click2');
      console.log('цель 2');
		});
	});

</script>

<!-- /Yandex.Metrika counter -->





	<?php wp_head(); ?>



</head>

<body>

	<!-- Custom HTML -->

	<div class="header" id="top">
		<div class="owr-bg">
			<div class="bg-color-black">
			<div class="container">
				<div class="row" style="border-bottom: 1px solid rgba(240, 227, 213, .7);padding-top: 30px;">
					<div class="col-md-4 col-sm-6">
						<!--<div class="block-phone fl-l">
							<i class="fa fa-phone" aria-hidden="true"></i>
							<h3><span>
							//<?php $options//=get_option('sample_theme_options');

							//echo $options['phtext']
							 ?>

								<br></span>Звоните нам</h3>
						</div>-->
					</div>
					<div class="col-md-4 md-none">
						<div class="block-img">
							<a href="/"><?php the_custom_logo(); ?></a>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="block-phone fl-r">
							<h3><span>

								<?php $options=get_option('sample_theme_options');

							echo $options['emtext']
							 ?>

								<br></span>Звоните нам</h3>
							<i class="fas fa-mobile-alt" style="margin-right: 0;margin-left: 45px;"></i>
						</div>
					</div>
					<div class="col-sm-12 logo-sm-bock">
						<div class="block-img">
							<a href="/"><?php the_custom_logo(); ?></a>
						</div>
					</div>
				</div>
				<nav class="navbar navbar-expand-lg navbar-light" style="padding: 0;margin: 0;">
							  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
							    <i class="fas fa-list fz30px"></i>
							  </button>
							  <div class="collapse navbar-collapse " id="navbarTogglerDemo01">
							    <ul class="navbar-nav mr-auto mt-2 mt-lg-0 navbar-li-a">
							      <li class="nav-item">
							        <a class="nav-link" href="#Готовые-пещеры">Готовые пещеры</a>
							      </li>
							      <li class="nav-item">
							        <a id="open-form-madal" class="nav-link" href="#" data-toggle="modal" data-target="#exampleModal">Стоимость соляной пещеры</a>
							      </li>
							      <li class="nav-item">
							        <a class="nav-link" href="#Франшиза">Франшиза</a>
							      </li>
							      <li class="nav-item">
							        <a class="nav-link" href="#Как-мы-работаем">Как мы работаем</a>
							      </li>
							      <li class="nav-item">
							        <a class="nav-link" href="#Контакты" style="border-right: none" >Контакты</a>
							      </li>
							    </ul>
							  </div>
							</nav>
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-12 p0m0">
									<div class="block-linea">
										<div class="linea-item">
											<img src="https://image.ibb.co/bSNRnT/linea4.png">
											
											<a href="#Строительство-пещер"><span><i class="far fa-building"></i> Строительство <br> пещер</span></a>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 p0m0">
									<div class="block-linea jsright">
										<div class="linea-item-right">
											<img src="https://image.ibb.co/f3jiZ8/linea6.png">
											<a href="https://xn--80aaoa1amfllc8g1cc.xn--90ais/" target="_blank"><span><i class="fas fa-map-marker-alt"></i> Хочу сходить</span></a>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="block-text-top">
										<p><strong>Профессиональное строительство соляных пещер</strong></p>
									</div>
								</div>
							</div>
						</div>
			</div>
		</div>

	</div>