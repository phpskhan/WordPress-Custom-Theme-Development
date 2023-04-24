<?php
/*
* This template is used display single pages
*/

get_header();

wp_head();

get_template_part('template-parts/navBar');

get_template_part('template-parts/slider');

?>
        <div class="page-custom-header">
            <?php $img_url = get_the_post_thumbnail_url(get_the_ID(), 'post-thumbnail') ?>
            <img src="<?php echo $img_url ?>" alt="<?php echo get_the_title() ?>" class="img-fluid">
        </div>
        <div class="flex-row ml-0 mr-0 mt-3">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <h1><?php the_title() ?></h1>
                    <p><?php the_content(); ?></p>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        

<?php 
get_footer();
?>

