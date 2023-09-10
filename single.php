<?php

/*
Template Name: Шаблон карточки товаров
WP Post Template: Шаблон карточки товаров
Template Post Type: post
*/

get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

<main id="primary" class="page site-main"> 

<section class="page-text section content"> 
	<div class="_container">

	<?php
		if ( function_exists('yoast_breadcrumb') ) {
			yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
		}
	?> 

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<h1><?php the_title();?></h1>
			<?php the_content();?>
			<?php endwhile;?>
		<?php endif; ?> 

	</div>
</section>

<?php get_template_part('template-parts/consult');?> 

</main>

<?php get_footer(); 