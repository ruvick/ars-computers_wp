<footer id="footer" class="footer">
	<div class="footer__container _container">

		<div class="footer__row d-flex">

			<a href="index.html" class="logo-icon footer__logo">
				<!-- <? bloginfo("url"); ?> -->
				<p class="logo-icon__text">АРС КОМПЬЮТЕРЫ <span>Работаем с 1992 года</span></p>
			</a>

			<ul class="menu-list footer__menu-list d-flex">
				<li class="menu-list__item"><a href="about.html" class="menu-list__link">О нас</a></li>
				<li class="menu-list__item"><a href="catalog.html" class="menu-list__link">Каталог</a></li>
				<li class="menu-list__item"><a href="payment.html" class="menu-list__link">Оплата и доставка</a></li>
				<li class="menu-list__item"><a href="service.html" class="menu-list__link">Сервис</a></li>
				<li class="menu-list__item"><a href="contacts.html" class="menu-list__link">Контакты</a></li>
			</ul>

			<div class="contacts d-flex">
				<a href="tel:89538120099" class="contacts__phone">8 953 812 00 99</a>
				<!-- <a href="tel:<? echo preg_replace('/[^0-9]/', '', $tel); ?>"><? echo $tel = carbon_get_theme_option("as_phone_1"); ?></a> -->
				<p class="contacts__time-phone">Бесплатная консультация!</p>

				<div class="footer__contacts-social contacts-social">Социальные сети:
					<a href="https://vk.com/arscomps" class="contacts-social-link contacts-social-link--vk"></a>
				</div>

			</div>

		</div>

	</div>
</footer>
</div>

<?php wp_footer(); ?>
</body>
</html>