<!DOCTYPE html>
<html lang="ru">
	<head>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112910750-2"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-112910750-2');
		</script>
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<script>
		  (adsbygoogle = window.adsbygoogle || []).push({
		    google_ad_client: "ca-pub-9976536531352055",
		    enable_page_level_ads: true
		  });
		</script>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="Веб-студия Артёма Сафонова. Создание сайтов под ключ">
		<meta name="keywords" content="создать сайт, веб-студия полтава, сайт под ключ, сделать сайт полтава, сайт полтава, веб студия, веб разработка полтава, landing page, создание сайтов, " />
		<meta name="author" content="Artem Safonov">
		<title>Веб-студия Артёма Сафонова</title>
		<!--Localization -->
		<link rel="alternate" hreflang="x-default" href="http://webjedi.com.ua" />
		<!-- Bootstrap grid CSS -->
		<link href="css/bootstrap-grid.min.css" rel="stylesheet">
		<!-- Custom styles for this template -->
		<link href="css/main.css" rel="stylesheet">
	</head>
	<body>
		<div id="page-preloader" class="preloader">
			<div class="loader"></div>
		</div>
		<div id="project-bar" class="project-bar">
			<nav class="hamburger-menu navbar">
				<div class="bar">
					<a class="navbar-toggler" href="javascript:void(0);" onclick="menuResponsive()">
						<div id="bar" class="bar-icon navbar-toggler-icon" onclick="iconTransform(this)">
						  <div class="bar1"></div>
						  <div class="bar2"></div>
						  <div class="bar3"></div>
						</div>
					</a>
					<div class=" navbar-collapse" id="navbarToggler">
					    <ul class="navbar-nav mr-auto">
					      	<li class="nav-item active">
					        	<a class="nav-link" href="index.php#project-main" onclick="currentSlide(1)">Главная <span class="sr-only">(current)</span></a>
					      	</li>
					      	<li class="nav-item">
						        <a class="nav-link" href="index.php#project-service" onclick="currentSlide(2)">Прайс-лист<span class="sr-only">(current)</span></a>
						     </li>
						    <li class="nav-item">
						        <a class="nav-link" href="index.php#project-about" onclick="currentSlide(3)">О нас<span class="sr-only">(current)</span></a>
						     </li>
					    	<li class="nav-item">
					        	<a class="nav-link" href="#project-contacts" onclick="currentSlide(4)">Контакты<span class="sr-only">(current)</span></a>
					    	</li>
					    </ul>
					</div>
				</div>
			</nav>
			<div class="content"> © 2017. Made with love by Artem Safonov
			</div>
		</div>
		<div id="page" class="page">
			<div id="project-main" class="one-page active" style="background-image: url(images/bg2.jpg);">
					<!-- Social contacts menu -->
				<?php require 'social-contacts-menu.php'; ?>
				<!-- Social contacts menu end-->
				<div class="row">
					<div class="col-md"></div>
					<div class="col-md-auto col-sm-6">
						<div class="container">
							<div class="project-heading">
								<h1>Веб-студия Артёма Сафонова</h1>
								<p class="lead">Мы не просто создаём сайты и интернет-магазины, мы творим и стремимся к совершенству.</p>
							</div>
						</div>
					</div>
					<div class="col-md"></div>
					<div class="col-md"></div>
				</div>
				
				<!-- Content-page -->
				<div class="container">
					<div class="col-md-3"></div>
					<div class="col-md-auto col-sm-8">
						<ul class="project-main_content">
							<li>Разработка web-сайтов от идеи до запуска Вашего бизнеса в Internet</li>
							<li>Web-дизайн, верстка и seo-оптимизация интернет сайтов</li>
							<li>У нас нет офиса, поэтому мы предлагаем Вам цену на 20% ниже</li>
							<li>Я, Артём Сафонов, лично отвечаю за каждый сделанный нами сайт</li>
							<li>Сроки выполнения заказа от 1 дня. Обсуждается индивидуально</li>
						</ul>
					</div>
					<div class="col-md-3"></div>
					<div class="col-md-3"></div>
				</div>
				<div class="row justify-content-center align-items-center content-cms">
					<div class="col-md-auto content-cms-item">
						<i class="fab fa-wordpress"></i>
						<span>Wordpress</span>
					</div>
					<div class="col-md-auto content-cms-item">
						<i class="fab fa-opencart"></i>
						<span>Opencart</span>
					</div>
					<div class="col-md-auto content-cms-item">
						<i class="fab fa-joomla"></i>
						<span>Joomla</span>
					</div>
					<div class="col-md-auto content-cms-item">
						<i class="fab fa-html5"></i>
						<span>html/css</span>
					</div>
				</div>
			</div>

			<!-- Page 02 -->
			<div id="project-service" class="one-page" style="background-image: url(images/bg.jpg); opacity= .6 ;">
				<!-- Social contacts menu -->
				<?php require 'social-contacts-menu.php'; ?>
				<!-- Social contacts menu end-->
				<div class="row">
					<div class="container project-service_content">
						<div class="col-md">
							<div class="content-container justify-content-between align-items-center">
								<div class="content-container_block">
									<h3>Landing page</h3>
									<img src="images/landing-199x145.jpg" alt="landing-page">
									</div>
								<div class="content-container_block service-description">
									<p>Одностраничный сайт (Landing Page), соответствующий всем современным требованиям. Используется как сайт-визитка или для представления определенного товара(услуги) потенциальным покупателям</p>
								</div>
								<div class="content-container_block">
									<div class="price">от 3000 грн</div>
									<div class="btn btn-primary"><a href="#project-contacts" onclick="currentSlide(4)">Заказать</a></div>
								</div>
							</div>
						</div>
						<div class="col-md">
							<div class="content-container justify-content-between align-items-center">
								<div class="content-container_block">
									<h3>Рекламный многостраничный сайт</h3>
									<img src="images/public-199x150.jpg" alt="рекламный сайт">
									</div>
								<div class="content-container_block service-description">
									<p>Многостраничный сайт с галереями, разнообразными эффектами и многофункциональной админпанелью</p>
								</div>
								<div class="content-container_block">
									<div class="price">от 5500 грн</div>
									<div class="btn btn-primary"><a href="#project-contacts" onclick="currentSlide(4)">Заказать</a></div>
								</div>
							</div>
						</div>
						<div class="col-md">
							<div class="content-container justify-content-between align-items-center">
								<div class="content-container_block">
									<h3>Корпоративный сайт</h3>
									<img src="images/corporate-199x150.jpg" alt="корпоративный сайт">
									</div>
								<div class="content-container_block service-description">
									<p>Корпоративный многостраничный сайт с большим количеством контента, который необходимо постоянно самостоятельно обновлять</p>
								</div>
								<div class="content-container_block">
									<div class="price">от 7500 грн</div>
									<div class="btn btn-primary"><a href="#project-contacts" onclick="currentSlide(4)">Заказать</a></div>
								</div>
							</div>
						</div>
						<div class="col-md">
							<div class="content-container justify-content-between align-items-center">
								<div class="content-container_block">
									<h3>Интернет-магазин</h3>
										<img src="images/shop-199x150.jpg" alt="интернет-магазин">
									</div>
								<div class="content-container_block service-description">
									<p>Полноценный интернет-магазин, построенный на CRM-системе со всевозможными функциями, мультиязычный, работа с БД</p>
								</div>
								<div class="content-container_block">
									<div class="price">от 10000 грн</div>
									<div class="btn btn-primary"><a href="#project-contacts" onclick="currentSlide(4)">Заказать</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row"></div>
			</div>

<!-- Page 03 -->
			<div id="project-about" class="one-page" style="background-image: url(images/bg3.jpg);">
				<!-- Social contacts menu -->
				<?php require 'social-contacts-menu.php'; ?>
				<!-- Social contacts menu end-->
				<div class="row">
					<div class="col-md"></div>
					<div class="col-md-auto col-sm-6">
						<div class="container">
							<div class="project-heading">
								<h1>O нас</h1>
								<p class="lead">Меня зовут Артём. В 2016 году я начал заниматься веб-разработкой и меня это дело захватило целиком и полностью!</p>
								<p>В 2017г. я решил собрать команду профессионалов, чтобы создавать действительно красивые и технологичные сайты. Каждый день мир меняется и мы идём в ногу со временем. Будем рады создать и для Вас что-нибудь уникальное и интересное!</p>
							</div>
						</div>
					</div>
					<div class="col-md"></div>
					<div class="col-md"></div>
				</div>
				<div class="row"></div>
			</div>

<!-- Page 04 -->
			<div id="project-contacts" class="one-page" style="background-image: url(images/bg4.jpg);">
				<!-- Social contacts menu -->
				<?php require 'social-contacts-menu.php'; ?>
				<!-- Social contacts menu end-->
				<div class="row">
					<div class="container">
						<div class="project-heading">
							<h1>Контакты</h1>
							<ul class="project-contacts-content" >
								<li><span class="contacts-content"><i class="fas fa-map-marker-alt"></i> Украина, г.Полтава</span></li>
								<li><span class="contacts-content"><i class="fa fa-phone" aria-hidden="true"></i> +38 066 545 84 41</span></li>
								<li><span class="contacts-content"><i class="far fa-clock"></i>
								Время работы: ежедневно с 9 до 19</span></li>
								<li><span class="contacts-content"><i class="fas fa-at"></i><a href="mailto:xortica87@gmail.com"> E-mail: xortica87@gmail.com</a></span></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- Contact Form -->
				<?php require "contact-form.php"; ?>
			</div>
			
			<!-- Vertical page-numbers -->
			<ul class="vertical-nav-numbers">
				<li class=" number" onclick="currentSlide(1)"></li>
				<li class="number" onclick="currentSlide(2)"></li>
				<li class="number" onclick="currentSlide(3)"></li>
				<li class="number" onclick="currentSlide(4)"></li>
			</ul>
		<!-- Slider buttons -->
			<div id="slider-nav" class="slider-nav">
				<div class="move-right move" onclick="plusSlide(1)">
					<i class="fa fa-angle-right" aria-hidden="true"></i>
				</div>
				<div class="move-left move" onclick="plusSlide(-1)">
					<i class="fa fa-angle-left" aria-hidden="true"></i>
				</div>
			</div>
		</div>
		<!-- Confirm contact form popup -->
		<div class="confirm" id="popup-page">
			<div class="confirm_message">
				Спасибо за заявку! Скоро мы с Вами свяжемся!
			</div>
		</div>
		
		<!-- Bootstrap core JavaScript ================================================== -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script>window.jQuery || document.write('<script src="/js/jquery-3.2.1.slim.min.js"><\/script>')</script>
		<script defer src="https://use.fontawesome.com/releases/v5.0.2/js/all.js"></script>
		<script src='js/main.js' ></script>
		<script src="https://code.jquery.com/jquery-1.11.2.min.js">
		<script src="https://swc.cdn.skype.com/sdk/v1/sdk.min.js" async defer></script>
		<script src="js/preloader.js"></script>
		<!-- Form send mail script ajax -->
		<script src="js/common.js"></script>
	</body>
</html>