<?php get_header(); ?>
    <main id="main">
      <div class="container">
        <div class="row">
          <div class="col-sm-9 col-sm-push-3">
            <?php if(have_posts()): while(have_posts()): the_post(); ?>
              <h1 class="page-title"><?php the_title(); ?></h1>
              <h2 class="page-subtitle"><?php echo get_the_date(); ?></h2>
              <section class="page-content">
                <?php the_content(); ?>
              </section>
              <?php
                //$post_permalink = get_the_permalink();
                $post_date = get_the_date('F\<\s\p\a\n\>d\<\/\s\p\a\n\>');
                $post_title = get_the_title();
              ?>
            <?php endwhile; else: ?>
              <p>Sorry, there is nothing to display.</p>
            <?php endif; ?>
          </div>
          <div class="col-sm-3 col-sm-pull-9 border-right">
            <div class="sidebar-widget">
              <h2><a href="<?php echo home_url('blog'); ?>">&lt;&lt;&lt; Return to upcoming events</a></h2>
            </div>
            <div class="sidebar-widget no-margin">
              <div class="loop-blog-date">
                <h1><?php echo $post_date; ?></h1>
              </div>
            </div>
            <div class="sidebar-widget">
              <h2><?php echo $post_title; ?></h2>
            </div>
          </div>
        </div>
      </div>
    </main>
<?php get_footer(); ?>