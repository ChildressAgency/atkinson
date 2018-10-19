    <footer>
      <div class="container">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-white-large_2018.png" class="img-responsive center-block" alt="Atkinson Aeronautics &amp; Technology" />
        <h3>Atkinson proudly supports:</h3>
        <div class="row">
          <div class="col-sm-4">
            <?php if(have_rows('left_list', 'option')): while(have_rows('left_list', 'option')): the_row(); ?>
              <div class="supported">
                <a href="<?php the_sub_field('left_organization_link', 'option'); ?>">
                  <h4><?php the_sub_field('left_organization_name', 'option'); ?></h4>
                  <?php if(get_sub_field('left_organization_image', 'option')): ?>
                    <img src="<?php the_sub_field('left_organization_image', 'option'); ?>" class="img-responsive center-block" alt="<?php the_sub_field('left_organization_name', 'option'); ?> Logo" />
                  <?php endif; ?>
                </a>
                <p><?php the_sub_field('left_organization_description', 'option'); ?></p>
              </div>
            <?php endwhile; endif; ?>
          </div>
          <div class="col-sm-4">
            <?php if(have_rows('center_list', 'option')): while(have_rows('center_list', 'option')): the_row(); ?>
              <div class="supported">
                <a href="<?php the_sub_field('center_organization_link', 'option'); ?>">
                  <h4><?php the_sub_field('center_organization_name', 'option'); ?></h4>
                  <?php if(get_sub_field('center_organization_image', 'option')): ?>
                    <img src="<?php the_sub_field('center_organization_image', 'option'); ?>" class="img-responsive center-block" alt="<?php the_sub_field('center_organization_name', 'option'); ?> Logo"  />
                  <?php endif; ?>
                </a>
                <p><?php the_sub_field('center_organization_description', 'option'); ?></p>
              </div>
            <?php endwhile; endif; ?>
          </div>
          <div class="col-sm-4">
            <?php if(have_rows('right_list', 'option')): while(have_rows('right_list', 'option')): the_row(); ?>
              <div class="supported">
                <a href="<?php the_sub_field('right_organization_link', 'option'); ?>">
                  <h4><?php the_sub_field('right_organization_name', 'option'); ?></h4>
                  <?php if(get_sub_field('right_organization_image', 'option')): ?>
                    <img src="<?php the_sub_field('right_organization_image', 'option'); ?>" class="img-responsive center-block" alt="<?php the_sub_field('right_organization_name', 'option'); ?> Logo" />
                  <?php endif; ?>
                </a>
                <p><?php the_sub_field('right_organization_description', 'option'); ?></p>
              </div>
            <?php endwhile; endif; ?>
          </div>
        </div>
        <div class="footnote">
          <?php 
            if(!is_user_logged_in()){
              echo '<p><a href="' . home_url('documents') . '">Employee Login</a></p>';
            }
            else{
              echo '<p><a href="' . wp_logout_url(get_permalink()) . '">Logout</a></p>';
            }
          ?>
          <p>&copy;<?php echo date('Y'); ?> Atkinson Aeronautics &amp; Technology</p>
          <p>Website created by <a href="http://childressagency.com">The Childress Agency</a></p>
        </div>
      </div>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>