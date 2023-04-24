<?php

/*
* This is main file
*/

get_header();

wp_head();

get_template_part('template-parts/navBar');

get_template_part('template-parts/slider');

?>

	<section class="txt-area">
        <div class="container">
            <img class="img-fluid" src="<?php header_image();?>
            "><br><br>

<!--             <img class="img-fluid" src="<?php echo get_custom_header()->url;?>
            "> -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="aligncenter"><h1 class="aligncenter">Our Courses</h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident, doloribus omnis minus temporibus perferendis nesciunt quam repellendus nulla nemo ipsum odit corrupti consequuntur possimus.</div>
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
                {
                    ?>

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

    <section class="aboutUs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aligncenter"><h2 class="aligncenter">Our Students</h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident, doloribus omnis minus temporibus perferendis nesciunt quam repellendus nulla nemo ipsum odit corrupti consequuntur possimus..</div><br/>
                </div>
            </div> 
    		<div class="row">
                <div class="col-md-6">
                    <img src="<?php echo get_template_directory_uri()?>/img/img1.png" alt="">
                    <div class="space"></div>
                </div>

                <div class="col-md-6">
                    <p>Lorem ipsum dolor sit amet, cadipisicing  sit amet, consectetur adipisicing elit. Atque sed, quidem quis praesentium, ut unde fuga error commodi architecto, oribus omnis minus temporibus perferendis nesciunt quam repellendus nulla nemo ipsum odit corrupti consequuntur possimus, vero mollitia velit ad consectetur. Alias, laborum excepturi nihil autem nemo numquam, ipsa architecto non, magni consequuntlaudantium culpa tenetur at id, beatae pet.</p>

    				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. adipisicing  sit amet, consectetur adipisicing elit. Atque sed, quidem quis praesentium,m deserunt.</p>

                    <ul class="list-unstyled">
                        <li><i class="fa fa-arrow-circle-right pr-10 colored"></i> Lorem ipsum enimdolor sit amet</li>
                        <li><i class="fa fa-arrow-circle-right pr-10 colored"></i> Explicabo deleniti neque aliquid</li>
                        <li><i class="fa fa-arrow-circle-right pr-10 colored"></i> Consectetur adipisicing elit</li>
                        <li><i class="fa fa-arrow-circle-right pr-10 colored"></i> Lorem ipsum dolor sit amet</li>
                        <li><i class="fa fa-arrow-circle-right pr-10 colored"></i> Quo issimos molest quibusdam temporibus</li>
                    </ul>
                </div>
            </div>
    	</div>


	</section>


    <section id='events'>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aligncenter"><h2 class="aligncenter">Our Events</h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident, doloribus omnis minus temporibus perferendis nesciunt quam repellendus nulla nemo ipsum odit corrupti consequuntur possimus.</div><br>
                </div>
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
                            <a href="<?php the_permalink() ?>">
                                <?php the_post_thumbnail('post-thumbnail') ?>
                            </a>
                        </div>

                        <time datetime="2019-03-01"><br><br>
                            <h4 class="year" style="color: #6866e3;">
                                <?php the_title();?>
                            </h4>

                            <h5 class="month">
                                <strong style="color: #6866e3;"> Author : </strong>
                                <?php the_author();?> 
                                <span class="month"><strong style="color: #6866e3;"> Posted on : </strong> <?php the_time();?></span>
                            </h5><br>
                        </time>
                        <p><?php the_excerpt();?></p>
                    </div>
                </div>
<?php
    endwhile;
else :
    _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
endif;

wp_reset_postdata();
?>
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

                

<!-- <img src="<?php echo get_template_directory_uri();
?>/assets/img/banner.png">

<img src="<?php echo get_parent_theme_file_uri();
?>/assets/img/banner.png">
 -->

<?php
get_sidebar();
get_footer();
?>
