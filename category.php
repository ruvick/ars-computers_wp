<?php get_header(); ?> 

<?php get_template_part('template-parts/header-section');?>

<main class="page">

<section id="title-navigation" class="title-navigation">
	<div class="_container">
		<?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
			}
		?> 
		<h2 class="title-navigation__title"><? single_cat_title(); ?></h2>
	</div>
</section> 

<section id="catalog" class="catalog">
	<div class="_container">

		<div class="catalog__wrap">

			<div class="catalog__sidebar">
				<ul class="catalog__sidebar-menu-list">
					<li class="catalog__sidebar-menu-list-item"><a href="#"
							class="catalog__sidebar-menu-list-item-link _active">Компьютеры</a></li>
					<li class="catalog__sidebar-menu-list-item"><a href="#"
							class="catalog__sidebar-menu-list-item-link">Принтеры</a></li>
					<li class="catalog__sidebar-menu-list-item"><a href="#"
							class="catalog__sidebar-menu-list-item-link">МФУ</a></li>
					<li class="catalog__sidebar-menu-list-item"><a href="#"
							class="catalog__sidebar-menu-list-item-link">Ноутбуки</a></li>
					<li class="catalog__sidebar-menu-list-item"><a href="#"
							class="catalog__sidebar-menu-list-item-link">Мониторы</a></li>
					<li class="catalog__sidebar-menu-list-item"><a href="#"
							class="catalog__sidebar-menu-list-item-link">Комплектующие</a></li>
				</ul>
				<p class="catalog__sidebar-text">Скачайте прайс-лист</p>

				<div class="catalog__sidebar-ptice-block">
					<a href="img/popup.jpg" class="catalog__sidebar-price-link">Продукция</a>
					<a href="img/popup.jpg" class="catalog__sidebar-price-link">Сервисные услуги</a>
				</div>
			</div>

			<div class="catalog__main">
				<div class="catalog-product__container">

<div class="catalog-product__row">

<div class="product__column catalog-product__column">
<div class="product__card">
	<a href="single.html" class="product__card-img _ibg"> 
		<picture><source srcset="<?php echo get_template_directory_uri();?>/img/leaders/01.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/leaders/01.jpg?_v=1693674569456" alt=""></picture>
	</a>
	<div class="product__card-descp">
		<h6 class="product__card-descp-title">
			Компьютер X-Computers *Business* P0055236
		</h6>
	</div>
	<a href="single.html" class="product__card-btn btn">Подробнее</a>
</div>
</div>

<div class="product__column catalog-product__column">
<div class="product__card">
	<a href="single.html" class="product__card-img _ibg">
		<picture><source srcset="<?php echo get_template_directory_uri();?>/img/leaders/05.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/leaders/05.jpg?_v=1693674569456" alt=""></picture>
	</a>
	<div class="product__card-descp">
		<h6 class="product__card-descp-title">
			Игровой компьютер AMD Athlon
		</h6>
	</div>
	<a href="single.html" class="product__card-btn btn">Подробнее</a>
</div>
</div>

<div class="product__column catalog-product__column">
<div class="product__card">
	<a href="single.html" class="product__card-img _ibg">
		<picture><source srcset="<?php echo get_template_directory_uri();?>/img/leaders/06.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/leaders/06.jpg?_v=1693674569456" alt=""></picture>
	</a>
	<div class="product__card-descp">
		<h6 class="product__card-descp-title">
			Системный блок для игр/дома/работы ATHLON 3000G AM4
		</h6>
	</div>
	<a href="single.html" class="product__card-btn btn">Подробнее</a>
</div>
</div>

<div class="product__column catalog-product__column">
<div class="product__card">
	<a href="single.html" class="product__card-img _ibg"> 
		<picture><source srcset="<?php echo get_template_directory_uri();?>/img/leaders/01.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/leaders/01.jpg?_v=1693674569456" alt=""></picture>
	</a>
	<div class="product__card-descp">
		<h6 class="product__card-descp-title">
			Компьютер X-Computers *Business* P0055236
		</h6>
	</div>
	<a href="single.html" class="product__card-btn btn">Подробнее</a>
</div>
</div>

</div>

</div>
			</div>

		</div>

		<nav class="pagination d-flex">
			<div class="pagination__nav-links d-flex">
				<!-- <a class="pagination__back" href="#">Назад</a> -->
				<span class="pagination__numbers">1</span>
				<a class="pagination__numbers current" href="#">2</a>
				<a class="pagination__numbers" href="#">3</a>
				<a class="pagination__numbers" href="#">4</a>
				<!-- <div class="pagination__block-dot d-flex">
					<span class="pagination__dot">.</span>
					<span class="pagination__dot">.</span>
					<span class="pagination__dot">.</span>
				</div> -->
				<!-- <a class="pagination__next" href="#">Вперед</a> -->
			</div>
		</nav>

	</div>
</section>

<?php get_template_part('template-parts/consult');?> 

</main>

<?php get_footer(); ?>   