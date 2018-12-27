<!DOCTYPE html>
<html lang="ru">

<head>

	<meta charset="utf-8">
	<!-- <base href="/"> -->

	<title><?php bloginfo('name'); ?></title>
	<meta name="description" content="">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<!-- Template Basic Images Start -->
	<meta property="og:image" content="path/to/image.jpg">
	<link rel="icon" href="img/favicon/favicon.ico">
	<link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon-180x180.png">
	<!-- Template Basic Images End -->
	
	<!-- Custom Browsers Color Start -->
	<meta name="theme-color" content="#000">
	<!-- Custom Browsers Color End -->

	<?php wp_head(); ?>
</head>

<body>

	<!-- Custom HTML -->

	<header>
		<div class="container">
			<div class="row">
				<div class="col-9 col-lg-6 col-md-6">
					<a href="/"><?php bloginfo('name'); ?></a>
				</div>
				<div class="col-lg-6 col-3 col-md-6">
					<div class="menu">
						<ul>
							<li><a href="#">Прогнозы</a></li>
							<li><a href="#">Рейтинг Букмейкеров</a></li>
							<li><a href="#">Бонусы</a></li>
							<li><a href="#">Новости</a></li>
						</ul>
					</div>

					<div class="mobile-menu">
						<button type="button" id="toggleButton"><i class="fas fa-bars"></i></button>
					</div>
				</div>
			</div>
		</div>
	</header>