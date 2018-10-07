<?php
/*
 * Template Name: Home Template
 */
?>

<?php get_header(); ?>

<main id="main" class="page-main" role="main">

    <section class="home-section layout" id="home" style="background: url('<?php echo CFS()->get( "home_background"); ?>') no-repeat; background-size: cover">
        <div class="center-block">
            <h1><?php echo CFS()->get( 'home_headline'); ?></h1>
            <?php

            while (have_posts()) : the_post();

                get_template_part('template-parts/slider-home');

                // If comments are open or we have at least one comment, load up the comment template.
                if (comments_open() || get_comments_number()) :
                    comments_template();
                endif;

            endwhile; // End of the loop.
            ?>
        </div>
    </section>
    <section class="story-section">
        <div class="container-main">
            <div class="left-part">
                <img src="<?php echo CFS()->get( 'story_image' ); ?>" alt="image">
            </div>
            <div class="right-part">
                <h2><?php echo CFS()->get( 'story_headline' ); ?></h2>
                <p><?php echo CFS()->get( 'story_content' ); ?></p>
                <a href="<?php echo CFS()->get( 'button_link' ); ?>" class="button-item"><?php echo CFS()->get( 'button_text' ); ?></a>
            </div>
        </div>
    </section>
    <section class="video-section layout" id="about" style="background: url('<?php echo CFS()->get( "video_background"); ?>') no-repeat; background-size: cover">
        <div class="video-section__block">
            <a href="<?php echo CFS()->get( "video_url"); ?>" data-poptrox="youtube,800x480"><span class="icon-play-button"></span></a>
            <p><?php echo CFS()->get( "play_text"); ?></p>
        </div>
    </section>
    <section class="expertise-section" id="expertise">
        <div class="container-main">
            <h2 class="headline"><?php echo CFS()->get( 'expertise_hedline' ); ?></h2>
            <p class="subheadline"><?php echo CFS()->get( 'expertise_subheadline' ); ?></p>
            <?php

            while (have_posts()) : the_post();

                get_template_part('template-parts/expertise');

                // If comments are open or we have at least one comment, load up the comment template.
                if (comments_open() || get_comments_number()) :
                    comments_template();
                endif;

            endwhile; // End of the loop.
            ?>
        </div>
    </section>
    <section class="team-section layout" id="team" style="background: url('<?php echo CFS()->get( "team_background"); ?>') no-repeat; background-size: cover">
        <div class="container-main">
            <h2 class="headline"><?php echo CFS()->get( 'team_headline' ); ?></h2>
            <p class="subheadline"><?php echo CFS()->get( 'team_subheadline' ); ?></p>
            <div class="items-holder" id="ajaxTarget">
                <?php
                $args = [
                    'post_type' => 'Team',
                    'posts_per_page' => 4,
                    'order' => 'ASC'
                ];

                query_posts($args);

                while (have_posts()) : the_post();

                    get_template_part('template-parts/team', 'posts');

                    // If comments are open or we have at least one comment, load up the comment template.
                    if (comments_open() || get_comments_number()) :
                        comments_template();
                    endif;

                endwhile; // End of the loop.
                wp_reset_query();
                ?>
            </div>
            <div class="bottom-block">
                <p><?php echo CFS()->get( 'team_footer' ); ?></p>
                <a href="<?php echo CFS()->get( 'team_button_url' ); ?>" class="button-item"><?php echo CFS()->get( 'team_button_text' ); ?></a>
            </div>
        </div>
    </section>
    <section class="portfolio" id="portfolio">
        <div class="container-main">
            <div class="top">
                <h2><?php echo CFS()->get( 'portfolio_headline' ); ?></h2>
                <a href="<?php echo CFS()->get( 'portfolio_link' ); ?>" target="_blank"><?php echo CFS()->get( 'portfolio_button_text' ); ?><span class="icon-right-arrow"></span></a>
            </div>
        </div>
        <ul class="portfolio-holder" id="target">
            <?php
            $args = [
                'post_type' => 'Portfolio',
                'posts_per_page' => 12,
                'order' => 'ASC'
            ];

            query_posts($args);

            while (have_posts()) : the_post();

                get_template_part('template-parts/portfolio', 'posts');

            endwhile; // End of the loop.

            ?>

            <?php if ($wp_query->max_num_pages > 1) : ?>
                <script>
                    var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
                    var true_posts = '<?php echo serialize($wp_query->query_vars); ?>';
                    var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
                    var max_pages = '<?php echo $wp_query->max_num_pages; ?>';
                </script>
                <div class="more_block button-wrap">
                    <div class="load-holder" id="true_loadmore">
                        <span class="button-item">Load more</span>
                    </div>
                </div>
            <?php endif;
            wp_reset_query();
            ?>
        </ul>
    </section>
    <section class="testimonials layout" id="testimonials" style="background: url('<?php echo CFS()->get( "testimonials_background"); ?>') no-repeat; background-size: cover">
        <div class="container-testimonials">
            <div class="quote-item"><span class="icon-left-quote"></span></div>
            <?php

            while (have_posts()) : the_post();

                get_template_part('template-parts/slider-testimonials');

                // If comments are open or we have at least one comment, load up the comment template.
                if (comments_open() || get_comments_number()) :
                    comments_template();
                endif;

            endwhile; // End of the loop.
            ?>
        </div>
    </section>
    <section class="bottom" id="contact">
        <div class="container-main">
            <div class="left-part">
                <h2><?php echo CFS()->get( 'left_headline' ); ?></h2>
                <div class="form-holder">
                    <?php echo do_shortcode( '[contact-form-7 id="94" title="Form"]' ); ?>
                </div>
            </div>
            <div class="right-part">
                <h2><?php echo CFS()->get( 'right_headline' ); ?></h2>
                <?php

                while (have_posts()) : the_post();

                    get_template_part('template-parts/clients');

                    // If comments are open or we have at least one comment, load up the comment template.
                    if (comments_open() || get_comments_number()) :
                        comments_template();
                    endif;

                endwhile; // End of the loop.
                ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>