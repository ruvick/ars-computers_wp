<footer id="footer" class="footer">
	<div class="footer__container _container">

		<div class="footer__row d-flex">

			<a href="<? bloginfo("url"); ?>" class="logo-icon footer__logo">
				<p class="logo-icon__text">АРС КОМПЬЮТЕРЫ <span>Работаем с 1992 года</span></p>
			</a>

			<?php wp_nav_menu( array('theme_location' => 'menu_main','menu_class' => 'menu-list footer__menu-list d-flex',
						'container_class' => 'menu-list footer__menu-list d-flex','container' => false )); ?> 

			<div class="contacts d-flex">
				<? $tel = carbon_get_theme_option("as_phones_1"); 
					if (!empty($tel)){?><a href="tel:<? echo preg_replace('/[^0-9]/', '', $tel); ?>" class="contacts__phone"><? echo $tel; ?>
				<p class="contacts__time-phone">Бесплатная консультация!</p></a><?}?> 

				<? $vk= carbon_get_theme_option("as_vk"); if (!empty($vk)){?>
					<div class="footer__contacts-social contacts-social">Социальные сети:
						<a href="<? echo $vk; ?>" class="contacts-social-link contacts-social-link--vk"></a>
					</div>
				<?}?>
			</div>

		</div>

	</div>
</footer>
</div>

<?php wp_footer(); ?>
</body>
</html>