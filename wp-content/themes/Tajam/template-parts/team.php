<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="article-wrap">
        <div class="image-holder" style="background: url('<?php echo get_the_post_thumbnail_url(); ?>') no-repeat; background-size: cover">
        </div>
        <div class="content-wrapper">
            <h4><?php the_title(); ?></h4>
            <p class="position"><?php echo CFS()->get( 'member_position' ); ?></p>
        </div>
    </div>
</article>