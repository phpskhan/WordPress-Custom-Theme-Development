<body>

<style>

.site-branding {
    text-align: center;
    width: 100%;
    clear: both;
}
.site-branding a {
    display: inline-block;
    margin-top: 20px;
}
.site-branding img {
    max-width: 200px;
    max-height: 100px;
}

.site-navigation {
    width: 100%;
    display: block;
    clear: both;
    background: #E7094C;
    height: 60px;
}
.site-navigation ul {
    margin: 0;
    padding: 0;
    list-style: none;
    width: 100%;
    clear: both;
    text-align: center
}
.site-navigation ul li {
    display: inline-block;
    height: 60px;
    margin-left: -4px;
}
.site-navigation ul li a {
    display: inline-block;
    height: 100%;
    padding: 0 40px;
    line-height: 60px;
    color: #f0f0f0;
    border-right: 1px solid #83cb8d;
}
.site-navigation ul li a:hover {
    text-decoration: none;
    background: rgba(0,0,0,0.7)
}
.site-navigation ul li:first-child a {
    border-left: 1px solid 
</style>


    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" style="pading-left: 50px;" href="<?php bloginfo('url');?>"><?php the_custom_logo();?>
            </a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <nav class="site-navigation">
                <?php wp_nav_menu( array(
                    'theme_location' => 'primary'
                    ) ); 
                ?>
            </nav>
      </div>
    </nav>


<div id="wrapper" class="home-page">
