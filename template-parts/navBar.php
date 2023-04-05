<body>


<!-- 
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <nav class="site-navigation">
                        <?php 
                        wp_nav_menu( array(
                            'theme_location' => 'primary'
                        ) ); 
                        ?>
                    </nav>
                </div>
                <br>
            </div>
        </div> -->



<div id="wrapper" class="home-page">
	<!-- start header -->
	<header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" width="auto" href="<?php bloginfo('url');?>"><?php the_custom_logo();?></a>
                </div>

                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.html">Home</a></li> 
						<li><a href="about.html">About Us</a></li>
						<li><a href="services.html">Services</a></li>
                        <li><a href="courses.html">Courses</a></li>
                        <li><a href="pricing.html">Pricing</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
	</header>
	<!-- end header -->