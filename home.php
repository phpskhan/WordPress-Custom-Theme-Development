<?php
get_header();

get_template_part('template-parts/navBar');
get_template_part('template-parts/slider');
?>

<body>
	<section class="txt-area">
        <div class="container">

        <?php if (have_posts() ) :
            while ( have_posts() ) : the_post(); ?>

            <div class="row">
                <div class="col-lg-12">
                    <div class="aligncenter">
                    	<h2><?php the_title(); ?></h2><br>
                    	<div class="row">
                    		<p><strong>Author : </strong>
                    			<?php the_author(); ?>

                    			<strong> Posted : </strong>
                    			 <?php the_time(); ?>
                    		</p>
                    	</div>

                    	<div class="post-thumbnail row ml-0 mr-0">
                    		<a href="<?php echo get_the_permalink(get_the_ID() ) ?>">
                                <?php the_post_thumbnail('large') ?>
                            </a>
                        </div>
                    <?php the_content(); ?>
                    <br>
                    </div>

        <?php endwhile;
        endif; ?>

                </div>
            </div>
        </div>
	</section>

	<?php get_footer();?>
