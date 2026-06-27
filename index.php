<?php get_header(); ?>

<main id="site-content" class="site-main">
	<?php get_template_part( 'template-parts/hero/hero' ); ?>

	<section class="blog-feed container">
		<?php
		if ( have_posts() ) :
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content/content', 'single' );
			endwhile;
		else :
			get_template_part( 'template-parts/content/content', 'none' );
		endif;
		?>
	</section>
</main>

<?php get_footer(); ?>