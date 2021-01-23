<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="img/favicon.ico">
		<title>"BTG" - Buisness Trans Group</title>
		<link rel="stylesheet" href="slick/slick.css">
		<link rel="stylesheet" href="slick/slick-theme.css">
		<link rel="stylesheet" href="css/animate.css">
		<link href="css/bootstrap-grid.min.css" rel="stylesheet">
		<link rel="stylesheet" href="css/style.css">
		</head>
	<body>

		<?php $part = 'services'; ?>

		<!-- Yandex.Metrika counter --> <script> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter48102170 = new Ya.Metrika({ id:48102170, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://cdn.jsdelivr.net/npm/yandex-metrica-watch/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/48102170" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->

		<div class="header header-page">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-12 col-md-4 col-lg-3 col-xl-3">
						<div class="header-text">
							Импортно-экспортная компания
						</div>
					</div>
					<!-- /.col-md-4 -->
					<div class="col-12 col-md-4 col-lg-4 col-xl-5">
						<div class="header-logo">
							<a href="index.php">
								<div class="header-logo_a">
									<img src="img/header/header-logo.png" alt="logo">
								</div>
							</a>
						</div>
					</div>
					<!-- /.col-md-4 -->
					<div class="col-12 col-md-4 col-lg-5 col-xl-4">
						<div class="header-contacts">
							<div class="header-contacts__phone">
								<a href="tel:89619962503">8 (961) 996-25-03</a>
							</div>
							<button class="button header-button header-button__button" onclick="yaCounter48102170.reachGoal('topBtn'); return true;">
								<img class="hidden-notmobile" src="img/header/icon-phone.png" alt="phone">
								<span class="hidden-mobile">Заказать звонок</span>
							</button>
						</div>
					</div>
					<!-- /.col-md-4 -->
				</div>
				<!-- /.row -->

				<a class="b-link hidden-notmobile" href="#">
					<span></span>
				</a>
				<div class="b">
					<ul>
						<li><a href="http://annaesseker.ru/glo-project/btg/index.php">О компании</a></li>
								<li><a href="http://annaesseker.ru/glo-project/btg/international.php">Услуги</a></li>
								<li><a href="#">Новости</a></li>
								<li><a href="#">Калькулятор</a></li>
								<li><a href="#">Контакты</a></li>
					</ul>
					<div class="hidden-notmobile search-mobile">
						<a class="a_search search-mobile_a_search" href="#"></a>
						<form class="a_search__box search-mobile__box"><input type="search" placeholder="Поиск..."></form>
					</div>
				</div>

					<div class="header-menu hidden-mobile">
						<div class="container">
							<ul>
								<li><a class="a_f" href="http://annaesseker.ru/glo-project/btg/index.php">О компании</a></li>
								<li><a <?php if ($part == 'services') {echo 'class = "chosen"';} ?>  class="a_s" href="http://annaesseker.ru/glo-project/btg/international.php">Услуги</a></li>
								<li><a class="a_t" href="#">Новости</a></li>
								<li><a class="a_fo" href="#">Калькулятор</a></li>
								<li><a class="a_fi" href="#">Контакты</a></li>
								<li><a class="a_search" href="#"></a>
								<form class="a_search__box"><input type="search" placeholder="Поиск..."></form>
								</li>
							</ul>
					</div>
				</div>
			</div>
			<!-- /.container -->
		</div>
		<!-- /.header -->
