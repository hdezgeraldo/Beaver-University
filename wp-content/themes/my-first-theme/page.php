<?php
get_header();

while(have_posts()) {
    // this function keeps track of current post and relevant info
    the_post(); ?>
    <h1>This is a Page</h1>
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
<?php }
get_footer();