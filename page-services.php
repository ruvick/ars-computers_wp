
<?php

/*
Template Name: Страница Сервис
Template Post Type: page
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

		<section class="completed-projects section">
				<div class="_container">
					<h2 class="completed-projects__title title">Сервисные услуги</h2>
					<div class="completed-projects__row">

					<?php $stati_children = new WP_Query(array(
		'post_type' => 'page',
		'order'       => 'ASC',
		'post_parent' => get_the_ID()
	)
);

	if($stati_children->have_posts()) :
		while($stati_children->have_posts()): $stati_children->the_post();
			echo '

			<div class="completed-projects__column">
			<a href="'.get_the_permalink().'" class="completed-projects__card">
				<div class="completed-projects__card-img _ibg">
				<img src="'.get_the_post_thumbnail_url( get_the_ID(), "tominiatyre" ).'" alt="<? the_title();?>"> 
				</div>
				<div class="completed-projects__card-descp completed-projects__card-descp_red">
					<h5 class="completed-projects__card-descp-title">'.get_the_title().'</h5>
					<!-- <a href="#" class="completed-projects__card-descp-link">Подробнее...</a> -->
				</div>
			</a>
		</div>';
		endwhile;
	endif; wp_reset_query();
	?>
					</div>

				</div>
			</section>

		<?php get_template_part('template-parts/consult');?> 

	</main>

<?php get_footer();