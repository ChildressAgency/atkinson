<?php get_header(); ?>
    <main id="main">
      <div class="container">
        <div class="row">
          <div class="col-sm-9 col-sm-push-3">
            <?php if(have_posts()): while(have_posts()): the_post(); ?>
              <section class="page-content">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <?php the_excerpt(); ?>
              </section>
            <?php endwhile; endif; ?>
          </div>
          <div class="col-sm-3 col-sm-pull-9 border-right">
            <?php if(!is_page('about-us')): ?>
              <div class="sidebar-widget no-margin">
                <h2><a href="<?php echo home_url('about-us'); ?>">About Us</a></h2>
              </div>
            <?php endif; ?>
            <div class="sidebar-widget no-margin">
              <h2><a href="<?php the_field('contracts_link', 'option'); ?>">Contracts</a></h2>
            </div>
            <div class="sidebar-widget no-margin">
              <h2><a href="<?php the_field('careers_link', 'option'); ?>">Careers</a></h2>
            </div>
            <div class="sidebar-widget">
              <h2><a href="<?php the_field('contact-us'); ?>">Contact Us</a></h2>
            </div>
            
            <?php if(!is_page('technology-services')): 
              $tech_page = get_page_by_path('technology-services'); 
              $tech_page_id = get_the_ID($tech_page); ?>
              <div class="sidebar-widget">
                <img src="<?php the_field('secondary_image', $tech_page_id); ?>" class="img-responsive center-block" alt="" />
                <h2><a href="<?php echo home_url('technology-services'); ?>">Technology Services</a></h2>
              </div>
            <?php endif; ?>
            
            <?php if(!is_page('flight-operations')):
              $ops_page = get_page_by_path('flight-operations');
              $ops_page_id = get_the_ID($ops_page); ?>
              <div class="sidebar-widget">
                <img src="<?php the_field('secondary_image', $ops_page_id); ?>" class="img-responsive center-block" alt="" />
                <h2><a href="<?php echo home_url('flight-operations'); ?>">Flight Operations</a></h2>
              </div>
            <?php endif; ?>
             
            <?php if(!is_page('aircraft-maintenance')): 
              $aircraft_page = get_page_by_path('aircraft-maintenance');
              $aircraft_id = get_the_ID($aircraft_page); ?>
              <div class="sidebar-widget">
                <img src="<?php the_field('secondary_image', $aircraft_id); ?>" class="img-responsive center-block" alt="" />
                <h2><a href="<?php echo home_url('aircraft-maintenance'); ?>">Aircraft Maintenance</a></h2>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </main>
<?php get_footer(); ?>