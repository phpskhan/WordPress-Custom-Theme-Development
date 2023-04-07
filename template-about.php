<?php

/*
* Template Name: About Template
*/

get_header();

wp_head();

get_template_part('template-parts/navBar');

get_template_part('template-parts/slider');

?>


<!-- <img src="<?php header_image(); ?>" > -->


<!--     <div class="page-custom-header">
        <?php $img_url = get_the_post_thumbnail_url(get_the_ID(), 'full') ?>
            <img src="<?php echo $img_url ?>" alt="<?php echo get_the_title() ?>" class="img-fluid">
    </div> -->


    <?php if (have_posts() ) :?>
        <?php while ( have_posts() ) : the_post(); ?>

    <section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="pageTitle"><?php the_title(); ?></h2>
            </div>
        </div>
    </div>
    </section>
    
    <section id="content">
        <div class="container">
            <div class="about">
                <div class="row"> 
                    <div class="col-md-12">
                        <div class="about-logo">
                            <?php the_content(); ?>
                        </div>
        <?php endwhile; ?>
    <?php endif; ?>

                                <a href="#" class="btn btn-color">Read more</a>  
                            </div>
                        </div>
                        
                        <hr>
                        <br>
                        
                        <div class="row">
                            <div class="col-md-4">
                                <!-- Heading and para -->
                                <div class="block-heading-two">
                                    <h3><span>Why Choose Us?</span></h3>
                                </div>
                                <p>Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur. <br/><br/>Sed ut perspiciaatis iste natus error sit voluptatem probably haven't heard of them accusamus.</p>
                            </div>
                            <div class="col-md-4">
                                <div class="block-heading-two">
                                    <h3><span>Our Solution</span></h3>
                                </div>      
                                <!-- Accordion starts -->
                                <div class="panel-group" id="accordion-alt3">
                                 <!-- Panel. Use "panel-XXX" class for different colors. Replace "XXX" with color. -->
                                  <div class="panel">   
                                    <!-- Panel heading -->
                                     <div class="panel-heading">
                                        <h4 class="panel-title">
                                          <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseOne-alt3">
                                            <i class="fa fa-angle-right"></i> Accordion Heading Text Item # 1
                                          </a>
                                        </h4>
                                     </div>
                                     <div id="collapseOne-alt3" class="panel-collapse collapse">
                                        <!-- Panel body -->
                                        <div class="panel-body">
                                          Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
                                        </div>
                                     </div>
                                  </div>
                                  <div class="panel">
                                     <div class="panel-heading">
                                        <h4 class="panel-title">
                                          <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseTwo-alt3">
                                            <i class="fa fa-angle-right"></i> Accordion Heading Text Item # 2
                                          </a>
                                        </h4>
                                     </div>
                                     <div id="collapseTwo-alt3" class="panel-collapse collapse">
                                        <div class="panel-body">
                                          Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
                                        </div>
                                     </div>
                                  </div>
                                  <div class="panel">
                                     <div class="panel-heading">
                                        <h4 class="panel-title">
                                          <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseThree-alt3">
                                            <i class="fa fa-angle-right"></i> Accordion Heading Text Item # 3
                                          </a>
                                        </h4>
                                     </div>
                                     <div id="collapseThree-alt3" class="panel-collapse collapse">
                                        <div class="panel-body">
                                          Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
                                        </div>
                                     </div>
                                  </div>
                                  <div class="panel">
                                     <div class="panel-heading">
                                        <h4 class="panel-title">
                                          <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseFour-alt3">
                                            <i class="fa fa-angle-right"></i> Accordion Heading Text Item # 4
                                          </a>
                                        </h4>
                                     </div>
                                     <div id="collapseFour-alt3" class="panel-collapse collapse">
                                        <div class="panel-body">
                                          Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
                                        </div>
                                     </div>
                                  </div>
                                </div>
                                <!-- Accordion ends -->
                                
                            </div>
                            
                            <div class="col-md-4">
                                                        
                        <h3>Molestie consequat</h3>
                        <ul class="list2">
                            <li><a href="#">Eriure dolor in hendrerit in vulpu</a></li>
                            <li><a href="#">Otate velit esse molestie con</a></li>
                            <li><a href="#">Bequat, vel illum dolore eu feugiat</a></li>
                            <li><a href="#">Nulla facilisis at vero eros et</a></li>
                            <li><a href="#">Bumsan et iusto odio dignissim</a></li>
                            <li><a href="#">Equi blandit praesent lup</a></li>
                        </ul> 
                            </div>
                            
                        </div>
                        
                                                
                         
                        <br>
                        <!-- Our Team starts -->
                
                        <!-- Heading -->
                        <div class="block-heading-six">
                            <h4 class="bg-color">Our Team</h4>
                        </div>
                        <br>
                        
                        <!-- Our team starts -->
                        
                        <div class="team-six">
                            <div class="row">
                                <div class="col-md-3 col-sm-6">
                                    <!-- Team Member -->
                                    <div class="team-member">
                                        <!-- Image -->
                                        <img class="img-responsive" src="img/team1.jpg" alt="">
                                        <!-- Name -->
                                        <h4>Johne Doe</h4>
                                        <span class="deg"><strong>Creative</strong></span> 
                                        <p>Perspiciaatis unde omnis iste natus error sit voluptatem accusantium dolore totam rem aperiam.</p>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <!-- Team Member -->
                                    <div class="team-member">
                                        <!-- Image -->
                                        <img class="img-responsive" src="img/team2.jpg" alt="">
                                        <!-- Name -->
                                        <h4>Jennifer</h4>
                                        <span class="deg"><strong>Programmer</strong></span> 
                                        <p>Perspiciaatis unde omnis iste natus error sit voluptatem accusantium dolore totam rem aperiam.</p>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <!-- Team Member -->
                                    <div class="team-member">
                                        <!-- Image -->
                                        <img class="img-responsive" src="img/team3.jpg" alt="">
                                        <!-- Name -->
                                        <h4>Christean</h4>
                                        <span class="deg"><strong>CEO</strong></span> 
                                        <p>Perspiciaatis unde omnis iste natus error sit voluptatem accusantium dolore totam rem aperiam.</p>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <!-- Team Member -->
                                    <div class="team-member">
                                        <!-- Image -->
                                        <img class="img-responsive" src="img/team4.jpg" alt="">
                                        <!-- Name -->
                                        <h4>Kerinele rase</h4>
                                        <span class="deg"><strong>Manager</strong></span> 
                                        <p>Perspiciaatis unde omnis iste natus error sit voluptatem accusantium dolore totam rem aperiam.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Our team ends -->
                      
                        
                    </div>
                                    
                </div>
    </section>
    <section id="clients">
        <div class="container">
                <div class="row">
            <div class="col-md-12">
                <div class="aligncenter"><h2 class="aligncenter">Campus Placement</h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident, doloribus omnis minus ovident, doloribus omnis minus temporibus perferendis nesciunt..</div>
                <br/>
            </div>
        </div>
            <div class="row">
                <div class="col-md-2 col-sm-4 client">
                    <div class="img client1"></div>
                </div>
                <div class="col-md-2 col-sm-4 client">
                    <div class="img client2"></div>
                </div>
                <div class="col-md-2 col-sm-4 client">
                    <div class="img client3"></div>
                </div>
                <div class="col-md-2 col-sm-4 client">
                    <div class="img client1"></div>
                </div>
                <div class="col-md-2 col-sm-4 client">
                    <div class="img client2"></div>
                </div>
                <div class="col-md-2 col-sm-4 client">
                    <div class="img client3"></div>
                </div>
            </div>
        </div>
    </section> 

<?php
get_sidebar();
get_footer();
?>