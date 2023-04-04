<?php

/*
* This template is used to display single page
*/

get_header();

if ( have_posts() ) :
    while ( have_posts() ) : the_post();

        echo "<h1>";
        the_title();
        echo "</h1>";

        the_content();

        the_author();
        echo "<br>";

        the_time();
        echo "<br>";

    endwhile;
else :
    _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
endif;

get_sidebar();
get_footer();
?>