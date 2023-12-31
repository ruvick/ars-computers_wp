<header id="header" class="header header_index">
	<div class="header__container _container">

		<div class="header__row header__row_index d-flex">

			<a href="<? bloginfo("url"); ?>" class="logo-icon header__logo">
				<p class="logo-icon__text">АРС КОМПЬЮТЕРЫ <span>Работаем с 1992 года</span></p> 
			</a>

			<?php wp_nav_menu( array('theme_location' => 'menu_main','menu_class' => 'menu-list header__menu-list d-flex',
						'container_class' => 'menu-list header__menu-list d-flex','container' => false )); ?>  

			<div class="contacts header__contacts d-flex"> 
				<? $tel = carbon_get_theme_option("as_phones_1"); 
					if (!empty($tel)){?><a href="tel:<? echo preg_replace('/[^0-9]/', '', $tel); ?>" class="contacts__phone header__phone"><? echo $tel; ?></a>
				<p class="contacts__time-phone header__time-phone">Бесплатная консультация!</p><?}?> 
			</div>
			<a href="tel:89538120099" class="mob-phone-icon header__mob-phone-icon"></a>
			<!-- <a href="tel:<? echo preg_replace('/[^0-9]/', '', $tel); ?>" class="mob-callback__phone"></a> -->

			<a href="#callback" class="header__popup-link _popup-link	btn btn_white">Заказать звонок</a>

			<div class="icon-menu" aria-label="Бургер меню">
				<span></span>
				<span></span>
				<span></span>
			</div>

		</div>
	</div>
</header>

<!-- Мобильное меню -->
<div class="mob-menu header__mob-menu">
	<?php wp_nav_menu( array('theme_location' => 'menu_main','menu_class' => 'mob-menu__list',
		'container_class' => 'mob-menu__list','container' => false )); ?> 
	<a href="#callback" class="header__popup-link header__popup-link_mob _popup-link">ЗАКАЗАТЬ ЗВОНОК</a>
</div>