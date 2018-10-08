<?php get_header(); ?>
  <main id="main">
    <div class="container">
      <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <h1 class="page-title"><?php the_title(); ?></h1>
        <?php if(get_field('page_subtitle')): ?>
          <h2 class="page-subtitle"><?php the_field('page_subtitle'); ?></h2>
        <?php endif; ?>

        <div class="page-content">
          <?php if(have_rows('section_layout')): while(have_rows('section_layout')): the_row(); ?>
            
            <?php if(get_row_layout() == 'regular_text'): ?>
            
              <section>
                <?php the_sub_field('the_text'); ?>
              </section>
              
            <?php elseif(get_row_layout() == 'three_images_with_captions'): ?>
            
              <section>
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
              </section>
            
            <?php elseif(get_row_layout() == 'image_left_text_right'): ?>
            
              <section>
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
              </section>
            
            <?php elseif(get_row_layout() == 'service_list'): ?>
            
              <section>
                <h2><?php the_sub_field('service_list_title'); ?></h2>
                <ul class="list-group">
                  <?php if(have_rows('service_list_items')): while(have_rows('service_list_items')) : the_row(); ?>
                    <li class="list-group-item col-sm-6"><?php the_sub_field('list_item'); ?></li>
                  <?php endwhile; endif; ?>
                </ul>
                <div class="clearfix"></div>
              </section>

            <?php elseif(get_row_layout() == 'grid_of_pop_up_items'): ?>

              <section>
                <h2><?php the_sub_field('pop_up_items_section_title'); ?></h2>
                <?php if(have_rows('pop_up_items')): ?>
                  <div class="row">
                    <?php $pui = 0; while(have_rows('pop_up_items')): the_row(); ?>
                      <?php if($pui % 3 == 0){ echo '<div class="clearfix"></div>'; } ?>
                      <div class="col-sm-4">
                        <?php
                          $pop_up_item_title = get_sub_field('pop_up_item_title');
                          $pop_up_item_subtitle = get_sub_field('pop_up_item_subtitle');
                          $pop_up_item_image = get_sub_field('pop_up_item_image');
                          $pop_up_item_image_url = $pop_up_item_image['url'];
                          $pop_up_item_content = get_sub_field('pop_up_item_content');
                        ?>
                        <a href="#" class="pop-up-item" data-toggle="modal" data-target="#pop-up" data-pop_up_item_title="<?php echo $pop_up_item_title; ?>" data-pop_up_item_subtitle="<?php echo $pop_up_item_subtitle; ?>" data-pop_up_item_image_url="<?php echo $pop_up_item_image_url; ?>" data-pop_up_item_content="<?php echo $pop_up_item_content; ?>">
                          <img src="<?php echo $pop_up_item_image_url; ?>" class="img-responsive img-circle center-block" alt="<?php $pop_up_item_title; ?>" />
                          <h3><?php echo $pop_up_item_title; ?></h3>
                          <h4><?php echo $pop_up_item_subtitle; ?></h4>
                        </a>
                      </div>
                    <?php $pui++; endwhile; ?>
                  </div>
                <?php endif; ?>
              </section>

            <?php elseif(get_row_layout() == 'informational_slider'): ?>

              <section>
                <h2><?php the_sub_field('informational_slider_title'); ?></h2>
                <?php 
                  $slides = get_sub_field('informational_slides');
                  if($slides): ?>
                    <div class="row">
                      <?php $s = 0; foreach($slides as $slide): ?>
                        <?php if($s % 4 == 0){ echo '<div class="clearfix"></div>'; } ?>
                        <div class="col-sm-3">
                          <a class="slide-indicator" data-target="#informational-slider" data-slide-to="<?php echo $s; ?>"<?php if($s==0){ echo ' class="active"'; } ?>>
                            <?php $slide_image = $slide['slide_image']['url']; ?>
                            <img src="<?php echo $slide_image; ?>" class="img-responsive img-circle center-block" alt="<?php echo $slide['slide_title']; ?>" />
                            <h3><?php echo $slide['slide_title']; ?></h3>
                          </a>
                        </div>  
                      <?php $s++; endforeach; reset($slides); ?>
                    </div>

                    <div id="informational-slider" class="carousel slide" data-ride="">
                      <div class="carousel-inner" role="listbox">
                        <?php $s1 = 0; foreach($slides as $slide): ?>
                          <div class="item<?php if($s1==0){ echo ' active'; } ?>">
                            <div class="row">
                              <div class="col-sm-5">
                                <img src="<?php echo $slide['slide_image']['url']; ?>" class="img-responsive img-circle center-block" alt="<?php echo $slide['slide_title']; ?>" />
                              </div>
                              <div class="col-sm-7">
                                <div class="slide-content">
                                  <h3><?php echo $slide['slide_title']; ?></h3>
                                  <?php echo $slide['slide_content']; ?>
                                </div>
                              </div>
                            </div>
                          </div>
                        <?php $s1++; endforeach; ?>
                      </div>

                      <a href="#informational-slider" class="left carousel-control" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a href="#informational-slider" class="right carousel-control" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                <?php endif; ?>            
              </section>
              
            <?php endif; ?>
            
          <?php endwhile; endif; ?>
        </div>
      <?php endwhile; endif; ?>
      <div class="get-started">
        <h1 class="section-title">Let's get started</h1>
        <hr />
        <p>With over a decade of industry and government experience, Atkinson Aeronautics &amp; Technology has your solution ready.</p>
        <a href="<?php echo home_url('contact-us'); ?>" class="btn-main"><span>Contact Us</span></a>
      </div>              
    </div>
  </main>
<div id="pop-up" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="pop-up-title">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-5">
            <img src="" id="pop-up-image" class="img-responsive img-circle center-block" alt="" />
          </div>
          <div class="col-sm-7">
            <div class="pop-up-info">
              <h2 id="pop-up-title"></h2>
              <h4 id="pop-up-subtitle"></h4>
              <div id="pop-up-content">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>