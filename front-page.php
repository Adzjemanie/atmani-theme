<?php get_header(); ?>

<main>

    <!-- Featured Story -->

    <section id="featured" class="featured">

        <div class="container">

            <div class="featured-grid">

                <div class="featured-image">

                    <?php
                    $featured = new WP_Query([
                        'posts_per_page' => 1
                    ]);

                    if ($featured->have_posts()) :
                        while ($featured->have_posts()) : $featured->the_post();

                            if (has_post_thumbnail()) {
                                the_post_thumbnail('large');
                            }

                        endwhile;
                    endif;

                    wp_reset_postdata();
                    ?>

                </div>

                <div class="featured-content">

                    <span class="label">Featured Story</span>

                    <?php
                    $featured = new WP_Query([
                        'posts_per_page' => 1
                    ]);

                    if ($featured->have_posts()) :
                        while ($featured->have_posts()) : $featured->the_post();
                    ?>

                        <h2><?php the_title(); ?></h2>

                        <?php the_excerpt(); ?>

                        <a href="<?php the_permalink(); ?>" class="button">
                            Read Story
                        </a>

                    <?php
                        endwhile;
                    endif;

                    wp_reset_postdata();
                    ?>

                </div>

            </div>

        </div>

    </section>


    <!-- Explore -->

    <section class="explore">

        <div class="container">

            <h2>Explore</h2>

            <div class="explore-grid">

                <a href="#" class="explore-card">

                    <span>🎵</span>

                    <h3>Music</h3>

                </a>

                <a href="#" class="explore-card">

                    <span>📷</span>

                    <h3>Photography</h3>

                </a>

                <a href="#" class="explore-card">

                    <span>🌍</span>

                    <h3>Travel</h3>

                </a>

            </div>

        </div>

    </section>


    <!-- Latest Stories -->

    <section class="latest">

        <div class="container">

            <h2>Latest Stories</h2>

            <div class="posts-grid">

                <?php

                $latest = new WP_Query([

                    'posts_per_page' => 6

                ]);

                if ($latest->have_posts()) :

                    while ($latest->have_posts()) :

                        $latest->the_post();

                ?>

                    <article class="story-card">

                        <?php

                        if (has_post_thumbnail()) {

                            the_post_thumbnail('medium_large');

                        }

                        ?>

                        <h3>

                            <a href="<?php the_permalink(); ?>">

                                <?php the_title(); ?>

                            </a>

                        </h3>

                        <?php the_excerpt(); ?>

                    </article>

                <?php

                    endwhile;

                endif;

                wp_reset_postdata();

                ?>

            </div>

        </div>

    </section>

</main>

<?php get_footer(); ?>