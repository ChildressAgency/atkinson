<?php get_header(); ?>
<main id="main">
  <div class="container">
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
      <h1 class="page-title"><?php the_title(); ?></h1>
      <h2 class="page-subtitle" style="margin-bottom:0;"><?php the_field('page_subtitle'); ?></h2>
      <?php the_field('page_content'); ?>

      <section class="contact-info">
        <div class="row">
          <div class="col-sm-6">
            <div class="contact-section">
              <h2>Headquarters</h2>
              <p><?php the_field('headquarters_address', 'option'); ?></p>
              <p class="phone"><?php the_field('headquarters_phone', 'option'); ?> Phone<br /><?php the_field('headquarters_fax', 'option'); ?> Fax</p>
              <p>Please send mail correspondence to:</p>
              <p><?php the_field('mail_address', 'option'); ?></p>
              <p><a href="<?php the_field('careers_link', 'option'); ?>">Careers</a></p>
            </div>

            <?php 
              $other_contacts = get_field('other_contacts', 'option');
              if($other_contacts):
                $num_contacts = count($other_contacts);
                $first_row_limit = ceil(($num_contacts/2) - 1);
                $counter = 1;
                foreach($other_contacts as $contact):
                  //close out first col-sm-6 and open new if we met first_row_limit
                  if($counter == $first_row_limit){ echo '</div><div class="col-sm-6">'; }

                  echo '<div class="contact-section">';
                    echo '<h2>' . $contact['contact_title'] . '</h2>';
                    echo $contact['contact_email'] ? '<p>' . $contact['contact_email'] . '</p>' : '';
                    echo $contact['contact_address'] ? '<p>' . $contact['contact_address'] . '</p>' : '';
                    
                    if($contact['contact_phone']){
                      echo '<p class="phone">' . $contact['contact_phone'] . ' Phone';
                      if($contact['contact_fax']){
                        echo '<br />' . $contact['contact_fax'] . ' Fax</p>';
                      }
                      else{
                        echo '</p>';
                      }
                    }
                    elseif($contact['contact_fax']){
                      echo '<p>' . $contact['contact_fax'] . ' Fax</p>';
                    }
                    
                  echo '</div>'; //end .contact-section

                  $counter++; 
                endforeach; 
              endif; 
            ?>
          </div><?php //end second col-sm-6 ?>
        </div><?php //end row ?>
      </section>
    <?php endwhile; endif; ?>
  </div>
</main>  
<?php get_footer(); ?>