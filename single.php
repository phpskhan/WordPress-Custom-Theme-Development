<?php
/*
* This template is used to display single post
*/

get_header();

get_template_part('template-parts/navBar');
?>
    <div class="post-container">
        
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
            <div class="post-image">
                <?php the_post_thumbnail('home-featured') ?>
            </div>

			<section class="events">
		        <div class="container"><br>
		        	<h1><?php the_title() ?></h1><br>

		            <div class="row">
		            	<strong style="margin-left: 15px;">Author: </strong> <?php the_author();?>
		            	<strong style="margin-left: 50px;">Posted on: </strong> <?php the_time();?>
		            </div>

                	<?php the_content(); ?><br><br><br>

		        </div>
		    </section>

            <?php endwhile; ?>
        <?php endif; ?>
    </div>
        

<?php 
get_footer();
?>

