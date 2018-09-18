<?php get_header(); ?>
    <main id="main">
      <div class="container">
        <div class="row">
          <div class="col-sm-9 col-sm-push-3">
            <?php if(have_posts()): while(have_posts()): the_post(); ?>
              <h1 class="page-title"><?php the_title(); ?></h1>
              <h2 class="page-subtitle"><?php the_field('page_subtitle'); ?></h2>
              <?php the_field('page_content'); ?>
            <?php endwhile; endif; ?>
          </div>
          <div class="col-sm-3 col-sm-pull-9 border-right">
            <div class="sidebar-widget">
              <h2>HeadQuarters</h2>
              <p><?php the_field('headquarters_address', 'option'); ?></p>
              <p class="phone"><?php the_field('headquarters_phone', 'option'); ?> Phone<br /><?php the_field('headquarters_fax', 'option'); ?> Fax</p>
              <p>Please send mail correspondence to:</p>
              <p><?php the_field('mail_address', 'option'); ?></p>
              <!--<p>Please send ground deliveries to:</p>
              <p><?php the_field('deliveries_address', 'option'); ?></p>-->
              <p><a href="<?php the_field('careers_link', 'option'); ?>">Careers</a></p>
            </div>
            <?php if(have_rows('other_contacts', 'option')): while(have_rows('other_contacts', 'option')): the_row(); ?>
              <div class="sidebar-widget">
                <h2><?php the_sub_field('contact_title'); ?></h2>
                <?php if(get_sub_field('contact_email')): ?>
                  <p><?php the_sub_field('contact_email'); ?></p>
                <?php endif; ?>
                <?php if(get_sub_field('contact_address')): ?>
                  <p><?php the_sub_field('contact_address'); ?></p>
                <?php endif; ?>
                <?php if(get_sub_field('contact_phone')): ?>
                  <p class="phone"><?php the_sub_field('contact_phone'); ?> Phone
                    <?php if(get_sub_field('contact_fax')): ?>
                      <br /><?php the_sub_field('contact_fax'); ?> Fax
                    <?php endif; ?>
                  </p>
                <?php endif; ?>
              </div>
            <?php endwhile; endif; ?>
          </div>
        </div>
      </div>
    </main>  
<?php get_footer(); ?>