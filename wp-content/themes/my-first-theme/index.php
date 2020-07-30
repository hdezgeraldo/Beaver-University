<?php get_header();

while(have_posts()) {
    // this function keeps track of current post and relevant info
    the_post(); ?>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php the_content(); ?>
    <hr>


<?php }
get_footer();