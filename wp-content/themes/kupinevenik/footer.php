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

</body>
</html>
