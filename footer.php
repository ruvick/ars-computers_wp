<footer id="footer" class="footer">
	<div class="footer__container _container">

		<div class="footer__row d-flex">

			<a href="<? bloginfo("url"); ?>" class="logo-icon footer__logo">
				<p class="logo-icon__text">АРС КОМПЬЮТЕРЫ <span>Работаем с 1992 года</span></p>
			</a>

			<?php wp_nav_menu( array('theme_location' => 'menu_main','menu_class' => 'menu-list footer__menu-list d-flex',
						'container_class' => 'menu-list footer__menu-list d-flex','container' => false )); ?> 

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