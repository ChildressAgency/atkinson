<?php get_header(); ?>
    <main id="main">
      <div class="container">
        <div class="row">
          <div class="col-sm-9 col-sm-push-3">
            <?php if(have_posts()): while(have_posts()): the_post(); ?>
              <h1 class="page-title"><?php the_title(); ?></h1>
              <?php if(get_field('page_subtitle')): ?>
                <h2 class="page-subtitle"><?php the_field('page_subtitle'); ?></h2>
              <?php endif; ?>
              <section class="page-content">
                <?php if(have_rows('section_layout')): while(have_rows('section_layout')): the_row(); ?>
                  
                  <?php if(get_row_layout() == 'regular_text'): ?>
                  
                    <?php the_sub_field('the_text'); ?>
                    
                  <?php elseif(get_row_layout() == 'three_images_with_captions'): ?>
                  
                    <div class="row">
                      <div class="col-sm-4">
                        <a href="<?php the_sub_field('left_link'); ?>" class="service-thumbnail">
                          <img src="<?php the_sub_field('left_image'); ?>" class="img-responsive center-block" alt="" />
                          <h2><?php the_sub_field('left_caption'); ?></h2>
                        </a>
                      </div>
                      <div class="col-sm-4">
                        <a href="<?php the_sub_field('center_link'); ?>" class="service-thumbnail">
                          <img src="<?php the_sub_field('center_image'); ?>" class="img-responsive center-block" alt="" />
                          <h2><?php the_sub_field('center_caption'); ?></h2>
                        </a>
                      </div>
                      <div class="col-sm-4">
                        <a href="<?php the_sub_field('right_link'); ?>" class="service-thumbnail">
                          <img src="<?php the_sub_field('right_image'); ?>" class="img-responsive center-block" alt="" />
                          <h2><?php the_sub_field('right_caption'); ?></h2>
                        </a>
                      </div>
                    </div>
                  
                  <?php elseif(get_row_layout() == 'image_left_text_right'): ?>
                  
                    <div class="row service-image-text">
                      <div class="col-sm-5">
                        <img src="<?php the_sub_field('section_image'); ?>" class="img-responsive center-block" alt="" />
                      </div>  
                      <div class="col-sm-7">
                        <h2><?php the_sub_field('section_title'); ?></h2>
                        <?php the_sub_field('section_text'); ?>
                        <?php if(get_field('section_link')): ?>
                          <a href="<?php the_sub_field('section_link'); ?>"><?php the_sub_field('section_link_text'); ?>
                        <?php endif; ?>
                      </div>
                    </div>
                  
                  <?php elseif(get_row_layout() == 'service_list'): ?>
                  
                    <h2><?php the_sub_field('service_list_title'); ?></h2>
                    <ul class="list-group">
                      <?php if(have_rows('service_list_items')): while(have_rows('service_list_items')) : the_row(); ?>
                        <li class="list-group-item col-sm-6"><?php the_sub_field('list_item'); ?></li>
                      <?php endwhile; endif; ?>
                    </ul>
                    <div class="clearfix"></div>
                  
                  <?php endif; ?>
                  
                <?php endwhile; endif; ?>
              </section>
            <?php endwhile; endif; ?>
            <div class="get-started">
              <h1 class="section-title">Let's get started</h1>
              <hr />
              <p>With over a decade of industry and government experience, Atkinson Aeronautics &amp; Technology has your solution ready.</p>
              <a href="<?php echo home_url('contact-us'); ?>" class="btn-main"><span>Contact Us</span></a>
            </div>              
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
              <h2><a href="<?php echo home_url('contact-us'); ?>">Contact Us</a></h2>
            </div>
          
          <?php if(!is_page('about-us')): ?>
            <?php if(!is_page('technology-services')): 
              $tech_page = get_page_by_path('technology-services'); 
              $tech_page_id = $tech_page->ID; ?>
              <div class="sidebar-widget">
                <img src="<?php the_field('secondary_image', $tech_page_id); ?>" class="img-responsive center-block" alt="" />
                <h2><a href="<?php echo home_url('technology-services'); ?>">Technology Services</a></h2>
              </div>
            <?php endif; ?>
            
            <?php if(!is_page('flight-operations')):
              $ops_page = get_page_by_path('flight-operations');
              $ops_page_id = $ops_page->ID; ?>
              <div class="sidebar-widget">
                <img src="<?php the_field('secondary_image', $ops_page_id); ?>" class="img-responsive center-block" alt="" />
                <h2><a href="<?php echo home_url('flight-operations'); ?>">Flight Operations</a></h2>
              </div>
            <?php endif; ?>
             
            <?php if(!is_page('aircraft-maintenance')): 
              $aircraft_page = get_page_by_path('aircraft-maintenance');
              $aircraft_id = $aircraft_page->ID; ?>
              <div class="sidebar-widget">
                <img src="<?php the_field('secondary_image', $aircraft_id); ?>" class="img-responsive center-block" alt="" />
                <h2><a href="<?php echo home_url('aircraft-maintenance'); ?>">Aircraft Maintenance</a></h2>
              </div>
            <?php endif; ?>
          <?php endif; ?>
          </div>
        </div>
      </div>
    </main>

<?php get_footer(); ?>