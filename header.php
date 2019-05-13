<?php
	if (!isset($page_title)) {
		$page_title = 'Заголовок страницы';
	}
?>

<!DOCTYPE html>
<html lang="ru"><!-- bloginfo('language') -->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?= $page_title ?> - BIO-S</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.0/css/lightbox.min.css">
	<link rel="stylesheet" href="css/jcf.css">
	<link rel="stylesheet" href="css/main.css">
	<?php //wp_head(); ?>
	<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script> -->
</head>
<body>
	<div class="wrapper push">
		<div class="page">
			<header class="header">
				<div class="container">
					<div class="header-inner">
						<div class="header-block">
							<a href="#" class="logo">
								<img src="img/logo.png" alt="">
							</a>
						</div>
						<div class="header-block d-none d-md-block">
							<div class="work-time-block">
								<div class="b-icon">
									<i class="icon-clock"></i>
								</div>
								<div class="b-text">Время работы: <br>пн-пт с 9:00 до 18:00, сб-вс с 10:00 до 17:00</div>
							</div>
						</div>
						<div class="header-block d-none d-sm-block">
							<a href="tel:+74957218937" class="phone-link sm-no-icon">
								<div class="l-icon">
									<i class="icon-phone"></i>
								</div>
								<div class="l-text">
									<span>+7(495)</span> 721 89 37
								</div>
							</a>
						</div>
						<div class="header-block d-none d-md-block">
							<button class="btn btn-light">
								<i class="icon-bell"></i>
								<span>Заказать звонок</span>
							</button>
						</div>
						<div class="header-block d-md-none">
							<div class="menu-opener">
								<div class="bar"></div>
								<div class="bar"></div>
								<div class="bar"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="top-nav-line d-none d-md-block">
					<div class="container">
						<ul class="top-nav">
							<li><a href="#">О компании</a></li>
							<li><a href="#">Цены</a></li>
							<li><a href="#">Монтаж и доставка</a></li>
							<li><a href="#">Гарантии и сертификаты</a></li>
							<li><a href="#">Калькулятор</a></li>
							<li><a href="#">Контакты</a></li>
						</ul>
					</div>
				</div>
			</header>