
<?php get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

<main class="page">

<section class="page-text section content">
	<div class="_container">

		<?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
			}
		?> 

		<h1 class = "h404">404</h1>
		<h2>Запрашиваемая страница не была найдена</h2>
	</div>
</section>

</main>

<?php get_footer(); ?> 