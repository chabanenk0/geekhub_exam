<?php get_header(); ?>
<div class="clear" />
<div class="content">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="post-content">
            <?php if (get_post_meta($post->ID, 'quote-text', false)) : ?>
                <div class="quote">
                    <p><?php echo get_post_meta($post->ID, 'quote-text', false)[0]; ?></p>
                    <span class="author"><?php echo get_post_meta($post->ID, 'quote-author', false)[0]; ?></span>
                </div>
            <?php endif; ?>
            <?php
                if ( has_post_thumbnail() ) {
                    the_post_thumbnail();
                }
            ?>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php the_content(); ?>
            <div class="post-information">
                <span class="likes"><?php echo get_post_meta($post->ID, 'likes', false)[0]; ?></span>
                <span class="date"><?php the_date('M. n, Y');?> </span>
                <span class="comments"><a href="<?php echo get_comments_link(); ?>"><?php echo get_comments_number(); ?> comments</a> / </span>
                <span class="author"><?php the_author(); ?> / </span>
            </div>
        </div>
        <?php endwhile; else : ?>
            <p>Sorry, no posts matched your criteria.</p>
    <?php endif ?>

    <?php
    the_posts_pagination( array(
    'prev_text'          => 'PREV',
    'next_text'          => 'NEXT',
    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page') . ' </span>',
    ) );
    ?>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
