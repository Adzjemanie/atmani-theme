<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry-content' ); ?>>
    <header class="entry-header">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        <div class="entry-meta">
            <span class="posted-on"><?php echo esc_html( get_the_date() ); ?></span>
            <span class="byline"><?php echo esc_html( get_the_author() ); ?></span>
        </div>
    </header>

    <?php if ( has_post_thumbnail() ) : ?>
        <div class="featured-media">
            <?php the_post_thumbnail( 'large' ); ?>
        </div>
    <?php endif; ?>

    <div class="entry-body">
        <?php the_content(); ?>
    </div>

    <footer class="entry-footer">
        <?php wp_link_pages(); ?>
    </footer>
</article>
