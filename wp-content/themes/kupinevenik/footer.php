<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

		</div><!-- .col-full -->
	</section><!-- #content -->

	<?php if( is_front_page() ) { ?>
		<section class="section">
				<div class="container">
						<h2 class="abstract">Цветочная мастерская «НеВеник»: живые букеты, которые радуют!</h2>
				</div>
				<div class="container">
					<div class="row center">
							<p class="lead">Цветы созданы для того, чтобы их дарить!</p>
							<div class="col s12 m3">
									<div class="icon-block">
											<i class="fa fa-check fa-4x" aria-hidden="true"></i>
											<p>День рождения любимой или юбилей близкого человека? Надо купить цветы, они порадуют больше всего!</p>
									</div>
							</div>

							<div class="col s12 m3">
									<div class="icon-block">
											<i class="fa fa-check fa-4x" aria-hidden="true"></i>
											<p>Новый год, День влюбленных, 23 февраля, 8 марта или любой другой календарный праздник? Купить букет цветов – значит, решить проблему подарка.</p>
									</div>
							</div>

							<div class="col s12 m3">
									<div class="icon-block">
											<i class="fa fa-check fa-4x" aria-hidden="true"></i>
											<p>Семейный праздник, и надо порадовать родителей чем-то особенным? Закажите особенный подарок, который скажет о ваших эмоциях.</p>
									</div>
							</div>

							<div class="col s12 m3">
									<div class="icon-block">
											<i class="fa fa-check fa-4x" aria-hidden="true"></i>
											<p>Необходимо загладить вину? Цветы лечат душевные раны.</p>
									</div>
							</div>
					</div>
			</div>
		</section>

		<section class="section">
				<div class="container">
						<h2 class="abstract">Знаете ли вы?</h2>
				</div>
				<div class="container">
					<div class="row">
						<p>По поводу или без него получить в подарок букет живых цветов хотело бы абсолютное большинство жителей Санкт-Петербурга! Социологический опрос целевой аудитории показал:</p>
							<ul>
								<li>Матери всегда рады цветам от детей.</li>
								<li>Девушки и жены предпочтут цветы большинству подарков.</li>
								<li>У вас маленькая дочь? Маленькие принцессы ждут цветы не меньше, чем взрослые королевы – малышки уверенно отвечали: «Да», - на вопрос о том, хотели бы они получить такой подарок от папы или нет.</li>
								<li>Начальники с удовольствием принимают букеты от подчиненных на юбилеи и праздники.</li>
								<li>Вопреки стереотипам, большинство мужчин с радостью примут в подарок от любимой красивый букет!</li>
							</ul>
							<p>И вы все еще думаете, что купить?...</p>
					</div>
				</div>
		</section>

		<section class="section">
				<div class="container">
						<h2 class="abstract">Что предлагаем мы?</h2>
				</div>
				<div class="container">
					<div class="row">
							<ul>
								<li>Композиции из свежесрезанных живых цветов, которые составлены талантливо и со вкусом: их можно купить в букете, в коробке и любом другом варианте!</li>
								<li>Заказ может быть любого объема: мы справляемся даже со сверхсложными и сверхсрочными задачами.</li>
								<li>Вам придет красивый букет, а цветы долго не завянут, потому что мы не экономим на качестве и закупаем их у проверенных и надежных поставщиков!</li>
								<li>Возможность купить не только букет, но и подарок к нему. И даже вазу J</li>
								<li>Доставка за час либо по договоренности (в любое время, удобное клиенту, 24/7). При необходимости сделаем фотоотчет вручения.</li>
								<li>Удобную систему заказа, при которой учитываются все потребности клиента.</li>
								<li>Своевременное оказание услуг, без накладок, опозданий.</li>
								<li>Оплата удобным способом.</li>
								<li>Гибкая система скидок (уточняйте у оператора или на сайте).</li>
							</ul>
							<p>И вы все еще думаете, что купить?...</p>
					</div>
				</div>
		</section>

		<section class="pink-container valign-wrapper">
				<div class="container center">
						<h3 class="header center">Игорь, 35: «Большое спасибо за прекрасный букет!»</h3>
						<p class="lead center">
							В день рождения жены был в командировке. Поздравить лично не мог, потому заказал букет в цветочной мастерской «НеВеник» с доставкой. Заказ оформили очень быстро, вручили точно в указанный срок. Моя женушка проснулась от того, что ей принесли эксклюзивный, составленный для нее букет роз! А я получил фотоотчет.
						</p>
				</div>
		</section>

		<section class="parallax-container valign-wrapper">
				<div class="container center">
						<h2 class="header center h1">Остались вопросы?</h2>
						<a class="btn "><i class="fa fa-pencil fa-fw" aria-hidden="true"></i> Напишите нам!</a>
				</div>
				<div class="parallax">
						<img src="<?php bloginfo('template_url'); ?>/assets/images/3-fd86f318e1.jpg" alt="Unsplashed background img 3">
				</div>
		</section>
	<?php } ?>

	<?php do_action( 'storefront_before_footer' ); ?>

	<footer id="colophon" class="page-footer" role="contentinfo">
		<div class="container">
				<div class="row">
						<div class="col s12 m3 center">
								<h4>О нас</h4>
								<ul>
										<li><a href="#!">О нас</a></li>
										<li><a href="#!">Карьера</a></li>
										<li><a href="#!">Карта сайта</a></li>
								</ul>
						</div>
						<div class="col s12 m3 center">
								<h4>Сервис</h4>
								<ul>
										<li><a href="#!">Обратная связь</a></li>
										<li><a href="#!">Заказать звонок</a></li>
										<li><a href="#!">Как оплатить</a></li>
										<li><a href="#!">Доставка</a></li>
								</ul>
						</div>
						<div class="col s12 m3 center">
								<h4>Каталог</h4>
								<ul>
										<li><a href="#!">Цветы</a></li>
										<li><a href="#!">Розы</a></li>
										<li><a href="#!">Корзины и композиции</a></li>
										<li><a href="#!">Букеты</a></li>
										<li><a href="#!">Подарки</a></li>
								</ul>
						</div>
						<div class="col s12 m3">
								<h4>Контакты</h4>
								<p>Телефон: (812) 555-1234 </p>
								<p>Часы работы: Пн-Вт с 9-18</p>
								<p>Адрес: Невский Проспект 1, 12345 Санкт-Петербург, Россия</p>
						</div>
				</div>
		</div>
		<div class="footer-copyright">
				<div class="container">

					<?php
					/**
					 * Functions hooked in to storefront_footer action
					 *
					 * @hooked storefront_footer_widgets - 10
					 * @hooked storefront_credit         - 20
					 */
					do_action( 'storefront_footer' ); ?>

				</div>
		</div>
	</footer><!-- #colophon -->

	<?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js"></script>
<script src="<?php echo (get_template_directory_uri() . '/assets/js/main.js'); ?>"></script>

</body>
</html>
