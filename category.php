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
					<?php wp_list_categories( array('child_of' => 3, 'orderby' => 'ID', 'order' => 'asc', 'hide_empty'=> 0, 'title_li' => '') ); ?>
				</ul>
				<?
  					$price_product = carbon_get_theme_option('price_product');
  					$price_service = carbon_get_theme_option('price_service');
					?>
				<? if ($price_product || $price_service) {?>
				<p class="catalog__sidebar-text">Скачайте прайс-лист</p>
				<?}?>
				<div class="catalog__sidebar-ptice-block">

					<? if ($price_product) {?>
						<a href="<?echo wp_get_attachment_url($price_product);?>" class="catalog__sidebar-price-link">Продукция</a>
					<?}?>
					<? if ($price_service) {?>
						<a href="<?echo wp_get_attachment_url($price_service);?>" class="catalog__sidebar-price-link">Сервисные услуги</a>
					<?}?>
				</div>
			</div>

			<div class="catalog__main">
				<div class="catalog-product__container">

<div class="catalog-product__row">

<?php if (have_posts()) { while (have_posts()) { the_post(); ?>
	<div class="product__column catalog-product__column">
		<div class="product__card">
			<a href="<?php echo get_permalink();?>" class="product__card-img _ibg"> 
				<img src="<?php  $imgTm = get_the_post_thumbnail_url( get_the_ID(), "tominiatyre" ); echo empty($imgTm)?get_bloginfo("template_url")."/img/nophoto.jpg":$imgTm; ?>" alt="<? the_title();?>"> 
			</a>
			<div class="product__card-descp">
				<h6 class="product__card-descp-title"> 
					<?php echo $post->post_title?>
				</h6>
				<? $prod_price = carbon_get_post_meta(get_the_ID(),"prod_price");
				if (!empty($prod_price)) { ?>
				<div class="product__card-descp-price rub"><? echo $prod_price; ?></div>
				<? } ?>
			</div>
			<a href="<?php echo get_permalink();?>" class="product__card-btn btn">Подробнее</a>
		</div>
	</div>
<?php } //конец while
} //конец if ?>

</div>

</div>
			</div>

		</div>

		<?php if ( function_exists( 'wp_corenavi' ) ) wp_corenavi($loop); ?> 

	</div>
</section>

<?php get_template_part('template-parts/consult');?> 

</main>

<?php get_footer(); ?>   