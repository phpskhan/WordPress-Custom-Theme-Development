<body>
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
<style>
#primary-menu-list  li.menu-item a {
color:#ff0000;
}
.menu-wrapper {
background-color:#bdd1cd; 
}
#primary-menu-list  li.menu-item a:hover {
background-color:#a6e4a5;
color:#666;
border-radius:5px;
}
#primary-menu-list {
    background:#2194af;
    height:60px;
    z-index:170;
    margin:0 auto;
    border-bottom:1px solid #dadada;
    width:100%;
    position:fixed;
    top:0;
    left:0;
    right:0;
    text-align: right;
    padding-left:10px
}

// container class
#header .primary-menu{} 
  
// container class first unordered list
#header .primary-menu ul {} 
  
//unordered list within an unordered list
#header .primary-menu ul ul {} 
  
 // each navigation item
#header .primary-menu li {}
  
// each navigation item anchor
#header .primary-menu li a {} 
  
// unordered list if there is drop down items
#header .primary-menu li ul {} 
  
// each drop down navigation item
#header .primary-menu li li {} 
  
// each drap down navigation item anchor
#header .primary-menu li li a {} 

// Class for Current Page
.current_page_item{} 
  
// Class for Current Category
.current-cat{} 
  
// Class for any other current Menu Item
.current-menu-item{} 
  
// Class for a Category
.menu-item-type-taxonomy{}
   
// Class for Post types
.menu-item-type-post_type{} 
  
// Class for any custom links
.menu-item-type-custom{} 
  
// Class for the home Link
.menu-item-home{} 
</style>
                <?php wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'menu_class'     => 'primary-menu-list',
                ) );
?>

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