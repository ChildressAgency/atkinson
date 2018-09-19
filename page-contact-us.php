<?php get_header(); ?>
    <main id="main">
      <div class="container">
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
          <h1 class="page-title"><?php the_title(); ?></h1>
          <h2 class="page-subtitle" style="margin-bottom:0;"><?php the_field('page_subtitle'); ?></h2>
          <section class="contact-info">
            <div class="row">
              <div class="col-sm-6">
                <div class="contact-section">
                  <h2>Headquarters</h2>
                  <p><?php the_field('headquarters_address', 'option'); ?></p>
                  <p class="phone"><?php the_field('headquarters_phone', 'option'); ?> Phone<br /><?php the_field('headquarters_fax', 'option'); ?> Fax</p>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="contact-section">
                  <p>Please send mail correspondence to:</p>
                  <p><?php the_field('mail_address', 'option'); ?></p>
                  <p><a href="<?php the_field('careers_link', 'option'); ?>">Careers</a></p>
                </div>
              </div>
            </div>

            <?php if(have_rows('other_contacts', 'option')): ?>
              <div class="row">
                <?php $i=0; while(have_rows('other_contacts', 'option')): the_row(); ?>
                  <?php if($i%3 == 0){ echo '<div class="clearfix"></div>'; } ?>
                  <div class="col-sm-4">
                    <div class="contact-section">
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
                  </div>
                <?php $i++; endwhile; ?>
              </div>
            <?php endif; ?>
          </section>
          <?php the_field('page_content'); ?>
        <?php endwhile; endif; ?>
      </div>
    </main>  
<?php get_footer(); ?>