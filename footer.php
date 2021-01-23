		<section class="feedback">
			<div class="container">
				<h2 class="feedback-title">
					Запрос на услуги
				</h2>
				<div class="feedback-form">
					<form id="fform" class="form" name="fform" onsubmit="yaCounter48102170.reachGoal('bottomForm'); return true;">
						<div class="row">
							<div class="col-12 col-sm-6">
								<input type="text" name="from" class="feedback-input_img" placeholder="Откуда" size="31" required>
							</div>
							<div class="col-12 col-sm-6">
								<input type="text" name="where" class="feedback-input_img" placeholder="Куда" size="31" required>	
							</div>
							<div class="col-12 col-sm-6">
								<input type="text" name="name" class="feedback-input" placeholder="Как вас зовут?" size="35" required>
							</div>
							<div class="col-12 col-sm-6">
								<input type="text" name="phone" class="feedback-input" placeholder="Номер телефона" size="35" required>
							</div>
						</div>
						<button class="button button-o feedback-button">Получить расчет</button>
						<div class="feedback-text">
							Нажав кнопку «Получить расчет», я даю согласие на обработку моих персональных данных.
						</div>
					</form>
				</div>
			</div>
		</section>

		
		<div class="overl js-overlay-thank-you">
			<div class="popup_o js-thank-you">
				<h2 class="popup-title_o">
					Спасибо за заявку!
				</h2>
				<span>(Для закрытия окна щелкните в любом месте экрана)</span>
				<div class="popup-close_o js-close-thank-you">&times;</div>
			</div>
		</div>



		<div class="over js-overlay-thank-you_f">
			<div class="popup_over js-thank-you">
				<h2 class="popup-title_over">
					Ваш комментарий отправлен!
				</h2>
				<span>(Для закрытия окна щелкните в любом месте экрана)</span>
				<div class="popup-close_over js-close-thank-you_f">&times;</div>
			</div>
		</div>



		<div class="overlay">
			<div class="popup">
				<div class="popup-title">
					Быстрая заявка
				</div>
				<div class="popup-close">
					&times;
				</div>
				<div class="popup-form">
					<form id="mform" name="mform">
						<div class="row">
							<div class="col-12 col-sm-6">
								<input type="text" name="from" class="popup-input_img" placeholder="Откуда" size="31" required>
							</div>
							<div class="col-12 col-sm-6">
								<input type="text" name="where" class="popup-input_img" placeholder="Куда" size="31" required>	
							</div>
							<div class="col-12 col-sm-6">
								<input type="text" name="name" class="popup-input" placeholder="Как вас зовут?" size="35" required>
							</div>
							<div class="col-12 col-sm-6">
								<input type="text" name="phone" class="popup-input" placeholder="Номер телефона" size="35" required>
							</div>
						</div>
						<button class="button button-o popup-button">Заказать звонок</button>
						<div class="popup-text">
							Нажав кнопку «Заказать звонок»,<br>я даю согласие на обработку моих персональных данных.
						</div>
					</form>
				</div>
			</div>
		</div>


		<div class="ov">
			<div class="modal">
				<div class="modal-title">
					Заказать звонок
				</div>
				<div class="modal-close">
					&times;
				</div>
				<div class="modal-form">
					<form id="ovform" name="ovform" onsubmit="yaCounter48102170.reachGoal('topForm'); return true;">
						<div class="row">
							<div class="col-12 col-sm-6">
								<input type="text" name="name" class="modal-input" placeholder="Как вас зовут?" size="35" required>
							</div>
							<div class="col-12 col-sm-6">
								<input type="text" name="phone" class="modal-input" placeholder="Номер телефона" size="35" required>
							</div>
						</div>
						<button class="button button-o modal-button">Заказать звонок</button>
						<div class="modal-text">
							Нажав кнопку «Заказать звонок»,<br>я даю согласие на обработку моих персональных данных.
						</div>
					</form>
				</div>
			</div>
		</div>

		<div class="footer">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-12 col-sm-5 col-lg-2">
						<a href="index.php"><img src="img/footer/footer-logo-1.png" alt="logo"></a>
					</div>
					<div class="col-12 col-sm-1 col-lg-7">
						<div class="footer-menu hidden-mobile">
							<ul>
								<li><a href="http://annaesseker.ru/glo-project/btg/index.php">О компании</a></li>
								<li><a href="http://annaesseker.ru/glo-project/btg/international.php">Услуги</a></li>
								<li><a href="#">Новости</a></li>
								<li><a href="#">Калькулятор</a></li>
								<li><a href="#">Контакты</a></li>
							</ul>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-lg-3">
						<div class="footer-text">
							Создание сайта:
							<img src="img/footer/footer-logo-2.png" alt="logo">
						</div>
					</div>
				</div>
			</div>
		</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/jquery.maskedinput.js"></script>

			<script src="js/wow.min.js"></script>
			<script>
				new WOW().init();
			</script>

			<script>
				$(document).ready(function(){
					var link = $('.b-link');
					var link_active = $('.b-link_active');
					var b = $('.b');
					var nav_link = $('.b a');
					link.click(function(e){
						e.preventDefault();
						link.toggleClass('b-link_active');
						b.toggleClass('b_active');
						$('.a_search').on("click", function(k){
						k.preventDefault();
						$('.a_search__box').show();
						});
					});
					// nav_link.click(function(){
					// 	link.toggleClass('b-link_active');
					// 	b.toggleClass('b_active');
					// });
				});
			</script>

			<script>

				$(document).ready(function(){

					$('.a_search').on("click", function(){
						$('.a_search__box').fadeToggle();
						});

				});
				
				$(document).ready(function(){

				$('.popup-close_o').on("click", function(){
					$('.overl').hide();
				});

			});

				$(document).ready(function(){

				$('.popup-close_over').on("click", function(){
					$('.over').hide();
				});

			});


				$(document).ready(function(){

					$('.main__button').on("click", function(){
						$('.overlay').show();
					});
					$('.popup-close').on("click", function(){
						$('.overlay').hide();
					});

				});


				$(document).ready(function(){

					$('.plane__button').on("click", function(){
						$('.overlay').show();
					});
					$('.popup-close').on("click", function(){
						$('.overlay').hide();
					});

				});

				$(document).ready(function(){

					$('.header-button__button').on("click", function(){
						$('.ov').show();
					});
					$('.modal-close').on("click", function(){
						$('.ov').hide();
					});

				});
			</script>


			<script src="simplebox_util.js"></script>
			<script>
			(function(){
			var boxes=[],els,i,l;
			if(document.querySelectorAll){
			els=document.querySelectorAll('a[rel=simplebox]');	
			Box.getStyles('simplebox_css','simplebox.css');
			Box.getScripts('simplebox_js','simplebox.js',function(){
			simplebox.init();
			for(i=0,l=els.length;i<l;++i)
			simplebox.start(els[i]);
			simplebox.start('a[rel=simplebox_group]');			
			});
			}
			})();</script>


	</body>
</html>