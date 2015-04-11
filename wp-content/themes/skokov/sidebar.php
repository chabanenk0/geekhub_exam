<div class="sidebar">
    <div class="search">
        <input type="text" name="search">
    </div>

    <div class="categories">
        <h3>Categories</h3>
        <ul>
            <li><a href="#">Web design</a></li>
            <li><a href="#">Branding</a></li>
            <li><a href="#">Business</a></li>
            <li><a href="#">Marketing</a></li>
            <li><a href="#">HTML</a></li>
            <li><a href="#">CSS</a></li>
            <li><a href="#">NEWS</a></li>
            <li><a href="#">Mobile</a></li>
            <li><a href="#">Usability</a></li>
        </ul>
    </div>

    <div class="archive">
        <h3>Archive</h3>
        <ul>
            <li><a href="#">Jan</a></li>
            <li><a href="#">Feb</a></li>
            <li><a href="#">Feb</a></li>
            <li><a href="#">Feb</a></li>
            <li><a href="#">Feb</a></li>
            <li><a href="#">Feb</a></li>
            <li><a href="#">Feb</a></li>
            <li><a href="#">Feb</a></li>
        </ul>
    </div>

    <div class="popular">
        <h3>Popular posts</h3>
        <ul>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <li>
                <?php the_post_thumbnail() ?>
                <span class="title"><?=get_the_title(); ?></span>
                <span class="date"><?php the_date('M. n, Y');?> </span>
                <span class="likes"><?php echo get_post_meta($post->ID, 'likes', false)[0]; ?></span>
            </li>
            <?php endwhile; endif; ?>
        </ul>
    </div>


</div>