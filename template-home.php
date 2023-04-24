<?php
/*
* Template Name: Home Template
*/

get_header();

get_template_part('template-parts/navBar');
get_template_part('template-parts/slider');

?>
<style>
    a {
        color: #fff;
    }
</style>

	<section class="txt-area">
        <div class="container">

        <?php if (have_posts() ) :
            while ( have_posts() ) : the_post(); ?>

            <div class="row">
                <div class="col-lg-12">
                    <div class="aligncenter"><?php the_content(); ?>
                    </div>
        <?php endwhile;
        endif; ?>
                </div>
            </div>
        </div>
	</section>
	
	
	<section id="content">
        <div class="container">
            <div class="row">

            <?php
            global $wpdb;
            $table_name = $wpdb->prefix . 'ksabih_twi';

            $rows = $wpdb->get_results( "SELECT * FROM $table_name");

            foreach ( $rows as $row ) 
                { ?>

                <div class="features">
                    <div class="col-md-4 col-sm-6 wow fadeInUp animated" data-wow-duration="300ms" data-wow-delay="0ms" style="visibility: visible; -webkit-animation-duration: 300ms; -webkit-animation-delay: 0ms;">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="<?php echo $row->twi_icon1;?>"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading"><?php echo $row->twi_heading1;?></h4>
                                <p><?php echo $row->twi_text1;?></p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->
                <?php } ?>
                </div>
            </div>
        </div>
	</section>

    <section id="banner">

        <img class="img-fluid" src="<?php echo get_custom_header()->url;?>">
        
    </section>


    <section id='events'>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aligncenter"><h2 class="aligncenter">Latest Batches</h2><br>
                    </div>
                </div>

            <?php
            $args = array (
                'post_type' => 'services'
                // 'post_status' => 'publish',
                // 'posts_per_page' => 6,
                // 'orderby’ => 'title',
                // 'order’ => 'ASC'
                // 'cat'  =>  5
                // 'category_name'  =>  'Courses'
            );

            $my_posts = new WP_Query ($args);

            if ( $my_posts->have_posts() ) :
                while ( $my_posts->have_posts() ) : $my_posts->the_post(); ?>

                <div class="col-md-4">
                    <div class="post3">
                        <div class="post-thumbnail row ml-0 mr-0">
                            <a href="<?php echo get_the_permalink(get_the_ID() ) ?>">
                                <?php the_post_thumbnail('medium') ?>
                            </a>
                        </div>

                        <time datetime="2019-03-01">
                            <h4 class="year" style="color: #E7094C;">
                                <?php the_title();?>
                            </h4>
                            <p><?php the_excerpt();?></p>
                        </time>
                    </div>
                </div>
        <?php
            endwhile;
        else :
            _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
        endif;

        wp_reset_postdata(); ?>
            </div>
        </div>
    </section>

    <section class="aboutUs">
        <div class="container">
            <div class="row">

            <?php
            global $wpdb;
            $table_name = $wpdb->prefix . 'ksabih_iboxes';

            $rows = $wpdb->get_results( "SELECT * FROM $table_name");

            foreach ( $rows as $row ) 
                { ?>

                <div class="col-md-12">
                    <div class="aligncenter"><h2 class="aligncenter"><span style="color: #fff;"><?php echo $row->ibox_heading;?></span></h2><br>
                        <p><?php echo $row->ibox_text;?></p>
                    </div>
                </div>
            </div>

    		<div class="row">
                <div class="col-md-6">
                    <center><img class="img-fluid" style="padding: 20px; max-height: 400px; max-width: 90%; border-radius: 25px;" src="<?php echo $row->ibox_image;?>" alt=""></center>
                    <div class="space"></div>
                </div>

                <div class="col-md-6"><br><br>
                    <p><?php echo $row->ibox_side_text;?></p>

    				<p><?php echo $row->ibox_below_text;?></p>

                    <ul class="list-unstyled"><br>
                        <li>
                            <i class="fa fa-arrow-circle-right pr-10 colored"></i> <?php echo $row->ibox_point1;?>
                        </li>

                        <li>
                            <i class="fa fa-arrow-circle-right pr-10 colored"></i> <?php echo $row->ibox_point2;?>
                        </li>

                        <li>
                            <i class="fa fa-arrow-circle-right pr-10 colored"></i> <?php echo $row->ibox_point3;?>
                        </li>

                        <li>
                            <i class="fa fa-arrow-circle-right pr-10 colored"></i> <?php echo $row->ibox_point4;?>
                        </li>

                        <li>
                            <i class="fa fa-arrow-circle-right pr-10 colored"></i> <?php echo $row->ibox_point5;?>
                        </li>

                        <li>
                            <i class="fa fa-arrow-circle-right pr-10 colored"></i> <?php echo $row->ibox_point6;?>
                        </li>
                    </ul>
                </div>
            </div>
            <?php } ?>
    	</div>
	</section>

    <section id='events'>
        <div class="container">
            <div class="row">

            <?php

                global $wpdb;
                $table_name = $wpdb->prefix . 'ksabih_tbp';

                $rows = $wpdb->get_results( "SELECT * FROM $table_name");

                foreach ( $rows as $row ) 
                    { ?>

                <div class="col-md-12">
                    <div class="aligncenter">
                        <h2 class="aligncenter"><?php echo $row->tbp_main_heading;?></h2>
                        <p><?php echo $row->tbp_heading_text;?></p>
                    </div>
                    <br>
                </div>
            <?php };?>
            </div>

            <div class="row">
            <?php
            $args = array (
                'cat'  =>  5
                // 'category_name'  =>  'Courses'
            );

            $my_posts = new WP_Query ($args);

            if ( $my_posts->have_posts() ) :
                while ( $my_posts->have_posts() ) : $my_posts->the_post();
            ?>

                <div class="col-md-4">
                    <div class="post3">
                        <div class="post-thumbnail row ml-0 mr-0">
                            <a href="<?php echo get_the_permalink(get_the_ID() ) ?>">
                                <?php the_post_thumbnail('medium_large') ?>
                            </a>
                        </div>

                        <time datetime="2019-03-01">
                            <h4 class="year" style="color: #E7094C;">
                                <?php the_title();?>
                            </h4>

                            <div class="row">
                                <strong style="margin-left: 15px; color: #262626;">Author: </strong> <?php the_author();?>

                                <strong style="margin-left: 50px; color: #262626;">Posted on: </strong> <?php the_date();?>
                            </div>
                        </time>
                        <p><?php the_excerpt();?></p>
                    </div>
                </div>
                <?php
                    endwhile;
                else :
                    _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
                endif;

                wp_reset_postdata(); ?>
            </div>
        </div>
    </section>

<style>
.pagination {
    padding: 10px;
    text-align: center;
}
.pagination a, .page-numbers.current {
    display: inline-block;
    padding: 10px 15px;
    background: #E7094C;
    border-radius: 5px;
    border: 1px solid #ddd;
    color: #fff;
    margin: 0 5px;
}
.page-numbers.current {
    background: #E7094C;
}
</style>

    <section class="text-center">
        <div class="container">
            <div class="pagination row ml-0 mr-0">
                <?php echo paginate_links() ?>
            </div>
        </div>
    </section>

    <?php
    get_sidebar();
    get_footer();
    ?>
