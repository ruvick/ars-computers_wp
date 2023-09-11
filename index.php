<?php get_header(); ?>

<?php get_template_part('template-parts/header-section-index');?>

<main class="page">

<section id="slider-main" class="slider-main">
	<div class="slider-bg-wrap">
		<div class="slider-bg _swiper">
			<?
				$pict = carbon_get_theme_option('slider_index');
					if ($pict) {
						$pictIndex = 0;
							foreach ($pict as $item) {
			?>
			<div class="slider-bg__slide slider__slide" style="background-image: url(<?php echo wp_get_attachment_image_src($item['slider_img'], 'full')[0]; ?>);">
				<div class="nuar_blk"></div>
				<div class="slider-bg__container _container">
					<? if (!empty($item['slider_title'])) { ?>
						<h1 class="slider-bg__title"><? echo $item['slider_title']; ?>
						<!-- <span class="slider-bg__subtitle"><? echo $item['slider_subtitle']; ?><span> -->
					</h1>
					<? } ?>
				</div>
			</div>
			<?
				$pictIndex++;
					}
				}
			?> 
		</div>
		<div class="slider-bg__swiper-button-block swiper-button-block">
			<!-- <div class="_container"> -->
			<div class="swiper-button swiper-button-next slider-main-next"></div>
			<div class="swiper-button swiper-button-prev slider-main-prev"></div>
			<!-- </div> -->
		</div>
	</div>
</section>

<? $abouttc = carbon_get_theme_option("about_home");
	if (!empty($abouttc)) { ?>
		<section class="about section">
			<div class="_container">
				<h2 class="about__title title">
					<?php echo carbon_get_theme_option('about_home_title'); ?>
				</h2>
				<div class="about__subtitle">
					<p><? echo $abouttc; ?></p>
				</div>
			</div>
		</section>
<? } ?>

<section class="products-sec section">
	<div class="_container">
		<h2 class="products-sec__title title">Продукция</h2>
		
		<div class="products-sec__row">

			<div class="products-sec__column">
				<div class="products-sec__card">
					<a href="<?php echo get_category_link(10);?>" class="products-sec__card-img _ibg">
						<picture><source srcset="<?php echo get_template_directory_uri();?>/img/card/01.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/card/01.jpg" alt=""></picture> 
					</a>
					<div class="products-sec__card-descp">
						<h4 class="products-sec__card-descp-title"> 
							Компьютеры
						</h4>
						<ul class="products-sec__card-descp-list">
							<li class="products-sec__card-descp-list-item">от 7800р</li>
						</ul>
					</div>
					<div class="products-sec__card-btn">
						<a href="<?php echo get_category_link(10);?>" class="products-sec__card-btn-link btn">Подробнее</a>
						<a href="img/popup.jpg" download class="products-sec__card-btn-link btn btn--price">Прайс-лист</a>
					</div>
				</div>
			</div>

			<div class="products-sec__column">
				<div class="products-sec__card">
					<a href="<?php echo get_category_link(11);?>" class="products-sec__card-img _ibg">
						<picture><source srcset="<?php echo get_template_directory_uri();?>/img/card/02.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/card/02.jpg" alt=""></picture>
					</a>
					<div class="products-sec__card-descp">
						<h4 class="products-sec__card-descp-title">
							Принтеры
						</h4>
						<ul class="products-sec__card-descp-list">
							<li class="products-sec__card-descp-list-item">от 8800 р</li>
						</ul>
					</div>
					<div class="products-sec__card-btn">
						<a href="<?php echo get_category_link(11);?>" class="products-sec__card-btn-link btn">Подробнее</a>
						<a href="img/popup.jpg" download class="products-sec__card-btn-link btn btn--price">Прайс-лист</a>
					</div>
				</div>
			</div>

			<div class="products-sec__column">
				<div class="products-sec__card">
					<a href="<?php echo get_category_link(12);?>" class="products-sec__card-img _ibg">
						<picture><source srcset="<?php echo get_template_directory_uri();?>/img/card/03.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/card/03.jpg" alt=""></picture>
					</a>
					<div class="products-sec__card-descp">
						<h4 class="products-sec__card-descp-title">
							МФУ
						</h4>
						<ul class="products-sec__card-descp-list">
							<li class="products-sec__card-descp-list-item">от 10 000р</li>
						</ul>
					</div>
					<div class="products-sec__card-btn">
						<a href="<?php echo get_category_link(12);?>" class="products-sec__card-btn-link btn">Подробнее</a>
						<a href="img/popup.jpg" download class="products-sec__card-btn-link btn btn--price">Прайс-лист</a>
					</div>
				</div>
			</div>

			<div class="products-sec__column">
				<div class="products-sec__card">
					<a href="<?php echo get_category_link(13);?>" class="products-sec__card-img _ibg">
						<picture><source srcset="<?php echo get_template_directory_uri();?>/img/card/04.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/card/04.jpg" alt=""></picture>
					</a>
					<div class="products-sec__card-descp">
						<h4 class="products-sec__card-descp-title">
							Ноутбуки
						</h4>
						<ul class="products-sec__card-descp-list">
							<li class="products-sec__card-descp-list-item">от 30 000р</li>
						</ul>
					</div>
					<div class="products-sec__card-btn">
						<a href="<?php echo get_category_link(13);?>" class="products-sec__card-btn-link btn">Подробнее</a>
						<a href="img/popup.jpg" download class="products-sec__card-btn-link btn btn--price">Прайс-лист</a>
					</div>
				</div>
			</div>

			<div class="products-sec__column">
				<div class="products-sec__card">
					<a href="<?php echo get_category_link(14);?>" class="products-sec__card-img _ibg">
						<picture><source srcset="<?php echo get_template_directory_uri();?>/img/card/05.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/card/05.jpg" alt=""></picture>
					</a>
					<div class="products-sec__card-descp">
						<h4 class="products-sec__card-descp-title">
							Мониторы
						</h4>
						<ul class="products-sec__card-descp-list">
							<li class="products-sec__card-descp-list-item">от 8000р</li>
						</ul>
					</div>
					<div class="products-sec__card-btn">
						<a href="<?php echo get_category_link(14);?>" class="products-sec__card-btn-link btn">Подробнее</a>
						<a href="img/popup.jpg" download class="products-sec__card-btn-link btn btn--price">Прайс-лист</a>
					</div>
				</div>
			</div>

			<div class="products-sec__column">
				<div class="products-sec__card">
					<a href="<?php echo get_category_link(15);?>" class="products-sec__card-img _ibg">
						<picture><source srcset="<?php echo get_template_directory_uri();?>/img/card/06.webp" type="image/webp"><img src="<?php echo get_template_directory_uri();?>/img/card/06.jpg" alt=""></picture>
					</a>
					<div class="products-sec__card-descp">
						<h4 class="products-sec__card-descp-title">
							Комплектующие
						</h4>
						<ul class="products-sec__card-descp-list">
							<li class="products-sec__card-descp-list-item">от 5 000р</li>
						</ul>
					</div>
					<div class="products-sec__card-btn">
						<a href="<?php echo get_category_link(15);?>" class="products-sec__card-btn-link btn">Подробнее</a>
						<a href="img/popup.jpg" download class="products-sec__card-btn-link btn btn--price">Прайс-лист</a>
					</div>
				</div>
			</div>

		</div>
		
	</div>
</section>

<?	$advant = carbon_get_theme_option('complex_advant'); // Вывод из настроек темы
	if (!empty($advant)) { ?>
<section class="service section">
	<div class="nuar_blk"></div>
	<div class="_container">
		<h2 class="service__title title">Преимущества</h2>
		<div class="service__row">
		<?
		$advantIndex = 0;
		foreach ($advant as $item) {
			?>
			<div class="service__column">
				<div class="service__card">
					<span class="service__card-icon service__card-icon_01"></span>
					<h4 class="service__card-title"><? echo $item['text_advant']; ?></h4>
				</div>
			</div>
			<?
			$advantIndex++; 
		}
	}
?>
<? { ?>
		</div>
	</div>
</section> 
<? } ?>

<section class="completed-projects section">
	<div class="_container">
		<h2 class="completed-projects__title title">Услуги</h2>
		<div class="completed-projects__row">

		<?php
$page_children = new WP_Query(
	array(
		'post_type' => 'page',
		'post_parent' => '21',
		'order'       => 'ASC',
	)
);
if ($page_children->have_posts()) :
	while ($page_children->have_posts()) : $page_children->the_post();
		?>

			<div class="completed-projects__column">
				<a href="<?php the_permalink(); ?>" class="completed-projects__card">
					<div class="completed-projects__card-img _ibg">
						<img src="<?php  $imgTm = get_the_post_thumbnail_url( get_the_ID(), "tominiatyre" ); echo empty($imgTm)?get_bloginfo("template_url")."/img/no-photo.jpg":$imgTm; ?>" alt="<? the_title();?>"> 
					</div>
					<div class="completed-projects__card-descp completed-projects__card-descp_red">
						<h5 class="completed-projects__card-descp-title"><?php the_title(); ?></h5>
						<!-- <a href="#" class="completed-projects__card-descp-link">Подробнее...</a> --> 
					</div>
				</a>
			</div>
		<?php
	endwhile;
endif;
wp_reset_query();
?>
		</div>

		<div class="completed-projects__help help-wrap">
			<div class="help-wrap__name">
				<h2 class="help-wrap__name-title">
					Вас заинтересовали <br>
					наши услуги?
				</h2>
				<p class="help-wrap__name-subtitle">Наши специалисты помогут:</p>
			</div>
			<div class="help-wrap__descp">
				<ul class="help-wrap__descp-list">
					<li class="help-wrap__descp-list-item">Подобрать необходимое оборудование</li>
					<li class="help-wrap__descp-list-item">Провести технический аудит</li>
					<li class="help-wrap__descp-list-item">Произвести ремонт техники</li>
					<li class="help-wrap__descp-list-item">Заключить договор на абонентское обслуживание</li>
				</ul>
				<!-- <div class="help-wrap__btn"> -->
				<a href="#callback" class="help-wrap__btn-link _popup-link btn">Заказать звонок</a>
				<!-- </div> -->
			</div>
		</div>

	</div>
</section>

<?php get_template_part('template-parts/consult');?> 

</main>

<?php get_footer(); ?> 