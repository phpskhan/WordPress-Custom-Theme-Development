
  	<section id="banner">
    <!-- Slider -->
        <div id="main-slider" class="flexslider">
            <ul class="slides">


              <?php

                global $wpdb;
                $table_name = $wpdb->prefix . 'ksabih_sliders';

                $rows = $wpdb->get_results( "SELECT * FROM $table_name");

                foreach ( $rows as $row ) 
                    {
              ?>

                <li>
                    <img src="<?php echo $row->slider_image;?>" height="650px;" alt="" />

                    <div class="flex-caption container">

                        <h3><?php echo $row->slider_heading;?></h3>

                        <p><?php echo $row->slider_text;?></p> 

                        <a href="<?php echo $row->slider_image;?>" class="btn btn-theme">Read More</a>
                    </div>
                </li>
        <?php } ?>
            </ul>
        </div>
    </section>

<!--               <li>
                <img src="<?php echo  get_template_directory_uri()?>/img/slides/1.jpg" alt="" />
                <div class="flex-caption container">
                    <h3>Smart Learning..</h3> 
          <p>Doloribus omnis minus temporibus perferendis ipsa<br/> architecto non, magni quam</p> 
          <a href="#" class="btn btn-theme">Read More</a>
                </div>
              </li>
              <li>
                <img src="<?php echo  get_template_directory_uri()?>/img/slides/2.jpg" alt="" />
                <div class="flex-caption container">
                    <h3>Best Educational Campus..</h3> 
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing<br/> elitincidunt eius magni provident.</p> 
					<a href="#" class="btn btn-theme">Read More</a>
                </div>
              </li> -->
            </ul>
        </div>
	<!-- end slider -->