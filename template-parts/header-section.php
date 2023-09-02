<header id="header" class="header header_index">
	<div class="header__container _container">

		<div class="header__row header__row_index d-flex">

			<a href="index.html" class="logo-icon header__logo">
				<!-- <? bloginfo("url"); ?> -->
				<p class="logo-icon__text">АРС КОМПЬЮТЕРЫ <span>Работаем с 1992 года</span></p>
			</a>

			<!-- <div class="header__navigation"> -->
			<ul class="menu-list header__menu-list d-flex">
				<li class="menu-list__item"><a href="about.html" class="menu-list__link">О нас</a></li>
				<li class="menu-list__item"><a href="catalog.html" class="menu-list__link">Каталог</a></li>
				<li class="menu-list__item"><a href="payment.html" class="menu-list__link">Оплата и доставка</a></li>
				<li class="menu-list__item"><a href="service.html" class="menu-list__link">Сервис</a></li>
				<li class="menu-list__item"><a href="contacts.html" class="menu-list__link">Контакты</a></li>
			</ul>
			<!-- <?php wp_nav_menu( array('theme_location' => 'menu_main','menu_class' => 'menu__list',
						'container_class' => 'menu__list','container' => false )); ?>  -->
			<!-- <div class="header__contacts-inner"> -->
			<div class="contacts header__contacts d-flex">
				<a href="tel:89538120099" class="contacts__phone header__phone">8 953 812 00 99</a>
				<!-- <a href="tel:<? echo preg_replace('/[^0-9]/', '', $tel); ?>"><? echo $tel = carbon_get_theme_option("as_phone_1"); ?></a> -->
				<p class="contacts__time-phone header__time-phone">Бесплатная консультация!</p>
			</div>
			<a href="tel:89538120099" class="mob-phone-icon header__mob-phone-icon"></a>
			<!-- <a href="tel:<? echo preg_replace('/[^0-9]/', '', $tel); ?>" class="mob-callback__phone"></a> -->

			<a href="#callback" class="header__popup-link _popup-link	btn btn_white">Заказать звонок</a>

			<div class="icon-menu" aria-label="Бургер меню">
				<span></span>
				<span></span>
				<span></span>
			</div>
			<!-- </div> -->

		</div>
	</div>
</header>

<!-- Мобильное меню -->
<div class="mob-menu header__mob-menu">
	<ul class="mob-menu__list">
		<li class="mob-menu__item"><a href="about.html" class="mob-menu__link">О нас</a></li>
		<li class="mob-menu__item"><a href="catalog.html" class="mob-menu__link">Каталог</a></li>
		<li class="mob-menu__item"><a href="payment.html" class="mob-menu__link">Оплата и доставка</a></li>
		<li class="mob-menu__item"><a href="service.html" class="mob-menu__link">Сервис</a></li>
		<li class="mob-menu__item"><a href="contacts.html" class="mob-menu__link">Контакты</a></li>
	</ul>
	<!-- <?php wp_nav_menu( array('theme_location' => 'menu_main','menu_class' => 'mob-menu__list',
		'container_class' => 'mob-menu__list','container' => false )); ?>  -->
	<a href="#callback" class="header__popup-link header__popup-link_mob _popup-link">ЗАКАЗАТЬ ЗВОНОК</a>
</div>