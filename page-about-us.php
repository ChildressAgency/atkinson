<?php get_header(); ?>
<main id="main">
  <div class="container">
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

    <section id="leadership">
      <?php if(have_rows('leadership_team')): ?>
        <div class="row">
          <?php $lt = 0; while(have_rows('leadership_team')): the_row(); ?>
            <?php if($lt % 3 == 0){ echo '<div class="clearfix"></div>'; } ?>
            <div class="col-sm-4">
              <?php
                $team_member_name = get_sub_field('team_member_name');
                $team_member_image = get_sub_field('team_member_image');
                $team_member_image_medium = $team_member_image['sizes']['medium'];
                $team_member_image_large = $team_member_image['url'];
                $team_member_title = get_sub_field('team_member_title');
                $team_member_bio = get_sub_field('team_member_bio');
              ?>
              <a href="#" class="team-member-summary" data-toggle="modal" data-target="#team-member-info" data-member_name="<?php echo $team_member_name; ?>" data-team_member_image="<?php echo $team_member_image_large; ?>" data-team_member_title="<?php echo $team_member_title; ?>" data-team_member_bio="<?php echo $team_member_bio; ?>">
                <img src="<?php echo $team_member_image_medium; ?>" class="img-responsive img-circle center-block" alt="<?php echo $team_member_name; ?>" />
                <h3><?php echo $team_member_name; ?></h3>
                <h4><?php echo $team_member_title; ?></h4>
              </a>
            </div>
          <?php $lt++; endwhile; ?>
        </div>
      <?php endif; ?>
    </section>

    <div class="get-started">
      <h1 class="section-title">Let's get started</h1>
      <hr />
      <p>With over a decade of industry and government experience, Atkinson Aeronautics &amp; Technology has your solution ready.</p>
      <a href="<?php echo home_url('contact-us'); ?>" class="btn-main"><span>Contact Us</span></a>
    </div>

  </div>
</main>

<div id="team-member-info" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="team-member-title">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-5">
            <img src="" id="team-member-image" class="img-responsive img-circle center-block" alt="" />
          </div>
          <div class="col-sm-7">
            <div class="team-member-info">
              <h2 id="team-member-name"></h2>
              <h4 id="team-member-title"></h4>
              <div id="team-member-bio">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>