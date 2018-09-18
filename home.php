<?php get_header(); ?>
    <main id="main">
      <div class="container">
        <h1 class="page-title text-center">Upcoming Events</h1>
        <?php if(have_posts()): while(have_posts()) : the_post(); ?>
          <section class="loop-blog">
            <div class="row">
              <div class="col-sm-7">
                <div class="loop-featured-image">
                  <img src="<?php the_field('featured_image'); ?>" class="img-responsive center-block" alt="" />
                  <div class="share">
                    <span>SHARE THIS</span>
                    <?php 
                      if(function_exists('ADDTOANY_SHARE_SAVE_KIT')){
                        ADDTOANY_SHARE_SAVE_KIT(array('linkname' => get_the_title(), 'linkurl' => get_permalink()));
                      }
                    ?>                    
                  </div>
                </div>
              </div>
              <div class="col-sm-5">
                <div class="loop-blog-item">
                  <div class="loop-blog-date">
                    <h1><?php echo get_the_date('F\<\s\p\a\n\>d\<\/\s\p\a\n\>'); ?></h1>
                  </div>
                  <div class="loop-blog-summary">
                    <h4><?php the_field('post_subtitle'); ?></h4>
                    <h2><?php the_title(); ?></h2>
                    <?php the_excerpt(); ?>
                    <a href="<?php the_permalink(); ?>" class="btn-main"><span>Learn More</span></a>
                  </div>
                </div>
              </div>
            </div>          
          </section>
        <?php endwhile; else: ?>
          <p>There are no upcoming events or posts to display.</p>
        <?php endif; ?>
      </div>
    </main>
<?php get_footer(); ?>