<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="">

    <meta http-equiv="Cache-control" content="public">
    <meta http-equiv="Cache-control" content="private">

    <title>Atkinson Aeronautics & Technology</title>
    <?php wp_head(); ?>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <!--[if gte IE 9]
      <style type="text/css">
        .gradient2 {
          filter: none;
        }
      </style>
    <![endif]-->
  </head>
  <body <?php body_class(); ?>>
    <div class="masthead<?php if(is_front_page()){ echo ' homepage clear-bg'; } ?>">
      <div class="container">
        <a href="<?php echo home_url(); ?>" class="navbar-logo"></a>
        <div class="meganav-toggle">
          <span class="hidden-xs">MENU</span>
          <button type="button" class="navbar-toggle">
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
      </div>
    </div>
    <nav id="megaNav">
      <?php 
        $nav_defaults = array(
          'theme_location' => 'header-nav',
          'menu' => '',
          'container' => 'div',
          'container_class' => 'nav-wrapper',
          'container_id' => '',
          'menu_class' => '',
          'menu_id' => '',
          'echo' => true,
          'fallback_cb' => 'atkinson_fallback_menu',
          'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
          'depth' => 2,
          'walker' => new wp_bootstrap_navwalker()
        );
        wp_nav_menu($nav_defaults);

        function atkinson_fallback_menu(){ ?>
          <div class="nav-wrapper">
            <ul>
              <li><a href="<?php echo home_url(); ?>">Home</a></li>
              <li><a href="<?php echo home_url('about-us'); ?>">About Us</a></li>
              <li><a href="<?php echo home_url('technology-services'); ?>">Technology Services</a></li>
              <li><a href="<?php echo home_url('flight-operations'); ?>">Flight Operations</a></li>
              <li><a href="<?php echo home_url('aircraft-maintenance'); ?>">Aircraft Maintenance</a></li>
              <li><a href="<?php echo home_url('blog'); ?>">Upcoming Events</a></li>
              <li><a href="<?php echo home_url('contact-us'); ?>">Contact Us</a></li>
            </ul>
          </div>
      <?php } ?>
    </nav>
    <?php if(is_front_page()): ?>
      <div class="hero-home gradient2">
        <video autoplay loop poster="<?php echo get_stylesheet_directory_uri(); ?>/images/landing-bg.jpg" id="bgvid">
          <source src="<?php echo get_stylesheet_directory_uri(); ?>/images/clouds.mp4" type="video/mp4" />
        </video>
        <div class="hero-home-caption-wrapper">
          <div class="hero-home-caption">
            <h4>service-disabled, veteran-owned small business</h4>
            <h1>Excellence In Service</h1>
            <ul class="mini-nav">
              <li><a href="<?php echo home_url('technology-services'); ?>">Technology</a></li>
              <li class="visible-xs-block"><hr /></li>
              <li><a href="<?php echo home_url('flight-operations'); ?>">Flight Operations</a></li>
              <li class="visible-xs-block"><hr /></li>
              <li><a href="<?php echo home_url('aircraft-maintenance'); ?>">Maintenance</a></li>
            </ul>
            <span class="propeller-icon"></span>
          </div>
            <a href="<?php echo home_url('about-us'); ?>" class="btn-main"><span>About Us</span></a>
        </div>
        <a href="#hero" id="continue" class="hidden-xs"></a>
      </div>
    <?php endif; ?>
    
    <?php
      $hero_image = get_stylesheet_directory_uri() . '/images/airplane-wide.jpg';
      $hero_image_css = 'background-position:center center;';
      if(get_field('hero_image')){
        $hero_image = get_field('hero_image');
      }
      if(get_field('hero_image_css')){
        $hero_image_css = get_field('hero_image_css');
      }
    ?>
    <div class="hero" id="hero" style="background-image:url(<?php echo $hero_image; ?>); <?php echo $hero_image_css; ?>"></div>
